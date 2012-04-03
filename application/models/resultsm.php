<?php
# Model for search results

class Resultsm extends CI_Model
{  
    public function results($data)
    {
        #$title = $data["title"];
        $title = "Elizabeth";
	    $genre1 = $data["genre1"];
	    $genre2 = $data["genre2"];
	    $genre3 = $data["genre3"];
	    $actor = $data["actor"];
	    $rating = $data["rating"];
	    
	    $id_array = array();
	    
	    $this->db->select('id');
	    var_dump($title);
	    if($title != null)
	    {
	        var_dump($title);
	        $a = $this->db->get_where('films', array('title'=>$title))->result();
	        array_push($id_array, $a);
	    }
	    
	    return $this->db->get_where('films', array(array('id'=>$a)))->result();
	    

    }
}
?>
