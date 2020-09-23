---
author: Arne Soete
date: m4_timestamp
title: HTML basics
---

# HTML Basics

<small>
m4_note([[This course is based on the [HTML](https://www.w3.org/TR/html5/)
specification and can differ from older specifications like XHTML and HTML]])
</small>

HTML is an <abbr title="Extensible Markup Language">XML</abbr> subset. This
means it is composed out of tags which can contain attributes.

## Tags

An HTML-tag indicator starts with `<` and end with `>`, for example: `<body>`.

There are two types of HTML-tags:

* Non self-enclosing tags
* Self-enclosing tags

### Non self-enclosing tags

Non self-enclosing tags exist out of two parts:

1. An opening part: `<tag>`
1. And a closing part: `</tag>`.
   The closing part is identified by the forward slash (`/`) before the tag-name.

These opening and closing tags can contain plain text and/or additional HTML markup.

```html
<tag> {{content}} </tag>`
```

Example: `<strong>Bold Font</strong>`
<small>
(This tags formats its content in a bold font: <strong>Bold Font</strong>)
</small>

The whole (start + content + end) is an HTML element.

### Self-enclosing tags

A self-enclosing tag has no content. So the closing part is left of:

```html
<tag>
```

Example: `<br>`
<small>(this will insert a newline into your HTML)</small>

Sometimes you may see self-closing tags used like `<tag />`, this trailing tag
is optional since HTML5 and can be left of.

## Attributes

Attributes modify the behaviour of a tag.

For example the `a`-tag converts a piece of text into a clickable link.

```html
<a>My text to click</a>
```

The `href`-attribute defines where the link should point to:

```html
<a href="http://go-here-when-clicked.com">My text to click</a>
```

Attributes are also used to modify the appearance of a tag. Later in this
course we'll see more detailed examples of this.

## A valid HTML document

A valid HTML5 document requires a bit of boilerplate:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your webpages metadata -->
</head>
<body>
    <!-- your webpage specific content -->
</body>
</html>
```

This minimal markup tells the browser to treat the document as a HTML5 document.

## The document head

The m4_tag(head)-tag allows the developer to define meta-data about the webpage.
It is a wrapper around multiple other tags.

```html
<head>
    <!-- meta tags here -->
</head>
```

The m4_tag(head)-tag may only be defined once in the complete document.

Everything defined within the m4_tag(head) element will not be visible in the
HTML document. The head content can have an effect on the appearance of the
page but it's content will not be visualised.

### Title

The title tag sets the web-page title. This title is displayed by the browser
in the browser-tab.

```html
<head>
    <title>My web-page's title...</title>
</head>
```

### Style

We will address styling later in this course but for now it is sufficient to
know that style information should be included in the head of a web-page.

#### Raw style

The m4_tag(style)-tag allows to include raw CSS rules in the documents

```html
<head>
    <style type="text/css">
        /* style information here */
    </style>
</head>
```

#### External style sheets

The m4_tag(link)-tag allows to external style sheets into the document.
<small> (Do not confuse this tag with the m4_tag(a)-tag...).  </small>

```html
<head>
    <link href="/link/to/file.css" type="text/css" rel="stylesheet">
</head>
```

We will only ever include CSS-files to style our web-pages.  The provided
attributes in the example are required to include a CSS-file and avoid browser
quirks.

## The document body

The m4_tag(body)-tag should wrap all the content to be displayed.

```html
<body>
    <!-- all displayed tags and content go here -->
</body>
```

m4_exercise([[
* Create a valid HTML-document with
    * Document title: Hello World
    * Content: `Hello World from the my first web-page`
]])

### HTML: Hello World

Create a text file name `hello-world.html`{.file}

```bash
gedit hello-world.html
```

With contents:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello World</title>
</head>
<body>
    Hello World from my first web-page.
</body>
</html>
```

Open the local HTML file in the browser.

```bash
firefox hello-world.html
```

## Headers: `H*`

The purpose of a header is to indicate the start of a new block a add an
appropriate heading.

The m4_tag(hn)-tags come in 6 variations. From to highest order header `h1` to
the lowest `h6`.

The browser auto-formats these headers accordingly from largest to smallest
font-size.

m4_embed_php_as_html(html-intro/headers,300px,.html)

m4_exercise([[
* Create a header for each `Hn`-tag
]])

## Containers

The purpose of these types of tags is to wrap other content. Why the content should be wrapped can vary:

* To indicate semantic meaning (new paragraph, a quote, ...)
* To position and/or style the contents in the container.

They are also referred to as _block_-elements

### Paragraphs `p`

The m4_tag(p)-tag encloses a blob of related text into a paragraph

m4_embed_php_as_html(html-intro/p-tag,180px,.html)

### Generic container `div`

The m4_tag(div) defines a _division_ in the document. It is used al lot to wrap
some content and apply styles.

It has no special styles by default

m4_embed_php_as_html(html-intro/div-tag,150px,.html)

### Pre-formatted text: `pre`

The m4_tag(pre) Keeps al white-space in the element (in contrast to all the
other elements). The text is also displayed in a monospaced font.

m4_embed_php_as_html(html-intro/pre-tag,180px,.html)

### Pre-formatted text: `hr`

The m4_tag(hr) tag inserts a line into the document. This can be used to split
sections.

m4_embed_php_as_html(html-intro/hr-tag,100px,.html)

### Blockquote `blockquote`

The m4_tag(blockquote)-tag is used to denote some block of text as a quote from another source.

m4_embed_php_as_html(html-intro/blockquote-tag,200px,.html)

m4_exercise([[
* Create a block of text an wrap it in.
    * No tags
    * div tags
    * p tags
    * blockquote tags
  And notice the difference
]])

## Inline tags

These tags are inline because they do not start a new block (identified by new
lines) as the previous tags.

Their purpose is either to give a specific style and semantic meaning to an
element or to extend a certain functionality to the element.

### Anchors (links): `a`

The m4_tag(a) is used to link to other web-pages.

In order the function, the `href`-attribute is required on the m4_tag(a)-element.

m4_embed_php_as_html(html-intro/a-tag,50px,.html)

m4_exercise([[
* Create links to
    * google.com
    * howest.be
    * php.net
    * github.com
]])

### A newline: `br`

The m4_tag(br) insert a newline into the document.

m4_embed_php_as_html(html-intro/br-tag,125px,.html)

### Inline preformat: `code`

The m4_tag(code)-tag is to inline elements what `pre` is to block elements.
It will preserve white space and add a monospaced font in an inline way.

m4_embed_php_as_html(html-intro/code-tag,50px,.html)

### Emphasise text: `em`

The m4_tag(em)-tag allows to emphasise certain text.

m4_embed_php_as_html(html-intro/em-tag,50px,.html)

### Small text: `small`

The m4_tag(small)-tag indicates the browser to use a smaller font-size to
visualise this content.

m4_embed_php_as_html(html-intro/small-tag,50px,.html)

### Inline wrap text: `span`

The m4_tag(span)-tag is a generic wrapper. It has no special semantic meaning.
The m4_tag(span)-tag is mostly used to style/target some text.

m4_embed_php_as_html(html-intro/span-tag,50px,.html)

### Strike text: `strike`

The m4_tag(strike)-tag is used to strike through some text.

m4_embed_php_as_html(html-intro/strike-tag,50px,.html)

### Bold text: `strong`

The m4_tag(strong)-tag can be used to make text bold.

m4_embed_php_as_html(html-intro/strong-tag,50px,.html)

### Inline quote text: `q`

The m4_tag(q)-tag is used to indicate certain inline text was quoted from an
external source.

m4_embed_php_as_html(html-intro/quote-tag,50px,.html)

### Image `img`

The m4_tag(img)-tag can be used to inert images into the markup.  The
`src`-attribute is required and specifies the location of the image.  The
location can be a local path, this means a path form the current script
directory to the image location or a full (absolute) URL path.

m4_embed_php_as_html(html-intro/img-tag,125px,.html)

m4_exercise([[
* Make a web-page with links to:

    * google.com
    * howest.be
    * GitHub.com

* Print the following text so the sentences are broken up as below.

    > | HTML is a markup language browser understand to format documents.
    > | CSS is a way to style this markup.
    > | PHP is a programming language.
    > | It is used to dynamically generate HTML-markup.

* Print the following text so `hello world` is emphasised.

    > Let's emphasise hello world in this sentence.

* Print the following text so `hello world` is smaller

    > Let's make hello world smaller in this sentence.

* Print the following text so `hello world` is bold

    > Let's make hello world bold in this sentence.

* Print the following text so `hello world` is crossed of.

    > Let's strike hello world in this sentence.
]])

## Multi element markup

Some elements don't make any sense on their own. They should be part of a
larger elements-group.

### Fieldset

m4_tag(fieldset) is a container with an (optional) header (m4_tag(legend).

m4_embed_php_as_html(html-intro/fieldset,100px,.html)

This container is often used to group related from items togheter.

### Lists

A HTML-list is composed of m4_tag(li)-tags enclosed by an m4_tag(ul) or
m4_tag(ol)-tag.

#### Unordered lists `ul`

m4_embed_php_as_html(html-intro/list-unordered,100px,.html)

#### Ordered lists `ol`

m4_embed_php_as_html(html-intro/list-ordered,100px,.html)

m4_exercise([[
* Make an unordered list with your name, age and gender as items
* Make your name bold, age emphasised and gender quoted.
* Make a top 3 ranked list of your favorite dishes
* Add a fourth dish, but with smaller font .
]])

### Tables

A simple table is composed out of:

* a table wrapper: m4_tag(table)
* rows: m4_tag(tr)
* header cells m4_tag(th)
* and normal cells m4_tag(td)

m4_embed_php_as_html(html-intro/simple-table,120px,.html)

m4_exercise([[
* Make a table with two columns: name and score
* Add 3 rows
    * Jan -> 12
    * Piet -> 15
    * Boris -> 7
* Make the names also headers
* Add a column 'passes' and add a V if the number is larger than 10 and an X otherwise.
]])

## Attributes

As already seen with the `a`-tag, attributes can modify the behaviour of an
HTML-element.

The `a`-tag requires the `href`-attribute to be set. Otherwise the browser has
no clue where to take the user on a click.

The attributes are also often used to modify the appearance of an element.

Commonly used attributes:

### Class

The class attribute holds a space separated list class-names. The element is member of all the classes specified in the attribute. These classes can be used to style a group of elements the same way.

For example all the elements which are member of the same class (have the same
class-name in the class attribute) should have the text colour set to red...

```html
<p class="class1" >...</p>
<p class="class1 class-two" >...</p>
```

### Id

The `id`-attribute lets you assign a unique identifier to an element.

This identifier should be unique for the whole page and thus occur only once.

```html
<p id="unique-identifier" >...</p>
```

<small>
If the id is specified in the URL prefixed by a pound symbol (`#`), the element will be automatically scrolled into view.

```html
<!-- http://WWW.example.com/script.php#chapter -->

<p id="chapter1">
Scroll into view...
</p>
```

</small>

### Style

The style attribute can be used to apply CSS-rules to a single element.

Generally speaking you should not set the styles via this tag. A dedicated
style block in the `head` of page or an external style sheet are better, more
scalable, options. It can however come in handy in this introduction to HTML and
CSS.

```html
<p style="background: red; color: green;">...</p>
```

See [HTML and CSS](html-and-css.html) for more info about styling an element.

### Title

The title attribute lets you assign a title to an element. This title will be
displayed as a tooltip when hovering with the mouse over this element.

m4_embed_php_as_html(html-intro/title-attribute,40px,.html)

## Exercises

m4_dnl -----------------------------------------------------------------------

m4_exercise([[
Create a HTML page resembling your CV.

m4_embed(html/cv,250px)
]])

m4_dnl -----------------------------------------------------------------------

m4_exercise([[
Add a table of contents (TOC) to the previous page (cv.html).

The TOC should contain all headers, clicking a header should take the user to
this header/section

m4_embed(html/cv-with-toc,250px)
]])

m4_dnl ------------------------------------------------------------------------

m4_exercise([[Re-create the HTML skeleton of a wiki page: <https://en.wikipedia.org/wiki/FASTA_format>


m4_embed([[html/wiki-fasta_format]])
]])

