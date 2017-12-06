<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signupmodel extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function insertData($credentials)

	{ 
		if($this->db->insert('user_details',$credentials))
	{ 
		return true;
	}
	else{
		return false;
		
	}
	}
	public function updateData($credentials,$email)
	{
		$this->db->where('email',$email);
        if($this->db->update('user_details',$credentials))
    {
		return true;
	}
	else
	{
		echo "failed";

	}
	}
	public function deleteRow($credentials,$email)
	{
 	 	$this->db->where('email',$email);
  		if($this->db->delete('user_details',$credentials))
  	{
		return true;
	}
	else
	{
		echo "failed";

	}
	}

	public function selectRow($credentials)
	{
		
  $this->db->where('email',$credentials['email']);
  $query = $this->db->get('user_details');
  return $query->result();
 }
public function wildSearch($first)
{
	
	$this->db->select('*');
	$this->db->like('firstname', 'a', 'after');
	$query = $this->db->get('user_details');		
	return $query->result();

}
public function sessionLogin($credentials)
{
$this->db->select('email,password');
$this->db->from('user_details');
$this->db->where('email',$credentials['email']);
$this->db->where('password',$credentials['password']);
$this->db->limit(1);
$query=$this->db->get();
if($query->num_rows()==1)

{
	return $query->result();
}
else 
	{
		return false;
		}
}
public function search($credentials){
	$this->db->query('ALTER TABLE user_details AUTO_INCREMENT 1'); 
    $this->db->select('*');
    $this->db->from('user_details');                
    $this->db->where('MATCH (firstname) AGAINST ("anju")')>0
    $query=$this->db->get();
    return  $query->result();

}
}

	

