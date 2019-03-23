<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Rani's!</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->


  <!-- Optional theme -->
      <link rel="stylesheet" href="public/css/app.min.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <body>
    <!----Navigation atau navbar --------------------->
  <nav class="navbar navbar-inverse navbar-fixed-top"> 
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only"> Tootle Navigation </span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="" class="navbar-brand"> Banten Cyber Academy</a>
      </div>   
      
       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href=""> Home </a></li>
        <li><a href="profile.php"> Profile </a></li>
        <li><a data-toggle="modal" href='#modal-id'> Message </a></li>
        <li><a href="login.php"> Login </a></li>
      </ul>
      </div>
    </div>
  </nav>
<!------Navigation akhir----------------->


<!----section 1 slider ------------------>
   <div class="container">
      <div class="row col-lg-12">
          <div id="slider" class="carousel slides" data-ride="carousel">

  <!-- Indicators navigation sampingnya -->
            <ol class="carousel-indicators">
               <li data-target="#slider" data-slide-to="0" class="active"></li>
               <li data-target="#slider" data-slide-to="1"></li>
            </ol>

  <!-- Wrapper for slides -->
           <div class="carousel-inner" role="listbox">
              <div class="item active">
                 <img src="assets/image/iniaja.jpeg" class="img-responsive">
                 </div>
               <div class="item">
                   <img src="assets/image/iniaja2.jpeg" class="img-responsive">
                 </div>
              </div>

               <!-- Controls next prevoious button-->
              <a class="carousel-control" href="#slider" role="button" data-slide="prev">
                <span aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
            <a class="carousel-control" href="#slider" role="button" data-slide="next">
                <span aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>

           </div>
        </div>
      </div>

 
<!-- section 2---------------------------------------------------- -->
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h3 class="text-center"> Program </h3> 
      </div>

        <div class="row">
          <div class="col-md-10 col-md-offset-1 col-sm-10">
            <img src="assets/image/network.jpeg" class="img-circle" class="img-circle" height="180" width="180">
          </div>
        </div>

        <div class="modal fade" id="modal-id">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modal title</h4>
              </div>
              <div class="modal-body">
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
<!-- footer ini yaaaaaaaaaaaaaaaaaaaaaaaaa -->
<div class="footer">
  <p> Banten Cyber Academy</p>
</div>
<!--------footer cuy---------->

  </body>
</head>
</html>