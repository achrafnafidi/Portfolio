<!DOCTYPE html>
<html>
<head>
	<title>achy</title>
</head>
<link rel="stylesheet" type="text/css" href="css/style2.css">
<style type="text/css">
  .description p{
    font-size: 14px;
    color: black;
  }
   .card .back h3{
    color: blue !important;
   }
</style>
<body>
	<div class="love">
	 <?php
       include("config.php");
          $result = $db->query('SELECT id , nom_projet , date , img , statut from projet');
               while($row = $result->fetch())
                  {
                    $ct=<<<prod

                      <section class="singlecard">
    <div id="card1" class="card">
      <figure class="front"><img src="{$row["img"]}" /></figure>
      <figure class="back">
        <h3 class="nom"> {$row["nom_projet"]} </h3>
        <div class="description">
          <p>{$row["statut"]} </p>
        </div>
      </figure>
    </div>
  </section>
                  
prod;
                        echo $ct;
                  }   
  ?>
  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>
</body>
</html>