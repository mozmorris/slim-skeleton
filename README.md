My [Slim](http://www.slimframework.com/) Skeleton App
====================

This is my somewhat opinionated [Slim](http://www.slimframework.com/) skeleton app. It uses [my own fork](https://github.com/MozMorris/Slim/tree/webroot) of the Slim framework, [Twig](http://twig.sensiolabs.org/) for templating and [Sass](http://sass-lang.com/) for stylesheets.

## Installation

Assuming you've got Composer installed...

    composer create-project moz-morris/slim-skeleton [app-name]

...replacing `[app-name]` with directory where the app will be generated. You can set your document root to that folder. Keep reading more some further explanation.

## Slim & Rewrites

The fork of Slim this app implements allows you to use rewrites to route requests to a subfolder whilst maintaining URLs that don't include the subfolder name. This method is supported by all of the other frameworks I've used. A little surprising then that Slim doesn't support this particular structure.

The app is set up so that you can point Apache at the root folder and with some .htaccess rewrites, all requests will be sent to the /public/ folder. I like this. It's useful when you're deploying to an environment where the document root can't be changed or perhaps you're looking to keep your web root as tidy as possible.

## Twig

I like the [Django](https://www.djangoproject.com/) template language and Twig is really similar. So, Twig templates it is. There's some config happening in `app/boostrap.php` and the cached templates are written to `app/tmp`. You'll need to `chmod` that folder.

## Sass

Sass is awesome. It's even better with [Compass](http://compass-style.org/). There's a `config.rb` inside of the `public/sass` folder so it's ready and waiting for the `compass watch` command.

