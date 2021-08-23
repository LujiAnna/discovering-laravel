# Laravel

## Resources

- [documentation](https://laravel.com/docs/8.x)
- [series](https://laracasts.com/series/laravel-8-from-scratch)
- [screencasts](https://laracasts.com/)

## Composer Installation

- [composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos)
- [install composer globally](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos)
- [download composer](https://getcomposer.org/download/)

Composer is a tool that helps you manage any PHP installations, as npm can do for JS. You can install it locally (available project wide) or globally (system wide, recommended). If you have any trouble, you might want to read about how the [PATH](https://superuser.com/questions/284342/what-are-path-and-other-environment-variables-and-how-can-i-set-or-use-them) variable determines things to load on startup (so they can be accessed anywhere)

1. Open a terminal and navigate to your user directory, ie cd /User/<USER_NAME>/
   Run this command shown below to download Composer. This will create a Phar (PHP Archive) file called composer.phar:

curl -sS https://getcomposer.org/installer | php

> The curl utility is a command line tool available on Unix, Linux, Mac OS X, Windows, and many other platforms. curl provides easy access to the HTTP protocol (among others) directly from the command line and is therefore an ideal way of interacting with CouchDB over the HTTP REST API.

2. Now we move composer.phar file to a directory

sudo mv composer.phar /usr/local/bin/

- [!] If you like to install it only for your user and avoid requiring root permissions, you can use ~/.local/bin instead of ~/.local/bin/composer which is available by default on some Linux distributions.

> sudo is a program for Unix-like computer operating systems that allows users to run programs with the security privileges of another user, by default the superuser. It originally stood for "superuser do" as the older versions of sudo were designed to run commands only as the superuser.

Now run `composer` in order to run Composer instead of `php composer.phar`.

3. We want to run Composer with having to be root all the time, so we need to change the permissions:

sudo chmod 755 /usr/local/bin/composer.phar

> chmod 755 sets the 755 permission for a file. 755 means full permissions for the owner and read and execute permission for others.

4. Next, we need to let Bash know where to execute Composer:

   nano ~/.bash_profile

Add this line below to bash_profile and save

alias composer="php /usr/local/bin/composer.phar"

> vim filename #open file in vim
> //To insert text press i and you can start editing
> //Press Esc key and type :wq to save a file AND exit
> //Press Esc key and type :w to save WITHOUT exiting

How to save and exit `nano.bash_profile` in terminal (iTerm)

> If you want to save the changes you've made, press `Control+O` and then `Enter`
> To exit nano, type `Control+X`.
> If you ask nano to exit from a modified file, it will ask you if you want to save it. Just press N in case you don't, or Y in case you do. It will then ask you for a filename. Just type it in and press Enter.

5. and then run this command:

source ~/.bash_profile

6. Finally, run:
   composer -v

   > Should be able to see Composer version 2.1.6 2021-08-19 17:11:08 , etc
   > Source:duvien.com

## Laravel Installation

Once we have the prerequisites, we can read about the Laravel installation. There are multiple ways of installing and running Laravel, so keep in mind which one you are using.

```
# Get your copy of Laravel
  `composer create-project laravel/laravel hello-world`
# Enter the folder
`cd hello-world`
# Run the server (this is a built-in server you may use as an alternative of your Apache - both options are fine)
`php artisan serve`
```

What about installing with Laravel Sail? This is an option based on a Docker container: it contains your full environment (PHP, Apache, ...) and is specific to your project. Since we already have most of what we need, we'll actually use our available local setup.
