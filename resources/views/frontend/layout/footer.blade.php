<!---------------------------- Footer Area Start --------------------------------->
<div class="footer-area">
    <div class="footer-container">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-md-30px mb-lm-30px">
                        <div class="single-wedge">
                            <h4 class="footer-herading">ABOUT US</h4>
                            <p class="text-infor">We are a team of designers and developers that create high quality HTML template</p>
                            <div class="need-help">
                                <p class="phone-info">
                                    NEED HELP?
                                    <span>
                                    {{$CompanyInformation->phone_one}} <br />
                                    {{$CompanyInformation->phone_two}}
                                            </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 mb-md-30px mb-lm-30px">
                        <div class="single-wedge">
                            <h4 class="footer-herading">Information</h4>
                            <div class="footer-links">
                                <ul>
                                    <li><a href="#">Delivery</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="#">Secure Payment</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="#">Stores</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 mb-sm-30px mb-lm-30px">
                        <div class="single-wedge">
                            <h4 class="footer-herading">CUSTOM LINKS</h4>
                            <div class="footer-links">
                                <ul>
                                    <li><a href="#">Legal Notice</a></li>
                                    <li><a href="#">Prices Drop</a></li>
                                    <li><a href="#">New Products</a></li>
                                    <li><a href="#">Best Sales</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 ">
                        <div class="single-wedge">
                            <h4 class="footer-herading">NEWSLETTER</h4>
                            <div class="subscrib-text">
                                <p>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</p>
                            </div>
                            <div id="mc_embed_signup" class="subscribe-form">
                                <form id="mc-embedded-subscribe-form" class="validate" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                    <div id="mc_embed_signup_scroll" class="mc-form">
                                        <input class="email" type="email" required="" placeholder="Enter your email here.." name="EMAIL" value="" />
                                        <div class="mc-news" aria-hidden="true" style="position: absolute; left: -5000px;">
                                            <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" />
                                        </div>
                                        <div class="clear">
                                            <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Sign Up" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="social-info">
                                <ul>
                                    <li>
                                        <a href="http://www.facebook.com/siliconvaly"><i class="icon-social-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-social-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="http://www.instagram.com/siliconvaly"><i class="icon-social-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-social-google"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-social-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <p class="copy-text"> © 2021 <strong>Siliconvaly.com</strong> Made With <i class="fa fa-heart" style="color: red;" aria-hidden="true"></i> By <a class="company-name" href="https://hasthemes.com/">
                                <strong> AKASH KUMAR BASAK</strong></a>.</p>
                    </div>
                    <div class="col-md-6 text-end">
                        <img class="payment-img" src="assets/images/icons/payment.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---------------------------------------------- Footer Area End ------------------------------------------------------->
<!-- Messenger Chat plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "102392565862557");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v17.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>