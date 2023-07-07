<?php include('connection.php') ; ?>

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
<body  style="background-color: #e3f2fd;">
<div id="global-loader" class=" bg-light h-100 w-100" style="position: absolute;height: 100;width: 100;z-index: 1;" >
			<div style=" padding: 20% 0;text-align: center;">
            <img src="public/assets/img/loader.svg" class="loader-img" alt="Loader" >
            <br>
            <span class="text-secondary">جاري التحميل</span>
            </div>
	</div>
    <nav class="navbar navbar-dark bg-dark text-center">
    <div class="navbar-brand mb-0 h1 text-center"> <br></div>
             

    </nav> 
    <br>
    <div class="container-fluid">
    <div class="">
    
    <div class="row">
      <div class="col-md-2 h-100 w-100 "> </div>
      <div class="col-md-8">
      <h3  class="text-secondary ">Filière </h3>
      <hr>
      <div class="row">
    <div class="col-md-4 mt-4">
    <a class="card-body bg-info text-white btn  btn-block" href="semestre.php?filier=Geographie" style="height: 200px;width: 97;margin: auto;border-radius: 15px;font-size:25px;">
							 	<div class="card-text text-center mt-5" > Geographie</div>
							</a>
          </div>
          <div class="col-md-4 mt-4">
    <a class="card-body bg-info text-white btn btn-block" href="semestre.php?filier=Etudes Francaise" style="height: 200px;width: 97;margin: auto;border-radius: 15px;font-size:25px;">
							 	<div class="card-text text-center mt-5"> Etudes Francaise</div>
							</a>
          </div> 
           <div class="col-md-4 mt-4">
    <a class="card-body bg-info text-white btn btn-block" href="semestre.php?filier=الدراسات العربية" style="height: 200px;width: 97;margin: auto;border-radius: 15px;font-size:25px;">
							 	<div class="card-text text-center mt-5">      الدراسات العربية</div>
							</a>
          </div> 
           <div class="col-md-4 mt-4">
    <a class="card-body bg-info text-white btn btn-block" href="semestre.php?filier=الدراسات الإسلامية" style="height: 200px;width: 97;margin: auto;border-radius: 15px;font-size:25px;">
							 	<div class="card-text text-center mt-5"> الدراسات الإسلامية</div>
							</a>
          </div> 
           <div class="col-md-4 mt-4">
    <a class="card-body bg-info text-white btn btn-block" href="semestre.php?filier=ENGLISH STUDIES" style="height: 200px;width: 97;margin: auto;border-radius: 15px;font-size:25px;">
							 	<div class="card-text text-center mt-5"> ENGLISH STUDIES</div>
							</a>
          </div> 
           <div class="col-md-4 mt-4">
    <a class="card-body bg-info text-white btn btn-block" href="semestre.php?filier=علم النفس" style="height: 200px;width: 97;margin: auto;border-radius: 15px;font-size:25px;">
							 	<div class="card-text text-center mt-5">  علم النفس</div>
							</a>
          </div>
          <div class="col-md-4 mt-4">
    <a class="card-body bg-info text-white btn btn-block" href="semestre.php?filier=تاريخ وحضارة" style="height: 200px;width: 97;margin: auto;border-radius: 15px;font-size:25px;">
							 	<div class="card-text text-center mt-5">   تاريخ وحضارة</div>
							</a>
          </div>
          <div class="col-md-4 mt-4">
    <a class="card-body bg-info text-white btn btn-block" href="semestre.php?filier=علم الاجتماع" style="height: 200px;width: 97;margin: auto;border-radius: 15px;font-size:25px;">
							 	<div class="card-text text-center mt-5"> علم الاجتماع</div>
							</a>
          </div>
          <div class="col-md-4 mt-4">
    <a class="card-body bg-info text-white btn btn-block" href="semestre.php?filier=الفلسفة" style="height: 200px;width: 97;margin: auto;border-radius: 15px;font-size:25px;">
							 	<div class="card-text text-center mt-5">الفلسفة</div>
							</a>
          </div>
        
        </div>
        <br>
         </div>  
         <div class="col-md-2 h-100 w-100 "></div>
         </div>   </div></div>  
         <script src="public/assets/js/custom.js"></script>
    
</body>
</html>
