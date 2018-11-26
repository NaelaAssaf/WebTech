pdfdestdir  := pdfs
pdffile     := $(pdfdestdir)/cursus.pdf
pubpdf      := $(pubdir)/$(pdffile)
wkhtmltopdf := /opt/wkhtmltox/bin/wkhtmltopdf
wkhtmltopdf := /usr/local/bin/wkhtmltopdf

.PHONY: pdf
pdf: $(pdffile) $(pubpdf)

$(pdffile): $(shell find $(pubdir)/* -type f -not -name "*.pdf") make/pdf.mk | $(pdfdestdir) $(wkhtmltopdf)
	$(wkhtmltopdf) http://localhost:8000/cursus.html $@

$(pubpdf): $(pdffile)
	mkdir -p $(dir $@)
	cp -f $< $@

$(pdfdestdir):
	mkdir -p $@
