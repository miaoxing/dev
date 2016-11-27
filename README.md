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

### 0.9.2 (16-11-27)

- 忽略目录改为相对路径,这样之后,可以在vendor中运行phpcs检查子仓库的代码
- 移除Squiz.PHP.DisallowMultipleAssignments,常见例子如设置默认值`$option || $option = 'default';`

### 0.9.1 (16-11-10)

- 设置默认字符为utf8,解决中文Generic.Files.LineLength.TooLong的问题

### 0.9.0 (16-11-09)

- 忽略容易误报的规则 PSR2.ControlStructures.SwitchDeclaration.TerminatingComment
