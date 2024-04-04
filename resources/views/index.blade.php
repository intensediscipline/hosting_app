<x-layout>
					<h2 class="auth-heading text-center mb-5">Log in to your dashboard</h2>
			        <div class="auth-form-container text-start">
						<form action="/login" class="auth-form login-form" method="POST">
							@csrf         
							<div class="email mb-3">
								<label class="sr-only" for="username">Username</label>
								<input id="login-username" name="username" type="text" class="form-control" placeholder="Username" required="required">
							</div>
							<div class="password mb-3">
								<label class="sr-only" for="password">Password</label>
								<input id="login-password" name="password" type="password" class="form-control" placeholder="Password" required="required">
								<div class="extra mt-3 row justify-content-between">
									<div class="col-6">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="RememberPassword">
											<label class="form-check-label" for="RememberPassword">
											Remember me
											</label>
										</div>
									</div>
									<div class="col-6">
										<div class="forgot-password text-end">
											<a href="/reset-password">Forgot password?</a>
										</div>
									</div>
								</div>
							</div>
							<div class="text-center">
								<button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Log In</button>
							</div>
						</form>
						
						<div class="auth-option text-center pt-5">No Account? Register <a class="text-link" href="/register" >here</a>.</div>
					</div>

			    </div>
		    
			    <footer class="app-auth-footer">
				    <div class="container text-center py-3">
				        
			    
				       
				    </div>
			    </footer>
		    </div>
	    </div>
	    <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
		    <div class="auth-background-holder">
		    </div>
		    <div class="auth-background-mask"></div>
					<div class="auth-background-overlay p-3 p-lg-5">
						<div class="d-flex flex-column align-content-end h-100">
							<div class="h-100"></div>
							<div class="overlay-content p-3 p-lg-4 rounded">
								<h5 class="mb-3 overlay-title"></h5>
								<div></div>
							</div>
					</div>
		    </div>
	    </div>
    
    </div>
  </x-layout>
  
      
  