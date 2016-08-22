# ============================================================================ #
# Procelain

.PHONY: all
all: css

install:
	git submodule update --init --recursive

update:
	git pull origin master
	git submodule update --init --recursive

.PHONY: serve
serve:
	php -S localhost:8000 -t BIT01-webtech

# ============================================================================ #
# Include all *.mk files in ./make
# * Each of the .mk-files should have a clean-<filename> target
# ============================================================================ #

includes := $(strip $(shell find make -type f -name "*.mk" -not -name "_*.mk"))

$(info including: $(includes) ) $(info )

include $(includes)

# ============================================================================ #

clean_incs := $(addprefix clean-,$(notdir $(basename $(includes))))

.PHONY: clean
clean: $(clean_incs)

