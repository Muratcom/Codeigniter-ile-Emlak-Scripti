<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8">
	<title>İlan Düzenleme Formu</title>
</head>
<body>
<b><u>İlan Düzenleme Sayfası</u></<BR>
<table class="table table-condensed">
<?php
 echo form_open(base_url()."ogrenci/kayit_guncelle/".$veri[0]->id);
	 echo "<tr><td>".form_label('Baslik:')."</td>"."<td>".form_input(array('id'=>'numara','name'=>'baslik', 'value'=>$veri[0]->baslik))."</td></tr> ";
   //echo form_label('Baslik:');
   //echo form_input(array('id'=>'numara','name'=>'baslik', 'value'=>$veri[0]->baslik));
   echo "<br>";
   	 
	 echo "<tr><td>".form_label('Detay:')."</td>"."<td>".form_input(array('id'=>'adsoy','name'=>'detay', 'value'=>$veri[0]->detay))."</td></tr> ";

   //echo form_label('Detay:');
  // echo form_input(array('id'=>'adsoy','name'=>'detay', 'value'=>$veri[0]->detay));
   echo "<br>";
   
   	 echo "<tr><td>".form_label('Fiyat:')."</td>"."<td>".form_input(array('id'=>'adsoy','name'=>'fiyat', 'value'=>$veri[0]->fiyat))."</td></tr> ";

    //echo form_label('Fiyat:');
   //echo form_input(array('id'=>'adsoy','name'=>'fiyat', 'value'=>$veri[0]->fiyat));
   echo "<br>";
   
   echo "<tr><td>".form_label('Kat:')."</td>"."<td>".form_input(array('id'=>'adsoy','name'=>'kat', 'value'=>$veri[0]->kat))."</td></tr> ";
   //echo form_label('Kat:');
   //echo form_input(array('id'=>'adsoy','name'=>'kat', 'value'=>$veri[0]->kat));
   echo "<br>";
       echo "<tr><td>".form_submit(array('id'=>'submit','value'=>'KAYIT GUNCELLE'))."</td></tr> ";
   //echo form_submit(array('id'=>'submit','value'=>'KAYIT GUNCELLE'));
    echo "<tr><td>".form_close()."</td></tr> ";
 //echo form_close();

?>
</table>



</body>
</html>