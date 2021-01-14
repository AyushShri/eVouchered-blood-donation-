<?php 
    require("common.php");
    if (isset($_SESSION['email'])) {
    header('location: available.php');
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Blood donation</title>
        <meta charset="UTF-8">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" type="text/css" href="aos.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
    <body>
        
        <?php
            require('header.php');
        ?>

        <div class="banner">
            <center>
            <div class="banner-content">
                <h1>e-vouchered blood donation system</h1>
                <p>Bringing all blood banks on a single platform</p><br>
                <a  href="donate.php" class="btn btn-danger btn-lg active">Donate Now</a>
            </div>
            </center>
        </div>
  <div class="container">
      <br><br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        <div class="item active">
            <img class="img-slider" src="img/q10.jpg" alt="blood donation" style="width: 100%; height: 350px">
        </div>

        <div class="item">
            <img class="img-slider" src="img/q07.png" alt="blood donation" style="width:100%; height:450px">
        </div>

        <div class="item">
            <img class="img-slider" src="img/q12.jpg" alt="blood donation" style="width: 100%; height: 350px">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
      <br><br><br>
                <div class="row text-center" id="item_list">
                    <div class="col-md-4 block" data-aos="fade-up" data-aos-duration="600">
                        <a href="available.php" >
                            <div class="thumbnail">
                                <img src="img/b1.jpg" alt="">
                                <div class="caption">
                                    <h3>Blood Availability</h3>
                                    <p></p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-md-4 block" data-aos="fade-down" data-aos-duration="500">
                        <a href="donate.php" >
                            <div class="thumbnail">
                                <img src="img/b2.jpeg" alt="">
                                <div class="caption">
                                    <h3>Donate Blood</h3>
                                    <p></p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-md-4 block" data-aos="fade-up" data-aos-duration="600">
                        <a href="facts.php" >
                            <div class="thumbnail">
                                <img src="img/b6.jpg" alt="">
                                <div class="caption">
                                    <h3>Blood Donation Facts</h3>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            
            
  </div><br><br><br>
  <div class="container">
      <div class="row">
          <div class="col-md-4 col-md-offset-2" style="margin-bottom: 15px" data-aos="fade-up-right" data-aos-duration="600">
              <img src="img/q11.gif" style="height: 350px; width: 400px">
          </div>
          <div class="col-md-4 col-md-offset-1" data-aos="fade-up-left" data-aos-duration="600">
              <form method="POST" action="user_registration_script.php">
                            <div class="form-group">
                <input type="text" name="Name" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" name="Email" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" name="Subject" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="Message" id="" cols="30" rows="7" name="text" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <button type="submit" value="Send Message" class="btn btn-danger py-3 px-5">
			        <span>Send Message </style> </span> 
                  </button>
				</div>
              </form><br><br>
          </div>
      </div>
  </div>
  <?php
            require('footer.php');
        ?>
        
    </body>
</html>
