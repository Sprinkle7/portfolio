<?php
/**
* 
*/
class Font extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$Name = $this->uri->segment('3');
		$Person  =  $this->Resume_model->DBSelect('users',array('profile_name'=>$Name));
		if (!empty($Person)) {
			$ID = array('userid'=> $Person->userid);
			$Data['profile'] = $this->Resume_model->DBSelect('profile', $ID);
			$Data['who'] = $this->Resume_model->DBSelect('who', $ID);
			$Data['skills'] = $this->Resume_model->DBSelecta('skills', $ID);
			$Data['hobbies'] = $this->Resume_model->DBSelecta('hobbies', $ID);
			$Data['special'] = $this->Resume_model->DBSelecta('specialties', $ID);
			$Data['education'] = $this->Resume_model->DBSelecta('education', $ID);
			$Data['language'] = $this->Resume_model->DBSelecta('languages', $ID);
			$Data['portfolio'] = $this->Resume_model->DBSelecta('portfolios', $ID);
			$this->load->view('moje/index',$Data);
		}
	}

	public function Project()
	{
		$ID = array('pfid'=>$this->input->post('para'));
		$Data['portfolio'] = $this->Resume_model->DBSelect('portfolios',$ID);
		$Data['pic']       = $this->Resume_model->DBSelecta('pictures',$ID);
		$this->load->view('moje/project',$Data);
	}

}
?>