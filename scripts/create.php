<?php

/**
  * This file is used to quickly create a boilerplate project
  * websites for The League of Extraordinary Packages.
  *
  * @author  Jonathan Reinink <jonathan@reinink.ca>
  */

error_reporting(0);

$source = 'https://raw.githubusercontent.com/thephpleague/theme.thephpleague.com/gh-pages/scripts/boilerplate/';
$files = [
    '_data' => [
        'images.yml',
        'menu.yml',
        'project.yml'
    ],
    '_layouts' => [
        'default.html'
    ],
    '.gitignore',
    'CNAME',
    'index.md'
];

echo "\033[1;33m";
echo "\n";
echo "|--------------------------------------------------\n";
echo "| The PHP League - Project Website Boilerplate\n";
echo "|--------------------------------------------------\n";
echo "|\n";
echo "| CREATING...\n";

foreach ($files as $directory => $file) {
    if (is_array($file)) {

        create_directory($directory);

        foreach ($file as $name) {
            create_file($name, $directory);
        }

    } else {
        create_file($file);
    }
}

echo "| DONE!\n\n";
echo "\033[0m";

function create_directory($name)
{
    if (file_exists($name)) {
        echo "| " . $name . " \033[0;31m(already exists)\033[1;33m\n";
    } else {
        mkdir($name);
        echo "| " . $name . "\n";
    }
}

function create_file($name, $directory = null)
{
    global $source;

    $path = $directory ? $directory . '/' . $name : $name;

    if (file_exists($path)) {
        echo "| " . $path . " \033[0;31m(already exists)\033[1;33m\n";
    } else {
        if (($content = file_get_contents($source . $path)) === false) {
            echo "| " . $path . " \033[0;31m(unable to get content)\033[1;33m\n";
        } else {
            if (file_put_contents($path, $content) === false) {
                echo "| " . $path . " \033[0;31m(unable to create)\033[1;33m\n";
            } else {
                echo "| " . $path . "\n";
            }
        }
    }
}
