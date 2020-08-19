<?php
/*configuration*/
$nom_expediteur ='contact NouvelleForge.com';
$email_expediteur = 'test.formulaire@laposte.net';
$destinataire = 'pierrealexrobert21@gmail.com';

$copie = 'oui';

$message_envoye = "Votre message nous est bien parvenu !";
$message_non_envoye = "L'envoi du mail a échoué, veuillez réessayer SVP";

$message_erreur_formulaire = "Vous devez d'abord <a href=\"infos.php\">envoyer le formulaire</a>.";
$message_formulaire_invalide = "Vérifiez que tous les champs soient bien remplis et que l'email soit sans erreur.";

/*fin configuration*/

if (!isset($_POST['envoi'])) {
  echo '<p>'.$message_erreur_formulaire.'</p>'."\n";
}
else {
  function Rec($text) {
    $text = htmlspecialchars(trim($text), ENT_QUOTES);
    if (1 === get_magic_quotes_gpc()) {
      $text = stripslashes ($text);
    }
    $text = nl2br ($text);
    return $text;
  };

  function IsEmail($email) {
    $value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
    return (($value === 0) || ($value === false) ) ? false : true;
  }

  $nom = (isset($_POST['user_name'])) ? Rec($_POST['user_name']) :'';
  $prenom = (isset($_POST['user_firstname'])) ? Rec($_POST['user_firstname']) :'';
  $email = (isset($_POST['user_email'])) ? Rec($_POST['user_email']) :'';
  $message = (isset($_POST['user_message'])) ? Rec($_POST['user_message']) :'';

  $email = (IsEmail($email)) ? $email : '';

  if (($nom != '') && ($email != '') && ($prenom != '') && ($message != '')) {
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'From:'.$nom_expediteur.' <'.$email_expediteur.'>' . "\r\n" .
    'Reply-To:'.$email. "\r\n" .
    'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed '."\r\n" .
    'Content-Disposition: inline'. "\r\n" .
    'Content-Transfer-Encoding: 7bit'." \r\n" .
    'X-Mailer:PHP/'.phpversion();


    if ($copie == 'oui') {
      $cible = $destinataire.';'.$email;
    }
    else {
      $cible = $destinataire;
    };

    $caracteres_speciaux     = array('&#039;', '&#8217;', '&quot;', '<br>', '<br />', '&lt;', '&gt;', '&amp;', '…',   '&rsquo;', '&lsquo;');
    $caracteres_remplacement = array("'",      "'",        '"',      '',    '',       '<',    '>',    '&',     '...', '>>',      '<<'     );

    $message = html_entity_decode($message);
    $message = str_replace($caracteres_speciaux, $caracteres_remplacement, $message);

    $cible = str_replace(',', ';', $cible);
    $num_emails = 0;
    $tmp = explode(';', $cible);
    foreach($tmp as $email_destinataire) {
      if (mail($email_destinataire, "Contact", $message, $headers))
      $num_emails++;
    }
    if ((($copie == 'oui') && ($num_emails == 2)) || (($copie == 'non') && ($num_emails == 1)))
    {
      echo '<p>'.$message_envoye.'</p>';
    }
    else
    {
      echo '<p>'.$message_non_envoye.'</p>';
    };
  }
  else {
    echo '<p>'.$message_formulaire_invalide.' <a href="infos.php">Retour au formulaire</a></p>'."\n";
  };
};
?>
