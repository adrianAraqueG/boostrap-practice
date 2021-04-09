<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knoxv1ll3 | Bootstrap 5</title>

    <link rel="stylesheet" href="css/main.css" type="text/css">

    <link rel="icon" href="img/logo2.png" type="image/png" alt="fazt icon">

    <style media="screen">
        @media (max-width: 1200px){
            .navbar .nav-item .nav-link{
                text-align: center;
                font-size: 25px;
            }
        }

        @media (min-width: 768px){
            #col-text-1{
                padding-top: 11%;
            }

            #newsletter{
                padding-bottom: 2rem;
                padding-top: 2rem;
                padding-inline-start: 8rem;
            }

            #col-btn-sub{
                justify-content: left;
            }



        }
        /* RESOLUCIÓN > 991 */
        @media (max-width: 992px){
            logo{
                display: none;
            }
        }

        /* RESOLUCION > 767px */
        @media (max-width: 767px){
            #book{
                margin-top: 40px;
            }

            #col-text-1{
                padding-top: 0px;
            }

            .container .row .col-md-4{
                padding-top: 1rem;
                padding-bottom: 1rem;
            }

            #col-btn-sub{
                justify-content: center;
            }

            #icon{
                font-size: 5rem !important;
            }

            #feature-card{
                margin-top: 2rem;
            }

            .contact-form h3{
                font-size: 3rem;
                text-align: center;
            }

            .contact-form p{
                font-size: 1rem;
                text-align: center;
            }

            
        }

    </style>

    <!-- BOOTSTRAP CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>

    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid px-5">
            <!--
          <a class="navbar-brand me-auto" href="http://localhost/master-php/proyecto-bootstrap/">
            <img src="img/logo.png" alt="Fazt Logo" title="Fazt" style="width: 40px; height: 40px; border-radius: 20px;"><span class="fst-italic me-1 fs-4 fw-bold ms-1" style="letter-spacing: 5px;">azt</span>
            
          </a>-->

          <a class="navbar-brand me-auto" href="http://localhost/master-php/proyecto-bootstrap/">
            <span class="fst-italic me-1 fs-4 fw-bold ms-1" id="letter-logo"style="letter-spacing: 5px; text-decoration: underline;">Knoxv1ll3</span>
            
          </a>
        
          <button class="navbar-toggler ms-auto collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Quien soy</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Contacto</a>
              </li>

            </ul>
          </div>

        </div>
    </nav>



    <!-- HEADER -->
    <header class="main-header">
        <div class="background-overlay text-white py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center" id="col-text-1" >
                        <h1>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum.
                        </h1>
                        <p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, pariatur!</p>
                        <a href="http://localhost/master-php/proyecto-bootstrap/" class="btn btn-outline-light btn-lg">Read more</a>
                    </div>

                    <div class="col-md-6 d-flex justify-content-center" id="book">
                        <img src="img/1984.jpg" alt="1984" id="book-img" class="img-fluid" style="width: 360px; height: 500px;">
                    </div>
                </div>
            </div>
        </div>
    </header>



    <!-- NEWSLETTER -->

    <section class="bg-dark text-white" id="newsletter">

        <div class="container">
            <div class="row">
                <div class="col-md-4 d-flex justify-content-center">
                    <input type="text" name="name" id="" class="form-control form-control-lg" placeholder="Enter your name">
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <input type="email" email="email" class="form-control form-control-lg" placeholder="Enter your email" >
                </div>
                <div class="col-md-4 d-flex" id="col-btn-sub">
                    <button class="btn btn-outline-light btn-lg" id="btn-sub">Suscribe here!</button>
                </div>
            </div>
        </div>

    </section>
    


    <!-- FEATURES -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center">

                    <div class="card" id="feature-card">
                        <div class="card-body">
                            <h3>Feature one</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <span class="fs-1" id="icon"><i class="far fa-address-card"></i></span>
                        </div>
                    </div>

                </div>
                
                <div class="col-md-3 text-center text-white" >

                    <div class="card" id="feature-card" style="background-color: #34495E;">
                        <div class="card-body">
                            <h3>Feature two</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <span class="fs-1" id="icon"><i class="fas fa-address-book"></i></span>
                        </div>
                    </div>

                </div>
                <div class="col-md-3 text-center" >

                    <div class="card" id="feature-card">
                        <div class="card-body">
                            <h3>Feature three</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <span class="fs-1" id="icon"><i class="far fa-address-card"></i></span>
                        </div>
                    </div>

                </div>
                <div class="col-md-3 text-center text-white">

                    <div class="card" id="feature-card" style="background-color: #34495E;">
                        <div class="card-body">
                            <h3>Feature four</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <span class="fs-1" id="icon"><i class="fas fa-address-book"></i></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    

    <!-- ABOUT -->
    <section class="py-2"></section>

    <section class="bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="p-3">
                    <h3>Why this product?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis nulla, aperiam quia obcaecati laboriosam libero vel praesentium doloribus tempore neque recusandae dicta, ex, facere voluptatibus soluta! Aliquid earum quod doloribus?</p>
                </div>
            </div>
        </div>
    </section>



    <!-- ACCORDION -->
    <section class="container p-5">
        <div class="accordion accordion-flush" id="accordionFlushExample">

            <div class="accordion-item">

              <h2 class="accordion-header" id="flush-headingOne">

                <button class="accordion-button collapsed text-center fs-5" style="border-top-left-radius: 8px; border-top-right-radius: 8px;" id="accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  ¿Why this product?
                </button>

              </h2>

              <div id="flush-collapseOne" class="accordion-collapse collapse text-white" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
              </div>

            </div>


            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed text-center fs-5" id="accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  ¿Frecuency Q&A?
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse text-white" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed text-center fs-5"style="border-bottom-left-radius: 8px; border-bottom-right-radius: 8px;" id="accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  ¿Why this team?
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse text-white" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
              </div>
            </div>
          </div>
    </section>



    <!-- TEAM -->
    <section class="team text-center">
        <div class="container p-5">
            <h1 class="text-white">Team</h1>
            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum in beatae similique!</p>

            <!-- MEMBERS -->

            <div class="row">

                <div class="col-lg-3">
                    <div class="card" style="margin-top: 20px;">
                        <div class="card-body">
                            <img src="img/person.png" class="img-fluid rounded-circle w-50" alt="person logo">
                            <h3>John Carter</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-3 fs-3">
                                    <a href="https://facebook.com" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </div>

                                <div class="p-3 fs-3">
                                    <a href="https://instagram.com" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>

                                <div class="p-3 fs-3">
                                    <a href="https://twitter.com" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card" style="margin-top: 20px;">
                        <div class="card-body">
                            <img src="img/person.png" class="img-fluid rounded-circle w-50" alt="person logo">
                            <h3>Joan Mir</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-3 fs-3">
                                    <a href="https://facebook.com" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </div>

                                <div class="p-3 fs-3">
                                    <a href="https://instagram.com" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>

                                <div class="p-3 fs-3">
                                    <a href="https://twitter.com" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card" style="margin-top: 20px;">
                        <div class="card-body">
                            <img src="img/person.png" class="img-fluid rounded-circle w-50" alt="person logo">
                            <h3>Bradley Smith</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-3 fs-3">
                                    <a href="https://facebook.com" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </div>

                                <div class="p-3 fs-3">
                                    <a href="https://instagram.com" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>

                                <div class="p-3 fs-3">
                                    <a href="https://twitter.com" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card" style="margin-top: 20px;">
                        <div class="card-body">
                            <img src="img/person.png" class="img-fluid rounded-circle w-50" alt="person logo">
                            <h3>Mary Jane</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-3 fs-3">
                                    <a href="https://facebook.com" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </div>

                                <div class="p-3 fs-3">
                                    <a href="https://instagram.com" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>

                                <div class="p-3 fs-3">
                                    <a href="https://twitter.com" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- CONTACT -->
    <section class="bg-light py-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 py-5">
                    <div class="contact-form">
                        <h3>Contact</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>

                    <form action="" >
                        <div class="input-group mb-3">
                            <span class="input-group-text" style="background-color: #34495E; color:white;"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="text" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                            <textarea cols="30" rows="5" style="resize: none;" class="form-control" aria-label="With textarea"></textarea>
                        </div>

                        <div class="d-flex justify-content-center ">
                            <button class="btn btn-dark btn-lg" id="submit" type="submit">
                                Send Message!
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <div class="k-logo d-flex justify-content-center">
                        <logo style="color: #34495E;text-shadow: 5px 7px 4px black;font-style: italic; font-weight: 800; font-size: 10rem; font-family: 'Helvetica'; padding-top: 7.5rem;">K</logo>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-dark">
        <div class="container p-3 text-center text-white">
            <p>Copyright &copy; Knoxv1ll3</p>
        </div>
    </footer>

    <!-- BOOTSTRAP JS -->
    <script src="https://kit.fontawesome.com/d503eb479a.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>