<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Azure Travel</title>
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        @include('components.headbar')
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Hai kamu, Mau ke mana?</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="/tiket">Pesan Sekarang</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="pesan">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Pesan Tiket dan Rencanain Liburan Jadi Gampang</h2>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Mudahnya Pesan Tiket</h4>
                        <p class="text-muted">Pesan tiket dengan mudah dan cepat. Tidak perlu risau, hanya dengan satu sentuhan jari, tiket yang kamu butuhkan bisa didapatkan dengan mudah.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-money-bill-transfer fa-stack-1x fa-inverse"></i>                        
                        </span>
                        <h4 class="my-3">Banyak Cara Pembayaran</h4>
                        <p class="text-muted">Kamu bisa memilih cara pembayaran sesuai keinginan. Ada pilihan pembayaran via bank transfer, ATM transfer, Virtual Account (VA), kartu debit online, maupun kartu kredit. Bisa dicicil juga, lho. Prosesnya mudah dan simpel!</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-plane fa-stack-1x fa-inverse"></i>              
                        </span>
                        <h4 class="my-3">Banyak Pilihan Rute</h4>
                        <p class="text-muted">Ada banyak pilihan maskapai dengan rute terlengkap ke seluruh dunia.</p>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
