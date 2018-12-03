<?php
$connexion = new PDO('mysql:host=localhost;dbname=lamined_wee-transfert;charset=utf8','lamined','wRqqOHRoTi');
$affiche="";
if (isset($_POST["submit"])) {

    $destinataire_mail = $_POST["destinataire"];
    $emeteur = $_POST["email_emetteur"];
    $mes = $_POST["message"];



    if ( $destinataire_mail != '' && $emeteur != '' && $mes != '')
    {
        $repertoire_courant = getcwd();
        $extension_des_fichier = ['pdf', 'png', 'gif', 'txt', 'JPG','jpg', 'css','svg','PSD'];
        $repertoire_de_telechargement_de_fichier = "/fichier/";
        $nom_fichier = $_FILES["fichier"]["name"];
        $taille_fichier = $_FILES["fichier"]["size"];
        $type_fichier = $_FILES["fichier"]["type"];
        $repertoire_temporaire = $_FILES["fichier"]["tmp_name"];
        // $extension_fichier = strtolower(end(explode('.', $nom_fichier)));
        $repertoire_uplaod = $repertoire_courant . $repertoire_de_telechargement_de_fichier . basename($nom_fichier);
        $telechargement = move_uploaded_file($repertoire_temporaire, $repertoire_uplaod);
        if ($telechargement)
        {
            $affiche= "Vos Donnees on été Envoyer avec Succes";
        }
        else
        {
            $affiche= "Vos Donnees on été Envoyer avec Succes";
        }
        $lien_de_telechargement= "http://localhost/transfert_complet/fichier/".$nom_fichier;


            $req=$connexion->prepare("INSERT INTO fichier(email_destinataire, email_emetteur, message, lien_fichier) VALUES(:email_destinataire,:email_emetteur,:message,:lien_fichier)")or die(print_r($connexion->errorInfo()));;
            $req->execute(array(
                'email_destinataire'=>$destinataire_mail,
                'email_emetteur'=>$emeteur,
                'message'=>$mes,
                'lien_fichier'=>$lien_de_telechargement,
            ));


        $to      = $destinataire_mail;
        $subject = 'Vous avez un recus un fichier';
        $message = $lien_de_telechargement;
        $headers = 'From: webmaster@example.com' . "\r\n" .
            'Reply-To: webmaster@example.com' . "\r\n" .
            'X-Mailer: PHP/';
        mail($to, $subject, $message, $headers);
    }
    else
    {
        $affiche= "Veuillez remplir tous les champ";
    }
}

?>
<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="public/css/stylnouv.css">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
 
 <!-- debut formulaire -->
    <div class="container contact-form">

            <form method="post" enctype="multipart/form-data">
                <div class="conteneur">
                    <div class="row">
                        <div class=" col-lg-12 col-md-12 log" >
                            <center><img src="public/img/LOGO_acs_group3.png" width="70" class="IMG" ></center>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-lg-12 col-md-12">
                            <h3 class="section-header"><span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"><span style="color:#1d8093">F.L.L.O</span> Transfert</span></h3>
                        </div>
                    </div>
                </div>
               <div class="row">
                    <div class=" col-lg-6 col-md-6">
                        <div  class="form-group files">
                            <input type="file" name="fichier" id="fichier" class="form-control" placeholder="*" value=""/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="destinataire" id="destinataire" class="form-control" placeholder="Email destinataire *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="email_emetteur"  id="email_emetteur" class="form-control" placeholder="votre Email *" value="" />
                        </div>
                       
                    </div>
                    <div class=" col-lg-6 col-md-6">
                        <div class="form-group">
                            <textarea name="message" id="message" class="form-control" placeholder=" Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btnContact" value="Send Message">Envoyer</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-lg-12 col-md-12">
                        <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s" style=" position: absolute;color: grey;border-radius: 1rem;background-color:white; font-size: 15px;padding: 0rem;">
                           <?php echo $affiche; ?>
                        </span>
                    </div>
                </div>
            </form>
   </div>
       
    <!-- fiN formulaire -->

<script src="public/js/jquery-3.3.1.min.js"></script>
<script src="public/js/jscrip.js"></script>
<script src="public/js/bootstrap.min.js"></script>
</body>
</html>

<style>
body
{
    background-image: url('public/img/oum.jpg');
    background-size:cover;
}
</style>