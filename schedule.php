<!doctype html>
<html lang="en">
  <head>
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

        <div class="container marketing">
        <img class="d-block mx-auto mb-4" src="img/natatorial_logo.png" alt="" width="150" height="140">
        <!-- <img src="img/natatorial_logo.png" width="270" height="250" role="img" alt=""> -->
        <h2 class="text-center">Checkout form</h2>
            <p class="lead text-center">Section to pay for your scheduled swimming class.</p>
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
                      </select>
                    </div>
                    <div class="input-group mb-3" id="hiddenDiv2" hidden>
                      <span class="input-group-text" id="inputGroup-sizing-default"><i class="bi bi-geo"></i></span>
                      <select class="form-select" name="scheduleLocation" id="scheduleLocation" oninput="queryDate()" onchange="mostrarInputLocation(this.value)" required>
                      </select>
                    </div>

                    <div class="input-group mb-3" id="hiddenDiv4" hidden>
                      <span class="input-group-text" id="inputGroup-sizing-default"><i class="bi bi-house"></i></span>
                      <input type="text" class="form-control" placeholder="Address where the class will be held">
                    </div>

                    <div id="scheduleId"></div>
                  </div>
                    <div class="d-grid gap-2 mb-2">
                      <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" id="button1" disabled>Next</button>
                    </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header border-bottom" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Personal info
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="col-md-12 col-lg-12">
                      <h4 class="mb-3">Personal info</h4>

                        <div class="row g-3">
                          
                          <div class="col-sm-6">
                            <label for="lastName" class="form-label">Surname</label>
                            <input type="text" class="form-control" name="lastname" id="lastName" placeholder="Surname" value="" onchange="validarInputs()" required>
                            <div class="invalid-feedback">
                              Valid last name is required.
                            </div>
                          </div>

                          <div class="col-sm-6">
                            <label for="firstName" class="form-label">Name</label>
                            <input type="text" class="form-control" name="firtsname" id="firstName" placeholder="Name" value="" onchange="validarInputs()" required>
                            <div class="invalid-feedback">
                              Valid first name is required.
                            </div>
                          </div>
                          
                          <div class="col-6">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" onchange="validarInputs()" onkeypress="validarInputs()" required>
                            <div class="invalid-feedback">
                              Please enter your shipping address.
                            </div>
                          </div>

                          <div class="col-6">
                            <label for="email" class="form-label">Email <span class="text-muted">(Required)</span></label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com" onchange="validarInputs()">
                            <div class="invalid-feedback">
                              Please enter a valid email address for shipping updates.
                            </div>
                          </div>
                          
                          <div class="col-6">
                            <label for="email" class="form-label"><i class="bi bi-telephone-fill text-primary"></i> Contact telephone <span class="text-muted">(Optional)</span></label>
                            <input type="number" class="form-control" name="email" id="email" placeholder="ex. 11111111111" onchange="validarInputs()">
                            <div class="invalid-feedback">
                              Please enter a valid email address for shipping updates.
                            </div>
                          </div>
                          
                          <div class="col-6">
                            <label for="email" class="form-label"><i class="bi bi-telephone-fill text-danger"></i> Contact emergency telephone <span class="text-muted">(Required)</span></label>
                            <input type="number" class="form-control" name="email" id="email" placeholder="ex. 11111111111" onchange="validarInputs()">
                            <div class="invalid-feedback">
                              Please enter a valid email address for shipping updates.
                            </div>
                          </div>

                          <h5 class="mt-4"><i class="bi bi-people-fill"></i> Relatives Authorized to pick up the student</h3>
                          <div class="col-sm-12">
                            <label for="lastName" class="form-label">Guardian person 1 Name and Telephone (In case of being a minor)</label>
                            <input type="text" class="form-control" name="lastname" id="lastName" placeholder="Complete name" value="" onchange="validarInputs()" required>
                            <div class="invalid-feedback">
                              Valid last name is required.
                            </div>
                          </div>

                        </div>
                  </div>
                </div>
                <div class="d-grid gap-2 mb-2">
                      <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" id="button2" disabled>Next</button>
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
                  <h4 class="mb-3">Payment</h4>
                  <h6 class="mb-3">Add your data to process the transaction</h6>

                  <div class="row gy-3 mt-2">

                  <div class="form-check m-0">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Credit card
                    </label>
                  </div>
                  <div class="form-check m-0">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                      Debit card
                    </label>
                  </div>
                  <!-- <div class="form-check m-0">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                      Paypal
                    </label>
                  </div> -->

                  <div class="col-md-6">
              <label for="cc-name" class="form-label">Name on card</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
              <small class="text-body-secondary">Full name as displayed on card</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Credit card number</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Expiration</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
                    
                    <div class="input-group mb-3">
                      <label class="input-group-text" for="inputGroupFile01"><i class="bi bi-folder-plus"></i></label>
                      <input type="file" class="form-control" id="fileSwimm" name="file1" onchange="validarInputs2()">
                    </div>

                  </div>
                  
                  </div>
                  <div class="d-grid gap-2 mb-2">
                      <button class="btn btn-primary" type="button" id="button3" disabled onclick="checkOut()">Next</button>
                    </div>
                  
                </div>
                
              </div>
            </div>

          <button class="w-100 btn btn-primary btn-lg mt-5" type="button" data-bs-toggle="modal" data-bs-target="#infoCheck" id="btnCheckout" onclick="reservation()" disabled>Continue to checkout</button>
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
        <p class="col-md-4 mb-0 text-muted">&copy; 2022 Natatorial.com</p>
    
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

    <div class="modal fade" id="infoCheck" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <p><strong>Date:</strong> <span id="dateInf"></span> <strong>Hour:</strong> <span id="hourInf"></span>hs</p>
                <p><strong>Last name:</strong> <span id="lastInf"></span> <strong>First name:</strong> <span id="firstInf"></span></p>
                <p><strong>Email:</strong> <span id="emailInf"></span></p>
                <p><strong>Address:</strong> <span id="addressInf"></span></p>  
            </p>
          </div>
        </div>
        
        <div class="card text-bg-warning mb-3" style="width: 100%;">
          <div class="card-header pt-3"><h4><i class="bi bi-info-circle"></i> Terms & Conditions | Natatorial.com</h4></div>
          <div class="card-body bg-light">
            
            <p class="card-text">
              <div class="overflow-auto" style="max-height:200px">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
              </p>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
              </p>
              </div>
            </p>
          </div>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="checkTerms" onchange="checkT()">
          <label class="form-check-label" for="flexCheckDefault">
          I understand the terms and conditions
          </label>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-circle-fill"></i> Close</button>
        <button type="button" class="btn btn-primary" onclick="submitReservation()" id="buttonCheck" disabled><i class="bi bi-check-circle-fill"></i> Confirm reservation</button>
      </div>
    </div>
  </div>
</div>