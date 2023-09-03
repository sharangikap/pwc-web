
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cambrians' Media & Broadcasting Unit" />
	<meta name="keywords" content="cmbu, best school media, best school media in sri lanka, sadbhashana, prince of wales media, pwc media, cambrians media, wales media" />
	<meta name="author" content="CMBU" />
    <title>Cambrians' Media & Broadcasting Unit</title>

   <link rel="icon" type="image/png" href="images/logo red.png">

    <link rel="stylesheet" href="css/styles.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
</head>
<body>

    <div id="all">

        <div class="cursor"></div>

    <!--loader-->
        <div id="loader">
            <span class="color">CMBU Live</span>
        </div>
    <!--loader-end-->


        <div id="breaker">
        </div>
        <div id="breaker-two">
        </div>

        <!--Main-Section-->
        <!--Navigator-fullscreen-->
        <div id="navigation-content">
            <div class="logo">
                <img src="images/logo red.png" alt="logo">
            </div>
            <div class="navigation-close">
                <span class="close-first"></span>
                <span class="close-second"></span>
            </div>
            <div class="navigation-links">
                <a href="#" data-text="HOME" id="home-link" >HOME</a>
                <a href="#" data-text="SADBHASHANA" id="portfolio-link" >SADBHASHANA</a>
                <a href="#" data-text="ABOUT" id="about-link" >ABOUT</a>
                <a href="#" data-text="CONTACT" id="contact-link" >CONTACT</a>
                <br><br><br><br>
                <a href="#" data-text="EXIT" id="goBackLink">EXIT</a>

            </div>
        </div>
        <!--Navigator-Fullscreen END-->

        <script>
        document.getElementById("goBackLink").addEventListener("click", function(event) {
            event.preventDefault(); 
            window.history.back(); 
        });
    </script>


          <!--Home Page-->
        <!--Menubar-->
        <div id="navigation-bar">
            <img src="images/logo red.png" alt="logo">
            <div class="menubar">
                <span class="first-span"></span>
                <span class="second-span"></span>
                <span class="third-span"></span>
            </div>
        </div>
        <!--Menubar End-->
          <!--Header-->
        <div id="header">
            <div id="particles"></div>
              <!--Social Media Links-->
            <div class="social-media-links">
               <a href="https://www.instagram.com/cmbulive/" target="_blank"><img src="images/instagram logo.png" class="social-media" alt="instagram-logo"></a>
                <a href="https://www.facebook.com/cambrians.media" target="_blank"><img src="images/facebook logo.png" class="social-media" alt="facebook-logo"></a>
                <a href="https://www.youtube.com/cmbulive" target="_blank"><img src="images/youtube logo.png" class="social-media" alt="linkedin-logo"></a>
            
            </div>
            <!--Social Media Links end-->
            <div class="header-content">
                <div class="header-content-box">
                <div class="secondline">Welcome to</div>
                <div class="firstline"><span class="color">Cambrians' Media </span>and Broadcasting Unit</div>
                <div class="secondline">
            <span class="txt-rotate color" data-period="1200"data-rotate='[ " Announcing", " Technical", " Motion Graphics", " Dubbing"," News"," Photography"," Documentry" ]'></span>
            <span class="slash">|</span>
        </div>
                    <div class="contact">
                <a href="Mailto:pwcmbu@gmail.com"><img src="images/mail.png" alt="email-pic" class="contactpic" target="_blank"></a>
                <a href="Tel:+94112645628"><img src="images/call.png" alt="phone-pic" class="contactpic" target="_blank"></a>
                    </div>    
            </div>
            </div>
            <!--header image-->
            <div class="header-image">
            <img src="images/home bg.jpg" alt="logo">
            </div>
            <!--header image end-->
        </div>
           <!--Header End-->
        <!--HomePage End-->
        <!--Main-Section End-->




        <!--about-->
        <div id="about">

            <!--about content-->
            <div id="about-content">
                <div class="about-header">
                    About <span class="color">Us</span>
                    <span class ="header-caption">Get to Know <span class="color"> About us.</span></span>
                </div>
                <div class="about-main">
            <div class="about-first-paragraph wow">
            <!--about description-->
               <span class="about-first-line">
                    Media Unit of 
                    <span class="color">Prince of Wales' College</span>
                     Moratuwa </span>
                     <br>
               <span class="about-second-line">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id iure sed maiores dolor provident dolorum exercitationem, doloremque fuga nobis voluptatem inventore fugiat cum suscipit aliquam. Placeat modi deleniti aspernatur labore?</span>
            </div>
            <!--about picture-->
            <div class="about-img">
                <img src="images/about.jpg" alt="about">
            </div>
            </div>
    
            </div>
            <!--services start-->
            <div id="services">
            <!--services header-->
                    <div class="services-heading wow">
                        <span class="color">CMBU</span> Categories
                    </div>
            <!--services header end-->
            <!--services content-->
                    <div class="services-content">
                           <div class="service-one service wow">
                               <div class="service-img">
                               <img src="images/announcing.png" alt="announcing">
                               </div>
                               <div class="service-description">
                                <h2>Announcing</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod quibusdam possimus</p>
                               </div>
                           </div>
                           <div class="service-one service wow">
                               <div class="service-img">
                               <img src="images/technical.png" alt="technical">
                               </div>
                               <div class="service-description">
                                <h2>Technical</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod quibusdam possimus</p>
                               </div>
                           </div>
                           <div class="service-one service wow">
                               <div class="service-img">
                               <img src="images/graphics.png" alt="graphics">
                               </div>
                               <div class="service-description">
                                <h2>Motion Graphics</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod quibusdam possimus</p>
                               </div>
                           </div>
                           <div class="service-one service wow">
                               <div class="service-img">
                               <img src="images/dubbing.png" alt="dubbing">
                               </div>
                               <div class="service-description">
                                <h2>Dubbing</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod quibusdam possimus</p>
                               </div>
                           </div>
                           <div class="service-one service wow">
                               <div class="service-img">
                               <img src="images/news.png" alt="news">
                               </div>
                               <div class="service-description">
                                <h2>News</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod quibusdam possimus</p>
                               </div>
                           </div>
                           <div class="service-two service wow">
                               <div class="service-img">
                               <img src="images/photography.png" alt="photography">
                               </div>
                               <div class="service-description">
                                <h2>Photography</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod quibusdam possimus</p>
                               </div>
                           </div>
                           <div class="service-three service wow">
                            <div class="service-img">
                               <img src="images/documentry.png" alt="documentry">
                            </div>
                            <div class="service-description">
                                <h2>Documentry</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod quibusdam possimus</p>
                            </div>
                        </div>
                    </div>
            </div>
            <!--services content end-->
            <!--services end-->
            

            
        </div>
        <!--about end-->

        <!--sadbhashana-->
        <div id="portfolio">
            <div class="portfolio-header"> <span class="color"> Sadbhashana </span>
            <span class ="header-caption"> Sri Lanka's Biggest <span class="color"> School Media Competition</span></span></div>
             <div id="portfolio-content">
                 <div class="portfolio portfolio-first">
                     <div class="portfolio-image">
                        <img src="images/portfolio-first.jpg" alt="Sadbhashana">
                     </div>
                     <div class="portfolio-text">
                         <h2>Sadhbhashana'22 - Competition</h2>
                         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad ut optio repellat cupiditate 
                             expedita eius dignissimos. Id cumque placeat minima ad laudantium suscipit voluptatem ducimus</p>
                     </div>
                 </div>
                 <div class="portfolio portfolio-second">
                    <div class="portfolio-image">
                        <img src="images/portfolio-second.jpg" alt="Sadbhashana">
                    </div>
                    <div class="portfolio-text">
                        <h2>Sadhbhashana'21 - Competition (Online)</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id cumque placeat minima ad laudantium suscipit
                             voluptatem ducimus. Id cumque placeat minima ad laudantium suscipit voluptatem ducimus</p>
                    </div>
                </div>
             
                <div class="portfolio portfolio-third">
                    <div class="portfolio-image">
                        <img src="images/portfolio-third.jpg" alt="Sadbhashana">
                    </div>
                    <div class="portfolio-text">
                        <h2>Sadhbhashana'20 - Competition (Online)</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad ut optio repellat cupiditate expedita eius dignissimos
                            .. Id cumque placeat minima ad laudantium suscipit voluptatem ducimus</p>
                   </div>
                </div>
                <div class="portfolio portfolio-fourth">
                    <div class=" portfolio-image">
                        <img src="images/portfolio-fourth.jpg" alt="Sadbhashana">
                    </div>
                    <div class="portfolio-text">
                        <h2>Sadhbhashana'19 - Competition</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad ut optio repellat cupiditate
                             expedita eius dignissimos. Id cumque placeat minima ad laudantium suscipit voluptatem ducimus</p>
                    </div>
                </div>
                <div class="portfolio portfolio-fourth">
                    <div class=" portfolio-image">
                        <img src="images/portfolio-fourth.jpg" alt="Sadbhashana">
                    </div>
                    <div class="portfolio-text">
                        <h2>Sadhbhashana'18 - Competition</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad ut optio repellat cupiditate
                             expedita eius dignissimos. Id cumque placeat minima ad laudantium suscipit voluptatem ducimus</p>
                    </div>
                </div>
                <div class="portfolio portfolio-fourth">
                    <div class=" portfolio-image">
                        <img src="images/portfolio-fourth.jpg" alt="Sadbhashana">
                    </div>
                    <div class="portfolio-text">
                        <h2>Sadhbhashana'17 - Media Day</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad ut optio repellat cupiditate
                             expedita eius dignissimos. Id cumque placeat minima ad laudantium suscipit voluptatem ducimus</p>
                   </div>
                </div>
                <div class="portfolio portfolio-fourth">
                    <div class=" portfolio-image">
                        <img src="images/portfolio-fourth.jpg" alt="Sadbhashana">
                    </div>
                    <div class="portfolio-text">
                        <h2>Sadhbhashana'17 - Competition</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad ut optio repellat cupiditate
                             expedita eius dignissimos. Id cumque placeat minima ad laudantium suscipit voluptatem ducimus</p>
            
                    </div>
                </div>
            </div>
            
             </div>
        <!--portfolio end-->
        
        <!--contact-->
     <div id="contact">
         <div class="contact-header">Contact <span class="color"> Us</span>
        <div class="contact-header-caption"> <span class="color"> Get</span> In Touch.</div></div>
        <div class="contact-content">
            <!--Contact form-->
             <div class="contact-form">

                 <form id="myForm" action="#">
                    <div class="input-line">
                        <input  id="name" type="text" placeholder="Name" class="input-name">
                        <input id="email" type="email" placeholder="Email"  class="input-name">
                    </div>
                    <input type="text" id="subject" placeholder="subject" class="input-subject">
                    <textarea id ="body" class="input-textarea" placeholder="message"></textarea>
                    <button type="button" id ="submit" value="send">Submit</button>
                 </form>
               
             </div>
            <!--Contact form-->
            <!--Contact information-->
             <div class="contact-info">
                <div class="contact-info-content">
                </div>
                <div class="contect-info-content-line">
                  <img src="./images/icon-location.png" class="icon" alt="location-icon">
                  <div class="contact-info-icon-text">
                      <h6>Address</h6>
                      <p>2AD, Galle Road, Rawathawaththa, Moratuwa</p>
                </div>
              </div>
              <div class="contect-info-content-line">
                  <img src="./images/icon-phone.png" class="icon" alt="phone-icon">
                  <div class="contact-info-icon-text">
                      <h6>Call</h6>
                      <p>0112 645 628</p>
                </div>
              </div>
              
              <div class="contect-info-content-line">
                  <img src="./images/icon-email.png" class="icon" alt="email-icon">
                  <div class="contact-info-icon-text">
                      <h6>Email</h6>
                      <p>pwcmbu@gmail.com</p>
                </div>
              </div>
                </div>
            <!--Contact information end-->
           </div>
        </div>
                   

              
     </div>
        <!--contact end-->
    </div>
    <!--all the divisions-->
    <script src="js/jquery.min.js"></script>
    <script src="js/index.js"></script>


</body>
</html>