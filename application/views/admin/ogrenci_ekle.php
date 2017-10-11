<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8">
	<title>İletişim Formu</title>
</head>
<body>
İletişim Formu <BR>

<?php
 echo form_open(base_url().'ogrenci/kayit_ekle');
   echo form_label('Öğrenci No:');
   echo form_input(array('id'=>'numara','name'=>'numara'));
   echo "<br>";
   echo form_label('Öğrenci Adsoy:');
   echo form_input(array('id'=>'adsoy','name'=>'adsoy'));
   echo "<br>";
   echo form_label('Öğrenci Cinsiyet:');
   echo form_input(array('id'=>'cins','name'=>'cins'));
   echo "<br>";
   echo form_submit(array('id'=>'submit','value'=>'KAYIT EKLE'));
 echo form_close();

?>



</body>
</html>