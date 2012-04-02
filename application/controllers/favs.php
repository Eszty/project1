<?php
# Controller for favourites

class Favs extends CI_Controller
{
    public function index()
    {
        $this->load->model('Favsm');
        $fav = $this->Favsm->favs();
        $this->load->view('favs.php', array('fav' => $fav));
    }



}
?>
