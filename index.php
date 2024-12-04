<?php
session_start(); // Mulai session

// Periksa apakah pengguna sudah login
// if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
//     header("Location: login.php"); // Redirect ke halaman login jika belum login
//     exit();
// }
?>

<!DOCTYPE html>
<html lang="en">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Pesona Cokelat Bultiya</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <link href="assets/img/logo1.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
      <a href="index.html" class="logo d-flex align-items-center me-auto" style="display: flex; align-items: center; gap: 10px; text-decoration: none;">
        <img src="assets/img/logo1.png" alt="Logo" style="height: 40px; width: auto;">
        <p style="font-size: 16px; margin: 0; color: #FFFFFF; font-family: 'Lobster', cursive;">Pesona Bultiya Chocolate</p>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li class="dropdown"><a href="#"><span>Tentang Kami</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#about">Profil Perusahaan</a></li>
              <li><a href="#visi-misi">Visi & Misi</a></li>
              <li><a href="#team">Profile Management</a></li>
              <li><a href="#pricing">Pencapaian</a></li>
              <li><a href="#gallery">Gallery</a></li>
            </ul>
          </li>
          <li><a href="#produk">Produk</a></li>
          <li><a href="#portfolio">Pengolahan</a></li>
          <li><a href="#testimonials">Testimoni</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">
    <section id="hero" class="hero section dark-background">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>PESONA BULTIYA CHOCOLATE</h1>
            <p>Produk coklat Pesona Bultiya, cokelat yang terbuat dari biji kakao premium yang ditanam di Bulungan, Kalimantan Utara.</p>
            <div class="d-flex">
              <a href="https://youtu.be/sFN-Y2P-XN4?si=0pcIQpLtyiOoE_K2" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/cocoa.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>
    </section>

    <section id="clients" class="clients section light-background">
      <div class="container" data-aos="zoom-in">
        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/enm.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/pkn.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/mek.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/sas.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/multi-sumber-alam.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/pak.png" class="img-fluid" alt=""></div>
          </div>
        </div>
      </div>
    </section>

    <section id="about" class="about section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Profile Perusahaan</h2>
      </div>

      <div class="about">
        <div class="row gy-4">
          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <h1></h1>
            <p class="text-justify">
              Pesona Bultiya adalah merek cokelat lokal yang berpusat di Kalimantan Utara, hadir dengan visi untuk mengangkat potensi kakao daerah ini
              ke panggung nasional dan internasional. Dengan komitmen yang kuat terhadap pemberdayaan petani lokal, Pesona Bultiya fokus pada pemulihan
              pohon kakao yang sempat terabaikan. Merek ini juga bertekad untuk memanfaatkan sepenuhnya bahan baku lokal untuk menghasilkan produk cokelat berkualitas tinggi

              Proses produksi Pesona Bultiya dimulai dari pemilihan biji kakao terbaik hasil kerja keras petani lokal. Setiap biji kakao diproses dengan cermat,
              memadukan metode tradisional dan teknologi modern.
            </p>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p>
              Perpaduan ini memastikan konsistensi rasa dan kualitas produk sambil tetap menjaga keaslian citarasa
              khas cokelat Kalimantan Utara. Keberlanjutan juga menjadi perhatian utama Pesona Bultiya, dengan praktik yang mendukung kelestarian lingkungan

              Dengan produk yang bercita rasa tinggi, Pesona Bultiya tidak hanya berambisi menembus pasar cokelat premium, tetapi juga menjadi simbol kebanggaan lokal.
              Melalui inovasi berkelanjutan dan kolaborasi dengan komunitas lokal, merek ini terus berupaya menghadirkan kelezatan cokelat Kalimantan Utara yang autentik kepada dunia.
              Pesona Bultiya membuktikan bahwa produk lokal bisa menjadi pemain utama dalam industri cokelat global.
            </p>
            <a href="#visi-misi" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </section>

    <section id="why-us" class="section why-us light-background" data-builder="section">
      <div class="container-fluid">
      </div>
    </section>
    <section id="visi-misi" class="visi-misi section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <div class="row">
            <div class="col-lg-6 d-flex flex-column">
              <img src="assets/img/cocoa5.png" class="img-fluid mb-3" alt="">
              <img src="assets/img/produk/bultiya-04483.JPG" class="img-fluid mb-4" alt="">
              <a href="#produk" class="read-more mt-3"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>

            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h1>VISI</h1>
              <p class="fst-italic">
                "Kami ingin Pesona Bultiya menjadi merek cokelat kebanggaan Kalimantan Utara yang tak hanya memanjakan lidah, 
                tapi juga membawa manfaat bagi petani lokal dan lingkungan sekitar. Bayangkan, setiap gigitan cokelat Pesona Bultiya, 
                kamu nggak cuma nikmatin cita rasa unik kakao Kalimantan, tapi juga mendukung petani lokal dan turut menjaga kelestarian alam Kalimantan."
              </p>
              <h1>MISI</h1>
              <ul>
                <li>
                  <span>
                    <strong><h5>Menjadi Raja Cokelat Kalimantan</h5></strong>
                    Kami bertekad menjadikan Pesona Bultiya sebagai merek cokelat nomor satu di Kalimantan Utara,
                    bahkan Indonesia. Dengan kualitas terbaik dan cita rasa yang khas, kami ingin cokelat buatan anak
                    negeri bisa bersaing dengan merek internasional.
                  </span>
                </li>
                <li>
                  <span>
                    <strong><h5>Petani Lokal</h5></strong>
                    Kami berkomitmen untuk memberdayakan petani kakao lokal dengan memberikan harga yang layak dan
                    pelatihan agar kualitas hasil panen mereka semakin meningkat. Dengan begitu, kesejahteraan petani
                    pun ikut terangkat.
                  </span>
                </li>
                <li>
                  <span>
                    <strong><h5>Menjaga Kelestarian Alam</h5></strong>
                    Proses produksi cokelat Pesona Bultiya akan selalu mengedepankan prinsip-prinsip keberlanjutan.
                    Kami akan menggunakan bahan-bahan alami, mengurangi limbah, dan mendukung praktik pertanian yang
                    ramah lingkungan.
                  </span>
                </li>
                <li>
                  <span>
                    <strong><h5>Menginspirasi Generasi Muda</h5></strong>
                    Kami ingin menginspirasi generasi muda Kalimantan Utara untuk lebih mencintai produk lokal dan
                    berani berwirausaha. Dengan Pesona Bultiya, kami harap bisa menjadi contoh sukses bagi UMKM lainnya.
                  </span>
                </li>
                <li>
                  <span>
                    <strong><h5>Menyebar Kebaikan</h5></strong>
                    Selain memberikan kenikmatan, kami juga ingin berkontribusi pada masyarakat sekitar melalui
                    berbagai kegiatan sosial. Dengan cara ini, Pesona Bultiya tidak hanya menjadi bisnis yang sukses,
                    tapi juga menjadi bagian dari solusi untuk masalah social
                  </span>
                </li>
              </ul>
            </div>
          </div>

          <section id="produk" class="produk section">
            <div class="container section-title" data-aos="fade-up">
              <h2>Produk</h2>
              <p>Cokelat Susu berkualitas PREMIUM dengan kakao BERMUTU dan KHAS untuk Anda penikmat cokelat! Cokelat Susu 30% dan 35% Kakao dengan tekstur creamy, rasa dominan kakao asli. Cokelat Susu batangan dari Cokelat Bultiya ini mengandung kadar Kakao tinggi, sehingga sangat bermanfaat dan baik untuk kesehatan. 
              Cokelat ini kami buat dari biji Kakao fermentasi pilihan dari petani lokal di Kalimantan Utara Indonesia yang memiliki cita rasa khas Kakao yang rasanya lebih ringan (mild/rounded) agar lebih harmoni dipadukan dengan susu.</p>
            </div>

            <div class="container">
              <div class="row gy-4">
                <div class="col-xl-6 col-md-6 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                  <div class="service-item position-relative">
                    <div class="icon"><img src="assets/img/cocoa6.png" alt="Service Icon" class="mx-auto"></div>
                    <h4><a href="https://id.shp.ee/4q3HWYu" class="stretched-link">35% Milk Chocolate Couvertur</a></h4>
                    <p>Cokelat Susu 35% Kakao dengan tekstur creamy, rasa dominan kakao asli. Cokelat Susu batangan dari Cokelat Bultiya ini mengandung kadar Kakao tinggi, sehingga sangat bermanfaat dan baik untuk kesehatan.</p>
                    <div class="mt-4">
                      <a href="https://id.shp.ee/4q3HWYu" class="buy-btn">Buy Now</a> 
                    </div>
                  </div>
                </div>

                <div class="col-xl-6 col-md-6 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
                  <div class="service-item position-relative">
                    <div class="icon"><img src="assets/img/cocoa7.png" alt="Service Icon" class="mx-auto"></div>
                    <h4><a href="https://id.shp.ee/GBojzui" class="stretched-link">30% Milk Chocolate Couvertur</a></h4>
                    <p>Cokelat Susu 30% Kakao dengan tekstur creamy, rasa dominan kakao asli. Cokelat Susu batangan dari Cokelat Bultiya ini mengandung kadar Kakao tinggi, sehingga sangat bermanfaat dan baik untuk kesehatan.</p>
                    <div class="mt-4">
                      <a href="https://id.shp.ee/GBojzui" class="buy-btn">Buy Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

    <section id="call-to-action" class="call-to-action section dark-background">
      <img src="assets/img/cocoa8.png" alt="">
      <div class="container">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-9 text-center text-xl-start">
            <h3>Sales Marketing</h3>
            <p>Hubungi kami untuk informasi produk dan penawaran terbaik dari Sales Marketing kami</p>
          </div>
          <div class="col-xl-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="https://wa.me/6282253276731?text=Halo%20Slamet%20Sales%20Marketing">WhatsApp</a>
          </div>
        </div>
      </div>
    </section>

    <section id="portfolio" class="portfolio section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Pengolahan</h2>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/masonry-portfolio/alur-produksi.jpeg" class="img-fluid" alt="">
            <h4>Crusher</h4>
            <p>Crusher menghancurkan biji kakao dengan memanfaatkan mekanisme seperti gilingan atau roller untuk memecah biji menjadi pecahan kecil. Proses ini memisahkan inti biji (nib) dari kulit luar. Hasil dari proses ini adalah nib kakao yang siap untuk digiling lebih lanjut menjadi pasta kakao, serta kulit kakao yang dapat dipisahkan untuk digunakan dalam produk lain.</p>
            <h4>Ball Mill</h4>
            <p>Stone mill menggunakan dua batu besar yang berputar untuk menghaluskan nib kakao menjadi pasta atau massa kakao. Proses ini mengubah nib yang kasar menjadi pasta yang halus, dan juga dapat memisahkan lemak kakao (mentega kakao) dari padatan kakao. Stone mill sering digunakan dalam pembuatan cokelat untuk menghasilkan tekstur yang halus dan merata dalam produk akhir.</p>
            <h4>Pencetakan</h4>
            <p>Pencetakan melibatkan menuangkan cokelat cair ke dalam cetakan dengan bentuk yang diinginkan, seperti batangan atau bentuk khusus. Cetakan kemudian didinginkan untuk mengeraskan cokelat dan memastikan bentuknya tetap stabil. Proses ini penting untuk menghasilkan produk cokelat dengan bentuk dan tekstur yang konsisten.</p>
            <h4>Packing Primer</h4>
            <p>Packing primer aluminum foil melibatkan membungkus produk cokelat dengan foil aluminium yang memberikan perlindungan terhadap udara, kelembapan, dan cahaya. Foil ini menjaga kesegaran dan kualitas cokelat serta melindunginya dari kontaminasi eksternal. Kemasan ini juga sering digunakan untuk meningkatkan daya tarik produk dan memberikan informasi label.</p>
            <h4>Packing Sekunder</h4>
            <p>Packing sekunder kemasan dus melibatkan menempatkan produk cokelat yang sudah dibungkus dalam foil aluminium ke dalam kotak karton. Kemasan dus ini biasanya mencantumkan informasi mengenai komposisi produk, termasuk berat, bahan, dan informasi nutrisi. Kemasan sekunder ini memberikan perlindungan tambahan selama penyimpanan dan transportasi, serta memudahkan distribusi dan penjualan produk di ritel.</p>
          </div>
          <div class="col-lg-6">
            <div class="portfolio-info">
              <h4>Biji dari Petani</h4>
              <p>Biji kakao kering dari petani adalah hasil fermentasi dan pengeringan dengan kadar air sekitar 6-7%. Berwarna cokelat tua, bertekstur kasar, dan memiliki aroma khas cokelat yang sedikit pahit. Sebelum dikirim ke pabrik, biji dibersihkan dari kotoran dan siap diolah menjadi produk seperti cokelat atau bubuk kakao.</p>
              <h4>Penanganan Biji</h4>
              <p>Penanganan atau sortasi dilakukan untuk memeriksa kualitas biji. Biji yang masih memiliki kadar air terlalu tinggi akan dipisahkan dan dikeringkan kembali, baik melalui penjemuran ulang atau menggunakan alat pengering. Ideal kadar air pada biji kakao 6%-7%. Proses ini penting untuk memastikan biji mencapai kadar air yang ideal, sehingga biji siap untuk diproses lebih lanjut tanpa risiko kerusakan atau penurunan kualitas.</p>
              <h4>Multi Purpose Roaster</h4>
              <p>Roaster adalah proses pemanggangan biji kakao pada suhu 120°C hingga 150°C untuk mengembangkan rasa dan aroma cokelat. Proses ini juga membantu mengurangi kelembapan dan mempermudah pemisahan kulit dari inti biji (nib). Roasting meningkatkan cita rasa cokelat yang khas dan menyiapkan biji untuk proses pengolahan lebih lanjut, seperti pemurnian dan penggilingan.</p>
              <h4>Cooler</h4>
              <p>Cooler adalah tahap di mana biji kakao yang telah dipanggang didinginkan dengan cepat untuk menghentikan proses pemanasan. Biji biasanya didinginkan menggunakan udara dingin atau alat pendingin khusus. Proses ini penting untuk menghindari pembentukan uap air yang dapat mempengaruhi kualitas biji.</p>
              <h4>Stone Mill</h4>
              <p>Stone mill menggunakan dua batu besar yang berputar untuk menghaluskan nib kakao menjadi pasta atau massa kakao. Proses ini mengubah nib yang kasar menjadi pasta yang halus, dan juga dapat memisahkan lemak kakao (mentega kakao) dari padatan kakao. Stone mill sering digunakan dalam pembuatan cokelat untuk menghasilkan tekstur yang halus dan merata dalam produk akhir.</p>
              <h4>Vertical Tempering</h4>
              <p>Vertical tempering mengolah cokelat dengan memanaskan dan mendinginkannya dalam mesin tempering vertikal. Proses ini memastikan bahwa cokelat mencapai suhu dan konsistensi yang tepat untuk kristalisasi yang optimal. Teknik ini menghasilkan cokelat yang memiliki tekstur halus dan kilap yang baik, serta menghindari pembentukan kristal lemak yang tidak diinginkan.</p>
              <h4>Showcase</h4>
              <p>Showcase adalah fase di mana produk cokelat, seperti batangan atau praline, dipamerkan secara visual untuk menilai kualitas, desain, dan presentasinya. Ini bisa dilakukan melalui sampel di toko, pameran, atau dalam materi pemasaran. Tujuannya adalah untuk menarik perhatian konsumen dan menyoroti keunggulan produk cokelat yang telah diproduksi.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="team" class="team section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Profile Management</h2>
      </div>

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Tria Suprajeni</h4>
                <span>Presiden Direktur</span>
                <p>Mengambil keputusan strategis tertinggi, menyetujui anggaran, investasi, dan keputusan besar lainnya.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Rayendra Pradipta</h4>
                <span>Direktur</span>
                <p>Memberikan arahan kepada divisi Finance & Support dan Operation Project, menyetujui kebijakan operasional, dan membuat keputusan penting.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Agus Yahyah</h4>
                <span>Operation Project</span>
                <p>Mengatur jalannya proyek, mengawasi implementasi proses produksi, dan melakukan inovasi pada produk dan operasional.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Dewi Kartika</h4>
                <span>Admin Officer</span>
                <p>Mengelola data dan dokumen perusahaan, memproses laporan keuangan, dan mendukung kebutuhan administratif departemen lain.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Kepala Unit: Vacant</h4>
                <span>Supply Bahan Baku & Logistik</span>
                <p>Memilih dan menjalin hubungan dengan supplier, merencanakan logistik, dan mengelola stok bahan baku.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Vacant</h4>
                <span>Supplier Bahan Baku & Bahan Baku Tambahan</span>
                <p>Bertanggung jawab terhadap pengadaan bahan-bahan utama dan tambahan yang dibutuhkan untuk produksi.
                Berkoordinasi dengan tim logistik agar bahan baku tersedia sesuai kebutuhan produksi.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Vacant</h4>
                <span>Logistik & Warehouse</span>
                <p>Mengelola gudang dan distribusi bahan baku ke unit produksi.
                Bertanggung jawab atas penyimpanan, perawatan, dan pengiriman bahan baku.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Dani Bayu S</h4>
                <span>Produksi</span>
                <p>Mengatur proses kerja produksi, alur kerja, dan alokasi sumber daya produksi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Koord: Vacant</h4>
                <span>Packing</span>
                <p>Melakukan pengepakan produk sesuai standar yang ditetapkan.
                Memastikan bahwa kemasan produk sesuai dengan standar kualitas.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Vacant (2)</h4>
                <span>Labor Packing</span>
                <p>Membantu proses pengepakan produk dengan melakukan pekerjaan pengepakan manual.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Slamet</h4>
                <span>Asisten Produksi</span>
                <p>Membantu proses produksi sehari-hari, seperti pengolahan bahan dan pemantauan proses produksi.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Moh. Iksar</h4>
                <span>Asisten Produksi</span>
                <p>Membantu proses produksi sehari-hari, seperti pengolahan bahan dan pemantauan proses produksi.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Koord Vacant</h4>
                <span>GA Support</span>
                <p>Menangani penyediaan fasilitas kantor, pengaturan karyawan, dan memastikan semua peralatan tersedia dan berfungsi.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <a href="#pricing" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        
    </section>


    <section id="pricing" class="pricing section light-background">

      
      <div class="container section-title" data-aos="fade-up">
        <h2>Pencapaian</h2>
      </div>

      <div class="container">
        <div class="row gy-4">

        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="achievement-item featured">
              <img src="assets/img/achievement/pencapaian_2.png" class="img-fluid" alt="">
              <h3>Sumber Bahan Baku Berkualitas</h3>
              <span>Menggunakan biji kakao asli dari petani di Bulungan, memberikan dukungan
                    langsung pada petani lokal dan memastikan kualitas bahan baku terbaik.</span>
            </div>
          </div>

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="achievement-item">
              <img src="assets/img/achievement/pencapaian_1.png" class="img-fluid" alt="">
              <h3>Sertifikasi Halal dan BPOM</h3>
              <span>Produk telah mendapatkan sertifikat halal dan izin edar dari BPOM, menjamin kualitas dan keamanan produk untuk konsumen.</span>
              </div>
          </div>

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="achievement-item">
              <img src="assets/img/achievement/pencapaian_3.png" class="img-fluid" alt="">
              <h3>Kinerja Penjualan</h3>
              <span>Rata-rata penjualan tahunan mencapai 1.282,5 unit,
                menunjukkan permintaan yang stabil dan kepercayaan pelanggan terhadap produk.</span>
            </div>
          </div>
          </div>

        </div>

      </div>

            </section><!-- /Call To Action Section -->

      <!-- Portfolio Section -->
      <section id="portfolio" class="portfolio section">

        <!-- Section Title -->
        <section id="gallery" class="gallery section">
        <div class="container section-title" data-aos="fade-up">
          <h2>Gallery</h2>
          <p>Gallery Cokelat Pesona Bultiya (PBC)</p>
        </div><!-- End Section Title -->

        <div class="container">

          <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-produk">Produk</li>
              <li data-filter=".filter-store">Store</li>
              <li data-filter=".filter-produksi">Produksi</li>
              <li data-filter=".filter-cfd">CFD</li>
            </ul><!-- End Portfolio Filters -->

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-produk">
                <img src="assets/img/produk/bultiya04481.JPG" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Produk</h4>
                  <a href="assets/img/produk/bultiya04483.JPG" title="Produk" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-store">
                <img src="assets/img/store/bultiya-04263.JPG" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Store</h4>
                  <a href="assets/img/store/bultiya-04263.JPG" title="store" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-produksi">
                <img src="assets/img/tempering/tempering-04812.JPG" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Produksi</h4>
                  <a href="assets/img/tempering/tempering-04812.JPG" title="produksi" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-cfd">
                <img src="assets/img/cfd/cfd-04911.JPG" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>CFD</h4>
                  <a href="assets/img/cfd/cfd-04911.JPG" title="cfd" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-produk">
                <img src="assets/img/produk/bultiya-04060.JPG" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Produk</h4>
                  <a href="assets/img/produk/bultiya-04060.JPG" title="Produk" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-store">
                <img src="assets/img/store/bultiya-04338.JPG" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Store</h4>
                  <a href="assets/img/store/bultiya-04338.JPG" title="store" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-produksi">
                <img src="assets/img/tempering/tempering-04833.JPG" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Produksi</h4>
                  <a href="assets/img/tempering/tempering-04833.JPG" title="produksi" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-cfd">
                <img src="assets/img/cfd/cfd-04887.JPG" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>CFD</h4>
                  <a href="assets/img/cfd/cfd-04887.JPG" title="cfd" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-produk">
                <img src="assets/img/produk/bultiya-04039.JPG" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Produk</h4>
                  <a href="assets/img/produk/bultiya-04039.JPG" title="Produk" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-store">
                <img src="assets/img/store/bultiya-04201.JPG" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Store</h4>
                  <a href="assets/img/store/bultiya-04201.JPG" title="store" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-produksi">
                <img src="assets/img/tempering/tempering-04852.JPG" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Produksi</h4>
                  <a href="assets/img/tempering/tempering-04852.JPG833.JPG" title="produksi" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-cfd">
                <img src="assets/img/cfd/cfd-04870.JPG" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>CFD</h4>
                  <a href="assets/img/cfd/cfd-04870.JPG" title="cfd" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-produk">
                <img src="assets/img/produk/bultiya-04063.JPG" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Produk</h4>
                  <a href="assets/img/produk/bultiya-04063.JPG" title="Produk" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-store">
                <img src="assets/img/store/bultiya-04250.JPG" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Store</h4>
                  <a href="assets/img/store/bultiya-04250.JPG" title="store" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-produksi">
                <img src="assets/img/tempering/tempering-04842.JPG" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Produksi</h4>
                  <a href="assets/img/tempering/tempering-04842.JPG" title="produksi" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-cfd">
                <img src="assets/img/cfd/cfd-04898.JPG" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>CFD</h4>
                  <a href="assets/img/cfd/cfd-04898.JPG" title="cfd" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-cfd">
                <img src="assets/img/cfd/cfd-04884.JPG" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>CFD</h4>
                  <a href="assets/img/cfd/cfd-04884.JPG" title="cfd" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-cfd">
                <img src="assets/img/cfd/cfd-04891.JPG" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>CFD</h4>
                  <a href="assets/img/cfd/cfd-04891.JPG" title="cfd" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-cfd">
                <img src="assets/img/cfd/cfd-04884.JPG" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>CFD</h4>
                  <a href="assets/img/cfd/cfd-04884.JPG" title="cfd" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div><!-- End Portfolio Item -->

              

              

              

            </div><!-- End Portfolio Container -->

          </div>


      </section><!-- /Portfolio Section -->

    </section>
    <section id="testimonials" class="testimonials section">


      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Kami percaya bahwa kualitas terbaik selalu tercermin dari kepuasan pelanggan.</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/rasmi_team.png" class="testimonial-img" alt="">
                <h3>Hasnah</h3>
                <h4>Customer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Kualitas cokelatnya sangat terasa, apalagi teksturnya yang lembut.
                    Saya suka karena tidak terlalu manis dan rasa asli cokelatnya keluar.
                    Bagus juga sebagai oleh-oleh khas Kalimantan Utara!</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Faq 2 Section -->
    <section id="faq-2" class="faq-2 section light-background">
    
    

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pertanyaan Lainnya</h2>
        <p>Sebagai produsen cokelat lokal, Cokelat Pesona Bultiya (PBC) berkomitmen untuk menghasilkan cokelat berkualitas tinggi
          dengan cita rasa khas Nusantara. Kami bekerja langsung dengan petani kakao lokal, memastikan setiap biji kakao yang kami
          olah berkualitas terbaik dan dihasilkan secara berkelanjutan.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10">

            <div class="faq-container">

              <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Ada berapa lokasi tempat penanaman kakao lokal yang digunakan?</h3>
                <div class="faq-content">
                  <p>Saat ini, lokasi penanaman kakao lokal berada di tiga site: Kelubir Mine Operation, Sekayan Mine Operation, dan Ardimulyo Mine Operation.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Apakah Pesona Bultiya Chocolate (PBC) melayani pembelian dalam jumlah besar</h3>
                <div class="faq-content">
                  <p>Ya, Pesona Bultiya Chocolate (PBC) melayani pembelian dalam jumlah besar baik untuk keperluan bisnis maupun industri. </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Apakah Pesona Bultiya Chocolate (PBC) terbuka untuk kolaborasi dengan petani kakao lain</h3>
                <div class="faq-content">
                  <p>Cokelat Pesona Bultiya Chocolate (PBC) selalu terbuka untuk berkolaborasi dengan petani kakao lain, terutama yang berada di sekitar Kalimantan Utara. Kami percaya bahwa kolaborasi yang baik dengan petani lokal akan mendukung pertumbuhan industri cokelat dan meningkatkan kualitas hidup komunitas petani.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Bagaimana cara Cokelat Pesona Bultiya memastikan kualitas produknya</h3>
                <div class="faq-content">
                  <p>Cokelat Pesona Bultiya memastikan kualitas produknya melalui pengawasan ketat pada setiap tahap produksi, mulai dari pemilihan biji kakao hingga proses pengolahan akhir. Kami menerapkan standar mutu tinggi dan melakukan uji kualitas untuk memastikan setiap produk cokelat yang dihasilkan memenuhi ekspektasi pelanggan dalam hal cita rasa dan tekstur.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Apakah Cokelat Pesona Bultiya menerima kunjungan pabrik atau tur edukasi</h3>
                <div class="faq-content">
                  <p>Ya, Cokelat Pesona Bultiya menerima kunjungan pabrik dan tur edukasi bagi pihak yang tertarik untuk mempelajari proses produksi cokelat kami. Kami menyediakan kesempatan bagi para pengunjung untuk melihat langsung bagaimana cokelat Bultiya diproduksi, mulai dari pengolahan biji kakao hingga produk akhir, serta belajar tentang upaya kami dalam mendukung keberlanjutan dan pemberdayaan petani lokal.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div>

        </div>

      </div>

    </section>
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Alamat</h3>
                  <p>JL. Jeruk No.21, Tanjung Selor</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Telp</h3>
                  <p>+62 8552 2038 497</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-instagram flex-shrink-0"></i>
                <div>
                  <h3>Instagram</h3>
                  <p><a href="https://www.instagram.com/pbc_bulungan?igsh=MXRmaGpwcHBiZmMybw==" target="_blank">@pbc_bulungan</a></p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email</h3>
                  <p>marketing@pakagri.co.id</p>
                </div>
              </div><!-- End Info Item -->
            </div>
          </div>

          <div class="col-lg-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15939.518033650647!2d117.35125626548967!3d2.8511306840917316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3213cf331ce8b1a3%3A0xb05c99a03fddebcd!2sRumah%20Cokelat%20Bultiya!5e0!3m2!1sid!2sus!4v1725947160864!5m2!1sid!2sus" width="100%" height="100%" style="border:0; min-height:400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </section>

          

        </div>

      </div>

    </section>

  </main>

  <footer id="footer" class="footer">
    <div class="container copyright text-center mt-10">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Cokelat Pesona Bultiya</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>