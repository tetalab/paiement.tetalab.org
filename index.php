<?php
include('config/stripe.php');
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
    background: url('/img/background.jpg') no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    color:#fff;
    background-color:#333;
    font-family: 'Open Sans',Arial,Helvetica,Sans-Serif;
    margin-top: 60px;
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

#myCarousel {
    font-size:90%;
}

.carousel-controls-mini {
    margin-left:42%;
}

.carousel-controls-mini > a {
    border:1px solid #eee;
    margin:1px;
    width:20px;
    display:block;
    float:left;
    text-align:center;
}

#carousel-bounding-box {
  margin:0 auto;
  width:300px;
}



  </style>
</head>
<body>
  <div class="container">
    <div class="row-fluid">

      <div class="span6">

        <img width="300" src="https://i.imgur.com/yaEkLQW.jpg"> 
        <h1 class="pull-center"><strong>ADHESION AU TETALAB</strong></h1>
        <p class="lead pull-center">Paiment de la cotisation annuelle</p>
        <p>Pour être en accord avec la rule n°1 du <a href="http://rtfm.tetalab.org" class="btn btn-danger">manuel </a> : Payez votre cotisation</p>
        <p>Le Tetalab est une association loi 1901, ne reclame et ne bénéficie d'aucune subvention.</p>
        <p>Les membres de cette association participent à ses frais de fonctionnement par une côtisation annuelle.</p>
        <p>Cette côtisation est de 50€ par an.</p>

      </div>

      <div class="span6">

        <h1><i class="icon-credit-card"></i> Par carte bancaire</h1>
        <p>Ce paiement utilise <a href"http://stripe.io" target="_blank">Stripe.io</a>, beaucoup plus cool karma que paypal.</p>
        <form action="step_2.php" method="POST">
          <script
            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="<?php echo $stripe_config['button_key']; ?>"
            data-image="/img/logo.png"
            data-name="Cotisation Tetalab"
            data-description="Adh&eacute;sion annuelle (50 euros)"
            data-amount="5000"
            data-currency="EUR"
            data-billing-address=true
            data-label="Payer sa cotisation par CB">
          </script>
        </form>

        <h1><i class="icon-rocket"></i> Par transfert bancaire</h1>
        <p>Vous pouvez faire un transfert depuis votre banque en utilisant le RIB du Tetalab.</p>
        <p><a href="http://docs.tetalab.org/rib.txt" class="btn btn-primary">Téléchargez le RIB du Tetalab </a></p>

      </div>
    </div>
  </div>
</body>
</html>
