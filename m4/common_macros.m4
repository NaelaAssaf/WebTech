m4_changequote(`[[', `]]')

m4_dnl -----------------------------------------------------------------------

m4_define(m4_timestamp,m4_esyscmd(date +"%F"))

m4_dnl -----------------------------------------------------------------------

m4_define(CSS,<abbr title="Cascading Style Sheets">[[[[CSS]]]]</abbr>)
m4_define(HTML,<abbr title="HyperText Markup Language">[[[[HTML]]]]</abbr>)
m4_define(PHP,<abbr title="Hypertext Preprocessor">[[[[PHP]]]]</abbr>)

m4_dnl -----------------------------------------------------------------------

m4_define(m4_embed_doc,[[docs/embeds/$1.html]])
m4_define(m4_embed2href,[[[$1](embeds/$1.html)]])
m4_define(m4_embed2src,[[<a href="https://github.com/asoete/howest-webtechnology/tree/master/embeds/$1.php" taret="_blank">src</a>]])

m4_dnl -----------------------------------------------------------------------

m4_define(m4_indent,[[<div class="[[m4_indent]]">$1</div>]])

m4_dnl -----------------------------------------------------------------------

m4_define(m4_warning,[[<div class="alert alert-warning"><strong>Warning:</strong> $1</div>]])
m4_define(m4_info,[[<div class="alert alert-info"><strong>Info:</strong> $1</div>]])
m4_define(m4_note,m4_info($1))

m4_dnl -----------------------------------------------------------------------

m4_define(m4_tag,[`$1`](http://www.w3schools.com/tags/tag_$1.asp){.w3c-ref})

m4_dnl -----------------------------------------------------------------------

m4_define(m4_exercise,[[
<div class="exercise">
<h4>Exercise:</h4>
$1
</div>
]])

m4_dnl -----------------------------------------------------------------------

m4_define(m4_embed_php,[[
<div class="row"><div class="col-md-6">

<span class="embed--srcfile">m4_embed2href($1) | m4_embed2src($1)</span>

```{.php .embed--src}
m4_include($1.php)
```

</div><div class="col-md-6">

<span class="embed--srcfile">output of $1</span>

```{.embed--output style="height:$2;"}
m4_include(m4_embed_doc($1))
```

</div></div>
]])

m4_dnl -----------------------------------------------------------------------


m4_define(m4_embed_php_as_html,[[
<div class="row"><div class="col-md-6">

<span class="embed--srcfile">m4_embed2href($1) | m4_embed2src($1)</span>

```{$3 .php .embed--src}
m4_include($1.php)
```

</div><div class="col-md-6 iframe-wrapper">

<span class="embed--srcfile">output of $1</span>

m4_dnl <iframe src="embeds/$1.html" class="embed--output" height="$2" frameborder="0" scrolling="no"></iframe>
<iframe src="embeds/$1.html" class="embed--output" height="$2" frameborder="0" scrolling="no"></iframe>

</div></div>
]])
