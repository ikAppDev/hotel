<?php 
  $pageTitel = 'Home';
	include'init.php';
 ?>
<div id="carsoulid" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carsoulid" data-slide-to="0" class="active"></li>
    <li data-target="#carsoulid" data-slide-to="1"></li>
    <li data-target="#carsoulid" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
		<div class="overly"></div>
	    <img src="<?php echo $img; ?>index_1.jpg" class="d-block w-100" alt="face of the hotel">
      <div class="carousel-caption d-none d-lg-block site-blocks-cover">
       <h1 class="mb-2">Welcome To Hotel</h1>
              <h2 class="caption">Hotel &amp; Resort</h2>
              <button type="button" class="btn btn-warning"><strong> <a href="reservation.php">Reserved Now</a></strong></button>
      </div>
    </div>
    <div class="carousel-item">
    	<div class="overly"></div>
        <img src="<?php echo $img; ?>imgma.jpg" class="d-block w-100" alt="face of the hotel">
        <div class="carousel-caption d-none d-lg-block site-blocks-cover">
       
       <h1 class="mb-2">Unique Experience</h1>
              <h2 class="caption">Enjoy With Us</h2>
              <button type="button" class="btn btn-warning"><strong><a href="reservation.php">Reserved Now</a></strong></button>
      </div>
    </div>
    <div class="carousel-item">
    	<div class="overly"></div>
        <img src="<?php echo $img; ?>index_1.jpg" class="d-block w-100" alt="face of the hotel">
        <div class="carousel-caption d-none d-lg-block site-blocks-cover">
       <h1 class="mb-2">Welcome To Hotel</h1>
              <h2 class="caption">Hotel &amp; Resort</h2>
              <button type="button" class="btn btn-warning"><strong> <a href="reservation.php">Reserved Now</a></strong></button>
      </div>
    </div>
	</div>
	  <a class="carousel-control-prev" href="#carsoulid" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carsoulid" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Our Gallery </h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-6 col-lg-3">
            <a href="<?php echo $img; ?>img_1.jpg" class="image-popup img-opacity"><img src="<?php echo $img; ?>img_1.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="<?php echo $img; ?>img_7.jpg" class="image-popup img-opacity"><img src="<?php echo $img; ?>img_7.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="<?php echo $img; ?>img_3.jpg" class="image-popup img-opacity"><img src="<?php echo $img; ?>img_3.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="<?php echo $img; ?>img_4.jpg" class="image-popup img-opacity"><img src="<?php echo $img; ?>img_4.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="<?php echo $img; ?>resterant2.jpg" class="image-popup img-opacity"><img src="<?php echo $img; ?>resterant2.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="<?php echo $img; ?>resterant3.jpg" class="image-popup img-opacity"><img src="<?php echo $img; ?>resterant3.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="<?php echo $img; ?>pool1.jpg" class="image-popup img-opacity"><img src="<?php echo $img; ?>pool1.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a href="<?php echo $img; ?>pool3.jpg" class="image-popup img-opacity"><img src="<?php echo $img; ?>pool3.jpg" alt="Image" class="img-fluid"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section ">
      <div class="container ">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Hotel Features</h2>
          </div>
        </div>
        <div class="row hotel_features">
          <div class="col-sm-6 col-md-4 ">
            <div class="text-center p-4 item">
              <?php include"data/swimming-pool.svg"; ?>
              <h2 class="h5">Swimming Pool</h2>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 ">
            <div class="text-center p-4 item">
              <?php include"data/reception.svg"; ?>
              <h2 class="h5">Hotel Reception</h2>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 ">
            <div class="text-center p-4 item">
                <?php include"data/logout.svg"; ?>
              </svg>
              <h2 class="h5">Fire Exit</h2>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 ">
            <div class="text-center p-4 item">
              <?php include"data/parking.svg"; ?>
              <h2 class="h5">Car Parking</h2>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 ">
            <div class="text-center p-4 item">
              <?php include"data/wine-glass.svg"; ?>
              <h2 class="h5">cofe shop</h2>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 ">
            <div class="text-center p-4 item">
             <?php include"data/cab.svg"; ?>
              <h2 class="h5">Car Airport</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section about_description" id="about">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-5 mb-md-0">
            <div class="img-border">
              <a href="<?php echo $img; ?>vedio1.mp4" class="popup-vimeo image-play">
                <span class="icon-wrap">
                  <span class="icon icon-play">
                  </span>
                  </span>
                  <img src="<?php echo $img; ?>index_1.jpg" alt="" class="img-fluid">
              </a>
            </div>
            <img src="<?php echo $img; ?>img_1.jpg" alt="Image" class="img-fluid image-absolute">
          </div>
          <div class="col-md-5 ml-auto">
            <div class="section-heading text-left">
              <h2 class="mb-5">About Us</h2>
            </div>
            <p class="mb-5 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, nisi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit nobis magni eaque velit eum, id rem eveniet dolor possimus voluptas..</p>
            <p>
                              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               See Location
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1OppKFzPIzLVlFxuN93G2BoHKiBEmcYfs" width="460" height="480"></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </p>
          </div>
        </div>
      </div>
    </div>

<?php 
	include $tpl . 'footer.php';
  ?>