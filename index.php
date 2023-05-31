<?php
    session_start();
    require 'assets/dbconn.php';
?>

<!DOCTYPE html>
<html lang="fr">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Test/Récrut</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="shortcut icon" href="images/logo-monartisan.png" />
      
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- awesome fontfamily -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

   </head>
   <!-- body -->
   <body class="main-layout" id="body">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="" /></div>
      </div>
      <!-- end loader -->
      <div id="mySidepanel" class="sidepanel">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
         <a class="active" href="#body">Accueil</a>
         <a href="#about">A propos</a>
         <a href="#nosFormules">Nos ofrres</a>
         <a href="#declaSinistre">Declarer un sinistre</a>
         <a href="#footer">Contact</a>
      </div>
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="head-top">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-3">
                     <div class="logo">
                        <a href="index.html"><img src="images/logo-monartisan.png" style="width:100px"/></a>
                        & <img src="images/sunu-logo.png" style="width:100px" alt="" srcset="">
                     </div>
                  </div>
                  <div class="col-sm-9">
                     <ul class="email text_align_right">
                        <li class="d_none"> <a href="#footer" >Nous joindre</a> </li>
                        <li> <button class="openbtn" onclick="openNav()"><img src="images/menu.png"></button></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header -->
      <!-- start slider section -->
      <div class=" banner_main">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-5">
                  <div class="bluid">
                     <h1 style="z-index: 1;color:#ea580c">Assistance <br><span class="black">Incendits <br> Domestique</span></h1>
                     <p>L'assurance d'un service premium, éconmique et rapide.</p>
                     <div class="div_btn_banner" style="display:flex; justify-content: space-between;">
                        <a class="read_more" href="#about">Par ici </a>
                        <a class="read_more" href="#declereSinitre" style="line-height:22px">Declarer un sinistre</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-7">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption relative">
                                 <div class="banner_img">
                                    <figure><img src="images/img_1.jpeg" alt="#"/></figure>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption relative">
                                 <div class="banner_img">
                                    <figure><img src="images/img_2_.jpg" alt="#"/></figure>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption relative">
                                 <div class="banner_img">
                                    <figure><img src="images/img_9.jpg" alt="#"/></figure>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end slider section -->
      <!-- about -->
      <div id="about" class="about" id="about">
         <div class="container">
            <div class="row">
               <div class="col-md-6 offset-md-6">
                  <div class="titlepage text_align_right">
                     <h2>Qu'est ce que l'<b>AID</b> ?</h2>
                     <p style="background: rgb(0, 0, 0); padding:20px">"La garantie assistance  incidents domestiques ou AID</b> est une offre d'assurance innovante qui vous garantit un dépannage d'urgence en cas de sinistre domestique."</p>
                     <a class="read_more" href="#pourquoiS"><i class="fa fa-facebook-f"></i> Par ici</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- our birds -->
      <div class="birds" id="pourquoiS">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>Pourquoi souscrire à l'<b>Assistance Incidents Domestiques ?</b></h2>
                     <p>Personne n'est à l'abri d'une panne imprévue à domicile. Si cela arrive, il est indispensable d'intervenir rapidement pour trouver des solutions adéquates. <b>Souscrivez</b> à notre assurance <b>et beneficiez</b> d'une intervention rapide et efficace <b>en cas de panne</b> dans votre logement.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <!-- slider bird1 -->
               <div class="col-md-7 padding_01">
                  <div id="bird1" class="carousel slide our_birds" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#bird1" data-slide-to="0" class="active"></li>
                        <li data-target="#bird1" data-slide-to="1"></li>
                        <li data-target="#bird1" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <img class="first-slide" src="images/img_12.jpeg" alt="First slide">
                           <div class="container">
                              <div class="carousel-caption positi_abso">
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="second-slide" src="images/img_17.jpg" alt="Second slide">
                           <div class="container">
                              <div class="carousel-caption positi_abso">
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="third-slide" src="images/img_18.jpg" alt="Third slide">
                           <div class="container">
                              <div class="carousel-caption positi_abso">
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="third-slide" src="images/img_19.jpg" alt="Third slide">
                           <div class="container">
                              <div class="carousel-caption positi_abso">
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#bird1" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#bird1" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
               <!-- end slider bird1 -->
               <!-- slider bird2 -->
               <div class="col-md-5 padding_01">
                  <div id="bird2" class="carousel slide our_birds" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#bird2" data-slide-to="0" class="active"></li>
                        <li data-target="#bird2" data-slide-to="1"></li>
                        <li data-target="#bird2" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <img class="first-slide" src="images/1685192238531.jpg" alt="First slide">
                           <div class="container">
                              <div class="carousel-caption positi_abso">
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="second-slide" src="images/img_19.jpg" alt="Second slide">
                           <div class="container">
                              <div class="carousel-caption positi_abso">
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="third-slide" src="images/img_17.jpg" alt="Third slide">
                           <div class="container">
                              <div class="carousel-caption positi_abso">
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="third-slide" src="images/1685192238531.jpg" alt="Third slide">
                           <div class="container">
                              <div class="carousel-caption positi_abso">
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#bird2" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#bird2" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
               <!-- end slider bird2 -->
               <!-- slider bird3 -->
               <div class="col-md-5 padding_01">
                  <div id="bird3" class="carousel slide our_birds" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#bird3" data-slide-to="0" class="active"></li>
                        <li data-target="#bird3" data-slide-to="1"></li>
                        <li data-target="#bird3" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <img class="first-slide" src="images/img_19.jpg" alt="ok">
                           <div class="container">
                              <div class="carousel-caption positi_abso">
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="second-slide" src="images/img_seize.jpg" alt="Second slide">
                           <div class="container">
                              <div class="carousel-caption positi_abso">
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="third-slide" src="images/img_14.jpg" alt="Third slide">
                           <div class="container">
                              <div class="carousel-caption positi_abso">
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="third-slide" src="images/img_17.jpg" alt="Third slide">
                           <div class="container">
                              <div class="carousel-caption positi_abso">
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#bird3" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#bird3" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
               <!-- end slider bird3 -->
               <!-- slider bird4 -->
               <div class="col-md-7 padding_01 margin_topmini70p">
                  <div id="bird4" class="carousel slide our_birds" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#bird4" data-slide-to="0" class="active"></li>
                        <li data-target="#bird4" data-slide-to="1"></li>
                        <li data-target="#bird4" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <img class="first-slide" src="images/img_1.jpeg" alt="First slide">
                           <div class="container">
                              <div class="carousel-caption positi_abso">
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="second-slide" src="images/img_17.jpg" alt="Second slide">
                           <div class="container">
                              <div class="carousel-caption positi_abso">
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="third-slide" src="images/img_14.jpg" alt="Third slide">
                           <div class="container">
                              <div class="carousel-caption positi_abso">
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="third-slide" src="images/img_13.jpg" alt="Third slide">
                           <div class="container">
                              <div class="carousel-caption positi_abso">
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#bird4" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#bird4" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
                  <a class="read_more"  style="float: right; margin-top: 60px;" href="#nosFormules">Suivant</a>
               </div>
               <!-- end slider bird4 -->
            </div>
         </div>
      </div>
      <!-- end our birds -->
      <!-- testimonial -->
      <div class="testimonial" id="nosFormules">
         <div class="container">
            <div class="row">
               <div class="col-md-9 offset-md-3">
                  <div class="titlepage text_align_right">
                     <h2>Souscrire</h2>
                     <span>Soucriver et bénéficier d’un dépannage en cas d’incident
                        domestique.<br> Vous pouvez déclarer le sinistre auprès de
                        votre assureur ou <br> le faire directement sur l’application
                        mobile <b>Mon Artisan</b>.</span>
                  </div>
               </div>
            </div>
            <div class="row d_flex">
               <div class="col-md-7">
                  <div id="testimo" class="carousel slide our_testimonial" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#testimo" data-slide-to="0" class="active"></li>
                        <li data-target="#testimo" data-slide-to="1"></li>
                        <li data-target="#testimo" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption posi_in">
                                 <div class="testomoniam_text">
                                    <i><img src="images/icone-plomberie.png" alt="#"/></i>
                                   <div class="div" style="border-radius:30px;">
                                    <h3 style="font-weight: bold;
                                    color: #ea580c; text-align:left; margin-bottom:7px;">HELP</h3>
                                    <p>● Plafond garantie : 250 000F CFA(Matériel: 150 000F CFA)</p>
                                    <p>● Métiers : Plomberie - Electricité - Serrurerie </p>
                                    <p>● Fréquence : 3 presentations /jours</p>
                                    <p>● Gestionnaire client / Conseiller client travaux : 24h/24</p>
                                    <p>● Facturation : 30 000 F CFA- prime annuelle</p>
                                    <p>● Urgences : Dans les 24h</p>
                                    <p>● Disponibilité service : 8h-18h</p>
                                    <p>● Maintenance préventive : Check-up annuel + rapport</p>
                                   </div>
                                   <a class="read_more cls_btn_scr" href="#about">Je souscris</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption posi_in">
                                 <div class="testomoniam_text">
                                    <i><img src="images/icone-fixation.png" alt="#"/></i>
                                    <h3 style="font-weight: bold;
                                    color: #ea580c; text-align:left; margin-bottom:7px;"">REPAIR</h3>
                                    <p>● Plafond garantie : 500 000 F CFA (Matériel : 250 000 F CFA)</p>
                                    <p>● Métiers : Plomberie – Électricité – Serrurerie – Froid</p>
                                    <p>● Fréquences : Null</p>
                                    <p>● Gestionnaire client / Conseiller travaux : Dédié 24h/24</p>
                                    <p>● Facturation : 50 000 F CFA - prime annuelle</p>
                                    <p>● Urgences : Dans les 12 heures</p>
                                    <p>● Disponibilité service : 7h-22h</p>
                                    <p>● Maintenance préventive : Check-up semestrielle + rapport.</p>
                                    <a class="read_more cls_btn_scr" href="#about" >Je souscris</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container"> 
                              <div class="carousel-caption posi_in">
                                 <div class="testomoniam_text">
                                    <i><img src="images/icone-carrelage.png" alt="#"/></i>
                                    <h3 style="font-weight: bold;
                                    color: #ea580c; text-align:left; margin-bottom:7px;"">FIX</h3>
                                    <p>● Plafond garantie : 1 000 000 F CFA (Matériel : 500 000 F CFA)</p>
                                    <p>● Métiers : Plomberie – Électricité – Serrurerie – Étanchéité</p>
                                    <p>● Fréquences : Null</p>
                                    <p>● Gestionnaire client / Conseiller travaux : Dédié 24h/24</p>
                                    <p>● Facturation : 100 000 F CFA - prime annuelle </p>
                                    <p>● Urgences : Dans les 2 heures</p>
                                    <p>● Disponibilité service : 24h/24</p>
                                    <p>● Maintenance préventive : Check-up trimestrielle + rapport.</p>
                                    <a class="read_more cls_btn_scr" href="#about">Je souscris</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#testimo" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#testimo" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="bird_img">
                     <figure><img src="images/img_10_.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end testimonial -->
      <!-- newsletter -->
      <div class="newsletter">
         <div class="container">
            <div class="row">
               <div class="col-md-9">
                  <div class="titlepage text_align_left">
                     <h2>Newsletter</h2>
                     <p>Abonnez-vous à notre platforme pour rester au parfum de nos activités.</p>
                  </div>
               </div>
               <div class="col-md-12">
                  <form class="newslatter_form">
                     <input class="news" placeholder="xyz@gmail.com" type="text" name="Enter your email">
                     <button class="subs_btn">S'abonner</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- end newsletter -->
      <!--  contact -->
      <div  class="contact" id="declaSinistre">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 no_ld">
                  <div class="titlepage text_align_right">
                     <h2>Un <b>sinistre</b> s'est produit ?</h2>
                     <p>Remplissez ce fomulaire pour une prise e charge.</p>
                  </div>
               </div>
               <div class="col-md-5 ">
                  <div class="contact_img">
                     <figure><img src="images/monartisan-app.png" alt="#"/></figure>
                  </div>
               </div>
               <div class=" col-md-6 offset-md-1" id="declaSinitre">
                  <form id="request" class="main_form" action="assets/envoiedonne.php" method="POST">
                     <div class="row">
                        <div class="col-md-12 no_mo">
                           <div class="titlepage text_align_right">
                              <h2>Un <b>sinistre</b> s'est produit ? </h2>
                              <p>Declarer un sinistre ! <br> Remplissez ce fomulaire pour une prise en charge.</p>
                           </div>
                        </div>
                        
                        <div class="col-md-12 ">
                        <label for="exampleInputName">Selectionner l'assurance *</label>
                           <div class="alert_">
                           <?php include('assets/message.php'); ?>
                           </div>
                        <select class="contactus form-select form-select-lg-3" name="assurance">
                        <option selected>Selectionner l'assurance</option>
                           <?php
                             $con = mysqli_connect("localhost","root","","bd_mon_artisant") or die("Impossible de joindre la BD");
                             $query = "SELECT * FROM `table_assurances`";
                             
                             $result = mysqli_query($con, $query);
                             while($row = mysqli_fetch_array($result)){
                              ?>
                              <option value="<?php echo $row['libele_assurance'];?>"><?php echo $row['libele_assurance'];?></option> 
                             <?php }?>
                        </select>
                        </div>
                        <div class="col-md-4">
                           <label for="exampleInputName">Nom et prénoms *</label>
                           <input type="text" class="contactus"  placeholder="Nom et Prénoms" type="text" name="nomprenoms" Required>
                        </div>
                        <div class="col-md-4">
                        <label for="exampleInputName">Email *</label>
                           <input type="text" class="contactus"  placeholder="xyz@gmail.com" type="email" name="email" Required>
                        </div>
                        <div class="col-md-4">
                           <label for="exampleInputName">Contact *</label>
                           <input class="contactus" placeholder="Contact" type="telephone" name="contact" Required> 
                        </div>
                        <div class="col-md-6">
                        <label for="exampleInputName">Lieu du sinistre *</label>
                           <input class="contactus" placeholder="Entrez le de l'accident" type="text" name="lieudusinistre" Required> 
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputName">Jour de l'accident *</label>
                           <input class="contactus" placeholder="Date du sinistre" type="date" name="datesinistre" Required> 
                        </div>
                        <div class="col-md-12">
                        <label for="exampleInputName">Nature de l'intervention *</label>
                        <select class="contactus form-select form-select-lg-3" id="exampleFormControlSelect1" name="natureinter">
                           <?php
                             $con = mysqli_connect("localhost","root","","bd_mon_artisant") or die("Impossible de joindre la BD");
                             $query = "SELECT * FROM `table_services`";
                             
                             $result = mysqli_query($con, $query);
                             while($row = mysqli_fetch_array($result)){
                              ?>
                              <option value="<?php echo $row['libele_service'];?>"><?php echo $row['libele_service'];?></option> 
                             <?php }?>
                        </select>
                        </div>
                        <div class="col-md-12">
                        <label for="exampleInputName">Décriver le sinistre produit *</label>
                           <textarea class="contactus textarea"  placeholder="Details" type="type" name="details" Required></textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn" type="submit" name="declaration_sinistre">Déclarer</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
      <!-- footer -->
      <footer>
         <div class="footer" id="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-10 offset-md-1 border-top1">
                     <a class="logo_footer" href="index.html"><img src="images/logo-monartisan.png"style="height:131px" alt="#" /></a>
                  </div>
                  <div class="col-md-5">
                     <div class="reader">
                        <h3>Adresse</h3>
                        <ul>
                           <li>Abidjan, Cote d'Ivoire<br>
                              Cocody Riviera Faya.
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-5 col-md-4">
                     <div class="reader">
                        <h3>Contacts</h3>
                        <ul>
                           <li>(+225) 86 86 28 26<br>
                              (+225) 20 00 36 30
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-3 ">
                     <div class="reader">
                        <h3>Email</h3>
                        <ul>
                           <li> <a href="Javascript:void(0)">contact@monartisant.ci<br>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-10 offset-md-1">
                     <ul class="social_icon text_align_center">
                        <li> <a href="Javascript:void(0)"><i class="fa fa-facebook-f"></i></a></li>
                        <li> <a href="Javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                        <li> <a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright text_align_center">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">
                        <p style="color:#ea580c">Copyright 2023 <a href="#"></a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>