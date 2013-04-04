<?php

/*
the idea here is to post the section # that we want, and then php will "create" (dynamically)
the page that we are looking for... but probably not the one we deserve

this should just be a matter of getting the section number, adding it to some strings to create links to files
after that you should just be able to do the back/fwd links by some "subtraction" and do the content includes by just getting that file
 */

// get our page number
$index = $_GET["index"];
// get the path to our html for the table of contents
$dir = "../content/".$index."/";
$path = "../content/".$index."/index_page.html";
// section title
$title = "Table of Contents";

?>
<head>
  <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../css/main.css">
</head>
<body>
  <div class="container" id="head" >

  <div class="row">
    <!-- head included by php, delete this html when done -->
      <?php include "header.html" ?>
    </div>
  </div>
  </div>

  <div class ="container">
    <div class="span5" id="nav" style="text-align:center">
    <h4 style="display: inline-block; margin-right: 50px; margin-left: 50px;"><?php echo $title?> </h4>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="well" id="content_box">
        <?php
          $exclude_list = array(".", "..");
          $shortlist = array();
          $longlist = array();
          $dir_array = array_diff(scandir($dir), $exclude_list);
          sort($dir_array);
          $dir_length = count($dir_array)-2;
          $i=0;

          foreach($dir_array as &$item){
            // if the string is a 2 number string...:
            if(strlen($item) == 14){
              array_push($longlist, $item);
            }else{
              array_push($shortlist, $item);
            }
          }
          $result = array_merge($shortlist, $longlist);

          foreach ($result as &$value) {
            $cmd = "head -n 1 ../content/bootcamp/".$value;
            $output = shell_exec($cmd);
            //echo "<a href=\"basic_linux_template.php?page=1>".$output."</a>";
            $i++;
            echo "<h5><a href=\"basic_linux_template.php?page=".$i."\">";
            echo $output;
            echo "</a></h5><br>";
          }
        ?>
      </div>
    </div>
  </div>

  <div class ="container">
    <?php include "footer.html"?>
  </div>
</body>
