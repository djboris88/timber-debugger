# Timber Debugger

Package which provides some extra debugging options for [Timber](https://github.com/timber/timber)

Installation
------------
To install the latest stable version of this component, open a console and execute the following command:
```bash
composer require djboris88/timber-debugger
```

Usage
-----
These extensions are only active when `WP_DEBUG` is defined and set to 
`true`. Twig Extensions will automatically be registered
and applied.

### Commented Include

Package: `djboris88/twig-commented-include` ([GitHub](https://github.com/djboris88/twig-commented-include), [Packagist](https://packagist.org/packages/djboris88/twig-commented-include))

This is a simple Twig Extension which helps debugging and navigating through many Twig partials in your project. It outputs a HTML comments before and after each include statement while rendering the template. Comments look like this:

```html
<!-- Begin output of "_partials/_navigation.twig" -->
<div class="navigation" role="navigation" data-navigation>...</div>
<!-- / End output of "_partials/_navigation.twig" -->
```

### Dump extension

Package: `hellonico/twig-dump-extension` ([GitHub](https://github.com/nlemoine/twig-dump-extension), [Packagist](https://packagist.org/packages/hellonico/twig-dump-extension))

Standalone Symfony Var Dumper Twig extension. Add `{{ dump() }}` in your twig templates to see it in action.

```twig
{{ dump(foo) }}
{% dump foo %}
{% dump foo, bar %}
```

### Twig Breakpoints

Package : `ajgl/breakpoint-twig-extension` ([GitHub](https://github.com/ajgarlag/AjglBreakpointTwigExtension), [Packagist](https://packagist.org/packages/ajgl/breakpoint-twig-extension))

This component allows you set breakpoints in twig templates.  
**Requires the Xdebug PHP extension to be installed.**

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>title</title>
  </head>
  <body>
    {{ breakpoint() }}
  </body>
</html>
```

Once stopped, your debugger will allow you to inspect the `$environment` and `$context` variables.

**Function arguments**  
Any argument passed to the twig function will be added to the `$arguments` array, so you can inspect it easily.

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>title</title>
  </head>
  <body>
    {{ breakpoint(app.user, app.session) }}
  </body>
</html>
```

License
-------

This component is under the GPL 3.0 license. See the complete license in the [LICENSE] file.


Reporting an issue or a feature request
---------------------------------------

Issues and feature requests are tracked in the [Github issue tracker].


Author Information
------------------

Developed with ♥ by Boris Đemrovski.

If you find this component useful, please add a ★ in the [GitHub repository page] and/or the [Packagist package page].

[LICENSE]: LICENSE
[Github issue tracker]: https://github.com/djboris88/timber-debugger/issues
[GitHub repository page]: https://github.com/djboris88/timber-debugger
[Packagist package page]: https://packagist.org/packages/djboris88/timber-debugger
