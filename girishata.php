

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /> <!-- Mobile Specific Meta -->

  <!-- Favicon-->
  <link rel="shortcut icon" href="images/fav2.png" />
  <!-- Author Meta -->
  <meta name="author" content="Mustafa Mete" />
  <!-- Meta Description -->
  <meta name="description" content="" />
  <!-- Meta Keyword -->
  <meta name="keywords" content="" />
  <!-- meta character set -->
  <meta charset="UTF-8" />
  <!-- Site Title -->
  <title>GU-MIS Giriş Hata</title>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Playfair+Display:700,700i" rel="stylesheet" />
  <!--
			CSS
			============================================= -->
  <link rel="stylesheet" href="css/linearicons.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/nice-select.css" />
  <link rel="stylesheet" href="css/owl.carousel.css" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
  <link rel="stylesheet" href="css/themify-icons.css" />
  <link rel="stylesheet" href="css/main.css" />
</head>

<body>

  <?php include 'includes/header.php'; ?>
  <?php include 'includes/navigation.php'; ?>

  <div id="main">
    	<div class="fof">
        		<h1>Kullanıcı Adı veya Şifre Yanlış :(</h1>
    	</div>
</div>
<script>
    // Sayfayı 2 saniye sonra yönlendir
    setTimeout(function() {
      window.location.href = "girisyap.php";
    }, 1300); // 2 saniye (2000 milisaniye) bekleyip yönlendirme yapar
  </script>
<style>


#main{
    display: table;
    width: 100%;
    height: 100vh;
    text-align: center;
}

.fof{
	  display: table-cell;
	  vertical-align: middle;
}

.fof h1{
	  font-size: 50px;
	  display: inline-block;
	  padding-right: 12px;
	  animation: type .5s alternate infinite;
}

@keyframes type{
	  from{box-shadow: inset -3px 0px 0px #888;}
	  to{box-shadow: inset -3px 0px 0px transparent;}
}
</style>
  <script src="js/vendor/jquery-2.2.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.tabs.min.js"></script>
  <script src="js/parallax.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
