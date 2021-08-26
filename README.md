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

# TL;DR

```
* Download again:
~ curl -sS https://getcomposer.org/installer | php

* Change permission
~ chmod 755 composer.phar

* Move and rename
~ sudo mv composer.phar /usr/local/bin/composer
```

```
composer create-project laravel/laravel example-app

cd example-app

composer install

npm install

php artisan serve

```

RETRY: https://askubuntu.com/questions/116960/global-installation-of-composer-manual

1. Open a terminal and navigate to your user directory, ie cd /User/<USER_NAME>/
   Run this command shown below to download Composer. This will create a Phar (PHP Archive) file called composer.phar:

curl -sS https://getcomposer.org/installer | php

> The `curl` utility is a command line tool available on Unix, Linux, Mac OS X, Windows, and many other platforms. curl provides easy access to the HTTP protocol (among others) directly from the command line and is therefore an ideal way of interacting with CouchDB over the HTTP REST API.

2. Now we move composer.phar file to a directory

sudo mv composer.phar /usr/local/bin/

- [!] If you like to install it only for your user and avoid requiring root permissions, you can use ~/.local/bin instead of ~/.local/bin/composer which is available by default on some Linux distributions.

> `sudo` is a program for Unix-like computer operating systems that allows users to run programs with the security privileges of another user, by default the superuser. It originally stood for "superuser do" as the older versions of sudo were designed to run commands only as the superuser.

Now run `composer` in order to run Composer instead of `php composer.phar`.

3. We want to run Composer with having to be root all the time, so we need to change the permissions:

sudo chmod 755 /usr/local/bin/composer.phar

> `chmod 755` sets the 755 permission for a file. 755 means full permissions for the owner and read and execute permission for others.

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

# composer install

- composer install

# run project

- php artisan serve

What about installing with Laravel Sail? This is an option based on a Docker container: it contains your full environment (PHP, Apache, ...) and is specific to your project. Since we already have most of what we need, we'll actually use our available local setup.

- push to git init repo `git remote add origin [copied web address]`

# ERROR

zsh: command not found: composer

read more: https://stackoverflow.com/questions/25018894/osx-bash-composer-command-not-found/25022888

The path /usr/local/bin/composer is not in your PATH, executables in that folder won't be found.

1. Delete the folder /usr/local/bin/composer

> https://unix.stackexchange.com/questions/577637/where-is-usr-local-in-the-linux-there-is-no-local-folder

> `usr` stands for "Unix System Resources"; there is no connection to any "user folder". What does ls -d /usr/local print for you? What does ls /usr print?

> There should be a folder called /usr/local. It's not in /home/user. Run ls -l /usr/local and you'll see it. The command echo $PATH should also show /usr/local/bin as one of the directories.

> usr does not stand for user. The folder is actually located at /usr/local/ you can try cd /usr/local/ to change your directory to it.

- cd /user/local/bin
- ls
- rm composer.phar

> this gives error rm: composer.phar: Permission denied
> https://stackoverflow.com/questions/30956424/permission-denied-for-composer-in-usr-local-bin

- sudo rm /usr/local/bin/composer.phar

AND Delete cache folder

- /home/<user>/.composer

cd ~/.cache/composer (cd ~/.cache/composer should be cd ~/.composer/cache)

====== then download again

- Download again:

* curl -sS https://getcomposer.org/installer | php

- Change permission

* chmod 755 composer.phar

- Move and rename

* sudo mv composer.phar /usr/local/bin/composer

This moves composer.phar into /usr/local/bin/ and renames it into composer (which is still an executable, not a folder).

Then just use it like:

$ composer ...

- try again with setting PATH in the

## Version

- Laravel v8.55.0 (PHP v7.4.16)
- Composer (version 2.1.6)

Nice-to-have features
🪴 Find out about named routes. Add two more pages who link to each other using that name.

🌳 Figure out how you can access any $_GET_ parameters in your controller without using any superglobals.

# Blade View

- [Tutorial](https://laracasts.com/series/laravel-8-from-scratch/episodes/14)
- [Documentation](https://laravel.com/docs/8.x/blade#blade-directives)

  🌱 Build the homepage using Blade. Have at least three parts: your actual page, and a header and footer to be included. Provide some content for this page to your liking. Use Bootstrap (or another components based css framework) for the styling. (don't spend too much on styling)

Switch to one general layout containing your html skeleton. The loaded view should extend from this layout and add page specific content.

## Forms

- [x] Build a simple form in your view.

- [x] In Laravel, a route will only respond to a specific type of request (GET or POST for example). Add a route that will react to the form submit (POST method). You'll also need an extra function in your controller.

- [x] Find out how you can access form information (after submitting, that is) from the request (hint hint) in your controller in Laravel. Tip: there's a recommended way, not using the normal superglobals like $\_GET and $\_POST. We'll save this info in the next step.

🌼 Provide simple validation for your form (do so in your controller).

🌼 Customize the validation error messages (can be EN, no need to switch to NL).

🌳 Use a request class to provide the validation. Although a more complex approach, this makes your validation reusable in other places - always think what approach will serve you best.

## Laravel Mix

> Compiling assets with Laravel Mix, if you need to use Preprocessors when using sass/scss, lass, you need the Laravel Mix to compile those to raw/vanilla css. Same for js: if importing modules, vue, npm, you might need to use webpack to be compiled and served to the browser
> npm package, sending stuff from all over the folders to the public folder to be distributed/used
> eg style from resources css to public css in a more compact way
> eg using scss to css into public
> can also use styling frameworks like tailwind for styling

We now have a lot of functionality at our disposal to start building... but what about the styling? Modern application use Webpack to process all files and combine them into one (for better performance) and rewrite them to something that a browser can understand (sass/scss to css for example). It comes with a bit more setup than a simple UI tool, but offers a lot of functionality and isn't limited to compiling only sass/scss files. [Laravel mix](https://laracasts.com/series/laravel-6-from-scratch/episodes/17) is an extra layer on top of Webpack that allows for easier configuration. It can bring your config file from a couple of 100 lines to 10.

Laravel has two locations for your styling: resources for the raw source, and the compiled result will end up in the public folder.

- npm install
- npm run mix or dev or prod (check your package json file)
- Link (import) to your layout the js, css (or whatever folder/file is in it)
- Always run after making changes to receive the update or `npm run watch` on other untouched terminal to keep running the compiler automatically continuously

- [x] Run npm install to get all JS dependencies (this includes the webpack compiler).

- [x] Adapt the setup to allow you to write sass/scss and compile this to css using [Laravel mix](https://laravel.com/docs/8.x/mix).

🌼 Get rid of bootstrap and switch to your own styling.

🌳 Tailwind css is a utility-first approach. This means it's not about full components (as is Bootstrap), but rather about classes that do one specific thing. With some extra steps, mix can compile this as well. Adapt your setup and give Tailwind a try.
