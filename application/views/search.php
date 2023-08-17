	<?php include('header.php'); ?>
	<style type="text/css">
		.fun {
  margin-left: 243px;
  /*margin-bottom: -19px;*/
  margin-top: 8%;
}



.ff {

    margin-left: 221px;

}
  
       

	</style>
	<!DOCTYPE html>
<html>

    <main class="main">





      <ol class="breadcrumb">



        <li class="breadcrumb-item">Home</li>






        <li class="breadcrumb-item active">Search</li>





      </ol>




<!-- <head>
    <title>Pixabay Image Search and Download</title>
</head> -->
<!-- <div class="box-container"> -->

    
<body>
  


<h2 class="ff">Pixabay Image Search</h2>
<form method="post" action="search/get">
	<div class="container-fluid">
    <input class="fun" type="text" name="searchTerm" placeholder="Enter search term">
		
    <button class="btn btn-sm btn-success" type="submit">Search</button>
	</div>

</form>


<!-- </div> -->

</body>
</html>



<?php include('footer.php'); ?>