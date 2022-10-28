<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lihat Data</title>
</head>
<body>    
    <table>  
        @foreach ($tikets as $t)                            
        <tr>
            <td><h4>Asal</h4></td>
            <td><h4>:</h4></td>
            <td><h4>{{$t->asal}}</h4></td>
        </tr>
        <tr>
            <td><h4>Tujuan</h4></td>
            <td><h4>:</h4></td>
            <td><h4>{{ $t->tujuan }}</h4></td>
        </tr>
        <tr>
            <td><h4>Maskapai</h4></td>
            <td><h4>:</h4></td>
            <td><h4>{{ $t->pesawat_id }}</h4></td>
        </tr>        
        <tr>
            <td><h4>Harga</h4></td>
            <td><h4>:</h4></td>
            <td><h4>{{ $t->harga }}</h4></td>
        </tr>  
        @endforeach               
    </table>    
</body>
</html>