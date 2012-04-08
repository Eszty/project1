<?php
# Controller for search

class Search extends CI_Controller
{
    public function index()
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
        
        
    }



}
?>
