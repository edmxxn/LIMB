<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Daftar siswa bodoh</center>
    @foreach ($data as $item)
        {{$item ['nama']}}<br>
        {{$item ['kelas']}}<hr>
    @endforeach
</body>
</html>
