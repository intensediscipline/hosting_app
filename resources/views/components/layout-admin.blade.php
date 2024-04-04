<!DOCTYPE html>
<html lang="en"> 
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" href="favicon.ico"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


    @vite(['resources/scss/app.scss'])
    @vite(['resources/js/app.js'])
    <title>Hosting App Admin</title>
</head> 

<body class="app">   	
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

    {{$slot}}
	    
	    <footer class="app-footer">
		    <div class="container text-center py-3">
		         
		       
		    </div>
	    </footer><!--//app-footer-->
	    
    </div><!--//app-wrapper-->    					


   

</body>
</html> 

