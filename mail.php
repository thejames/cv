<?php
//Recuperiamo tutte le variabili
$mail	  = $_POST['mail'];
$name	  = $_POST['name'];
$subject  = $_POST['subject'];
$text	  = $_POST['text'];
$ip	  = $_SERVER['REMOTE_ADDR'];
	
//Qui andrà inserito il tuo indirizzo e-mail
$to	  = "James@Zambon.us";
$sender	  = "contact@cv.jameszambon.com";

//Creazione del mesaggio da inviare
$message	  = "<table>
			<tr><td><strong>Title</strong> </td>
				<td>".$subject."</td></tr>
			<tr><td><strong>Name</strong> </td>
				<td>".$name."</td></tr>
			<tr><td><strong>E-Mail</strong> </td>
				<td>".$mail."</td></tr>
			<tr><td><strong>Comments</strong> </td>
				<td>".$text."</td></tr>
			<tr><td><strong>IP Address</strong> </td>
				<td>".$ip."</td></tr>
		    </table>";

$headers	  = "MIME-Version: 1.0"."\r\n";
$headers	  .= "Content-type: text/html; charset=iso-8859-1"."\r\n";
$headers	  .= "From: CV Form contact <".$sender.">\r\n"; 
$headers	  .= "Reply-To: ".$mail."\r\n";


//Se l'e-mail viene spedita correttamente, compare un messaggio di avvenuto invio
 if(mail($to, $subject,$message, $headers)){
	echo "<p>Message sent! Thanks!</p>";
}
//Altrimenti un messaggio di errore
else{ 
	echo "<p>Error</p>";
}
?>
