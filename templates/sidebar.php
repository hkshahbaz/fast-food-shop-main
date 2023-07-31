<nav id="sidebar" class="sidebar-wrapper ">
    <div class="sidebar-content mb-5 shadow">
      <div class="sidebar-brand col-md-12">
        <div class="col-md-4">
            <div id="close-sidebar" class="float-right">
                <img src="assets/images/menu-icon.png" width="30px" height="25px" >
            </div>
        </div>
        <div class="col-md-6">
            <a href="" class="text-uppercase">menu</a>
        </div>
        <div class="col-md-2 p-0">
            <a data-toggle="tooltip" title="Full Screen" onclick="openFullscreen();" class="full-screen">
                <img src="assets/images/fullscreen.png" class="float-right"> 
            </a>
        </div>
      </div>
      <div class="sidebar-menu">
        <ul>
            <li class="mt-2" id="hotDealLink">
            <a href="index.php">
              <img src="assets/images/fire.png" width="50px" height="40px" class="ml-4 mr-3">
              <span>Hot Deals</span>
              <i class="float-right fa fa-angle-right mt-2"></i>
            </a>
            <div class="my_line"></div>
          </li> 
          <li id="meatLink">
            <a href="meat.php">
              <img src="assets/images/meat.png" width="50px" height="40px" class="ml-4 mr-3">
              <span>Meat</span>
              <i class="float-right fa fa-angle-right mt-2"></i>
            </a>
            <div class="my_line"></div>
          </li> 
          <li id="riceLink">
            <a href="rice.php">
              <img src="assets/images/rice.png" width="50px" height="40px" class="ml-4 mr-3" >
              <span>Rice</span>
              <i class="float-right fa fa-angle-right mt-2"></i>
            </a>
          </li><div class="my_line"></div>
          <li id="saladLink">
            <a href="salad.php">
              <img src="assets/images/salad.png" width="50px" height="40px" class="ml-4 mr-3">
              <span>Salad</span>
              <i class="float-right fa fa-angle-right mt-2"></i>
            </a>
          </li><div class="my_line"></div>
          <li id="soupLink">
            <a href="soup.php">
              <img src="assets/images/soup.png" width="50px" height="40px" class="ml-4 mr-3">
              <span>Soup</span>
              <i class="float-right fa fa-angle-right mt-2"></i>
            </a>
          </li><div class="my_line"></div>
          <li id="fastFoodLink">
            <a href="fast_food.php">
              <img src="assets/images/hamburger.png" width="50px" height="40px" class="ml-4 mr-3">
              <span>Fast Food</span>
              <i class="float-right fa fa-angle-right mt-2"></i>
            </a>
          </li><div class="my_line"></div>
          <li id="desertsLink">
            <a href="deserts.php">
              <img src="assets/images/cake.png" width="50px" height="40px" class="ml-4 mr-3">
              <span>Deserts</span>
              <i class="float-right fa fa-angle-right mt-2"></i>
            </a>
          </li><div class="my_line"></div>
          <li style="margin-bottom: 12%;height: 80px">
          </li><div class="my_line"></div>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer text-center">
      <ul>
        <li class="text-center mb-2">
              <span class="order-price">$ <span class="total-amount">00.00</span> </span>
              <h6 class="text-uppercase total-amount-color">Total Amount</h6>
           </li>
          <li class="order p-3 font-weight-bold mt-3" data-toggle="modal" data-target="#orderModal" >
            <a >
                <div class="row">
                    <div class="col-3 ml-3">
                        <label class="order-badge float-right mt-2"><span class="items-to-be-order">0</span></label>
                    </div>
                    <div class="col-5 mt-1">
                        <h4 class="mt-2">Orders</h4>
                    </div>
                    <div class="col-3">
                        <i class="float-right fa fa-angle-right mt-3"></i>
                    </div>
                </div>
            </a>
          </li>
      </ul>
    </div>
  </nav>