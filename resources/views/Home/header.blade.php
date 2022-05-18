 <!-- Start header section -->
 <header id="aa-header">  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-area">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="aa-header-left">
                  <div class="aa-telephone-no">
                    <span class="fa fa-phone"></span>
                    1-900-523-3564
                  </div>
                  <div class="aa-email hidden-xs">
                    <span class="fa fa-envelope-o"></span> info@markups.com
                  </div>
                </div>              
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                @auth
                <div class="aa-header-right">
                  
                    <i class="fa fa-user-o"></i>
                  
                  <strong class="text-uppercase">{{Auth::user()->name}}&nbsp&nbsp&nbsp</strong>
                  <a href="/logoutuser" class="aa-login">Logout</a>

                  @endauth
                  @guest
                  <div class="aa-header-right">
                  <a href="/registeruser" class="aa-register">Register</a>
                  <a href="/loginuser" class="aa-login">Login</a>
                   @endguest       
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header section -->