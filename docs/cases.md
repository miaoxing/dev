# 案例

#### 问题1

`The method indexAction() has a Cyclomatic Complexity of 17. The configured cyclomatic complexity threshold is 15.`

原因: 方法的条件复杂度过高,一般是存在过多的`if`, `while`, `for`和`case`, `?`

解决: 拆分为多个小方法,如较独立的功能拆分为getXxx,queryXxx,handleXxx

参考:

1. https://phpmd.org/rules/codesize.html#cyclomaticcomplexity

---

#### 问题2

`The method indexAction() has 139 lines of code. Current threshold is set to 100. Avoid really long methods.`

原因: 方法代码行数过多

解决: 拆分为多个小方法,如较独立的功能拆分为getXxx,queryXxx,handleXxx

---

#### 问题3

`Assignments must be the first block of code on a line (Squiz.PHP.DisallowMultipleAssignments.Found)`

原因: 变量赋值不是在一行代码的第一部分

```php
$this->user || $this->user = wei()->user()->findOrInitById($this['userId']);
```

解决: 改为完整的条件语句,使逻辑更清晰

```php
if (!$this->user) {
    $this->user = wei()->user()->findOrInitById($this['userId']);
}
```

#### 问题4

部分检测到的问题是由外部引起的,如引入外部的类

解决: 使用特定的标识屏蔽问题

1. PHPCS https://github.com/squizlabs/PHP_CodeSniffer/wiki/Advanced-Usage#ignoring-files-and-folders
2. PHPMD https://phpmd.org/documentation/suppress-warnings.html
