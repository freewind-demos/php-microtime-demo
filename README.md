Php Measure Execution Time Demo
================================

`microtime`看起来是获取micro seconds，实际上获取的是seconds + 小数部分的micro seconds

利用php中的引用操作符`&`，可以做到只用一个参数就能记录每次新的调用时间，到挺方便。


```
php hello.php
```
