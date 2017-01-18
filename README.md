# Single-page site template


This is a single-page template based on [Yii PHP Framework Version 2](https://github.com/yiisoft/yii2).

## INSTALLATION

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

~~~
composer global require "fxp/composer-asset-plugin:^1.2.0"
composer create-project --prefer-dist simple-yii2/app-single-page single-page
~~~

## CONFIGURATION

### Database

Edit the file `config/db.php` with real data.

**NOTES:**
- Application won't create the database for you, this has to be done manually before you can access it.
- Check and edit the other files in the `config/` directory to customize your application as required.

Once the database is configured, open in browser `your_app/cms` page. On first start, the control system will create an tables in database and add the required rows to get started.

### Application

All you need is set `name` and `language` properties of your application in `config/web.php` file.

### Mailer

To receive messages from site you need to configure `mailer` property in `config/web.php` file.

## CONTENT MANAGEMENT SYSTEM

To access content management system open `your_app/cms` page. You can change this address by modifying rule for `urlManager` in `config/web.php`.

For more information see [simple-yii2/cms](https://github.com/simple-yii2/cms).

### User management

By default there are one user with e-mail and password `admin`. After first login the system will ask you to change your password.

For more information see [simple-yii2/user](https://github.com/simple-yii2/user).

### Page content

To edit page content use `Pages` module, available from the `Modules` menu. To customize layout edit `views/layouts/main.php` file.

For more information see [simple-yii2/page](https://github.com/simple-yii2/page).

### Feedback form

To add feedback form use `cms\feedback\frontend\widgets\Feedback` widget. Note, that you need to set e-mail in `Feedback` module, available from the `Modules` menu.

For more information see [simple-yii2/feedback](https://github.com/simple-yii2/feedback).

### Blocks with user-defined content

Use `Settings` module from the `Modules` menu to solve this issue. In application code block content available with `cms\settings\frontend\widgets\Settings` widget.

For more information see [simple-yii2/settings](https://github.com/simple-yii2/settings).

### Error page

Customize error page by editing `views/site/error.php` file.

### Search engine optimization

To manage title, meta-keywords and meta-description, use the settings with `title`, `keywords` and `description` aliases.

### Disable debug in production

Disable debug in production in file `web/index.php`.

### Storage

All uploaded files placed in `web/upload` directory. When it stored, it placed in `storage` directory. Stored files is cached in `web/public` directory.
