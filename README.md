# 个人博客开发

## 关于
之前自己开发了一版博客，但是那时候刚刚入门，做出来的东西自己都看不下去，这次重新开发，并准备上线使用，作为自己的博客。框架使用的是laravel，配合bootstrap进行开发。

## 分支解释及命名规范
master - 功能测试稳定无误后进行合入，只合并 dev 分支代码一起添加标签，不直接 commit 和 push；
dev - 测试分支，各功能开发后合入进行测试,以及合并 readme，测试通过后合入 master；
其余分支：采用 **年月日-功能名称-功能类别** 的命名方式来进行命名。如，'20170817-user-login-new'；

## 功能与完成情况（持续更新，直至结束）
- [x] 网站首页页面搭建 - 20170815
- [x] 用户注册登录 - 20170816
- [x] 用户资料修改 - 20170818
- [x] 管理员后台功能入口 - 20170822
- [x] 用户管理（列表显示以及删除功能） - 20170822
- [x] 文章相关 - 20170828
- [x] 写文章，用了 Editor.md 编辑器 - 20170830
- [x] 浏览文章，需要将 markdown 语法转换成 html - 20170830
- [x] 将框架升级至 5.5 LTS - update-laravel-framework
- [x] 首页开发 - 20170831
- [x] 博客前后端分离 & UI 更新 - 20180217
- 评论相关
...

## 版本号及说明
版本号：主版本号.此版本号.修正版本号
`
局部修改或 bug 修正时，主版本号和子版本号都不变，修正版本号加 1；
在原有的基础上增加了部分功能时，主版本号不变，子版本号加 1，修正版本号复位为 0；
进行了重大修改或局部修正累积较多，导致项目整体发生全局变化时，主版本号加 1；
`
* v2.0.0 博客前后端分离 & UI 更新, UI 参考了 https://github.com/Huxpro/huxpro.github.io 上面的前端设计，但并未使用其代码；
* v1.1.0 增加文章修改功能;
* v1.0.1 修复时间戳问题，以东八区时间为准；
* v1.0.0 第一版博客，完成了文章的增删查，首页布局，用户的增删改查；


## 主要文件结构与文件说明（持续更新，直至结束）
|目录|文件|说明|
|:--|:--|:--|
|/app/Http/Controllers/||控制器文件目录|
||HomeController.php|页面控制器|
||PostsController.php|博文控制器|
|/app/Models/||模型文件目录|
||Post.php|博文模型文件|
||User.php|用户模型文件(v2.*版本开始不再使用，但暂时保留)|
|/app/Policies/||授权策略类(v2.*版本开始不再使用，但暂时保留)|
||PostPolicy.php|博文授权类|
||UserPolicy.php|用户授权类|
||||
|/database/migrations/||(v2.*版本开始不再使用，但暂时保留)|
||||
|/resources/assets/||sass、js编写目录|
||sass/app.scss|样式集合文件|
||sass/arnold.scss|通用样式|
||sass/bootstrap-custom.scss|bootstap自定义覆盖样式|
||sass/index.scss|首页、列表样式|
||sass/navbar.scss|导航栏样式|
||sass/post.scss|博文相关样式|
||sass/sidebar.scss|边栏样式|
||sass/tag.scss|标签相关样式|
|/resources/views/||blade模板目录|
||index.blade.php|首页模板|
|/resources/views/common/||通用模板模板目录|
||_errors.blade.php|错误提示模板|
||_messages.blade.php|消息提示模板|
||default.blade.php|博客默认模板|
||footer.blade.php|页脚模板|
||navbar.blade.php|页眉（导航栏）模板|
|/resources/views/posts||博文相关模板目录|
||_post.blade.php|文章列表单个列表内容模板|
||index.blade.php|文章列表模板|
||show.blade.php|文章正文模板|
|/resources/views/sidebar||博文相关模板目录|
||default.blade.php|默认边栏模板|
||post.blade.php|博文页边栏模板|
|/resources/views/tags||标签相关模板目录|
||index.blade.php|标签列表模板|
