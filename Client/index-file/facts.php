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
        <style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  height: 100%; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
}
.img1 { background-image: url("img/b8.jpg"); }
.img2 { background-image: url("img/b4.jpg"); }
.img3 { background-image: url("img/b5.jpg"); }
.img4 { background-image: url("img/b7.jpg"); }
.img5 { background-image: url("img/b9.jpg"); }


.bg-text {
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.4); 
  color: white;
  font-weight: bold;
  font-size: 80px;
  border: 10px solid #f1f1f1;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 300px;
  padding: 20px;
  text-align: center;
}
.facts{
    background-color: rgba(0,0,0,0.7);
    top: 5%;
    bottom: 4%;
    text-align: center;
    padding: 2%;
    color: white;
}
.fcontent{
    background-color: rgba(0,0,0,0.4);
    margin: 6%;
    color: white;
    padding: 3%;
    font-size: 24px;
}
h1{
    font-family: cursive;
    font-weight: bold;
    font-size: 42px;
}
</style>
    </head>
    <body>
      <?php
            require 'header.php';
        ?>
        <div class="bg-image img1">
            <div class="facts">
                <h1>Why donate blood?</h1>
            </div>
            <div class="fcontent">
                <ul>
                    <li>Your blood saves more than one life when it is separated into its components(red cells, plasma and platelets).</li>
                    <li>There is a constant need for regular blood supply because blood can be stored for only a limited time before use.</li>
                    
                </ul>
            </div>
        </div>
        <div class="bg-image img2">
            <div class="facts">
                <h1>Facts about Blood</h1>
            </div>
            <div class="fcontent">
                <ul>
                    <li>One unit of donated blood can save up to three lives.</li>
                    <li>You can donate blood every three months. It only takes 48 hours for your body fluids to be completely replenished.</li>
                    <li>A red blood cell can make a complete circuit of your body in 30 seconds.</li>
                    <li>Scientists have estimated the volume of blood in the human body to be eight percent of body weight.</li>
                </ul>
            </div>
        </div>
        <div class="bg-image img3">
            <div class="facts">
                <h1>Benefits of donating blood</h1>
            </div>
            <div class="fcontent">
                <ul>
                    <li>People who donate blood are 88% less likely to suffer a heart attack and 33% less likely to acquire any type of cardiovascular disease.</li>
                    <li>Blood Center performs numerous tests on the donated blood. Therefore regular blood donation helps in sheilding you from serious diseases.</li>
                    
                </ul>
            </div>
        </div>
        <div class="bg-image img4">
            <div class="facts">
                <h1>Before you donate</h1>
            </div>
            <div class="fcontent">
                <ul>
                    <li>Requirement before Blood Donation is that your weight should be atleast 45 kgs , be at least 18 years old and be healthy in general.</li>
                    <li>If you have any particular health concerns then inform the blood bank at the time of blood donation.</li>
                    <li>Donating blood is a safe, simple, and rewarding experience that usually takes 30 minutes.</li>
                </ul>
            </div>
        </div>
        <div class="bg-image img5">
            <div class="facts">
                <h1>Post Donation</h1>
            </div>
            <div class="fcontent">
                <ul>
                    <li>During pre-donation screening, a blood bank employee will ask you some questions about your health, lifestyle, and disease risk factors. All of this information is confidential.</li>
                    <li>An employee will perform a short health exam, taking your pulse, temperature and blood pressure. A drop of blood from your finger will also be tested to ensure that your blood iron level is sufficient for you to donate.</li>
                    <li>All medical equipment used for this test, as well as during the donation process, is sterile, used only once and then disposed.</li>
                </ul>
            </div>
        </div>
        

        <?php
            require 'footer.php';
        ?>
<script type="text/javascript" src="aos.js"></script>
</body>
</html>