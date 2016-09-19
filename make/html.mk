htmlfiles := $(addprefix $(pubdir)/,$(addsuffix .html,$(shell $(bindir)/sluggify.sh $(mdfiles))))

.PHONY: html
html: $(htmlfiles)

$(pubdir)/%.html: $(mddir)/??-%.md
	cat m4/common_macros.m4 $< | m4 -P | pandoc -o $@
