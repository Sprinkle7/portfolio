<?php
/**
* 
*/
class Holla_api_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	public function DBSelectRow($table,$where)
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
		public function DBDelete($table,$where)
		{
			$this->db->where($where);
			$this->db->delete($table);
		}
	
	public function InsertToDB($table,$Data)
		{
			$Query = $this->db->insert($table,$Data);
			if ($Query) {
			 	return true;
			}
			else
			{
				return false;
			}
		}	
	public function SelectSTickers($start,$end)
	{
		$Query = $this->
					db->
					query("SELECT * FROM `category` ORDER BY `position` ASC LIMIT $start, $end");
		if ($Query->num_rows()>0) {
			return $Query->result();
		}
		else
		{
			return false;
		}
	}
	public function Categories($id,$start,$end)
	{
		$Query = $this->
					db->
					query("SELECT * FROM `stickers`
						  JOIN `imagefile`
						  ON `stickers`.`sticker_id`=`imagefile`.`sticker_id`
						  JOIN `soundfile`
						  ON `stickers`.`sticker_id`=`soundfile`.`sticker_id`
						  WHERE `category_id`='$id' LIMIT $start,$end
						");
		if ($Query->num_rows()>0) {
			return $Query->result();
		}
		else
		{
			return false;
		}
	}
	function ImageUpdate($table,$data,$where)
	{
		$Query = $this->db->where($where)->update($table,$data);
		if ($Query) {
			return true;
		}
		else
		{
			return false;
		}
	}
	public function do_upload($image,$path)
    {
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|jpeg|PNG|GIF';
        $config["encrypt_name"] = true;
        $config['max_size'] = '100000';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload($image))
        {
           return false;
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
        }
    }

    public function upload_sound($sound)
    {
        $config['upload_path'] = base_url().'assets/stickeraudio/';
        $config['allowed_types'] = 'mp3|MP3|mpeg|mpeg3|MPEG|MPEG3';
        $config["encrypt_name"] = true;
        $config['max_size'] = '100000';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload($sound))
        {
           return false;
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
        }
    }
public function GetTrending($start,$end,$trend,$approve)
	{
		$Query = $this->
					db->
					query("SELECT * FROM `stickers`
						  JOIN `imagefile`
						  ON `stickers`.`sticker_id`=`imagefile`.`sticker_id`
						  JOIN `soundfile`
						  ON `stickers`.`sticker_id`=`soundfile`.`sticker_id`
						  JOIN `members`
						  ON `stickers`.`number_id` =`members`.`number_id`
						  JOIN `numbers`
						  ON `members`.`number_id`  =`numbers`.`number_id`
						  WHERE `is_trending`='$trend' AND `approve`='$approve' 
						  LIMIT $start,$end
						");
		if ($Query->num_rows()>0) {
			return $Query->result();
		}
		else
		{
			return false;
		}
	}
/*End of File*/
}
?>