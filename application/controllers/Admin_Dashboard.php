<?php

defined('BASEPATH') or exit('no direct access allowed');



class Admin_Dashboard extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();

        if (sessionId('id') == "") {

            redirect(base_url('admin'));
        }

        date_default_timezone_set("Asia/Kolkata");
    }



    public function index()
    {

        $data['title'] = "Dashboard";

        $data['contact'] = $this->CommonModal->getNumRow('contact');

        $data['product'] = $this->CommonModal->getNumRow('product');

        $data['sub_category'] = $this->CommonModal->getNumRow('sub_category'); //use for sub-services

        $data['category'] = $this->CommonModal->getNumRow('category');

        // $data['testimonial'] = $this->CommonModal->getNumRow('testimonials');

        $data['blog'] = $this->CommonModal->getNumRow('blog');
  
  

        $this->load->view('admin/index', $data);
    }

    public function profile()
    {
        $data['title'] = "Admin Profile";

        $data['admin'] = $this->CommonModal->getAllRows('admin', 'id');
        $this->load->view('admin/profile', $data);
    }
    public function update_profile($id)
    {

        $data['title'] = 'Update';
        $data['tag'] = 'edit';
        $tid = $id;
        $data['admin'] = $this->CommonModal->getRowById('admin', 'id', $tid);

        if (count($_POST) > 0) {

            $post = $this->input->post();
            // $image_url = $post['image'];
       
            // if ($_FILES['image']['name'] != '') {
             
            //     $img = imageUpload('image', 'uploads/users/');

            //     $post['image'] = $img;

            //     if ($image_url != "") {

            //         unlink('uploads/users/' . $image_url);
            //     }
            // }
            // $image_url1 = $post['sign'];
            // if ($_FILES['sign']['name'] != '') {

            //     $img1 = imageUpload('sign', 'uploads/users/');

            //     $post['sign'] = $img1;

            //     if ($image_url1 != "") {

            //         unlink('uploads/users/' . $image_url1);
            //     }
            // }
            // $image_url2 = $post['seal'];
            // if ($_FILES['seal']['name'] != '') {

            //     $img2 = imageUpload('seal', 'uploads/users/');

            //     $post['seal'] = $img2;

            //     if ($image_url2 != "") {

            //         unlink('uploads/users/' . $image_url2);
            //     }
            // }

            $category_id = $this->CommonModal->updateRowById('admin', 'id', $tid, $post);

            if ($category_id) {
                $this->session->set_userdata('msg', '<div class="alert alert-success"> Updated successfully</div>');
            } else {
                $this->session->set_userdata('msg', '<div class="alert alert-danger"> Updated Error</div>');
            }
            redirect(base_url('Admin_Dashboard/profile'));
        }
    }
    public function view_category()
    {
        $data['title'] = "Our Categories";
        $BdID = $this->input->get('BdID');
        $img = $this->input->get('img');
        if ($BdID) {
            $this->CommonModal->deleteRowById('category', array('id' => $BdID));
            if ($img) {
                unlink('./uploads/services/' . $img);
            }
            redirect('admin_Dashboard/view_category');
        }
        $data['category'] = $this->CommonModal->getAllRowsInOrder('category', 'id', 'DESC');
        $this->load->view('admin/view_category', $data);
    }
    public function add_category()
    {

        $data['title'] = "Add Category";
        $data['tag'] = "add";
        $data['category'] = $this->CommonModal->getAllRows('category');

        if (count($_POST) > 0) {

            $post = $this->input->post();

            $savedata = $this->CommonModal->insertRowReturnId('category', $post);

            if ($savedata) {
                $this->session->set_flashdata('msg', '<div class="alert alert-success">Added Successfully</div>');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger">Error while saving data</div>');
            }

            redirect(base_url('admin_Dashboard/view_category'));
        } else {

            $this->load->view('admin/add_category', $data);
        }
    }
    public function update_category($id)
    {

        $data['title'] = 'Update Category';
        $data['tag'] = 'edit';
        $tid = $id;
        $data['category'] = $this->CommonModal->getRowById('category', 'id', $tid);

        if (count($_POST) > 0) {

            $post = $this->input->post();
            $category_id = $this->CommonModal->updateRowById('category', 'id', $tid, $post);

            if ($category_id) {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Source of Lead Updated successfully</div>');
            } else {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Source of Lead Updated successfully</div>');
            }
            redirect(base_url('admin_Dashboard/view_category'));
        } else {

            $this->load->view('admin/add_category', $data);
        }
    }
    

    public function view_sub_category()
    {
        $data['title'] = "Our Sub Categories";
        $BdID = $this->input->get('BdID');
        $img = $this->input->get('img');

        if ($BdID) {
            $this->CommonModal->deleteRowById('sub_category', array('id' => $BdID));
            if ($img) {
                unlink('./uploads/sub_cat/' . $img);
            }
            redirect('admin_Dashboard/view_sub_category');
        }
        $data['sub_category'] = $this->CommonModal->getAllRowsInOrder('sub_category', 'id', 'DESC');
        $data['category'] = $this->CommonModal->getAllRows('category');
        $this->load->view('admin/view_sub_category', $data);
    }
  public function add_sub_category()
{
    $data['title'] = "Add Sub Category";
    $data['tag'] = "add";
    $data['category'] = $this->CommonModal->getAllRows('category');
    $data['sub_category'] = $this->CommonModal->getAllRows('sub_category');

    if ($this->input->post()) {
        $post = $this->input->post();

        // Image Upload
        if (!empty($_FILES['image']['name'])) {
            $post['image'] = $this->imageUpload('image', 'uploads/sub_cat/');
        }

        $savedata = $this->CommonModal->insertRowReturnId('sub_category', $post);

        if ($savedata) {
            $this->session->set_flashdata('msg', '<div class="alert alert-success">Added Successfully</div>');
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger">Error while saving data</div>');
        }

        redirect(base_url('admin_Dashboard/view_sub_category'));
    } else {
        $this->load->view('admin/add_sub_category', $data);
    }
}

    public function update_sub_category($id)
    {

        $data['title'] = 'Update Sub Category';
        $data['tag'] = 'edit';
        $tid = $id;
        $data['sub_category'] = $this->CommonModal->getRowById('sub_category', 'id', $tid);
        $data['category'] = $this->CommonModal->getAllRows('category');
        if (count($_POST) > 0) {

            $post = $this->input->post();
            $image_url = $post['image'];

           if ($_FILES['image']['name'] != '') {

                $img = imageUpload('image', 'uploads/sub_cat/');

                $post['image'] = $img;

                if ($image_url != "") {

                    unlink('uploads/sub_cat/' . $image_url);

                }
            }
            $category_id = $this->CommonModal->updateRowById('sub_category', 'id', $tid, $post);

            if ($category_id) {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Source of Lead Updated successfully</div>');
            } else {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Source of Lead Updated successfully</div>');
            }
            redirect(base_url('admin_Dashboard/view_sub_category'));
        } else {

            $this->load->view('admin/add_sub_category', $data);
        }
    }


    public function contact()

    {
        $data['title'] = "Our Contact Queries";
        $BdID = $this->input->get('BdID');
        
        if ($BdID) {
            $this->CommonModal->deleteRowById('contact', array('id' => $BdID));
          
            redirect('admin_Dashboard/contact');
        }
       $data['contact'] = $this->CommonModal->getAllRows('contact');
        $this->load->view('admin/contact', $data);
    }
 




    public function blog()

    {

        $data['title'] = "Blogs";

        $data['tag'] = "blog";

        $BdID = $this->input->get('BdID');

        $img = $this->input->get('img');

        if (decryptId($BdID) != '') {

            $delete = $this->CommonModal->deleteRowById('bc_blog', array('id' => decryptId($BdID)));

            unlink('./uploads/blog/' . $img);

            redirect('admin_Dashboard/blog');

            exit;

        }

        $data['blogs'] = $this->CommonModal->getAllRows('bc_blog');

        $this->load->view('admin/blog', $data);

    }

    public function add_blog()

    {

        $data['title'] = "Add Blogs";

        $data['tag'] = "blog";



        if (count($_POST) > 0) {

            $post = $this->input->post();




            $post['image'] = imageUpload('img', 'uploads/blog/');



            $savedata = $this->CommonModal->insertRowReturnId('blog', $post);

            if ($savedata) {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Blog Add Successfully</div>');

            } else {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Blog Add Successfully</div>');

            }

            redirect(base_url('admin_Dashboard/blog'));

        } else {

            $this->load->view('admin/add_blog', $data);

        }

    }

    public function edit_blog($id)

    {

        $data['title'] = 'Update Blogs';
        $data['tag'] = "blog";
        $tid = decryptId($id);
        $data['blog'] = $this->CommonModal->getRowById('bc_blog', 'id', $tid);

        if (count($_POST) > 0) {
            $post = $this->input->post();
            $image_url = $post['image'];

            if ($_FILES['img']['name'] != '') {

                $img = imageUpload('img', 'uploads/blog/');
                $post['image'] = $img;
                if ($image_url != "") {

                    unlink('uploads/blog/' . $image_url);

                }

            }

            $category_id = $this->CommonModal->updateRowById('blog', 'id', $tid, $post);

            if ($category_id) {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Blog Updated successfully</div>');

            } else {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Blog Updated successfully</div>');

            }

            redirect(base_url('admin_Dashboard/blog'));

        } else {

            $this->load->view('admin/edit_blog', $data);

        }

    }
  public function logout()

    {

        $this->session->unset_userdata('admin_id');

        redirect('Admin');

    }

}

