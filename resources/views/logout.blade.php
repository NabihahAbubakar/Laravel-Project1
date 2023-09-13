@php

@include 'config.blade.php';

session_start();
session_unset();
session_destroy();

header('location:login.blade.php');

@endphp 

