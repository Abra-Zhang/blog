# 个人博客开发

## 关于
之前自己开发了一版博客，但是那时候刚刚入门，做出来的东西自己都看不下去，这次重新开发，并准备上线使用，作为自己的博客。框架使用的是laravel，配合bootstrap进行开发。

## 分支解释及命名规范
master - 功能测试稳定无误后进行合入，只合并 dev 分支代码一起添加标签，不直接 commit 和 push；
dev - 测试分支，各功能开发后合入进行测试,以及合并 readme，测试通过后合入 master；
其余分支：采用 **名字或年月日-功能名称-功能类别** 的命名方式来进行命名。如，'20170817-user-login-new'；

## 主要框架、插件等
* 框架使用的是 Laravel 5.5，前端框架为 Bootstrap 4.0；
* 前端模板使用的是 Bootstrap 官网 Blog 样例：by <a href="https://twitter.com/mdo">@mdo</a>
* 文本编辑器使用的是 editor.md markdown编辑工具（通过 https://github.com/LaravelChen/laravel-editormd 的扩展使用）;
* 评论功能使用的是 livere 的评论插件；

## 版本号及说明
版本号：主版本号.此版本号.修正版本号

`
局部修改或 bug 修正时，主版本号和子版本号都不变，修正版本号加 1；
在原有的基础上增加了部分功能时，主版本号不变，子版本号加 1，修正版本号复位为 0；
进行了重大修改或局部修正累积较多，导致项目整体发生全局变化时，主版本号加 1；
`

* v3.1.1 修复百度统计代码环境载入 bug；
* v3.1.0 添加百度统计；
* v3.0.3 修复首页文章摘要内有图情况下，图片样式显示错误的问题；
* v3.0.2 增加 favicon.ico;
* v3.0.1 将 bootstrap 从 4.0.0 升级到 4.3.1以上版本，增强安全性；
* v3.0.0 修改博客主题，换成简约黑白线条风格；重做后台，简化功能和逻辑；去除暂时多余且无用的功能，只保留博文内容；增加七牛资源加速；增加评论功能，使用来必立（livere）；
* v2.0.1 修改博客页脚样式换行bug
* v2.0.0 博客前后端分离 & UI 更新, UI 参考了 https://github.com/Huxpro/huxpro.github.io 上面的前端设计，但并未使用其代码；
* v1.1.0 增加文章修改功能;
* v1.0.1 修复时间戳问题，以东八区时间为准；
* v1.0.0 第一版博客，完成了文章的增删查，首页布局，用户的增删改查；
