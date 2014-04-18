<?php
// Set your secret key: remember to change this to your live secret key in production
// See your keys here https://manage.stripe.com/account

require './stripe-php/lib/Stripe.php';

include('config/stripe.php');

if ($_POST)
{

        Stripe::setApiKey($stripe_config['api_key']);

        // Get the credit card details submitted by the form
        $token = $_POST['stripeToken'];

        // Create the charge on Stripe's servers - this will charge the user's card
        try {
                $charge = Stripe_Charge::create(array(
                  "amount" => 5000, // amount in cents, again
                  "currency" => "eur",
                  "card" => $token,
                  "description" => $_POST['stripeEmail'])
                );
                $msg =  "Paiement ok, Merci.";
        } catch(Stripe_CardError $e) {
                  // The card has been declined
                $msg = "Paiement refus&eacute;";
        }
}else{
$msg = "glop !";
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Paiement tetalab</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" type="text/css" rel="stylesheet">

        <style type="text/css">
            @import url('http://fonts.googleapis.com/css?family=Open+Sans:200,300');

body {
    background: url('/img/background_step_2.jpg') no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    color:#fff;
    background-color:#333;
    font-family: 'Open Sans',Arial,Helvetica,Sans-Serif;
}

a:link, a:visited {
    color:#eee;
}

.block {
    background-color:rgba(0,0,0,0.2);
    height:370px;
    padding-left:12px;
    padding-right:12px;
}

.block-sm {
    height:180px;
}

.btn-flat {
    font-family: 'Open Sans',Arial,Helvetica,Sans-Serif;
    border-radius:0px;
    border-width:0;
    background-image:none;
    padding:16px;
    margin:0 auto;
    margin-top:15px;
    width:70%;
    font-size:20pt;
}

/* mini carousel */
.carousel-inner img {
    width:100%;
    height:100%;
}


        </style>
    </head>

    <!-- HTML code from Bootply.com editor -->

    <body  >

        <div class="container">
  <br>
  <div class="row-fluid">
    <div class="span10 offsetHalf">
       <img width="300" src="https://i.imgur.com/yaEkLQW.jpg">

    </div>
  </div>
   <br><br><br>
    <div class="row-fluid">
      <h1 class="pull-center"><strong>ADHESION AU TETALAB</strong></h1>
      <p class="lead pull-center"><?php echo $msg ?> </p>
    </div>
  <br><br><br><br>

          </div>
        </div>



    </body>
</html>








