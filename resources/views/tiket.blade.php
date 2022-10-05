<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Beli Tiket</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body id="page-top">
        <table border="5" class="table table-success table-striped">
            <tr>
                <th>Asal</th>
                <th>Tujuan</th>
                <th>Maskapai</th>
                <th>Kelas</th>
                <th>Harga</th>
                <th>Action</th>
            </tr>
            @foreach($tikets as $t)
            <tr>
                <td>{{ $t['asal'] }}</td>
                <td>{{ $t['tujuan'] }}</td>
                <td>{{ $t['maskapai'] }}</td>
                <td>{{ $t['kelas'] }}</td>
                <td>{{ $t['harga'] }}</td>
                <td>
                    <a href="#">Beli</a>
                </td>
            </tr>
            @endforeach
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
        <a href=/home>Kembali</a>
    </body>
</html>
