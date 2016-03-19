<?php
/**
* 
Main  Resume class
*/
class Resume extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		// if($this->session->userdata('logged_in') != TRUE)
		// {
		// 	redirect('login');			
		// }
	}
	/* Constructor Ends Here */
	public function index()
	{
		$this->load->view('index');
	}
	/* Main Index File Ends Here */	
	public function information()
	{
		$ID = $this->session->userdata('userid');
		$Data['User'] = $this->Resume_model->DBSelect('profile',array('userid'=>$ID));
		$this->load->view('information',$Data);
	}
	public function Userinformation()
	{
		if ($this->input->post('saveinfo')) {
			$ProfileImage = $this->Resume_model->upload('ProfileImage');
			$ImageName    = $ProfileImage;
			$FilePath     = 'assets/upload/';
			$FileName     = $ImageName['file_name'];
			$BImage      = $this->Resume_model->upload('backgroundImage');
			$BImageName    = $BImage['file_name'];
			$UserInfo = array(
					  'name'       =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('Name')))), 
					  'short_intro' =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('Intro')))), 
					  'facebook'   =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('Facebook')))), 
					  'github'     =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('Github')))), 
					  'twitter'    =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('Twitter')))), 
					  'gmail'      =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('Gmail')))), 
					  'linkeden'   =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('Linkedin')))), 
					  'yahoo'      =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('Yahoo')))), 
					  'address'    =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('Address')))), 
					  'phone'      =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('Contact')))), 
					  'picture'    =>  $FileName, 
					  'userid'     =>  $this->session->userdata('userid'), 
					  'bg_name'    =>  $BImageName, 
					  'bg_url'     =>  $FilePath, 
					  'email'      =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('otherEmail')))), 
					);
			$Query = $this->Resume_model->DBINSERT('profile',$UserInfo);
			if ($Query) {
				$this->information();
			}
		}
	}
	public function UpdateInformation()
	{
		if ($this->input->post('updateinfo')) {
			$ID = array('userid'=>$this->session->userdata('userid'),);
			$UserInfo = array(
					  'name'       =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('Name')))), 
					  'short_intro'=>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('Intro')))), 
					  'facebook'   =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('Facebook')))), 
					  'github'     =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('Github')))), 
					  'twitter'    =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('Twitter')))), 
					  'gmail'      =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('Gmail')))), 
					  'linkeden'   =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('Linkedin')))), 
					  'yahoo'      =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('Yahoo')))), 
					  'address'    =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('Address')))), 
					  'phone'      =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('Contact')))), 
					  'email'      =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('otherEmail')))), 
					);
			$Query = $this->Resume_model->DBUpdate('profile',$UserInfo,$ID);
			if ($Query) {
				$this->information();
			}
			else
			{
				$this->information();
			}
		}
	}
	public function whoru()
	{
		$ID = $this->session->userdata('userid');
		$Data['Table'] = $this->Resume_model->DBSelecta('who',array('userid'=>$ID));
		$this->load->view('who',$Data);
	}
	public function Uploadwhoru()
	{
		if ($this->input->post('savewho')) {
			$ID = $this->session->userdata('userid');
			$Check = $this->Resume_model->DBSelect('who', array('userid'=>$ID));
			if (!empty($Check)) {
				$this->whoru();
			}
			else
			{
				$UserInfo = array(
					  'header'     =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('title')))), 
					  'description'    =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('desc')))), 
					  'userid'     =>  $this->session->userdata('userid'), 
					);
				$Query = $this->Resume_model->DBINSERT('who',$UserInfo);
				if ($Query) {
					$this->whoru();
				}	
			}
		}
	}
	public function Deletewhoru()
	{
		$Uri = $this->uri->segment(3);
		$Query = $this->Resume_model->DBDelete('who',array('userid'=>$Uri));
		if ($Query) {
			$this->whoru();
		}
	}
	/**





	*/
	public function language()
	{
		$ID = $this->session->userdata('userid');
		$Data['Table'] = $this->Resume_model->DBSelecta('languages',array('userid'=>$ID));
		$this->load->view('language',$Data);
	}
	public function Uploadlanguage()
	{
		if ($this->input->post('savelang')) {
			$UserInfo = array(
					  'title'       =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('title')))), 
					  'fluency'    =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('rating')))), 
					  'userid'      =>  $this->session->userdata('userid'), 
					);
			$Query = $this->Resume_model->DBINSERT('languages',$UserInfo);
			if ($Query) {
				$this->language();
			}
		}
	}
	public function Deletelanguage()
	{
		$Uri = $this->uri->segment(3);
		$Query = $this->Resume_model->DBDelete('languages',array('id'=>$Uri));
		if ($Query) {
			$this->language();
		}
	}
	/**



	

	*/
	public function portfolio()
	{
		$this->load->view('portfolio');
	}
	public function viewportfolio()
	{
		$ID = $this->session->userdata('userid');
		$Data['Table'] = $this->Resume_model->DBSelecta('portfolios',array('userid'=>$ID));
		$this->load->view('view_port',$Data);
	}
	public function UploadPortfolio()
	{
		if ($this->input->post('portfolio')) {
			$ProfileImage = $this->Resume_model->upload('pic1');
			$ImageName    = $ProfileImage;
			$FilePath     = 'assets/upload/';
			$FileName     = $ImageName['file_name'];
			$BImage = $this->Resume_model->upload('pic2');
			$BImageName    = $BImage['file_name'];
			$BImage1 = $this->Resume_model->upload('pic3');
			$BImageName1    = $BImage1['file_name'];
			$UserInfo = array(
					  'title'       =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('Title')))), 
					  'category'    =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('Category')))), 
					  'general'     =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('Intro')))), 
					  'details'     =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('Detail')))), 
					  'userid'      =>  $this->session->userdata('userid'), 
					  'result'      =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('Result')))), 
					  'mpic'        =>  $FileName, 
					  'onlinelink'  =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('Link')))), 
					);
			$Query = $this->Resume_model->DBINSERT('portfolios',$UserInfo);
			$Pid = $this->db->insert_id();
			$Pic1 = array(
					  'picture_name'   => $FileName, 
					  'picture_url' =>  $FilePath, 
					  'pfid'   =>  $Pid, 
					);
			$Pic2 = array(
					  'picture_name'   => $BImageName, 
					  'picture_url' =>  $FilePath, 
					  'pfid'   =>  $Pid, 
					);
			$Pic3 = array(
					  'picture_name'   => $BImageName1, 
					  'picture_url' =>  $FilePath, 
					  'pfid'   =>  $Pid, 
					);
			$Query = $this->Resume_model->DBINSERT('pictures',$Pic1);
			$Query = $this->Resume_model->DBINSERT('pictures',$Pic2);
			$Query = $this->Resume_model->DBINSERT('pictures',$Pic3);
			if ($Query) {
				$this->portfolio();
			}
		}
	}
	public function DeletePort()
	{
		$Uri = $this->uri->segment(3);
		$Query = $this->Resume_model->DBDelete('portfolios',array('pfid'=>$Uri));
		if ($Query) {
			$this->viewportfolio();
		}
	}
	public function skills()
	{
		$ID = $this->session->userdata('userid');
		$Data['Table'] = $this->Resume_model->DBSelecta('skills',array('userid'=>$ID));
		$this->load->view('skills',$Data);
	}
	public function Deleteskill()
	{
		$Uri = $this->uri->segment(3);
		$Query = $this->Resume_model->DBDelete('skills',array('id'=>$Uri));
		if ($Query) {
			$this->skills();
		}
	}
	public function UploadSkills()
	{
		if ($this->input->post('saveskill')) {
			$UserInfo = array(
					  'header'       =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('title')))), 
					  'ranking'    =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('rating')))), 
					  'userid'      =>  $this->session->userdata('userid'), 
					);
			$Query = $this->Resume_model->DBINSERT('skills',$UserInfo);
			if ($Query) {
				$this->skills();
			}
		}
	}
	public function specialties()
	{
		$ID = $this->session->userdata('userid');
		$Data['Table'] = $this->Resume_model->DBSelecta('specialties',array('userid'=>$ID));
		$this->load->view('specialties',$Data);
	}
	public function DeleteSpec()
	{
		$Uri = $this->uri->segment(3);
		$Query = $this->Resume_model->DBDelete('specialties',array('id'=>$Uri));
		if ($Query) {
			$this->specialties();
		}
	}
	public function UploadSpecialties()
	{
		if ($this->input->post('savespecial')) {
			$UserInfo = array(
					  'title'       =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('name')))), 
					  'description'    =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('desc')))), 
					  'userid'      =>  $this->session->userdata('userid'), 
					);
			$Query = $this->Resume_model->DBINSERT('specialties',$UserInfo);
			if ($Query) {
				$this->specialties();
			}
		}
	}
	public function education()
	{	
		$ID = $this->session->userdata('userid');
		$Data['Table'] = $this->Resume_model->DBSelecta('education',array('userid'=>$ID));
		$this->load->view('education',$Data);
	}
	public function UploadEducation()
	{
		if ($this->input->post('saveeducation')) {
			$UserInfo = array(
					  'from'       =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('From')))), 
					  'to'    =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('To')))), 
					  'title'     =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('Title')))), 
					  'name'     =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('Desc')))), 
					  'userid'      =>  $this->session->userdata('userid'), 
					);
			$Query = $this->Resume_model->DBINSERT('education',$UserInfo);
			if ($Query) {
				$this->education();
			}
		}
	}
	public function DeleteEduc()
	{
		$Uri = $this->uri->segment(3);
		$Query = $this->Resume_model->DBDelete('education',array('id'=>$Uri));
		if ($Query) {
			$this->education();
		}
	}
	public function settings()
	{
		$this->load->view('settings');
	}
	public function hobbies()
	{
		$ID = $this->session->userdata('userid');
		$Data['Table'] = $this->Resume_model->DBSelecta('hobbies',array('userid'=>$ID));
		$this->load->view('hobbies',$Data);
	}
	public function Deletehobbies()
	{
		$Uri = $this->uri->segment(3);
		$Query = $this->Resume_model->DBDelete('hobbies',array('id'=>$Uri));
		if ($Query) {
			$this->hobbies();
		}
	}
	public function UploadHobby()
	{
		if ($this->input->post('savehobby')) {
			$UserInfo = array(
					  'title'       =>  htmlspecialchars(stripcslashes(strip_tags($this->input->post('Name')))), 
					  'userid'      =>  $this->session->userdata('userid'), 
					);
			$Query = $this->Resume_model->DBINSERT('hobbies',$UserInfo);
			if ($Query) {
				$this->hobbies();
			}
		}
	}
	/*Locations ends here ============================================================================*/
	public function messages($id)
	{
		if (!empty($id)) {
			switch ($id) {
				case '1':
				return	'<div class="alert alert-success alert-dismissible" role="alert">
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         Added Succesfully!
                         </div>';
					break;
				case '2':
					return '<div class="alert alert-danger alert-dismissible" role="alert">
                             	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                             	Failure!
							</div>';
					break;
				case '3':
					return '<div class="alert alert-warning alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                Please Check The Form Fields.
                            </div>';
					break;
				case '4':
				return	'<div class="alert btn-success alert-success alert-dismissible" role="alert">
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         Deleted!
                         </div>';
					break;
				case '5':
				return	'<div class="alert alert-danger alert-dismissible" role="alert">
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         Deletion Failed!
                         </div>';
				break;
				case '6':
				return	'<div class="alert alert-success alert-dismissible" role="alert">
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         Updated!
                         </div>';
				break;
				case '7':
				return	'<div class="alert alert-danger alert-dismissible" role="alert">
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         Updation Failed!
                         </div>';
				break;
				case '8':
				return	'<div class="alert alert-success alert-dismissible" role="alert">
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         Done With Success!
                         </div>';
				break;
				case '9':
				return	'<div class="alert alert-success alert-dismissible" role="alert">
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         Failed!
                         </div>';
				break;
				case '10':
				return	'<div class="alert alert-success alert-dismissible" role="alert">
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          Database Backup Successful!
                         </div>';
				break;
				case '11':
				return	'<div class="alert alert-danger alert-dismissible" role="alert">
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          Database Backup Failed!
                         </div>';
				break;
				default:
					echo "Unknown Error";
					break;
			}
		}
	}

	
}
?>