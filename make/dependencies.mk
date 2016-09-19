$(pandoc):
	dnf install -y pandoc

$(tmpdir):
	mkdir -p $@
