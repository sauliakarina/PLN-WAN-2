<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>PLN</title>

    <!-- BOOTSTRAP CORE STYLE  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- <link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet" /> -->

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- FONT AWESOME ICONS  -->
    <link href="<?php echo base_url('assets/css/font-awesome.css')?>" rel="stylesheet" />

    <!-- CUSTOM STYLE  -->
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet" />
    <!-- <script src="<?php echo base_url('assets/js/jquery-1.11.1.js')?>"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-3.1.1.min.js" type="text/javascript"></script> -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script> -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/datatables/jquery.dataTables.min.css" type="text/css" />
    <script src="<?php echo base_url();?>/assets/datatables/jquery.dataTables.min.js" type="text/javascript"></script>  <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  
</head>
<body style="width: auto; font-family: Trebuchet MS">
    <header>
        <div class="container">
            <div  class="row">
                <div  class="col-md-12">
                    <strong ></strong>
                </div>

            </div>
        </div>
    </header>
    <!-- HEADER END-->
    <!-- apapa-->
   <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <a class="media-left" href="http://fmipa.unj.ac.id/">
                    <img style="padding-top: 20px; padding-bottom: 20px" src="<?php echo base_url();?>assets/img/pln.jpg" />
                </a>
            </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul id="menu-top" class="nav navbar-nav ml-auto">
                                <?php 
                                if($status_user == 'Admin') {
                                    echo"
                                    <li><a  href=".base_url('c_main/home').">Beranda</a></li>
                                    <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'>Data <span class='caret'></span></a>
                                            <ul class='dropdown-menu'>
                                              <li><a href=".base_url('c_gangguan/form_data_gangguan')." style='color: black'>Gangguan</a></li>
                                                <li><a href=".base_url('c_keluhan/form_data_keluhan')." style='color: black'>Keluhan</a></li>
                                                <li class='divider'></li>
                                      			<li><a  href=".base_url('c_gangguan/history_gangguan')." style='color: black'>Histori Gangguan</a></li>
                                      
                                            </ul>
                                        </li>    
                                    ";
                                } elseif($status_user=='User'){
                                    echo"
                                    <li><a  href=".base_url('c_main/home_user').">Beranda</a></li>";
                                }
                                ?>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Pencarian <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="<?php echo base_url();?>c_gangguan/tampil_searchgangguan" style="color: black">Data Gangguan</a></li>
                                      <li><a href="<?php echo base_url();?>c_keluhan/tampil_searchkeluhan" style="color: black">Data Keluhan</a></li>
                                    </ul>
                                </li>
                                <?php 
                                if ($status_user == 'Admin') {
                                    echo " <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'>DATA MASTER <span class='caret'></span></a>
                                    <ul class='dropdown-menu'>
                                      <li><a href=".base_url('c_gangguan/jenisgangguan')." style='color: black'>Kategori Gangguan</a></li>
                                      <li><a href=".base_url('c_keluhan/jeniskeluhan')." style='color: black'>Kategori Keluhan</a></li>
                                      <li><a href=".base_url('c_layanan/jenislayanan')." style='color: black'>Kategori Layanan</a></li>
                                      <li><a href=".base_url('c_layanan/form_layanan')." style='color: black'>Layanan</a></li>
                                      <li class='divider'></li>
                                      <li><a style='color: black'>User Manual</a></li>
                                      <li class='divider'></li>
                                      <li><a href=".base_url('c_user/user')." style='color: black'>Pengguna</a></li>
                                    </ul>
                                </li>";
                                }   
                                 ?>
                                <li><a href="<?php echo base_url();?>c_main/logout">Keluar</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->