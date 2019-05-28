<?php
include "config1.php"; 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>portfolio achraf</title>
        <meta charset="utf-8">
        <script type="text/javascript" src="index1.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <style type="text/css">
          .backg .aa #canvas{
               margin-left: 9%;
                margin-bottom: 40%;
                width: 100%;
                height: 100%;
          }
        </style>

    </head>
<body>
  <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light" >
      <div class="fixed-top">
      <img class ="language" src="language/france.png"><a href="http://localhost/php/portfolio/portfolio.php?lang=fr">  francais</a><br>
      <img class="language" src="language/anglais.png"><a href="http://localhost/php/portfolio/portfolio.php?lang=en">  anglais</a>
    </div>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01" >
              <ul class="nav nav-pills mr-auto mb-2 mt-lg-0">
                    <li class="nav-item">
                        <a href=""><a class="nav-link" href=""><?php echo $lang['home']?></a></a>
                    </li>
                    <li class="nav-item">
                       <a href=""><a class="nav-link" href="#me"> <?php echo $lang['about']?><span class="sr-only">(current)</span></a></a>
                    </li>
                    <li class="nav-item">
                       <a href=""><a class="nav-link" href="#work"><?php echo $lang['work']?></a></a>
                    </li>
                    <li class="nav-item">
                        <a href=""><a class="nav-link" href="#contact"> <?php echo $lang['contact']?><span class="sr-only">(current)</span></a></a>
                    </li>
               </ul>
        </div>
  </nav>

  	<section class="backg">
        	<form class="aa" >            
                 <canvas id="canvas"></canvas>
          </form>
  	</section>
	<!-- popup -->
	<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  		<video width="900" controls>
            			           <source src="achraf-nafidi.mp4" type="video/mp4">
            			   </video>
                </div>
          </div>
  </div>
  <!-- about-me -->
    <?php include("about-me.php"); ?>

  <!-- diplome -->
            <h1 class="title" id="about-me">
              <span class="text-wrapper"><span class="line line1"></span>
                <span class="letters">diplome</span>
                <span class="line line2"></span>
              </span>
            </h1>

  <nav class="diplome">
      <div class="white">
          <div class="panels">
                <div class="panel panel1" >
                    <p >2015-2016</p>
                </div>

                <div class="panel panel2" >
                    <p>2016-2017</p>
                </div>
                <div class="panel panel3">
                    <p>2017-2018</p>
                </div>
                <div class="panel panel4">
                    <p>2018-2019</p>
                </div>
          </div>
      </div>s
<!-- projet -->
  <h1 id="work" class="ml3"><?php echo $lang['work']?></h1> 
    <br>
    <?php include("card.php"); ?>
 <br>
<nav id="contact" class="contact"> 
  <?php include("contact.php"); ?>

</nav>
</div>
<!-- animation project -->

<?php 
include "js/panel.php";
?>



<!-- animation name -->

<?php 
include "js/animation.php";
?>
<!-- alert -->



<script type="text/javascript">
  $( document ).ready(function(){
        $('#alert').fadeIn('slow', function(){
            $('#alert').delay(5000).fadeOut(); 
        });
    });
</script>

</body>
</html>