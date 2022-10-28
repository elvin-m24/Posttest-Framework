<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Tambah Data Keberangkatan</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Menambah Data Keberangkatan</h4>                                    
                                    <form action="/store" method="post">
                                        @csrf                                                                        
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Kode Tiket</strong></label>
                                            <input type="text" class="form-control" placeholder="Kode Tiket" name="kodetiket" required>
                                            <label class="mb-1"><strong>Asal</strong></label>
                                            <input type="text" class="form-control" placeholder="Asal" name="asal" required>
                                            <label class="mb-1"><strong>Tujuan</strong></label>
                                            <input type="text" class="form-control" placeholder="Tujuan" name="tujuan" required>                                    
                                            <label class="mb-1"><strong>Nama Maskapai</strong></label>
                                            <input type="text" class="form-control" placeholder="Nama Maskapai" name="pesawat_id" required>
                                            <label class="mb-1"><strong>Harga</strong></label>
                                            <input type="text" class="form-control" placeholder="Harga" name="harga" required>
                                            <input type="submit" value="Simpan Data">                                                                            
                                        </div>                                        
                                    </form>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>