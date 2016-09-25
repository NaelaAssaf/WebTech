htmlfiles       := $(addprefix $(pubdir)/,$(shell $(bindir)/sluggify.sh $(mdfiles)) index.html)
fullcursus.header := $(incsdir)/full-cursus-header.yml
fullcursus.html := $(pubdir)/cursus.html
template        := templates/article.html
includes        := $(wildcard includes/*)
m4              := m4 -I $(embedssrcdir) -P

common_depens := make/html.mk $(toc.html) $(includes) m4/* $(embeds.html)

.PHONY: html
html: $(htmlfiles) $(fullcursus.html)

$(pubdir)/%.html: $(mddir)/??-%.md $(template) $(common_depens)
	cat m4/common_macros.m4 $< | $(m4)  | pandoc \
	   --template $(template) \
	   --title-prefix "BIT01 Webtechnology - " \
	   --base-header-level=1 \
	   --number-sections \
	   --variable "completetoc=$$(cat $(toc.html))" \
	   --css=assets/css/bootstrap.css \
	   --include-after-body includes/toc.js.html \
	   -o $@

$(pubdir)/index.html: $(mddir)/index.html
	cp $< $@

$(fullcursus.html): $(fullcursus.header) $(mdfiles) $(template) $(common_depens)
	cat m4/common_macros.m4 $(fullcursus.header) $(mdfiles) | $(m4)  | pandoc \
	   --template $(template) \
	   --title-prefix "BIT01 Webtechnology - " \
	   --base-header-level=1 \
	   --number-sections \
	   --variable "completetoc=$$(cat $(localtoc.html))" \
	   --css=assets/css/bootstrap.css \
	   -o $@
