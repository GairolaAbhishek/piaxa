<?php include('header.php'); ?>
<!DOCTYPE html>
<html>

    <main class="main">






<style type="text/css">
html, body {
   font-family: "Roboto", sans-serif;
   font-size: 88%;
}
 body {
   display: grid;
   grid-template-rows: auto 1fr auto;
   background-image: url("https://i.postimg.cc/fbSXnBct/video.png");
   background-attachment: fixed;
   background-size: contain;
   background-position: center;
   background-repeat: no-repeat;
}

main section .profile-pic .pic:focus .lx-btn, main section .profile-pic .pic:focus-within .lx-btn, main section .profile-pic .pic:hover .lx-btn {
  opacity: 0 !important;
  display: flex;
}
.menu-collapsed .lx-row.align-stretch {
  display: flex;
  justify-content: flex-start;
  margin-left: 50px;
}
.menu-collapsed .lx-container-70 {
  width: 60% !important;
}
.menu-collapsed .lx-container-70 {
  width: 90% !Important;
}
.lx-row.align-stretch {
  display: flex;
  justify-content: center;
}
main section .lx-column.column-user-pic {
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
}
.title {
  width: 100% !important;
  margin: auto;
  display: flex;
  justify-content: center;
}


 main {
   min-height: 100vh;
   padding: 2rem 0;
}
 main section {
   width: 100%;
}
 main section .lx-column.column-user-pic {
   display: flex;
   align-items: flex-start;
   justify-content: flex-end;
}
 main section .profile-pic {
   width: auto;
   max-width: 20rem;
   margin: 3rem 2rem;
   padding: 2rem;
   display: flex;
   flex-flow: wrap column;
   align-items: center;
   justify-content: center;
   border-radius: 0.25rem;
   background-color: white;
}
 main section .profile-pic .pic-label {
   /*width: 100%;*/
   margin: 0 0 1rem 0;
   text-align: center;
   font-size: 1.4rem;
   font-weight: 700;
}
 main section .profile-pic .pic {
   width: 16rem;
   height: 16rem;
   position: relative;
   overflow: hidden;
   border-radius: 50%;
}
 main section .profile-pic .pic .lx-btn {
   opacity: 0;
   width: 100%;
   height: 100%;
   margin: 0;
   padding: 0;
   position: absolute;
   transform: translate(-50%, -50%);
   top: 50%;
   left: 50%;
   display: none;
   align-items: center;
   justify-content: center;
   text-transform: none;
   font-size: 1rem;
   color: white;
   background-color: rgba(0, 0, 0, 0.8);
}
 main section .profile-pic .pic img {
   width: 100%;
   height: 100%;
   object-fit: cover;
   object-position: center;
}
 main section .profile-pic .pic:focus .lx-btn, main section .profile-pic .pic:focus-within .lx-btn, main section .profile-pic .pic:hover .lx-btn {
   opacity: 1;
   display: flex;
}
 main section .profile-pic .pic-info {
   width: 100%;
   margin: 2rem 0 0 0;
   font-size: 0.9rem;
   text-align: center;
}
 main section form {
   width: auto;
   min-width: 15rem;
   max-width: 25rem;
   margin: 3rem 0 0 0;
}
 main section form .fieldset {
   width: 100%;
   margin: 2rem 0;
   position: relative;
   display: flex;
   flex-wrap: wrap;
   align-items: center;
   justify-content: flex-start;
}
 main section form .fieldset label {
   width: 100%;
   margin: 0 0 1rem 0;
   font-size: 1.2rem;
   font-weight: 700;
}
 main section form .fieldset .input-wrapper {
   width: 100%;
   display: flex;
   flex-flow: nowrap;
   align-items: stretch;
   justify-content: center;
}
 main section form .fieldset .input-wrapper .icon {
   width: fit-content;
   margin: 0;
   padding: 0.375rem 0.75rem;
   display: flex;
   align-items: center;
   border-top-left-radius: 0.25em;
   border-bottom-left-radius: 0.25em;
   border-top-right-radius: 0;
   border-bottom-right-radius: 0;
   border: 0.0625rem solid #ced4da;
   font-size: 1rem;
   font-weight: 400;
   line-height: 1.5;
   color: #495057;
   text-align: center;
   background-color: #e9ecef;
}
 main section form .fieldset .input-wrapper input, main section form .fieldset .input-wrapper select {
   flex-grow: 1;
   min-height: 3rem;
   padding: 0.375rem 0.75rem;
   display: block;
   border-top-left-radius: 0;
   border-bottom-left-radius: 0;
   border-top-right-radius: 0.25em;
   border-bottom-right-radius: 0.25em;
   border: 0.0625rem solid #ced4da;
   border-left: 0;
   font-size: 1rem;
   font-weight: 400;
   line-height: 1.5;
   color: #495057;
}
 main section form .fieldset .input-wrapper:focus .icon, main section form .fieldset .input-wrapper:focus-within .icon, main section form .fieldset .input-wrapper:hover .icon {
   color: #538e46;
}
 main section form .fieldset:first-child {
   margin-top: 0;
}
 main section form .fieldset:last-child {
   margin-bottom: 0;
}
 main section form .actions {
   width: 100%;
   display: flex;
   align-items: center;
   justify-content: space-between;
}
 main section form .actions .lx-btn {
   padding: 0.5rem 1rem;
   display: flex;
   align-items: center;
   justify-content: center;
   font-weight: 700;
   color: white;
}
 main section form .actions .lx-btn#cancel, main section form .actions .lx-btn.cancel {
   background-color: #f55;
}
 main section form .actions .lx-btn#clear, main section form .actions .lx-btn.clear {
   color: black;
   background-color: white;
}
 main section form .actions .lx-btn#save, main section form .actions .lx-btn.save {
   background-color: #538e46;
}
 @media screen and (max-width: 64rem) {
   main section .profile-pic {
     max-width: 100%;
     margin: 0;
  }
}
 @media screen and (max-width: 56.25rem) {
   main section form {
     max-width: 100%;
     margin: 0;
  }
}
 

