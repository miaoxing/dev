<?php

namespace Miaoxing\Sniffs\Rest;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;

class ActionNamingSniff implements Sniff
{
    /**
     * @var array
     */
    protected $deprecatedNames = [
        'addAction' => 'newAction',
        'listsAction' => 'indexAction',
        'defaultsAction' => 'defaultAction',
        'detailAction' => 'showAction',
        'infoAction' => 'showAction',
    ];

    /**
     * {@inheritdoc}
     */
    public function register()
    {
        return [\T_FUNCTION];
    }

    /**
     * {@inheritdoc}
     */
    public function process(File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();
        $functionName = $phpcsFile->findNext(\T_STRING, $stackPtr);
        $name = trim($tokens[$functionName]['content']);

        if ('Action' !== substr($name, -6)) {
            return;
        }

        if (array_key_exists($name, $this->deprecatedNames)) {
            $error = '不合法的action名称%s,需使用%s替代';
            $data = [$name, $this->deprecatedNames[$name]];
            $phpcsFile->addError($error, $stackPtr, 'Deprecated', $data);
            return;
        }

        if ('ListAction' == substr($name, -10)) {
            $error = '不合法的action名称%s,需使用复数形式替代,如userListAction改为usersAction';
            $data = [$name];
            $phpcsFile->addError($error, $stackPtr, 'Ending', $data);
            return;
        }

        if ('testAction' == substr($name, -10)) {
            $error = '不合法的action名称%s,如果是测试代码,请在测试后尽快删除';
            $data = [$name];
            $phpcsFile->addError($error, $stackPtr, 'Test', $data);
            return;
        }

        if (7 == strlen($name)) {
            $error = 'action名称%s过短';
            $data = [$name];
            $phpcsFile->addError($error, $stackPtr, 'TooShort', $data);
            return;
        }
    }
}
