<!DOCTYPE html>
<html lang="en">
<head>
  <title>Simple landing page</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="back/vendors/owl-carousel/css/owl.carousel.min.css">
  <link rel="stylesheet" href="back/vendors/owl-carousel/css/owl.theme.default.css">
  <link rel="stylesheet" href="back/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="back/vendors/aos/css/aos.css">
  <link rel="stylesheet" href="css/style.min.css">
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
  <header id="header-section">
    <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
    <div class="container">
      <div class="navbar-brand-wrapper d-flex w-100">
        <img src="/back/vendors/images/logo-landing.png" alt="dashboard" class="dark-logo" />
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="mdi mdi-menu navbar-toggler-icon"></span>
        </button> 
      </div>
      <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
        <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
          <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
            <div class="navbar-collapse-logo">
              <img src="/back/vendors/images/logo-landing.png" alt="dashboard" class="dark-logo" />
            </div>
            <button class="navbar-toggler close-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
            </button>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="#header-section">Home <span class="sr-only">(current)</span></a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="dashboard">About</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="#digital-marketing-section">Blog</a>  
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#feedback-section">Testimonials</a>
          </li> --}}
          {{-- <li class="nav-item btn-contact-us pl-4 pl-lg-0">
            <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Contact Us</button>
          </li> --}}
        </ul>
      </div>
    </div> 
    </nav>   
  </header>
  <div class="banner" >
    <div class="container">
      <h1 class="font-weight-semibold">Rekap Akademik <br>SMK Wikrama </h1>
      <h6 class="font-weight-normal text-muted pb-3">Web-based Data Recap Information System which functions to <br> manage academic data summarized from the academic system
      </h6>
      <div>
        {{-- <button class="btn btn-opacity-light mr-1">Get started</button> --}}
       <a href="halaman-login"> <button class="btn btn-opacity-success ml-1"><b>Login</b></button></a>
      </div>
      <br>
      <img src="back/vendors/images/Group171.svg" alt="" class="img-fluid">
    </div>
  </div>
  <div class="content-wrapper">
    <div class="container">
      <section class="features-overview" id="features-section" >
        <div class="content-header">
          <h2>How does it works</h2>
          <h6 class="section-subtitle text-muted">One theme that serves as an easy-to-use operational toolkit<br>that meets customer's needs.</h6>
        </div>
        <div class="d-md-flex justify-content-between">
          <div class="grid-margin d-flex justify-content-start">
            <div class="features-width">
              <img src="back/vendors/images/Group12.svg" alt="" class="img-icons">
              <h5 class="py-3">Speed<br>Optimisation</h5>
              <p class="text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
              <a href="#"><p class="readmore-link">Readmore</p></a>  
            </div>
          </div>
          <div class="grid-margin d-flex justify-content-center">
            <div class="features-width">
              <img src="back/vendors/images/Group7.svg" alt="" class="img-icons">
              <h5 class="py-3">SEO and<br>Backlinks</h5>
              <p class="text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
              <a href="#"><p class="readmore-link">Readmore</p></a>
            </div>
          </div>
          <div class="grid-margin d-flex justify-content-end">
            <div class="features-width">
              <img src="back/vendors/images/Group5.svg" alt="" class="img-icons">
              <h5 class="py-3">Content<br>Marketing</h5>
              <p class="text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
              <a href="#"><p class="readmore-link">Readmore</p></a>
            </div>
          </div>
        </div>
      </section>     
          
        
      <section class="customer-feedback" id="feedback-section">
        <div class="row">
          <div class="col-12 text-center pb-5">
            <h2>What our customers have to say</h2>
            <h6 class="section-subtitle text-muted m-0">Lorem ipsum dolor sit amet, tincidunt vestibulum.</h6>
          </div>
          <div class="owl-carousel owl-theme grid-margin">
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="images/face2.jpg" width="89" height="89" alt="" class="img-customer">
                    <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Tony Martinez</h6>
                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="images/face3.jpg" width="89" height="89" alt="" class="img-customer">
                    <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Sophia Armstrong</h6>
                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="images/face20.jpg" width="89" height="89" alt="" class="img-customer">
                    <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Cody Lambert</h6>
                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="images/face15.jpg" width="89" height="89" alt="" class="img-customer">
                    <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Cody Lambert</h6>
                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="images/face16.jpg" width="89" height="89" alt="" class="img-customer">
                    <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Cody Lambert</h6>
                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="images/face1.jpg" width="89" height="89" alt="" class="img-customer">
                    <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Tony Martinez</h6>
                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="images/face2.jpg" width="89" height="89" alt="" class="img-customer">
                    <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Tony Martinez</h6>
                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="images/face3.jpg" width="89" height="89" alt="" class="img-customer">
                    <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Sophia Armstrong</h6>
                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="images/face20.jpg" width="89" height="89" alt="" class="img-customer">
                    <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Cody Lambert</h6>
                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </section>
      <section class="contact-us" id="contact-section">
        <div class="contact-us-bgimage grid-margin" >
          <div class="pb-4">
            <h4 class="px-3 px-md-0 m-0" data-aos="fade-down">Do you have any projects?</h4>
            <h4 class="pt-1" data-aos="fade-down">Contact us</h4>
          </div>
          <div data-aos="fade-up">
            <button class="btn btn-rounded btn-outline-danger">Contact us</button>
          </div>          
        </div>
      </section>
      <section class="contact-details" id="contact-details-section">
        <div class="row text-center text-md-left">
          <div class="col-12 col-md-6 col-lg-3 grid-margin">
            <img src="/back/vendors/images/logo-landing.png" alt="dashboard" class="dark-logo" /> 
            <div class="pt-2">
              <p class="text-muted m-0"></p>
              
              <p class="text-muted m-0"><b>@smkwikrama.sch.id </b></p>

            </div>         
          </div>
          <div class="col-12 col-md-6 col-lg-3 grid-margin">
            <h5 class="pb-2">Developer</h5>
            <a href="ig"><p class="m-0 pt-1 pb-2">Nadalia Putri</p></a> 
            <a href="ig"><p class="m-0 pt-1 pb-2">Juan Prasetya</p></a> 
            <a href="ig"><p class="m-0 pt-1 pb-2">Malik Akbar</p></a> 
            <a href="ig"><p class="m-0 pt-1 pb-2">Syahid Muhammad</p></a> 
            <a href="ig"><p class="m-0 pt-1 pb-2">Fiqratullael</p></a> 
 
            
            <div class="pt-3">
              <button class="btn btn-dark">Subscribe</button>
            </div>   
          </div>
          <div class="col-12 col-md-6 col-lg-3 grid-margin">
            <h5 class="pb-2">Our Site</h5>
           <a href="https://smkwikrama.sch.id/"><p class="m-0 pt-1 pb-2">SMK Wikrama</p></a> 
            <a href="https://ppdb.smkwikrama.sch.id/"><p class="m-0 pb-2">PPDB</p></a>   
            <a href="https://smkwikrama.sch.id/major-competency" ><p class="m-0 pt-1 pb-2">Major Competency</p></a> 
          </div>
          <div class="col-12 col-md-6 col-lg-3 grid-margin">
              <h5 class="pb-2">Our address</h5>
              <p class="text-muted">Jl. Raya Wangun, RT.01/RW.06, Sindangsari<br>Kec. Bogor Tim., Kota Bogor, Jawa Barat 16146</p>
              <div class="d-flex justify-content-center justify-content-md-start">
                <a href="https://www.facebook.com/smkwikrama/?locale=id_ID"><span class="mdi mdi-facebook"></span></a>
                <a href="https://twitter.com/smkwikrama"><span class="mdi mdi-twitter"></span></a>
                <a href="https://www.instagram.com/smkwikrama/"><span class="mdi mdi-instagram"></span></a>
                <a href="https://id.linkedin.com/company/smk-wikrama-bogor"><span class="mdi mdi-linkedin"></span></a>
              </div>
          </div>
        </div>  
      </section>
      <footer class="border-top">
      </footer>
      <!-- Modal for Contact - us Button -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel">Contact Us</h4>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="Name">Name</label>
                  <input type="text" class="form-control" id="Name" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="Email">Email</label>
                  <input type="email" class="form-control" id="Email-1" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="Message">Message</label>
                  <textarea class="form-control" id="Message" placeholder="Enter your Message"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div>
  <script src="back/vendors/jquery/jquery.min.js"></script>
  <script src="back/vendors/bootstrap/bootstrap.min.js"></script>
  <script src="back/vendors/owl-carousel/js/owl.carousel.min.js"></script>
  <script src="back/vendors/aos/js/aos.js"></script>
  <script src="js/landingpage.js"></script>
</body>
</html>