<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8">
	<title>Üye Düzenleme Formu</title>
</head>
<body>
<b><u>Üyeler Düzenleme Sayfası</u> <BR>

<table class="table table-condensed">

<?php
 echo form_open(base_url()."ogrenci/kayit_guncelle_uye/".$veri[0]->id);
   	 echo "<tr><td>".form_label('İsim:')."</td>"."<td>".form_input(array('id'=>'numara','name'=>'isim', 'value'=>$veri[0]->isim))."</td></tr> ";
   //echo form_label('İsim:');
   //echo form_input(array('id'=>'numara','name'=>'isim', 'value'=>$veri[0]->isim));
   echo "<br>";
   echo "<tr><td>".form_label('Cinsiyet:')."</td>"."<td>".form_input(array('id'=>'adsoy','name'=>'cinsiyet', 'value'=>$veri[0]->cinsiyet))."</td></tr> ";
   //echo form_label('Cinsiyet:');
   //echo form_input(array('id'=>'adsoy','name'=>'cinsiyet', 'value'=>$veri[0]->cinsiyet));
   echo "<br>";
   
   echo "<tr><td>".form_label('Mail:')."</td>"."<td>".form_input(array('id'=>'numara','name'=>'mail', 'value'=>$veri[0]->mail))."</td></tr> ";
   //echo form_label('Mail:');
   //echo form_input(array('id'=>'numara','name'=>'mail', 'value'=>$veri[0]->mail));
   echo "<br>";
   
   echo "<tr><td>".form_label('Sifre:')."</td>"."<td>".form_input(array('id'=>'adsoy','name'=>'sifre', 'value'=>$veri[0]->sifre))."</td></tr> ";
   //echo form_label('Sifre:');
   //echo form_input(array('id'=>'adsoy','name'=>'sifre', 'value'=>$veri[0]->sifre));
   echo "<br>";
   echo "<tr><td>".form_submit(array('id'=>'submit','value'=>'KAYIT GUNCELLE'))."</td></tr> ";
   //echo form_submit(array('id'=>'submit','value'=>'KAYIT GUNCELLE'));
   
       echo "<tr><td>".form_close()."</td></tr> ";
 //echo form_close();

?></table>



</body>
</html>