</style>
    
    <!-- @foreach($getdata as $row) -->

     <?php foreach ($data_user as $row): ?> 
    

    
           <main class="has-dflex-center">
  <section>
    <div class="lx-container-70">
      <div class="lx-row">
        <h1 class="title">Edit your profile</h1>
      </div>
      <div class="lx-row align-stretch">
        <div class="lx-column column-user-pic">
          <div class="profile-pic bs-md">
            <h1 class="pic-label">Profile picture</h1>
            <div class="pic bs-md">
              <img src="<?php echo base_url(); ?>img/avatars/<?php echo $row['image']; ?>" alt="" width="100" height="100" loading="lazy">
              <a id="change-avatar" class="lx-btn"><i class="fas fa-camera-retro"></i>&nbsp;&nbsp;Change your profile picture.</a>
            </div>
            <div class="pic-info">
              <p><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;This photo will appear on the platform, in your contributions or where it is mentioned.</p>
            </div>
          </div>
        </div>
        <div class="lx-column">
          <form class="no-margin" id="formValidate2" data-validate="parsley" method="post" action="edit_profile" name="client_record" enctype="multipart/form-data">

             <!-- @csrf -->
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <div class="fieldset">
              <label for="user-name">Name</label>
              <div class="input-wrapper">
                <span class="icon"><i class="fas fa-user"></i></span>
                <input type="text" id="user-name" name="u_name" value="<?php echo $row['name']; ?>" autocomplete="username" required>
              </div>
              <div id="user-name-helper" class="helper">
                <p>Your name can appear on the platform, in your contributions or where it is mentioned.</p>
              </div>
            </div>
         <!--    <div class="fieldset">
              <label for="user-id">Registration</label>
              <div class="input-wrapper">
                <span class="icon"><i class="fas fa-address-card"></i></span>
                <input type="number" id="user-id" value="424242" required>
              </div>
              <div id="user-id-helper" class="helper"></div>
            </div> -->
            <div class="fieldset">
              <label for="email">E-mail</label>
              <div class="input-wrapper">
                <span class="icon"><i class="fas fa-envelope"></i></span>
                <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>" autocomplete="username">
              </div>
              <div id="email-helper" class="helper"></div>
            </div>
           <!--  <div class="fieldset">
              <label for="pass">Password</label>
              <div class="input-wrapper">
                <span class="icon"><i class="fas fa-key"></i></span>
                <input class="form-control"  name="password" placeholder="********" value="" type="password">
              </div>
              <div id="pass-helper" class="helper"></div>
            </div> -->
           <!--  <div class="form-group">
                  <label>Update Image<span class="text-danger">*</span></label>
              
                  <input type="file" placeholder="image" value=""  class="form-control " name="img1" accept="" />
                </div> -->
                 <div class="form-group">
              <!--   <div class="m-t-20 text-center">
                  <button class="btn btn-primary"><i class="fa fa-check-square" aria-hidden="true"></i> Save </button>
                </div> -->
              </div>
     
          </form>
        </div>
      </div>
    </div>
  </section>
</main>
   <?php endforeach; ?>
<script src="https://use.fontawesome.com/releases/v5.14.0/js/all.js" defer crossorigin="anonymous" data-search-pseudo-elements></script>




<?php include('footer.php'); ?>

<script type="text/javascript">

<?php if (isset($_SESSION['welcm']) && $_SESSION['welcm']=='1') {?>

  toastr.success('Welcome <?php echo $_SESSION['user']; ?>');

  <?php unset($_SESSION['welcm']);} ?>

</script>