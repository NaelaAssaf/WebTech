# PHP functions

Sometimes you use a piece of code over and over again. This is not optimal and this code should be extracted to its own function.

A function is a block of code with a given name and can be called (executed) by this name and optionally passed arguments to change the behaviour/output of the function.

We have already used a lot of PHP builtin functions. For example:
m4_phpfunc(print),
m4_phpfunc(isset),
m4_phpfunc(empty),
m4_phpfunc(array_pop),
m4_phpfunc(array_push),
...

As mentioned we can define our own functions.

Syntax:

```php
function <name> ( <arguments> ) {

    /* function code here */
}
```

Example: function without arguments

```php
function greet() {
    echo "Hello!\n";
}

greet(); // Hello!
greet(); // Hello!
```

Example: function with arguments

```php
function greet( $name ) {
    echo "Hello $name!\n";
}

greet( 'john' ); // Hello john!
greet( 'jane' ); // Hello jane!
greet(); // - ERROR -
```

If arguments are present in the function definition, these arguments must be
passed when the function is invoked. Otherwise an error is thrown...

Arguments can however be defined with a default value, if the argument is not
passed at invocation (or the argument value is `NULL`) the default value will
be used instead.

Example: function with arguments

```php
function greet( $name = 'anonymous' ) {
    echo "Hello $name!\n";
}

greet( 'john' ); // Hello john!
greet( 'jane' ); // Hello jane!
greet(); // Hello anonymous
```

Multiple arguments can be passed, separated by comma's `,`.

```php
function greet_both( $first, $second = '' ) {

    echo "Hello $first";
    echo "Hello $second";
}

greet_both( 'john', 'jane' );
// Hello john
// Hello jane

greet_both('sam');
// Hello sam
// Hello
```

## Return a value

The m4_phpfunc(return) keyword must be used to return a value from an array:

```php
function fn() {
    return "Hello World";
}

$string = fn();
```

Whenever a return statement is encountered, the function will stop and return
the specified value. Any code defined after the return statement will not be
executed...

Example:

```php
function fn() {

    if( true ) {

        return "was true";
    }

    echo "This will never execute because the function returned from the if statement";
}
```

## Exercises

m4_exercise([[
Create a function which accepts two arguments:

- name
- sentence

Output: `<name> -> <sentence>`

m4_run(php-functions,chat.php)
]])

m4_dnl ------------------------------------------------------------------------

m4_exercise([[
Create a function for each arithmetic operator: `+`, `-`, `x`, `/`.
The function should accept an array of values and apply the operations in sequence:

Example:
```php
plus([1,2,3, 4]); // -> 10
subtract([10,5,1]); // -> ( 10 - 5 ) - 1
divide([100, 10, 5]) // -> ( 100 / 10) / 5
multiply([7,9,8,4]) // -> 7 * 9 * 8 * 4
```

* Extra: accept two values: `plus( 1, 2 )` or array: `plus([1,2])`
<small>
m4_info([[Use m4_phpfunc(is_array)]] to check if a variable is an array...)
</small>

m4_run(php-functions,arithmetic-operators.php)
]])

m4_dnl ------------------------------------------------------------------------

m4_exercise([[
Create a barplot: 25%, 80%, 15%.

Abstract the bars away in a function.

```php
print_bar('25%');
print_bar('80%');
print_bar('15%');
```
]])
