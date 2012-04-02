<?php
# Model for 'watch list'

class Watchm extends CI_Model 
{
    public function watch()
    {
        $user_id = 1; 
        
        # returns film id from table 'watch_list'
        $film_id = $this->db->get_where('watch_list', array('user_id'=>$user_id))->result();
        
        # get the film id's from table film
        $watch_array = array();
        foreach($film_id as $film)
        {
            $w = $this->db->get_where('films', array('id'=>($film->film_id)))->result();
            array_push($watch_array, $w);  
        } 
        return $watch_array; # array of an array of film id's
    }


}
?>
