<?php 
session_start();
// koneksi DB
$koneksi = new mysqli("localhost","root","","pemweb");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NTS Shop - Produk</title>
    <link rel="stylesheet" href="style.css">
    <style>
        @font-face {
            font-family: Poppins;
            src: url(/font/poppins/Poppins-Regular.otf);
        }
    </style>
</head>

<body>
    <header>
        <h2>NTS SHOP</h2>
        <nav>
            <ul>
                <li><a href="index.php">BERANDA</a></li>
                <li><a href="#" aria-current="Page" style="color: rgb(253, 132, 31)">PRODUK</a></li>
                <li><a href="contact.html">HUBUNGI KAMI</a></li>
                <li><a href="checkout.php">CHECKOUT</a></li>
                <!-- Kondisi sudah login -->
                <?php if (isset($_SESSION["user"])):?>
                <li><a href="logout.php">LOGOUT</a></li>
                <!-- Kondisi belum login -->
                <?php else: ?>
                <li><a href="login.php">LOGIN</a></li>
                <?php endif ?>
            </ul>
        </nav>
    </header>

    <h1 class="title-mobile">MOBILE GAME</h1>
    <section id="mobile" class="mobile">
        <div class="ff">
            <div class="link">
                <a href="#harga-ff">
                    <img src="./images/ff.png" alt="">
                    <div class="judul-produk">Free Fire</div>
                </a>
            </div>
            <div class="overlay" id="harga-ff">
                <div class="popup">
                    <h2>HARGA FREE FIRE</h2>
                    <a class="close" href="#populer">&times;</a>
                    <br>
                    <div class="content">
                        70 Diamonds :
                        <br>
                        <span class="harga">Rp 10.000</span>
                        <br>
                        140 Diamonds :
                        <br>
                        <span class="harga">Rp 20.000</span>
                        <br>
                        210 Diamonds :
                        <br>
                        <span class="harga">Rp 30.000</span>
                        <br>
                        280 Diamonds :
                        <br>
                        <span class="harga">Rp 40.000</span>
                        <br>
                        355 Diamonds :
                        <br>
                        <span class="harga">Rp 50.000</span>
                        <br>
                        500 Diamond :
                        <br>
                        <span class="harga">Rp 70.000</span>
                        <br>
                        720 Diamonds :
                        <br>
                        <span class="harga">Rp 100.000</span>
                        <br>
                        1000 Diamonds :
                        <br>
                        <span class="harga">Rp 130.000</span>
                        <br>
                        M. Mingguan :
                        <br>
                        <span class="harga">Rp 30.000</span>
                        <br>
                        M. Bulanan :
                        <br>
                        <span class="harga">Rp 150.000</span>
                        <br>
                        <a class="pesan" href="https://wa.me/6287816626068" target="_blank"
                            rel="noopener noreferrer"><img src="./images/whatsapp.png" alt="">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mlbb">
            <div class="link">
                <a href="#harga-mlbb">
                    <img src="./images/mlbb.jpg" alt="">
                    <div class="judul-produk">Mobile Legends</div>
                </a>
            </div>
            <div class="overlay" id="harga-mlbb">
                <div class="popup">
                    <h2>HARGA MOBILE LEGENDS</h2>
                    <a class="close" href="#populer">&times;</a>
                    <br>
                    <div class="content">
                        86 Diamonds :
                        <br>
                        <span class="harga">Rp 23.000</span>
                        <br>
                        114 Diamonds :
                        <br>
                        <span class="harga">Rp 28.000</span>
                        <br>
                        172 Diamonds :
                        <br>
                        <span class="harga">Rp 41.000</span>
                        <br>
                        285 Diamonds :
                        <br>
                        <span class="harga">Rp 70.000</span>
                        <br>
                        344 Diamonds :
                        <br>
                        <span class="harga">Rp 78.000</span>
                        <br>
                        372 Diamond :
                        <br>
                        <span class="harga">Rp 87.000</span>
                        <br>
                        514 Diamonds :
                        <br>
                        <span class="harga">Rp 120.000</span>
                        <br>
                        1135 Diamonds :
                        <br>
                        <span class="harga">Rp 256.000</span>
                        <br>
                        M. Mingguan :
                        <br>
                        <span class="harga">Rp 30.000</span>
                        <br>
                        M. Bulanan :
                        <br>
                        <span class="harga">Rp 150.000</span>
                        <br>
                        <a class="pesan" href="https://wa.me/6287816626068" target="_blank"
                            rel="noopener noreferrer"><img src="./images/whatsapp.png" alt="">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="pubgm">
            <div class="link">
                <a href="#harga-pubgm">
                    <img src="./images/pubgm.jpg" alt="">
                    <div class="judul-produk">PUBG Mobile</div>
                </a>
            </div>
            <div class="overlay" id="harga-pubgm">
                <div class="popup">
                    <h2>HARGA PUBGM</h2>
                    <a class="close" href="#populer">&times;</a>
                    <br>
                    <div class="content">
                        52 UC :
                        <br>
                        <span class="harga">Rp 10.000</span>
                        <br>
                        263 UC :
                        <br>
                        <span class="harga">Rp 20.000</span>
                        <br>
                        525 UC :
                        <br>
                        <span class="harga">Rp 30.000</span>
                        <br>
                        788 UC :
                        <br>
                        <span class="harga">Rp 40.000</span>
                        <br>
                        1050 UC :
                        <br>
                        <span class="harga">Rp 50.000</span>
                        <br>
                        1375 UC :
                        <br>
                        <span class="harga">Rp 70.000</span>
                        <br>
                        1900 UC :
                        <br>
                        <span class="harga">Rp 100.000</span>
                        <br>
                        2425 UC :
                        <br>
                        <span class="harga">Rp 130.000</span>
                        <br>
                        M. Mingguan :
                        <br>
                        <span class="harga">Rp 30.000</span>
                        <br>
                        M. Bulanan :
                        <br>
                        <span class="harga">Rp 150.000</span>
                        <br>
                        <a class="pesan" href="https://wa.me/6287816626068" target="_blank"
                            rel="noopener noreferrer"><img src="./images/whatsapp.png" alt="">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="coc">
            <div class="link">
                <a href="#harga-coc">
                    <img src="./images/coc.jpg" alt="">
                    <div class="judul-produk">Clash Of Clans</div>
                </a>
            </div>
            <div class="overlay" id="harga-coc">
                <div class="popup">
                    <h2>HARGA COC</h2>
                    <a class="close" href="#populer">&times;</a>
                    <br>
                    <div class="content">
                        300 VP :
                        <br>
                        <span class="harga">Rp 34.000</span>
                        <br>
                        700 VP :
                        <br>
                        <span class="harga">Rp 81.000</span>
                        <br>
                        1125 VP :
                        <br>
                        <span class="harga">Rp 116.000</span>
                        <br>
                        1375 VP :
                        <br>
                        <span class="harga">Rp 152.000</span>
                        <br>
                        1950 VP :
                        <br>
                        <span class="harga">Rp 194.000</span>
                        <br>
                        2400 VP :
                        <br>
                        <span class="harga">Rp 250.000</span>
                        <br>
                        3400 VP :
                        <br>
                        <span class="harga">Rp 324.000</span>
                        <br>
                        7000 VP :
                        <br>
                        <span class="harga">Rp 646.000</span>
                        <br>
                        <a class="pesan" href="https://wa.me/6287816626068" target="_blank"
                            rel="noopener noreferrer"><img src="./images/whatsapp.png" alt="">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="genshin">
            <div class="link">
                <a href="#harga-genshin">
                    <img src="./images/GenshinImpact.jpg" alt="">
                    <div class="judul-produk">Genshin Impact</div>
                </a>
            </div>
            <div class="overlay" id="harga-genshin">
                <div class="popup">
                    <h2>HARGA GENSHIN IMPACT</h2>
                    <a class="close" href="#populer">&times;</a>
                    <br>
                    <div class="content">
                        60 GC :
                        <br>
                        <span class="harga">Rp 15.000</span>
                        <br>
                        330 GC :
                        <br>
                        <span class="harga">Rp 65.000</span>
                        <br>
                        1090 GC :
                        <br>
                        <span class="harga">Rp 185.000</span>
                        <br>
                        1440 GC :
                        <br>
                        <span class="harga">Rp 405.000</span>
                        <br>
                        3880 GC :
                        <br>
                        <span class="harga">Rp 625.000</span>
                        <br>
                        Blessing Walking :
                        <br>
                        <span class="harga">Rp 66.000</span>
                        <br>
                        <a class="pesan" href="https://wa.me/6287816626068" target="_blank"
                            rel="noopener noreferrer"><img src="./images/whatsapp.png" alt="">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="hdi">
            <div class="link">
                <a href="#harga-hdi">
                    <img src="./images/higgs_domino.jpg" alt="">
                    <div class="judul-produk">Higgs Domino</div>
                </a>
            </div>
            <div class="overlay" id="harga-hdi">
                <div class="popup">
                    <h2>HARGA HIGGS DOMINO</h2>
                    <a class="close" href="#populer">&times;</a>
                    <br>
                    <div class="content">
                        30M Koin Emas :
                        <br>
                        <span class="harga">Rp 5.000</span>
                        <br>
                        60M Koin Emas :
                        <br>
                        <span class="harga">Rp 10.000</span>
                        <br>
                        100M Koin Emas :
                        <br>
                        <span class="harga">Rp 15.000</span>
                        <br>
                        200M Koin Emas :
                        <br>
                        <span class="harga">Rp 30.000</span>
                        <br>
                        400M Koin Emas :
                        <br>
                        <span class="harga">Rp 60.000</span>
                        <br>
                        2B Koin Emas :
                        <br>
                        <span class="harga">Rp 250.000</span>
                        <br>
                        4B Koin Emas :
                        <br>
                        <span class="harga">Rp 500.000</span>
                        <br>
                        <a class="pesan" href="https://wa.me/6287816626068" target="_blank"
                            rel="noopener noreferrer"><img src="./images/whatsapp.png" alt="">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="stumble">
            <div class="link">
                <a href="#harga-stumble">
                    <img src="./images/stumble.png" alt="">
                    <div class="judul-produk">Stumble Guys</div>
                </a>
            </div>
            <div class="overlay" id="harga-stumble">
                <div class="popup">
                    <h2>HARGA STUMBLE GUYS</h2>
                    <a class="close" href="#populer">&times;</a>
                    <br>
                    <div class="content">
                        30M Koin Emas :
                        <br>
                        <span class="harga">Rp 5.000</span>
                        <br>
                        60M Koin Emas :
                        <br>
                        <span class="harga">Rp 10.000</span>
                        <br>
                        100M Koin Emas :
                        <br>
                        <span class="harga">Rp 15.000</span>
                        <br>
                        200M Koin Emas :
                        <br>
                        <span class="harga">Rp 30.000</span>
                        <br>
                        400M Koin Emas :
                        <br>
                        <span class="harga">Rp 60.000</span>
                        <br>
                        2B Koin Emas :
                        <br>
                        <span class="harga">Rp 250.000</span>
                        <br>
                        4B Koin Emas :
                        <br>
                        <span class="harga">Rp 500.000</span>
                        <br>
                        <a class="pesan" href="https://wa.me/6287816626068" target="_blank"
                            rel="noopener noreferrer"><img src="./images/whatsapp.png" alt="">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <h1 class="title-pc">PC GAME</h1>
    <section id="pc" class="pc">
        <div class="pb">
            <div class="link">
                <a href="#harga-pb">
                    <img src="./images/pb.jpg" alt="">
                    <div class="judul-produk">Point Blank</div>
                </a>
            </div>
            <div class="overlay" id="harga-pb">
                <div class="popup">
                    <h2>HARGA POINT BLANK</h2>
                    <a class="close" href="#populer">&times;</a>
                    <br>
                    <div class="content">
                        70 Diamonds :
                        <br>
                        <span class="harga">Rp 10.000</span>
                        <br>
                        140 Diamonds :
                        <br>
                        <span class="harga">Rp 20.000</span>
                        <br>
                        210 Diamonds :
                        <br>
                        <span class="harga">Rp 30.000</span>
                        <br>
                        280 Diamonds :
                        <br>
                        <span class="harga">Rp 40.000</span>
                        <br>
                        355 Diamonds :
                        <br>
                        <span class="harga">Rp 50.000</span>
                        <br>
                        500 Diamond :
                        <br>
                        <span class="harga">Rp 70.000</span>
                        <br>
                        720 Diamonds :
                        <br>
                        <span class="harga">Rp 100.000</span>
                        <br>
                        1000 Diamonds :
                        <br>
                        <span class="harga">Rp 130.000</span>
                        <br>
                        M. Mingguan :
                        <br>
                        <span class="harga">Rp 30.000</span>
                        <br>
                        M. Bulanan :
                        <br>
                        <span class="harga">Rp 150.000</span>
                        <br>
                        <a class="pesan" href="https://wa.me/6287816626068" target="_blank"
                            rel="noopener noreferrer"><img src="./images/whatsapp.png" alt="">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="apex">
            <div class="link">
                <a href="#harga-apex">
                    <img src="./images/apex.jpg" alt="">
                    <div class="judul-produk">Apex Legends</div>
                </a>
            </div>
            <div class="overlay" id="harga-apex">
                <div class="popup">
                    <h2>HARGA APEX LEGENDS</h2>
                    <a class="close" href="#populer">&times;</a>
                    <br>
                    <div class="content">
                        86 Diamonds :
                        <br>
                        <span class="harga">Rp 23.000</span>
                        <br>
                        114 Diamonds :
                        <br>
                        <span class="harga">Rp 28.000</span>
                        <br>
                        172 Diamonds :
                        <br>
                        <span class="harga">Rp 41.000</span>
                        <br>
                        285 Diamonds :
                        <br>
                        <span class="harga">Rp 70.000</span>
                        <br>
                        344 Diamonds :
                        <br>
                        <span class="harga">Rp 78.000</span>
                        <br>
                        372 Diamond :
                        <br>
                        <span class="harga">Rp 87.000</span>
                        <br>
                        514 Diamonds :
                        <br>
                        <span class="harga">Rp 120.000</span>
                        <br>
                        1135 Diamonds :
                        <br>
                        <span class="harga">Rp 256.000</span>
                        <br>
                        M. Mingguan :
                        <br>
                        <span class="harga">Rp 30.000</span>
                        <br>
                        M. Bulanan :
                        <br>
                        <span class="harga">Rp 150.000</span>
                        <br>
                        <a class="pesan" href="https://wa.me/6287816626068" target="_blank"
                            rel="noopener noreferrer"><img src="./images/whatsapp.png" alt="">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="csgo">
            <div class="link">
                <a href="#harga-csgo">
                    <img src="./images/csgo.png" alt="">
                    <div class="judul-produk">Counter Strike</div>
                </a>
            </div>
            <div class="overlay" id="harga-csgo">
                <div class="popup">
                    <h2>HARGA CSGO</h2>
                    <a class="close" href="#populer">&times;</a>
                    <br>
                    <div class="content">
                        52 UC :
                        <br>
                        <span class="harga">Rp 10.000</span>
                        <br>
                        263 UC :
                        <br>
                        <span class="harga">Rp 20.000</span>
                        <br>
                        525 UC :
                        <br>
                        <span class="harga">Rp 30.000</span>
                        <br>
                        788 UC :
                        <br>
                        <span class="harga">Rp 40.000</span>
                        <br>
                        1050 UC :
                        <br>
                        <span class="harga">Rp 50.000</span>
                        <br>
                        1375 UC :
                        <br>
                        <span class="harga">Rp 70.000</span>
                        <br>
                        1900 UC :
                        <br>
                        <span class="harga">Rp 100.000</span>
                        <br>
                        2425 UC :
                        <br>
                        <span class="harga">Rp 130.000</span>
                        <br>
                        M. Mingguan :
                        <br>
                        <span class="harga">Rp 30.000</span>
                        <br>
                        M. Bulanan :
                        <br>
                        <span class="harga">Rp 150.000</span>
                        <br>
                        <a class="pesan" href="https://wa.me/6287816626068" target="_blank"
                            rel="noopener noreferrer"><img src="./images/whatsapp.png" alt="">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="valo">
            <div class="link">
                <a href="#harga-valo">
                    <img src="./images/valorant.jpg" alt="">
                    <div class="judul-produk">Valorant</div>
                </a>
            </div>
            <div class="overlay" id="harga-valo">
                <div class="popup">
                    <h2>HARGA VALORANT</h2>
                    <a class="close" href="#populer">&times;</a>
                    <br>
                    <div class="content">
                        300 VP :
                        <br>
                        <span class="harga">Rp 34.000</span>
                        <br>
                        700 VP :
                        <br>
                        <span class="harga">Rp 81.000</span>
                        <br>
                        1125 VP :
                        <br>
                        <span class="harga">Rp 116.000</span>
                        <br>
                        1375 VP :
                        <br>
                        <span class="harga">Rp 152.000</span>
                        <br>
                        1950 VP :
                        <br>
                        <span class="harga">Rp 194.000</span>
                        <br>
                        2400 VP :
                        <br>
                        <span class="harga">Rp 250.000</span>
                        <br>
                        3400 VP :
                        <br>
                        <span class="harga">Rp 324.000</span>
                        <br>
                        7000 VP :
                        <br>
                        <span class="harga">Rp 646.000</span>
                        <br>
                        <a class="pesan" href="https://wa.me/6287816626068" target="_blank"
                            rel="noopener noreferrer"><img src="./images/whatsapp.png" alt="">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="overwatch">
            <div class="link">
                <a href="#harga-overwatch">
                    <img src="./images/overwatch.jpg" alt="">
                    <div class="judul-produk">Overwatch</div>
                </a>
            </div>
            <div class="overlay" id="harga-overwatch">
                <div class="popup">
                    <h2>HARGA OVERWATCH</h2>
                    <a class="close" href="#populer">&times;</a>
                    <br>
                    <div class="content">
                        60 GC :
                        <br>
                        <span class="harga">Rp 15.000</span>
                        <br>
                        330 GC :
                        <br>
                        <span class="harga">Rp 65.000</span>
                        <br>
                        1090 GC :
                        <br>
                        <span class="harga">Rp 185.000</span>
                        <br>
                        1440 GC :
                        <br>
                        <span class="harga">Rp 405.000</span>
                        <br>
                        3880 GC :
                        <br>
                        <span class="harga">Rp 625.000</span>
                        <br>
                        Blessing Walking :
                        <br>
                        <span class="harga">Rp 66.000</span>
                        <br>
                        <a class="pesan" href="https://wa.me/6287816626068" target="_blank"
                            rel="noopener noreferrer"><img src="./images/whatsapp.png" alt="">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <footer>
        <div class="sosmed">
            <h1>SOSIAL MEDIA</h1>
            <a href="https://" target="_blank" rel="noopener noreferrer"><img src="./images/ig.png" alt=""></a>
            <a href="http://" target="_blank" rel="noopener noreferrer"><img src="./images//fb.png" alt=""></a>
            <a href="http://" target="_blank" rel="noopener noreferrer"><img src="./images/github.png" alt=""></a>
            <a href="http://" target="_blank" rel="noopener noreferrer"><img src="./images/linkedin.png" alt=""></a>
        </div>
    </footer>
    <div id="copyright">
        &copy;2022 NTSSHOP
    </div>

</body>

</html>