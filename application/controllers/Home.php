<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$data['title']='Home';
        $data['category'] = $this->CommonModal->getAllRows('category');
    
		$data['blog'] = $this->CommonModal->getAllRowsInOrderWithLimit('blog','3', 'id', 'DESC');
		$data['categorylimit'] = $this->CommonModal->getAllRowsInOrderWithLimit('category','15', 'id', 'ASC');

		$data['product'] = $this->CommonModal->getAllRowsInOrder('product', 'id', 'DESC');


		$this->load->view('index', $data);

	}
	public function about()
	{
		$data['title']='About Us';
		$data['category'] = $this->CommonModal->getAllRows('category');
		$data['testimonial'] = $this->CommonModal->getAllRowsInOrder('testimonial', 'id', 'DESC');
    
		$this->load->view('about',$data);

	}
	
	public function blog()
	{
		
		$data['title']='Blog';
		$data['category'] = $this->CommonModal->getAllRows('category');
    
		$data['blog'] = $this->CommonModal->getAllRowsInOrder('blog', 'id', 'DESC');

		$this->load->view('blog' , $data);

	}
	
	public function blogdetail($id)
	{
		$tid = decryptId($id);
		$data['category'] = $this->CommonModal->getAllRows('category');
    
		$data['other'] = $this->CommonModal->getAllRowsInOrderWithLimit('blog','5', 'id', 'DESC');

        $data['blog'] = $this->CommonModal->getRowById('blog', 'id', $tid);

		$this->load->view('blogdetail' , $data);

	}
	public function news()
	{
		// $data['newss'] = $this->CommonModal->getAllRows('bc_news');
		$data['title']='news';
		$data['category'] = $this->CommonModal->getAllRows('category');
    
		$this->load->view('news' , $data);

	}
	public function newsdetail()
	{
		// $data['newss'] = $this->CommonModal->getAllRows('bc_news');
		$data['title']='news';
		$data['category'] = $this->CommonModal->getAllRows('category');
    
		$this->load->view('newsdetail' , $data);

	}
	public function career()
	{
		// $data['careers'] = $this->CommonModal->getAllRows('bc_career');
		$data['title']='career';
		$data['category'] = $this->CommonModal->getAllRows('category');
    
		$data['career'] = $this->CommonModal->getAllRowsInOrder('career', 'id', 'DESC');
		$this->load->view('career' , $data);

	}
	public function video()
	{
	
		$data['title']='Video Gallery';
		$data['category'] = $this->CommonModal->getAllRows('category');
    
		$data['video'] = $this->CommonModal->getAllRowsInOrder('video', 'id', 'DESC');
		$this->load->view('video' , $data);

	}
	public function thankyou(){
		$data['title'] = "Thankyou";
		$data['category'] = $this->CommonModal->getAllRows('category');
    
		$this->load->view('thankyou');
	}
	public function apply($id)
	{
		$tid = decryptId($id);

		$data['title']='Apply';
		$data['job_id'] =$tid;
		$data['category'] = $this->CommonModal->getAllRows('category');
    
		$this->load->view('apply' , $data);

	}
	public function add_apply()
    {
    
    
		$data['title']='apply';
        
        if ($this->input->post()) {
            $post = $this->input->post();

            // Extract item-related data separately
            $edus = [];
        if (isset($post['i_name']) && is_array($post['i_name'])) {
            foreach ($post['i_name'] as $key => $edu) {
                $edus[] = [
                    'i_name' => $edu,
                    'department' => $post['department'][$key],
                    'degree' => $post['degree'][$key],
                    'from' => $post['from'][$key],
                 'to' =>$post['to'][$key],
                 'currently' =>$post['currently'][$key],

                   
                ];
            }
        }
		$exps = [];
        if (isset($post['job_title']) && is_array($post['job_title'])) {
            foreach ($post['job_title'] as $key => $exp) {
                $exps[] = [
                    'job_title' => $exp,
                    'company' => $post['company'][$key],
                    'summary' => $post['summary'][$key],
                    'w_from' => $post['w_from'][$key],
                 'w_to' =>$post['w_to'][$key],
                 'currently_working' =>$post['currently_working'][$key],

                   
                ];
            }
        }
		$skills = [];
        if (isset($post['skill']) && is_array($post['skill'])) {
            foreach ($post['skill'] as $key => $skill) {
                $skills[] = [
                    'skill' => $skill,
                   
                ];
            }
        }
            // Remove array-based item fields from main insert
            unset($post['i_name'],$post['department'], $post['degree'], $post['from'], $post['to'], $post['w_from'], $post['w_to'], $post['job_title'], $post['company'], $post['summary'], $post['skills'], $post['skill'],$post['currently'],$post['currently_working']);
			$post['image'] = imageUpload('image', 'uploads/application/');
			$post['resume'] = pdfUpload('resume', 'uploads/application/');
            // Insert main quotation (Quotes Table)
            $application_id = $this->CommonModal->insertRowReturnId('application', $post);
    
            // Insert items into quotation_items table
            if ($application_id && !empty($edus)) {
                foreach ($edus as &$edu) {
                    $edu['application_id'] = $application_id; // Link items to main quote
                }
                $this->CommonModal->insertBatch('education', $edus);
            }
			if ($application_id && !empty($exps)) {
                foreach ($exps as &$exp) {
                    $exp['application_id'] = $application_id; // Link items to main quote
                }
                $this->CommonModal->insertBatch('experince', $exps);
            }
			if ($application_id && !empty($skills)) {
                foreach ($skills as &$skill) {
                    $skill['application_id'] = $application_id; // Link items to main quote
                }
                $this->CommonModal->insertBatch('skill_set', $skills);
            }
            if ($application_id) {
                $this->session->set_flashdata('msg', '<div class="alert alert-success">Quotation Added Successfully</div>');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger">Error while saving data</div>');
            }
    
            redirect(base_url('thankyou'));
        } 
    }
	public function category($id)
	{
		$tid = decryptId($id);

		$data['title']='category';
		$data['category'] = $this->CommonModal->getAllRows('category');
        $data['categoryById'] = $this->CommonModal->getRowById('category','id', $tid);
		$data['other'] = $this->CommonModal->getAllRowsInOrderWithLimit('category','5', 'id', 'DESC');
		$data['sub_category'] = $this->CommonModal->getAllRowsInOrder('sub_category', 'id', 'DESC');
    
		$this->load->view('category' , $data);

	}
	public function product($id)
	{
		$tid = decryptId($id);

		$data['title']='product';
		$data['category'] = $this->CommonModal->getAllRows('category');
        $data['product'] = $this->CommonModal->getRowById('product','id', $tid);
   
	
		$this->load->view('product' , $data);

	}
	public function sub_category($id)
	{
		$tid = decryptId($id);

		$data['title']='sub_category';
		$data['category'] = $this->CommonModal->getAllRows('category');
		$data['sub_categoryy'] = $this->CommonModal->getRowById('sub_category','id', $tid);
		$data['other'] = $this->CommonModal->getAllRowsInOrderWithLimit('sub_category','5', 'id', 'DESC');
		$data['product'] = $this->CommonModal->getAllRowsInOrder('product', 'id', 'DESC');
		$this->load->view('sub_category' , $data);

	}
	public function delarship()
	{
		// $data['delarships'] = $this->CommonModal->getAllRows('bc_delarship');
		$data['title']='delarship';
		$data['category'] = $this->CommonModal->getAllRows('category');
    
		$this->load->view('delarship' , $data);

	}
	public function contact()
	{
		$data['title']='Contact Us';
		$data['category'] = $this->CommonModal->getAllRows('category');
    
		if (count($_POST) > 0) {

            $post = $this->input->post();
            $savedata = $this->CommonModal->insertRowReturnId('contact', $post);

            if ($savedata) {

                $this->session->set_userdata('msg', '<div class="alert alert-success"> Successfully</div>');

            } else {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Not Successfully</div>');

            }

            redirect(base_url('thankyou'));
            exit();

        } 

            $this->load->view('contact',$data);


	}
	
	

}