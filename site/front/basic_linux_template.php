<?php

/*
the idea here is to post the section # that we want, and then php will "create" (dynamically)
the page that we are looking for...

this should just be a matter of getting the section number, adding it to some strings to create links to files
after that you should just be able to do the back/fwd links by some "subtraction" and do the content includes by just getting that file
 */
include "../Markdown.php";
$dir = "../content/bootcamp/";
$dirsize = count(scandir($dir))-2;
// get our page number
$page = $_GET["page"];
// get the path to our html for this session
$path = "../content/bootcamp/section".$page.".md";
// section title
$title = "Section ".$page;
// sort out the fwd /back buttons & thier pathing
// the back button
if(intval($page)>1){
  $backpath = "href=\"/site/front/basic_linux_template.php?page=".(intval($page)-1)."\"";
}else{
  $backpath="href=\"#\" class=\"no_link\"";
}
// the front button
if(intval($page)+1<$dirsize){
  $frontpath = "href=\"/site/front/basic_linux_template.php?page=".(intval($page)+1)."\"";
}else{
  $frontpath="href=\"#\" class=\"no_link\"";
}
?>



<head>
  <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../css/main.css">
</head>
<body>
  <div class ="container">
    <div class="row">
      <?php include "header.html" ?>
    </div>
  </div>

  <div class ="row">
    <div class="container">
      <div  id="nav" style="text-align:center">
        <h5 style="display: inline-block;"><i class="icon-chevron-left"></i><a <?php echo $backpath?>>Back</a></h5>
        <h4 style="display: inline-block; margin-right: 50px; margin-left: 50px;"><?php echo $title ?> </h4> 
        <h5 style="display:inline-block;"><a <?php echo $frontpath?>> Forward<i class="icon-chevron-right"></i></a></h5>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="well" id="content_box">
        <?php $contents = file_get_contents($path);
              echo Markdown($contents);
        ?>
          <h5 style="float:left; display: inline-block;"><i class="icon-chevron-left"></i><a <?php echo $backpath?>>Back</a></h5>
          <h5 style="float:right; display:inline-block;"><a <?php echo $frontpath?>> Forward<i class="icon-chevron-right"></i></a></h5>
      </div>
    </div>
  </div>

  <div class ="container">
    <?php include "footer.html"?>
  </div>
</body>
