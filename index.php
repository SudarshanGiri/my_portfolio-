<?php
  if(isset($_POST['submit'])){
    $emailTo="sudarshanhang@gmail.com";
    $subject=$_POST['subject'];
    $content=$_POST['content'];
    $headers='From: '.$_POST['email'];
    mail('tttt','sdajuposad','asdijsaod','hsaohdoas');

    mail($emailTo,$subject,$content,$headers);
    if(mail($emailTo,$subject,$content,$headers)){
      echo '<div class="container alert alert-success text-center">
            Your message was sent, we will get back to you ASAP!</div>';
    }else{
      echo '<div class="container alert alert-danger text-center">
            Your message couldn\'t be sent, please try again later</div>';
    }
  }



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sudarshan Giri</title>
    <meta name="keywords" content="Sudarshan Giri, sudarshan giri, sudarshan, Sudarshan, sudarshangiri">
    <meta name="description" content="Full Stack  Developer ">
    <meta name="author" content="Sudarshan Giri">
    <meta property="og:url" content="http://sudarshangiri7.com.np/" />
    <meta property="og:image" content="./images/portfolio/mywebsite.JPG" />
    <meta property="og:description"
        content="I am a self motivated and self taught Full Stack Web Developer having true passion and Strong Interest in Website Development." />
    <link rel="shortcut icon" type="image" href="./images/logo.png">
</head>
<!--custom styles-->
<link rel="stylesheet" href="styles/style.css">
<!--animate css-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
<!---scroll animation-->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />



