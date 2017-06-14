<!-- Modal: Hire modal -->
<div class="hireModal hidden col-lg-8 col-md-8 col-sm-10 col-xs-12">
    <div class="innerModal">
        <div class="topModal">
            <div class="iconTopAgain">

            </div>
            <div class="topText">
                <div class="topHeadText">
                    <h3>Please get in touch with me!</h3>
                </div>
                <div class="middleBody col-lg-9 col-md-9">
                    <p>I would love to hear more about you and your project so please tell me a little bit about it. Ill get in touch with you as soon as possible! Thank again.</p>
                </div>
            </div>
        </div>
        <div class="modalMainContent col-lg-10 col-md-10">
            <form action="" method="post" id="emailHireForm" onSubmit="return false;">
                <div class='sideBySide clearfix'>
                    <input type="text" class="left" id="name" placeholder="Your Name*" />
                    <input type="email" class="right" id="email" placeholder="Your email address*" />
                </div>
                <div class="sideBySide clearfix">
                    <input type='tel' class="left" id="phoneNumber" placeholder="Phone Number" />
                    <input type="url" class="right" id="website" placeholder="Website" />
                </div>
                <div class="inputBlock">
                    <textarea class="mainTextarea" id="aboutYouAndProject" placeholder="Please tell me more about yourself and your project! I'd love to hear all about it"></textarea>
                </div>
                <input type="submit" value="Lets start this journey" /> <a href="" id="closeBox">Close</a>
            </form>
        </div>
    </div>
</div><div class="overlay"></div>
<!-- Start of Fullscreen here cover -->
<div class="site-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
    <div class="site-wrapper-inner cover col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="middleBang">
            <div class="topIconFirst animated fadeInUp">
                <div class="middleIcon"></div>
            </div>
            <div class="middleInfoActions">
                <div class="middleText col-lg-8 col-md-8">
                    <p class=""><?php echo SITE_DESC; ?></p>

                    <div class="workAvailabilityBtn">
                        <button class="availHireBtn">Yes! Im available for hire</button>
                    </div>
                </div>
            </div>
            <div class="callToBtn">
                <!-- 
<div class="viewMoreOfMe">
                    <p>Learn more about what i do</p>
                    <div><i class="fa fa-fw fa-caret-down" aria-hidden="true"></i></div>
                </div>
 -->
            </div>
        </div>
    </div>
</div>

<!-- Start of expertise container -->
<div class="firstCont myExpertise jumbotron clearfix">
    <div class="mainHold">
        <div class="topHead">
            <div class="topInnerHead">
                <h3>What's my Expertise?</h3>
            </div>
            <div class="bottomInnerHead">
                <p>These are some of the cool things I do!</p>
            </div>
        </div>
        <div class="bottomExpertise col-lg-10 col-md-10">
            <div class="box col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="innerBox">
                    <div class="topIconHead">
                        <h3><i class="fa fa-code" aria-hidden="true"></i></h3>
                    </div>
                    <div class="bottomBox">
                        <div class="topHeadText">
                            <h3>Front/backend Development</h3>
                        </div>
                        <div class="bottomText">
                            <p>I'm a Full-Stack Web Developer so I do both Frontend and Backend work. I love using PHP as my backend language, and HTML, CSS, and JavaScript as my frontend languages. Im also an expert at using jQuery for faster development.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="innerBox">
                    <div class="topIconHead">
                        <h3><i class="fa fa-desktop" aria-hidden="true"></i></h3>
                    </div>
                    <div class="bottomBox">
                        <div class="topHeadText">
                            <h3>UX/UI</h3>
                        </div>
                        <div class="bottomText">
                            <p>Not only do I code but I'm also able to design websites using applications like PhotoShop, Illustrator, MockFlow, and even Sketch. I never start a website without planning out a good mockup first, plus I pay attention to detail.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="innerBox">
                    <div class="topIconHead">
                        <h3><i class="fa fa-database" aria-hidden="true"></i></h3>
                    </div>
                    <div class="bottomBox">
                        <div class="topHeadText">
                            <h3>Databases/Servers</h3>
                        </div>
                        <div class="bottomText">
                            <p>I love using Mysql for my go-to database for any website I start building. Im also experienced with quickly starting up LAMP and LEMP stacks on Linux servers. Im also good with setting up GIT systems on Linux, Mac and Windows systems.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start of my work container -->
