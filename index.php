<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Murah Meriah</title>

    <!-- Bootstrap CSS dan Icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    
    <!-- CSS -->
    <style type="text/css">
        body{
            font-family: 'Cascadia Code';
            background-color: white;
        }

        nav{
            background-color: black;
        }

        .container{
            margin-top: 3.5rem;
        }

        .card-header{
            background-color: white;
        }

        .carousel-inner{
            height: 100%;
        }

        .tombol{
            margin-left: 90px;
        }

        #demo{
            height: 650px;
        }

        .txt{
            padding-bottom: 100px;
        }

        .txt2{
            padding-top: 4px;
        }
        
    </style>

</head>
<body>

    <nav class="navbar navbar-dark py-3">
        <div class="justify-content-left">
            <a class="navbar-brand px-3 fw-bold fs-1" href="index.php">GADGET MURAH MERIAH</a>
        </div>
        <div class="justify-content-rght">
            <p class="text-white fs-3 mx-5 txt2">★ ★ ★ ★ ★</p>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="card-header border-0">
            <div class="row align-items-center py-0">
                <div class="col text-center">
                    <hr>
                    <h3 class="my-3">SELAMAT DATANG</h3>
                    <hr>
                </div>
            </div>
        </div>
            <div class="col">
                <!-- Carousel -->
                <div id="demo" class="carousel slide p-3" data-bs-ride="carousel">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators pb-5">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/image-1.jpg" alt="" class="d-block" style="width:100%">
                            <div class="carousel-caption pb-5">
                                <h3>BEST QUALITY</h3>
                                <p class="txt">GADGET MURAH MERIAH</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/image-2.jpg" alt="" class="d-block" style="width:100%">
                            <div class="carousel-caption pb-5">
                                <h3>ORIGINAL PRODUCT</h3>
                                <p class="txt">GADGET MURAH MERIAH</p>
                            </div> 
                        </div>
                        <div class="carousel-item">
                            <img src="img/image-3.jpg" alt="" class="d-block" style="width:100%">
                            <div class="carousel-caption pb-5">
                                <h3>CHEAP PRICE</h3>
                                <p class="txt">GADGET MURAH MERIAH</p>
                            </div>  
                        </div>
                    </div>

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo"  data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo"  data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
            <div class="container mt-3">
                <div class="row pb-5">
                    <div class="col-4 card mx-3" style="width:350px">
                        <img class="card-img-top p-5" src="img/image-6.png" alt="Card image" style="width:100%">
                        <div class="card-body bg-dark">
                            <a href="pembeli_tampildata.php" class="btn btn-outline-light px-3 pb-0 tombol">
                                <h4 class="card-title text-center">PEMBELI</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 card" style="width:350px">
                        <img class="card-img-top p-5" src="img/image-4.png" alt="Card image" style="width:100%">
                        <div class="card-body bg-dark">
                            <a href="pesanan_tampildata.php" class="btn btn-outline-light px-3 pb-0 tombol">
                                <h4 class="card-title text-center">PESANAN</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-4 card mx-3" style="width:350px">
                        <img class="card-img-top p-5" src="img/image-5.png" alt="Card image" style="width:100%">
                        <div class="card-body bg-dark">
                            <a href="barang_tampildata.php" class="btn btn-outline-light px-3 pb-0 tombol">
                                <h4 class="card-title text-center">BARANG</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>