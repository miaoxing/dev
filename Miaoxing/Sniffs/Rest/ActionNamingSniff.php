<?php

class Miaoxing_Sniffs_Rest_ActionNamingSniff implements PHP_CodeSniffer_Sniff
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
     * @inheritdoc
     */
    public function register()
    {
        return [T_FUNCTION];
    }

    /**
     * @inheritdoc
     */
    public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();
        $functionName = $phpcsFile->findNext(T_STRING, $stackPtr);
        $name = trim($tokens[$functionName]['content']);

        if (array_key_exists($name, $this->deprecatedNames)) {
            $error = '不合法的action名称%s,需使用%s替代';
            $data = [$name, $this->deprecatedNames[$name]];
            $phpcsFile->addError($error, $stackPtr, 'Deprecated', $data);
            return;
        }

        if (substr($name, -10) == 'ListAction') {
            $error = '不合法的action名称%s,需使用复数形式替代,如userListAction改为usersAction';
            $data = [$name];
            $phpcsFile->addError($error, $stackPtr, 'Ending', $data);
        }
    }
}
