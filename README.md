Miaoxing Coding Standards
=========================

## 使用方法

1. 取出到本地

  ```sh
  git clone https://github.com/miaoxing/coding-standards.git path/to/coding-standards
  ```

2. 加入phpcs的安装目录

  ```sh
  phpcs --config-set installed_paths path/to/coding-standards
  ```

3. 检查安装结果

  ```sh
  phpcs -i

  # 输出
  'The installed coding standards are MySource, PEAR, PHPCS, PSR1, PSR2, Squiz, Zend and Miaoxing'
  ```
