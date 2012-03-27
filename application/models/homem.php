<?php
# Model for home page of project1

class Homem extends CI_Model 
{
    public function home()
    {
        $film_id = 2;
        return $this->db->get_where('films', array('id'=>$film_id))->result();   
    }


}
?>
