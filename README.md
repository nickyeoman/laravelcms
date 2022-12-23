# Nix Laravel CMS

A Laravel package created by Nick Yeoman

## Gotchas

You can't have another package named 'cms'.

## Tree
```
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
    +-- laravelcmsServiceProvider.php
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
        +-- web.php

```