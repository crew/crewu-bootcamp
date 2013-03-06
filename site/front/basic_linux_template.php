<?php

/*
the idea here is to post the section # that we want, and then php will "create" (dynamically)
the page that we are looking for... but probably not the one we deserve

this should just be a matter of getting the section number, adding it to some strings to create links to files
after that you should just be able to do the back/fwd links by some "subtraction" and do the content includes by just getting that file
 */


$page = $_GET["page"];
$path = "../content/section".$page.".html";

if(intval($page)>1){
  $backpath = "href=\"http://crewu.jwg.io/front/basic_linux_template.php?page=".(intval($page)-1)."\"";
}else{
    $backpath="";
}

if(intval($page)<12){
  $frontpath = "href=\"http://crewu.jwg.io/front/basic_linux_template.php?page=".(intval($page)+1)."\"";
}else{
    $frontpath="";
}
?>
<head>
  <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../css/main.css">
</head>
<body>
  <div class="container" id="head" >
    <!-- head included by php, delete this html when done -->
      <?php include "header.html" ?>
    </div>
  </div>


  <div class ="container">
    <div class="span5" id="nav" style="text-align:center">
    <h5 style="display: inline-block;"><a <?php echo $backpath?>>Back</a></h5>
      <h4 style="display: inline-block; margin-right: 50px; margin-left: 50px;"> Title </h4> 
      <h5 style="display:inline-block;"><a <?php echo $frontpath?>> Forward</a></h5>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="well" id="content_box">
        <?php include $path ?>
      </div>
    </div>
  </div>

  <div class ="container">
    <?php include "footer.html"?>
  </div>


</body>