<div class="thirdCont myWork jumbotron clearfix" id="">
    <div class="mainHold col-lg-8 col-md-8">
        <div class="topHead">
            <div class="topInnerHead">
                <h3>My work</h3>
            </div>
            <div class="bottomInnerHead">
                <p>A few things i've done</p>
            </div>
        </div>
        <div class="bottomWork">
            <div class="mainBox lefty">
                <div class="initialBigPicture">
                    <img class="pictureHold" src="<?php echo IMAGES; ?>portfolio/jameslatten.me/jameslatten_me_one.png"/>
                </div>
                <div class="infoForProject">
                    <div class="topHead">
                        <a href="http://jameslatten.me/index"><h3>Jameslatten</h3></a>
                        <h4 class="type"><i class="fa fa-circle" aria-hidden="true"></i> UX/UI Design, Custom Website</h4>
                    </div>
                    <div class="bottomDescription">
                        <p>This is my portfolio website that shows who I am and what I do! I custom built the design and backend of this.</p>
                    </div>
                </div>
            </div>
            <div class="mainBox righty">
                <div class="initialBigPicture">
                    <img class="pictureHold" src="<?php echo IMAGES; ?>portfolio/blog.jameslatten.me/blog_jameslatten_me_one.png"/>
                </div>
                <div class="infoForProject">
                    <div class="topHead">
                        <a href="http://blog.jameslatten.me/"><h3>Jays Tech World</h3></a>
                        <h4 class="type"><i class="fa fa-circle" aria-hidden="true"></i> UX/UI Design, Custom Design, Custom WordPress theme</h4>
                    </div>
                    <div class="bottomDescription">
                        <p>This is my new blog where I post things about technology and Web Development! Also I love poetry so of course I post a lot of quotes and poetry as well.</p>
                    </div>
                </div>
            </div>
            <div class="mainBox lefty">
                <div class="initialBigPicture">
                    <img class="pictureHold" src="<?php echo IMAGES; ?>portfolio/sitelyftstudios.com/sitelyft_one.png"/>
                </div>
                <div class="infoForProject">
                    <div class="topHead">
                        <a href="http://sitelyftstudios.com/"><h3>Sitelyft Studios</h3></a>
                        <h4 class="type"><i class="fa fa-circle" aria-hidden="true"></i> UX/UI Design, Custom Website</h4>
                    </div>
                    <div class="bottomDescription">
                        <p>Sitelyft Studios is a Web Development team that specializes in making Websites. I completed this website all by myself and had it up and launched in two days.</p>
                    </div>
                </div>
            </div>
            <div class="mainBox righty">
                <div class="initialBigPicture">
                    <img class="pictureHold" src="<?php echo IMAGES; ?>invoicer.png"/>
                </div>
                <div class="infoForProject">
                    <div class="topHead">
                        <a href="http://getinvoicer.com/"><h3>Invoicer</h3></a>
                        <h4 class="type"><i class="fa fa-circle" aria-hidden="true"></i> PSD to HTML, Custom WordPress Theme</h4>
                    </div>
                    <div class="bottomDescription">
                        <p>I custom made the entire landing page for the WordPress theme and also implemented it inside of WordPress. It was a tough PSD to HTML project but I was able to finish it within a few hours!</p>
                    </div>
                </div>
            </div>
            <div class="mainBox lefty">
                <div class="initialBigPicture b">
                    <img class="pictureHold" src="<?php echo IMAGES; ?>frindse.jpeg"/>
                </div>
                <div class="infoForProject">
                    <div class="topHead">
                        <h3>Frindse</h3>
                        <h4 class="type"><i class="fa fa-circle" aria-hidden="true"></i> PSD to HTML, UX/UI Design, Custom Website</h4>
                    </div>
                    <div class="bottomDescription">
                        <p>Frindse is a upcoming social network that I'm currently developing! Its built on a custom framework that I personally created myself.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start of my hobbies section -->
