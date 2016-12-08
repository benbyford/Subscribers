# Subscribers

Subscribers module for [Processwire]() 2.4+

Intended to host all required functions to allow users to register and login to a Processwire website by adding a few functions within your template files.

Modules list:
- Subscibers
-- helper functions for creating user registation, login and lost password forms
-- validates and creates users as defined role
-- on install creates new user role and permission subscriber that can be over written
-- on install creates all fields needed to sign up user fullname, email_subscribe, company, subscribe_date.
- subscribersProcessList
-- helper module to add a new process class to admin allowing for a list page of subscribers that can be paginated through and exported.  

## Install
[Install](http://modules.processwire.com/install-uninstall/) module in modules folder in your [Processwire](http://processwire.com/) installation. update modules in admin and install module.

## Settings
Change role and permissions to be installed.

## Usage
```PHP
// get subscriber module
$subscribers = $modules->getModule('Subscribers');

// login form
echo $subscribers->formLogin();

// login user
$error = $subscribers->login($input->post->username, $input->post->pass);

// register form
echo $subscribers->formRegister($input);

// register user
$error = $subscribers->register($input);

// delete user
$response = $subscribers->deleteUser($user);

// show user info
$userInfoHtml = $subscribers->loggedIn($user, $input);

```

## TODO:
- make everything more robust and more configurable (please help)
-
