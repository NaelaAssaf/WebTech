###
### Make fonts related stuff
###

# ============================================================================ #

fonts_srcdir   := assets-src/scss/vendor/bootstrap/assets/fonts/bootstrap
fonts_destdir  := BIT01-webtech/assets/fonts
fonts_srclist  := $(shell find $(fonts_srcdir) -name "glyphicons-halflings-regular.*")
fonts_destlist := $(subst $(fonts_srcdir),$(fonts_destdir),$(fonts_srclist))

.PHONY: fonts
fonts: $(fonts_destlist)

$(fonts_destdir)/%: $(fonts_srcdir)/% | $(fonts_destdir)
	cp -f $< $@

$(fonts_destdir):
	mkdir -p $@

# ============================================================================ #

.PHONY: clean-fonts
clean-fonts:
	rm -rf $(fonts_destdir)/*
