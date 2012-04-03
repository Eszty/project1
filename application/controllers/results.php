<?php
# Controller for search results

class Results extends CI_Controller
{
    public function index()
    {
        $data = $this->input->post();
        
        $this->load->model('Resultsm');
        $results = $this->Resultsm->results($data);
        $this->load->view('results.php', array('results'=>$results));
    }
}
