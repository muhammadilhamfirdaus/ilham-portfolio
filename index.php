<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>My Portfolio | M Ilham Firdaus</title>

    <!-- boostrap icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
    />

    <!-- my bootsrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />

    <!-- my aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- my css -->
    <link rel="stylesheet" href="style.css" />

    <!-- Link jQuery dan DataTables CSS -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"
    />
    <script
      type="text/javascript"
      charset="utf8"
      src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"
    ></script>
  </head>

  <body>
    <!-- navbar start -->
    <nav
      class="navbar navbar-expand-lg navbar-dark bg-primary shadow fixed-top"
    >
      <div class="container">
        <a class="navbar-brand" href="#">M Ilham Firdaus</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#abaut">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#project">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#table">Table</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- navbar end -->

    <!-- jumbotron start -->
    <section class="jumbotron text-center">
      <img
        src="img/profile.jpg"
        alt="M Ilham Firdaus"
        width="200"
        class="rounded-circle img-thumbnail"
      />
      <h1 class="display-4">M Ilham Firdaus</h1>
      <p class="lead">Entrepreneur | Programmer</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,128L48,160C96,192,192,256,288,245.3C384,235,480,149,576,144C672,139,768,213,864,229.3C960,245,1056,203,1152,170.7C1248,139,1344,117,1392,106.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- jumbotron end -->

    <!-- abaut start -->
    <section id="abaut">
      <div class="container">
        <div class="row text-center mb-4">
          <div class="col">
            <h2>Abaut Me</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-5 mb-3" data-aos="fade-right">
            <p>
              Saya adalah seorang mahasiswa di jurusan Teknologi Informasi
              dengan minat yang kuat dalam pengembangan perangkat lunak dan
              pemrograman. Dengan pengalaman dalam proyek kolaboratif, saya
              senantiasa berusaha untuk meningkatkan keterampilan saya dan
              belajar teknologi baru. Selain itu, saya memiliki ketertarikan
              dalam bidang desain antarmuka yang memadukan fungsionalitas dan
              estetika.
            </p>
          </div>
          <div class="col-md-5" data-aos="fade-left" data-aos-delay="200">
            <p>
              Di waktu luang, saya suka menjelajahi berbagai platform teknologi
              dan mengikuti perkembangan tren terkini di dunia IT. Saya percaya
              bahwa dengan dedikasi dan kerja keras, saya dapat berkontribusi
              pada proyek-proyek yang berdampak positif. Saya selalu terbuka
              untuk peluang baru dan tantangan yang memungkinkan saya untuk
              tumbuh baik secara profesional maupun pribadi.
            </p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#e2edff"
          fill-opacity="1"
          d="M0,128L48,138.7C96,149,192,171,288,154.7C384,139,480,85,576,80C672,75,768,117,864,160C960,203,1056,245,1152,224C1248,203,1344,117,1392,74.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- abaut end -->

    <!-- project start -->
    <section id="project">
      <div class="container p-4">
        <div class="row text-center mb-4">
          <div class="col">
            <h2>My Project</h2>
          </div>
        </div>
        <div class="row justify-content-md-center">
          <div class="col-md-4 mb-1.5 p-3">
            <div class="card" data-aos="flip-left" data-aos-duration="1500">
              <img src="img/1.jpg" class="card-img-top" alt="Project-1" />
              <div class="card-body">
                <p>
                  <strong>SO COOL!</strong><br />
                  <em
                    >"Keren itu soal sikap, bukan sekadar tampilan. Percaya diri
                    adalah kunci untuk menonjol dari yang lain!"</em
                  >
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-1.5 p-3">
            <div
              class="card"
              data-aos="flip-left"
              data-aos-duration="1500"
              data-aos-delay="100"
            >
              <img src="img/2.jpg" class="card-img-top" alt="Project-2" />
              <div class="card-body">
                <p>
                  <strong>FREE WORLD! ICE CREAM!</strong><br />
                  <em
                    >"Di dunia yang bebas, ada banyak rasa untuk dinikmati. Ayo
                    rayakan kebebasan dengan sesuatu yang manis!"</em
                  >
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-1.5 p-3">
            <div
              class="card"
              data-aos="flip-left"
              data-aos-duration="1500"
              data-aos-delay="200"
            >
              <img src="img/3.jpg" class="card-img-top" alt="Project-3" />
              <div class="card-body">
                <p>
                  <strong>Kekuatan dalam Kekacauan</strong><br />
                  <em
                    >"Dari kekacauan muncul kekuatan. Setiap lapisan
                    mencerminkan perjalanan hidup. Temukan keindahan dalam
                    ketidakpastian dan jadikan setiap tantangan sebagai
                    kesempatan untuk tumbuh."</em
                  >
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-1.5 p-3">
            <div
              class="card"
              data-aos="flip-left"
              data-aos-duration="1500"
              data-aos-delay="300"
            >
              <img src="img/4.jpg" class="card-img-top" alt="Project-4" />
              <div class="card-body">
                <p>
                  <strong>TIME TO SELL!</strong> <br />
                  <em
                    >"Waktunya mengambil keputusan besar! Kesempatan datang dan
                    pergi, yang berani adalah yang siap untuk bertindak!"</em
                  >
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-1.5 p-3">
            <div
              class="card"
              data-aos="flip-left"
              data-aos-duration="1500"
              data-aos-delay="400"
            >
              <img src="img/5.jpg" class="card-img-top" alt="Project-5" />
              <div class="card-body">
                <p>
                  <strong>IT'S PICASSO'S HAND</strong> <br />
                  <em
                    >"Kreativitas tak mengenal batas! Di setiap jari ada
                    sentuhan magis yang membawa dunia ke dalam warna dan bentuk
                    baru."</em
                  >
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-1.5 p-3">
            <div
              class="card"
              data-aos="flip-left"
              data-aos-duration="1500"
              data-aos-delay="500"
            >
              <img src="img/6.jpg" class="card-img-top" alt="Project-6" />
              <div class="card-body">
                <p>
                  <strong>GM FAM WAGMI!</strong> <br />
                  <em
                    >"Kita semua bersama-sama! Semangat kebersamaan dan harapan,
                    menuju masa depan yang lebih cerah dan penuh peluang."</em
                  >
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-1.5 p-3">
            <div
              class="card"
              data-aos="flip-left"
              data-aos-duration="1500"
              data-aos-delay="600"
            >
              <img src="img/7.jpg" class="card-img-top" alt="Project-7" />
              <div class="card-body">
                <p>
                  <strong>Kobe Bryant</strong><br /><em
                    >"Kobe Bryant mengajarkan kita bahwa kerja keras, semangat
                    juang, dan dedikasi tanpa henti adalah kunci untuk menjadi
                    legenda dan meninggalkan legasi yang abadi."</em
                  >
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-1.5 p-3">
            <div
              class="card"
              data-aos="flip-left"
              data-aos-duration="1500"
              data-aos-delay="700"
            >
              <img src="img/8.jpg" class="card-img-top" alt="Project-8" />
              <div class="card-body">
                <p>
                  <strong>Survived 2020</strong><br /><em
                    >"2020 mengajarkan kita tentang kekuatan dan ketahanan,
                    mengingatkan kita untuk terus melangkah maju dengan
                    optimisme dan harapan."</em
                  >
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,224L48,224C96,224,192,224,288,186.7C384,149,480,75,576,64C672,53,768,107,864,138.7C960,171,1056,181,1152,176C1248,171,1344,149,1392,138.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- project end -->

    <section class="text-center" id="table">
      <h1 class="mb-4">Data Table</h1>
      <table id="example" class="display">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Posisi</th>
            <th>Kantor</th>
            <th>Umur</th>
            <th>Tanggal Mulai</th>
            <th>Gaji</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>NOVITA SARI CAROLIN BR GINTING</td>
            <td>HR Specialist</td>
            <td>Medan</td>
            <td>29</td>
            <td>2020-02-11</td>
            <td>$60,000</td>
          </tr>
          <tr>
            <td>AHMAD REFFI</td>
            <td>Finance Analyst</td>
            <td>Jakarta</td>
            <td>32</td>
            <td>2018-05-23</td>
            <td>$75,000</td>
          </tr>
          <tr>
            <td>AHMAD NASEH MUJAMAL</td>
            <td>Developer</td>
            <td>Surabaya</td>
            <td>26</td>
            <td>2019-11-01</td>
            <td>$85,000</td>
          </tr>
          <tr>
            <td>WAHYU ALDI ROZAKI</td>
            <td>Project Manager</td>
            <td>Bandung</td>
            <td>37</td>
            <td>2015-04-20</td>
            <td>$120,000</td>
          </tr>
          <tr>
            <td>MIRANDA OKTAVIA SIAGIAN</td>
            <td>Marketing Specialist</td>
            <td>Bali</td>
            <td>28</td>
            <td>2021-08-15</td>
            <td>$67,500</td>
          </tr>
          <tr>
            <td>MIDORI EIDELWEIS PUTRI RINJANI</td>
            <td>Product Designer</td>
            <td>Jakarta</td>
            <td>30</td>
            <td>2017-09-10</td>
            <td>$95,000</td>
          </tr>
          <tr>
            <td>BAGUS TRI ARDIAWAN</td>
            <td>Support Engineer</td>
            <td>Malang</td>
            <td>34</td>
            <td>2016-03-29</td>
            <td>$80,000</td>
          </tr>
          <tr>
            <td>WATMAH</td>
            <td>Quality Assurance</td>
            <td>Bogor</td>
            <td>41</td>
            <td>2012-12-02</td>
            <td>$110,000</td>
          </tr>
          <tr>
            <td>DELSA PRAMUDITIA</td>
            <td>Customer Service</td>
            <td>Makassar</td>
            <td>27</td>
            <td>2020-10-22</td>
            <td>$55,000</td>
          </tr>
          <tr>
            <td>M ILHAM FIRDAUS</td>
            <td>IT Support</td>
            <td>Yogyakarta</td>
            <td>33</td>
            <td>2018-05-10</td>
            <td>$65,000</td>
          </tr>
          <tr>
            <td>ARYA PUTRA PRATAMA</td>
            <td>Business Analyst</td>
            <td>Bandung</td>
            <td>36</td>
            <td>2016-06-18</td>
            <td>$98,000</td>
          </tr>
          <tr>
            <td>ASEP JELPA NASUTION</td>
            <td>Data Scientist</td>
            <td>Jakarta</td>
            <td>39</td>
            <td>2013-07-05</td>
            <td>$150,000</td>
          </tr>
          <tr>
            <td>BRIAN RANDA SEMBIRING</td>
            <td>Content Writer</td>
            <td>Medan</td>
            <td>25</td>
            <td>2021-01-15</td>
            <td>$50,000</td>
          </tr>
          <tr>
            <td>NIKEN AYU RISTIANI</td>
            <td>Graphic Designer</td>
            <td>Semarang</td>
            <td>29</td>
            <td>2019-03-25</td>
            <td>$70,000</td>
          </tr>
          <tr>
            <td>MOCH.ALWI</td>
            <td>Product Manager</td>
            <td>Surabaya</td>
            <td>35</td>
            <td>2014-11-22</td>
            <td>$130,000</td>
          </tr>
          <tr>
            <td>HANUM SALSABILA FASYA</td>
            <td>HR Assistant</td>
            <td>Bali</td>
            <td>27</td>
            <td>2020-06-30</td>
            <td>$58,000</td>
          </tr>
          <tr>
            <td>REZA FADLILLAH ARDI</td>
            <td>Logistics Coordinator</td>
            <td>Jakarta</td>
            <td>34</td>
            <td>2015-09-15</td>
            <td>$88,000</td>
          </tr>
          <tr>
            <td>MUHAMMAD RIZKI MUSTHOFA</td>
            <td>Operations Manager</td>
            <td>Bogor</td>
            <td>40</td>
            <td>2011-10-20</td>
            <td>$145,000</td>
          </tr>
          <tr>
            <td>AHMAD SAIFUDIN SYUHRI</td>
            <td>Senior Developer</td>
            <td>Yogyakarta</td>
            <td>38</td>
            <td>2013-08-11</td>
            <td>$115,000</td>
          </tr>
          <tr>
            <td>MUCHAMMAD FAZRI KURNIAWAN</td>
            <td>Security Engineer</td>
            <td>Malang</td>
            <td>33</td>
            <td>2017-07-19</td>
            <td>$90,000</td>
          </tr>
          <tr>
            <td>MUHAMAD AGIL MUHYI</td>
            <td>Data Analyst</td>
            <td>Jakarta</td>
            <td>31</td>
            <td>2019-04-08</td>
            <td>$77,000</td>
          </tr>
        </tbody>
      </table>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#e2edff"
          fill-opacity="1"
          d="M0,128L48,138.7C96,149,192,171,288,154.7C384,139,480,85,576,80C672,75,768,117,864,160C960,203,1056,245,1152,224C1248,203,1344,117,1392,74.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>

    <!-- contact start-->
    <section id="contact" class="jumbotron">
      <div class="container">
        <div class="row text-center mb-4">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div
              class="alert alert-success alert-dismissible fade show d-none my-alert"
              role="alert"
            >
              <strong>Terimakasih!</strong> Pesan anda sudah terkirim.
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert"
                aria-label="Close"
              ></button>
            </div>
            <form name="portfolio-contact-form">
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  aria-describedby="name"
                  name="nama"
                />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  aria-describedby="email"
                  name="email"
                />
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea
                  class="form-control"
                  id="pesan"
                  rows="3"
                  name="pesan"
                ></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-kirim">
                Kirim
              </button>
              <button
                class="btn btn-primary d-none btn-loading"
                type="button"
                disabled
              >
                <span
                  class="spinner-border spinner-border-sm"
                  role="status"
                  aria-hidden="true"
                ></span>
                Loading...
              </button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#0d6efd"
          fill-opacity="1"
          d="M0,160L34.3,149.3C68.6,139,137,117,206,133.3C274.3,149,343,203,411,218.7C480,235,549,213,617,202.7C685.7,192,754,192,823,165.3C891.4,139,960,85,1029,106.7C1097.1,128,1166,224,1234,245.3C1302.9,267,1371,213,1406,186.7L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- contact end -->

    <!-- footer start -->
    <footer class="bg-primary text-white text-center pb-4">
      <p>
        Created with love by
        <a
          href="https://www.instagram.com/muhammad_ilhmf/"
          class="text-white fw-bold text-decoration-none"
          >M Ilham Firdaus</a
        >
      </p>
      <a href="https://wa.me/6283127079137" class="text-white p-2"
        ><i class="bi bi-whatsapp"></i
      ></a>
      <a href="https://www.instagram.com/muhammad_ilhmf/" class="text-white p-2"
        ><i class="bi bi-instagram"></i
      ></a>
      <a
        href="https://web.facebook.com/ilham.firdaus.549436"
        class="text-white p-2"
        ><i class="bi bi-facebook"></i
      ></a>
      <a href="https://twitter.com/muhammad_ilhmf" class="text-white p-2"
        ><i class="bi bi-twitter"></i
      ></a>
    </footer>
    <!-- footer end -->

    <!-- script boostrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>

    <!-- script aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 1000,
      });
    </script>

    <!-- Data Table -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

    <!-- script  -->
    <script>
      $(document).ready(function () {
        $("#example").DataTable({
          paging: true, // Mengaktifkan pagination
          searching: true, // Mengaktifkan pencarian
          ordering: true, // Mengaktifkan penyortiran
          pageLength: 7, // Menentukan jumlah baris per halaman
          lengthMenu: [5, 10, 20, 50], // Pilihan jumlah baris per halaman
          dom: "Bfrtip",
          buttons: ["copy", "csv", "excel", "pdf", "print"],
        });
      });

      document.addEventListener("DOMContentLoaded", () => {
        const rows = document.querySelectorAll("table tr");

        rows.forEach((row) => {
          const nameCell = row.cells[0];
          if (nameCell) {
            nameCell.textContent = nameCell.textContent
              .toLowerCase()
              .replace(/\b\w/g, (char) => char.toUpperCase());
          }
        });
      });

      const scriptURL =
        "https://script.google.com/macros/s/AKfycbx5QvgS1TxrTlS5bYjxGHqYviShDtJ3hIud---NRcLaBq6b4xOiwglFdAmQ5fDge4pg4A/exec";
      const form = document.forms["portfolio-contact-form"];
      const btnKirim = document.querySelector(".btn-kirim");
      const btnLoading = document.querySelector(".btn-loading");
      const myAlert = document.querySelector(".my-alert");

      form.addEventListener("submit", (e) => {
        e.preventDefault();
        // ketika tombol kirim di click
        // tampilkan tombol loading, hilangkan tombol kirim
        btnKirim.classList.toggle("d-none");
        btnLoading.classList.toggle("d-none");
        fetch(scriptURL, { method: "POST", body: new FormData(form) })
          .then((response) => {
            // tampilkan tombol kirim, hilangkan tombol loading
            btnKirim.classList.toggle("d-none");
            btnLoading.classList.toggle("d-none");
            // tampilkan alert jika sukses
            myAlert.classList.toggle("d-none");
            console.log("Success!", response);
          })
          .catch((error) => console.error("Error!", error.message));
      });
    </script>
  </body>
</html>