<div class="fourthCont myHobbies jumbotron clearfix" id="">
    <div class="mainHold col-lg-8 col-md-8">
        <div class="topHead">
            <div class="topInnerHead">
                <h3>My Hobbies</h3>
            </div>
            <div class="bottomInnerHead">
                <p>My main hobby is ready, and writing but mostly reading. I love reading manga books mostly because they appeal to me more! I also read poetry as we'll, sometimes I love to sit back and read all day. Ive listed some of my favorite manga series below, check them out.</p>
            </div>
        </div>
        <div class="bottomMyHobbies">
            <!-- First row -->
            <div class="row">
                <div class="hobbyBox col-lg-4 col-md-4">
                    <div class="innerBox">
                        <div class="topCont">
                            <div class="innerTopImageHold" style="background: url(https://images-na.ssl-images-amazon.com/images/I/81YUL9vvArL.jpg);background-size: cover;"></div>
                        </div>
                        <div class="bottomMain">
                            <div class="topBottomMain">
                                <h3>Neon Genesis: Evangelion</h3>
                            </div>
                            <div class="bottomBottomMain">
                                <div class="bottomBtn">
                                    <a href="http://amzn.to/2nQwWzT">Check it out!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hobbyBox col-lg-4 col-md-4">
                    <div class="innerBox">
                        <div class="topCont">
                            <div class="innerTopImageHold" style="background: url(https://images-na.ssl-images-amazon.com/images/I/81C79-6dNxL.jpg);background-size: cover;"></div>
                        </div>
                        <div class="bottomMain">
                            <div class="topBottomMain">
                                <h3>One Punch Man</h3>
                            </div>
                            <div class="bottomBottomMain">
                                <div class="bottomBtn">
                                    <a href="http://amzn.to/2poAypQ">Check it out!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hobbyBox col-lg-4 col-md-4">
                    <div class="innerBox">
                        <div class="topCont">
                            <div class="innerTopImageHold" style="background: url(https://images-na.ssl-images-amazon.com/images/I/51BlwJ2AGFL.jpg);background-position:center;background-size: cover;"></div>
                        </div>
                        <div class="bottomMain">
                            <div class="topBottomMain">
                                <h3>Mobile Suit Gundam</h3>
                            </div>
                            <div class="bottomBottomMain">
                                <div class="bottomBtn">
                                    <a href="http://amzn.to/2ozs92T">Check it out!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second row -->
            <div class="row">
                <div class="hobbyBox col-lg-4 col-md-4">
                    <div class="innerBox">
                        <div class="topCont">
                            <div class="innerTopImageHold" style="background: url(https://images-na.ssl-images-amazon.com/images/I/815xJbtOVfL.jpg);background-position:center;background-size: cover;"></div>
                        </div>
                        <div class="bottomMain">
                            <div class="topBottomMain">
                                <h3>Monster</h3>
                            </div>
                            <div class="bottomBottomMain">
                                <div class="bottomBtn">
                                    <a href="http://amzn.to/2oCR2MC">Check it out!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hobbyBox col-lg-4 col-md-4">
                    <div class="innerBox">
                        <div class="topCont">
                            <div class="innerTopImageHold" style="background: url(https://images-na.ssl-images-amazon.com/images/I/51pkyVfx1iL.jpg);background-position:center;background-size: cover;"></div>
                        </div>
                        <div class="bottomMain">
                            <div class="topBottomMain">
                                <h3>Akira</h3>
                            </div>
                            <div class="bottomBottomMain">
                                <div class="bottomBtn">
                                    <a href="http://amzn.to/2nQFcQe">Check it out!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hobbyBox col-lg-4 col-md-4">
                    <div class="innerBox">
                        <div class="topCont">
                            <div class="innerTopImageHold" style="background-position: center; background: url(https://images-na.ssl-images-amazon.com/images/I/41Af4JnmS8L.jpg);background-size: cover;"></div>
                        </div>
                        <div class="bottomMain">
                            <div class="topBottomMain">
                                <h3>Milk and Honey</h3>
                            </div>
                            <div class="bottomBottomMain">
                                <div class="bottomBtn">
                                    <a href="http://amzn.to/2p6AIFE">Check it out!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start of Available for hire cont -->
<div class="fifthCont availHire jumbotron clearfix" id="availHire">
    <div class="mainHold col-lg-8 col-md-8">
        <div class="topHead">
            <div class="topInnerHead">
                <h3>Want to work together??</h3>
            </div>
            <div class="bottomInnerHead">
                <p>Im open to taking on new projects and would love to talk about yours! Please tell me a little bit about it</p>
            </div>
        </div>
        <div class="bottomAskForHire">
            <button class="startHireModal">Lets get started</button>
        </div>
    </div>
</div>

<!-- Start of footer -->
<div class="sixthCont footerMain jumbotron clearfix" id="">
    <div class="mainHold col-lg-8 col-md-8">
        <div class="topHead">
            <div class="topInnerHead">
                <div class="footerIcon"></div>
            </div>
            <div class="bottomInnerHead">
                <p>Created & Designed by me &copy; 2017.</p>
            </div>
        </div>
        <div class="socialMedia">
            <ul>
                <li><a href="https://twitter.com/jay_dev17"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.linkedin.com/in/james-latten-36486799/"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://github.com/jamesl1500"><i class="fa fa-github"></i></a></li>
            </ul>
        </div>
    </div>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- jameslatten -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-4631696789933007"
         data-ad-slot="1038253972"
         data-ad-format="auto"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>