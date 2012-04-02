<?php
# Controller for 'watch'

class Watch extends CI_Controller
{
    public function index()
    {
        $this->load->model('Watchm');
        $watch = $this->Watchm->watch();
        $this->load->view('watch.php', array('watch' => $watch));
    }

}
?>
