<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Pagination extends CI_Controller 
{
  public function __construct() {
    parent:: __construct();
 
    $this->load->helper("url");
    $this->load->model("Pagemodel");
    $this->load->library("pagination");
  }
 
  public function index() {
    // $num=2;
    $config["base_url"] = base_url() . "index.php/pagination";
    $data['page'] = ($this->uri->segment(2))? $this->uri->segment(2) : 0;
    $config["total_rows"] = $this->Pagemodel->record_count();
    // var_dump($config["total_rows"]);die;
    $config["per_page"] = "5";
    $config["uri_segment"] = 2;
    $config["num_link"]=$config["total_rows"]/ $config["per_page"] ;
    $this->pagination->initialize($config);
    $data["links"] = $this->pagination->create_links();
    $data["results"] = $this->Pagemodel->get_table($config["per_page"], $data['page'] );
    $this->load->view("pagination1", $data);
  }
} 