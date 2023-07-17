<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/icono.ico"/>
    <meta name="description" content="Natatorial.com">
    <meta name="author" content="Natatorial.com">
    <meta name="generator" content="Natatorial.com">
    <title>Swimming classes</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/script.js"></script>
    <script src="js/form.js"></script>

    <style>
      body{
        background: url('img/fondo_02.jpg');
        background-size: 100%;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .grayscale {
        filter: grayscale(100%);
      }
      #imagenesDesign{
          height: 1300px;
        }
      #formDesign{
          height: 1300px;
        }
      
      @media screen and (min-width: 601px) {
        #logoDown{
          display: none;
        }
      }
     
      /* On screens that are 600px wide or less, make the columns stack on top of each other instead of next to each other */
      /* CELULAR */
      @media screen and (max-width: 600px) {
        #imagenesDesign{
          height: 600px;
        }
        #formDesign{
          height: 1000px;
        }
        #logoUp{
          visibility: hidden;
        }
      }
    </style>
    
    <!-- Custom styles for this template -->
    <link href="css/headers.css" rel="stylesheet">
    <body onload="testimonials()">
        <nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Thirteenth navbar example">
          <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="img/natatorial_logo.png" alt="" width="40" height="38" role="img" id="logoDown"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
            <a class="navbar-brand col-lg-3 me-0" href="#"><img src="img/natatorial_logo.png" alt="" width="40" height="38" role="img" id="logoUp"></a>
              <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled text-dark" href="schedule.php"><i class="bi bi-circle-fill"></i> Schedule</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">About us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="swimming_lessons.html">Swimming lessons</a>
                </li>
                
              </ul>
              <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                <a href="admin/index.html" class="btn btn-primary">login</a>
              </div>
            </div>
          </div>
        </nav>

        <div class="container marketing ">
        <img class="d-block mx-auto mb-4" src="img/natatorial_logo.png" alt="" width="150" height="140">
        <!-- <img src="img/natatorial_logo.png" width="270" height="250" role="img" alt=""> -->
        <h2 class="text-center">Checkout form</h2>
            <p class="lead text-center">Section to pay for your scheduled swimming class.</p>
            <!-- div general -->
            <div class="container-fluid bg-white p-3 rounded-2">
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Schedule
                  </button>
                  <form class="needs-validation" enctype="multipart/form-data" method="post" name="formSchedule" id="formSchedule">
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">

                    <div class="input-group mb-3">
                      <span class="input-group-text" id="inputGroup-sizing-default"><i class="bi bi-calendar2-event-fill"></i></span>
                      <input type="date" id="scheduleDate" name="scheduleDate" oninput="dateTime()" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                    </div>

                    <div class="input-group mb-3" id="hiddenDiv" hidden>
                      <span class="input-group-text" id="inputGroup-sizing-default"><i class="bi bi-clock-fill"></i></span>
                      <select class="form-select" name="scheduleTime" id="scheduleTime" required>
                        <option value="">Select hour...</option>
                        <option value="9">9:30</option>
                        <option value="10">10:30</option>
                        <option value="11">11:30</option>
                        <option value="12">12:30</option>
                        <option value="13">13:30</option>
                        <option value="14">14:30</option>
                        <option value="15">15:30</option>
                        <option value="16">16:30</option>
                        <option value="17">17:30</option>
                        <option value="18">18:30</option>
                      </select>
                    </div>
                    <div class="input-group mb-3" id="hiddenDiv3" hidden>
                      <span class="input-group-text" id="inputGroup-sizing-default"><i class="bi bi-water"></i></span>
                      <select class="form-select" name="scheduleSkill" id="scheduleSkill" required>
                        <option value="">Swim skill level...</option>
                        <option value="1">Beginners</option>
                        <option value="2">Intermedium</option>
                        <option value="3">Advance</option>
                        <option value="4">Adult</option>
                      </select>
                    </div>
                    <div class="input-group mb-3" id="hiddenDiv2" hidden>
                      <span class="input-group-text" id="inputGroup-sizing-default"><i class="bi bi-geo"></i></span>
                      <select class="form-select" name="scheduleLocation" id="scheduleLocation" onchange="mostrarInputLocation(this.value)" required>
                      </select>
                    </div>

                    <div class="input-group mb-3" id="hiddenDiv4" hidden>
                      <span class="input-group-text"><i class="bi bi-house"></i></span>
                      <input type="text" class="form-control" placeholder="Address where the class will be held" id="addressHome" name="addressHome">
                    </div>

                    <div id="scheduleId"></div>

                    <div class="row g-2">
                      <div class="col-md-6">
                        <div class="d-grid gap-2">
                          <button class="btn btn-warning" type="button" onclick="queryDate()">Check disponibility</button>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="d-grid gap-2">
                          <button class="btn btn-danger" type="button" onclick="clearList()">Clear fields</button>
                        </div>
                      </div>

                    </div>

                  </div>
                  <div class="container-fluid">
                    <div class="d-grid gap-2 mb-2">
                      <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" id="button1" disabled>Next</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header border-bottom" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Personal Swimmer Info
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="col-md-12 col-lg-12">
                      <h4 class="mb-3">Personal Swimmer Info</h4>

                        <div class="row g-3">
                          
                          <div class="col-sm-6">
                            <label for="lastName" class="form-label">Last name</label>
                            <input type="text" class="form-control" name="lastname" id="lastName" placeholder="Last name" value="" oninput="validarInputs()" required>
                            <div class="invalid-feedback">
                              Valid last name is required.
                            </div>
                          </div>

                          <div class="col-sm-6">
                            <label for="firstName" class="form-label">Name</label>
                            <input type="text" class="form-control" name="firtsname" id="firstName" placeholder="Name" value="" oninput="validarInputs()" required>
                            <div class="invalid-feedback">
                              Valid first name is required.
                            </div>
                          </div>
                          
                          <div class="col-md-6">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" oninput="validarInputs()" required>
                            <div class="invalid-feedback">
                              Please enter your shipping address.
                            </div>
                          </div>

                          <div class="col-md-6">
                            <label for="email" class="form-label">Email <span class="text-muted">(Required)</span></label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com" oninput="validarInputs()">
                            <div class="invalid-feedback">
                              Please enter a valid email address for shipping updates.
                            </div>
                          </div>
                          
                          <div class="col-md-6">
                            <label for="phone1" class="form-label"><i class="bi bi-telephone-fill text-primary"></i> Contact telephone <span class="text-muted">(Required)</span></label>
                            <input type="number" class="form-control validarN" name="phone1" id="phone1" placeholder="ex. 55555555555555" oninput="validarInputs()">
                            <div class="invalid-feedback">
                              Please enter a valid email address for shipping updates.
                            </div>
                          </div>
                          
                          <div class="col-md-6">
                            <label for="email" class="form-label"><i class="bi bi-telephone-fill text-danger"></i> Contact emergency telephone <span class="text-muted">(Required)</span></label>
                            <input type="number" class="form-control validarN" name="phone2" id="phone2" placeholder="ex. 55555555555555" oninput="validarInputs()">
                            <div class="invalid-feedback">
                              Please enter a valid email address for shipping updates.
                            </div>
                          </div>
                          <hr>

                          

                          <h5 class="mt-4">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="0" id="validaGuardian" onload="validaG()" onchange="validaGuardianC()">
                            <label class="form-check-label" for="validaGuardian">
                            Relatives Authorized to pick up the student
                            </label>
                          </div>
                        
                          </h5>
                          <div class="col-md-6">
                            <label for="lastName" class="form-label">Parents / Guardian person 1 Name (In case of being a minor)</label>
                            <input type="text" class="form-control" name="guardianName" id="guardianName" placeholder="Complete name" value="No apply" oninput="validarInputs()" value="No apply" disabled required>
                            <div class="invalid-feedback">
                              Valid last name is required.
                            </div>
                          </div>
                          <div class="col-md-6">
                            <label for="lastName" class="form-label">Guardian Telephone (In case of being a minor)</label>
                            <input type="text" class="form-control validarN" name="guardianTelephone" id="guardianTelephone" placeholder="Telephone" value="0" oninput="validarInputs()" disabled required>
                            <div class="invalid-feedback">
                              Valid last name is required.
                            </div>
                          </div>

                        </div>
                  </div>
                </div>
                <div class="container-fluid">
                  <div class="d-grid gap-2 mb-2">
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" id="button2" disabled>Next</button>
                      </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse" aria-expanded="false" aria-controls="flush-collapseThree">
                    Payment
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                  <!-- div row principal -->
                  <div class="row">
                    <div class="col-md-6">
                      <h4 class="mb-3"><i class="bi bi-credit-card-fill"></i> Payment</h4>
                      <h6 class="mb-3">Add your data to process the transaction</h6>

                      <div class="row gy-3 mt-2 mb-3">
                        <div class="container">
                          <div class="form-check m-0">
                            <input class="form-check-input" type="radio" name="card" id="card" value="1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Credit card
                            </label>
                          </div>
                          <div class="form-check m-0">
                            <input class="form-check-input" type="radio" name="card" id="card" value="2">
                            <label class="form-check-label" for="flexRadioDefault2">
                              Debit card
                            </label>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <label for="ccname" class="form-label">Name on card</label>
                          <input type="text" class="form-control" id="ccname" name="ccname" placeholder="" required>
                          <small class="text-body-secondary">Full name as displayed on card</small>
                          <div class="invalid-feedback">
                            Name on card is required
                          </div>
                        </div>

                        <div class="col-md-6">
                          <label for="ccnumber" class="form-label">Credit card number</label>
                          <input type="text" class="form-control validarN" id="ccnumber" name="ccnumber" placeholder="" required>
                          <div class="invalid-feedback">
                            Credit card number is required
                          </div>
                        </div>

                        <div class="col-md-3">
                          <label for="ccexpiration" class="form-label">Expiration</label>
                          <input type="text" class="form-control validarN" id="ccexpiration" name="ccexpiration" placeholder="" required>
                          <div class="invalid-feedback">
                            Expiration date required
                          </div>
                        </div>

                        <div class="col-md-3">
                          <label for="cccvv" class="form-label">CVV</label>
                          <input type="text" class="form-control validarN" id="cccvv" name="cccvv" placeholder="" oninput="validarInputs2()" required>
                          <div class="invalid-feedback">
                            Security code required
                          </div>
                        </div>
                    
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h4 class="mb-3"><i class="bi bi-wallet2"></i> Account charges</h4>
                      <h6 class="mb-3">Charges to be made to the account</h6>

                      
                      <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm bg-primary text-light">
                          <div>
                            <h6 class="my-0">Class description</h6>
                            <small class="text-body-secondary">1 swimming class</small>
                          </div>
                          <span class="text-body-secondary">$45</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm text-light" style="background-color:#084298">
                          <div>
                            <h6 class="my-0">Taxes</h6>
                            <small class="text-body-secondary">Taxes</small>
                          </div>
                          <span class="text-body-secondary">$2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm text-light" style="background-color:#031633">
                          <div>
                            <h6 class="my-0">Transaction cost</h6>
                            <small class="text-body-secondary">This charge refers to the transaction between your bank and the system </small>
                          </div>
                          <span class="text-body-secondary">$1.2</span>
                        </li>
                        
                        <li class="list-group-item d-flex justify-content-between bg-warning text-dark">
                          <span>Total (USD)</span>
                          <strong>$48.2</strong>
                        </li>
                      </ul>

                      
                    </div>
                  </div>
                  <!-- div row principal -->
                  
                  
                  </div>
                  <div class="container-fluid mb-3">
                    <div class="d-grid gap-2 mb-2">
                        <button class="btn btn-primary" type="button" id="button3" disabled data-bs-toggle="modal" data-bs-target="#infoCheck" onclick="reservation()">Continue to checkout</button>
                      </div>
                  </div>
                </div>
                
              </div>
            </div><!--div general-->
          </div><!--div fluid-->

          <!-- <button class="w-100 btn btn-primary btn-lg mt-5" type="button" data-bs-toggle="modal" data-bs-target="#infoCheck" id="btnCheckout" onclick="reservation()" disabled>Continue to checkout</button> -->
        </form>
      </div>

        </div>

        <div class="container mt-3">
            <!-- <h3 class="text-light text-center mt-2 fuente">Sections</h3> -->
            <div class="row row-cols-1 g-2 mt-5 mb-5">
              
              <div class="col-sm-6">
                <div class="card card-cover overflow-hidden text-bg-dark rounded-4 shadow-lg" id="imagenesDesign" style="background-image: url('img/1.jpg');background-repeat: no-repeat;background-size: 100% 100%;width:100%">
                  <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    
                    <ul class="d-flex list-unstyled mt-auto">
                      <li class="me-auto">
                        <img src="img/natatorial_logo.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                      </li>
                      <li class="d-flex align-items-center me-3">
                       
                      </li>
                      <li class="d-flex align-items-center">
                        
                      </li>
                    </ul>
                  </div>
                </div><!--fin de card-->
              </div><!--fin de col-->
              <div class="col-sm-6">
                <div class="card card-cover overflow-auto rounded-4 shadow-lg" style="width:100%;background-color: #094277;" id="formDesign">
                  <div class="d-flex flex-column h-auto p-5 pb-3 text-white text-shadow-1">
                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold" style="text-shadow: 3px 3px 9px black;"><img src="img/natatorial_logo.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white"> Testimonials</h3>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true"><i class="bi bi-ui-checks-grid"></i> Form</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false"><i class="bi bi-eye-fill"></i> Reviews</button>
                      </li>
                      
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <div class="container">
                          <form>
                          <div class="mb-3 mt-3">
                            <label for="exampleFormControlTextarea1" class="form-label"><i class="bi bi-chat-right-dots"></i> Write your review ... (only 300 letters)</label>
                            <textarea class="form-control w-100" id="textAreaTestimonial" rows="18" onkeyup="countChars(this);"></textarea>
                            <p ><small id="charNum">0 characters</small></p>
                          </div>
                          <div class="mb-3 mt-3">
                            <label for="exampleFormControlTextarea1" class="form-label"><i class="bi bi-star-fill"></i> Score</label>
                              <p class="h3">
                                <a style="color:#EFB810;"  onclick="valorClic(1)"><i class="bi bi-star" id="star1"></i></a>
                                <a><i class="bi bi-star" onclick="valorClic(2)" id="star2"></i></a>
                                <a><i class="bi bi-star"  onclick="valorClic(3)" id="star3"></i></a>
                                <a><i class="bi bi-star"  onclick="valorClic(4)" id="star4"></i></a>
                                <a><i class="bi bi-star"  onclick="valorClic(5)" id="star5"></i></a>
                              </p>
                          </div>
                          <input type="text" id="inputValor" hidden>
                          <hr>
                          <p>
                            <button class="btn btn-primary" type="button" onclick="saveTestimonial()">Submit</button>
                          </p>
                          </form>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        <div class="container mt-3" id="reviews">

                        </div>
                      </div>
                    </div>

                  </div>
                 </div><!--fin de card -->
              </div><!--fin de col-->
            </div>
            
            <hr class="text-light mt-3 mb-3">
    </div>
          
    </body>

    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">&copy; 2023 Natatorial.com</p>
    
        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
       
          <img class="d-block mx-auto mb-4 grayscale" src="img/natatorial_logo.png" alt="" width="32" height="32">
          
        </a>
    
        <ul class="nav col-md-4 justify-content-end">
          <li><a href="index.html" class="nav-link px-2 link-secondary"><i class="bi bi-house"></i> Home</a></li>
          <li><a href="schedule.php" class="nav-link px-2 link-dark"><i class="bi bi-wallet"></i>  Schedule</a></li>
          <li><a href="about.html" class="nav-link px-2 link-dark"><i class="bi bi-exclamation-circle-fill"></i> About us</a></li>
        </ul>
      </footer>
    </div>

    </html>

    <!-- modal -->

    <div class="modal fade" id="infoCheck" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-credit-card-fill"></i> About reservation</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <div class="card text-bg-primary mb-3" style="width: 100%;">
          <div class="card-header pt-3"><h4><i class="bi bi-info-circle"></i> Information about your reservation in Natatorial.com</h4></div>
          <div class="card-body">
            
            <p class="card-text">
            <div class="row">
              <div class="col-md-6"><p><strong>Date:</strong> <span id="dateInf"></span> <strong>Hour:</strong> <span id="hourInf"></span>hs</p>
                <p><strong>Last name:</strong> <span id="lastInf"></span> <strong>First name:</strong> <span id="firstInf"></span></p>
                <p><strong>Email:</strong> <span id="emailInf"></span></p>
                <p><strong>Address:</strong> <span id="addressInf"></span></p>
                <hr>
                
            </p></div>
              <div class="col-md-6">
              <p><strong>Level:</strong> <span id="levelInf"></span></p>
                <p><strong>Location:</strong> <span id="locationInf"></span></p>
              </div>
            </div>
            
          </div>
        </div>
        
        <div class="card text-bg-warning mb-3" style="width: 100%;">
          <div class="card-header pt-3"><h4><i class="bi bi-info-circle"></i> Terms & Conditions | Natatorial.com</h4></div>
          <div class="card-body bg-light">
            
            <p class="card-text">
              <div class="overflow-auto" style="max-height:200px">
              <p>CONTRACT, TERMS AND CONDITIONS, PAYMENTs, WAIVER AND RELEASE OF LIABILITY, AUTHORIZATION FOR EMERGENCY MEDICAL TREATMENT & PRIVACY POLICY
              <br><br>I understand that Natatorial teaches all skill levels ranging from the fundamentals of water safety to competitive instruction so that swimmers love the water, are safe and swim for life.
              I will come ready to learn, strive to be safe, and will have fun!<br><br>
              Protecting Your Information Is Our Priority.<br><br>
              Natatorial respects your privacy. We developed this Privacy Policy to explain how we collect, use, share, and protect Personal Information (defined below), and your choices about the collection and use of Personal Information.<br><br>
              This Privacy Policy applies to Personal Information collected or processed about you, if you are a customer of ours or a user of Natatorial, and any other Natatorial operated website, app, or social media page that links to this Privacy Policy (including to the extent those websites or applications are operated for the benefit of our buisness).<br><br>


              Policies, Procedures, Release of Liability and Fee Agreement<br><br>
              It is critical that you understand the Policies, Procedures, Release of Liability and Fee Agreement of the Natatorial Swim system to ensure each student has a fun, rewarding and safe experience when learning to swim.


              Class Times<br><br>
              The vast majority of our small group, semi-private or private lessons are 30/60 minutes in length, one day per week. Classes are held at the same time and day of the week during each week of the program. However, we do offer other lesson formats to address our various customer requirements. Please note the class description for each lesson format before you enroll.<br><br>


              Registration<br><br>
              There are no registration deadlines for the Natatorial swim system. Students who are registered for lessons can sign up and join lessons at any time, subject to available capacity and the number of requested lessons, as solely determined by the Natatorial swim system location for which they have been registered.<br><br>
              
              Tuition and Monthly fees program: Once your student is registered for classes within the monthly program, you will be billed for the first month’s tuition. The amount of tuition for the first month will be determined based on the number of available classes remaining in that particular month. For each month thereafter, you will be billed monthly until you notify us of your desire to withdraw your student from classes (see “Withdrawing from Lessons” below). The monthly amounts of tuition may vary based on the number of weeks in each respective calendar month, and will be billed on the 25th day of the month preceding the calendar month in which the classes will be held. For example, if you enroll your student in January, you will be billed the tuition and fees for January at the time of enrollment, and then you will be billed on January 25 for the tuition and fees corresponding to classes held in February. Tuition rates may differ according to location, day and/or time of the lessons provided.<br><br>
              Promotional bundles, Once your student is registered for classes as part of any promotional bundle, you will be billed the full amount of the tuition for such program.<br><br>
              Methods of Payment<br><br>
              Electronic payments and cash are the only payment methods accepted by Natatorial. Electronic payments include credit cards, debit cards and EFT/ACH transfers (electronic transfers from your bank account where you supply us with your bank routing number and account number). Checks are not accepted. You are responsible for making sure your method of payment remains current and valid. In the event your method of payment lapses for any reason and we are unable to collect payment from you, your student(s) may be withdrawn from classes at the sole determination of Natatorial system. In some cases, third-party payment arrangements will be accepted (please see below).<br><br>


              Tuition and Annual Service Fee Paid by Third-Party<br><br>
              Tuition and the annual service fee for any program can be paid on behalf of a student by a third- party (i.e., someone who is not a parent of the student). Any third-party payer must execute a third- party payer agreement and provide his or her credit card information. Such credit card information will be used to bill the third-party payer for the duration of any swim lesson program in which the student is enrolled, unless the third-party payer instructs otherwise. In the event the third-party payer fails or refuses to pay any amounts due for lessons provided to the student, the customer who originally registered the student for swim lessons will be responsible for any unpaid tuition and annual service fee payments due to Natatorial.<br><br>


              Refunds and Cancellations after Initial Registration<br><br>
              No refund will be provided in connection with any cancellations made after registration, regardless of the reason for such cancellation. Please understand that when you enroll your student in a program, you are reserving a slot in a program that is in high demand and could be filled by other students. As a result, your payment for reserving a slot in that program will be retained by Natatorial even if your student does not attend any lessons provided in such program. Accordingly, it is your responsibility to make sure your vacations, appointments, and other activities do not interfere with any of the lessons in a program for which you have enrolled your student and paid for a slot in such program. Withdrawing from Lessons.<br><br>


              To withdraw a student from lessons under any program after the student has begun taking lessons within that program, log in to your account via the customer portal on the Natatorial website (www.natatorial.com) and complete the withdrawal option for your student. In order to avoid being charged for the next month of lessons, you must withdraw your student on or before the 5th day of the month. If you submit a withdrawal form after you already have been billed the tuition for the next month of lessons, you may receive a partial refund. After the registration, you are no longer eligible for a refund.<br><br>


              Make-Up Lesson Due to Facility Closure<br><br>
              In the event a facility is closed due to inclement weather, maintenance, or another reason, a make- up lesson might be rescheduled at that particular Natatorial location. If you are offered a make-up lesson, it must be completed within two (2) weeks of the originally scheduled (missed) class and is subject to availability, as solely determined by Natatorial. If you are not offered a make-up lesson, your student’s account will be credited for the lesson(s) cancelled as a result of the facility closure. All such credits will be applied toward the tuition and fees for a future lesson (or lessons) at the Natatorial location at which they were issued (credits can be transferred to another Natatorial location upon availability and at discretion of Natatorial). Such credits cannot be converted to cash or transferred to any other student. Credits expire one (1) year after the date on which they were applied to the student’s account.<br><br>


              Make-Up Lesson Due to Student Absence (at participating locations only)<br><br>
              Students are eligible for one (1) make-up lesson every calendar month due to the student’s absence. The make-up lesson must be completed within two (2) weeks from the date of the original absence and is subject to the availability of instructors and the facility at which the original lesson took place, as solely determined by Natatorial. No credit will be given if the student is subsequently unable to attend the scheduled make-up lesson. A student’s right to a make-up lesson cannot be transferred to any other student.<br><br>

              Instructor and Lesson Changes<br><br>
              While the Natatorial system does its best to accommodate requests for students to have specific instructors, it cannot guarantee such requests will be granted. Instructor substitutions, schedule modifications, and other changes can and will occur at the sole discretion of Natatorial. If a lesson is not booked to capacity, every Natatorial location reserves the unilateral right, based on its sole determination, to combine enrollment for various lessons in order to fill such lessons, to cancel, or to change the date, time, or level of any lesson at any time. Timeliness
              Please make sure your student is on time for lessons. Lessons begin and end at very specific times. Please arrive early enough so your student has time to stop by the bathroom, get changed and get his/her equipment ready before the lesson begins. If your student is more than 10 minutes late for a lesson, he or she will not be allowed to join that lesson.<br><br>


              Advancement of Students to the Next Class Level<br><br>
              Every student will learn skills at different rates. You should never look at another student and wonder why your student is not learning at the same pace as that other student. Swimming is a skill that takes time, patience and plenty of practice. Therefore, students will be evaluated regularly to determine if they have mastered the skills required in conjunction with a particular class level. Instructor will promote students to the next level when they believe they are ready.<br><br>


              Changing Areas, Restrooms, and Locker Rooms<br><br>
              Natatorial is hosted by several facilities which includes: Fitness Centers, Hotels, Apartment Complexes, Recreation Centers, etc.<br><br>
              Please refer to the specific locker room policies and guidelines of the hosted facility in which
              Natatorial is located.<br><br>


              Tryouts Lessons (at participating locations only)<br><br>
              Tryouts may be offered by Natatorial. In order to book a trial lesson, you must complete and submit a registration form to Natatorial which will be providing the trial lesson to your student. Additionally, you must agree to all policies, procedures, waivers and other standard terms and conditions before your student can participate in the trial lesson.<br><br>
              Swim gear
              All students should bring and wear their own swim gear (goggles, swim cap, kickboard) at every class. Natatorial does not offer loaner goggles.<br><br>
              Swimsuits
              All students must wear appropriate swimwear.<br><br>
              
              Swim Diapers<br><br>
              All students who are not potty-trained must wear a reusable (non-disposable) swim diaper. Reusable diapers have a tighter fit, which helps to minimize the possibility of accidents in a pool. A swimsuit or a pair of shorts should be worn over the diaper. Even a small accident in the pool can result in a pool closure which could last as long as 24 hours. If in doubt, please do not take the chance.<br><br>
              Swim caps<br><br>
              Any students who have hair long enough to get in their eyes, face or mouth might be required by
              Natatorial to wear a swim cap in order to enhance their comfort.<br><br>
              Towels<br><br>
              Students must bring their own towels. Towels are not provided by Natatorial.<br><br>


              Watching Lessons<br><br>
              Please remain at the Natatorial location for the entire duration of your student’s lessons. If the lessons are conducted in a dedicated Natatorial facility, please watch your student from the viewing or waiting area of the facility. If the lessons are conducted in a facility that hosts the Natatorial (e.g., a fitness club, home, community pools or other third-party facility), please watch your student from the pool deck. In either case, our goal is to give each student the best learning experience possible, so please refrain from interrupting your student’s lesson. If you wish to speak with your student’s instructor, please contact at the end of the lessons.<br><br>
              Please Keep Your Eyes on the Pool<br><br>
              Although we strive to have small classes and attentive instructors, it only takes an instant for a child to slip underwater. If this occurs, please alert us immediately in any way possible. And when this occurs (and it does), the impact of the event will depend on the reaction of the parent. If possible, try to keep your momentary concern concealed behind a smiling, encouraging face, in which there will be a very good chance your child will recover very quickly from the incident. We want to keep our students safe and nothing works better than having the helpful eyes of their parents and guardians on their activities at all times.<br><br>


              Food and Snacks<br><br>
              GLASS IS NEVER ALLOWED ON THE POOL DECK. To keep the pool area clean, food and drink are not allowed in the pool area at any time. The only exception to this rule is bottled water as long as it is in a non-glass container.<br><br>
              
              Crying Children<br><br>
              An upset child will calm down much quicker when realizing he or she must focus on the instructor and Mom or Dad will return when the crying has stopped. Unless requested by the instructor, please remain in the waiting area or at a distance on the deck (Hosted Facilities) when your child is crying.<br><br>


              Applicability of Terms and Conditions<br><br>
              It is your sole responsibility to ensure that anyone acting on your behalf in connection with the services offered by Natatorial is aware of, and complies with, the policies and procedures set forth herein.<br><br>


              WAIVER AND RELEASE OF LIABILITY<br><br>
              Please read carefully before accepting. this is a release of liability and a waiver of certain legal rights. by signing below, you are acknowledging and accepting the following:<br><br>
              I am the parent or guardian of the participant(s) identified by me (each a “Participant”) who will be enrolled in swimming lessons in a Natatorial system. I hereby acknowledge that I understand that swimming is a hazardous activity. I recognize that there are risks inherent in the sport of swimming, including but not limited to, minor injuries, major injuries, paralyzing and catastrophic injuries and death. I, individually and on behalf of each Participant, understand and voluntarily accept these risks. Additionally, I, individually and on behalf of each Participant and any other person who may accompany any Participant to a Natatorial, consent to precautionary measures taken by the Natatorial system as a whole or any particular facility at which any Natatorial is conducted, in striving to reduce potential exposure to contagions or any other matters of public health concern, acknowledging and understanding that the Natatorial, including any such particular facility and its representatives, cannot guarantee that any precautionary measures taken by any of them will fully protect anyone from being exposed to, becoming susceptible to, and/or contracting any contagion or any other matter of public health concern. At the same time, I acknowledge and accept the responsibility I have to take all reasonable precautions for minimizing the risk of transmitting any contagion or somehow exacerbating any matter of public health concern.<br><br>
              Participants will acknowledge all potential hazards and risks during scheduled lesson(s) whereby Natatorial is not responsable for participants swimming outside of their scheduled lesson, practicing by themselves, or playing. Guardians and Participants must take responsibility for how they conduct themselves in and outside of scheduled lesson activities.<br><br>
              Accordingly, I, individually and on behalf of each Participant, do hereby waive, release, indemnify, and forever hold harmless Natatorial LLC , licensees, and affiliates, and their respective owner(s), directors, officers, agents, employees, representatives, successors and assigns, administrators, and executors, as well as any facility at which any Natatorial is conducted and each of their respective owner(s), directors, officers, agents, employees, representatives, successors and assigns,<br><br>
              
              administrators and executors (collectively, the “Released Parties”) from all liabilities and claims for any injuries, losses, death, damages, or costs (including reasonable attorneys’ and experts’ fees) to myself, any Participant, my spouse, child, guests, unborn child(ren), or relatives which arise out of or are incident to any Participant’s participation in any activities relating to the swimming lessons provided by any Natatorial system or my attendance at any activities relating to the swimming lessons provided by any Natatorial, including those caused by any negligent act or omission by any of the Released Parties, by anyone at or using any facility at which any Natatorial is conducted or as a result of a defective product. This provision will apply to ordinary acts of negligence but will not apply to gross acts/omissions of negligence, willful, or wanton acts/omissions or those of an intentional/criminal nature.<br><br>


              AUTHORIZATION FOR EMERGENCY MEDICAL TREATMENT<br><br>
              In the event of a medical emergency involving any Participant, I hereby grant authorization to Natatorial LLC, any of its affiliates, and any of their respective officers, employees, or agents, to employ any legally licensed physician or health care facility on behalf of such Participant, and to direct and/or order emergency medical treatment for such Participant. I agree to pay all costs associated with any medical treatment for any Participant, including any transportation and medical facility costs. Further, I acknowledge and agree that neither Natatorial LLC and any of its affiliates, nor any of their respective officers, employees, or agents, will be liable under any circumstances to anyone for exercising the foregoing authority in the event of an emergency involving any Participant.<br><br>


              PRIVACY POLICY<br><br>
              I hereby affirm that I have read and understand the Natatorial Privacy Policy, which is located at https://www.NATATORIAL.com/privacy-policy.<br><br>
              comprehensive acknowledgment
              I have carefully read all of the above information, accept and acknowledge it with full knowledge of its contents and significance. by clicking “accept” here, i understand that the information presented will govern my relationship and each participant’s relationship with the Natatorial system. my acceptance here superscedes any other agreement, written or oral, that may have been presented to me with respect to my relationship with any Natatorial swim lessons.

              </p>
              </div>
            </p>
          </div>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="checkTerms" onchange="checkT()">
          <label class="form-check-label" for="flexCheckDefault">
          I agree the terms and conditions
          </label>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-circle-fill"></i> Close</button>
        <button type="button" class="btn btn-warning" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" onclick="cerrarModal()"><i class="bi bi-pencil-square"></i> Edit information</button>
        <button type="button" class="btn btn-primary" onclick="submitReservation()" id="buttonCheck" disabled><i class="bi bi-check-circle-fill"></i> Confirm reservation</button>
      </div>
    </div>
  </div>
</div>

<script>
  function cerrarModal(){
    $('#infoCheck').modal('hide');
    $('#flush-collapseOne').collapse('show');
  }
</script>