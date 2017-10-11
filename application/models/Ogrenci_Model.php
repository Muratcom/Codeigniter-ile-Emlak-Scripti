<?php
class Ogrenci_Model extends CI_Model {

	function __construct() { 
         parent::__construct(); 
      }
	  
	public function insert_ogrenci($data)
	    {
	    if ($this->db->insert("mail",$data)) // Öğrenciler tablosuna dataları ekle
		{
	    return true;
		}  
	  }
	  
	  public function insert_uye($data)
	    {
	    if ($this->db->insert("uyeler",$data)) // Öğrenciler tablosuna dataları ekle
		{
	    return true;
		}  
	  }
	  
	  public function insert_emlak($data)
	    {
	    if ($this->db->insert("emlak",$data)) // Öğrenciler tablosuna dataları ekle
		{
	    return true;
		}  
	  }
	  
	  public function insert_ceo($data)
	    {
	    if ($this->db->insert("ceo",$data)) // Öğrenciler tablosuna dataları ekle
		{
	    return true;
		}  
	  }
	  
	  public function insert_content($data)
	    {
	    if ($this->db->insert("content",$data)) // Öğrenciler tablosuna dataları ekle
		{
	    return true;
		}  
	  }
	  
	  public function insert_title($data)
	    {
	    if ($this->db->insert("title",$data)) // Öğrenciler tablosuna dataları ekle
		{
	    return true;
		}  
		
		
	  }
	  
	    public function insert_hak($data)
	    {
	    if ($this->db->insert("hak",$data)) // Öğrenciler tablosuna dataları ekle
		{
	    return true;
		}  
		
		
	  }

	public function delete_emlak($id)
	    {
	    if ($this->db->delete("emlak","id=".$id)) // Öğrenciler tablosundan belirtilen "id" li datayı siler
		{
	    return true;
		}  
	  }
	  
	  public function delete_ceo($id)
	    {
	    if ($this->db->delete("ceo","id=".$id)) // Öğrenciler tablosundan belirtilen "id" li datayı siler
		{
	    return true;
		}  
	  }
	  
	  public function delete_content($id)
	    {
	    if ($this->db->delete("content","id=".$id)) // Öğrenciler tablosundan belirtilen "id" li datayı siler
		{
	    return true;
		}  
	  }
	  
	  public function delete_title($id)
	    {
	    if ($this->db->delete("title","id=".$id)) // Öğrenciler tablosundan belirtilen "id" li datayı siler
		{
	    return true;
		}  
	  }
	  
	  
	  public function delete_uye($id)
	    {
	    if ($this->db->delete("uyeler","id=".$id)) // Öğrenciler tablosundan belirtilen "id" li datayı siler
		{
	    return true;
		}  
	  }
	  
	    public function delete_mail($id)
	    {
	    if ($this->db->delete("mail","id=".$id)) // Öğrenciler tablosundan belirtilen "id" li datayı siler
		{
	    return true;
		}  
	  }
	  
	public function update_emlak($data,$id)  // İd si ve datası gönderileb verileri günceller
	{
		$this->db->where('id', $id);
		$this->db->update('emlak' ,$data);
		return true;
	}  
	
	public function update_ceo($data,$id)  // İd si ve datası gönderileb verileri günceller
	{
		$this->db->where('id', $id);
		$this->db->update('ceo' ,$data);
		return true;
	}
	
	public function update_content($data,$id)  // İd si ve datası gönderileb verileri günceller
	{
		$this->db->where('id', $id);
		$this->db->update('content' ,$data);
		return true;
	}
	
	public function update_title($data,$id)  // İd si ve datası gönderileb verileri günceller
	{
		$this->db->where('id', $id);
		$this->db->update('title' ,$data);
		return true;
	}
	
	public function update_uye($data,$id)  // İd si ve datası gönderileb verileri günceller
	{
		$this->db->where('id', $id);
		$this->db->update('uyeler' ,$data);
		return true;
	} 
	
	
	public function update_mail($data,$id)  // İd si ve datası gönderileb verileri günceller
	{
		$this->db->where('id', $id);
		$this->db->update('mail' ,$data);
		return true;
	} 
	
	 function login($username,$password) 
	  {
        
        $this->db->select('*');
        $this->db->from('ogrenciler');
        $this->db->where('kullanici', $username);
        $this->db->where('sifre', $password);
        $this->db->limit(1);
         
        
        $query = $this->db->get();
        if($query->num_rows() == 1) {
            return $query->result(); 
        } else {
            return false; 
        }
     }
}