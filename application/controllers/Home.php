<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$data['title']='Home';
		$this->load->view('index', $data);

	}
	public function about()
	{
		$data['title']='About Us';
		
		$this->load->view('about',$data);

	}
	
	public function blog()
	{
		// $data['blogs'] = $this->CommonModal->getAllRows('bc_blog');
		$data['title']='Blog';
		$this->load->view('blog' , $data);

	}
	public function blogdetail()
	{
		// $data['blogs'] = $this->CommonModal->getAllRows('bc_blog');
		$data['title']='Blog';
		$this->load->view('blogdetail' , $data);

	}
	// public function blogdetail($id)
	// {
	// 	$tid = decryptId($id);

    //     $data['blog'] = $this->CommonModal->getRowById('bc_blog', 'id', $tid);

	// 	$this->load->view('blog-details' , $data);

	// }
	public function news()
	{
		// $data['newss'] = $this->CommonModal->getAllRows('bc_news');
		$data['title']='news';
		$this->load->view('news' , $data);

	}
	public function newsdetail()
	{
		// $data['newss'] = $this->CommonModal->getAllRows('bc_news');
		$data['title']='news';
		$this->load->view('newsdetail' , $data);

	}
	public function career()
	{
		// $data['careers'] = $this->CommonModal->getAllRows('bc_career');
		$data['title']='career';
		$this->load->view('career' , $data);

	}
	public function apply()
	{
		// $data['applys'] = $this->CommonModal->getAllRows('bc_apply');
		$data['title']='apply';
		$this->load->view('apply' , $data);

	}
	public function category()
	{
		// $data['categorys'] = $this->CommonModal->getAllRows('bc_category');
		$data['title']='category';
		$this->load->view('category' , $data);

	}
	public function product()
	{
		// $data['products'] = $this->CommonModal->getAllRows('bc_product');
		$data['title']='product';
		$this->load->view('product' , $data);

	}
	public function delarship()
	{
		// $data['delarships'] = $this->CommonModal->getAllRows('bc_delarship');
		$data['title']='delarship';
		$this->load->view('delarship' , $data);

	}
	public function contact()
	{
		$data['title']='Contact Us';
		// if (count($_POST) > 0) {

        //     $post = $this->input->post();
        //     $savedata = $this->CommonModal->insertRowReturnId('contact_query', $post);

        //     if ($savedata) {

        //         $this->session->set_userdata('msg', '<div class="alert alert-success"> Successfully</div>');

        //     } else {

        //         $this->session->set_userdata('msg', '<div class="alert alert-success">Not Successfully</div>');

        //     }

        //     redirect(base_url('Home/contact'));
        //     exit();

        // } 

            $this->load->view('contact',$data);


	}
	
	

}