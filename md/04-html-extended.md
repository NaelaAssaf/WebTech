---
title: HTML and CSS
---

# HTML and CSS

## Attributes

Attributes can modify the behaviour of an HTML-element.

We have used attributes already on the `a`-tags. The `a`-tag requires the
`href`-attribute to be set. Otherwise the browser has no clue where to take the
user on a click.

Commonly used attributes:

### Class

You can add an element to a certain class by specifying the classname in the class-attribute.
Multiple classnames can be defined delimeited by a space.

```html
<p class="class1" >...</p>
<p class="class1 class-two" >...</p>
```

Classes are mostly used for styling a group of elements the same way.

### Id

The `id`-attribute lets you assign a unique identifier to an element.

This identifier should be unique for the whole page and thus occur only once.

```html
<p id="inique-identifier" >...</p>
```

## Styles

The style attribute can be used to apply CSS-rules to the element.

Generally speaking you should not set the styles via this tag. A dedicated
style block in the `head` of page or an external stylesheet are better, more
scalable, options. I can however come in handy in this introduction to HTML and
CSS.

```html
<p style="background: red; color: green;">...</p>
```

## Exercises
