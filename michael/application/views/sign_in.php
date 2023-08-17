<style type="text/css">
   body{
    /*font-family: Verdana, Geneva, Tahoma, sans-serif;*/
    /* background-image: url("nature.jpg"); */
    /* border: 1px solid #ffd12c90; */
    /* border-width: 50px; */
/*    background-color:black;
    width: auto;
    height: auto;
    text-align: center;
    margin:auto;
    padding: 200px;
    font-size:auto;
    max-width: auto;
    min-width: auto;
    font-weight: 500;*/
    /*api key: 38775867-b5a5995bd343935413f19dfbd;*/
}

body {
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  background-color:black;
  text-align: center;
  font-size: auto;
    padding: 50px;

  font-weight: 500;
}
.input{
    color: aqua;
    border-radius: 3px;
    padding: 20px;
    color: aqua;
}
.input input{
    border-radius: 20px;
    padding: 10px;
    margin-left:60px;
}
.Email{
    color: aqua;
    border-radius: 3px;
    padding: 20px;
}
.Email input{
    padding:10px;
    border-radius:90px ;
    margin-left: 89px;
}

.Profile{
    color: aqua;
    border-radius: 3px;
    padding: 20px;
}
.Profile input{
/*    padding:10px;
    border-radius:90px ;
    margin-left: 89px;*/

    padding: 0px;
border-radius: 178px;
margin-left: 22px;
}
.button{
    
    margin-left:90px;
}
.button button{
font-size: large;
 border-radius: 20px;
    padding: 10px;
    margin-right:60px;
    margin-top: 30px;
    background-color: aquamarine;
}
.regform{
    background-color:rgba(128, 128, 128, 0.6);
    width: 500px;
    height: 450px;
    border-radius:30px;
    margin: auto;
}
.Register{
    padding-top:50px;
    font-weight: 300px;
}
input:focus{
    background-color: aqua;
}
/* here the input is the class name */
.input input{
    accent-color:black;
    
}
/* here the first input is the classname and the second input is the input */
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="reg.css" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>
    <div class="regform">
        <div class="Register">
        <form action="Sign_in/Signn" method="post" enctype="multipart/form-data" style="color: aqua;" font-size="100px">
        <div class="input">
        <label for="User name">User name</label>
        <input type="text" name="name" id="name" required>
    </div>

    <div class="Profile">


         <label id="profile" for="profileImage">Profile Image:</label>

<input type="file" id="profileImage" class="form-control" id="img" name="file[]" accept="image/*"required>



<!-- <span class="help-block"> You can send an image also.</span> -->



       </div>

     <div class="Email">
        <label for="Email">Email</label>
        <input type="Email" name="Email" id="Email" required>
    </div>



   
    
    <div class="input">
        <label for="Password">Password</label>
        <input type="Password" name="Password" id="Password" required>
    </div>

   
   
    
    <div class="button">
        <button type="submit">Register Now</button>
    </div>
 </form>
</div>
</div>
</body>
</html>






<script type="text/javascript">

  <?php if (isset($_SESSION['num_added'])) {?>

    toastr.success('<?php echo $_SESSION['num_added']; ?>');

    <?php unset($_SESSION['num_added']);} ?>
    </script>