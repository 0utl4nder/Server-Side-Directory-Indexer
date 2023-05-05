#!/bin/bash

function list_directory {
    dir_list=($(ls -d */))

    for item in ${dir_list[@]}; do
        if [ $(ls $item | grep -x "index.html") == "index.html" ]; then
            echo "Indexer found an <b>index.html</b> in: <a href="$item/index.html">$item</a> <br>"
        fi
    done
}

echo "Content-type: text/html"
echo ""
echo "<html>"
echo "<head>"
echo "<title>Server Indexer BASH</title>"
echo "</head>"
echo "<body>"
list_directory
echo "</body>"
echo "</html>"
# By 0utl4nder https://github.com/0utl4nder
