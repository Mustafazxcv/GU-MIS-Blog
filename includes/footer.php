 <?php include'includes/db.php'; ?>
 <?php
$query = "select * from about";
$result = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($result))
{
  $about_me             = $row["about_me"];
  $facebook             = $row["facebook"];
  $twitter              = $row["twitter"];
  $instagram            = $row["instagram"];
  $youtube              = $row["youtube"];
}
 ?>

  <div class="mini-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright-text">
            <p>2024 © 
              <a href="https://ybs.gumushane.edu.tr/tr/">GU-MIS</a> Copyright Developer by
              <a href="github.com/mustafazxcv">Mustafa Mete</a>
            </p>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
      </div>
    </footer>
<style>
  @import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700);



.footer-menu {
 padding-left:48px
}
.footer-menu ul li a {
 font-size:15px;
 line-height:32px;
 -webkit-transition:.3s;
 -o-transition:.3s;
 transition:.3s
}
.footer-menu ul li a:hover {
 color:#5867dd
}
.footer-menu--1 {
 width:100%
}
.footer-widget-title {
 line-height:42px;
 margin-bottom:10px;
 font-size:18px
}
.mini-footer {
 background: white;
 text-align:center;
 padding:32px 0
}
.mini-footer p {
 margin:0;
 line-height:30px;
 font-size:17px;
 color:black
}
.mini-footer p a {
 color:#5867dd
}
.mini-footer p a:hover {
 color:#34bfa3
}


</style>