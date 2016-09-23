m4_changequote(`[[', `]]')

m4_define(CSS,<abbr title="Cascading Style Sheets">[[[[CSS]]]]</abbr>)
m4_define(HTML,<abbr title="HyperText Markup Language">[[[[HTML]]]]</abbr>)
m4_define(PHP,<abbr title="Hypertext Preprocessor">[[[[PHP]]]]</abbr>)

m4_define(m4_embed_doc,[[docs/embeds/$1.html]])

m4_define(m4_timestamp,m4_esyscmd(date +"%F"))

m4_define(m4_embed_php,[[
<div class="row"> <div class="col-md-12">
$1
</div></div>

<div class="row"><div class="col-md-6">
```{.php .embed-src}
m4_include($1.php)
```
</div><div class="col-md-6">
```{.embed--output style="height:$2;"}
m4_include(m4_embed_doc($1))
```
</div></div>
]])

m4_define(m4_embed_php_as_html,[[
<div class="row"> <div class="col-md-12">
$1
</div></div>

<div class="row"><div class="col-md-6">
```{.php .embed-src}
m4_include($1.php)
```
</div><div class="col-md-6">
<iframe src="embeds/$1.html" class="embed--output" height="$2" frameborder="0"></iframe>
</div></div>
]])
