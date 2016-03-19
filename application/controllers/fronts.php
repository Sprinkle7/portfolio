<?php
/**
* 
*/
class Fronts extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('front/index');
	}
	public function search()
	{
		if ($this->input->post('sear')) {
			$Value = trim($this->input->post('search'));
			if (empty($Value)) {
				$this->load->view('front/index');
			}
			else{
			$Result['search'] = $this->Resume_model->Search(array('profile_name'=>$Value));
			foreach ($Result['search'] as $value) {
				$ID = $value->userid;
				$Person = $this->Resume_model->DBSelect('profile',array('userid'=>$ID));
				$Result['users'] = '<div class="col-lg-4">
					<img class="img-circle" src="'.base_url().$Person->bg_url.$Person->picture.'" alt="Generic placeholder image" width="140" height="140">
					<h2>'.$Person->name.'</h2>
					<p>'.$Person->short_intro.'</p>
					<p><a class="btn btn-default" target="_blank" href="'.base_url().'font/index/'.$value->profile_name.'" role="button">View details &raquo;</a></p>
			 	 </div>';
				}
			$this->load->view('front/search',$Result);
			}

		}
	}
	public function signup()
	{
		if ($this->input->post('signup')) {
			$this->input->post('profile');
			$Username = $this->input->post('email');
			$Password = $this->input->post('password');
			$UserInfo = array(
					  'profile_name'   =>  $this->input->post('profile'), 
					  'username'       =>  $this->input->post('username'), 
					  'email'          =>  $this->input->post('email'), 
					  'password'       =>  $this->input->post('password'), 
					);
			$where  = array(
					      'email' => $Username,
					      'password' => $Password,
				    );
			$Query = $this->Resume_model->DBINSERT('users',$UserInfo);
			if ($Query) {
				if (!empty($Username) && !empty($Password)){ 
				$query = $this->Resume_model->DBSelect('users',$where);
				if($query){
						$sessiondata =  array(
						'username'   => $query->username,
						'profile'  	 => $query->profile_name,
						'userid'  	 => $query->userid,
						'logged_in'  => TRUE 
						);
						$this->session->set_userdata($sessiondata);
						redirect(base_url().'Resume/index');
					}
				else{					
						redirect(base_url().'login');
					}	
				}
				else{
					redirect(base_url().'login');
				}
			}
			else{
				redirect(base_url().'fronts');
			}
		}
	}
}
?>