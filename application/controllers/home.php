<?php
# Controller for home page

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->model('Homem');
        $tip = $this->Homem->home();
        $this->load->view('home.php', array('tip' => $tip));
    }



}
?>
