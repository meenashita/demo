<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

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
	public function signup()
	{
		if ($this->input->post()) 
		{
		$firstname=$this->input->post('firstname');
		$lastname=$this->input->post('lastname');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
	    
	
	$credentials=array(
		'firstname'=>$firstname,
		'lastname'=>$lastname,
		'email'=>$email,
		'password'=>$password
		);
	
		$this->load->model('signupmodel');
		if($this->signupmodel->insertData($credentials))
			{
				$this->load->view('form1');
	        
	        }
		}
else
	{
		$this->load->view('form');
	}

    }	
	public function update()

	{
		if ($this->input->post())
		 {
		$email=$this->input->post('email');
		$password=$this->input->post('password');

		$credentials=array(
			'email'=>$email,
		'password'=>$password
			);
   		$this->load->model('signupmodel');
		if($this->signupmodel->updateData($credentials,$email))
		{
			echo "success";
		}
	else
	{
		echo "error";
	}
        }
         
else
{

$this->load->view('form2');
}
}

public function delete()
 {   
 	if ($this->input->post())
		 {
		$email=$this->input->post('email');

          $credentials=array(
			'email'=>$email);
		
    $this->load->model('signupmodel');
   if($this->signupmodel->deleteRow($credentials,$email)) 
   	{
			echo "success";
		}
	else
	{
		echo "error";
	}
        }
  else
{

$this->load->view('form3');
}

    
}
public function select()
{
	if ($this->input->post()){
			$email=$this->input->post('email');
			$credentials=array(
			'email'=>$email);
            $this->load->model('signupmodel');
      		$data['records']=$this->signupmodel->selectRow($credentials);
      		$this->load->view('form5',$data);
 			 }
 			else {
  				$this->load->view('form4');
  }

	
}
public function search()
 {
 	if ($this->input->post()){
 			$first=$this->input->post('firstname');
        	$this->load->model('signupmodel');
        	$data['records']=$this->signupmodel->wildSearch($first);
        	$this->load->view('form5',$data);
  } else {
  				$this->load->view('form6');
  }

 }
public function formvalid()
        {
             $this->load->helper(array('form', 'url'));
             $this->load->library('form_validation');
             $this->form_validation->set_rules('username', 'Username', array('required', 'min_length[5]','max_length[10]'));
             $this->form_validation->set_rules('password', 'Password', array('required','min_length[8]'));
             $this->form_validation->set_rules('passconf', 'Password Confirmation', array('required','matches[password]'));
             $this->form_validation->set_rules('email', 'Email', array('required','valid_email'));
                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('myform');
                }
                else
                {
                        $this->load->view('formsuccess');
                }
        }

	public function sesLogin()
	{
		$this->load->library('session');
		if(!empty($this->session->userdata('loggedin')))
			{
				$this->load->view('userLogin');
	}else
	 	if ($this->input->post()) {
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$credentials=array(
				'email'=>$email,
				'password'=>$password
			);
			$this->load->model('Signupmodel');
			if($this->Signupmodel->sessionLogin($credentials)) {
				$sessiondata= array (
					'email'=>$email,
					'password'=>$password,
					'loggedin'=>TRUE);
				
				$this->session->set_userdata($sessiondata);
				$data['email']=$this->session->userdata('email');

				$this->load->view('userLogin',$sessiondata);
		    }
		    else{
		    		echo 'error';
		}
			
		} else {
			$this->load->view('sessionView');
		}

	}
	public function sesLogout()
	
 	{
 		$this->load->library('session');
   		$this->session->unset_userdata('$sessiondata');
   		$this->session->sess_destroy();
   		$this->load->view('sessionView');
   
    }
	public function search_keyword()

      {
	        if ($this->input->post()){
			$email=$this->input->post('email');
			$credentials=array(
			'email'=>$email);
            $this->load->model('signupmodel');
      		$data['records']=$this->signupmodel->search($credentials);
      		$this->load->view('form5',$data);
 			 }
 			else {
  				$this->load->view('form4');
  }

	
}
}













