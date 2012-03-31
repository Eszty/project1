<?php
# Controller for search

class Search extends CI_Controller
{
    public function index()
    {
        $this->load->model('Searchm');
        $this->Searchm->search();
        $this->load->view('search.php');
    }



}
?>
