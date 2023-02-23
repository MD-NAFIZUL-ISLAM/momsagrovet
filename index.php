
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css?">
    <title>MOMS</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/resoinsive.css">
</head>

<body>
    <header>
        <!-- ================
               nav starts
        ==================== -->
        <nav id="main_manu" class="navbar navbar-expand-lg">
            <div class="container">
            <a class="navbar-brand logo" href="index.html"><img src="./images/moms logo.png" alt=""></a>
                <a class="brand" href="index.html"><span>MOMS</span>Agrovet Limited</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse bgcng" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto me-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.html">ABOUT US
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="career.html">CAREER
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="product.html"> PRODUCTS
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="contacts.html">GALLERY
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">CONTACT US
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- ================
            nav ends
     ==================== -->
    </header>
    <main>
    <section id="headline">
            <div class="container">
                <div class="main">
                    <h2>Products</h2>
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a
                                    href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <div id="contacts">
            <div class="container">
                <div class="main">
                    <h4>Any Kind of information Please contact us.</h4>
                    <h2>MOMS AGROVET</h2>
                    <p>150/A, North Vashantech,Cantonment Dhaka- 1206, Bangladesh.</p>
                    <p>Email: <a href="mailto:momsagrovet10@gmail.com">momsagrovet10@gmail.com</a></p>
                    <p>Facebook: <a href="#">Facebook-link</a></p>
                    <p>mobile: <a href="tel:01321232530">01321232530</a></p>
                    <h3>Fill up a Form</h3>
                    <form action="contact.php" class="contact_form" method="POST" id="contact-form-1">
                        <div class="dbl-field">
                            <div class="form-group col-lg-7 field">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" placeholder="Your name here" required>
                            </div>
                            <div class="form-group col-lg-7 field">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" id="exampleFormControlInput1"
                                    placeholder="enter your email" name="email" required>
                            </div>
                        </div>
                        <div class="dbl-field">
                            <div class="form-group col-lg-7 field">
                                <label for="exampleInputEmail1">phone</label>
                                <input id="phone" type="text" placeholder="Enter phone number" name="subject" required>
                            </div>
                        </div>
                        <div class="form-group col-lg-7 message">
                            <label for="exampleInputEmail1">Message</label>
                            <textarea id="exampleFormControlTextarea1" rows="3" placeholder="Your Message Write here" name="body"></textarea>
                        </div>
                        <div class="button-area">
                            <button class="submit" type="submit">Send message</button>
                            <span>Sending your message...</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <div class="icons">
                        <a href="https://www.facebook.com/profile.php?id=100090370996314&mibextid=LQQJ4d"><i class="fab fa-facebook"></i></a>
                            <a href="https://www.linkedin.com/in/moms-agrovet-limited-185794267"><i class="fab fa-linkedin-in"></i></a>
                            <a href="mailto:momsagrovet10@gmail.com"><i class="fas fa-envelope"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a class="whatsapp" href="https://wa.me/+8801321232530"><img src="./images/pngtree-whatsapp-icon-png-image_6315990.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="links">
                <a href="index.html">ABOUT US</a>
                    <a href="#">OUR TEAM</a>
                    <a href="product.html">PRODUCTS</a>
                    <a href="#">GALLERY</a>
                    <a href="index.php">CONTACT US</a>
                </div>
                <div class="copyrights">
                    <p><i class="fas fa-copyright"></i> MOMS AGROVET</p>
                </div>
            </div>

        </div>

    </footer>






    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/jquery-1.12.4.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!--    <form action="contact.php" method="POST">-->
<!--    <div>-->
<!--        <input type="email" placeholder="Enter your email" name="email" required />-->
<!--    </div>-->
<!--    <div>-->
<!--        <input type="text" placeholder="Message subject" name="subject" required />-->
<!--    </div>-->
<!--    <div>-->
<!--        <textarea placeholder="Your message" name="body" required></textarea>-->
<!--    </div>-->
<!--    <div>-->
<!--        <button type="submit">Send a message</button>-->
<!--    </div>-->
<!--    </form>-->
<!--</body>-->



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    
<form action="contact.php" method="POST" id="contact-form-1"  class="container">
    <h3>Contact Form</h3>
  <div class="form-group">
     
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="enter your email" name="email">
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Message Subject" name="subject">
  </div>

  <div class="form-group">
    
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your Message Write here" name="body"></textarea>
  </div>
  <div>
        <button type="submit">Send a message</button>
    </div>
</form>
</body> -->