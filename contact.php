<?php 
    $pageTitel = 'Contact';
  include'init.php';
 ?>
  <form action="send_message.php" method="post">
    <div class="site-section site-section-sm ">
      <div class="container contact-form">
        <div class="row">
          <div class="col-md-12 col-lg-8 mb-5">
            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="fullname">Full Name</label>
                <input type="text" id="fullname" class="form-control" placeholder="Full Name" name="full_name">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="email">Email</label>
                <input type="email" id="email" class="form-control" placeholder="Email Address" name="m_email">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="phone">Phone</label>
                <input type="text" id="phone" class="form-control" placeholder="Phone #" 
                name="phone">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="message">Message</label> 
                <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us"
                name="message" >
                </textarea>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" value="Send Message" class="btn btn-warning pill px-4 py-2">
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-4 mb-3 contact_hotel">
              <h3 class="h5 text-black mb-3">Contact Info :</h3>
              <p class="mb-0 font-weight-bold">Adress</p>
              <p class="mb-4">36   Emdjaz-Edchiche Skikda, ALGERIA</p>
              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4">+1 234 5678 910</p>
              <p class="mb-0 font-weight-bold">Email Adress</p>
              <p class="mb-4">hotelemail@hotel.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
<?php 
  include $tpl . 'footer.php';
  ?>