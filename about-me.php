<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.1/css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/about-me.css">
<body>
  <div id="me">
  	<br>
	<h1 id="about-me" ><?php echo $lang['about']?></h1>
	<nav class="about-me">
		<div class="achraf" >

			<div id="width" >
					<p class="text-left"><?php echo $lang['text']?></p>
					<p class="text-left"><?php echo $lang['text1']?></p>
					<p class="text-left"><?php echo $lang['text2']?></p>
			</div>

			<div id="skills" >

					<p>Linux : </p>
					<div class="progress">
					<div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
					</div>

					<br><p>c++ : </p>
					<div class="progress">
					<div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="100" aria-valuemin="100" aria-valuemax="100">80%</div>
					</div>

					<br><p>html : </p>
					<div class="progress">
					<div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">80%</div>
					</div>

					<br><p>css : </p>
					<div class="progress">
					<div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
					</div>

					<br><p>javascript : </p>
					<div class="progress">
					<div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">70%</div>
					</div>

					<br><p>bootstrap : </p>
					<div class="progress">
					<div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">60%</div>
					</div>

					<br><p>php : </p>
					<div class="progress">
					<div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
					</div>
				
			</div>
		</div>
	</nav>
	<br>
	<br>
</div>

 <form id="btn">
              		 <a download href="achraf cv-converti.pdf"><button type="button" class="btn btn-primary" name="cv-pdf"><?php echo $lang['downlaod']?> cv</button></a>
              		<button type="button" class="btn btn-primary" name="cv-video" data-toggle="modal" data-target=".bd-example-modal-lg"><?php echo $lang['watch']?> cv</button>
 </form>
 
	<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.1/js/mdb.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>


</body>
</html>