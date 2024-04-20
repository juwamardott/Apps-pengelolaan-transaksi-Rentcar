<?php
require './function.php';

if(isset($_POST['btn-login'])){
     $email = $_POST['email'];
     $password = $_POST['password'];

     $userlama = mysqli_query($conn,"SELECT * FROM users WHERE email = '$email'");

     // cek username
     if(mysqli_num_rows($userlama) == 1){
          // cek password
          $row = mysqli_fetch_assoc($userlama);
          if(password_verify($password, $row['password'])){
               header('location:admin/index_admin.php');
          }else{
               echo '<script>alert("Password Salah !!!")</script>';
          }
     }
}

?>
<link rel="stylesheet" href="<?= BASEURL?>/assets/css/output.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');
</style>
<?php require_once('../layouts/header_login.php') ?>
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
     <div class="sm:mx-auto sm:w-full sm:max-w-sm">
          <img class="mx-auto h-56 w-auto" src="<?=BASEURL?>/assets/img/logo.png" alt="Your Company">
          <h2 class="mt-2 text-center text-2xl font-bold leading-9 tracking-tight text-white">Sign in to your
               account</h2>
     </div>

     <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm">
          <form class="space-y-6" action="" method="POST">
               <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-white">Email address</label>
                    <div class="mt-2">
                         <input id="email" name="email" type="email" autocomplete="email" required
                              class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 p-1">
                    </div>
               </div>

               <div>
                    <div class="flex items-center justify-between">
                         <label for="password" class="block text-sm font-medium leading-6 text-white">Password</label>
                         <div class="text-sm">
                              <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot
                                   password?</a>
                         </div>
                    </div>
                    <div class="mt-2">
                         <input id="password" name="password" type="password" autocomplete="current-password" required
                              class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 p-1">
                    </div>
               </div>

               <div>
                    <button type="submit"
                         class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                         name="btn-login">Sign
                         in</button>
               </div>
          </form>

          <p class="mt-10 text-center text-sm text-gray-500">
               Not a member?
               <a href="<?=BASEURL?>/app/registrasi.php"
                    class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Belum
                    punya
                    akun ?</a>
          </p>
     </div>
</div>

<?php require_once('../layouts/footer_admin.php') ?>