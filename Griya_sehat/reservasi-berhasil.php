<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>GriyaSehat BakriPS</title>
    <link
    rel="stylesheet"
    href="frontend/libraries/bootstrap/css/bootstrap.css"
    />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,600,700,800&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
    <link rel="stylesheet" href="frontend/styles/main.css" />
    <script type="text/javascript" src="qr/qrcode.js"></script>
</head>
<body class=" bg-karangan">

    <!-- Navbar -->
    <div class="container mb-5">
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white shadow ">
            <div class="container">
            <a class="navbar-brand " href="index.html">
                <img src="frontend/images/logo.png " alt="logo icon">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mr-3">
                <!--<li class="nav-item mr-md-2">
                    <a class="nav-link active change-color" href="index.html">Home</a>
                </li>-->
                <li class="nav-item mr-md-2">
                    <a class="nav-link active change-color" href="reservasi.html">Reservasi</a>
                </li>
                <li class="nav-item mr-md-2">
                    <a class="nav-link change-color" href="blog.html">Blog</a>
                </li>
                <li class="nav-item mr-md-2">
                    <a class="nav-link change-color" href="produk.html">Produk</a>
                </li>
                <li class="nav-item mr-md-2">
                    <a class="nav-link change-color" href="pelatihan.html">Pelatihan</a>
                </li>
                </ul>            
            </div>
            </div>
        </nav>
    </div>

            <!--card-->    
            <div class="container">
                <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-set my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Reservasi Berhasil</h5>
                        <hr>
                        <form class="form-set text-center">
                        <p>
                            Reservasi atas nama <?php echo $_SESSION["nama"] ?> dengan nomor pasien <?php echo $_SESSION["idpasien"] ?> pada tanggal <?php echo $_SESSION["tanggal"] ?> telah berhasil. 
                            Anda mendapat nomor antrian <?php echo $_SESSION["nomorantri"] ?>
                        </p>
                        <p>
                            Mohon foto atau simpan QR code berikut sebagai bukti reservasi
                        </p>
                        <div id="qrcode" class="px-auto mw-100">
                            <script type="text/javascript">
                            var nomorreser= document.getElementById("qrcode")
                            new QRCode(document.getElementById("qrcode"), "<?php echo "http://localhost/Griya_sehat/cekreserv.php?idresv=", $_SESSION["idreserv"], "&idpas=", $_SESSION["idpasien"] ?>");
                            </script>
                        </div>
                        <!--KUDU BENAKKE
                        <a href="reservasi-berhasil.html" class=" btn btn-lg btn-danger btn-block my-4"  >
                            <button class="btn btn-lg btn-danger btn-block my-4" type="submit">Submit</button>
                            Submit
                        </a> -->
    
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            <!--footer-->
            <footer class=" site-footer">
                </div>
                <div class=" footer-copyright small text-center text- pb-3 ">Copyright &copy; 2019 - Griya Sehat Bakri PS</div>
                </div>
            </footer>
            
            </div>
        
            <script src="frontend/libraries/jquery/jquery-3.4.1.min.js"></script>
            <script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
            <!--<script src="frontend/libraries/retina/retina.min.js"></script-->
    </body>
</html>
