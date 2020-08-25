<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- LOGO -->
    <link href="<?php echo base_url().'assets/'; ?>logo.png" rel="shortcut icon">
    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/detailberita/'; ?>css/style.css">
    <!-- Font Awesome Script -->
    <script src="https://kit.fontawesome.com/922eb8e20d.js" crossorigin="anonymous"></script>
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
                    <div class="menulogo"><img src="<?php echo base_url().'assets/detailberita/'; ?>assets/logo.png" class="image-psc"></div>
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
                        <li class="muduno2"><a href="#">PROGRAM STUDI<i class="fa fa-caret-down ic-sm" aria-hidden="true"></i></a>
                            <div class="dropdown-content2">
                                <a href="<?php echo base_url('home/admpublik')?>">Administrasi Publik</a>
                            </div>
                        </li>
                        <li><a href="#">PENELITIAN DAN PENGABDIAN</a>
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
                        <img src="<?php echo base_url().'assets/detailberita/'; ?>assets/logo.png" alt="waskitadharma">
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
            <button onclick="myFunction()" class="dropbtn">Profil<i class="fa fa-caret-down ic-sm" aria-hidden="true"></i></button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="#">Sambutan</a>
                    <a href="#">Visi & Misi</a>
                    <a href="#">Sejarah</a>
                </div>
            </div>
            <div class="dropdown2">
                <button onclick="myFunction2()" class="dropbtn2">Program Studi<i class="fa fa-caret-down ic-sm" aria-hidden="true"></i></button>
                <div id="myDropdown2" class="dropdown-content2">
                    <a href="#">Administrasi Publik</a>
                </div>
            </div>
            <a href="menu.html">Penelitian dan Pengembangan</a>
            <a href="contact.html">Fasilitas</a>
            <a href="location.html">Akademik</a>
        </div>
    </div>

    <!-- Jumbotron Section -->
    <div class="section-jumbotron">
        <div class="maintitle">
            <div class="shapetitle">
                    <img src="<?php echo base_url().'assets/detailberita/'; ?>assets/titledetailberita.png" alt="waskitadharma">
            </div>
            <div class="title">
                <h3>Formulir Kartu Rencana Studi (KRS) Tahun Ajaran 2018-2019 STISOSPOL Waskita Dharma Malang</h3>
                <div class="subtitle">
                    <i class="far fa-calendar-alt"></i>
                    <span>&nbsp;&nbsp;2 May 2019&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <i class="fas fa-user"></i>
                    <span>&nbsp;&nbsp;Hubungan Masyarakat</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Container Section -->
    <div class="section-container">
        <div class="row">
            <div class="col-md-8">
                <div class="topartikel">
                    <a href="#"><button>Akademik</button></a>
                    <a href="#"><button>Informasi</button></a>
                    <span> Formulir Kartu Rencana Studi (KRS) Tahun Ajaran 2018-2019 STISOSPOL Waskita Dharma Malang</span>
                </div>
                <div class="shapesborder"></div>
                <div class="artikel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore 
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse 
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
                    qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
                    in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
                    sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias provident laborum suscipit recusandae 
                    in necessitatibus veritatis doloribus natus, perspiciatis facilis, mollitia sapiente voluptates amet
                    pariatur temporibus quaerat quo repudiandae impedit.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias provident laborum suscipit recusandae 
                    in necessitatibus veritatis doloribus natus, perspiciatis facilis, mollitia sapiente voluptates amet
                    pariatur temporibus quaerat quo repudiandae impedit.
                </p>
                    <img src="<?php echo base_url().'assets/detailberita/'; ?>assets/wall2.png" alt="waskitadharma">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias provident laborum suscipit recusandae 
                    in necessitatibus veritatis doloribus natus, perspiciatis facilis, mollitia sapiente voluptates amet
                    pariatur temporibus quaerat quo repudiandae impedit.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias provident laborum suscipit recusandae 
                    in necessitatibus veritatis doloribus natus, perspiciatis facilis, mollitia sapiente voluptates amet
                    pariatur temporibus quaerat quo repudiandae impedit.
                </p>
                </div>

                <div class="sosmedtop">
                    <div class="sosmedtop1">
                        <a href="#"><img src="<?php echo base_url().'assets/detailberita/'; ?>assets/facebook.png" alt="waskitadharma"></a>
                        <a href="#"><img src="<?php echo base_url().'assets/detailberita/'; ?>assets/twitter.png" alt="waskitadharma"></a>
                        <a href="#"><img src="<?php echo base_url().'assets/detailberita/'; ?>assets/print.png" alt="waskitadharma"></a>
                    </div>
                    <div class="sosmedtop2">
                        <a href="#"><img src="<?php echo base_url().'assets/detailberita/'; ?>assets/tanyawaskita.png" alt="waskitadharma"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cardrecent">
                    <img src="<?php echo base_url().'assets/detailberita/'; ?>assets/recentpost.png" alt="waskitadharma">
                    <div class="recentbody">
                        <div class="tag-news">
                            <div class="tagnewsleft">
                                <p>Jadwal Libur Bersama Hari
                                    <br>Raya Idul Fitri</p>
                                <span>Hubungan Masyarakat | 2 May 2019</span>
                                <hr>
                            </div>
                            <div class="tagnewsright">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                        <div class="tag-news">
                            <div class="tagnewsleft">
                                <p>Jadwal Libur Bersama Hari
                                    <br>Raya Idul Fitri</p>
                                <span>Hubungan Masyarakat | 2 May 2019</span>
                                <hr>
                            </div>
                            <div class="tagnewsright">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                        <div class="tag-news">
                            <div class="tagnewsleft">
                                <p>Jadwal Libur Bersama Hari
                                    <br>Raya Idul Fitri</p>
                                <span>Hubungan Masyarakat | 2 May 2019</span>
                                <hr>
                            </div>
                            <div class="tagnewsright">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                        <div class="tag-news">
                            <div class="tagnewsleft">
                                <p>Jadwal Libur Bersama Hari
                                    <br>Raya Idul Fitri</p>
                                <span>Hubungan Masyarakat | 2 May 2019</span>
                                <hr>
                            </div>
                            <div class="tagnewsright">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                        <div class="buttonrecent">
                            <a href="#">
                                <button>Load Post</button>
                            </a>
                            <br>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="cardwaskitanews">
                    <img src="<?php echo base_url().'assets/detailberita/'; ?>assets/waskitanews.png" alt="waskitadharma">
                    <div class="waskitanewsbody">
                        <div class="tag-news">
                            <div class="tagnewsleft">
                                <p>Jadwal Libur Bersama Hari
                                    <br>Raya Idul Fitri</p>
                                <span>Hubungan Masyarakat | 2 May 2019</span>
                                <hr>
                            </div>
                            <div class="tagnewsright">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                        <div class="tag-news">
                            <div class="tagnewsleft">
                                <p>Jadwal Libur Bersama Hari
                                    <br>Raya Idul Fitri</p>
                                <span>Hubungan Masyarakat | 2 May 2019</span>
                                <hr>
                            </div>
                            <div class="tagnewsright">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                        <div class="buttonwaskitanews">
                            <a href="#">
                                <button>Load Post</button>
                            </a>
                            <br>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="cardagenda">
                    <img src="<?php echo base_url().'assets/detailberita/'; ?>assets/agendawaskita.png" alt="waskitadharma">
                    <div class="cardagendaflex">
                        <div class="cardshape">
                            <h4 class="titleshape">02</h4>
                            <p class="titleshape">SEPT</p>
                        </div>
                        <div class="agendatitle">
                            <h2>Formulir Kartu Rencana Studi (KRS) Tahun Ajaran 2018-2019</h2>
                        </div>
                    </div>
                </div>
            </div>
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
        <div class="footer1"><h5>Tentang Waskita</h5>
            <div class="subfooter">
                <p>Sejarah Kampus</p>
                <p>Administrasi</p>
                <p>Social Media</p>
                <p>Pimpinan</p>
            </div>
        </div>
        <div class="footer2"><h5>Admisi</h5>
            <div class="subfooter">
                <p>Sejarah Kampus</p>
                <p>Administrasi</p>
                <p>Social Media</p>
                <p>Pimpinan</p>
            </div>
        </div>
        <div class="footer3"><h5>Program Studi</h5>
            <div class="subfooter">
                <p>Sejarah Kampus</p>
                <p>Administrasi</p>
                <p>Social Media</p>
                <p>Pimpinan</p>
            </div>
        </div>
        <div class="footer4"><h5>Akademik</h5>
            <div class="subfooter">
                <p>Sejarah Kampus</p>
                <p>Administrasi</p>
                <p>Social Media</p>
                <p>Pimpinan</p>
            </div>
        </div>
        <div class="footer5"><h5>Research</h5>
            <div class="subfooter">
                <p>Sejarah Kampus</p>
                <p>Administrasi</p>
                <p>Social Media</p>
                <p>Pimpinan</p>
            </div>
        </div>
        <div class="footer6"><img class="img-fluid" src="<?php echo base_url().'assets/boxberita/'; ?>assets/logo.png" alt=""></div>
    </footer>

    <!-- JQuery Optional -->

    <script>

        // Script Menu Respon
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
        }
        
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }

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

        // Script Galerry Slider
        
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
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
</body>
</html>