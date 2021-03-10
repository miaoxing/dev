## [6.3.2](https://github.com/miaoxing/dev/compare/v6.3.1...v6.3.2) (2021-03-10)


### Bug Fixes

* **eslint:** 忽略插件下的 js 文件 ([cd5cf9a](https://github.com/miaoxing/dev/commit/cd5cf9a4d76f4126a03d66788a0cbc4958fa9a2b))

## [6.3.1](https://github.com/miaoxing/dev/compare/v6.3.0...v6.3.1) (2021-03-09)


### Bug Fixes

* **phpstan:** 解决 Static call to instance method Wei\IsXxx::xxx(). ([094ace6](https://github.com/miaoxing/dev/commit/094ace63b0c4e99e88ec69c5b31498f90675f26c))

# [6.3.0](https://github.com/miaoxing/dev/compare/v6.2.0...v6.3.0) (2021-03-09)


### Bug Fixes

* __construct 参数可能传入其他类，改为接口 ([f143a13](https://github.com/miaoxing/dev/commit/f143a1344fb992cbf88b9daef2676a314d68d505))
* 排除 no_unset_on_property 规则 ([37365cf](https://github.com/miaoxing/dev/commit/37365cf23b7e14954723f67889abda8e94a48b1f))
* 服务方法可能定义在 trait 上 ([4a31236](https://github.com/miaoxing/dev/commit/4a3123634850947b040523f24aeb153ca58bfcae))


### Features

* **phpstan:** 识别 trait 中使用 `[@mixin](https://github.com/mixin)` 的属性 ([ca08011](https://github.com/miaoxing/dev/commit/ca0801136a0761ae7a260f701c05a4a057c198b1))
* **phpstan:** 识别 trait 中使用 `[@mixin](https://github.com/mixin)` 的方法 ([b556b47](https://github.com/miaoxing/dev/commit/b556b47003e8a409aaeabef9b998813d3b50bd43))
* phpmd 脚本允许传入自定义参数 ([e701fcc](https://github.com/miaoxing/dev/commit/e701fcc3663ffbe822a7d657da9e5d4ad7130a6e))
* 支持识别 `V::xxx()->xxx()` 调用 ([842dcfc](https://github.com/miaoxing/dev/commit/842dcfcf6cd1389d32a3a737813a621e1bac00a9))

# [6.2.0](https://github.com/miaoxing/dev/compare/v6.1.2...v6.2.0) (2021-03-05)


### Features

* 支持 PHP 8 ([c22f20a](https://github.com/miaoxing/dev/commit/c22f20a18c9658228dc40cdd4627a9ac3b3b2670))

## [6.1.2](https://github.com/miaoxing/dev/compare/v6.1.1...v6.1.2) (2020-09-25)


### Bug Fixes

* 指定 jest-cli 版本，解决 "TypeError: (0 , _jestUtil(...).formatTime) is not a function" ([7c82cd4](https://github.com/miaoxing/dev/commit/7c82cd4cbcc97a42c49c3aafdc99bbef99837c4b))





### Dependencies

* **jest-preset-miaoxing:** upgrade from 0.2.0 to 0.2.1

## [6.1.1](https://github.com/miaoxing/dev/compare/v6.1.0...v6.1.1) (2020-08-17)


### Bug Fixes

* bash false 判断不用加 [[]] ([344d4c9](https://github.com/miaoxing/dev/commit/344d4c9fcf4a612f356cdf26e01616579bfc9b87))
* 解决 phpmnd 安装需配置 repositories 的问题 ([cb43207](https://github.com/miaoxing/dev/commit/cb432075dc2173ab5e97b2743adb0471b77378b9))





### Dependencies

* **jest-preset-miaoxing:** upgrade from 0.1.0 to 0.2.0

# [6.1.0](https://github.com/miaoxing/dev/compare/v6.0.0...v6.1.0) (2020-08-14)


### Bug Fixes

* **release:** 发布 npm 失败 ([2f313ac](https://github.com/miaoxing/dev/commit/2f313acd8abb40fcaa9e092877ff1cc315f0c588))
* 去掉 wei/wei 依赖，改为内置类 ([f89ae43](https://github.com/miaoxing/dev/commit/f89ae438152d2ad2164c1d7d20a9c0088ea1f1eb))


### Features

* 增加 babel-preset-miaoxing 和 jest-preset-miaoxing 依赖 ([a013c11](https://github.com/miaoxing/dev/commit/a013c113159be9c528644eb0f88908490bb4a6fc))

# 0.1.0 (2020-08-14)


### Bug Fixes

* 去掉 wei/wei 依赖，改为内置类 ([943064a](https://github.com/miaoxing/dev/commit/f89ae438152d2ad2164c1d7d20a9c0088ea1f1eb))


### Features

* 增加 babel-preset-miaoxing 和 jest-preset-miaoxing 依赖 ([10e6c6f](https://github.com/miaoxing/dev/commit/a013c113159be9c528644eb0f88908490bb4a6fc))





### Dependencies

* **babel-preset-miaoxing:** upgrade from 0.1.3 to 0.1.4

# [6.0.0](https://github.com/miaoxing/dev/compare/v5.3.2...v6.0.0) (2020-08-13)


### Code Refactoring

* rename from coding-standards to dev ([08ce7c0](https://github.com/miaoxing/dev/commit/08ce7c08575d8f5a352d41a2108aa5d0ffb9f803))


### BREAKING CHANGES

* rename from coding-standards to dev

## [5.3.2](https://github.com/miaoxing/dev/compare/v5.3.1...v5.3.2) (2020-08-13)


### Bug Fixes

* **eslint:** no-unused-vars 设置 ignoreRestSiblings 为 true ([9cfc415](https://github.com/miaoxing/dev/commit/9cfc415808f9fad140fc3f8a4d64215670d6ad69))

## [5.3.1](https://github.com/miaoxing/dev/compare/v5.3.0...v5.3.1) (2020-08-11)


### Bug Fixes

* **phpmnd:** add bin file ([d0d1312](https://github.com/miaoxing/dev/commit/d0d1312b9141e8a9b6cb180dcbd4bcf306a47ba2))

# [5.3.0](https://github.com/miaoxing/dev/compare/v5.2.1...v5.3.0) (2020-08-11)


### Features

* **phpmnd:** add phpmnd to check magic number ([20471b4](https://github.com/miaoxing/dev/commit/20471b4e316fd5168b8a16952ba8ffe88d14654d))

## [5.2.1](https://github.com/miaoxing/dev/compare/v5.2.0...v5.2.1) (2020-08-04)


### Bug Fixes

* **php-cs-fixer:** 禁用 php_unit_internal_class，会将 Test 结尾的类都加上 [@internal](https://github.com/internal) ([9e848ee](https://github.com/miaoxing/dev/commit/9e848ee82bfe3c6964e5d375b8d83d2da079ff46))

# [5.2.0](https://github.com/miaoxing/dev/compare/v5.1.5...v5.2.0) (2020-07-26)


### Bug Fixes

* **phpcs:** 排除 PrivateNoUnderscore 规则，根据 PSR-12 不需要下划线 ([8bd0b00](https://github.com/miaoxing/dev/commit/8bd0b007eb62dd9e11c0d21df766733e9bfebda9))


### Features

* **phpcs:** 增加 wp-coding-standards/wpcs, 改用 wp 的 NoSilencedErrors ([c8e6cdd](https://github.com/miaoxing/dev/commit/c8e6cdddfa517e5f376a92bcf88c7c8ddd17c75a))

## [5.1.5](https://github.com/miaoxing/dev/compare/v5.1.4...v5.1.5) (2020-07-25)


### Bug Fixes

* **phpmd:** 允许更多短变量名和方法名 ([8bf4b18](https://github.com/miaoxing/dev/commit/8bf4b181174da3e5249c458cbae432f350032775))
* **phpmd:** 允许构造函数中实例化异常类 ([addc430](https://github.com/miaoxing/dev/commit/addc430df16df0e84200343943c5ac89b9d8f4e3))
* **phpmd:** 允许构造函数中实例化特定的类 ([d0620b0](https://github.com/miaoxing/dev/commit/d0620b0cf4675e49225b87912088e136cbbcc929))

## [5.1.4](https://github.com/miaoxing/dev/compare/v5.1.3...v5.1.4) (2020-07-24)


### Bug Fixes

* 允许 $os 变量 ([4c01a39](https://github.com/miaoxing/dev/commit/4c01a390c0d8d8d64d71fc57d9533a96a79b0b3d))

## [5.1.3](https://github.com/miaoxing/dev/compare/v5.1.2...v5.1.3) (2020-07-24)


### Bug Fixes

* **dep:** 更新 wei/wei 到 0.9.24 ([f5b3b1a](https://github.com/miaoxing/dev/commit/f5b3b1a7587e026fa48b0a5677cbf18fca3e894e))

## [5.1.2](https://github.com/miaoxing/dev/compare/v5.1.1...v5.1.2) (2020-07-12)


### Bug Fixes

* **deps:** bump npm from 6.14.5 to 6.14.6 ([be080fb](https://github.com/miaoxing/dev/commit/be080fb9b49ecbd82bd326a229a89520c5e19acd))

## [5.1.1](https://github.com/miaoxing/dev/compare/v5.1.0...v5.1.1) (2020-06-24)


### Bug Fixes

* **phpstan:** 更新 phpstan/phpstan 到 ^0.12.30 ([126cf78](https://github.com/miaoxing/dev/commit/126cf78dd41028fbb1f4481a4d7b9e048b6daaa1))

# [5.1.0](https://github.com/miaoxing/dev/compare/v5.0.0...v5.1.0) (2020-06-21)


### Bug Fixes

* **phpstan:** 插件目录不在 vendor 中会提示 Could not read file ([de8dcab](https://github.com/miaoxing/dev/commit/de8dcab0faf9fb7fb73a46c7c56e9f4746394ac7))
* **phpstan:** 移除 level 参数，实际无效，会提示 No rules detected ([59036eb](https://github.com/miaoxing/dev/commit/59036eb938adc37b7eba2128b9735cf85c9b7495))


### Features

* **phpstan:** 增加默认的配置文件 ([502c4e8](https://github.com/miaoxing/dev/commit/502c4e82a1c3b1bcf8e997566d48898b9853ee66))

# [5.0.0](https://github.com/miaoxing/dev/compare/v4.2.0...v5.0.0) (2020-06-21)


### Bug Fixes

* **phpstan:** 需指定加载目录 ([60bd52f](https://github.com/miaoxing/dev/commit/60bd52f1f0a3b3ac686a3fb4c33c5541106bcbe3))
* php-cs-fixer fix 命令没有生效 ([3a062b6](https://github.com/miaoxing/dev/commit/3a062b6e03e7ab2c03fefa3066f83f15c1550ab2))
* phpcs 排除和 js 模板语法冲突的规则 ([14f711d](https://github.com/miaoxing/dev/commit/14f711dcd115b51d4172cb2cda7e21f75e24de47))
* 增加 miaoxing-jest 命令 ([4b02a77](https://github.com/miaoxing/dev/commit/4b02a77619b88525cac3d035b8c828a3e2ed44db))
* 忽略目录下没有匹配的文件的情况 ([654cc60](https://github.com/miaoxing/dev/commit/654cc60c3c06b46892a9b2bb73a4ee9bc2f2cedc))
* 移除 react/display-name 规则 ([751812f](https://github.com/miaoxing/dev/commit/751812f87d55069e06e7338a694c1bb13073acf0))


### Code Refactoring

* 更新 stylelint 和配置 ([3a897c9](https://github.com/miaoxing/dev/commit/3a897c90e845a0e2d9ee3b7be6d44734354d159a))


### Features

* 允许命令结尾传入 fix 来执行 phpcbf，php-cs-fixer 修复操作 ([c19799c](https://github.com/miaoxing/dev/commit/c19799ca351069d8d632cd01e7cd5275dc6868d1))
* 初始化 jest ([460c4ee](https://github.com/miaoxing/dev/commit/460c4eedf2816a58301cb4ea2a32d1235bd61dc1))
* 增加 phpstan 和处理 wei 的扩展 ([0734113](https://github.com/miaoxing/dev/commit/0734113323d23aa691631a649beb43b91774cb0d))
* 增加默认 stylelintignore ([74669ad](https://github.com/miaoxing/dev/commit/74669ade6237e0b879a0ac0c842876369e35c040))


* refactor!: 简化 eslint 配置 ([5a356ee](https://github.com/miaoxing/dev/commit/5a356ee99d2d4fda522d15b506e5592233ad7f80))


### BREAKING CHANGES

* 更新 stylelint 和配置
* 简化 eslint 配置

# [5.0.0-beta.9](https://github.com/miaoxing/dev/compare/v5.0.0-beta.8...v5.0.0-beta.9) (2020-06-21)


### Bug Fixes

* **phpstan:** 需指定加载目录 ([60bd52f](https://github.com/miaoxing/dev/commit/60bd52f1f0a3b3ac686a3fb4c33c5541106bcbe3))

# [5.0.0-beta.8](https://github.com/miaoxing/dev/compare/v5.0.0-beta.7...v5.0.0-beta.8) (2020-06-21)


### Features

* 增加 phpstan 和处理 wei 的扩展 ([0734113](https://github.com/miaoxing/dev/commit/0734113323d23aa691631a649beb43b91774cb0d))

# [5.0.0-beta.7](https://github.com/miaoxing/dev/compare/v5.0.0-beta.6...v5.0.0-beta.7) (2020-06-16)


### Bug Fixes

* 移除 react/display-name 规则 ([751812f](https://github.com/miaoxing/dev/commit/751812f87d55069e06e7338a694c1bb13073acf0))

# [5.0.0-beta.6](https://github.com/miaoxing/dev/compare/v5.0.0-beta.5...v5.0.0-beta.6) (2020-06-16)


### Bug Fixes

* phpcs 排除和 js 模板语法冲突的规则 ([14f711d](https://github.com/miaoxing/dev/commit/14f711dcd115b51d4172cb2cda7e21f75e24de47))

# [5.0.0-beta.5](https://github.com/miaoxing/dev/compare/v5.0.0-beta.4...v5.0.0-beta.5) (2020-06-15)


### Bug Fixes

* 增加 miaoxing-jest 命令 ([4b02a77](https://github.com/miaoxing/dev/commit/4b02a77619b88525cac3d035b8c828a3e2ed44db))

# [5.0.0-beta.4](https://github.com/miaoxing/dev/compare/v5.0.0-beta.3...v5.0.0-beta.4) (2020-06-15)


### Bug Fixes

* php-cs-fixer fix 命令没有生效 ([3a062b6](https://github.com/miaoxing/dev/commit/3a062b6e03e7ab2c03fefa3066f83f15c1550ab2))
* 忽略目录下没有匹配的文件的情况 ([654cc60](https://github.com/miaoxing/dev/commit/654cc60c3c06b46892a9b2bb73a4ee9bc2f2cedc))


### Features

* 初始化 jest ([460c4ee](https://github.com/miaoxing/dev/commit/460c4eedf2816a58301cb4ea2a32d1235bd61dc1))

# [5.0.0-beta.3](https://github.com/miaoxing/dev/compare/v5.0.0-beta.2...v5.0.0-beta.3) (2020-06-10)


### Features

* 增加默认 stylelintignore ([74669ad](https://github.com/miaoxing/dev/commit/74669ade6237e0b879a0ac0c842876369e35c040))

# [5.0.0-beta.2](https://github.com/miaoxing/dev/compare/v5.0.0-beta.1...v5.0.0-beta.2) (2020-06-10)


### Code Refactoring

* 更新 stylelint 和配置 ([3a897c9](https://github.com/miaoxing/dev/commit/3a897c90e845a0e2d9ee3b7be6d44734354d159a))


### BREAKING CHANGES

* 更新 stylelint 和配置

# [5.0.0-beta.1](https://github.com/miaoxing/dev/compare/v4.3.0-beta.1...v5.0.0-beta.1) (2020-06-10)


* refactor!: 简化 eslint 配置 ([5a356ee](https://github.com/miaoxing/dev/commit/5a356ee99d2d4fda522d15b506e5592233ad7f80))


### BREAKING CHANGES

* 简化 eslint 配置

# [4.3.0-beta.1](https://github.com/miaoxing/dev/compare/v4.2.0...v4.3.0-beta.1) (2020-06-10)


### Features

* 允许命令结尾传入 fix 来执行 phpcbf，php-cs-fixer 修复操作 ([c19799c](https://github.com/miaoxing/dev/commit/c19799ca351069d8d632cd01e7cd5275dc6868d1))

# [4.2.0](https://github.com/miaoxing/dev/compare/v4.1.1...v4.2.0) (2020-06-10)


### Features

* 允许命令结尾传入 fix 来执行 eslint, stylelint 修复操作 ([8e2d4c1](https://github.com/miaoxing/dev/commit/8e2d4c1d004f3bdcf13608d49ab228946d41d186))
* 允许命令结尾传入 fix 来执行 phpcbf，php-cs-fixer 修复操作 ([d2518da](https://github.com/miaoxing/dev/commit/d2518da6fed717727f970838c59a64ce7c216d98))

## [4.1.1](https://github.com/miaoxing/dev/compare/v4.1.0...v4.1.1) (2020-06-09)


### Bug Fixes

* 配置未更新 ([2d75abf](https://github.com/miaoxing/dev/commit/2d75abfb84557aa1100c30fcd1b37ab1cc2f3748))

# [4.1.0](https://github.com/miaoxing/dev/compare/v4.0.1...v4.1.0) (2020-06-09)


### Features

* 增加更多检查目录 ([42f83d0](https://github.com/miaoxing/dev/commit/42f83d029c83add19ecb456cbb3021c9913897bd))

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
