<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- LOGO -->
    <link href="<?php echo base_url().'assets/'; ?>logo.png" rel="shortcut icon">
    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/boxberita/'; ?>css/style.css">
    <!-- Font Awesome Script -->
    <script src="https://kit.fontawesome.com/922eb8e20d.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url()."assets/js/main.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/jquery.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/jquery.min.js"?>"></script>
    <title>STISOSPOL - Waskita Dharma Malang</title>
</head>
<body>
    <!-- Header All Page -->
    <div style="position:fixed; top:0; width:100%; z-index:100000">
        <header>
            <div class="headerleft">
                <p>Menjunjung Tinggi Negeri Ini</p>
            </div>
            <div class="headermid">

            </div>
            <div class="headerright">
            <div class="searchbar"> 
                <i class="fa fa-search icon"></i>
                <input type="text" name="" placeholder="Search News">
            </div>
            <div class="login">
                <button><i class="fas fa-user"></i> &nbsp;Login</button>
            </div>
            </div>
        </header>

        <!-- Menu Navigation All Page -->
        <div class="menu">
            <div class="menuleft">
                    <div class="menulogo"><img src="<?php echo base_url().'assets/boxberita/'; ?>assets/logo.png" class="image-psc"></div>
                    <div class="tulisanlogo">PASCASARJANA
                        <div class="stitosw">STISOSPOL WASKITADHARMA</div>
                    </div>
            </div>
            <div class="menuright">
                <div class="header-samping-kanan-2">
                    <ul>
                        <li class="muduno"><a href="#"><i class="fa fa-home icon rumah-cr"></i>PROFIL<i class="fa fa-caret-down ic-sm" aria-hidden="true"></i></a>
                            <div class="dropdown-content">
                                <a href="#">Visi & Misi</a>
                                <a href="#">Sambutan</a>
                                <a href="#">Sejarah</a>
                            </div>
                        </li>
                        <li class="muduno2"><a href="#">PRODI<i class="fa fa-caret-down ic-sm" aria-hidden="true"></i></a>
                            <div class="dropdown-content2">
                                <a href="<?php echo base_url('home/admpublik')?>">Administrasi Publik</a>
                            </div>
                        </li>
                        <li><a href="#">PENELITIAN</a>
                        </li>
                        <li><a href="#">FASILITAS</a>
                        </li>
                        <li><a href="#">AKADEMIK</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- MENU RESPONSIVE -->
        <nav class="navmenu-respon">
            <div class="menurespon">
                <div class="imgrespon">
                    <div class="imgrespon1">
                        <img src="<?php echo base_url().'assets/boxberita/'; ?>assets/logo.png" alt="waskitadharma">
                    </div>
                    <div class="imgrespon2">PASCASARJANA
                        <div class="stitosw">STISOSPOL WASKITADHARMA</div>
                    </div>
                </div>
                <div class="iconmenu">
                    <a href="#"><i class="fas fa-bars" onclick="openNav()"></i></a>
                </div>
            </div>
        </nav>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">Profil&nbsp;&gt;</button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="#">Sambutan</a>
                    <a href="#">Visi & Misi</a>
                    <a href="#">Sejarah</a>
                </div>
            </div>
            <div class="dropdown2">
                <button onclick="myFunction2()" class="dropbtn2">Prodi&nbsp;&gt;</button>
                <div id="myDropdown2" class="dropdown-content2">
                    <a href="#">Administrasi Publik</a>
                </div>
            </div>
            <a href="menu.html">Penelitian</a>
            <a href="contact.html">Fasilitas</a>
            <a href="location.html">Akademik</a>
    
        </div>
    </div>
    <!-- Jumbotron Title -->
    <div class="jumbotron-flex">
        <div class="content-title">
        <h1>Category  : <span style="#E78419">Akademik</span></h1>
        </div>
    </div>

    <!-- OPSI SORTIR -->
    <div class="opsisortir-flex">
        <div class="opsi1">
        <span class="btn-urut">Urutkan Berdasarkan :</span>
        </div>
        <div class="opsi2">
            <div class="dropdownurut">
                <button onclick="myFunctionurut()" class="dropbtnurut">Pilih Opsi<i class="fa fa-caret-down ic-sm" aria-hidden="true"></i></button>
                <div id="myDropdownurut" class="dropdown-contenturut">
                    <a href="#">Dari A ke Z</a>
                    <a href="#">Waktu Diterbitkan</a>
                    <a href="#">Paling Popules</a>
                </div>
            </div>
        </div>
    </div>

    <!-- CARD IMAGE NEWS -->
    <div class="cardnewsflex">
        <div class="cardnewsflex1">
            <div class="card-background">
                <h4 class="titlenews">02</h4>
                <p class="titlenews">SEPT</p>
            </div>
            <div class="cardtitlenews">
            <h2>Formulir Kartu Rencana Studi (KRS) Tahun Ajaran 2018-2019</h2>
            </div>
        </div>
        <div class="cardnewsflex2">
        <div class="card-background">
                <h4 class="titlenews">02</h4>
                <p class="titlenews">SEPT</p>
            </div>
            <div class="cardtitlenews">
            <h2>Formulir Kartu Rencana Studi (KRS) Tahun Ajaran 2018-2019</h2>
            </div>
        </div>
        <div class="cardnewsflex3">
        <div class="card-background">
                <h4 class="titlenews">02</h4>
                <p class="titlenews">SEPT</p>
            </div>
            <div class="cardtitlenews">
            <h2>Formulir Kartu Rencana Studi (KRS) Tahun Ajaran 2018-2019</h2>
            </div>
        </div>
    </div>

    <div class="cardnewsflex">
        <div class="cardnewsflex1">
            <div class="card-background">
                <h4 class="titlenews">02</h4>
                <p class="titlenews">SEPT</p>
            </div>
            <div class="cardtitlenews">
            <h2>Formulir Kartu Rencana Studi (KRS) Tahun Ajaran 2018-2019</h2>
            </div>
        </div>
        <div class="cardnewsflex2">
        <div class="card-background">
                <h4 class="titlenews">02</h4>
                <p class="titlenews">SEPT</p>
            </div>
            <div class="cardtitlenews">
            <h2>Formulir Kartu Rencana Studi (KRS) Tahun Ajaran 2018-2019</h2>
            </div>
        </div>
        <div class="cardnewsflex3">
        <div class="card-background">
                <h4 class="titlenews">02</h4>
                <p class="titlenews">SEPT</p>
            </div>
            <div class="cardtitlenews">
            <h2>Formulir Kartu Rencana Studi (KRS) Tahun Ajaran 2018-2019</h2>
            </div>
        </div>
    </div>

    <div class="cardnewsflex">
        <div class="cardnewsflex1">
            <div class="card-background">
                <h4 class="titlenews">02</h4>
                <p class="titlenews">SEPT</p>
            </div>
            <div class="cardtitlenews">
            <h2>Formulir Kartu Rencana Studi (KRS) Tahun Ajaran 2018-2019</h2>
            </div>
        </div>
        <div class="cardnewsflex2">
        <div class="card-background">
                <h4 class="titlenews">02</h4>
                <p class="titlenews">SEPT</p>
            </div>
            <div class="cardtitlenews">
            <h2>Formulir Kartu Rencana Studi (KRS) Tahun Ajaran 2018-2019</h2>
            </div>
        </div>
        <div class="cardnewsflex3">
        <div class="card-background">
                <h4 class="titlenews">02</h4>
                <p class="titlenews">SEPT</p>
            </div>
            <div class="cardtitlenews">
            <h2>Formulir Kartu Rencana Studi (KRS) Tahun Ajaran 2018-2019</h2>
            </div>
        </div>
    </div>

    <!-- Button Load More -->
    <div class="buttonload">
        <div class="loadflex">
            <button>Load More</button>
        </div>
    </div>

    
    <!-- Social Media Section -->
    <div class="sosmedflex">
        <div class="sosmed1">
            <div class="boxsosmedred">
            <i class="fas fa-phone-alt"><span>&nbsp;&nbsp;(0341) 323678</span></i><br>
            <i class="fas fa-envelope"><span>&nbsp;&nbsp;office@waskita-dharma.ac.id</span></i>
            </div>
        </div>
        <div class="sosmed2">
            <a href="#"><i class="fab fa-facebook-square sosmedright"></i></a>
            <a href="#"><i class="fab fa-instagram-square sosmedright"></i></a>
            <a href="#"><i class="fab fa-twitter-square sosmedright"></i></a>
        </div>
    </div>

    <!-- Galery Slider -->
    <div id="slider">
        <div id="slide-container">
            <div class="slide"><img src="<?php echo base_url().'assets/boxberita/'; ?>assets/galerislider.png" alt=""></div>
            <div class="slide"><img src="<?php echo base_url().'assets/boxberita/'; ?>assets/galerislider2.png" alt=""></div>
            <div class="slide"><img src="<?php echo base_url().'assets/boxberita/'; ?>assets/galerislider.png" alt=""></div>
            <div class="slide"><img src="<?php echo base_url().'assets/boxberita/'; ?>assets/galerislider2.png" alt=""></div>
            <div class="slide"><img src="<?php echo base_url().'assets/boxberita/'; ?>assets/galerislider.png" alt=""></div>
            <div class="slide"><img src="<?php echo base_url().'assets/boxberita/'; ?>assets/galerislider2.png" alt=""></div>
            <div class="slide"><img src="<?php echo base_url().'assets/boxberita/'; ?>assets/galerislider.png" alt=""></div>
            <div class="slide"><img src="<?php echo base_url().'assets/boxberita/'; ?>assets/galerislider2.png" alt=""></div>
            <div class="slide"><img src="<?php echo base_url().'assets/boxberita/'; ?>assets/galerislider.png" alt=""></div>
            <div class="slide"><img src="<?php echo base_url().'assets/boxberita/'; ?>assets/galerislider2.png" alt=""></div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer>
        <div class="footer1"><img class="img-fluid" src="<?php echo base_url().'assets/boxberita/'; ?>assets/logo.png" alt="">
        </div>
        <div class="footer2"><h5>Tentang Waskita</h5>
            <div class="subfooter">
                <a href="#">Visi Misi</a>
                <a href="#">Sambutan</a>
                <a href="#">Sejarah</a>
                <a href="#">Sekilas</a>
            </div>
        </div>
        <div class="footer3"><h5>Akademik</h5>
            <div class="subfooter">
                <a href="#">Penelitian dan Pengabdian</a>
                <a href="#">Fasilitas</a>
                <a href="#">e-Learning</a>
            </div>
        </div>
        <div class="footer4"><h5>Program Studi</h5>
            <div class="subfooter">
                <a href="#">Administrasi Publik</a>
            </div>
        </div>
        <div class="footer5"><h5>Admisi</h5>
            <div class="subfooter">
                <a href="#">Daftar Mahasiswa Baru</a>
            </div>
        </div>
    </footer>

    <script>

        // Script Menu Dropdown CSS
        function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
        }
        window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
            }
        }
        }

        function myFunction2() {
        document.getElementById("myDropdown2").classList.toggle("show2");
        }
        window.onclick = function(event) {
        if (!event.target.matches('.dropbtn2')) {
            var dropdowns = document.getElementsByClassName("dropdown-content2");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show2')) {
                openDropdown.classList.remove('show2');
            }
            }
        }
        }
        // Script Pilihan Urut
        function myFunctionurut() {
        document.getElementById("myDropdownurut").classList.toggle("showurut");
        }
        window.onclick = function(event) {
        if (!event.target.matches('.dropbtnurut')) {
            var dropdowns = document.getElementsByClassName("dropdown-contenturut");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('showurut')) {
                openDropdown.classList.remove('showurut');
            }
            }
        }
        }

        
        
    </script>
    <script>
    // Script Galerry Slider
        $(document).ready(function () {
            //you can set this, as long as it's not greater than the slides length
            var show = 5;
            var w = $('#slider').width() / show;
            var l = $('.slide').length;
            
            $('.slide').width(w);
            $('#slide-container').width(w * l)
            
            function slider() {
                $('.slide:first-child').animate({
                    marginLeft: -w
                }, 'slow', function () {
                    $(this).appendTo($(this).parent()).css({marginLeft: 0});
                });
            }
            var timer = setInterval(slider, 2000);
            
            $('#slider').hover(function(){
                clearInterval(timer);
            },function(){
                timer = setInterval(slider, 2000);
            });
        });
    </script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>