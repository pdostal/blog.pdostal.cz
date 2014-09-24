#!/bin/sh
cd ~/www/blog.pdostal.cz/
git clean -f
git reset --hard HEAD
git pull -f
