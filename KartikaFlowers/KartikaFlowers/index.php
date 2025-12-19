<?php
session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] != 'login') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Aplikasi Penjualan Barang</title>

</head>
<body>
    
<!-- header start -->
 <header>

    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>
    
    <a href="#" class="logo">ESQA<span>.</span></a>

    <nav class="navbar">
        <a href="#about">Profil</a>
        <a href="#products">products</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
        <a href="formtrans.html">Transaksi</a>

    </nav>

    <div class="icons">
        <a href="login.html" class="fas fa-user"></a>
    </div>

 </header>

 <!-- header end -->

        
 <!-- home start -->

 <section class="home" id="home">

    <div class="content">
        <h3>Cosmetics brand in Indonesia
        </h3>
        <span>bunga alami dan indah</span>
        <p>We believe that every woman is naturally beautiful and makeup is not supposed to change your look, but to enhance your natural beauty.</p>
        <a href="Beranda.html" class="btn">Beranda</a>
    </div>

 </section>

<!-- home end -->




<!-- about start -->

<section class="about" id="about">
    <h1 class="heading"> <span> Profil </span></h1>

    <div class="row">

        <div class="video-container">
            <video src="img/videoplayback.mp4" loop autoplay muted></video>
        </div>

        <div class="content">
            <h3> mengapa memilih kami? </h3>
            <p> ESQA adalah merek Kosmetik Vegan pertama di Indonesia yang menyediakan produk berkualitas tinggi yang dikemas secara glamor dengan harga terjangkau untuk memaksimalkan kecantikan alami Anda. ESQA dimulai dengan semangat untuk membangun merek kecantikan inovatif yang berfokus pada bahan-bahan yang aman dan mengembangkan produk yang terdepan di kancah tata rias internasional.</p>
            <p> Harga yang terjangkau dan layanan kustomisasi membuat setiap pesanan lebih personal dan spesial. Percayakan momen indah Anda kepada ESQA, yang telah terbukti berpengalaman dan terpercaya.</p>
            <a href="#" class="btn">Pelajari selengkapnya</a>
        </div>


    </div>
</section>

<!-- about end -->



<!-- icon about start -->


<section class="icons-container">

    <div class="icons">
        <img src="img/carbon.png" alt="">
        <div class="info">
            <h3>pengiriman gratis</h3>
            <span>untuk semua pesanan</span>
        </div>
    </div>

    <div class="icons">
        <img src="img/return.png" alt="">
        <div class="info">
            <h3>Pengembalian 10 Hari</h3>
            <span>Jaminan Uang Kembali</span>
        </div>
    </div>

    <div class="icons">
        <img src="img/gift.png" alt="">
        <div class="info">
            <h3>Penawaran & Hadiah</h3>
            <span>untuk semua pesanan</span>
        </div>
    </div>



</section>


<!-- icon about end -->


<!-- product start -->

<section class="products" id="products">


    <h1 class="heading"> <span>Products</span> </h1>
    <div class="box-container">

        <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="img/Cushion.webp" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="formtrans.html" class="cart-btn">Tambahkan ke keranjang</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>ESQA Flawless Cushion Serum SPF 50+ PA+++ - Satin</h3>
                <div class="price"> IDR Rp 208.000 <span> IDR Rp 252.000 </span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-15%</span>
            <div class="image">
                <img src="img/Conceler.webp" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="formtrans.html" class="cart-btn">Tambahkan ke keranjang</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>ESQA Minimalist Serum Concealer</h3>
                <div class="price"> IDR Rp. 55.000 <span> IDR Rp. 110.000 </span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-20%</span>
            <div class="image">
                <img src="img/Foundation.webp" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="formtrans.html" class="cart-btn">Tambahkan ke keranjang</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>ESQA Minimalist Blurring Serum Skin Tint SPF 35 PA++</h3>
                <div class="price"> IDR Rp. 169.000 <span> Rp. 238.000 </span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-25%</span>
            <div class="image">
                <img src="img/Haze Velvet Lip Tint.webp" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="formtrans.html" class="cart-btn">Tambahkan ke keranjang</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>ESQA Haze Velvet Lip Tint</h3>
                <div class="price"> Rp. 75.000 <span> Rp. 100.000 </span> </div>
            </div>
        </div>
        <div class="box">
            <span class="discount">-20%</span>
            <div class="image">
                <img src="img/flawless_powder_foundation_custard_600x.webp" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="formtrans.html" class="cart-btn">Tambahkan ke keranjang</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Flawless Micro Setting Powder</h3>
                <div class="price"> IDR Rp. 135.000 <span> IDR Rp. 235.000 </span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-25%</span>
            <div class="image">
                <img src="img/The Goddess Cheek Palette.webp" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="formtrans.html" class="cart-btn">Tambahkan ke keranjang</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>The Goddess Cheek Palette</h3>
                <div class="price"> IDR Rp. 225.000 <span> Rp. 280.000 </span> </div>
            </div>
        </div>


    </div>

