---
title: HTML basics
---

# HTML Basics

<small>
m4_note([[This course is based on the [HTML](https://www.w3.org/TR/html5/)
specification and can differ from older specifications like XHTML and HTML]])
</small>

HTML is an <abbr title="Extensible Markup Language">XML</abbr> subset. This
means it is composed out of tags with, optionally, attributes.

## Tags

A tag is delimited by `<` and `>`, for example: `<body>`.

There are two types of HTML-tags:

* Non self-enclosing tags
* Self-enclosing tags

### Non self-enclosing tags

Non self-enclosing tags exist out of two parts:

1. An opening part: `<tag>`
1. And a closing part: `</tag>`.  
   The closing part is identified by the forward slash (`/`) before the tag-name.

These _parts_ are used to contain/format certain content.

```html
<tag> {{content}} </tag>`
```

Example: `<strong>Bold Font</strong>`
<small>
(This tags formats its content in a bold font: <strong>Bold Font</strong>)
</small>

### Self-enclosing tags

A self-enclosing tag has no content to format. So the closing part is left of:

```html
<tag>
```

Example: `<br>`
<small>(this will insert a newline into your HTML)</small>

Sometimes you may see self-closing tags used like `<tag />`, this trailing tag
is optional since HTML5 and can be left of.

## Attributes

Attributes modify the behaviour of a tag.

For example the `a`-tag converts a peace of text into a clickable link.

```html
<a>My text to click</a>
```

The `href`-attribute defines where the link should take you:

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

This minimal markup tells the browser to treat the document as HTML5.

## The document head

The m4_tag(head)-tag allows the developer to define meta-data about the webpage.
It is a wrapper around multiple other tags.

```html
<head>
    <!-- meta tags here -->
</head>
```

The m4_tag(head)-tag may only be defined once in the complete document.

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
    * Title: Hello World
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

### Blockquote `blockquote`

The m4_tag(blockquote)-tag is used to denote some block of text as a quote from another source.

m4_embed_php_as_html(html-intro/blockquote-tag,200px,.html)

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
]])

### A newline: `br`

The m4_tag(br) insert a newline into the document.

m4_embed_php_as_html(html-intro/br-tag,125px,.html)

### Emphasise text: `em`

The m4_tag(em)-tag allows to emphasise certain text.

m4_embed_php_as_html(html-intro/em-tag,50px,.html)

### Small text: `small`

The m4_tag(small)-tag indicates the browser to use a smaller font-size to
visualise this content.

m4_embed_php_as_html(html-intro/small-tag,50px,.html)

### Inline wrap text: `span`

The m4_tag(a)

m4_embed_php_as_html(html-intro/span-tag,50px,.html)

### Strike text: `strike`

The m4_tag(a)

m4_embed_php_as_html(html-intro/strike-tag,50px,.html)

### Bold text: `strong`

The m4_tag(a)

m4_embed_php_as_html(html-intro/strong-tag,50px,.html)

### Inline quote text: `q`

The m4_tag(a)

m4_embed_php_as_html(html-intro/quote-tag,50px,.html)

m4_exercise([[
* Make a web-page with links to:

    * google.com
    * howest.be
    * github.com

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

## Attributes

## Exercises
