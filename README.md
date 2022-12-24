# Nix Laravel CMS

A Laravel package created by Nick Yeoman

## Gotchas

You can't have another package named 'cms'.

## Tree
```
.
+-- composer.json
+-- README.md
+-- src
    +-- config
    |   +-- cms.php
    +-- Controllers
    |   +-- AdminController.php
    |   +-- ForgotController.php
    |   +-- LoginController.php
    |   +-- RegisterController.php
    +-- database
    |   +-- migrations
    |       +-- 2022_12_24_074922_pages.php
    |       +-- 2022_12_24_083431_contact_form.php
    |       +-- 2022_12_24_083837_spamwords.php
    +-- laravelcmsServiceProvider.php
    +-- Models
    |   +-- Page.php
    +-- resources
    |   +-- views
    |       +-- admin.blade.php
    |       +-- forgot.blade.php
    |       +-- layouts
    |       |   +-- adminbar.blade.php
    |       |   +-- footer.blade.php
    |       |   +-- head.blade.php
    |       |   +-- master.blade.php
    |       |   +-- nav.blade.php
    |       +-- login.blade.php
    |       +-- registration.blade.php
    |       +-- resetForm.blade.php
    +-- routes
        +-- admin.php
        +-- password.php
        +-- web.php
```

## Outstanding issues

```
src/resources/views/forgot.blade.php:7:{{-- TODO: make the links route alias' instead of static --}}
src/resources/views/login.blade.php:7:{{-- TODO: make the links route alias' instead of static --}}
src/resources/views/resetForm.blade.php:7:{{-- TODO: make the links route alias' instead of static --}}
src/Controllers/ForgotController.php:32:        // TODO: Fix the email template form design
src/Controllers/AdminController.php:13:        //TODO: document how to enable verification email and forgot password
src/Controllers/LoginController.php:31:        // TODO: Check for either username or email
src/Controllers/RegisterController.php:46:        // TODO: Send Validate Email Address
src/laravelcmsServiceProvider.php:4:// TODO: https://laravel.com/docs/9.x/requests#configuring-trusted-hosts
src/laravelcmsServiceProvider.php:15:        $this->app->make('NickYeoman\laravelcms\Controllers\AdminController'); // TODO: Do I need this?
```