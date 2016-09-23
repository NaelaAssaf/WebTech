.PHONY: embeds
embeds: $(embeds.html)

$(embedsdestdir)/%.html: $(embedssrcdir)/%.php | $(dir $(embeds.html))
	php -f $< > $@

$(embedsdestdir)/%.css: $(embedssrcdir)/%.css | $(dir $(embeds.html))
	cp $< $@

$(dir $(embeds.html)):
	mkdir -p $@
