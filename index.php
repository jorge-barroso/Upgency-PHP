<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="twitter:card" content="summary"></meta>
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@Upgency_UK" />
    <meta property="og:url" content="https://www.upgency.com/" />
    <meta property="og:title" content="Upgency" />
    <meta property="og:description" content="We are a Digital Experience company that can provide everything you need for your Digital Campaign &amp; Brand - Contact us &amp; let's make your business grow!" />
    <meta property="og:image" content="https://www.upgency.com/images/logo.png" />
    <title>Upgency</title>
    <link rel="stylesheet" type="text/css" href="/stylesheets/main.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous" async>
    <script src="/javascripts/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <!--script(src="/javascripts/stellar.min.js")-->
</head>

<body>
    <section class="parallax" id="section_1" title="Desk in Purple for the Digital Agency Company Upgency">
        <nav class="navbar navbar-expand-sm justify-content-center" id="navbar">
            <img class="navbar-brand logo" src="/images/logo.png" alt="Upgency Official Logo in Purple and White"/>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" id="first" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="second" href="#">Our Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="third" href="#">Digital Marketing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="fourth" href="#">Media</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="fifth" href="#">Contact Us</a>
                </li>
            </ul>
        </nav>
        <div class="main">
            <div class="header">
                <p class="huge altfont">UNDERSTAND</p>
                <p class="huge altfont">YOUR</p>
                <p class="huge altfont">AUDIENCE</p>
                <hr id="main-hr" />
                <p class="huge">TARGET</p>
                <p class="huge">THEIR</p>
                <p class="huge">NEEDS</p>
            </div>
            <p class="middle separate">UP YOUR GAME</p>
        </div>
    </section>
    <section id="section_2" title="Black Marketing Agency Background">
        <div class="main">
            <div class="small" id="hr">
                <hr class="hline" />
            </div>
            <div class="header">
                <p class="huge">OUR</p>
                <p class="huge">SERVICES</p>
            </div>
            <p>Our main
                <strong>digital marketing services</strong> are spread across packages that are all encompassing - plus a multitude
                of
                <strong>add-ons</strong> are available - providing you with exactly
                <strong>what you need</strong>, no more no less
                <strong>YOU ARE IN CONTROL!</strong>
            </p>
            <p>Below are examples of what you will expect as standard with
                <font class="purplefont">our basic packages</font>
                !</p>
            <div class="row">
                <div class="divtable center-flex">
                    <div class="inline">
                        <div class="large separate">
                            <hr class="sline purple" />
                        </div>
                        <p class="nomargin">DIGITAL</p><p>MARKETING</p>
                        <img class="services_img" src="/images/digital_marketing.png" alt="Illustration of a Mobile Phone Representing Google Mobile First Index"/>
                    </div>
                </div>
                <div class="divtable center-flex">
                    <div class="inline">
                        <div class="large separate">
                            <hr class="sline purple" />
                        </div>
                        <p>CREATIVITY</p>
                        <img class="services_img" src="/images/bulb.png" alt="Illustration of a Lighting Bulb Representing Ideas for a Creative Agency"/>
                    </div>
                </div>
                <div class="divtable center-flex">
                    <div class="inline">
                        <div class="large separate">
                            <hr class="sline purple" />
                        </div>
                        <p>MEDIA</p>
                        <img class="services_img" src="/images/media.png" alt="Illustration of a Photographic Camera Representing Upgency Media Services"/>
                    </div>
                </div>
                <div class="divtable center-flex">
                    <div class="inline">
                        <div class="large separate">
                            <hr class="sline purple" />
                        </div>
                        <p>EVENTS</p>
                        <img class="services_img" src="/images/ticket.png" alt="Illustration of an Event Ticket Representing Upgency Event Services"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="parallax" id="section_3" title="White Background with Computer for Digital Agency">
        <div class="main">
            <div id="services-descriptions">
                <div class="small" id="hr">
                    <hr class="hline purple" />
                </div>
                <div class="header">
                    <p class="huge altfont">DIGITAL MARKETING</p>
                </div>

                <?php
                    require_once 'lib/Mobile_Detect.php';
                    $detect = new Mobile_Detect;

                    if($detect->isMobile() || $detect->isTable())
                        readfile("templates/dm-mobile.html");
                    else
                        readfile("templates/dm-pc.html");
                ?>
                <p class="impact inline-center section_footer">- Get in touch with <font class="purplefont">Upgency</font> today and watch your business grow! -</p>
            </div>
        </div>
    </section>
    <section id="section_4" title="Grey Digital Agency Background">
        <div class="main">
            <div id="about_div">
                <div class="small" id="hr">
                    <hr class="hline purple" />
                </div>
                <div class="header">
                    <p class="huge altfont">MEDIA</p>
                </div>
                <p class="altfont medium">Other Services and add-ons!</p>
                <p class="altfont">If you label us as just another digital marketing company that <strong>only</strong> helps your current business progress,
                    you will be sadly mistaken - We’re a one stop shop, taking your concept to a marketed and physical product,
                     helping you from <br/>- Website, Business Card and Logo Design to Procurement, Organising and Promoting Events
                    for your business, band or project -</p>
                <p class="altfont">
                    We can provide from our in house professionals anything from staging and light to sound reinforcement for your event and
                    all promotional printed media and point of sale. Animated or video and edited material for websites,
                    posts and display is another of our many services, here’s just a little more!
                </p>
                <img id="media_icons" src="/images/media_icons.png" alt="Illustration of 6 Images Representing Upgency Photography. Graphic Design and Videography Services."/>
                <p class="altfont">- User Generated Video - User Generated Photography - Brand Consistency Audit - Real Time Reporting - Extra
                    Keyword Research (every 3 to 6 months recommend) - Email Marketing Campaigns - Backlink Analysis - Content
                    Analysis - Blog Posts - Link Prospecting - Influencer Outreach - Professional Filming and Video Editing
                    ( for website and YouTube use) - Photography - Jingle Recording - General Recording - Sound Reinforcement
                    - Staging - Lighting - Business Design and Printing of Promotional Material [...] the list goes on forever…
                    Just ask how can we help your business!</p>
                <div class="slideshow-container">
                    <div class="slides fade">
                        <img src="/images/slideshow/1.jpg" style="width:100%" alt="Photo of a Sound Desk during a past Upgency Event">
                    </div>
                    <div class="slides fade hidden">
                        <img src="/images/slideshow/2.jpg" style="width:100%" alt="Paul as a Sound Engineer in a Photograph of the stage at 02 brixton academy london ">
                    </div>
                    <div class="slides fade hidden">
                        <img src="/images/slideshow/3.jpg" style="width:100%" alt="Photo from the back of Paul as a Sound Engineer during a past event">
                    </div>
                    <div class="slides fade hidden">
                        <img src="/images/slideshow/4.jpg" style="width:100%" alt="Photo of Blue Stage Lighting during a past event">
                    </div>
                    <div class="slides fade hidden">
                        <img src="/images/slideshow/5.jpg" style="width:100%" alt="Photo of a Sound Desk from the Front during a past Upgency Event">
                    </div>
                    <div class="slides fade hidden">
                        <img src="/images/slideshow/6.jpg" style="width:100%" alt="Photo of Stage Lights during a past event">
                    </div>
                    <a class="prev">&#10094;</a>
                    <a class="next">&#10095;</a>
                </div>
            </div>
            <p class="impact inline-center section_footer">- Contact us now to <font class="purplefont">expand</font> your business, mind and goals! -</p>
        </div>
    </section>
    <section id="section_5" title="White Upgency Background">
        <div class="main">
            <div class="small" id="hr">
                <hr class="hline purple" />
            </div>
            <div class="header">
                <p class="huge altfont">CONTACT US!</p>
            </div>
            <div>
                <div id="contact-div">
                    <p class="altfont">
                        <strong>ASK FOR YOUR QUOTE NOW!</strong>
                    </p>
                    <p class="altfont">It is this easy to get more online exposure - or the video or logo you always dream about - or the perfect
                        event - It is up to you to up your game!</p>
                    <p class="altfont nimbus">
                        <strong><font class="purplefont">email:</font>
                            <a class="altfont" href="mailto:hello@upgency.com"> hello@upgency.com</a>
                        </strong>
                    </p>
                    <p class="altfont nimbus">
                        <strong><font class="purplefont">tel:</font>
                            <a class="altfont" href="tel:+44753540675"> (+44) 0753540675</a>
                        </strong>
                    </p>
                    <p class="altfont nimbus">
                        <strong><font class="purplefont">office:</font>
                            <a class="altfont" href="tel:+441785213302"> (+44) 01785 213302</a>
                        </strong>
                    </p>
                </div>
                <div id="form-div">
                    <form id="contact-form" action="/" method="post">
                        <div>
                            <div>
                                <input class="form-control" id="name" name="name" type="text" placeholder="Name *" required="required" />
                                <input class="form-control" id="email" name="email" type="email" placeholder="Email *" required="required" />
                            </div>
                            <input class="form-control" id="company" name="company" type="text" placeholder="Company Name" />
                            <textarea class="form-control" id="message" name="message" cols="30" rows="10" placeholder="Tell us about your needs..."></textarea>
                            <button class="btn" id="submit" type="button">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="center-flex">
        <div class="main">
            <div class="row">
                <div>
                    <div id="copyright">Copyright and rights reserved - <?= date("Y") ?> Upgency LTD &copy;</div>
                    <div id="policy"></div>
                </div>
                <div id="followus-shaper">
                    <div class="center-flex" id="followus">
                        <div id="followus-subcontainer">
                            <p>
                                <strong>FOLLOW US</strong>
                            </p>
                            <hr class="sline" id="followus-hr" />
                            <div class="row" id="media">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/Upgency/" target="_blank"><img src="/images/facebook_icon.png" alt="Facebook Social Media Icon"/></a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/Upgency_UK/" target="_blank"><img src="/images/twitter_icon.png" alt="Twitter Social Media Icon"/></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/upgency_uk/" target="_blank"><img src="/images/instagram_icon.png" alt="Instagram Social Media Icon"/></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div id="snackbar"></div>
    <script src="/javascripts/main.min.js"></script>
</body>
    <script type='application/ld+json'> 
        {
            "@context": "http://www.schema.org",
            "@type": "LocalBusiness",
            "name": "Upgency",
            "url": "https://www.upgency.com",
            "logo": "https://www.upgency.com/images/logo.png",
            "image": "https://www.upgency.com/images/logo.png",
            "description": "We are a Digital Experience company that can provide everything you need for your Digital Campaign & Brand - Contact us & let's make your business grow!",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Stafford",
                "addressCountry": "United Kingdom"
            },
            "openingHours": "Mo, Tu, We, Th, Fr 09:00-18:00",
            "contactPoint": {
                "@type": "ContactPoint",
                "contactType": "Customer Service",
                "telephone": "+44 01785213302",
                "email": "hello@upgency.com"
            }
        }
    </script>
</html>