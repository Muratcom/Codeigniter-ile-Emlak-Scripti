<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8">
	<title>Ogrenci Listesi</title>
</head>
<body>
ÖĞRENCİ LİSTELEME SAYFASI <BR>

<a href="ogrenci/ekle"> Yeni Kayıt Ekle </a> <br>
Numara AdıSoyadı Cinsiyeti <br>
______ ___________ _____________________________<br>
<?php
foreach($veri as $rs)
	{
	//echo "<a href='ogrenci/sil/".$rs->id."'> SİL </a>"; // Normal link oluşturma
	echo anchor(base_url()."ogrenci/duzenle/".$rs->id, "DÜZENLE");
	echo anchor(base_url()."ogrenci/sil/".$rs->id, "SİL");
	echo $rs->numara ." ". $rs->adsoy ." ". $rs->cinsiyet ."<br> "; // MVC kütüphanesinden link oluşturma
	}
?>

</body>
</html>