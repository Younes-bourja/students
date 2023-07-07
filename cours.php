<?php include('connection.php') ;
$filier="";$s="";$m="";

if(isset($_GET['filier']) && isset($_GET['s'])&& isset($_GET['module'])){
      $filier=$_GET['filier'];
      $s=$_GET['s'];
      $m=$_GET['module'];
}else{header("location:/moroccanstudent");}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <title>Maroc Students</title>
</head>
<body style="background-color: #e3f2fd;" >
<div id="global-loader" class=" bg-light h-100 w-100" style="position: absolute;height: 100;width: 100;z-index: 1;" >
			<div style=" padding: 20% 0;text-align: center;">
            <img src="public/assets/img/loader.svg" class="loader-img" alt="Loader" >
            <br>
            <span class="text-secondary">جاري التحميل</span>
            </div>
	</div>
    <nav class="navbar navbar-dark bg-dark text-center">
    <div class="navbar-brand mb-0 h1 text-center"><br></div>
             

    </nav> 
    <br> <br>
    <div class="container">
    <h3  class="text-secondary text-center"><?php echo $filier.'('.$s.')-'.$m;?></h3>
<hr>
    <div class="row mt-5">
       <?php   $result = mysqli_query($con, "SELECT * FROM cours WHERE filiere='$filier' AND semestre='$s' AND  module='$m' ;");
      $i=1;
      while($row = $result->fetch_assoc()): 
           $i=$i+1;  ?> 
             <div class="col-md-8 mt-3" style="margin: auto;">
           <form action="pdf.php" method="post">
           <input type="text" value="<?php echo $row['id']; ?>" name="cour" hidden>

 
    <button class="card-body bg-info text-white btn-sm  btn-block" type="submit" style="width: 97%;margin: auto;border-radius: 15px;font-size:18px;">
                  <div class="card-text text-center" >  <?php echo $row['titre'];?></div>
							</button>
          
          </form>
        </div>
     <?php  endwhile;
          if($i==1){echo "<h3 class='text-secondary mt-5' style='margin: auto;'>...سيتم إضافة المحتوى قريبا </h3>";};?>

         
          </div>
        
        </div>
         </div>
         <script src="public/assets/js/custom.js"></script>
      
</body>
</html>
