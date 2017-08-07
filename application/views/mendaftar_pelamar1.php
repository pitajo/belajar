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
	    		<p>Pendidikan Terakhir</p> <br><br><br><br><br>
	        	<p>Sertifikasi</p><br><br>
	        	<p>Pengalaman Kerja (Magang, Paruh waktu, Etc)</p>
	        	<p>Resume</p> <br>
	        	<p>Portofolio</p>
                <p class="check_b">
                <label>
                    <input type="checkbox" name="check" id="check_b"> Terima Promosi Lowongan Pekerjaan
                </label></p>
                <p class="check_b">
                <label>
                    <input type="checkbox" name="check" id="check_b"> Dengan mendaftar, saya telah membaca dan menyetujui Ketentuan Pengguna dan Kebijakan Privasi IntelliSys.
                </label></p>
    		</div>
    		</div>
    		</div>
                
    		<div class="col-md-3 col-centered">
            <div class="item">
            <div class="content">
	    		<p><select name="selectionField">
                  <option value="d3">D3(Diploma)</option>
                  <option value="s1">S1(Sarjana)</option>
                  <option value="s2">S2(Magister)</option>
                  <option value="s3">S3(Doktor)</option>
                </select>
                
                <select name="selectionField">
                  <option value="si">Sistem Informasi</option>
                  <option value="ti">Teknik Informatika</option>
                  <option value="tk">Teknik Komputer</option>
                </select>
                &nbsp;
                <select name="selectionField">
                  <option value="ui">Universitas Indonesia</option>
                  <option value="itb">Institut Teknologi Bandung</option>
                  <option value="itdel">Institut Teknologi Del</option>
                  <option value="itm">Institut Teknologi Medan</option>
                  <option value="bu">Binus University</option>
                </select>
	        	<input type="" name="pt" value="" placeholder="lainnya"></p>
	        	<p><textarea name="sertifikasi">
                </textarea></p>
	        	<p><textarea name="pengalaman">
                </textarea></p>
	        	<p><input type="" name="resume" value="" placeholder=" "></p>
	        	<p><input type="" name="portofolio" value="" placeholder=" "></p>
                
				<p class="colapse navbar-right"><a href="<?php echo site_url('welcome/loginpelamar')?>" class="btn btn-default" size="10px"> Daftar </a></p>
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