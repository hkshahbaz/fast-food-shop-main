<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>Fast Food</title>
    <link rel="icon" type="image/png" href="assets/images/logo.png">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.min.css" /> -->
    <link rel="stylesheet" type="text/css" href="assets/css/sidebar.css" />
    <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/slidder.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/thumbnail-slidder.css" />
    <script src="assets/js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
    <script src="assets/js/f4ababfdfc.js" crossorigin="anonymous"></script>
</head>
<body id="fastfood">
<div class="page-wrapper chiller-theme toggled" >
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fa fa-bars"></i>
  </a>
   <?php require_once('templates/sidebar.php') ?>
    <!-- sidebar-wrapper-end  -->
    <main class="page-content" id="page-content">
        <div class="container pt-2 " >
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
              <div class="carousel-inner">
                <div class="carousel-item active" >
                  <div class="slide-detail">
                      <div class="row mr-0 ml-0">
                          <div class="col-8 pl-0">
                              <div class="row">
                                  <div class="col-6">
                                    <div class="discount">
                                      <h1 class="ml-4"> <strong>20%</strong> </h1>
                                      <h2 class="ml-4 mt-5"> <strong>OFF</strong> </h2>
                                    </div>
                                  </div>
                                  <div class="col-6 d-flex flex-row-reverse">
                                      <div class="d-flex flex-column">
                                          <h2 class="text-uppercase mt-3 hot-deal"><strong>hot deal</strong></h2>
                                      <p class="offer ml-3 ">Offer Valid until Monday</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                                      <img src="assets/images/bomb.png" class="zinger-image">
                                  </div>
                              </div>
                              <div class="row item-name-div">
                                  <div class="col-12 d-flex flex-column justify-content-end align-items-center">
                                      <h2 class="zinger-name ml-5 mb-3">Bombolone Burger</h2>
                                  </div>
                              </div>
                          </div>
                          <div class="col-4 half-add-div p-0 rounded-right my-col-4">
                              <div class="row">
                                  <div class="col-12">
                                    <h5 class="half-add-h mt-2 ml-4">Bombolone Burger</h5>
                                    <p class="half-add-p mr-3 ml-4 mt-3" style="height: 70px;overflow-y: scroll;">Marinted fillets with our signature spicy sauce,cheese, loaded with jalapenos, all of this raped in a new bun</p>
                                  </div>
                              </div>
                              <div class="my_line_half_add "></div>
                              <div class="row">
                                  <div class="col-9">
                                      <h5 class="half-add-h ml-4">Price <span class="half-add-p font-weight-light"><sub>(inclusive of taxes)</sub></span></h5>
                                  </div>
                                  <div class="col-3 p-0">
                                      <h5 class="half-add-p font-weight-light">$<span class="price">5</span></h5>
                                  </div>
                              </div>
                              <div class="my_line_half_add"></div>
                              <div class="row">
                                  <div class="col-6">
                                      <h5 class="half-add-h ml-4">Quantity</h5>
                                  </div>
                                  <div class="col-6">
                                      <div class="row">
                                          <div class="col-3 text-center p-0">
                                          <button class="btn half-add-p minus-btn">-</button>
                                          </div>
                                          <div class="col-3 text-center p-0">
                                              <h5 class="half-add-p font-weight-light mt-2 half-add-qty-p"></h5>
                                          </div>
                                          <div class="col-3 text-center p-0">
                                              <button class="btn half-add-p plus-btn">+</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="my_line_half_add"></div>
                              <div class="row">
                                  <div class="col-7">
                                      <h5 class="half-add-h ml-4">Total Price</h5>
                                  </div>
                                  <div class="col-5 text-center">
                                    <h4 class="half-add-p font-weight-light total-price"> </h4>
                                  </div>
                              </div>
                              <div class="row">
                                    <div class="col-12 text-center mt-2">
                                        <button href="#" class="instruction font-weight-light give-instruction" data-toggle="modal" data-target="#instructionModal">Give Instructions</button>
                                        <p class="d-none output-instruction" ></p>
                                    </div>
                                </div>
                              <div class="row">
                                    <div class="col-12 text-center mt-4">
                                        <button  class="add-to-order font-weight-light" data-toggle="modal" data-target="#orderModal">Add to Order</button>
                                    </div>
                                </div>
                          </div>
                      </div>
                  </div>
                </div>
              <div class="carousel-item" >
                  <div class="slide-detail">
                      <div class="row mr-0 ml-0">
                          <div class="col-8 pl-0">
                              <div class="row">
                                  <div class="col-6">
                                    <div class="discount">
                                      <h1 class="ml-4"> <strong>20%</strong> </h1>
                                      <h2 class="ml-4 mt-5"> <strong>OFF</strong> </h2>
                                    </div>
                                  </div>
                                  <div class="col-6 d-flex flex-row-reverse">
                                      <div class="d-flex flex-column">
                                          <h2 class="text-uppercase mt-3 hot-deal"><strong>hot deal</strong></h2>
                                      <p class="offer ml-3 ">Offer Valid until Monday</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                                      <img src="assets/images/zinger-stacker.png" class="zinger-image">
                                  </div>
                              </div>
                              <div class="row item-name-div">
                                  <div class="col-12 d-flex flex-column justify-content-end align-items-center">
                                      <h2 class="zinger-name ml-5 mb-3">Zinger Stacker</h2>
                                  </div>
                              </div>
                          </div>
                          <div class="col-4 half-add-div p-0 rounded-right my-col-4">
                              <div class="row">
                                  <div class="col-12">
                                    <h5 class="half-add-h mt-2 ml-4">Zinger Stacker</h5>
                                    <p class="half-add-p mr-3 ml-4 mt-3" style="height: 70px;overflow-y: scroll;">Marinted fillets with our signature spicy sauce,cheese, loaded with jalapenos, all of this raped in a new bun</p>
                                  </div>
                              </div>
                              <div class="my_line_half_add "></div>
                              <div class="row">
                                  <div class="col-9">
                                      <h5 class="half-add-h ml-4">Price <span class="half-add-p font-weight-light"><sub>(inclusive of taxes)</sub></span></h5>
                                  </div>
                                  <div class="col-3 p-0">
                                      <h5 class="half-add-p font-weight-light">$<span class="price">3</span></h5>
                                  </div>
                              </div>
                              <div class="my_line_half_add"></div>
                              <div class="row">
                                  <div class="col-6">
                                      <h5 class="half-add-h ml-4">Quantity</h5>
                                  </div>
                                  <div class="col-6">
                                      <div class="row">
                                          <div class="col-3 text-center p-0">
                                          <button class="btn half-add-p minus-btn">-</button>
                                          </div>
                                          <div class="col-3 text-center p-0">
                                              <h5 class="half-add-p font-weight-light mt-2 half-add-qty-p"></h5>
                                          </div>
                                          <div class="col-3 text-center p-0">
                                              <button class="btn half-add-p plus-btn">+</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="my_line_half_add "></div>
                              <div class="row">
                                  <div class="col-7">
                                      <h5 class="half-add-h ml-4">Total Price</h5>
                                  </div>
                                  <div class="col-5 text-center">
                                    <h4 class="half-add-p font-weight-light total-price"> </h4>
                                  </div>
                              </div>
                              <div class="row">
                                    <div class="col-12 text-center mt-2">
                                        <button href="#" class="instruction font-weight-light give-instruction" data-toggle="modal" data-target="#instructionModal">Give Instructions</button>
                                        <p class="d-none output-instruction" ></p>
                                    </div>
                                </div>
                              <div class="row">
                                    <div class="col-12 text-center mt-4">
                                        <button href="#" class="add-to-order font-weight-light" data-toggle="modal" data-target="#orderModal">Add to Order</button>
                                    </div>
                                </div>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="carousel-item" >
                  <div class="slide-detail">
                      <div class="row mr-0 ml-0">
                          <div class="col-8 pl-0">
                              <div class="row">
                                  <div class="col-6">
                                    <div class="discount">
                                      <h1 class="ml-4"> <strong>20%</strong> </h1>
                                      <h2 class="ml-4 mt-5"> <strong>OFF</strong> </h2>
                                    </div>
                                  </div>
                                  <div class="col-6 d-flex flex-row-reverse">
                                      <div class="d-flex flex-column">
                                          <h2 class="text-uppercase mt-3 hot-deal"><strong>hot deal</strong></h2>
                                      <p class="offer ml-3 ">Offer Valid until Monday</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                                      <img src="assets/images/chicken.png" class="zinger-image">
                                  </div>
                              </div>
                              <div class="row item-name-div">
                                  <div class="col-12 d-flex flex-column justify-content-end align-items-center">
                                      <h2 class="zinger-name ml-5 mb-3">Chicken Burger</h2>
                                  </div>
                              </div>
                          </div>
                          <div class="col-4 half-add-div p-0 rounded-right my-col-4">
                              <div class="row">
                                  <div class="col-12">
                                    <h5 class="half-add-h mt-2 ml-4">Chicken Burger</h5>
                                    <p class="half-add-p mr-3 ml-4 mt-3" style="height: 70px;overflow-y: scroll;">Marinted fillets with our signature spicy sauce,cheese, loaded with jalapenos, all of this raped in a new bun</p>
                                  </div>
                              </div>
                              <div class="my_line_half_add "></div>
                              <div class="row">
                                  <div class="col-9">
                                      <h5 class="half-add-h ml-4">Price <span class="half-add-p font-weight-light"><sub>(inclusive of taxes)</sub></span></h5>
                                  </div>
                                  <div class="col-3 p-0">
                                      <h5 class="half-add-p font-weight-light">$<span class="price">2</span></h5>
                                  </div>
                              </div>
                              <div class="my_line_half_add"></div>
                              <div class="row">
                                  <div class="col-6">
                                      <h5 class="half-add-h ml-4">Quantity</h5>
                                  </div>
                                  <div class="col-6">
                                      <div class="row">
                                          <div class="col-3 text-center p-0">
                                          <button class="btn half-add-p minus-btn">-</button>
                                          </div>
                                          <div class="col-3 text-center p-0">
                                              <h5 class="half-add-p font-weight-light mt-2 half-add-qty-p"></h5>
                                          </div>
                                          <div class="col-3 text-center p-0">
                                              <button class="btn half-add-p plus-btn">+</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="my_line_half_add "></div>
                              <div class="row">
                                  <div class="col-7">
                                      <h5 class="half-add-h ml-4">Total Price</h5>
                                  </div>
                                  <div class="col-5 text-center">
                                  <h4 class="half-add-p font-weight-light total-price"></h4>
                                  </div>
                              </div>
                              <div class="row">
                                    <div class="col-12 text-center mt-2">
                                        <button href="#" class="instruction font-weight-light give-instruction" data-toggle="modal" data-target="#instructionModal">Give Instructions</button>
                                        <p class="d-none output-instruction" ></p>
                                    </div>
                                </div>
                              <div class="row">
                                    <div class="col-12 text-center mt-4">
                                        <button href="#" class="add-to-order font-weight-light" data-toggle="modal" data-target="#orderModal">Add to Order</button>
                                    </div>
                                </div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a> -->
              <!-- <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                  <img src="https://pbs.twimg.com/profile_images/905183271046193153/q_P1KBUJ_400x400.jpg" class="img-fluid"/>
                </li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1">
                  <img src="https://pbs.twimg.com/profile_images/905183271046193153/q_P1KBUJ_400x400.jpg" class="img-fluid"/>
                </li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2">
                  <img src="https://pbs.twimg.com/profile_images/905183271046193153/q_P1KBUJ_400x400.jpg" class="img-fluid"/>
                </li>
              </ol> -->
              <div class="container">
                <div class="row carousel-indicators mr-0 ml-0">
                    <div class="col-12 sidebar addscrollbar">
                      <div class="col-4 item mr-2 rounded text-center shadow d-flex flex-column justify-content-end align-items-center" data-target="#carouselExampleIndicators" data-slide-to="0">
                        <img src="assets/images/bomb.png" class="img-fluid item-image" />
                        <h6 class="item-heading p-2 pb-4">Bombolone Burger</h6>
                        <button href="#" class="item-price font-weight-light">$ 3.99</button>
                        <button href="#" class="selected-item-btn font-weight-light d-none 1"> <i class="fas fa-angle-up"></i></button>
                      </div>
                      <div class="col-4 item mr-2 rounded text-center shadow selected-item d-flex flex-column justify-content-end align-items-center" data-target="#carouselExampleIndicators" data-slide-to="1">
                        <img src="assets/images/zinger-stacker.png" class="img-fluid item-image" />
                        <h6 class="item-heading p-2 pb-4">Zinger Stacker</h6>
                        <button href="#" class="item-price font-weight-light ">$ 3.99</button>
                        <button href="#" class="selected-item-btn font-weight-light d-none 2"> <i class="fas fa-angle-up"></i></button>
                        
                      </div>
                      <div class="col-4 item rounded text-center shadow d-flex flex-column justify-content-end align-items-center" data-target="#carouselExampleIndicators" data-slide-to="2" >
                        <img src="assets/images/chicken.png" class="img-fluid item-image" />
                        <h6 class="item-heading p-2 pb-4">Crispy Chicken Burger</h6>
                        <button href="#" class="item-price font-weight-light">$ 9.99</button>
                        <button href="#" class="selected-item-btn font-weight-light d-none 3"> <i class="fas fa-angle-up"></i></button>
                        
                      </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </main>
  <!-- page-content" -->
</div>
<!-- Instructions Modal -->
<?php require_once('templates/instruction_modal.php') ?>
<!-- Order Modal -->
<?php require_once('templates/order_modal.php') ?>
<script type="text/javascript">
  $(document).ready(function(){
     $('#meatLink').addClass('activeItem') // when page load specific link is with black background
  })
</script>
<script src="assets/js/fullscreen.js" type="text/javascript"></script> 
<script src="assets/js/hotdeal.js" type="text/javascript"></script>
<script src="assets/js/custom.js" type="text/javascript"></script>
</body>
</html>