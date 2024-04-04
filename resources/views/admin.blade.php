<x-layout-admin>
<header class="app-header fixed-top">	   	            
  <div class="app-header-inner">  
    <div class="container-fluid py-2">
      <div class="app-header-content"> 
          <div class="row justify-content-between align-items-center">
        
      <div class="col-auto">
        <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
        </a>
      </div><!--//col-->
          <div class="app-utilities col-auto">
            
            
            <div class="app-utility-item app-user-dropdown dropdown">
              <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><img src="/images/user.png" alt="user profile"></a>
              <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button class="dropdown-item" >Log Out</button>
                  </form>
                </li>
              </ul>
            </div><!--//app-user-dropdown--> 
          </div><!--//app-utilities-->
      </div><!--//row-->
        </div><!--//app-header-content-->
    </div><!--//container-fluid-->
  </div><!--//app-header-inner-->
  <div id="app-sidepanel" class="app-sidepanel"> 
    <div id="sidepanel-drop" class="sidepanel-drop"></div>
    <div class="sidepanel-inner d-flex flex-column">
      <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
      <div class="app-branding">
          <a class="app-logo" href="index.html"><img class="logo-icon me-2" src="/images/app-logo.svg" alt="logo"><span class="logo-text">Admin</span></a>

      </div><!--//app-branding-->  
      
    <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
      <ul class="app-menu list-unstyled accordion" id="menu-accordion">
        <li class="nav-item">
            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
            <a class="nav-link active" href="index.html">
              <span class="nav-icon">
                <i class="fas fa-home"></i>
               </span>
                       <span class="nav-link-text">Overview</span>
            </a><!--//nav-link-->
        </li><!--//nav-item-->  
        </ul><!--//footer-menu-->
      </nav>
    </div><!--//app-sidepanel-footer-->
     
    </div><!--//sidepanel-inner-->
</div><!--//app-sidepanel-->
</header><!--//app-header-->

<div class="app-wrapper">

<div class="app-content pt-3 p-md-3 p-lg-4">
  <div class="container-xl">
    
    <h1 class="app-page-title">Overview</h1>
    
    <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
      <div class="inner">
        <div class="app-card-body p-3 p-lg-4">
          <h3 class="mb-3">Welcome, {{auth()->user()->username}}!</h3>
          <div class="row gx-5 gy-3">
              <div class="col-12 col-lg-9">
                
                <div>Use this app to stay up-to-date with our sites.</div>
            </div><!--//col-->
            <div class="col-12 col-lg-3">
              
            </div><!--//col-->
          </div><!--//row-->
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div><!--//app-card-body-->
        
      </div><!--//inner-->
    </div><!--//app-card-->
   
    <div class="row g-4 mb-4">
        <div class="col-12">
          <div class="app-card app-card-stats-table h-100 shadow-sm">
            <div class="app-card-header p-3">
              <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                      <h4 class="app-card-title">Website List</h4>
                </div><!--//col-->
                <div class="col-auto">
                  <div class="card-header-action">
                    <a href="#">View report</a>
                  </div><!--//card-header-actions-->
                </div><!--//col-->
              </div><!--//row-->
            </div><!--//app-card-header-->
            <div class="app-card-body p-3 p-lg-4">
              <div class="table-responsive">
                <table class="table table-borderless mb-0">
              <thead>
                <tr>
                  <th class="meta">Website</th>
                  <th class="meta stat-cell">Status</th>
                  <th class="meta stat-cell">Created</th>
                  <th class="meta stat-cell">Renewal Date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="#">test.co.uk</a></td>
                  <td class="stat-cell">110</td>
                  <td class="stat-cell">10/12/2023</td>
                  <td class="stat-cell">01/01/2024</td>
                </tr>
              </tbody>
            </table>
              </div><!--//table-responsive-->
            </div><!--//app-card-body-->
          </div><!--//app-card-->
        </div><!--//col-->
    </div><!--//row-->
    
    
  </div><!--//container-fluid-->
</div><!--//app-content-->
</x-layout-admin>