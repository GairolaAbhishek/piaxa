

<style type="text/css">
   * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Open Sans', sans-serif;
      background-color: #222;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-container {
      width: 600px;
      margin: 0 auto;
      padding: 50px;
      background-color: #333;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      color: #fff;
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
      font-size: 36px;
      color: #b38bff;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin-bottom: 10px;
      font-size: 18px;
    }

    input {
      padding: 12px;
      border: none;
      border-radius: 5px;
      margin-bottom: 20px;
      font-size: 16px;
      color: #fff;
      background-color: #555;
    }

    button {
      padding: 10px;
      background-color: #b38bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 18px;
      transition: background-color 0.2s ease-in-out;
    }

    button:hover {
      background-color: #8c5fb2;
    }

    a {
      text-decoration: none;
      color: #b38bff;
      font-size: 18px;
      transition: color 0.2s ease-in-out;
    }

    a:hover {
      color: #8c5fb2;
    }

    p {
      text-align: center;
      margin: 8px;
    }
</style>
<div class="container">
    <div class="form-container" id="login-form">
      <h1>Login</h1>
      
      <form id="loginform" action="Login/loginfun" method="post" >

        <label for="email">Email</label>
        <input type="text" id="email" name="email" required>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>
      </form>
      <p>Don't have an account? <a href="http://localhost/ci_3/Smsapp_CI/Sign_in" id="signup-link">Sign up</a></p>
    </div>

    
  </div>



  <script type="text/javascript">

  <?php if (isset($_SESSION['update']) && $_SESSION['update']=='1') { ?>

    print_r('fhysg');

    <?php unset($_SESSION['update']); }

     if (isset($_SESSION['update']) && $_SESSION['update']=='0'){?>

    toastr.error('Account not updated','Failed');

    <?php unset($_SESSION['update']);    } ?>

</script>

    <script src="<?php echo base_url(); ?>vendors/js/jquery.dataTables.min.js"></script>

  <script src="<?php echo base_url(); ?>vendors/js/dataTables.bootstrap4.min.js"></script>

<script src="<?php echo base_url(); ?>vendors/js/jquery.min.js"></script>

  <script src="<?php echo base_url(); ?>vendors/js/popper.min.js"></script>

  <script src="<?php echo base_url(); ?>vendors/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url(); ?>vendors/js/toastr.min.js"></script>


<script type="text/javascript">

  $('#loginform').submit(function(evt){


    evt.preventDefault();

    var form = $(this).serialize();

  $.ajax({

        type : 'ajax',

        method : 'post',

        data : form,

        dataType : 'json',

        url : '<?php echo base_url(); ?>Login/loginfun',

        success:function(r){

console.log(r);

          if (r==true) {

          location.href = '<?php echo base_url();?>Dashboard';

       



        }

        else if (r == 'wrong') {

                              toastr.error('username or password wrong','Login Failed');

        }

        else{

                    console.log(r);





        }

        },

        error:function(xhr,status,error){

          console.log(xhr.responseText);

        }

  });

  })

</script>

<script type="text/javascript">
  const rmCheck = document.getElementById("rememberme"),
    emailInput = document.getElementById("email");
    passwordInput = document.getElementById("password");

if (localStorage.checkbox && localStorage.checkbox !== "") {
  rmCheck.setAttribute("checked", "checked");
  emailInput.value = localStorage.username;
   passwordInput.value = localStorage.password;
} else {
  rmCheck.removeAttribute("checked");
  emailInput.value = "";
  passwordInput.value = "";
}

function lsRememberMe() {
  if (rmCheck.checked && emailInput.value !== "") {
    localStorage.username = emailInput.value;
    localStorage.password = passwordInput.value;
    localStorage.checkbox = rmCheck.value;
  } else {
    localStorage.username = "";
    localStorage.password = "";
    localStorage.checkbox = "";
  }
}
</script>