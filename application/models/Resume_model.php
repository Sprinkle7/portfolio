<?php

class Resume_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	public function upload($image)
	{
	    // $album,$album = strtolower($album);
	    $upload_config = array(
	    						'upload_path' => './assets/upload/',
	    						'allowed_types' =>'jpg|jpeg|gif|png|JPG|JPEG|GIF|PNG', 
	    						'max_size' => '3092',
	    						'encrypt_name' => true, 
	    					   );
	    $this->load->library('upload', $upload_config);
	    // create an album if not already exist in uploads dir
	    // wouldn't make more sence if this part is done if there are no errors and right before the upload ??
	    // if (!is_dir('upload'))
	    // {
	        // mkdir('./assets/upload/', 0777, true);
	    // }
	    // $dir_exist = true; // flag for checking the directory exist or not
	    // if (!is_dir('./assets/upload/'.$album))
	    // {
	        // mkdir('./assets/upload/'.$album, 0777, true);
	        // $dir_exist = false; // dir not exist
	    // }
	    $this->upload->initialize($upload_config);
	    if (!$this->upload->do_upload($image))
	    {
	        // upload failed
	        //delete dir if not exist before upload
	        // if(!$dir_exist)
	          // rmdir('./assets/upload/'.$album);

	        return array('error' => $this->upload->display_errors('<span>', '</span>'));
	    } else
	    {
	        // upload success
	        $upload_data = $this->upload->data();
	        return $upload_data;
	    }
	}
	public function DBINSERT($table,$data)
	{
		$Execution = $this->db->insert($table,$data);
		if ($Execution) {
			return true;
		}
		else {
			return false;
		}
	}
	public function DBSelectAllOrder($table)
	{
		$this->db->select('*')->from($table)->order_by('position','ASC');
		$Query = $this->db->get();
		if ($Query->num_rows()>0) {
			return $Query->result();
		}
		else{
			return false;
		}
	}
	public function DBSelect($table,$where)
	{
		$this->db->where($where);
		$this->db->select('*')->from($table);
		$Query = $this->db->get();
		if ($Query->num_rows()>0) {
			return $Query->row();
		}
		else{
			return false;
		}
	}
	public function Search($value)
	{
		 $this->db->like($value);
		 $Query = $this->db->get('users');
		 return $Query->result();
	}
	public function DBSelecta($table,$where)
	{
		$this->db->where($where);
		$this->db->select('*')->from($table);
		$Query = $this->db->get();
		if ($Query->num_rows()>0) {
			return $Query->result();
		}
		else{
			return false;
		}
	}
	public function DBSelectAll($table)
	{
		$this->db->select('*')->from($table);
		$Query = $this->db->get();
		if ($Query->num_rows()>0) {
			return $Query->result();
		}
		else{
			return false;
		}
	}
	public function DBDelete($table,$where)
	{
			$this->db->where($where);
			$query = $this->db->delete($table);
			if ($query) {
				return true;
			}
	}
	public function DBUpdate($table,$Data,$where)
	{
		$this->db->where($where);
		$this->db->update($table,$Data);
	}
	public function Portfolio($where)
	{
		$query = $this->db->query("SELECT * FROM `portfolios` JOIN `pictures` ON `portfolios`.`pfid` = `pictures`.`pfid` WHERE `userid` = '$where'");
		return $query->result();
	}
}
?>