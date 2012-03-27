<?php
# Controller for home page

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->model('Homem');
        $film = $this->Homem->home();
        $this->load->view('home.php', array('films' => $film));
    }



}
?>
