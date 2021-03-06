<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- My css -->
    <link rel="stylesheet" href="Style.css">
    <title>Pencegahan Covid-19</title>
</head>

<?php
	session_start(); //starts the session
	if($_SESSION['user']){ //checks if user is logged in
	}
	else{
		header("location:login.php"); // redirects if user is not logged in
	}
	$user = $_SESSION['user']; //assigns user value
	?>

<body>
    <!--Logo-->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar">Yuk Menjaga Kebersihan Bersama-Sama</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <!--ml-auto untuk margin auto ke kanan-->
                <a class="nav-item nav-link" href="Uts.html">HOME</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cara Menjaga Kesehatan
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="">Yuk Diklik</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <a class="nav-item nav-link" href="login.php">LOGIN</a>
                <a class="btn btn-primary" href="daftar.php">REGISTER</a>
            </div>
        </div>
    </nav>

    <!--JumboTron-->
    <div class="jumbotron-fluid">
        <div class="container">
            <div class="row">
                <!-- Kolom Kiri -->
                <div class="col">
                    <img class="img-fluid" src="Doctor.png" alt="">
                </div>
                <!-- Kolom Kanan -->
                <div class="col">
                    <h1 class="display-1">Pencegahan Terhadap Covid-19</h1>
                </div>
            </div>
        </div>
    </div>
    <!--Rujukan-->
    <div class="rujukan">
        <div class="row">
            <div class="col-sm">
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top1" src="Tangan.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">#Di Klik Ya!</p>
                        <a href="MencuciTangan.html" class="card-text">Cara Mencuci Tangan</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top1" src="hospital.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">#Di Klik Ya!</p>
                        <a href="Hospital.html" class="card-text">Rumah Sakit</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top1" src="bike.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">#Di Klik Ya!</p>
                        <a href="Olahraga.html" class="card-text">Olahraga Yang Benar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top1" src="Makanan.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">#Di Klik Ya!</p>
                        <a href="MakananSehat.html" class="card-text">Makanan Yang Sehat</a>
                    </div>
                </div>
            </div>
        </div>

        <!--Menghindari Covid 19-->
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    Mencegah Lebih Baik Dari Pada Mengobati
                </div>
                <div class="col-sm">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="Pasien1.png" alt="Card image cap">
                        <div class="card-body">
                            <a href="" class="card-text">Meminum Vitamin</a>
                            <p class="card-text">Setiap Hari</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="Pasien2.png" alt="Card image cap">
                        <div class="card-body">
                            <a href="" class="card-text">Social Distancing</a>
                            <p class="card-text">#DirumahSaja</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="Pasien3.png" alt="Card image cap">
                        <div class="card-body">
                            <a href="" class="card-text">Mencari Informasi</a>
                            <p class="card-text">Television</p>
                        </div>
                    </div>
                </div>
            </div>

            <!--Penjelasan Tentang Covid-19-->
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <b>Penyebaran Virus Corona</b><br>
                        Virus corona merupakan keluarga besar virus yang menyebabkan penyakit flu biasa hingga penyakit
                        yang
                        lebih parah seperti MERS dan SARS. Dilansir dari cdc.gov, virus corona dapat menyebar dari orang
                        yang terinfeksi ke orang lain melalui berbagai cara, seperti: Melalui udara dengan batuk dan
                        bersin,
                        kontak pribadi seperti menyentuh dan berjabat tangan. Menyentuh benda atau permukaan dengan
                        virus di
                        atasnya, kemudian menyentuh mulut, hidung, atau mata sebelum mencuci tangan.<br>
                        <br>
                        <b>Gejala Virus Corona</b><br>
                        Sekitar 20 persen pasien mempunyai kasus penyakit yang parah atau menjadi sakit kritis. Demam
                        menjadi gejala paling umum di antara pasien yang terpapar corona. Penelitian yang melibatkan
                        hampir
                        140 pasien di Rumah Sakit Zhongnan, Universitas Wuhan, mengidentifikasi pola khas gejala yang
                        terkait dengan virus corona Covid-19.<br>

                        Melansir dari website resmi Kementerian Kesehatan terkait gejala Novel coronavirus (2019-nCoV),
                        yaitu:<br>
                        1. Demam<br>
                        2. Batuk dan Pilek<br>
                        3. Gangguan Pernapasan<br>
                        4. Sakit Tenggorokan<br>
                        5. Letih dan lesu<br>
                        <br>
                        <b>Lakukan Langkah Pencegahan</b><br>
                        Melansir dari Kemenkes mengenai hal-hal penting yang seharusnya mulai dibiasakan sebagai bentuk
                        pencegahan virus corona atau COVID-19. Oleh karena itu, sebaiknya melakukan langkah pencegahan
                        dengan cara<br>

                        1. Sering mencuci tangan menggunakan sabun. Selain itu tambahan dari WHO, dapat pula dengan
                        disterilkan menggunakan air berbasis alkohol.<br>
                        2. Menggunakan masker ketika flu, batuk, dan pilek. Tutuplah hidung dan mulut menggunakan tisu
                        ketika bersin, lalu membuangnya dan segera cuci tangan.<br>
                        3. Mengonsumsi gizi seimbang, dengan memperbanyak sayur dan buah. Pastikan seluruh bahan mentah
                        yang
                        akan dimakan, telah dicuci bersih.<br>
                        4. Berhati-hatilah kontak dengan hewan. Segera mencuci tangan setelah bersentuhan dengan
                        binatang
                        jenis apapun.<br>
                        5. Rajin berolahraga dan istirahat yang cukup. Disiplin waktu terhadap tubuh Anda, supaya tidak
                        terlalu lelah dan tetap fit.<br>
                        6. Hindari konsumsi daging yang tidak dimasak, jika berkeinginan makan daging, harus yang
                        benar-benar matang.<br>
                        7. Apabila menderita batuk, pilek, dan sesak nafas, segeralah menuju fasilitas kesehatan<br>
                    </div>
                </div>
            </div>

            <!--Footer-->
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <div class="list-group">
                            <button type="button" class="list-group-item list-group-item-action active">
                                Support
                            </button>
                            <button type="button" class="list-group-item list-group-item-action">Legal</button>
                            <button type="button" class="list-group-item list-group-item-action">Privacy Policy</button>
                            <button type="button" class="list-group-item list-group-item-action">Terms Of Use</button>
                            <button type="button" class="list-group-item list-group-item-action">Plan Your Own</button>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action active">
                                Ways You Can Pay
                            </a>
                            <a href="#" class="list-group-item list-group-item-action"><img src="bca.png" id="fb"
                                    alt=""></a>
                            <a href="#" class="list-group-item list-group-item-action">Follow Us</a>
                            <a href="#" class="list-group-item list-group-item-action"><img src="facebook.png" id="ig"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action active">
                                Contact Us
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">Yarsi Tour</a>
                            <a href="#" class="list-group-item list-group-item-action">Cempaka Putih</a>
                            <a href="#" class="list-group-item list-group-item-action">Dki Jakarta</a>
                            <a href="#" class="list-group-item list-group-item-action">yarsitouremail@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>








            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous">
            </script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous">
            </script>
</body>

</html>