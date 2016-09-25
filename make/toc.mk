toc.html  := $(incsdir)/toc.html
localtoc.html  := $(incsdir)/localtoc.html
toctpl  := $(tpldir)/toc.html
generator := $(bindir)/gen-toc.sh

.PHONY: toc
toc: $(toc.html) $(localtoc.html)

$(toc.html): $(generator) bin/sluggify.sh $(mdfiles) | $(pandoc) $(incsdir)
	$(generator) $(mdfiles) > $(toc.html)

$(localtoc.html): $(mdfiles) | $(pandoc) $(incsdir)
	$(pandoc) $(mdfiles) --toc --template $(toctpl) -o $@
