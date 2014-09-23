# Quick-start guide

The following document explains how to quickly generate a fully responsive, branded project website for The PHP League. These sites are created using [Jekyll](http://jekyllrb.com/) and are designed to be hosted on [GitHub Pages](http://pages.github.com/).

## Install Jekyll

If you do not yet have Jekyll installed, [do that first](http://jekyllrb.com/docs/installation/).

## Create gh-pages branch

Go to your project folder.

~~~bash
cd your-project-folder
~~~

Create an orphaned [gh-pages](https://help.github.com/articles/creating-project-pages-manually) branch and remove all files.

~~~bash
git checkout --orphan gh-pages
git rm -rf .
~~~

If you already have a gh-pages branch, simply switch to it.

~~~bash
git checkout gh-pages
~~~

## Create the boilerplate project

The following [script](https://github.com/thephpleague/theme.thephpleague.com/blob/gh-pages/scripts/create.php) will add the necessary project files and folders if they don't already exist. It will NOT overwrite or delete any files.

~~~bash
php -r "readfile('https://raw.githubusercontent.com/thephpleague/theme.thephpleague.com/gh-pages/scripts/create.php');" | php
~~~

## Build your website

View the Jekyll documentation [here](http://jekyllrb.com/docs/home/). Be sure to add your site specific settings to the config files found in the `_data` folder. Also add your domain name to the `CNAME` file.

~~~bash
jekyll serve --watch
~~~

View your development site at [localhost:4000](http://localhost:4000).

## Commit your changes and deploy

When you're ready to deploy your website, simply push it to the `gh-pages` branch of your GitHub project. You do not need to commit the compiled website, as GitHub Pages does this automatically.

~~~bash
git add -A
git commit -m "Inital commit"
git push origin gh-pages
~~~