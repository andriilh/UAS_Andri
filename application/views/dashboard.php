<body id="purple">
	<div class="navbar-fixed">
		<nav class="col-purple">
			<div class="container">
				<div class="nav-wrapper">
					<a href="<?= site_url(); ?>" class="brand-logo">AI</a>
					<a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
						<li><a href="#beranda">Beranda</a></li>
						<li><a href="#tentang">Tentang</a></li>
						<li><a href="#headlines">Berita</a></li>
						<li><a href="<?= site_url("loginmhs"); ?>">Login</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>

	<!-- side nav -->
	<ul class="sidenav" id="mobile-nav">
		<li><a href="#beranda">Beranda</a></li>
		<li><a href="#tentang">Tentang</a></li>
		<li><a href="#headlines">Berita</a></li>
		<li><a href="<?= site_url("loginmhs"); ?>">Login</a></li>
	</ul>

	<script type="text/javascript">
		$(".dropdown-button").dropdown({
			hover: false
		});
	</script>


	<!-- awal -->
	<section id="beranda" class="scrollspy">
		<div class="parallax-container">
			<div class="parallax"><img src="<?= base_url('asset/img/bg3.jpg'); ?>" style="filter: blur(5px);
  -webkit-filter: blur(5px);"></div>
			<div class="container">
				<div class="row">
					<div class="col m8">
						<h3 class="white-text text-dec txt-bold">Selamat datang!</h3>
						<p class="white-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, quibusdam
							vitae alias
							quidem fuga eveniet
							maxime voluptate temporibus at aperiam? Placeat, neque labore vel ipsa in obcaecati iste
							repellat esse.
						</p>
						<a class="waves-effect waves-light btn pink darken-1" href="<?= site_url("mahasiswa/daftar_view"); ?>">Daftar
							Sekarang</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- tentang -->
	<section class="tentang scrollspy" id="tentang">
		<div class="container">
			<div class="row">
				<h3 class="center white-text">Tentang Kami</h3>
				<div class="col m6 light">
					<h4 class="white-text">Sejarah Kampus</h4>
					<p class="white-text">Sekolah Tinggi Teknologi Bandung atau disingkat STTB/STT BAndung resmi berdiri
						pada tanggal 05 Oktober 1991 dengan Nomor SK Dirjen DIKTI No: 197/DIKTI/Kep/1992. Saat itu
						jurusan yang dibuka adalah Teknik Industri jenjang S1 yang beraktifitas di kampus STTB di Jalan
						Kartini No. 10 Bandung Jawa Barat. Meskipun usia STTB baru dua puluh empat tahun, akan tetapi
						Jurusan Teknik Industri STT Bandung ini memiliki sejarah yang cukup panjang di bidang pendidikan
						dan ilmu teknik industri di Indonesia khususnya di Jawa Barat.Evaluasi terus dilakukan tim
						manajemen STTB dengan memperhatikan kilas balik profil jurusan teknik industri setelah lebih
						dari 24 tahun berdiri dengan memperhatikan dan bercermin terhadap aspek internal dan eksternal
						sebagai acuan bagi keberlanjutan (sustainability) pengelolaan jurusan teknik industri di masa
						yang akan datang. <a href="">Selengkapnya</a></p>
				</div>

				<div class="col m6 light">
					<h4 class="white-text">Program Studi</h4>
					<h5 class="white-text">Teknik Informatika</h5>
					<p class="white-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet possimus
						obcaecati incidunt neque ipsa voluptas, nemo officia ab cum eum veniam rerum at, asperiores
						libero tempore, ratione dolorum et suscipit. <a href="">Selengkapnya</a></p>
					<h5 class="white-text">Teknik Industri</h5>
					<p class="white-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis itaque
						aspernatur fugiat nobis, est temporibus debitis natus saepe facilis ipsa sunt ratione sit
						nostrum pariatur voluptates! Rerum quaerat inventore reprehenderit! <a href="">Selengkapnya</a>
					</p>
					<h5 class="white-text">Desain Komunikasi Visual</h5>
					<p class="white-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro illo corporis
						quas, autem similique reprehenderit excepturi dignissimos nobis! Vitae iste cum libero
						asperiores dolor nobis eum similique repellendus enim nisi. <a href="">Selengkapnya</a></p>
				</div>
			</div>
		</div>
	</section>

	<!-- login -->
	<section class="login white scrollspy" id="headlines">
		<div class="container">
			<h3 class="center">Berita</h3>
			<div class="row">
				<div class="col m4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="<?= base_url("asset/img/bg3.jpg"); ?>">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
							<p><a href="#">This is a link</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
							<p>Here is some more information about this product that is only revealed once clicked on.
							</p>
						</div>
					</div>
				</div>
				<div class="col m4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="<?= base_url("asset/img/bg2.jpg"); ?>">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
							<p><a href="#">This is a link</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
							<p>Here is some more information about this product that is only revealed once clicked on.
							</p>
						</div>
					</div>
				</div>
				<div class="col m4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="<?= base_url("asset/img/bg1.jpg"); ?>">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
							<p><a href="#">This is a link</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
							<p>Here is some more information about this product that is only revealed once clicked on.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		</div>
	</section>

	<footer class="bg-pink darken-3">
		<p class="white-text center">Made by <a href="">Andri Ilham</a> &copy; 2020</p>
	</footer>


</body>

</html>