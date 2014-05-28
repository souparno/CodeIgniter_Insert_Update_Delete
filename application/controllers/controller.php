<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Controller extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->database();
        $this->load->model("model");
        $this->load->helper("url");
        $this->load->library("pagination");
    }


  public function index()
  {
    // Create a table if it doesn't exist already
    $this->model->create_table();
    //--Gets the result set for the items and loads the view layer
    $data["results"] = $this->model->fetch_items();
    $this->load->view('view',$data);
    
  }

  public function insert(){
      if($this->input->post('txt_item')){
         $item=$this->input->post('txt_item');
         $this->model->insert_item($item); 
      }
      $this->index();
  }

  public function delete(){
      print_r($this->input->get('id', TRUE));
      $this->index();
  }

  public function hello(){
    echo "hello there";
  }
  
  
    
}

/* End of file controller.php */
/* Location: ./application/controllers/controller.php */
?>