<body>
    <nav>
        <div class="logo">
            <div class="brand-name">SUDARSHAN</div> <img src="images/logo.png" height="40px" alt="">
        </div>
        <ul class="nav-links" id="nav">
            <li class="active"><a href="#home">Home</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#portfolio">Projects</a></li>
            <li><a href="https://drive.google.com/file/d/1v3vkzwftFW2m6VxqokwZ7Ec1bRCnNps9/view?usp=sharing"
                    target="blank">CV</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <div class="burger">
            <li></li>
            <li></li>
            <li></li>
        </div>
    </nav>

      
    <!---navbar end-->
    <section id="home">
        <div class="wallpaper">
            <div class="main_content">
                <div class="left-wrapper ">
                    <img class="animate_animated animate__fadeIn" src="images/myphoto.jpg" alt="">
                    <div class="social-media-icons animate_animated animate__zoomIn">
                        <a class="git" href="https://github.com/SudarshanGiri" target="_blank"><i class="fab fa-github"
                                aria-hidden="true"></i></a>
                        <a class="linkedin" href="https://www.linkedin.com/in/sudarshan-giri-ba453b152/"
                            target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                        <a class="fb" href="https://www.facebook.com/metalhead.killerr" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="tw" href="https://twitter.com/SudarshanGiri13" target="_blank"><i
                                class="fab fa-twitter" aria-hidden="true"></i></a>
                        <a class="insta" href="https://www.instagram.com/sudarshangiri007/" target="_blank"><i
                                class="fab fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>

                <div class="right-wrapper">
                    <div class="name animate__animated animate__fadeInDown"> <span>Hello, I'm</span>
                        Sudarshan Giri</div>
                    <div></div>
                    <div class="title animate__animated animate__fadeInDown"><a href="https://github.com/SudarshanGiri"
                            target="blank"><i class="fab fa-github animate_animated animate__bounceIn"></i></a> Full
                        Stack Developer
                    </div>
                    <div class="description animate__animated animate__fadeInUp">I`m a self motivated Full Stack Web
                        developer
                        and graphic designer having true passion and strong interest in Website Development. I have self
                        confidence, great patience and can work in team
                        with
                        positive
                        attitude. I have been doing many web development and design projects of my own. I am always
                        looking
                        for
                        improving myeself everyday.
                    </div>


                </div>


            </div>
        </div>
    </section>
    <section id="skills">
        <div class="title" data-aos="fade-right">SKILLS</div>
        <div class="line-container" data-aos="fade-left">
            <div class="line"></div>
        </div>
        <div class="skills-tab" data-aos="fade-right">
            <div class="active frontend-tab-skills">Frontend</div>
            <div class="backend-tab">Backend</div>
            <div class="others-tab">Others</div>
        </div>
        <div class="skill-box" data-aos="fade-left">

            <div class="frontend-skills">

                <div class="item">
                    <i class="fab fa-html5"></i>
                    <div class="desc">HTML5</div>

                </div>
                <div class="item">
                    <i class="fab fa-css3"></i>
                    <div class="desc">CSS3</div>

                </div>
                <div class="item">
                    <i class="fab fa-sass"></i>
                    <div class="desc">SASS /SCSS</div>

                </div>
                <div class="item">
                    <i class="fab fa-js"></i>
                    <div class="desc">Javascript</div>

                </div>
                <div class="item">
                    <i class="fab fa-react"></i>
                    <div class="desc">React</div>

                </div>
                <div class="item">
                    <i class="fab fa-bootstrap"></i>
                    <div class="desc">Bootstrap</div>

                </div>
                <div class="item">
                    <i class="fab fa-adobe"></i>
                    <div class="desc">Photoshop</div>

                </div>
                <div class="item">
                    <i class="fab fa-adobe"></i>
                    <div class="desc">Illustrator</div>

                </div>
                <div class="item">
                    <i class="fab fa-adobe"></i>
                    <div class="desc">Indesign</div>

                </div>
            </div>
            <div class="backend-skills">
                <div class="item">
                    <i class="fab fa-php"></i>
                    <div class="desc">PHP</div>

                </div>
                <div class="item">
                    <i class="fab fa-laravel"></i>
                    <div class="desc">Laravel</div>

                </div>
                <div class="item">
                    <i class="fab fa-python"></i>
                    <div class="desc">Python</div>

                </div>


                <div class="item">
                    <i class="fas fa-database"></i>
                    <div class="desc">MysQL</div>

                </div>

            </div>
            <div class="others-skills">
                <div class="item">
                    <i class="fab fa-git"></i>
                    <div class="desc">Git</div>
                </div>
                <div class="item">
                    <i class="fab fa-github"></i>
                    <div class="desc">Github</div>
                </div>
                <div class="item">
                    <i class="fab fa-wordpress"></i>
                    <div class="desc">Wordpress</div>
                </div>
                <div class="item">
                    <i class="fab fa-drupal"></i>
                    <div class="desc">Drupal</div>
                </div>


            </div>


        </div>


    </section>
    <section id="portfolio">
        <div class="portfolio-item-container">
            <div class="title" data-aos="fade-left">PROJECTS</div>
            <div class="line-container">
                <div class="line"></div>
            </div>
            <div class="projects-tab sub-title" data-aos="fade-right">
                <div class="frontend_tab active">Frontend</div>
                <div class="fullstack_tab">FullStack</div>
                <div class="graphics_design_tab">Graphics Design</div>
            </div>
            <div class="portfolio_items_wrapper">
                <div class="frontend_items_wrapper">
                    <div>
                        <div id="p3-item" class="portfolio-item" data-aos="flip-right"><img
                                src="images/portfolio/mywebsite.JPG" alt=""></div>
                        <div id="f4-item" class="portfolio-item" data-aos="flip-right"><img
                                src="images/portfolio/React-Burger-Builder.jpg" alt=""></div>
                        <div id="f2-item" class="portfolio-item" data-aos="flip-right"><img
                                src="images/portfolio/psd-to-html.JPG" alt=""></div>

                    </div>
                    <div>
                        <div id="f3-item" class="portfolio-item" data-aos="flip-right"><img
                                src="images/portfolio/mini-car-game.JPG" alt=""></div>
                    </div>


                </div>
                <div class="fullstack_items_wrapper">
                    <div>
                        <div id="p1-item" class="portfolio-item" data-aos="flip-right"><img
                                src="images/portfolio/voting.JPG" alt=""></div>
                        <div id="p2-item" class="portfolio-item" data-aos="flip-down"><img
                                src="images/portfolio/shoppingcart.JPG" alt=""></div>
                        <div id="p4-item" class="portfolio-item" data-aos="flip-up"><img src="images/portfolio/blog.JPG"
                                alt="">
                        </div>
                    </div>

                </div>
                <div class="graphics_design_items_wrapper">
                    <div>
                        <div id="p5-item" class="portfolio-item" data-aos="flip-right"><img
                                src="images/portfolio/graphics design/NEW-01.jpg" alt="">
                        </div>
                        <div id="p6-item" class="portfolio-item" data-aos="flip-down"><img
                                src="images/portfolio/graphics design/ride.jpg" alt="">
                        </div>
                        <div id="p7-item" class="portfolio-item" data-aos="flip-right"><img
                                src="images/portfolio/graphics design/usa.jpg" alt="">
                        </div>
                    </div>
                    <div>
                        <div id="p8-item" class="portfolio-item" data-aos="flip-right"><img
                                src="images/portfolio/graphics design/uk.jpg" alt="">
                        </div>
                        <div id="p9-item" class="portfolio-item" data-aos="flip-right"><img
                                src="images/portfolio/graphics design/plumbercard.jpg" alt="">
                        </div>
                        <div id="p10-item" class="portfolio-item" data-aos="flip-up"><img
                                src="images/portfolio/graphics design/colorlogo-01.jpg" alt="">
                        </div>
                    </div>
                    <div>
                        <div id="p11-item" class="portfolio-item" data-aos="flip-right"><img
                                src="images/portfolio/graphics design/known logo design-01.jpg" alt="">
                        </div>
                    </div>

                </div>
            </div>




        </div>
        <div class="modal-container ">
            <div id="p1-item-modal" class="modal">
                <div class="modal-content">
                    <header>

                        <div class="live"><a href="http://sudarshangiri7.000webhostapp.com/" target="blank">
                                LIVE</a></div>
                        <a href="https://github.com/SudarshanGiri/online_voting" target="blank"><i
                                class="fab fa-github"></i></a>

                        <div class="close-modal"> X</div>
                    </header>
                    <img src="images/portfolio/voting.JPG" alt="">
                    <div class="description">
                        <p>Online Voting System For Municipality with AES-256 CBC Encryption</p>
                        <div class="tech-used">
                            <p>Tech Used : </p>
                            <div>PHP</div>
                            <div>MySQL</div>
                        </div>
                    </div>
                </div>

            </div>
            <div id="p2-item-modal" class="modal">
                <div class="modal-content">
                    <header>
                        <div class="live"><a href="https://github.com/SudarshanGiri/shoppingcart"
                                target="_blank">LIVE</a></div>

                        <a href="https://github.com/SudarshanGiri/shoppingcart" target="blank"> <i
                                class="fab fa-github"></i>
                        </a>
                        <div class="close-modal"> X</div>
                    </header>
                    <img src="images/portfolio/shoppingcart.JPG" alt="">
                    <div class="description">
                        <p>IT Store shoppping cart Website</p>
                        <div class="tech-used">
                            <p>Tech Used : </p>
                            <div>PHP</div>
                            <div>MySQL</div>
                        </div>
                    </div>

                </div>
            </div>
            <div id="p3-item-modal" class="modal">
                <div class="modal-content">
                    <header>
                        <div class="live"><a href="http://sudarshangiri7.com.np/" target="_blank">LIVE</a></div>
                        <i class="fab fa-github"></i>
                        <div class="close-modal"> X</div>
                    </header>
                    <img src="images/portfolio/mywebsite.JPG">
                    <div class="description">
                        <p>My portfolio website</p>
                        <div class="tech-used">
                            <p>Tech Used : </p>
                            <div>HTML5</div>
                            <div>CSS3</div>
                            <div>JS</div>
                        </div>
                    </div>

                </div>
            </div>
            <div id="p4-item-modal" class="modal">
                <div class="modal-content">
                    <header>
                        <div class="live"><a href="https://github.com/SudarshanGiri/blog_website"
                                target="_blank">LIVE</a></div>
                        <a href="https://github.com/SudarshanGiri/blog_website"> <i class="fab fa-github"></i>
                        </a>
                        <div class="close-modal">X</div>
                    </header>
                    <img src="images/portfolio/blog.JPG" alt="">
                    <div class="description">
                        <p>A Blogging Site</p>
                        <div class="tech-used">
                            <p>Tech Used : </p>
                            <div>PHP</div>
                            <div>MySQL</div>
                        </div>
                    </div>

                </div>
            </div>
            <div id="f2-item-modal" class="modal">
                <div class="modal-content">
                    <header>
                        <div class="live"><a href="http://sudarshangiri.me/psd-to-html/" target="_blank">LIVE</a></div>
                        <a href="https://github.com/SudarshanGiri/blog_website"> <i class="fab fa-github"></i>
                        </a>
                        <div class="close-modal">X</div>
                    </header>
                    <img src="images/portfolio/psd-to-html.JPG" alt="">
                    <div class="description">
                        <p>Frontend PSD to HTML5</p>
                        <div class="tech-used">
                            <p>Tech Used : </p>
                            <div>HTML5</div>
                            <div>CSS3</div>
                            <div>Bootstrap</div>
                        </div>
                    </div>

                </div>
            </div>
            <div id="f3-item-modal" class="modal">
                <div class="modal-content">
                    <header>
                        <div class="live"><a href="http://sudarshangiri.me/vanilla-js-car-game/"
                                target="_blank">LIVE</a></div>
                        <a href="https://github.com/SudarshanGiri/blog_website"> <i class="fab fa-github"></i>
                        </a>
                        <div class="close-modal">X</div>
                    </header>
                    <img src="images/portfolio/mini-car-game.JPG" alt="">
                    <div class="description">
                        <p>Mini Car game using vanillaJS</p>
                        <div class="tech-used">
                            <p>Tech Used : </p>
                            <div>HTML5</div>
                            <div>CSS3</div>
                            <div>JavaScript</div>
                        </div>
                    </div>

                </div>
            </div>
            <div id="f4-item-modal" class="modal">
                <div class="modal-content">
                    <header>
                        <div class="live"><a href="http://sudarshangiri.me/React--The-Burger-Builder/"
                                target="_blank">LIVE</a></div>
                        <a href="https://github.com/SudarshanGiri/React--The-Burger-Builder"> <i
                                class="fab fa-github"></i>
                        </a>
                        <div class="close-modal">X</div>
                    </header>
                    <img src="images/portfolio/burger-builder-wide.png" alt="">
                    <div class="description">
                        <p>React Burger Builder App (Hooks, Router) </p>
                        <div class="tech-used">
                            <p>Tech Used : </p>
                            <div>React</div>
                            <div>CSS3</div>
                            <div>HTML</div>
                        </div>
                    </div>

                </div>
            </div>
            <!--graphics design modals-->
            <div id="p5-item-modal" class="modal graphics-design">
                <div class="modal-content">
                    <header>

                        <div class="close-modal">X</div>
                    </header>
                    <img src="images/portfolio/graphics design/NEW-01.jpg" alt="">


                </div>
            </div>
            <div id="p6-item-modal" class="modal graphics-design">
                <div class="modal-content">
                    <header>

                        <div class="close-modal">X</div>
                    </header>
                    <img src="images/portfolio/graphics design/ride.jpg" alt="">


                </div>
            </div>
            <div id="p7-item-modal" class="modal graphics-design">
                <div class="modal-content">
                    <header>

                        <div class="close-modal">X</div>
                    </header>
                    <img src="images/portfolio/graphics design/usa.jpg" alt="">


                </div>
            </div>
            <div id="p8-item-modal" class="modal graphics-design">
                <div class="modal-content">
                    <header>

                        <div class="close-modal">X</div>
                    </header>
                    <img src="images/portfolio/graphics design/uk.jpg" alt="">


                </div>
            </div>
            <div id="p9-item-modal" class="modal graphics-design">
                <div class="modal-content">
                    <header>

                        <div class="close-modal">X</div>
                    </header>
                    <img src="images/portfolio/graphics design/plumbercard.jpg" alt="">


                </div>
            </div>
            <div id="p10-item-modal" class="modal graphics-design">
                <div class="modal-content">
                    <header>

                        <div class="close-modal">X</div>
                    </header>
                    <img src="images/portfolio/graphics design/colorlogo-01.jpg" alt="">


                </div>
            </div>
            <div id="p11-item-modal" class="modal graphics-design">
                <div class="modal-content">
                    <header>

                        <div class="close-modal">X</div>
                    </header>
                    <img src="images/portfolio/graphics design/known logo design-01.jpg" alt="">


                </div>
            </div>

    </section>
    <section id="contact" class="contact">
        <div class="title">CONTACT</div>
        <div class="line-container">
            <div class="line"></div>
        </div>
        
       <div class="contact-wrapper">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d220.88287618859027!2d85.31869034826786!3d27.65157254101252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe341ede73deca2b7!2sSunlight%20Tailors!5e0!3m2!1sen!2snp!4v1601739649418!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        <form action="" method="POST" autocomplete="off">
            <div class="title">Connect with me</div>
            <fieldset class='form-group'>
                <label for="email">Email Adress</label>
                <input type="email" name="email" class='form-control' id='email'>
            </fieldset>
            <fieldset class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject">
                

            </fieldset>
            <fieldset class="form-group">
                <label for="content">Message</label>
                <textarea name="content" id="content" cols="30" rows="10"></textarea>
            </fieldset>
            <button type="submit" id="submit" name='submit' class="btn btn-primary">Submit</button>
        </form>
       </div>
        <div class="email-and-social-wrapper">
            <div class="email">Email : sudarshanhang@gmail.com</div>
        <div class="social-media-icons">
            <a class="git" href="https://github.com/SudarshanGiri" target="_blank"><i class="fab fa-github"
                    aria-hidden="true"></i></a>
            <a class="linkedin" href="https://www.linkedin.com/in/sudarshan-giri-ba453b152/" target="_blank"><i
                    class="fab fa-linkedin-in" aria-hidden="true"></i></a>
            <a class="fb" href="https://www.facebook.com/metalhead.killerr" target="_blank"><i
                    class="fab fa-facebook-f"></i></a>
            <a class="tw" href="https://twitter.com/SudarshanGiri13" target="_blank"><i class="fab fa-twitter"
                    aria-hidden="true"></i></a>
            <a class="insta" href="https://www.instagram.com/sudarshangiri007/" target="_blank"><i
                    class="fab fa-instagram" aria-hidden="true"></i></a>
        </div>
        </div>

    </section>
    <footer>
        <div class="title">Copyright &copy 2020 Sudarshan Giri</div>
    </footer>
    <!--Jquery active navbar add class -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/nav.js"></script>

    <script>
        $('#nav').onePageNav({
            currentClass: 'active',
            changeHash: false,
            scrollSpeed: 350,
            scrollThreshold: 0.5,
            filter: '',
            easing: 'swing'


        });
    </script>
    <!--Jquery end-->
    <script src="js/main.js"></script>
    <script src="js/portfolio.js"></script>
    <!--scroll animation library-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!--Initializa values FOR SCROLL ANIMATION=-->
    <script>
        AOS.init({
            offset: 150,
            duration: 1000
        });
    </script>


    <!--fontawesomecdn-->
    <script src="https://kit.fontawesome.com/2231328f8b.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type='text/javascript'>
     $('form').submit(function(e){
       var error='';

       if($('#email').val()==""){
         error +="The email field is required.<br>"
       }
       if($('#subject').val()==""){
         error +="The subject field is required.<br>"
       }
       if($('#content').val()==""){
         error +="The content field is required.<br>"
       }
       if(error !=""){
         $("#error").html('<div class="alert alert-danger"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>')
         return false;
       }else{
         return true;
       }
     })
   
   
   </script>

</body>

</html>