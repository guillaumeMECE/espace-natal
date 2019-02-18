<?php
function mailToCabinet()
{
	$mail = 'guillaumemaurin.gm@gmail.com'; // Déclaration de l'adresse de destination.
	if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
	{
		$passage_ligne = "\r\n";
	}
	else
	{
		$passage_ligne = "\n";
	}
	//=====Déclaration des messages au format texte.
	$message_info_user="Nom : ".$_POST["inputNom"].$passage_ligne."Prenom : ".$_POST["inputPrenom"].$passage_ligne."E-mail : ".$_POST["inputEmail"].$passage_ligne.$passage_ligne;
	$message_txt = $message_info_user.$passage_ligne.$_POST["inputSujet"]." :".$passage_ligne.$_POST["inputMessage"];
	//==========

	//=====Création de la boundary
	$boundary = "-----=".md5(rand());
	//==========

	//=====Définition du sujet.
	$sujet = $_POST["inputSujet"];
	//=========

	//=====Création du header de l'e-mail.
	$header = "From: \"".$_POST["inputNom"]." ".$_POST["inputPrenom"]."\"<".$_POST["inputEmail"].">".$passage_ligne;
	$header.= "Reply-to: \"".$_POST["inputNom"]." ".$_POST["inputPrenom"]."\" <".$_POST["inputEmail"].">".$passage_ligne;
	$header.= "MIME-Version: 1.0".$passage_ligne;
	$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
	//==========

	//=====Création du message.
	$message = $passage_ligne."--".$boundary.$passage_ligne;
	//=====Ajout du message au format texte.
	$message.= "Content-Type: text/plain; charset=\"utf-8\"".$passage_ligne;
	$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
	$message.= $passage_ligne.$message_txt.$passage_ligne;
	//==========
	$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
	$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
	//==========

	//=====Envoi de l'e-mail.
	$url;
	$isSend;
	try {
		mail($mail,$sujet,$message,$header);
		$url='\espace-natal\contact?send=true';
		$isSend=true;
	} catch (\Exception $e) {
		$url='\espace-natal\contact?send=false';
		$isSend=false;
	}
	mailToUser($url,$isSend);

}

function mailToUser($url,$isSend)
{
	$mail = $_POST["inputEmail"]; // Déclaration de l'adresse de destination. --> user
	if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
	{
		$passage_ligne = "\r\n";
	}
	else
	{
		$passage_ligne = "\n";
	}
	//=====Déclaration des messages au format texte.

	$message_txt = "Bonjour ".$_POST["inputNom"]." ".$_POST["inputPrenom"]." votre email au cabinet Jean richepin à bien été envoyé.";
	//==========

	//=====Création de la boundary
	$boundary = "-----=".md5(rand());
	//==========

	//=====Définition du sujet.
	$sujet ="Accusé d'envoi d'email au cabinet Jean Richepin";
	//=========

	//=====Création du header de l'e-mail.
	$header = "From: \"".$_POST["inputNom"]." ".$_POST["inputPrenom"]."\"<".$_POST["inputEmail"].">".$passage_ligne;
	$header.= "Reply-to: \"".$_POST["inputNom"]." ".$_POST["inputPrenom"]."\" <".$_POST["inputEmail"].">".$passage_ligne;
	$header.= "MIME-Version: 1.0".$passage_ligne;
	$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
	//==========

	//=====Création du message.
	$message = $passage_ligne."--".$boundary.$passage_ligne;
	//=====Ajout du message au format texte.
	$message.= "Content-Type: text/plain; charset=\"utf-8\"".$passage_ligne;
	$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
	$message.= $passage_ligne.$message_txt.$passage_ligne;
	//==========
	$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
	$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
	//==========

	//=====Envoi de l'e-mail.
	$url;
	try {
		mail($mail,$sujet,$message,$header);
	} catch (\Exception $e) {
	}
	//==========
	//retour a la page contact
	$delay = 0;
	header("Refresh: $delay;url=$url");
}

// check if there is a request for a reservation
if (isset($_POST["inputNom"])) { //tst si form a été rempli
	 mailToCabinet();
}else{
	//retour a la page contact
	$delay = 0;
	$url='\espace-natal\contact';
	header("Refresh: $delay;url=$url");
}

?>
