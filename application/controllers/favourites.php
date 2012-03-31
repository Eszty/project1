<?php
# Controller for favourites

class Favourites extends CI_Controller
{
    public function index()
    {
        $this->load->model('Favsm');
        $fav = $this->Favsm->favs();
        $this->load->view('favs.php', array('fav' => $fav));
    }



}
?>
