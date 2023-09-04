<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation d'envoi de mail</title>
    <!-- Inclure les fichiers CSS de Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body id="body-mail">
<div class="container mt-5">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-md-6 row-mail">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title large-text bold-text">Mail envoyé avec succès</h5>
                    <p class="card-text small-text">Votre e-mail a été envoyé avec succès.</p>
                    <a href="index.php" class="btn btn-primary">Retour à l'accueil</a>
                </div>
            </div>
        </div>
    </div>
</div>



    <?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


function verifdonnées($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifier que la demande HTTP est une méthode POST, ce qui signifie qu'un formulaire a été soumis.
    // Récupérer les données du formulaire
    $nom = verifdonnées($_POST['nom']); 
    // Récupère la valeur du champ 'nom' du formulaire et la stocke dans la variable $nom.
    
    $email = verifdonnées($_POST['mail']);
    // Récupère la valeur du champ 'mail' du formulaire et la stocke dans la variable $email.

    $subject = verifdonnées($_POST['subject']);
    // Récupère la valeur du champ 'subject' du formulaire et la stocke dans la variable $subject.

    $message = verifdonnées($_POST['message']);
    // Récupère la valeur du champ 'message' du formulaire et la stocke dans la variable $message.
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Remplacez par l'adresse de votre serveur SMTP
    $mail->SMTPAuth = true;
    $mail->Username = 'mohamedyani2019@gmail.com'; // Remplacez par votre nom d'utilisateur SMTP
    $mail->Password = 'dnvjbddgfkmploga'; // Remplacez par votre mot de passe SMTP
    $mail->SMTPSecure = 'tls'; // Vous pouvez utiliser 'ssl' au lieu de 'tls' si nécessaire
    $mail->Port = 587; // Utilisez le port approprié pour votre serveur SMTP
    $mail->setFrom($email, $nom);
        $mail->addAddress('mohamedyani2019@gmail.com', 'Hamdani Mohamed'); // Remplacez par votre adresse e-mail
        
        $mail->isHTML(true);
        $mail->Subject = 'Nouveau message depuis le formulaire';
        $mail->Body = "Nom : $nom<br>Email : $email<br>Sujet : $subject<br> Message : $message"; // Vous pouvez ajouter d'autres informations
        $mail->send();
    } catch (Exception $e) {
        echo "Erreur lors de l'envoi de l'e-mail : {$mail->ErrorInfo}";
    }
}
?>
    <!-- Inclure les fichiers JavaScript de Bootstrap (jQuery et Popper.js sont nécessaires) -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
