# [5.0.0-beta.2](https://github.com/miaoxing/coding-standards/compare/v5.0.0-beta.1...v5.0.0-beta.2) (2020-06-10)


### Code Refactoring

* 更新 stylelint 和配置 ([3a897c9](https://github.com/miaoxing/coding-standards/commit/3a897c90e845a0e2d9ee3b7be6d44734354d159a))


### BREAKING CHANGES

* 更新 stylelint 和配置

# [5.0.0-beta.1](https://github.com/miaoxing/coding-standards/compare/v4.3.0-beta.1...v5.0.0-beta.1) (2020-06-10)


* refactor!: 简化 eslint 配置 ([5a356ee](https://github.com/miaoxing/coding-standards/commit/5a356ee99d2d4fda522d15b506e5592233ad7f80))


### BREAKING CHANGES

* 简化 eslint 配置

# [4.3.0-beta.1](https://github.com/miaoxing/coding-standards/compare/v4.2.0...v4.3.0-beta.1) (2020-06-10)


### Features

* 允许命令结尾传入 fix 来执行 phpcbf，php-cs-fixer 修复操作 ([c19799c](https://github.com/miaoxing/coding-standards/commit/c19799ca351069d8d632cd01e7cd5275dc6868d1))

# [4.2.0](https://github.com/miaoxing/coding-standards/compare/v4.1.1...v4.2.0) (2020-06-10)


### Features

* 允许命令结尾传入 fix 来执行 eslint, stylelint 修复操作 ([8e2d4c1](https://github.com/miaoxing/coding-standards/commit/8e2d4c1d004f3bdcf13608d49ab228946d41d186))
* 允许命令结尾传入 fix 来执行 phpcbf，php-cs-fixer 修复操作 ([d2518da](https://github.com/miaoxing/coding-standards/commit/d2518da6fed717727f970838c59a64ce7c216d98))

## [4.1.1](https://github.com/miaoxing/coding-standards/compare/v4.1.0...v4.1.1) (2020-06-09)


### Bug Fixes

* 配置未更新 ([2d75abf](https://github.com/miaoxing/coding-standards/commit/2d75abfb84557aa1100c30fcd1b37ab1cc2f3748))

# [4.1.0](https://github.com/miaoxing/coding-standards/compare/v4.0.1...v4.1.0) (2020-06-09)


### Features

* 增加更多检查目录 ([42f83d0](https://github.com/miaoxing/coding-standards/commit/42f83d029c83add19ecb456cbb3021c9913897bd))

## 4.0.1 (2020-05-22)

* npm 包增加 eslint, stylelint 的配置文件

## 4.0.0 (2020-05-22)

* 忽略 Squiz.Commenting.BlockComment.SingleLine 规则
* 更新支持 mi-schi/phpmd-extension: ^4.3
* 增加 miaoxing-phpmd, miaoxing-phpcs, miaoxing-php-cs-fixer, miaoxing-phpunit, miaoxing-eslint, miaoxing-stylelint 命令
* 移除已不再更新的 htmllint

## 3.0.0 (2019-05-21)

* 更新支持 squizlabs/php_codesniffer:^3.3

## 2.0.0 (2018-02-04)

* 忽略 node_modules 目录
* 使用 miaoxing-htmllint-cli 替换 htmllint-cli 以支持 htmllint 0.7.0

## 1.0.0 (2018-02-03)

* 增加 eslint，stylelint，htmllint-cli 依等赖

## 0.9.6 (2018-02-01)

* 增加 phpmd 和 mi-schi/phpmd-extension 依赖

## 0.9.5 (2018-01-21)

* 升级到 PHP_CodeSniffer V3
* 忽略自动生成的 docs/AutoComplete.php 文件

## 0.9.4 (2016-12-10)

* 自定义MySource.PHP.GetRequestData.SuperglobalAccessed的提示

## 0.9.3 (2016-12-01)

* 只检查PHP文件
* 忽略外部类库src/Lib目录

## 0.9.2 (2016-11-27)

* 忽略目录改为相对路径,这样之后,可以在vendor中运行phpcs检查子仓库的代码
* 移除Squiz.PHP.DisallowMultipleAssignments,常见例子如设置默认值`$option || $option = 'default';`

## 0.9.1 (2016-11-10)

* 设置默认字符为utf8,解决中文Generic.Files.LineLength.TooLong的问题

## 0.9.0 (2016-11-09)

* 忽略容易误报的规则 PSR2.ControlStructures.SwitchDeclaration.TerminatingComment
