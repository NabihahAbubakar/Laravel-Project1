@php

@include 'config.blade.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.blade.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.blade.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
@endphp





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Login form</title>
    <link rel="stylesheet" href={{asset('css/style.css')}}>
</head>
<body>


    @include('nav')


      






    <div class="form-container">

<form action="" method="post">
<h3> login now</h3>
@php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
@endphp
<input type="email" name="email" required placeholder="enter your email">
<input type="password" name="password" required placeholder="enter your password">
<input type="submit" name="submit" value="login now" class="form-btn"> 
<p> don't have an account? <a href={{url('/register')}}>register now</a>
   @if($pass == "123")
   <div class="equal">
      You have entered Correct Password {{$name}}
   </div>
   @elseif($pass=="")
   <div class="null">
      Please enter your password {{$name}}
   </div>
   @else
   <div class="wrong">
      Please enter correct password {{$name}}
   </div>
   @endif

   
</form>
</div>

    







    @include('footer')

    <script src={{asset('js/myscript.js')}}></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    


</body>
</html>




