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






<!-- Gallery -->
<div class="row">
    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
        <div class="best">
        <h1>OUR BEST SELLERS</h1>
    </div>
      <img
        src="https://images.unsplash.com/photo-1666349751216-792c3ab59094?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDE0fHx8ZW58MHx8fHx8&auto=format&fit=crop&w=500&q=60"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="village"
      />
  
      <img
        src="https://images.unsplash.com/photo-1663274862979-f69df2f84494?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDB8fGhhbmRtYWRlJTIwcGFpbnRpbmdzfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="river"
      />
    </div>
  
    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
        src="https://images.unsplash.com/photo-1616855997498-e0ad5f7721db?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDE1fHx8ZW58MHx8fHx8&auto=format&fit=crop&w=500&q=60"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Mountains in the Clouds"
      />
  
      <img
        src="https://media.istockphoto.com/id/471040364/photo/watercolor-landscape-with-palm-trees-retro.jpg?s=612x612&w=0&k=20&c=bvU0WIeEy6OXOZfBKwhzPFJSBavNBtD3A1Xx4W7EnwY="
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Boat on Calm Water"
      />
    </div>
  
    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
        src="https://media.istockphoto.com/id/1453580375/photo/watercolor-beautiful-landscape-view-mountain-at-zermatt-switzerland.jpg?s=612x612&w=0&k=20&c=XSSrf5xPdpNc6f27UN1grKgpZWsWi7GLopogie2h-UM="
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Waves at Sea"
      />
  
      <img
        src="https://media.istockphoto.com/id/139704447/photo/autumnal-road.jpg?s=612x612&w=0&k=20&c=YDxa9oajaP1GFDD6H354oYmCtZ_faYshXjDVf1UaB4E="
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Park"
      />
    </div>
  </div>
  <!-- Gallery -->











    


{{-- Fixed box --}}


<div id="box">
<p>Refer a friend  &#11198;</p>
<h1>Get 40% discount</h1>

</div>


{{-- Fixed box --}}







@include('footer')

    <script src={{asset('js/myscript.js')}}></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
</body>
</html>