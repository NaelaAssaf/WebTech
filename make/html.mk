htmlfiles := $(addprefix $(pubdir)/,$(shell $(bindir)/sluggify.sh $(mdfiles)) index.html)
template := templates/article.html
includes := $(wildcard includes/*)

.PHONY: html
html: $(htmlfiles)

$(pubdir)/%.html: $(mddir)/??-%.md $(template) make/html.mk $(toc.html) $(includes)
	cat m4/common_macros.m4 $< | m4 -P | pandoc \
	   --template $(template) \
	   --title-prefix "BIT01 Webtechnology - " \
	   --toc \
	   --base-header-level=1 \
	   --number-sections \
	   --variable "completetoc=$(shell cat $(toc.html))" \
	   --css=assets/css/bootstrap.css \
	   --include-after-body includes/toc.js.html \
	   -o $@

$(pubdir)/index.html: | $(pubdir)/introduction.html
	ln -sr $| $@

$(pubdir)/cursus.html: $(mdfiles) $(allinone_template) $(css_files)
	cat m4/common_macros.m4 $(mdfiles) | m4 -P | pandoc \
	   -s \
	   --title-prefix "BIT01 Webtechnology - " \
	   --toc \
	   --base-header-level=2 \
	   --number-sections \
	   --css=assets/css/bootstrap.css \
	   -o $@
