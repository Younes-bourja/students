<?php include('connection.php') ; 
$cour="";

if( isset($_POST['cour'])){
      $cour=$_POST['cour'];
    
}else{header("location:/moroccanstudent");}
 ?>

       <?php   $result = mysqli_query($con, "SELECT * FROM cours WHERE id='$cour'  ;");
     $row = $result->fetch_assoc() ;
             ?>
  
  <html>
    <head>
        <title>Students</title>
        <link rel="icon" type="image/x-icon" href="images/130manstudent2_100617.ico">

        <style type="text/css">
            #myiframe {
                width: 100%;
                height: 100%;
            }
        </style>
    </head>
    <body>
        <div id="scroller">
            <iframe name="myiframe" id="myiframe" 
            src="<?php echo 'les cours/'.$row['filiere'].'/'.$row['semestre'].'/'.$row['module'].'/'.$row['cours']; ?>"></iframe>
       </div>
    </body>
</html> 