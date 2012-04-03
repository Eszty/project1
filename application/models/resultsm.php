<?php
# Model for search results

public class Results extends CI_Model
{  
    public function results($data)
    {
        $title = $data["title"];
	    $genre1 = $data["genre1"];
	    $genre2 = $data["genre2"];
	    $genre3 = $data["genre3"];
	    $actor = $data["actor"];
	    $rating = $data["rating"];
	    
	    $id_array = array();
	    
	    $this->db->select('id');
	    
	    if($title != "")
	    {
	        $a = $this->db->get_where('films', array('title'=>$title))->result();
	        array_push($id_array, $a);
	    }
	    
	    return $id_array;
	    

    }
}
?>
