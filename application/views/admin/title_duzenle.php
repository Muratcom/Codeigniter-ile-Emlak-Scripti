<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8">
	<title>Title Düzenleme Formu</title>
</head>
<body>
Title DÜZENLEME SAYFASI <BR>

<?php
 echo form_open(base_url()."ogrenci/kayit_guncelle_title/".$veri[0]->id);
   
   echo form_label('Baslik Bilgisi:');
   echo form_input(array('id'=>'numara','name'=>'bilgi', 'value'=>$veri[0]->bilgi));
   echo "<br>";
   
   
   
   echo form_submit(array('id'=>'submit','value'=>'KAYIT GUNCELLE'));
 echo form_close();

?>



</body>
</html>