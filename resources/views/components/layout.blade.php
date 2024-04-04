<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    @vite(['resources/scss/app.scss'])
    @vite(['resources/js/app.js'])
    <title>Hosting App</title>
</head> 
<body class="app-login ">
    @if (session()->has('success'))
    <div class="container container--narrow mt-3">
      <div class="alert alert-success text-center">
        {{session('success')}}
      </div> 
    </div>
  @endif
  @if (session()->has('error'))
    <div class="container container--narrow mt-3">
      <div class="alert alert-danger text-center">
        {{session('error')}}
      </div> 
    </div>
  @endif
  <div class="row g-0 app-auth-wrapper">
		<div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
			<div class="d-flex flex-column align-content-end">
				<div class="app-auth-body mx-auto">	
					<div class="app-auth-branding mb-4"><a class="app-logo" href="/"><img class="logo-icon me-2" src="/images/app-logo.svg" alt="logo"></a></div>
    {{ $slot }}
</body>

</html>