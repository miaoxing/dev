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

  # 输出包含"Miaoxing"
  'The installed coding standards are MySource, PEAR, PHPCS, PSR1, PSR2, Squiz, Zend and Miaoxing'
  ```

## 更新日志

### 3.0.0 (19-05-21)

- 更新支持 squizlabs/php_codesniffer:^3.3

### 2.0.0 (18-02-04)

- 忽略 node_modules 目录
- 使用 miaoxing-htmllint-cli 替换 htmllint-cli 以支持 htmllint 0.7.0

### 1.0.0 (18-02-03)

- 增加 eslint，stylelint，htmllint-cli 依等赖

### 0.9.6 (18-02-01)

- 增加 phpmd 和 mi-schi/phpmd-extension 依赖

### 0.9.5 (18-01-21)

- 升级到 PHP_CodeSniffer V3
- 忽略自动生成的 docs/AutoComplete.php 文件

### 0.9.4 (16-12-10)

- 自定义MySource.PHP.GetRequestData.SuperglobalAccessed的提示

### 0.9.3 (16-12-01)

- 只检查PHP文件
- 忽略外部类库src/Lib目录

### 0.9.2 (16-11-27)

- 忽略目录改为相对路径,这样之后,可以在vendor中运行phpcs检查子仓库的代码
- 移除Squiz.PHP.DisallowMultipleAssignments,常见例子如设置默认值`$option || $option = 'default';`

### 0.9.1 (16-11-10)

- 设置默认字符为utf8,解决中文Generic.Files.LineLength.TooLong的问题

### 0.9.0 (16-11-09)

- 忽略容易误报的规则 PSR2.ControlStructures.SwitchDeclaration.TerminatingComment
