#!/bin/bash
directory=/home/goodwin/crewU-bootcamp/site/content/bootcamp/

for file in $(ls $directory)
do
  echo "<a href=\"http://crewu.jwg.io/site/front/basic_linux_template.php?page=\">" >> index_page.html
  head $file -n 1 >> index_page.html
  echo "</a>" >> index_page.html
done

