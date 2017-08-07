<?php
class data extends CI_model
{
	function ambil_data(){
		return $this->db->get('jobseeker');
	}
}
?>