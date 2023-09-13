<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href={{asset('css/style.css')}}>
</head>
<body>
    <div id="nav">


    <a id="logo" href="#">&#10048;ArtGallery</a>
    <a href={{url('/home')}}>Home</a>
    <a href="#">About</a>
    <a href={{url('/gallery')}}>Gallery</a>
    <a href={{url('/register')}}>Register</a>

    <input placeholder="search anything">
    <button class="bt">Search</button>
    <button class="bt">LogIn</button>
    {{-- <button href={{url('/login_form')}}>LogIn</button>                 How to add link?   --}}

</div>




<script src={{asset('js/myscript.js')}}></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


</body>
</html>



