# Miaoxing Dev

[![GitHub Workflow Status](https://img.shields.io/github/workflow/status/miaoxing/dev/Build?style=flat-square)](https://github.com/miaoxing/dev/actions)
[![Coverage Status](https://img.shields.io/coveralls/miaoxing/dev.svg?style=flat-square)](https://coveralls.io/r/miaoxing/dev?branch=master)
[![License](http://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](http://www.opensource.org/licenses/MIT)

## PHPCS 使用方法

1. 取出到本地

  ```sh
  git clone https://github.com/miaoxing/dev.git path/to/coding-standards
  ```

2. 加入phpcs的安装目录

  ```sh
  phpcs --config-set installed_paths path/to/coding-standards
  ```

3. 检查安装结果

  ```sh
  phpcs -i

  # 输出包含 "Miaoxing"
  'The installed coding standards are MySource, PEAR, PHPCS, PSR1, PSR2, Squiz, Zend and Miaoxing'
  ```
