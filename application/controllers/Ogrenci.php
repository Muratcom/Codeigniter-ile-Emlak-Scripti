<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ogrenci extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database(); // Sayfada database ye  erişmemizi sağlar
		$this->load->library('session');	
	}
	

	public function index()
	{
		$query=$this->db->get("ceo",6);
		$data['veri4']=$query->result();
		
		$query=$this->db->get("title",6);
		$data['veri6']=$query->result();
		
		$query=$this->db->get("content",6);
		$data['veri5']=$query->result();
		
		
			$query=$this->db->get("emlak",6);
		$data['veri']=$query->result();
		
		$this->load->view('index1',$data);
		
		
		
		
	}
	
	public function login()
	{ 
	
		$user=$this->input->post('kullanici');
		$sifre=$this->input->post('sifre');
		
		$this->load->model('Ogrenci_Model');
		$result = $this->Ogrenci_Model->login($user,$sifre);
		
		if($result) {
             $sess_array = array();
             foreach($result as $row) {
                 $sess_array = array(
				 'id' => $row->id,
				 'yetki' => $row->yetki,
				 'kullanici' => $row->kullanici,
				 'adsoy' => $row->adsoy
				 );
                 
                 $this->session->set_userdata('logged_in', $sess_array);
				 $this->index();
                 }
          		return TRUE;
          } 
		  else 
		  {
              
            $hata= 'Invalid username or password';
			$this->load->view('admin/index');
            return FALSE;
          }
		
	}
	
    function logout() {
         $this->session->unset_userdata('logged_in');
         $this->session->sess_destroy();
         $this->index();
     }
	
	public function ekle()
	{  
	
		if (!$this->session->userdata('logged_in'))
		{
			//echo "Kullanici giriş yapmadı";
			$this->load->view('admin/login');
		}
		else
		{
		$session_data = $this->session->userdata('logged_in');
		$data['adsoy'] = $session_data['adsoy'];
        $data['kullanici'] = $session_data['kullanici'];
        $data['id'] = $session_data['id'];
		$data['yetki'] = $session_data['yetki'];
		
		
	// Öğrenci bilgi giriş formu sayfasına gönderir
		$this->load->helper('form');
		$this->load->view('admin/header',$data);
		$this->load->view('admin/left');
		$this->load->view('admin/ogrenci_ekle'); // content
		$this->load->view('admin/footer');
		}
	}
	public function kayit_ekle()
	{  
		$this->load->model('Ogrenci_Model'); // Kayıt işleminin yapılacağı model
		// Kayıt formundandan bilgileri al
		// form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
		$data=array(
		'baslik' => $this->input->post('baslik'),
		'detay' => $this->input->post('detay')
		
		);
		
		// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
		$this->Ogrenci_Model->insert_ogrenci($data); // ekleme fonk. dataları gönder
		
		//redirect("ogrenci");
		$this->index();
	
	}
	public function sil()
	{ 
		$this->load->model('Ogrenci_Model'); // Kayıt işleminin yapılacağı model
		$id = $this->uri->segment('3'); // adresteki 3 nolu parametreyi alır
		$this->Ogrenci_Model->delete_emlak($id); // Parametre ile alınan ID yi silme fonksiyonuna gönder
		redirect("ogrenci");
	}
	
	public function sil_ceo()
	{ 
		$this->load->model('Ogrenci_Model'); // Kayıt işleminin yapılacağı model
		$id = $this->uri->segment('3'); // adresteki 3 nolu parametreyi alır
		$this->Ogrenci_Model->delete_ceo($id); // Parametre ile alınan ID yi silme fonksiyonuna gönder
		redirect("ogrenci");
	}
	
	public function sil_content()
	{ 
		$this->load->model('Ogrenci_Model'); // Kayıt işleminin yapılacağı model
		$id = $this->uri->segment('3'); // adresteki 3 nolu parametreyi alır
		$this->Ogrenci_Model->delete_content($id); // Parametre ile alınan ID yi silme fonksiyonuna gönder
		redirect("ogrenci");
	}
	
	public function sil_title()
	{ 
		$this->load->model('Ogrenci_Model'); // Kayıt işleminin yapılacağı model
		$id = $this->uri->segment('3'); // adresteki 3 nolu parametreyi alır
		$this->Ogrenci_Model->delete_title($id); // Parametre ile alınan ID yi silme fonksiyonuna gönder
		redirect("ogrenci");
	}
	public function sil_uye()
	{ 
		$this->load->model('Ogrenci_Model'); // Kayıt işleminin yapılacağı model
		$id = $this->uri->segment('3'); // adresteki 3 nolu parametreyi alır
		$this->Ogrenci_Model->delete_uye($id); // Parametre ile alınan ID yi silme fonksiyonuna gönder
		redirect("ogrenci");
	}
	
	public function sil_mail()
	{ 
		$this->load->model('Ogrenci_Model'); // Kayıt işleminin yapılacağı model
		$id = $this->uri->segment('3'); // adresteki 3 nolu parametreyi alır
		$this->Ogrenci_Model->delete_mail($id); // Parametre ile alınan ID yi silme fonksiyonuna gönder
		redirect("ogrenci");
	}
	public function duzenle() // Düzenleme formuna bilgi gönderme
	{ 
         $id = $this->uri->segment('3'); // Parametre ile gönderilen "id" yi al
         $query = $this->db->get_where("emlak",array("id"=>$id)); // Veritabanından ilgili kaydı sorgula getir
         $data['veri'] = $query->result(); //Sonuçları $data değişkenine ata
	
		 $this->load->helper('form'); // Form kütüphanesini çağır
		 
	     $this->load->view('admin/ogrenci_duzenle',$data); // Dataları belirtilen view dosyasına gönder
	}
	
	public function duzenle_ceo() // Düzenleme formuna bilgi gönderme
	{ 
         $id = $this->uri->segment('3'); // Parametre ile gönderilen "id" yi al
         $query = $this->db->get_where("ceo",array("id"=>$id)); // Veritabanından ilgili kaydı sorgula getir
         $data['veri'] = $query->result(); //Sonuçları $data değişkenine ata
	
		 $this->load->helper('form'); // Form kütüphanesini çağır
		 
	     $this->load->view('admin/ceo_duzenle',$data); // Dataları belirtilen view dosyasına gönder
	}
	
		public function duzenle_content() // Düzenleme formuna bilgi gönderme
	{ 
         $id = $this->uri->segment('3'); // Parametre ile gönderilen "id" yi al
         $query = $this->db->get_where("content",array("id"=>$id)); // Veritabanından ilgili kaydı sorgula getir
         $data['veri'] = $query->result(); //Sonuçları $data değişkenine ata
	
		 $this->load->helper('form'); // Form kütüphanesini çağır
		 
	     $this->load->view('admin/content_duzenle',$data); // Dataları belirtilen view dosyasına gönder
	}
	
		public function duzenle_title() // Düzenleme formuna bilgi gönderme
	{ 
         $id = $this->uri->segment('3'); // Parametre ile gönderilen "id" yi al
         $query = $this->db->get_where("title",array("id"=>$id)); // Veritabanından ilgili kaydı sorgula getir
         $data['veri'] = $query->result(); //Sonuçları $data değişkenine ata
	
		 $this->load->helper('form'); // Form kütüphanesini çağır
		 
	     $this->load->view('admin/title_duzenle',$data); // Dataları belirtilen view dosyasına gönder
	}
	
	public function duzenle_uye() // Düzenleme formuna bilgi gönderme
	{ 
         $id = $this->uri->segment('3'); // Parametre ile gönderilen "id" yi al
         $query = $this->db->get_where("uyeler",array("id"=>$id)); // Veritabanından ilgili kaydı sorgula getir
         $data['veri'] = $query->result(); //Sonuçları $data değişkenine ata
	
		 $this->load->helper('form'); // Form kütüphanesini çağır
		 
	     $this->load->view('admin/uye_duzenle',$data); // Dataları belirtilen view dosyasına gönder
	}
	
		public function duzenle_mail() // Düzenleme formuna bilgi gönderme
	{ 
         $id = $this->uri->segment('3'); // Parametre ile gönderilen "id" yi al
         $query = $this->db->get_where("mail",array("id"=>$id)); // Veritabanından ilgili kaydı sorgula getir
         $data['veri'] = $query->result(); //Sonuçları $data değişkenine ata
	
		 $this->load->helper('form'); // Form kütüphanesini çağır
		 
	     $this->load->view('admin/mail_duzenle',$data); // Dataları belirtilen view dosyasına gönder
	}
	
	public function kayit_guncelle() // Düzenleme formundan gelen verileri güncelleme
	{  
		$id = $this->uri->segment('3'); // Parametre ile gönderilen "id" yi al
		$this->load->model('Ogrenci_Model'); // Kayıt işleminin yapılacağı model
		
		// form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
		$data=array(
		'baslik' => $this->input->post('baslik'),
		'detay' => $this->input->post('detay'),
		'fiyat' => $this->input->post('fiyat'),
		'kat' => $this->input->post('kat')

		
		);
		
		// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
		$this->Ogrenci_Model->update_emlak($data,$id); //  fonksiypnua dataları id ile  gönder
		
		//redirect("ogrenci"); // Öğrenci ana sayfasına gönder
		$this->index();
	
	}
	
	
	public function kayit_guncelle_ceo() // Düzenleme formundan gelen verileri güncelleme
	{  
		$id = $this->uri->segment('3'); // Parametre ile gönderilen "id" yi al
		$this->load->model('Ogrenci_Model'); // Kayıt işleminin yapılacağı model
		
		// form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
		$data=array(
		'bilgi' => $this->input->post('bilgi')
		
		
		);
		
		// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
		$this->Ogrenci_Model->update_ceo($data,$id); //  fonksiypnua dataları id ile  gönder
		
		//redirect("ogrenci"); // Öğrenci ana sayfasına gönder
		$this->index();
	
	}
	
	public function kayit_guncelle_content() // Düzenleme formundan gelen verileri güncelleme
	{  
		$id = $this->uri->segment('3'); // Parametre ile gönderilen "id" yi al
		$this->load->model('Ogrenci_Model'); // Kayıt işleminin yapılacağı model
		
		// form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
		$data=array(
		'bilgi' => $this->input->post('bilgi')
		
		
		);
		
		// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
		$this->Ogrenci_Model->update_content($data,$id); //  fonksiypnua dataları id ile  gönder
		
		//redirect("ogrenci"); // Öğrenci ana sayfasına gönder
		$this->index();
	
	}
	
	public function kayit_guncelle_title() // Düzenleme formundan gelen verileri güncelleme
	{  
		$id = $this->uri->segment('3'); // Parametre ile gönderilen "id" yi al
		$this->load->model('Ogrenci_Model'); // Kayıt işleminin yapılacağı model
		
		// form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
		$data=array(
		'bilgi' => $this->input->post('bilgi')
		
		
		);
		
		// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
		$this->Ogrenci_Model->update_title($data,$id); //  fonksiypnua dataları id ile  gönder
		
		//redirect("ogrenci"); // Öğrenci ana sayfasına gönder
		$this->index();
	
	}
	
	public function kayit_guncelle_uye() // Düzenleme formundan gelen verileri güncelleme
	{  
		$id = $this->uri->segment('3'); // Parametre ile gönderilen "id" yi al
		$this->load->model('Ogrenci_Model'); // Kayıt işleminin yapılacağı model
		
		// form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
		$data=array(
		'isim' => $this->input->post('isim'),
		'cinsiyet' => $this->input->post('cinsiyet'),
		'mail' => $this->input->post('mail'),
		'sifre' => $this->input->post('sifre')
		
		);
		
		// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
		$this->Ogrenci_Model->update_uye($data,$id); //  fonksiypnua dataları id ile  gönder
		
		//redirect("ogrenci"); // Öğrenci ana sayfasına gönder
		$this->index();
	
	}
	
	public function kayit_guncelle_mail() // Düzenleme formundan gelen verileri güncelleme
	{  
		$id = $this->uri->segment('3'); // Parametre ile gönderilen "id" yi al
		$this->load->model('Ogrenci_Model'); // Kayıt işleminin yapılacağı model
		
		// form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
		$data=array(
		'baslik' => $this->input->post('baslik'),
		'detay' => $this->input->post('detay')
		
		);
		
		// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
		$this->Ogrenci_Model->update_mail($data,$id); //  fonksiypnua dataları id ile  gönder
		
		//redirect("ogrenci"); // Öğrenci ana sayfasına gönder
		$this->index();
	
	}
	
	
	public function listele()
	{
		$query=$this->db->get("title",6);
		$data['veri6']=$query->result();
		
		$query=$this->db->get("ceo",6);
		$data['veri4']=$query->result();
		
		$query=$this->db->get("content",6);
		$data['veri5']=$query->result();
		$query=$this->db->get("ogrenciler");
		$data['veri']=$query->result();
		
		$this->load->view('index1',$data);
		
		
	}
	public function detay()
	{	
		$query=$this->db->get("title",6);
		$data['veri6']=$query->result();
	
		$query=$this->db->get("ceo",6);
		$data['veri4']=$query->result();
		
		$query=$this->db->get("content",6);
		$data['veri5']=$query->result();
		$query=$this->db->get("emlak",6);
		$data['veri']=$query->result();
		
		$this->load->view('detay',$data);
	}
	public function anasayfa()
	{ 
		$query=$this->db->get("title",6);
		$data['veri6']=$query->result();
	   
	   $query=$this->db->get("ceo",6);
		$data['veri4']=$query->result();
		
		$query=$this->db->get("content",6);
		$data['veri5']=$query->result();
		
		$query=$this->db->get("emlak",6);
		$data['veri']=$query->result();
		
		$this->load->view('index1',$data);
		
	}
	public function liste()
	{
		$query=$this->db->get("title",6);
		$data['veri6']=$query->result();
		
		$query=$this->db->get("ceo",6);
		$data['veri4']=$query->result();
		
		$query=$this->db->get("content",6);
		$data['veri5']=$query->result();
		$query=$this->db->get("emlak");
		$data['veri']=$query->result();
		
		$this->load->view('liste',$data);
		
	}
	
	public function about()
	{
		$query=$this->db->get("hak",6);
		$data['veri7']=$query->result();
		
		$query=$this->db->get("title",6);
		$data['veri6']=$query->result();
		
		$query=$this->db->get("ceo",6);
		$data['veri4']=$query->result();
		
		$query=$this->db->get("content",6);
		$data['veri5']=$query->result();
		$query=$this->db->get("emlak");
		$data['veri']=$query->result();
		
		$this->load->view('about_us',$data);
		
	}
	
	public function indexfunc()
	{
		$query=$this->db->get("title",6);
		$data['veri6']=$query->result();
		
		$query=$this->db->get("ceo",6);
		$data['veri4']=$query->result();
		
		$query=$this->db->get("content",6);
		$data['veri5']=$query->result();
		$query=$this->db->get("emlak");
		$data['veri']=$query->result();
		
		$this->load->view('index1',$data);
		
	}
	public function contactfunc()
	{
		$query=$this->db->get("title",6);
		$data['veri6']=$query->result();
		
		$query=$this->db->get("ceo",6);
		$data['veri4']=$query->result();
		
		$query=$this->db->get("content",6);
		$data['veri5']=$query->result();
	
		$this->load->helper('form');
		
		
		
		
		
		$query=$this->db->get("emlak");
		$data['veri']=$query->result();
		
		$this->load->view('contact',$data);
		
	}
	public function cms()
	{
		
		
		
		if (!$this->session->userdata('logged_in'))
		{
			//echo "Kullanici giriş yapmadı";
			$this->load->view('admin/login');
		}
		else
		{
		$query=$this->db->get("mail");
		$data['veri2']=$query->result();
		
		$query=$this->db->get("uyeler");
		$data['veri1']=$query->result();
		
		$query=$this->db->get("emlak");
		$data['veri']=$query->result();
			
			$this->load->view('admin/index',$data);
		}
		

	}
	
	public function uye_liste()
	{
		
		
		
		if (!$this->session->userdata('logged_in'))
		{
			//echo "Kullanici giriş yapmadı";
			$this->load->view('admin/login');
		}
		else
		{
		$query=$this->db->get("mail");
		$data['veri2']=$query->result();
		
		$query=$this->db->get("uyeler");
		$data['veri1']=$query->result();
		
		$query=$this->db->get("emlak");
		$data['veri']=$query->result();
			
			$this->load->view('admin/uye_liste',$data);
		}
		

	}
	public function mail_liste()
	{
		
		
		
		if (!$this->session->userdata('logged_in'))
		{
			//echo "Kullanici giriş yapmadı";
			$this->load->view('admin/login');
		}
		else
		{
		$query=$this->db->get("mail");
		$data['veri2']=$query->result();
		
		$query=$this->db->get("uyeler");
		$data['veri1']=$query->result();
		
		$query=$this->db->get("emlak");
		$data['veri']=$query->result();
			
			$this->load->view('admin/mail_liste',$data);
		}
		

	}
	public function yonetim()
	{
		$query=$this->db->get("emlak");
		$data['veri']=$query->result();
		
		$this->load->view('cms/index',$data);
		
	}
	public function ilan()
	{
		$query=$this->db->get("emlak");
		$data['veri']=$query->result();
		
		$this->load->view('cms/gayrimenkuller',$data);
		
	}
	
	public function ilan_ekle()
	{
		$query=$this->db->get("emlak");
		$data['veri']=$query->result();
		
		$this->load->view('cms/ilan_ekle',$data);
		
	}
	public function ilansil()
	{
		$query=$this->db->get("emlak");
		$data['veri']=$query->result();
		
		$this->load->view('cms/ilansil',$data);
		
	}
	
	public function uye_ekle()
	{
		$this->load->helper('form');
		$this->load->view('admin/uye_ekle');
		
		
	}
	public function uye_ekle_view()
	{
		
		$query=$this->db->get("hak",6);
		$data['veri7']=$query->result();
		
		$query=$this->db->get("title",6);
		$data['veri6']=$query->result();
		
		$query=$this->db->get("ceo",6);
		$data['veri4']=$query->result();
		
		$query=$this->db->get("content",6);
		$data['veri5']=$query->result();
		$query=$this->db->get("emlak");
		$data['veri']=$query->result();
		
		$this->load->helper('form');
		$this->load->view('uye_ekle_view',$data);
		
		
	}
	
	public function emlak_ekle()
	{
		$this->load->helper('form');
		$this->load->view('admin/emlak_ekle');
		
		
	}
	
	public function ceo()
	{
			$query=$this->db->get("ceo");
			$data['veri8']=$query->result();
			
			$query=$this->db->get("content");
			$data['veri9']=$query->result();
			
			$query=$this->db->get("title");
			$data['veri10']=$query->result();
			
		$this->load->helper('form');
		$this->load->view('admin/seo',$data);
		
		
	}
	
	public function uye_ekle_2()
	{
		$this->load->model('Ogrenci_Model');
		$data=array(
		'isim'=>$this->input->post('isim'),
		'cinsiyet'=>$this->input->post('cinsiyet'),
		'yas'=>$this->input->post('yas'),
		'mail'=>$this->input->post('mail'),
		'sifre'=>$this->input->post('sifre'),
		);
		$this->Ogrenci_Model->insert_uye($data);
		$this->index();
		
		
	}
	
	public function emlak_ekle2()
	{
		$this->load->model('Ogrenci_Model');
		$data=array(
		'baslik'=>$this->input->post('baslik'),
		'detay'=>$this->input->post('detay'),
		'fiyat'=>$this->input->post('fiyat'),
		'kat'=>$this->input->post('kat')

		);
		$this->Ogrenci_Model->insert_emlak($data);
		$this->index();
		
		
	}
	
	public function seo_ekle2()
	{  
		$this->load->model('Ogrenci_Model'); // Kayıt işleminin yapılacağı model
		// Kayıt formundandan bilgileri al
		// form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
		$data=array(
		'bilgi' => $this->input->post('bilgi'),
		
		);
		
		// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
		$this->Ogrenci_Model->insert_ceo($data); // ekleme fonk. dataları gönder
		
		//redirect("ogrenci");
		$this->index();
	
	}
	
	public function content_ekle2()
	{  
		$this->load->model('Ogrenci_Model'); // Kayıt işleminin yapılacağı model
		// Kayıt formundandan bilgileri al
		// form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
		$data=array(
		'bilgi' => $this->input->post('bilgi'),
		
		);
		
		// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
		$this->Ogrenci_Model->insert_content($data); // ekleme fonk. dataları gönder
		
		//redirect("ogrenci");
		$this->index();
	
	}
	
	public function title_ekle2()
	{  
		$this->load->model('Ogrenci_Model'); // Kayıt işleminin yapılacağı model
		// Kayıt formundandan bilgileri al
		// form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
		$data=array(
		'bilgi' => $this->input->post('bilgi'),
		
		);
		
		// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
		$this->Ogrenci_Model->insert_title($data); // ekleme fonk. dataları gönder
		
		//redirect("ogrenci");
		$this->index();
	
	}
	
	public function hak_ekle2()
	{  
		$this->load->model('Ogrenci_Model'); // Kayıt işleminin yapılacağı model
		// Kayıt formundandan bilgileri al
		// form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
		$data=array(
		'icerik' => $this->input->post('icerik'),
		
		);
		
		// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
		$this->Ogrenci_Model->insert_hak($data); // ekleme fonk. dataları gönder
		
		//redirect("ogrenci");
		$this->index();
	
	}
	
	
}

?>