toc.html  := $(incsdir)/toc.html
template  := $(tpldir)/toc.html
generator := $(bindir)/gen-toc.sh

.PHONY: toc
toc: $(toc.html)

$(toc.html): $(generator) bin/sluggify.sh $(mdfiles) | $(pandoc) $(incsdir)
	$(generator) $(mdfiles) > $(toc.html)
