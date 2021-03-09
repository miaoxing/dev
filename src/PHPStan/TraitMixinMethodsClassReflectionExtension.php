<?php

namespace Miaoxing\CodingStandards\PHPStan;

use PHPStan\Analyser\OutOfClassScope;
use PHPStan\Broker\Broker;
use PHPStan\Reflection\BrokerAwareExtension;
use PHPStan\Reflection\ClassReflection;
use PHPStan\Reflection\FunctionVariant;
use PHPStan\Reflection\MethodReflection;
use PHPStan\Reflection\MethodsClassReflectionExtension;
use PHPStan\Reflection\Mixin\MixinMethodReflection;
use PHPStan\Reflection\ParametersAcceptorSelector;
use PHPStan\Reflection\PropertiesClassReflectionExtension;
use PHPStan\ShouldNotHappenException;
use PHPStan\Type\ArrayType;
use PHPStan\Type\ObjectType;
use PHPStan\Type\StaticType;
use PHPStan\Type\UnionType;
use PHPStan\Type\VerbosityLevel;


/**
 * Allow using `@mixin` with traits
 *
 * @link https://github.com/phpstan/phpstan/issues/3295
 */
class TraitMixinMethodsClassReflectionExtension implements MethodsClassReflectionExtension, BrokerAwareExtension
{
    /**
     * @var Broker
     */
    protected $broker;

    /** @var string[] */
    private $mixinExcludeClasses;

    /**
     * @param string[] $mixinExcludeClasses
     */
    public function __construct(array $mixinExcludeClasses)
    {
        $this->mixinExcludeClasses = $mixinExcludeClasses;
    }

    public function hasMethod(ClassReflection $classReflection, string $methodName): bool
    {
        return $this->findMethod($classReflection, $methodName) !== null;
    }

    public function getMethod(ClassReflection $classReflection, string $methodName): MethodReflection
    {
        $method = $this->findMethod($classReflection, $methodName);
        if ($method === null) {
            throw new ShouldNotHappenException();
        }
        return $method;
    }

    private function findMethod(ClassReflection $classReflection, string $methodName): ?MethodReflection
    {
        $traits = $this->getTraits($classReflection);

        foreach ($traits as $trait) {

            $mixinTypes = $trait->getResolvedMixinTypes();

            foreach ($mixinTypes as $type) {

                if (\count(\array_intersect(\PHPStan\Type\TypeUtils::getDirectClassNames($type),
                        $this->mixinExcludeClasses)) > 0) {
                    continue;
                }

                if (!$type->hasMethod($methodName)->yes()) {
                    continue;
                }

                $method = $type->getMethod($methodName, new OutOfClassScope());
                $static = $method->isStatic();
                if (!$static && $classReflection->hasNativeMethod('__callStatic') && !$classReflection->hasNativeMethod('__call')) {
                    $static = \true;
                }
                return new MixinMethodReflection($method, $static);
            }
        }

        foreach ($classReflection->getParents() as $parentClass) {
            $method = $this->findMethod($parentClass, $methodName);
            if ($method === null) {
                continue;
            }
            return $method;
        }
        return null;
    }

    private function getTraits(ClassReflection $classReflection)
    {
        $traits = $this->getTraitClassesDeep($classReflection->getName());
        return \array_map(function (string $class): ClassReflection {
            return $this->broker->getClass($class);
        }, $traits);
    }

    private function getTraitClassesDeep(string $class)
    {
        $traits = class_uses($class);

        // Get traits of all parent traits
        $traitsToSearch = $traits;
        while (!empty($traitsToSearch)) {
            $newTraits = class_uses(array_pop($traitsToSearch), $autoload);
            $traits = array_merge($newTraits, $traits);
            $traitsToSearch = array_merge($newTraits, $traitsToSearch);
        }

        foreach ($traits as $trait => $same) {
            $traits = array_merge(class_uses($trait, $autoload), $traits);
        }

        return array_unique($traits);
    }

    public function setBroker(Broker $broker): void
    {
        $this->broker = $broker;
    }
}
