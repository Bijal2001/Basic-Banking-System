<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/contact.js"></script>
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid d-flex">
            <img src="img/logo1.jpg" alt="" width="40" height="40" class="mx-2 d-inline-block align-text-top">
            <a class="navbar-brand" href="#">Banking system</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                
                
            </button>
           
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0  ">
                    <li class="nav-item px-3 ">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item px-3 ">
                        <a class="nav-link active" aria-current="page" href="customer.php">View customers</a>
                    </li>
                    <li class="nav-item px-3 ">
                        <a class="nav-link active" aria-current="page" href="transfer_history.php">Transaction History</a>
                    </li>
                    <li class="nav-item px-3 ">
                        <a class="nav-link active" aria-current="page" href="#card1">Services</a>
                    </li>
                    <li class="nav-item px-3 ">
                        <a class="nav-link active" aria-current="page" href="#contactus">Contact Us</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    
    <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/bg.jpg" class="d-block w-100" alt="..." height="500px" >
            <div class="carousel-caption d-none d-md-block">
             
              
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/bg1.jpg" class="d-block w-100" alt="..." height="500px" >
            <div class="carousel-caption d-none d-md-block">
              
              
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/bg2.jpg" class="d-block w-100" alt="..." height="500px">
            <div class="carousel-caption d-none d-md-block">
             
              
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
   
       
 <div class="services-section">
       
            <h1 class="section-title" id="services">What We Offer</h1>
            <div class="borderr"></div>
            <div class="services-container">
                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-user"></i>
                     </div>
                    <div class="service-title">Personal loan</div>
                    <div class="service-desc">
                    A personal loan is a type of unsecured loan that helps you meet your current financial needs.It serve as a solution for managing your travel costs or wedding expenses, as well as the expenses of medical emergency, home revolution, debt consolidation and other needs.
                    </div>
                </div>
    
                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="service-title">Home loan</div>
                    <div class="service-desc">
                    A home loan is an amount that an individual borrows from a bank or money lending company at a certain rate of interest to be paid with the EMI every month. The property is taken as a security by the money lending company for the Home Loan
                    </div>
                </div>
    
                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="service-title">Car loan</div>
                    <div class="service-desc">
                    A car loan is secured against the vehicle you intend to purchase, which means the vehicle serves as collateral for the loan. The loan is paid off in fixed installments throughout the loan. Much like a mortgage, the lender retains ownership over the asset until you make the final payment.
                    </div>
                </div>
                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <div class="service-title">Educational loan</div>
                    <div class="service-desc">
                    An education loan is a sum of money borrowed to finance post-secondary education or higher education-related expenses. Education loans are intended to cover the cost of tuition, books and supplies, and living expenses while the borrower is in the process of pursuing a degree.
                    </div>
                </div>
    
                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-business-time"></i>
                    </div>
                    <div class="service-title">Business loan</div>
                    <div class="service-desc">
                    A business loan is a kind of financing you can avail to meet the urgent needs of your growing business. Business loans allow you to usher in funds for your enterprise to expand your existing business, boost production, take your operations online, buy new machinery, and more
                    </div>
                </div>
    
                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-coins"></i>
                    </div>
                    <div class="service-title">Gold loan</div>
                    <div class="service-desc">
                    The gold loan, also referred as a loan against gold, is a secured loan that a borrower takes from a lender in lieu of gold ornaments such as gold jewellry. The loan amount sanctioned to you by lenders is generally a certain percentage of the gold’s value. You can repay it through monthly installment after which you get your gold articles back.
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="inner-width">
    
        <h3 class="section-title1" id="services">OUR SERVICES</h3>
        <div class="border1"></div>
    </div>
    <section id="card2">
<div class="container">
   <div class="card1">
       <div class="circle">
           <h2>USER</h2>
       </div>
       <div class="content">
       <p>We care about our customers, Our clients are always front of mind.
        We do the best we can to help our customers win.</p>
        <a href="customer.php">View all User</a>

       </div>
   </div> 

   <div class="card1">
       <div class="circle">
           <h2>BANK TRANSFER</h2>
       </div>
       <div class="content">
       <p>We leave you with no surprises, from reconciling your bank transactions daily through to providing cash forecasting.</p>       
        <a href="transfer_history.php">Bank Transfer</a>

       </div>
   </div> 

   <div class="card1">
       <div class="circle">
           <h2>TRANSFER HISTORY</h2>
       </div>
       <div class="content">
       <p>We provide record of all activities that occur in an account!</p>
        <a href="#">Transfer History</a>

       </div>
   </div> 
</div>
</section>
        <script type="text/javascript" src="js/vanilla-tilt.js"></script>
        <script>
            VanillaTilt.init(document.querySelectorAll(".card"), {
                max: 25,
                speed: 400,
                
            });
        </script>

<section id="contactus">
        <div class="container-fluid mt-4 mb-5 ">
            <h2 class="section_heading text-center" >
                <span>Contact Us</span>
                <div class="border2"></div>
                <span></span>
            </h2>

            <div class="container-fluid pb-4 ">
                <div class="row pt-3 " id="contact_section ">
                    <div class="col-md-6 order-md-first order-last mt-4 ">
                    
                        <div class="container-lg px-lg-5 ">
                            <form class="contact_form" onsubmit="event.preventDefault(); contactUs();"
                                autocomplete="off" method="GET">
                                <div class="row">
                                    <div class="col mb-4">
                                        <label for="name" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstname">
                                    </div>
                                    <div class="col mb-4">
                                        <label for="lastname" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastname">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="contactEmail" required />
                                </div>
                                <div class="mb-4">
                                    <label for="subject" class="form-label">Subject</label>
                                    <input type="text" class="form-control" id="contactSubject" required />
                                </div>
                                <div class="mb-4">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea name="contactMessage" class="form-control" id="contactMessage" rows="3"
                                        required></textarea>
                                </div>
                                <button type="submit" class="btn btn-secondary submit_button" >Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class=" col-md-6 order-md-last order-first mt-4 ">
                        <iframe src="
                                    https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d81706.69424506!2d72.8503359461155!3d19.071183313121875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1628575559699!5m2!1sen!2sin "class="contact_map"  allowfullscreen=" " loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <footer class="bg-light text-center text-white">
        <div class="container1 p-4 pb-0">
            <section class="mb-4">
                <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="#"
                    role="button"><i class="fab fa-facebook-f"></i></a>

                <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee;" href="#"
                    role="button"><i class="fab fa-twitter"></i></a>

                <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39;" href="#"
                    role="button"><i class="fab fa-google"></i></a>

                <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="#"
                    role="button"><i class="fab fa-instagram"></i></a>

                <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;" href="#"
                    role="button"><i class="fab fa-linkedin-in"></i></a>

                <a class="btn btn-primary btn-floating m-1" style="background-color: #333333;" href="#"
                    role="button"><i class="fab fa-github"></i></a>
            </section>
        </div>
        <div class="text-center " style="background-color: black; font-weight: 700;">
        Copyright &copy; BIJAL PATEL All rights reserved
                <div id="center-1">
                    <ul>
                          <li class="item"><a href="index.html">HOME</a></li>
                <li class="item"><a href="#services">SERVICES</a></li>
                <li class="item"><a href="#card1">LOANS</a></li>
                <li class="item"><a href="aboutus.html">ABOUT US</a></li>
                <li class="item"><a href="contact.html">CONTACT US</a></li>
    
                    </ul>
                </div>
        </div>
    </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
   
        
      
