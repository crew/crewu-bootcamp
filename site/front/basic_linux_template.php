<?php
 
/*
the idea here is to post the section # that we want, and then php will "create" (dynamically)
the page that we are looking for... but probably not the one we deserve

this should just be a matter of getting the section number, adding it to some strings to create links to files
after that you should just be able to do the back/fwd links by some "subtraction" and do the content includes by just getting that file
 */
?>
<head>
  <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../css/main.css">
</head>
<body>
  <div class="container" id="head" >
    <!-- head included by php, delete this html when done -->
    <div class="row">
      <div class="well" style="margin-top:5%;">
        <h1 style="display: inline-block;"><img src="crew.png" alt="Crew" style="width:100px; margin-bottom:20px; margin-right:50px;">Crew-U </h1>
        <h3 style="display: inline-block;"><a class="toplink"> link </a>  <a class="toplink"> link </a> <a class="toplink"> LINK </a> </h3>
        <h1 style=" margin-left: 50px; display: inline-block"> some thing</h1>
      </div>
      <?php include "header.html" ?>
    </div>
  </div>


  <div class ="container">
    <div class="span5" id="nav" style="text-align:center">
      <h5 style="display: inline-block;"><a>Back</a></h5><h4 style="display: inline-block; margin-right: 50px; margin-left: 50px;"> Title </h4> <h5 style="display:inline-block;"><a> Forward</a></h5>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="well" id="content_box">
        foooo <br> foo <br> foo
      </div>
    </div>
  </div>

  <div class ="container">
    <div class="span5" id="nav" style="text-align:center">
      <h5 style="display: inline-block;"><a>Back</a></h5><h4 style="display: inline-block; margin-right: 50px; margin-left: 50px;"> Title </h4> <h5 style="display:inline-block;"><a> Forward</a></h5>
    </div>
  </div>


</body>
