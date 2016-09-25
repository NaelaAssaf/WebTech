---
title: PHP basics
---

> PHP is a widely-used general-purpose scripting language that is especially
> suited for Web development and can be embedded into HTML.
>
> [source: php.net](http://php.net){style="font-size:smaller;"}

This means PHP can be used to generate HTML. This allows us to adhere to the DRY
(<q>Don't Repeat Yourself</q>) principle.

# PHP Basics

## Execute a PHP-script

To get acquainted with php we will start of on the command line and work our
way up to PHP as a web server.

### The PHP binary

PHP at its core is a program which reads a source file, interprets the
directives an prints out the result.

Basic invocation:

```bash
php <script-to-execute>.php
```

The above command will print the output to the `STDOUT`.

### Hello World

The obligatory [hello world](https://en.wikipedia.org/wiki/%22Hello,_World!%22_program).

Createt a file: `hello-world.php` with content:

m4_embed_php(php-basics/hello-world)

<small>
m4_info([[The echo statement prints a string. See [echo](#echo) for more info]])
</small>

<small>
m4_note([[If you get an _command not found_ error, you probably have to install
php. Run: `sudo dnf install php`]])
</small>

Run it via:

```bash
php hello-world.php
```

## Main constructs

### PHP tags

PHP interprets only the code enclosed within the special PHP-tags.

* Opening tag: `<?php`
* Closing tag: `?>`

m4_embed_php(php-basics/php-tags)

Notice that the code outside of the PHP-tags is not interpreted and this printed out unchanged.

### Print output

#### Echo

#### Print

## Variables

### Scalars

### Arrays

## Loops

## Conditionals

