#!/bin/sh

while read fileInput; do
  mkdir Website/$fileInput
  cp index.html Website/$fileInput
done <1000Random.txt
