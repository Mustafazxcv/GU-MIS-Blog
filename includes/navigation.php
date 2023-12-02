<?php include 'includes/db.php'; ?>
<?php
$query = "select * from about";
$result = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($result)) {
  $facebook             = $row["facebook"];
  $twitter              = $row["twitter"];
  $instagram            = $row["instagram"];
  $youtube              = $row["youtube"];
}
?>
<body class="hero-anime">
    <div class="navigation-wrap bg-light start-header start-style">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.php">GU-MIS</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto py-4 py-md-0">
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="index.php">Ana Sayfa</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="contact.php">İletişim</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="update.php">Güncellemeler</a>
                                </li>
                                <?php
                                if (isset($_SESSION['kadi'])) {
                                    // Kullanıcı giriş yapmışsa, kullanıcı adını göster ve çıkış yap bağlantısını ekle
									echo '<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">';
                                    echo '<a class="nav-link" href="#">' . $_SESSION['kadi'] . '</a>';
                                    echo '</li>';
									echo '<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">';
                                    echo '<a class="nav-link" href="cikisyap.php">Çıkış Yap</a>';
                                    echo '</li>';
                                } else {
                                    // Kullanıcı giriş yapmamışsa, "Giriş Yap" ve "Kayıt Ol" bağlantılarını göster
                                    echo '<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">';
                                    echo '<a class="nav-link" href="kayitol.php">Kayıt Ol</a>';
                                    echo '</li>';
                                    echo '<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">';
                                    echo '<a class="nav-link" href="girisyap.php">Giriş Yap</a>';
                                    echo '</li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</body>
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=devanagari,latin-ext');

.navbar-brand {
    font-weight: bold;
    color: purple;
}


.start-header {
	opacity: 1;
	transform: translateY(0);
	padding: 20px 0;
	box-shadow: 0 10px 30px 0 rgba(138, 155, 165, 0.15);
	-webkit-transition : all 0.3s ease-out;
	transition : all 0.3s ease-out;
}
.start-header.scroll-on {
	box-shadow: 0 5px 10px 0 rgba(138, 155, 165, 0.15);
	padding: 10px 0;
	-webkit-transition : all 0.3s ease-out;
	transition : all 0.3s ease-out;
}

.navigation-wrap{
	position: fixed;
	width: 100%;
	top: 0;
	left: 0;
	z-index: 1000;
	-webkit-transition : all 0.3s ease-out;
	transition : all 0.3s ease-out;
}
.navbar{
	padding: 0;
}

.navbar-toggler {
	float: right;
	border: none;
	padding-right: 0;
}
.navbar-toggler:active,
.navbar-toggler:focus {
	outline: none;
}
.navbar-light .navbar-toggler-icon {
	width: 24px;
	height: 17px;
	background-image: none;
	position: relative;
	border-bottom: 1px solid #000;
    transition: all 300ms linear;
}
.navbar-light .navbar-toggler-icon:after, 
.navbar-light .navbar-toggler-icon:before{
	width: 24px;
	position: absolute;
	height: 1px;
	background-color: #000;
	top: 0;
	left: 0;
	content: '';
	z-index: 2;
    transition: all 300ms linear;
}
.navbar-light .navbar-toggler-icon:after{
	top: 8px;
}
.navbar-toggler[aria-expanded="true"] .navbar-toggler-icon:after {
	transform: rotate(45deg);
}
.navbar-toggler[aria-expanded="true"] .navbar-toggler-icon:before {
	transform: translateY(8px) rotate(-45deg);
}
.navbar-toggler[aria-expanded="true"] .navbar-toggler-icon {
	border-color: transparent;
}
.nav-link{
	color: #212121 !important;
	font-weight: 500;
    transition: all 200ms linear;
}
.nav-item:hover .nav-link{
	color: #8167a9 !important;
}
.nav-item.active .nav-link{
	color: #777 !important;
}
.nav-link {
	position: relative;
	padding: 5px 0 !important;
	display: inline-block;
}
.nav-item:after{
	position: absolute;
	bottom: -5px;
	left: 0;
	width: 100%;
	height: 2px;
	content: '';
	background-color: #8167a9;
	opacity: 0;
    transition: all 200ms linear;
}
.nav-item:hover:after{
	bottom: 0;
	opacity: 1;
}
.nav-item.active:hover:after{
	opacity: 0;
}
.nav-item{
	position: relative;
    transition: all 200ms linear;
}

</style>
</body>