<?php include('connection.php') ;
$filier="";$s="";

if(isset($_GET['filier']) && isset($_GET['s'])){
      $filier=$_GET['filier'];
      $s=$_GET['s'];
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
   <title>Students</title>
   <link rel="icon" type="image/x-icon" href="images/130manstudent2_100617.ico">
</head>
<body style="background-color: #e3f2fd;">
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
    <br> <br> <br>
    <h2  class="text-secondary text-center">Filière <?php echo $filier.'('.$s.')';?></h2>

    <div class="container">
    <h5 style="font-family: 'Lexend Deca', sans-serif;">Modules </h5>
      <hr>
    <div class="row">
       <?php   $result = mysqli_query($con, "SELECT * FROM students WHERE filiere='$filier' AND semestre='$s' ;");
         $i=1;
       while($row = $result->fetch_assoc()): 
            $p="module";
        while($i<=8) : if($row[$p.$i]!=""): ?>
    <div class="col-md-4 mt-3 card border-0" style="background-color: #e3f2fd;">
    <a class="card-body bg-info text-white  btn-block" href="cours.php?filier=<?php echo $filier; ?>&s=<?php echo $s."&module=".$row[$p.$i]; ?>" style="height: 200px;width: 97;margin: auto;border-radius: 15px;font-size:28px;">
    <div class="card-text text-center mt-4" style="text-align: center;" >  <?php echo $row[$p.$i];?></div>
							</a>
          </div>
          
     <?php  endif;$i=$i+1;  endwhile;endwhile;
     if($i==1){echo "<h3 class='text-secondary mt-5' style='margin: auto;'>...سيتم إضافة المحتوى قريبا </h3>";};?>
        
          </div>
        
        </div>
         </div>  
         <script src="public/assets/js/custom.js"></script>
    
</body>
</html>
