<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Loker2n</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="brand"></div>
    <div class="brand"></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">IntelliSys</a>
            </div>
            <div class="colapse navbar-right">        
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <p>
                         <ul class="container-fluid"><a href="#"> Inggris &ensp; Indonesia</a></ul>
                    </p>
                    <p>
                        <ul class="container-fluid">
                            muka orang
                        </ul>
                    </p>
            </div>
        </div>
    </nav>

<div class="box">
    <div class="container">
        <div class="colapse navbar-right">        
            <p>
                <select name="selectionField">
                    <option value="kategori">Internship</option>
                    <option value="kategori">Freelancer</option>
                    <option value="kategori">Part-Time</option>
                    <option value="kategori">Full-Time</option>
                </select>
                <select name="selectionField">
                    <option value="kategori">Sistem Informasi</option>
                    <option value="kategori">Teknik Informatika</option>
                    <option value="kategori">Teknik Komputer</option>
                    <option value="kategori">Manajemen Informatika</option>
                </select>
                <select name="selectionField">
                    <option value="kategori">Developer</option>
                    <option value="kategori">Quality Assurance</option>
                    <option value="kategori">Business Analysist</option>
                    <option value="kategori">Designer</option>
                </select>
                <select name="selectionField">
                    <option value="kategori">Rp.5.000.000</option>
                    <option value="kategori">Rp.15.000.000</option>
                    <option value="kategori">Rp.20.000.000</option>
                    <option value="kategori">Rp.50.000.000</option>
                </select>
                <button>Cari</button>
            </p>
            </div>
    </div>
</div>
<!-- Portfolio Grid Section 
mau misahin jadi 2 kolom-->

    <div class="box">
        <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="portfolio-item col-sm-4">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                            <span class="overlay-text-thumb">Software & Solutions Development Services</span>
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url();?>assets/img/P2.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <a href="<?php echo site_url('welcome/bacaselengkapnya')?>" class="portfolio-link" data-toggle="modal">
                        <h4>Baca Selengkapnya</h4></a>
                    </div>
                </div>
                <div class="portfolio-item col-sm-4">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                            <span class="overlay-text-thumb">Software & Solutions Development Services</span>
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url();?>assets/img/bukalapak.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <a href="<?php echo site_url('welcome/bacaselengkapnya')?>" class="portfolio-link" data-toggle="modal">
                        <h4>Baca Selengkapnya</h4></a>
                    </div>
                </div>
                <div class="portfolio-item col-sm-4">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                            <span class="overlay-text-thumb">Software & Solutions Development Services</span>
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url();?>assets/img/google.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <a href="<?php echo site_url('welcome/bacaselengkapnya')?>" class="portfolio-link" data-toggle="modal">
                        <h4>Baca Selengkapnya</h4></a>
                    </div>
                </div>
                <div class="portfolio-item col-sm-4">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                            <span class="overlay-text-thumb">Software & Solutions Development Services</span>
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url();?>assets/img/kudo1.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <a href="<?php echo site_url('welcome/bacaselengkapnya')?>" class="portfolio-link" data-toggle="modal">
                        <h4>Baca Selengkapnya</h4></a>
                    </div>
                </div>
                <div class="portfolio-item col-sm-4">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                            <span class="overlay-text-thumb">Software & Solutions Development Services</span>
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url();?>assets/img/P3.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <a href="<?php echo site_url('welcome/bacaselengkapnya')?>" class="portfolio-link" data-toggle="modal">
                        <h4>Baca Selengkapnya</h4></a>
                    </div>
                </div>
                <div class="portfolio-item col-sm-4">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                            <span class="overlay-text-thumb">Software & Solutions Development Services</span>
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url();?>assets/img/toped.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <a href="<?php echo site_url('welcome/bacaselengkapnya')?>" class="portfolio-link" data-toggle="modal">
                        <h4>Baca Selengkapnya</h4></a>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </div><!--portofolio-->

<div class="box">
        <div class="container">
            <div class="row-row-centered">
                <div class="col-md-3 col-centered">
                    <div class="item">
                        <div class="content">
                            <p><u>Tentang IntelliSys Loker</u></p>
                            <p><a href="http://www.intellisys.co.id/" style="text-decoration:none">Site Map</a></p>
                            <p>Tentang Kami</p>
                            <p>Kritik dan Saran</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-centered">
                    <div class="item">
                        <div class="content">
                            <p><u>Pencari Kerja</u></p>
                            <p>Ketentuan Pengguna</p>
                            <p>Kebijakan Privasi</p>
                            <p>Panduan</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-centered">
                    <div class="item">
                        <div class="content">
                            <p><u>Perusahaan</u></p>
                            <p>Ketentuan Pengguna</p>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
        </div>
    </div>
   <!-- /.container -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p><b>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
</body>
</html>