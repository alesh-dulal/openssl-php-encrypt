<?php
	require_once("encryption.php");
	$encode = new EncryptionDecryption;

$PlainText = $encode->RandomKey(112);
echo "Plain Text: ".$PlainText; echo "<br/>";
$CipherText =  $encode->Encode($PlainText);
echo "Cipher Text: ".$CipherText; echo "<br/>";
$DecryptedText =  $encode->Decode($CipherText);
echo "Plain Text: ".$DecryptedText; echo "<br/>";

?>
