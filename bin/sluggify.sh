#!/usr/bin/bash

if [[ $# < 1 ]]; then

   echo "Error: no file provided.

   USAGE:
      $0 <file:md> [file:md...]
   " 1>&2

   exit 64
fi

# ============================================================================ #

for file in "$@"; do

   basename "${file}" | sed -r 's/^[0-9]{2}-//' | sed -r 's/.md$//' | tr '[:upper:]' '[:lower:]'
done
