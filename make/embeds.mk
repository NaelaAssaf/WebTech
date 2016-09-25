.PHONY: embeds
embeds: $(embeds.html)

$(embedsdestdir)/%.html: $(embedssrcdir)/%.php
	mkdir -p $(dir $@)
	php -f $< > $@

$(embedsdestdir)/%.css: $(embedssrcdir)/%.css
	cp $< $@
