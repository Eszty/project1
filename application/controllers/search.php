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
    /*public function index()
    {
        $data = $this->input->post();
        var_dump($data);
        
        if($data)
        {
            echo "poep";
            $this->load->model('Searchm');
            $results = $this->Searchm->results($data); 
            $this->load->view('results.php', array('results' => $results));
        }
        else
        {
            echo "Enter something";
            $this->load->view('search.php');
        }
        
        
    }*/



}
?>
