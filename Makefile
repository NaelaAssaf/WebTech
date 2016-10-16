pandoc        := /usr/bin/pandoc
pubdir        := docs
incsdir       := includes
tpldir        := templates
bindir        := bin
mddir         := md
mdfiles       := $(sort $(wildcard $(mddir)/*md))
embedssrcdir  := embeds
embedsdestdir := $(pubdir)/embeds
embeds.php    := $(addprefix $(pubdir)/,$(shell find $(embedssrcdir) -type f -not -name "*.swp" ))
embeds.html   := $(embeds.php:.php=.html)

# ============================================================================ #
# Procelain

.PHONY: all
all: css toc html

install:
	git submodule update --init --recursive

update:
	git pull origin master
	git submodule update --init --recursive

.PHONY: serve
serve:
	php -S localhost:8000 -t $(pubdir) & firefox -new-tab localhost:8000 & wait

.PHONY: watch
watch:
	onmod md templates m4 assets-src embeds make

# ============================================================================ #
# Include all *.mk files in ./make
# * Each of the .mk-files should have a clean-<filename> target
# ============================================================================ #

includes := $(strip $(shell find make -type f -name "*.mk" -not -name "_*.mk"))

$(info including: $(includes) ) $(info )

include $(includes)

# ============================================================================ #
# Dirs
# ============================================================================ #

$(incsdir) $(pubdir):
	mkdir -p $@

# ============================================================================ #
# Cleans
# ============================================================================ #

clean_incs := $(addprefix clean-,$(notdir $(basename $(includes))))

.PHONY: clean
clean: $(clean_incs)
