<?php
# Model for favourites

class Favsm extends CI_Model 
{
    public function favs()
    {
        $user_id = 1;
        $film_id = $this->db->get_where('favourites', array('user_id'=>$user_id))->result();
        foreach($film_id as $film)
        {
            return $this->db->get_where('films', array('id'=>$film))->result();  
        } 
    }


}
?>
