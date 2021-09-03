# thinkphp Dispatch扩展
## 新增 `Generator` `ToResponse` 接口
## 控制器返回可以是实现了以上任意一个接口的类成员

# 安装

---
```shell
composer require death_satan/thinkphp-dispatch --dev
```
---
# 优先级
## `ToResponse` `>` `Generator`

---
# 常见问题

---
- 安装后在控制器中返回继承了接口的类提示错误 (执行`composer update`)
---