</section>


<!-- product end -->


<!-- review start -->

<section class="review" id="review">

    <h1 class="heading"> Customer's <span>Review</span></h1>
    <div class="box-container">

        <div class="box">
            <div class="start">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>

            <p>Pengiriman cepat dan pelayanan luar biasa. Sangat puas dengan ESQA!</p>
            <div class="user">
                <img src="img/ay.jpg" alt="">
                <div class="user-info">
                    <h3>Fauzi Akbar</h3>
                    <span>happy customer</span>

                </div>
            </div>

            <span class="fas fa-quote-right"></span>
        </div>

        <div class="box">
            <div class="start">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>

            <p>Pelayanan pelanggan yang ramah dan profesional. cushion tiba tepat waktu dan dalam kondisi sempurna. Sangat direkomendasikan!</p>
            <div class="user">
                <img src="img/kartika.jpeg" alt="">
                <div class="user-info">
                    <h3>Kartika Rahmawati</h3>
                    <span>happy customer</span>

                </div>
            </div>

            <span class="fas fa-quote-right"></span>
        </div>

        <div class="box">
            <div class="start">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>

            <p>Desain packging sangat elegan dan unik. Pasti akan memesan lagi!</p>
            <div class="user">
                <img src="img/luis.png" alt="">
                <div class="user-info">
                    <h3>Luis</h3>
                    <span>happy customer</span>

                </div>
            </div>

            <span class="fas fa-quote-right"></span>
        </div>

    </div>


</section>

 <!-- review end -->

<!-- contact start -->

<section class="contact" id="contact">

    <h1 class="heading"> <span> contact </span> us </h1>
    <div class="row">

      <form action="">
        <input type="text" placeholder="name" class="box">
        <input type="email" placeholder="email" class="box">
        <input type="number" placeholder="number" class="box">
        <textarea name="" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">
      </form>
        
    <div class="image">
        <img src="img/LIPPETALS.webp" alt="">
    </div>

    </div>


</section>

<!-- contact end -->

<!-- footer starts -->


<section class="footer">

    <div class="box-container">
        
        <div class="box">
            <h3>quick link</h3>
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">product</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3>extra link</h3>
            <a href="#">my account</a>
            <a href="#">my order</a>
            <a href="#">my favorite</a>
        </div>

        <div class="box">
            <h3>lokasi</h3>
            <a href="#">Karawang</a>
            <a href="#">Bandung</a>
            <a href="#">Cikampek</a>
            <a href="#">Jakarta</a>
            <a href="#">Bogor</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="tel:+6281234566789">+62851-5699-1032</a>
            <a href="mailto:pesbayu47@gmail.com">pesbayu47@gmail.com</a>
            <img src="img/payindo.png" alt="">
        </div>        

    </div>

<div class="credit"> created by <span> Bayu Pradita </span> | All Right Reserved | </div>

</section>

<!-- footer end -->


    <script></script>
</body>
</html>