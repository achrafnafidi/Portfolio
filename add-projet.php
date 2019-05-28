<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
  *{ 
    margin: 0;
    padding: 0;
    text-decoration: none;
    font-family: "montserrat";    
   

}
body{
    width: 100%;
    height: auto;
    background: rgb(20, 19, 19);
   
}

.middle{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    top: 262px;
   
}
.card{
    cursor: pointer;
    width: 340px;
    height: 500px;
    top: 262px; 
           
}
.front,.back{
    width: 100%;
    height: 100%;
    overflow: hidden;
    backface-visibility: hidden;
    position: absolute;
    transition: transform .6s linear ; 
}
.front img{
    height: 100%;
    top: 262px;
    
}
.front{
    transform: perspective(600px) rotateY(0deg);
   
}

.back{
    background: #f1f1f1;;
    transform: perspective(600px) rotateY(180deg);
}
.back-content{
    color: #2c3e50;
    text-align: center !important;
    width: 100%;
}
.sm{
    margin: 20px 0;
}
.sm a{
    display: inline-flex;
    width: 40px; 
    height: 40px;
    justify-content: center;
    align-items: center;
    color: #2c3e50;
    font-size: 18px;
    transition:0.4s;
    border-radius:50%;
    

}
.sm a:hover{
    background: #778ba0;
    transform: perspective(600px) rotateY(180deg);
}

.card:hover > .front{
        transform: perspective(300px) rotateY(-180deg);
}

.card:hover > .back{
    transform: perspective(600px) rotateY(0deg);
} 
.flitter{
    color: #006df2;
}
.card-footer{
    margin-top: 133%;
    text-align: center;
}
    </style>
    <title></title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"> 
<body>
    <center><h1>ajouter les projets</h1></center>
<form action="add-projet.php" method="POST" enctype="multipart/form-data">
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">nom projet</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm" name="nom_projet">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">statut</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="colFormLabel" placeholder="col-form-label" name="statut">
    </div>
  </div>
    <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">selectioner image</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="colFormLabel" placeholder="col-form-label" name="file">
    </div>
  </div>
    <button class="btn btn-primary" type="submit" name="ajouter">ajouter</button>
</form>
    
<?php 
   
    
        $result = $db->query('SELECT id , nom_projet , date , img , statut from projet');

        // if (isset($_GET["ajouter"])) {
            

        // }
        

        if(isset($_POST['ajouter'])){    
    $file=$_FILES['file'];
    $fileName=$_FILES['file']['name'];
    $fileTmpName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
    $fileType=$_FILES['file']['type'];
    //var_dump($fileSize);

    $fileExt= explode('.',$fileName);
    $fileActualExt=strtolower(end($fileExt));

  $nom_projet =$_POST['nom_projet'];
  $statut =$_POST["statut"];
    
    $allowed =array('jpg','jpeg','png','pdf');
       $sql = $db->prepare('INSERT INTO projet(id,nom_projet,date,img,statut) VALUES (?,?,NOW(),?,?)');

 
                $sql->execute(array(null,$nom_projet,'upload/'.$fileName,$statut));

    if(in_array($fileActualExt, $allowed)){
         if($fileError===0) {
            if($fileSize<1000000){
                // $fileNameNew=uniqid('',true).".".$fileActualExt;
                $fileDestination='upload/'.$fileName;
                move_uploaded_file($fileTmpName,$fileDestination);
                echo "success";

                

            }else { echo" file too big";}

         } else {  echo "error uploading";} 

    }else {echo "you cant upolod file";}

}
                


          


?>
</body>
</html>