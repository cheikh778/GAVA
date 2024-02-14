<div id="popup" class="popup">
    <div class="popup-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <p>Hi there! If you're interested in the services offered by GAVA,<br>
            you can use the contact form, or contact us via email, phone, or WhatsApp. </p>
    </div>
</div>


<footer class="ftco-footer ftco-bg-dark ftco-section">
    <a id="whatsapp-button" href="https://wa.me/+221777926676?text=Hi%20there%21%20I%20saw%20the%20services%20you%20offer%20and%20I'm%20really%20interested.%20Could%20you%20please%20get%20back%20to%20me%20as%20soon%20as%20possible%20to%20make%20my%20experience%20unforgettable%3F" target="_blank" rel="noopener noreferrer">
        <img src="{{ asset('storage/images/whatsap.png') }}" alt="WhatsApp" style="width: 100px;">
    </a>
    

    </a>
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <!-- <h2 class="ftco-heading-2"><a href="#" class="logo">Car<span>book</span></a></h2> -->
            <a class="navbar-brand" href="index.html"><img src="{{ asset("storage/images/logo3.png") }}" alt="" style="width: 190px;"></a>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <!-- <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li> -->
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-linkedin"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Information</h2>
            <ul class="list-unstyled">
              <li><a href="" class="py-2 d-block">About</a></li>
              <li><a href="" class="py-2 d-block">Services</a></li>
              <li><a href="" class="py-2 d-block">Term and Conditions</a></li>
              <li><a href="" class="py-2 d-block">Best Price Guarantee</a></li>
              <li><a href="" class="py-2 d-block">Privacy &amp; Cookies Policy</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
           <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Customer Support</h2>
            <ul class="list-unstyled">
              <li><a href="" class="py-2 d-block">FAQ</a></li>
              <li><a href="" class="py-2 d-block">Payment Option</a></li>
              <li><a href="" class="py-2 d-block">Booking Tips</a></li>
              <li><a href="" class="py-2 d-block">How it works</a></li>
              <li><a href="" class="py-2 d-block">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Keur Massar, Rufisque, Dakar, Senegal</span></li>
                  <li><a href="{{ route('contact') }}"><span class="icon icon-phone"></span><span class="text">+221777926676</span></a></li>
                  <li><a href="{{ route('contact') }}"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                </ul>
              </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
</p>
        </div>
      </div>
    </div>
  </footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#1089ff "/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#dc3545"/></svg></div>

<script>
    
function showPopup() {
    var popup = document.getElementById('popup');
    popup.style.display = 'block';
}


function closePopup() {
    var popup = document.getElementById('popup');
    popup.style.display = 'none';
}


window.onload = function() {
    showPopup();
    
    
    setTimeout(function() {
        closePopup();
    }, 8000);
};

</script>
