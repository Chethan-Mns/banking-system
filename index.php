<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Spark Banking System</title>
    <style>


hr {
  border: dotted #000 6px;
  border-bottom: none;
  width: 4%;
  margin: 100px auto;
}


.top-container {
  background-color: #E4F9F5;
  position: relative;
  padding-top: 100px;
}

.middle-container {
  margin: 100px 0;
}

.bottom-container {
  background-color: #66BFBF;
  padding: 50px 0 20px;
}

.skill-row {
  width: 50%;
  margin: 100px auto 100px auto;
  text-align: left;
}

.pro {
  text-decoration: underline;
}

.intro {
  width: 30%;
  margin: auto;
}

.contact-message {
  width: 40%;
  margin: 40px auto 60px;
}

.copyright {
  color: #EAF6F6;
  font-size: 0.75rem;
  padding: 20px 0;
}

.top-cloud {
  position: absolute;
  right: 300px;
  top: 40px;
}

.bottom-cloud {
  position: absolute;
  left: 250px;
  bottom: 300px;
}

.code-img {
  width: 25%;
  float: left;
  margin-right: 30px;
}

.chilli-img {
  width: 25%;
  float: right;
  margin-left: 30px;
}



    </style>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
<div  id="carouselExampleFade" class="images carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/bankee.jpg" class="d-block w-100" alt="..." style="height:600px;">
    </div>
    <div class="carousel-item">
      <img src="img/open.jpeg" class="d-block w-100 " alt="..." style="height:600px;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br><br>
    <div class="middle-container">
    <div class="profile">
    <div class="skills">
      <div class="skill-row">
        <img class="code-img" src="img/paym1.jpg" alt="code-img">

        <h3>Payment</h3>
        <p>A user can easily transfer money from their account to another account.payment is the voluntary tender of money or its equivalent or of things of value by one party.</p>
        <a href="transfermoney.php"><button class="btn btn-primary">Payment</button></a>
      </div>

      <div class="skill-row">
        <img class="chilli-img" src="img/hisi.jpg" alt="chillies-img">

        <h3>History</h3>
        <p>History optiom enables the bank to see the transactions which were done in the past. Maintaining the transaction history is very important to a bank.</p>
        <a href="transactionhistory.php"><button class="btn btn-primary">History</button></a>
      </div>
    </div>


      </div>
      <footer class="text-center mt-5 py-2" style="background:none;">
        <p>&copy Made by M.N.S.CHETHAN</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>