<?php
# Model for home page of project1

# Generates random film tip
class Homem extends CI_Model 
{
    public function home()
    {
        $film_id = rand(1,2);
        return $this->db->get_where('films', array('id'=>$film_id))->result();   
    }


}
?>
