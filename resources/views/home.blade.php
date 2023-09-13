@php

@include 'config.blade.php';

session_start();

if(!isset($_SESSION['user_name'])){
    header('location:login.blade.php');
}




@endphp





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>user page</title>
    <link rel="stylesheet" href={{asset('css/style.css')}}>
</head>

<body>

    @include('nav')









    <div  class="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://media.istockphoto.com/id/175455171/photo/fine-art-painter.jpg?s=612x612&w=0&k=20&c=X2alq4mlAR-lN_FDAKbEfdL0Kv62yhLpeXKWPlSRkKk=" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h5>&#9829;</h5>
            <p>Discover Art You Love From the World's Leading Online Gallery</p>
            <div class="order">
              ORDER NOW
            </div>
          </div>
        </div>
        
        
      </div>
      
    </div>

















    <div class="container">

        <div class="content">
        <h3>hi,</h3>
        <h1>Welcome</h1>
        <p>this is an user page</p>
        <a href={{url('/login')}} class="btn">login</a>
        <a href={{url('/register')}} class="btn">register</a>
        <a href={{url('/login')}} class="btn">logout</a>
        </div>
    </div>


{{-- Fixed box --}}


<div id="box">
<p>Refer a friend &#11198; </p>
<h1>Get 40% discount</h1>

</div>


{{-- Fixed box --}}







@include('footer')

    <script src={{asset('js/myscript.js')}}></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
</body>
</html>