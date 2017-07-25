<?php include 'includes/header.php'; ?>

        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Contact</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>   
        </section>

        <section id="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="block">
                            <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Send me a message!</h2>
                            <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                                Whetever you have a buisness proposal, a project that you need to be done, or simply just want to say hello, do not hesitate to contact me!
                            </p>
                            <div class="contact-form">
                                <form id="contact-form" method="post" action="sendmail.php" role="form">
                        
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                        <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                                    </div>
                                    
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                        <input type="email" placeholder="Your Email" class="form-control" name="email" id="email" >
                                    </div>
                                    
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                        <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
                                    </div>
                                    
                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                                        <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>    
                                    </div>
                                    
                                    
                                    <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                        <input type="submit" id="contact-submit" class="btn btn-default btn-send" value="Send Message">
                                    </div>                      
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row address-details">
                    <div class="col-md-4">
                        <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                            <i class="ion-ios-home-outline"></i>
                            <h5>Galati, Romania</h5>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                            <i class="ion-ios-email-outline"></i>
                            <h5>contact@mirceanegoita.com</h5>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                            <i class="ion-ios-telephone-outline"></i>
                            <h5>+40 745 353 485</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">STILL IN DOUBT ?</h1>
                            <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">You can find more about me by viewing my resume,</br>Click the button bellow to find more about my proffesional experience and growth.</p>
                            <a href="resume.php" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Resume</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>


<?php include 'includes/footer.php'; ?>



