<?php
# Controller for search results

class Results extends CI_Controller
{
    public function index()
    {
        $data = $this->input->post();
        
        $this->load->model('Resultsm');
        $results = $this->Resultsm->results($data);
        var_dump($results);
        $this->load->view('results.php', array('results'=>$results));
    }
}
