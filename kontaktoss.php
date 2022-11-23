<?php
if ( isset($_POST['submit'])) {

    $name=$_POST['name'];
    $mailform=$_POST['mail'];
    $melding=$_POST['melding'];

    

   $mailto=   "rama198259@gmail.com";
   $headers= "form: ".$mailform;
   $txt ="du har mottatt en e-post fra".$name.".\n\n".$melding;

   mail($mailto, $txt, $headers);
   header("location: kontaktoss.html?mailsend")

}
?>


