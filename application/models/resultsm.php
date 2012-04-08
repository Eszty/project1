<?php
# Model for search results

class Resultsm extends CI_Model
{  
    public function results($data)
    {
        var_dump($data);
        $title = $data["title"];
        #$title = "Elizabeth";
	    $genre1 = $data["genre1"];
	    $genre2 = $data["genre2"];
	    $genre3 = $data["genre3"];
	    $actor = $data["actor"];
	    $rating = $data["rating"];
	    
	    $id_array = array();
	    
	    $this->db->select('id');
	    if($title != null)
	    {
	        $a = $this->db->get_where('films', array('title'=>$title))->result();
	        array_push($id_array, $a);
	    }
	    
	    $film_array = array();
	    
	    foreach($id_array as $id)
	    {
	        foreach($id as $id){
	            $f = $this->db->get_where('films', array('id' => ($id->id)))->result();
	            array_push($film_array, $f);
	        }
	    }
	    return $film_array;

    }
}
?>
