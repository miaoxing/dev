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
    use TraitMixinTrait;

    /** @var string[] */
    private $mixinExcludeClasses;

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
}
