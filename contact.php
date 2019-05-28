
<!DOCTYPE html>
<html>
<head>
	<title>achy</title>
</head>
<meta charset="utf-8">
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/contact.css">
<body>
    <!-- <?php
        // include("portfolio.php");
     ?> -->
<section id="contact">
        <div class="container">
                    <div class="section-title">
                        <h2  class="ml13">Contact <span class="accent-text"><?php echo $lang['moi']?></span></h2>
                    </div>
                <div class="row center-xs center-sm center-md center-lg">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="contact-info">
                                    <div class="contact-block">
                                            <i class="fas fa-mobile-alt"></i>
                                            <div class="contact-text">
                                                <p>appel</p>
                                                <p>+212-681095283</p>
                                            </div>
                                    </div>
                                    <div class="contact-block">
                                            <i class="far fa-envelope"></i>
                                            <div class="contact-text">
                                                <p>Email</p>
                                                <p>achrafnafidi7@gmail.com</p>
                                            </div>
                                     </div>
                                        <div class="contact-block">
                                                <i class="fas fa-location-arrow"></i>
                                                <div class="contact-text">
                                                    <p>Address</p>
                                                    <p>QU AMAL RUE  N°10</p>
                                                </div>
                                        </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                            <form id="contact-form" action="contact.php" method="post" >
                                 
                                        <div class="field">
                                            Email<br>
                                            <input type="email" id="email" placeholder="xyz@gmail.com" required name="email">
                                        </div>
                                        <div class="field">
                                            Subject<br>
                                            <input type="text" id="subject" placeholder="objet" required name="subject">
                                        </div>
                                        <div class="field">
                                            Message<br>
                                            <textarea id="message" rows="10" cols="75" required name="message" placeholder="write somthing."> </textarea>
                                        </div>
                                        <br>

                                        <button type="submit" class="btn btn-primary" name="submit"><?php echo $lang['send']?></button>
                            </form>
                    </div>
                
                </div>

        </div>
    </div>
</section>
<?php
if (isset($_POST['submit']))
{
        if(mail("achrafnafidi7@gmail.com",$_POST['subject'],$_POST['email']." , ".$_POST['message']))
        {
             $cc=<<<prod
                    <div class="alert alert-primary" role="alert">
                      message envoyer!
                    </div>
prod;
               echo $cc; 
        }
        
}
?>
<script type="text/javascript">
    
    // Wrap every letter in a span
$('.ml13').each(function(){
  $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
});

anime.timeline({loop: true})
  .add({
    targets: '.ml13 .letter',
    translateY: [100,0],
    translateZ: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 1400,
    delay: function(el, i) {
      return 300 + 30 * i;
    }
  }).add({
    targets: '.ml13 .letter',
    translateY: [0,-100],
    opacity: [1,0],
    easing: "easeInExpo",
    duration: 1200,
    delay: function(el, i) {
      return 100 + 30 * i;
    }
  });

</script>

</body>
</html>