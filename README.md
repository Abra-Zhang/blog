# 个人博客开发

## 关于
之前自己开发了一版博客，但是那时候刚刚入门，做出来的东西自己都看不下去，这次重新开发，并准备上线使用，作为自己的博客。框架使用的是laravel，配合bootstrap进行开发。

## 分支解释及命名规范
master - 功能测试稳定无误后进行合入，只合并 dev 以及 readme 分支代码，不直接 commit 和 push；
dev - 测试分支，各功能开发后合入进行测试，测试通过后合入 master；
其余分支：采用 **年月日-功能名称-功能类别** 的命名方式来进行命名。如，'20170817-user-login-new'；

## 功能与完成情况（持续更新，直至结束）
- [x] 网站首页页面搭建 - 20170815-blog-front-end-new
- [x] 用户注册登录 - 20170816-user-signup-new, 20170817-user-login-new
- [x] 用户资料修改 - 20170818-user-crud-new
- [x] 管理员后台功能入口 - 20170822-admin-new(暂时废弃)
- [x] 用户管理（列表显示以及删除功能） - 20170822-admin-new
- [x] 文章相关 - 20170828-articles-new(完成增删改查显示入口和部分初步逻辑，各功能细节需单独开发)
- 在线编辑器（目前准备使用 Editor.md）
- 用户验证
- 评论相关
...

## 主要文件结构与文件说明（持续更新，直至结束）
|目录|文件|说明|
|:--|:--|:--|
|/app/Models/||模型文件目录|
||Article.php|文章模型文件|
||User.php|用户模型文件|
|/app/Http/Controllers/||控制器文件目录|
||ArticlesController.php|文章控制器
||UsersController.php|用户控制器|
||SessionsController.php|session控制器|
||StaticPagesController.php|页面控制器|
|/app/Policies/||授权策略类|
||ArticlePolicy.php|文章授权类|
||UserPolicy.php|用户授权类|
||||
|/database/migrations/|||
||create_users_table.php|用户表|
||add_is_admin_to_users_table.php|为用户表添加 is_admin 字段，判断是否为管理员|
||create_articles_table.php|文章表|
|/database/seeds/||用于测试生成数据|
||||
|/resources/assets/||sass、js编写目录|
|/resources/views/||blade模板目录|
||index.blade.php|首页模板|
|/resources/views/articles||文章相关模板目录|
||_article.blade.php|文章列表单个列表内容模板|
||create.blade.php|写文章模板|
||edit.blade.php|文章编辑模板|
||index.blade.php|文章列表模板|
||show.blade.php|文章正文模板|
|/resources/views/common/||通用模板模板目录|
||_errors.blade.php|错误提示模板|
||_messages.blade.php|消息提示模板|
||default.blade.php|博客默认模板，包含页眉页脚，以及提示模板|
||footer.blade.php|页脚模板|
||header.blade.php|页眉模板|
|/resources/views/session/||session有关模板目录|
||create.blade.php|用户登录模板|
|/resources/views/users/||用户相关模板目录|
||_user_info.blade.php|用户个人资料模板|
||_user.blade.php|用户列表单个用户显示模板
||create.blade.php|用户注册模板|
||edit.blade.php|用户编辑个人资料模板|
||index.blade.php|用户列表模板|
||show.blade.php|用户资料显示模板|
||||
|/routes/||路由目录|
||web.php|路由跳转定义文件|
