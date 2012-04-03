<?php
# Controller for search results

public class Results extends CI_Controller
{
    public function results()
    {
        $this->load->model('Resultsm');
        $results = $this->Resultsm->results;
        $this->load->view('results.php', array('results'=>$results));
    }
}
