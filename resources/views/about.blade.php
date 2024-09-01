@extends('layouts.master')

@section('title', 'halaman about')

@section('content')
    <h1>holaaaa</h1>
    <h2>the name is {{ $name }}</h2>
    <h2>email ==> {{ $email }}</h2>
@endsection
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>About</title>
</head>
<body>
    <h1>Halaman about</h1>
    <h1>name : {{ $name }}</h1>
    <h1>email : {{ $email }}</h1>
    <script src="js/script.js"></script>
</body>
</html> -->
