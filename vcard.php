<?php
   session_start();
   header("Content-Type: text/vcard");
   header('Content-Disposition: attachment; filename="' . $_SESSION['lastname'] . '.vcf');
?>
BEGIN:VCARD
VERSION:3.0
PRODID:-//Corey Edwards//CNAM//EN
N:<?php print_r($_SESSION['lastname']); ?>;<?php print_r($_SESSION['firstname']); ?>;;<?php if ($_SESSION['gender'] == "M") {echo "Mr.";} else {echo "Ms.";}; echo ";\n";?>
FN:<?php print_r($_SESSION["firstname"]); ?> <?php print_r($_SESSION["lastname"]); ?>
END:VCARD
