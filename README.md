# Project Websites

## Introduction

The following document explains how to quickly generate a fully responsive, branded project website for The PHP League. These sites are created using [Jekyll](http://jekyllrb.com/) and are designed to be hosted on [GitHub Pages](http://pages.github.com/).

## Quick-start guide

If you do not yet have Jekyll installed, [do that first](http://jekyllrb.com/docs/installation/).

~~~bash
# Go to your project folder
cd your-project-folder

# Create gh-pages branch and remove all files
git checkout --orphan gh-pages
git rm -rf .

# Create the boilerplate project (alternatively you can clone an existing site)
php -r "readfile('https://raw.githubusercontent.com/thephpleague/theme.thephpleague.com/gh-pages/scripts/create.php');" | php

# Build your website using Jekyll
jekyll serve --watch

# Commit and deploy
git add -A
git commit -m "Inital commit"
git push origin gh-pages
~~~