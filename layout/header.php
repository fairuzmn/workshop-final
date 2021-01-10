<div class="info-header">
  <div class="container d-flex">
    <!-- Phone -->
    <div class="phone p-1">
      <!-- <i class="fal fa-phone"></i> -->
      <i data-feather="phone" style="height:18px"></i>
      <span class="phoneHeader">
        +62 812 4911 8805
      </span>
    </div>
    <!-- Email -->
    <div class="email p-1">
      <i class="fas fa-envelope"></i>
      <span class="mailHeader">
        Hapekun@gmail.com
      </span>
    </div>
    <!-- RegisterLogin -->
    <!-- <div class="registerLogin p-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <a href="#" class="loginHeader">
        <i class="far fa-user"></i>
        Register or Login
      </a>
    </div> -->
    <div class="registerLogin p-1">
      <a href="?r=profile" class="loginHeader">
        <i class="far fa-user"></i>
        Fairuz
      </a>
    </div>
  </div>
</div>

<div class="header">
  <div class="container d-flex align-items-center">
    <div class="mainSectionHeader" onclick="goHome()">
      <section class="labelText">
        HAPE<span class="labelTextHijau">KUN</span>
      </section>
    </div>
    <div class="formSearch">
      <div class="input-group">
        <input type="text" class="form-control searchProduct" placeholder="Search Product">
        <div class="input-group-append">
          <button class="btn btn-secondary btn-search" type="button">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </div>
    <div class="infoOpena">
      <span class="infoOpenText">
        7 days a week from 8:00 am to 5:00 pm
      </span>
    </div>
    <div class="favSection" style="font-size: 2rem;">
      <i class="far fa-heart"></i>
    </div>
    <div class="cartSection" style="font-size: 2rem;">
      <a href="?r=keranjang">
        <i class="far fa-shopping-cart"></i>
      </a>
    </div>
  </div>
  <div class="container d-flex">
    <div class="allCategori align-items-center p-3">
      <i class="far fa-bars" style="color:white"></i>
      <span class="allCategoriText">ALL CATEGORI </span>
    </div>
    <div class="menu">
      <div class="menuItem">
        <a class="menuItemText">Apple</a>
      </div>
      <div class="menuItem">
        <a class="menuItemText">Meizu</a>
      </div>
      <div class="menuItem">
        <a class="menuItemText">Xiaomi</a>
      </div>
      <div class="menuItem">
        <a class="menuItemText">Honor</a>
      </div>
      <div class="menuItem">
        <a class="menuItemText">Huawei</a>
      </div>
      <div class="menuItem">
        <a class="menuItemText">Asus</a>
      </div>
      <div class="menuItem">
        <a class="menuItemText">Oppo</a>
      </div>
      <div class="menuItem">
        <a class="menuItemText">Vivo</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-login modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <div class="avatar">
          <img src="img/avatar.png" alt="Avatar">
        </div>
        <h4 class="modal-title">Member Login</h4>
        <button class="close" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x-circle" style="height:18px"></i>
        </button>
      </div>
      <div class="modal-body">
        <form action="/examples/actions/confirmation.php" method="post">
          <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Username" required="required" autocomplete="off">
          </div>
          <br>
          <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required" autocomplete="off">
          </div>
          <br>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn" style="width:100%;">Login</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <a href="#">Forgot Password?</a>
      </div>
    </div>
  </div>
</div>