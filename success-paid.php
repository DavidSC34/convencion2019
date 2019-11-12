<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>WBC Membership</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Barlow|Barlow+Condensed|Barlow+Semi+Condensed|Sorts+Mill+Goudy&display=swap" rel="stylesheet">   

  <!-- Custom styles for this template -->
  <link href="css/grayscale.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="http://wbcboxing.com/memberbeta/"> <img src="img/Header-01.png" class="img-fluid" alt=""> </a>

      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <!-- <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#page-top">Home</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="http://wbcboxing.com/memberbeta/">Benefits</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#projects">Projects</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="http://wbcboxing.com/memberbeta/">Join us</a>
          </li>
           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="http://wbcboxing.com/memberbeta/">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="http://wbcboxing.com/membershipbeta/login.php" target="_blank" >Log In</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <section id="about" class="about-section text-center">
   <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-white">Thanks for joining to the WBC Family!!</h1><br/>
        <h4 class="text-white mx-auto mt-2 mb-5">Shortly soon a WBC Membership representative will contact you to finalize your application to the program.   <br/><br/><br/> To access the members page use the following information: <br/><br/>
         <strong>username: wbcmember</strong><br>
         <strong>password: greenandgold</strong>

        </h4>
     <!--   <a href="#about" id="btn-member" class="btn btn-primary js-scroll-trigger">About the <br/>benefits</a> -->
       <br/><br/>
      </div>

    </div>
  </section>

 
<!-- Portfolio Modal 1 -->
  <div class="portfolio-modal modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
         <div class="modal-header border-bottom-0">
              <h5 class="modal-title" id="exampleModalLabel">Please fill the blanks</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>
        <form  id="form-login" action="login.php" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label for="email1">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="" placeholder="">
            
          </div>
          <div class="form-group">
            <label for="password1">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          </div>
         
        </div>
        <div class="modal-footer border-top-0 d-flex justify-content-center">
          <button type="submit" class="btn btn-primary"  id="btn-submit" data-dismiss="modal">Submit</button>
        </div>
      </form>
      </div>
    </div>
  </div>

 

  

  
  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <img src="img/Footer-01.png" class="img-fluid" alt=""> <br><br><br>
    <div class="container">
      Copyright &copy; WBC Membership 2019
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/jquery/jquery.core.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/grayscale.min.js"></script>


  <script type='text/javascript'>
 
     $(document).ready(function(){
           $("#btn-submit").click(function(event) {
                
                    event.preventDefault();          
                    var data = $('#form-login').serialize(); 
                    console.log(data);
                      $.ajax({
                            type: "POST",
                            url: "login.php",                           
                            data: $('#form-login').serialize(),
                            success: function(response){
                              var msg = JSON.parse(response);
                              console.log(msg.exito);
                              $("#loginModal").modal('hide');
                              if (msg.exito) {
                                   window.location.href = "http://wbcboxing.com/membershipbeta/index.php";

                                     
                              }else{
                                   alert("Wrong user or password. Please try again.");
                              }
                              
                            },
                            error: function(){
                              alert("Error");
                            }
                          });

                   
                  return false; 
            });
   });
         
  </script>
</body>

</html>
