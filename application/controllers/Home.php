<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		if (count($_POST) > 0) {

            $post = $this->input->post();
            $savedata = $this->CommonModal->insertRowReturnId('contact_query', $post);

            if ($savedata) {

                $this->session->set_userdata('msg', '<div class="alert alert-success"> Successfully</div>');

            } else {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Not Successfully</div>');

            }

            redirect(base_url('Home/index'));
            exit();

        } 
		$data['testimonials'] = $this->CommonModal->getAllRows('bc_testimonial');
		$data['banner'] = $this->CommonModal->getAllRows('bc_home_gallery');
		
		$this->load->view('home', $data);

	}
	public function about()
	{
        $data['team'] = $this->CommonModal->getAllRowsInOrder('bc_team',  'mid', 'DESC');
		
		$this->load->view('about',$data);

	}
	public function donate()
	{
		
		$this->load->view('donate');

	}
	public function gallery()
	{
		

		$data['banner'] = $this->CommonModal->getAllRows('bc_home_gallery');
		
		$this->load->view('gallery', $data);
	}
	public function services()
	{
		if (count($_POST) > 0) {

            $post = $this->input->post();
            $savedata = $this->CommonModal->insertRowReturnId('contact_query', $post);

            if ($savedata) {

                $this->session->set_userdata('msg', '<div class="alert alert-success"> Successfully</div>');

            } else {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Not Successfully</div>');

            }

            redirect(base_url('Home/services'));
            exit();

        } 
		$data['services'] = $this->CommonModal->getAllRows('bc_services');
		
		$this->load->view('services', $data);

	}
	public function blog()
	{
		$data['blogs'] = $this->CommonModal->getAllRows('bc_blog');
		
		$this->load->view('blog' , $data);

	}
	public function contact()
	{
		if (count($_POST) > 0) {

            $post = $this->input->post();
            $savedata = $this->CommonModal->insertRowReturnId('contact_query', $post);

            if ($savedata) {

                $this->session->set_userdata('msg', '<div class="alert alert-success"> Successfully</div>');

            } else {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Not Successfully</div>');

            }

            redirect(base_url('Home/contact'));
            exit();

        } 

            $this->load->view('contact-us');


	}
	public function career()
	{
		if (count($_POST) > 0) {

            $post = $this->input->post();
            $savedata = $this->CommonModal->insertRowReturnId('career', $post);

            if ($savedata) {

                $this->session->set_userdata('msg', '<div class="alert alert-success"> Successfully</div>');

            } else {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Not Successfully</div>');

            }

            redirect(base_url('Home/career'));
            exit();

        } 


		$this->load->view('career');

	}
	public function service_details($id)
	{
		$tid = decryptId($id);

        $data['service'] = $this->CommonModal->getRowById('bc_services', 'blog_id', $tid);
		$this->load->view('service-details', $data);

	}
	public function blog_details($id)
	{
		$tid = decryptId($id);

        $data['blog'] = $this->CommonModal->getRowById('bc_blog', 'id', $tid);

		$this->load->view('blog-details' , $data);

	}
}