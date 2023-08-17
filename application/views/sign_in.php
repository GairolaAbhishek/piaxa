
<style type="text/css">
  @import url("https://fonts.googleapis.com/css2?family=Baloo+Tamma+2&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Baloo Tamma 2", cursive;
}

body {
  display: grid;
  place-items: center;
  margin: 0 auto;
  min-block-size: 100vh;
  background: #2c3338;
  color: #606468;
}

#sign_in,
#sign_up {
  inline-size: 90%;
  max-inline-size: 23rem;
  margin-inline: auto;
}

span {
  color: #eee;
  font-size: 1.5rem;
  margin-bottom: 0.5rem;
  letter-spacing: 3px;
  font-weight: 600;
  text-transform: uppercase;
  margin: 0 auto;
}

form {
  display: grid;
  gap: 0.875rem;
}
#field {
  display: flex;
}

label,
input {
  border-radius: 0.35rem;
  padding: 1rem;
  outline: 0;
}

label {
  background-color: #363b41;
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}

i {
  block-size: 1em;
  color: #606468;
  inline-size: 1em;
  vertical-align: middle;
}

input {
  font-family: "Baloo Tamma 2", cursive;
  border: 0;
  transition: background-color 0.3s;
  inline-size: 100%;
  color: #eee;
  vertical-align: center;
}

input::placeholder {
  font-family: "Baloo Tamma 2", cursive;
  vertical-align: center;
}

input:not(input[type="submit"]) {
  background-color: #3b4148;
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}

input:not(input[type="submit"]):hover,
input:not(input[type="submit"]):focus {
  background-color: #434a52;
}

input[type="submit"] {
  cursor: pointer;
  background-color: #ea4c88;
  color: #eee;
  font-weight: 700;
  text-transform: uppercase;
  font-family: "Baloo Tamma 2", cursive;
  line-height: 1.2;
}

input[type="submit"]:focus,
input[type="submit"]:hover {
  background-color: #d44179;
}

p {
  margin-block: 1.5rem;
  text-align: center;
}
button {
  background: transparent;
  border: none;
}

a {
  cursor: pointer;
  color: #eee;
  outline: 0;
  text-decoration: none;
  padding: 0 0.3rem;
}

a:focus,
a:hover {
  text-decoration: underline;
}

#sign_up {
  display: none;
}

</style>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login</title>
    <script
      src="https://kit.fontawesome.com/b6b9586b26.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div id="sign_in">
   <form class="no-margin" action="Sign_in/register" method="post" enctype="multipart/form-data">
        <span>Sign Up</span>
        <div id="field">
          <label><i class="fas fa-user"></i></label>
          <input type="text" placeholder="Username" name="name" required />
        </div>

        <div id="field">
          <label><i class="fas fa-envelope-open"></i></label>
          <input type="email" placeholder="Email Address" name="email" required />
        </div>

        <div id="field">
          <label><i class="fas fa-lock"></i></label>
          <input type="password" placeholder="Password" name="password" required />
        </div>

        <div id="field">
          <label><i class="fas fa-lock"></i></label>
          <input type="file" class="form-control" name="image[]"  placeholder="Profile Image" accept="Image/*">
        </div>

        <div id="field">
          <input type="submit" value="Register" />
        </div>
      </form>

   
    </div>
    <div id="">
    

    
    </div>

    <script src="script.js"></script>
  </body>
</html>
<script type="text/javascript">
  let x = document.getElementById("sign_in");
let y = document.getElementById("sign_up");

function signIn() {
  y.style.display = "none";
  x.style.display = "revert";
}
function signUp() {
  x.style.display = "none";
  y.style.display = "revert";
}

</script>