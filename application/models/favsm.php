<?php
# Model for 'favourites'

class Favsm extends CI_Model 
{
    public function favs()
    {
        $user_id = 1; 
        
        # returns film id from table 'favourites'
        $film_id = $this->db->get_where('favourites', array('user_id'=>$user_id))->result();
        
        # get the film id's from table 'films'
        $favs_array = array();
        foreach($film_id as $film)
        {
            $f = $this->db->get_where('films', array('id'=>($film->film_id)))->result();
            array_push($favs_array, $f);  
        } 
        return $favs_array; # array of an array of film id's
    }


}
?>
