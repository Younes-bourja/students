<?php include('connection.php') ; 
$filier="";

if(isset($_GET['filier'])){
      $filier=$_GET['filier'];
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
   <title> Students</title>
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
    <br><br>
    <h2  class="text-secondary text-center">Filière <?php echo $filier;?></h2>
    <div class="container">
    <h5>Semestres </h5>
      <hr>
       <br>
    <div class="row">
    <div class="col-md-4 mt-4">
    <a class="card-body bg-info text-white btn btn-block" href="modules.php?filier=<?php echo $filier; ?>&s=S1" style="height: 200px;width: 97;margin: auto;border-radius: 15px;font-size:28px;">
							 	<div class="card-text text-center mt-5" > S1</div>
							</a>
          </div>
          <div class="col-md-4 mt-4">
    <a class="card-body bg-info text-white btn btn-block" href="modules.php?filier=<?php echo $filier; ?>&s=S2" style="height: 200px;width: 97;margin: auto;border-radius: 15px;font-size:28px;">
							 	<div class="card-text text-center mt-5">  S2</div>
							</a>
          </div> 
           <div class="col-md-4 mt-4">
    <a class="card-body bg-info text-white btn btn-block" href="modules.php?filier=<?php echo $filier; ?>&s=S3" style="height: 200px;width: 97;margin: auto;border-radius: 15px;font-size:28px;">
							 	<div class="card-text text-center mt-5">   S3 </div>
							</a>
          </div> 
           <div class="col-md-4 mt-4">
    <a class="card-body bg-info text-white btn btn-block" href="modules.php?filier=<?php echo $filier; ?>&s=S4" style="height: 200px;width: 97;margin: auto;border-radius: 15px;font-size:28px;">
							 	<div class="card-text text-center mt-5"> S4 </div>
							</a>
          </div> 
           <div class="col-md-4 mt-4">
    <a class="card-body bg-info text-white btn btn-block" href="modules.php?filier=<?php echo $filier; ?>&s=S5" style="height: 200px;width: 97;margin: auto;border-radius: 15px;font-size:28px;">
							 	<div class="card-text text-center mt-5"> S5</div>
							</a>
          </div> 
           <div class="col-md-4 mt-4">
    <a class="card-body bg-info text-white btn btn-block" href="modules.php?filier=<?php echo $filier; ?>&s=S6" style="height: 200px;width: 97;margin: auto;border-radius: 15px;font-size:28px;">
							 	<div class="card-text text-center mt-5"> S6 </div>
							</a>
          </div>
         
          </div>
        
        </div>
         </div>  
         <script src="public/assets/js/custom.js"></script>
    
</body>
</html>
