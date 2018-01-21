<?php

namespace Miaoxing\Sniffs\Wording;

use PHP_CodeSniffer\Sniffs\Sniff;
use PHP_CodeSniffer\Files\File;

class InconsistentNameSniff implements Sniff
{
    /**
     * @var array
     */
    protected $names = [
        '收件' => '收货', // 如发邮件时确实是收件,可以通过@codingStandardsIgnoreLine忽略检查
    ];

    /**
     * @inheritdoc
     */
    public function register()
    {
        return [T_COMMENT, T_DOC_COMMENT_STRING, T_INLINE_HTML, T_CONSTANT_ENCAPSED_STRING];
    }

    /**
     * @inheritdoc
     */
    public function process(File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();
        $content = $tokens[$stackPtr]['content'];
        if (trim($content) === '') {
            return;
        }

        foreach ($this->names as $search => $replace) {
            if (strpos($content, $search) !== false) {
                $error = '不一致的文案"%s",需使用"%s"替代';
                $data = [$search, $replace];
                $phpcsFile->addError($error, $stackPtr, 'Found', $data);
                return;
            }
        }
    }
}
