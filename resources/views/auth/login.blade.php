<!DOCTYPE html>
<html lang="en">

  <head>
    
    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Login</title>
    
    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/plugin.css')}}">
    
    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/styles.css')}}">
    
    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
 </head>

  <body>
    
    
	
	<!-- Preloader Start -->
    <div class="preloader">
	  <p>Cargando...</p>
     </div>
     <!-- Preloader End -->



    <!-- Contact Start -->
    <section id="contact" class="section-space-padding">
       <div class="container">         
         <div class="margin-top-30 margin-bottom-50">
           <div class="row">
           
             <div class="col-md-offset-3 col-sm-offset-2 col-md-6 col-sm-8">   
                 
               <div class="row">
                 <div class="contact-us-detail"><p style="color: white;">Bienvenido</p></div>
                    <br>
                    <br>
                 <x-auth-card>
                    <x-slot name="logo">
                        
                    </x-slot>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    

                    <form class="contact-us pattern-bg" method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <!-- Email Address -->
                        <div class="col-sm-12">
						              <div class="form-group">
                            <x-input id="email" class="form-control" type="text" name="email" :value="old('email')" required autofocus placeholder="Username"/>
						               </div>
                        </div>
                        

                        <!-- Password -->
                        <div class="col-sm-12">
					    <div class="form-group">
                        <x-input id="password" class="form-control" placeholder="Contraseña"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
						 </div>
                        </div>

                        

                        <div class="text-center">
                            <x-button class="ml-3">
                                {{ __('Iniciar sesión') }}
                            </x-button>
                        </div>
                    </form>
                </x-auth-card>                   
                </div>
			  </div>
            </div>
           
        
        </div>
       </div>
     </section>
     <!-- Contact End -->
     
        
        
        
    <!-- Footer Start -->
    <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h1 class="footer-logo">
                        <img src="{{ asset('static/img/logo-blue.png')}}" alt="Footer Logo Blue">
                        </h1>
                        <p>© Dinamita 2022</p>
                    </div>
                </div>
            </div>
        </footer>
    <!-- Footer End -->
    
    
    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="icon-arrow-up-circle"></i></a>
    <!-- Back to Top End -->
    
    
    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="{{ asset('static/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('static/js/plugin.js')}}"></script>
    
    <!-- Main Javascript File  -->
    <script type="text/javascript" src="{{ asset('static/js/scripts.js')}}"></script>
  
  
  </body>
 </html>