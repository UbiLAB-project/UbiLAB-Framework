#!/bin/bash
#zip -r results.zip $1 > /dev/null
tar --sort=name --mtime="2018-10-05 00:00Z" --owner=0 --group=0 --numeric-owner -cf results.tar $1 #answer
md5sum results.tar | awk '{print $1}'
rm results.tar