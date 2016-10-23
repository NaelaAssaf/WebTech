---
title: HTML and CSS
---

# HTML and CSS

HTML can be styled via CSS. An HTML-element is selected via [CSS selectors](#css-selectors).
Styles/rules are defined per selector block. Each definition is
terminated by a `;`. A rules block is enclosed by `{`, `}`.

```css
<selector> {
    <property> : <value>;
    <property> : <value> <value>;
}
```

## Include style information

Elements can be styled via three methods:

* style-attribute <small>(discouraged)</small>
* a style tag in the head <small>(less discouraged)</small>
* an external stylesheet <small>(encouraged)</small>

### Style attribute

```html
<element style="/* my styles */"></element>
```

Use this method to quickly test some rule. Not as a permanent style.  **This way
of managing styles is discouraged** because it is a less maintainable way of
styling web-pages.  For example: styles can not be shared by elements...

### Style tag

The m4_tag(style)-tag that should be defined in the head of the document. The styles
defined in this tag apply to the complete page.

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My pae title</title>

    <style type="text/css">
        .selector {

            property: value;
        }
    </style>

</head>
<body>
    <!-- the body -->
</body>
</html>
```

Even though the styles are defined only once, elements can share them via
selectors ( tag-name, classes, ...)

### External style sheet

The CSS-rules can also be defined in a dedicated CSS-file. This file can be
included in a web-page via the m4_tag(link)-tag

The rules defined in the file can be included in as many HTML-pages as you
want. This makes it the most scalable method of defining and including
CSS-rules.

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My pae title</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <!-- the body -->
</body>
</html>
```

## CSS selectors

In order to apply rules to a certain element, the element must be targeted, selected.

CSS has the notion of selectors to target elements.

### Tag-name

The tag-name can be used to style all the same tags the same way.

m4_embed_php_as_html(html-and-css/tag-selector,,.html)

### ID

The id attribute can be used to give an element an unique identifier. This id
can be selected via CSS.

A pound symbol `#` indicates the following string is an id-name:

m4_embed_php_as_html(html-and-css/id-selector,,.html)


### Class

Multiple elements can have the same class-name set. Elements with a certain class can be targeted/selected via this class-name.

Strings prefixed with a dot `.` are considered class-names in CSS.

m4_embed_php_as_html(html-and-css/class-selector,,.html)

<small>
m4_note([[The elements sharing a class-name can be different tags.]])
</small>

### Combining selectors

If multiple selectors are provided, separated by a comma, `,`, the defined
rules will apply for all the elements matching any of the selectors:

m4_embed_php_as_html(html-and-css/multi-selectors,250px,.html)


CSS selector rules can also be composed out of multiple selectors. This allows for a
more detailed/specific selection.

#### Elements matching multiple rules

```css
selector1.selector2 {}
```

Selectors can be chained concatenated into a longer selection to make the
selection more specific.

For example select only the `p`-tags with a certain class:

m4_embed_php_as_html(html-and-css/selector-chaining,,.html)

In this case `p.classname` means:

* Select all elements with class `classname`
* From all the elements with class `classname`, select all `p`-tags.

You can make these selectors as long and as complex as you want:

`div.class1.class2.class3`...

#### Elements inside another element

```css
selector1 selector2 {}
```
Multiple selectors separated by spaces indicate nesting. The last selector
should be found inside the previous, inside the previous, ...

<small>
m4_note([[Inside in this context means, the element must be wrapped by the other element:

```html
<elem1>
    <elem2>
    </elem2>
</elem2>
```

Is doesn't matter how many other tags are in-between the parent and the nested element:

```html
<elem1>
    <antoher-elem>
        <elem2>
        </elem2>
    </antoher-elem>
</elem2>
```
]])
</small>

m4_embed_php_as_html(html-and-css/selector-nesting,,.html)

m4_note([[If two selectors target the same element and the same property, the
last one encountered takes precedence]])

#### Direct children of an element

```css
selector1 > selector2 {}
```

The `>` symbol between two selectors indicates an direct parent -> child
relationship. By this we mean the second element must be an immediate child of
the first selector. No other tags may warp the child element.

```html
<parent>
    <child>
    </child>
</parent>
```

m4_embed_php_as_html(html-and-css/direct-child-selector,,.html)

#### Siblings

```css
selector1 ~ selector2 {}
```

The `~` symbol between two selectors, selects all the elements that match the
second selector who exist after the first selector and have the same parent.

m4_embed_php_as_html(html-and-css/all-siblings-selector,,.html)

#### Direct siblings

```css
selector1 + selector2 {}
```

The `+` symbol between two selectors, selects the first element that matches
the second selector, is located directly after the first selector and have the
same parent.

m4_embed_php_as_html(html-and-css/direct-siblings-selector,,.html)

### Special selectors

#### last-child

```css
selector:last-child {}
```

This selection modifier targets the last element matching the given selector:

m4_embed_php_as_html(html-and-css/last-child-selector,,.html)

In the example is the div coloured red, the last div in the `.parent` tag.

#### nth-child

```css
selector:nth-child( n ... ) {}
```

The `nth-child` modifier targets the elements matching a simple equation where n is the position of the element in the list.

m4_embed_php_as_html(html-and-css/nth-child-selector,,.html)

* `2n + 1`: all odd elements (the `odd` keyword can also be used: `:nth-child(odd)`)
* `2n`: all even elements (the `even` keyword can also be used: `:nth-child(even)`)
* `3`: the third element

#### Hover

```css
selector:hover {

    text-decoration: underline;
}
```

Via the (hover selector)[http://www.w3schools.com/cssref/sel_hover.asp]{.csstag} allows us to apply styles to an element only when the mouse hovers over the element.

For example: overline a link when the mouse passes over the element:

m4_embed_php_as_html(html-and-css/hover-selector,,.html)

## CSS properties

<http://www.w3schools.com> has a very good explanation of most of the CSS
properties. The headers of the listed properties are links to the corresponding
<http://www.w3schools.com>-website. These linked web-pages are considered part
of the course material!

m4_cssproptitle(Colors,colors)

>Colors in CSS are most often specified by:
>
>* a valid color name - like "red"
>* an RGB value - like "rgb(255, 0, 0)"
>* a HEX value - like "#ff0000"

m4_dnl ------------------------------------------------------------------------

m4_cssproptitle(Background,background)

An element can be given a background:

```css
div {

    background: red;
}
```

m4_dnl ------------------------------------------------------------------------

m4_cssproptitle(Border,border)

An element can be given a border:

```css
div {

    background: solid red 1px;
    background: dashed #bbb 1px;
}
```

m4_dnl ------------------------------------------------------------------------

m4_cssproptitle(Margin,margin)

The margin defines how far away other, external, elements are pushed away from
the border of the styled element.

```css
div {

    margin: 15px; /* All sides the same margin */
    margin: 15px 30px; /* Top and bottom: 15 px, left and right side: 30px*/
    margin: 15px 30px 45px 60px; /* top: 15px, right:30px, bottom:45px, left: 60px */
}
```

m4_dnl ------------------------------------------------------------------------

m4_cssproptitle(Padding,padding)

The padding defines how far away text, and other child, elements should stay away
from the border of the element.

```css
div {

    padding: 15px; /* All sides: 15px */
    padding: 15px 30px; /* Top and bottom: 15 px, left and right side: 30px*/
    padding: 15px 30px 45px 60px; /* top: 15px, right:30px, bottom:45px, left: 60px */
}
```

m4_dnl ------------------------------------------------------------------------

m4_cssproptitle(Height and width,dimension)

The width and the height of an element can be set via css.

```css
div {

    height: 500px;
    width: 150px;
}
```

m4_dnl ------------------------------------------------------------------------

m4_cssproptitle(Box model,boxmodel)

An element is composed out of multiple components which all influence the size
of the element:

![Box model image](assets/img/box-model.png);

> * Content - The content of the box, where text and images appear
> * Padding - Clears an area around the content. The padding is transparent
> * Border - A border that goes around the padding and content
> * Margin - Clears an area outside the border. The margin is transparent

The
[box-sizing](http://www.w3schools.com/cssref/css3_pr_box-sizing.asp){.w3c-ref}-property
influences how all these components add up to the total size of the element.

> * `content-box`:  Default. The width and height properties (and min/max
>   properties) includes only the content. Border, padding, or margin are not
>   included
> * `border-box`:  The width and height properties (and min/max properties)
>   includes content, padding and border, but not the margin

m4_dnl ------------------------------------------------------------------------

m4_cssproptitle(Outline,outline)

Outline draws a border around the boxmodel.

```css
div {

    outline: solid green 1px;
}
```

m4_dnl ------------------------------------------------------------------------

m4_cssproptitle(Font,font)

Customize the appearance of a font:

* font-color
* font-size
* font-weight ( how bold is the font)
* font-style (italic or not)
* font-family (Arial, serif or sans-serif, etc)
* font-variant (small-caps or not)

```css
div{
    font-size: 1.1em;
    color: blue;
    font-weight: bold;
    font-style: italic;
    font-family: serif;
    font-variant: small-caps;
}
```

m4_cssproptitle(Text,text)

We can style more than the appearance of the font, we can also define:

* text-align: left, right, centered of justified
* text-decoration: overline, underline or line-through
* word-spacing
* letter-spacing
* ...

```css
div {
    text-align: center;
    text-decoration: underline;
    word-spacing: 5px;
    letter-spacing: 5px
```

m4_dnl ------------------------------------------------------------------------

m4_cssproptitle(Link,link)

A link can be in one of four states:

> * `a:link`    - a normal, unvisited link
> * `a:visited` - a link the user has visited
> * `a:hover`   - a link when the user mouses over it
> * `a:active`  - a link the moment it is clicked

All these states can be styles independently.

```css
a:hover {

    color: pink;
}
```

m4_dnl ------------------------------------------------------------------------

m4_cssproptitle(List,list)

The _bullet_ of a list (`ul` or `ol`) can also styles:

```css
div {
    list-style-type: square;
    list-style-position: inside;
    list-style-image: url("custom-bullet.gif");
}
```

m4_dnl ------------------------------------------------------------------------

m4_cssproptitle(Table,table)

HTML tables can be styled heavily:

* border: style the borders of the table.
* border-collapse: merge table cell borders.

Margins, paddings, nth-child selectors, etc. can also be applied.

m4_dnl ------------------------------------------------------------------------

m4_cssproptitle(Display and visibility,display_visibility)

The m4_cssprop(display)-property defines how an elements behaves:

* block: like a div, p, pre, ...
* inline: like span, small, strong, ...
* m4_cssprop(inline-block): inline, but can be given a width/height, etc
* hidden: hide the element.

The m4_cssprop(visibility)-property allows one to hide an element from view,
but is still occupies space and interacts with the other DOM-elements.

```css
div {

    display: hidden;
    visibility: none;
}
```

m4_dnl ------------------------------------------------------------------------

m4_cssproptitle(Position,position)

This property defines how an element behaves in the page flow. There are four
possible values:

* `static`: default -> go with the flow
* `relative`: position relative to default position.
* `fixed`: postion relative to viewport (eg.: browser window)
* `absolute`: relative to the nearest positioned (= not `static`) ancestor

```css
div {

    position: absolute;
}
```

m4_dnl ------------------------------------------------------------------------

m4_cssproptitle(Overflow,overflow)

The m4_cssprop(overflow)-property defines what should happen if the contents of
an element is larger than the defined dimensions.

* visible: just show the content, don't take the boundries into considiration.
* hidden: hide the overflowing content
* scroll: show scollbars
* auto: create scrollbars if needed.

<small> m4_info([[The X and Y axis scrollbars can be controlled via
m4_cssprop(overflow-x) and m4_cssprop(overflow-y)]]) </small>

```css
div {

    overflow: hidden;
}
```

m4_dnl ------------------------------------------------------------------------

m4_cssproptitle(Float,float)

Defining float to `left` or `right` will extract an element out of the normal
page flow and _float_ all the page content around this element.

```css
div {

    float: right;
}
```

m4_dnl ------------------------------------------------------------------------

m4_cssproptitle(Align,align)

Elements can be aligned in their parent via three methods. These methods don't always work in all circumstances, so sometimes one must be choosen over the other.

* `text-align`: left, right or centered -> child elements are aligned
* `margin`: `0 auto` -> no margin top and bottom, the sides is evenly devided ==
  element is centered...
* `top`, `right`, `bottom`, `left`: specify distance of the side of an element
  to its parent. Works only on absolute or fixed positions

## Exercises

m4_dnl ------------------------------------------------------------------------

m4_exercise([[Make a web-page with:

* Yellow background
* Red header: `Hello World`

m4_embed([[css/hello-world]])
]])

m4_dnl ------------------------------------------------------------------------

m4_exercise([[Make a table with three columns: `first name`, `last name`, `age`
where:

* first column text is red
* second column text is green
* third column text is blue
* table caption is underline and overlined
* Extra: add total sum column

m4_embed(css/classmates-colors,270px)
]])

m4_dnl ------------------------------------------------------------------------

m4_exercise([[Make a table with three columns: `first name`, `last name`, `age`
where:

* only columns have borders
* all even rows have a gray background
* extra: row where mouse is passing over: darker background

m4_embed(css/classmates-nth-row,350px)
]])

m4_dnl ------------------------------------------------------------------------

m4_exercise([[Print a rainbow pyramid, each column should have it's own color

* red
* orange
* yellow
* green
* blue
* indigo
* violet

m4_embed(css/rainbow-pyramid)
]])

m4_dnl ------------------------------------------------------------------------

m4_exercise([[
Create an web-page with:

* A header: `My webpage`
* An image
* Text flowing around the image.
* A copyright footer

m4_embed(css/image-float,275px)
]])

m4_dnl ------------------------------------------------------------------------

m4_exercise([[
Create a horizontal bar-plot with four bars:

* Bar 1: 75%
* Bar 2: 25%
* Bar 3: 50%
* Bar 4: 100%

m4_embed(css/hor-bar-plot,280px)
]])

m4_dnl ------------------------------------------------------------------------

m4_exercise([[
Create a vertical bar-plot with four bars:

* Bar 1: 75%
* Bar 2: 25%
* Bar 3: 50%
* Bar 4: 100%

m4_embed(css/vert-bar-plot,400px)
]])

m4_dnl -----------------------------------------------------------------------

m4_exercise([[
Create a _post comment_ form with fields:

* name
* email
* title options: (Dr, Mr, Ms, Ir)
* comment box
* post anonymous checkbox.

Validate:

* Name and/or email are not empty (unless _post anonymous_ was checked)
* Comment has max 500 characters

* Print a red error messages if a validation failed + indicate which field failed
  validation, in red.
* If an error occurred pre-fill the elements with the valid data
* If no errors occurred,
    * ( Mr. or Ms. ) (name or _anonymous_) posted:
    * print _message posted_ in gray.

m4_page(css/post-comment,400px)
]])
