<x-layout>
	
				<h2 class="auth-heading text-center mb-4">Register for Hosting App</h2>					

				<div class="auth-form-container text-start mx-auto">
					<form action="/register" method="POST" class="auth-form auth-signup-form">
						@csrf         
						<div class="mt-5 mb-3">
							<label class="sr-only" for="username">Username</label>
							<input id="register-name" name="username" type="text" class="form-control" placeholder="Username" required="required">
							
								@error('username')
              <p class="mt-1 small alert alert-danger shadow-sm">{{ $message }}</p>
              @enderror
						</div>
						<div class="email mb-3">
							<label class="sr-only" for="email">Your Email</label>
							<input id="signup-email" name="email" type="email" class="form-control" placeholder="Email">
							@error('email')
              <p class="mt-1 small alert alert-danger shadow-sm">{{ $message }}</p>
              @enderror
						</div>
						<div class="password mb-3">
							<label class="sr-only" for="password">Password</label>
							<input id="password" name="password" type="password" class="form-control" placeholder="Create a password" required="required">
							@error('password')
              <p class="mt-1 small alert alert-danger shadow-sm">{{ $message }}</p>
              @enderror
						</div>
						<div class="password mb-3">
							<label class="sr-only" for="password_confirmation">Confirm Password</label>
							<input id="confirm-password" name="password_confirmation" type="password" class="form-control" placeholder="Confirm password" required="required">
						</div>
						
						<div class="text-center">
							<button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Register</button>
						</div>
					</form><!--//auth-form-->
					
					<div class="auth-option text-center pt-5">Already have an account? <a class="text-link" href="/" >Log in</a></div>
				</div><!--//auth-form-container-->	
				
				
					
				</div><!--//auth-body-->
			
				<footer class="app-auth-footer">
					<div class="container text-center py-3">
							
					</div>
				</footer><!--//app-auth-footer-->	
			</div><!--//flex-column-->   
		</div><!--//auth-main-col-->
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
			</div><!--//auth-background-overlay-->
		</div><!--//auth-background-col-->
	
	</div><!--//row-->

  </x-layout>
  
      
  