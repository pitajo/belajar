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
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.<?php echo base_url();?>assets/js/1.4.2/respond.min.js"></script>
    <![endif]-->

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

            <!-- Collect the nav links, forms, and other content for toggling -->
            <!--div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"-->
            <div class="colapse navbar-right">        
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <p>
                         <ul class="container-fluid"><a href="#"> Inggris &ensp; Indonesia</a></ul>
                    </p>
                    <p>
                        <ul class="container-fluid"><a class="page-scroll" href="login.php" style="color:#000"> Untuk Perusahaan</a> </ul>
                    </p>
                    <p>
                        <ul class="container-fluid"><a class="page-scroll" href="logins/ " style="color:#000"><b>Masuk/Mendaftar</b></a>
                        </ul>
                    </p>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

<div class="brand"></div>
    <div class="box">
    	<div class="">
    		<div class="container">
            <div class="row-row-centered">

            <!--ini ntar diubah-->
            <div class="col-md-3 col-centered">
            <div class="item">
            <div class="content">
            </div></div></div>
            
            <div class="col-md-3 col-centered">
            <div class="item"> 
            <div class="content">
	    		<p>Nama Depan</p>
	        	<p>Nama Belakang</p> 
	        	<p>Email</p><br>
	        	<p>Alamat</p>
	        	<p>Kewarganegaraan</p> <br>
	        	<p>No.Telepon</p> 
	        	<p>No.Ponsel</p>
    		</div>
    		</div>
    		</div>

    		<div class="col-md-3 col-centered">
            <div class="item">
            <div class="content">
	    		<p><input type="text" name="nd" value="" placeholder=" "></p>
	        	<p><input type="" name="nb" value="" placeholder=" "></p>
	        	<p><input type="" name="Email" value="" placeholder=" "></p>
	        	<p><input type="" name="alamat" value="" placeholder=" "></p>
				<p><select name="selectionField">
				  <option value="indonesia">Indonesia</option>
				  <option value="irak">Irak</option>
				  <option value="israel">Israel</option>
				  <option value="roma">Roma</option>
				</select></p>
	        	<p><input type="" name="notel" value="" placeholder=" "></p>
	        	<p><input type="" name="nopon" value="" placeholder=" "></p>
				<p class="colapse navbar-right"><a href="<?php echo site_url('welcome/mendaftarpelamar1')?>" class="btn btn-default" size="10px"> Selanjutnya </a></p>
    		</div>
    		</div>
    		</div>

    		</div>
    		</div>
    	</div>
    </div>


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