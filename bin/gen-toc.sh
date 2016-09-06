#!/usr/bin/bash

if [[ $# < 1 ]]; then

   echo "Error: no files provided.

   USAGE:
      $0 <file:md> [file:md...]
   " 1>&2

   exit 64
fi

# ============================================================================ #

if [[ -z $BASE_URL ]]; then

   BASE_URL="https://asoete.github.io/BIT01-webtech"
fi

BINDIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
template=$(realpath ${BINDIR}/../templates/toc.html)

echo "Using template: '${template}'." 1>&2

for file in "$@"; do

   path=$(${BINDIR}/sluggify.sh ${file})
   
   pandoc --toc --template ${template} ${file} | sed "s|href=\"#|href=\"${BASE_URL}/${path}#|g"

done
