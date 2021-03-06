<div style="background-color: #f4f4f2;">
  <div class="container">

    <nav class="navbar navbar-expand-md nav-box navbar-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon bnt-nav-bar"></span>
      </button>
             <!--  <a class="nav-link" href="#"><h5>Kasien House</h5></a> -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav navbar-bottom">
 <?php $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']; ?>
          <li class="nav-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
            <a class="nav-link nav-link-responsive <?php if($actual_link == "http://workbythai-commerce.com/kasienhouse/index.php") echo "active-menu"; else ""; ?>" href="index.php">หน้าแรก</a>
          </li>
          <li class="nav-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
            <a class="nav-link nav-link-responsive <?php if($actual_link == "http://workbythai-commerce.com/kasienhouse/about-us.php") echo "active-menu"; else ""; ?>" href="about-us.php">เกี่ยวกับเรา</a>
          </li>
          <li class="nav-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
            <a class="nav-link nav-link-responsive <?php if($actual_link == "http://workbythai-commerce.com/kasienhouse/article.php") echo "active-menu"; else ""; ?>" href="article.php">บทความ</a>
          </li>
          <li class="nav-item dropdown">
            <a  class="nav-link dropdown-toggle nav-link-responsive <?php if($actual_link == "http://workbythai-commerce.com/kasienhouse/style-home.php" || $actual_link == "http://workbythai-commerce.com/kasienhouse/home_detail.php") echo "active-menu"; else ""; ?>">
               รูปแบบบ้าน
            </a>
            <div class="dropdown-menu dropdown-content">
              <a class="dropdown-item dropdown-text" href="style-home.php"><font class="nav-text">รูปแบบบ้านทั้งหมด</font></a>
              <a class="dropdown-item dropdown-text" href="home_detail.php"><font class="nav-text">รูปแบบบ้านญี่ปุ่น</font></a>
              <a class="dropdown-item dropdown-text" href="home_detail.php"><font class="nav-text">รูปแบบบ้านอังกฤษ</font></a>
              <a class="dropdown-item dropdown-text" href="home_detail.php"><font class="nav-text">รูปแบบบ้านไทยประยุกต์</font></a>
              <a class="dropdown-item dropdown-text" href="home_detail.php"><font class="nav-text">รูปแบบโมเดิร์น</font></a>
              <a class="dropdown-item dropdown-text" href="home_detail.php"><font class="nav-text">รูปแบบบ้านโมร็อคโค</font></a>
              <a class="dropdown-item dropdown-text" href="home_detail.php"><font class="nav-text">รูปแบบอื่นๆ</font></a>
            </div>
          </li>
          <li class="nav-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700">
            <a class="nav-link nav-link-responsive <?php if($actual_link == "http://workbythai-commerce.com/kasienhouse/portfolio_all.php") echo "active-menu"; else ""; ?>" href="portfolio_all.php">ผลงานทั้งหมด</a>
          </li>
          <li class="nav-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="800">
            <a class="nav-link nav-link-responsive <?php if($actual_link == "http://workbythai-commerce.com/kasienhouse/contact.php") echo "active-menu"; else ""; ?>" href="contact.php">ติดต่อเรา</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="head-nav-logo-remaster" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="1500" data-aos-delay="1000">
      <a href="index.php">
        <div class="color-logo-text logo-responsive" style="width: 160px;">
          <img src="assets/images/logo-kasien-house02.png" width="100%">
        </div>
      </a>
</div>

</div>
