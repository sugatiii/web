<? include ('connect.php')?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="styles.min.css">
</head>

<body>
    <section class="d-flex flex-column justify-content-between">
        <div id="top">
            <nav class="navbar navbar-light navbar-expand-md" data-aos="fade-up" data-aos-duration="950">
                <div class="container-fluid"><a class="navbar-brand" href="index.php" target="_blank">TOKO PELANGI</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav mx-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="susu.php">TOKO SUSU</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="perlengkapan.php">PERLENGKAPAN BAYI</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="service.php">SERVICE HANDPHONE & AKSESORIS<br></a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="jualbeli.php">JUAL BELI LAPTOP</a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="tentang.php">TENTANG</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#">CHAT ME<br></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    <section  style="margin-left: 50px;"data-aos="fade-up">
    <div class="row mx-auto">
            <div class="card mr-10 ml-7 mt-5" style="width: 17rem;">
            <img class="card-img-top" src="img/laptop.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">Laptop</h5>
                    <p class="card-text">HP</p>
                    <p class="card-text">5</p>
                    <div class="row mt-4">
                        <div id="button">
                            <a href="#popup" class="btn btn-primary mr-1 ml-3">Detail</a>
                        </div>
                        <a href="#" class="btn btn-danger mr-1">Rp. 39000000</a>
                    </div>
                </div> 
            </div>

            <div class="card mr-10 ml-7 mt-5" style="width: 17rem; margin-left : 10px;">
            <img class="card-img-top" src="img/laptop1.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">Laptop</h5>
                    <p class="card-text">Asus vivobook</p>
                    <p class="card-text">5</p>
                    <div class="row mt-4">
                        <div id="button">
                            <a href="#popup" class="btn btn-primary mr-1 ml-3">Detail</a>
                        </div>
                        <a href="#" class="btn btn-danger mr-1">Rp. 70000000</a>
                    </div>
                </div> 
            </div>

            <div class="card mr-10 ml-7 mt-5" style="width: 17rem;margin-left : 10px;">
                <img class="card-img-top" src="img/laptop2.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">Laptop</h5>
                    <p class="card-text">Samsung</p>
                    <p class="card-text">5</p>
                    <div class="row mt-4">
                        <div id="button">
                            <a href="#popup" class="btn btn-primary mr-1 ml-3">Detail</a>
                        </div>
                        <a href="#" class="btn btn-danger mr-1">Rp. 80000000</a>
                    </div>
                </div> 
            </div>

            <div class="card mr-10 ml-7 mt-5" style="width: 17rem;margin-left : 10px;">
                <img class="card-img-top" src="img/laptop3.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">Laptop</h5>
                    <p class="card-text">Dell</p>
                    <p class="card-text">5</p>
                    <div class="row mt-4">
                        <div id="button">
                            <a href="#popup" class="btn btn-primary mr-1 ml-3">Detail</a>
                        </div>
                        <a href="#" class="btn btn-danger mr-1">Rp. 60000000</a>
                    </div>
                </div> 
            </div>
            <div class="card mr-10 ml-7 mt-5" style="width: 17rem;margin-left : 10px;">
                <img class="card-img-top" src="img/laptop4.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">Laptop</h5>
                    <p class="card-text">axioo</p>
                    <p class="card-text">5</p>
                    <div class="row mt-4">
                        <div id="button">
                            <a href="#popup" class="btn btn-primary mr-1 ml-3">Detail</a>
                        </div>
                        <a href="#" class="btn btn-danger mr-1">Rp. 60000000</a>
                    </div>
                </div> 
            </div>

    </div>
    </section>
    <section id="latar-bawah">
        <div class="button-arrow">
            <div class="container d-flex flex-row justify-content-center"><button class="btn btn-link btn-block" type="button" style="color:rgb(0,0,0);"><i class="icon ion-android-arrow-down"></i></button></div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>