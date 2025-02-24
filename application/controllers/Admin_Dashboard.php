<?php

defined('BASEPATH') or exit('no direct access allowed');



class Admin_Dashboard extends CI_Controller

{





    public function __construct()

    {

        parent::__construct();

        if (sessionId('admin_id') == "") {

            redirect(base_url('admin'));

        }

        date_default_timezone_set("Asia/Kolkata");

    }



    public function index()

    {

        $data['title'] = "Home";

        $data['contact_query'] = $this->CommonModal->getNumRow('contact_query');

        $data['mentee'] = $this->CommonModal->getNumRow('mentee');

        $data['mentors'] = $this->CommonModal->getNumRow('mentors');

        $data['join_us'] = $this->CommonModal->getNumRow('join_us');

        $data['initiatives'] = $this->CommonModal->getNumRow('initiatives');

        $data['blog'] = $this->CommonModal->getNumRow('blog');

        $data['home_banner'] = $this->CommonModal->getNumRow('home_banner');

        $data['testimonial'] = $this->CommonModal->getNumRow('testimonial');

        $this->load->view('admin/dashboard', $data);

    }



    public function team()

    {

        $data['title'] = "Our Team";

        $BdID = $this->input->get('BdID');

        $img = $this->input->get('img');

        if (decryptId($BdID) != '') {

            $delete = $this->CommonModal->deleteRowById('team', array('mid' => decryptId($BdID)));

            unlink('./uploads/member/' . $img);

            redirect('admin_Dashboard/team');

            exit;

        }

        $data['team'] = $this->CommonModal->getAllRowsInOrder('bc_team',  'mid', 'DESC');

        $this->load->view('admin/team', $data);

    }





    public function mentee()

    {



        $data['title'] = "Mentee Registrations";

        $table = "mentee";

        $BdID = $this->input->get('BdID');

        if (decryptId($BdID) != '') {

            $delete = $this->CommonModal->deleteRowById('mentee', array('id' => decryptId($BdID)));



            redirect('Admin_Dashboard/mentee');

            exit;

        }

        $data['mentee'] = $this->CommonModal->getAllRowsInOrder('mentee',  'id', 'DESC');

        $this->load->view('admin/mentee', $data);

    }





    public function join_us()

    {



        $data['title'] = "Join us as Member/Student Ambassador";



        $BdID = $this->input->get('BdID');

        if (decryptId($BdID) != '') {

            $delete = $this->CommonModal->deleteRowById('bc_join_us', array('id' => decryptId($BdID)));



            redirect('Admin_Dashboard/join_us');

            exit;

        }

        $data['join'] = $this->CommonModal->getAllRowsInOrder('bc_join_us',  'id', 'DESC');

        $this->load->view('admin/join_us', $data);

    }



    public function add_team()

    {

        $data['title'] = "Add Member";



        $data['tag'] = "add";



        if (count($_POST) > 0) {

            $post = $this->input->post();



            $post['image'] = imageUpload('img', 'uploads/member/');



            $savedata = $this->CommonModal->insertRowReturnId('team', $post);

            if ($savedata) {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Member Add Successfully</div>');

            } else {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Member Add Successfully</div>');

            }

            redirect(base_url('admin_Dashboard/team'));

        } else {

            $this->load->view('admin/add_team', $data);

        }

    }



    public function edit_team($id)

    {





        $data['title'] = 'Update Member';

        $data['tag'] = 'edit';

        $tid = decryptId($id);

        $data['teams'] = $this->CommonModal->getRowById('bc_team', 'mid', $tid);



        if (count($_POST) > 0) {

            $post = $this->input->post();

            $image_url = $post['image'];



            if ($_FILES['img']['name'] != '') {

                $img = imageUpload('img', 'uploads/member/');

                $post['image'] = $img;

                if ($image_url != "") {

                    unlink('uploads/member/' . $image_url);

                }

            }

            $category_id = $this->CommonModal->updateRowById('team', 'mid', $tid, $post);

            if ($category_id) {

                $this->session->set_userdata('msg', '<div class="alert alert-success">member Updated successfully</div>');

            } else {

                $this->session->set_userdata('msg', '<div class="alert alert-success">member Updated successfully</div>');

            }

            redirect(base_url('admin_Dashboard/team'));

        } else {

            $this->load->view('admin/edit_team', $data);

        }

    }







    public function disable()

    {

        $id = $this->uri->segment(3);

        $table = $this->uri->segment(4);

        $status = $this->uri->segment(5);







        if ($table == 'mentors') {

            $this->CommonModal->updateRowById($table, 'mid', $id, array('is_visible' => $status));

            redirect(base_url('admin_Dashboard/mentors'));

        }



        if ($table == 'blog') {

            $this->CommonModal->updateRowById($table, 'blog_id', $id, array('is_visible' => $status));

            redirect(base_url('admin_Dashboard/blogs'));

        }

        if ($table == 'whats_new') {

            $this->CommonModal->updateRowById($table, 'bid', $id, array('is_visible' => $status));

            redirect(base_url('admin_Dashboard/whats_new'));

        }

        if ($table == 'initiatives') {

            $this->CommonModal->updateRowById($table, 'id', $id, array('is_visible' => $status));

            redirect(base_url('admin_Dashboard/initiatives'));

        }

    }



    public function gallery()

    {



        $data['title'] = "Gallery";

        $BdID = $this->input->get('BdID');

        $img = $this->input->get('img');

        if (decryptId($BdID) != '') {

            $delete = $this->CommonModal->deleteRowById('bc_home_gallery', array('bid' => decryptId($BdID)));

            unlink('./uploads/banner/' . $img);

            redirect('admin_Dashboard/gallery');

            exit;

        }

        $data['banner'] = $this->CommonModal->getAllRows('bc_home_gallery');

        $this->load->view('admin/gallery', $data);

    }



    public function add_gallery()

    {



        $data['title'] = 'Add Image';

        $data['tag'] = 'add';



        if (count($_FILES) > 0) {

            $post = $this->input->post();



            $post['image'] = imageUpload('img', 'uploads/banner/');



            $category_id = $this->CommonModal->insertRowReturnId('bc_home_gallery', $post);

            if ($category_id) {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Image Add successfully</div>');

            } else {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Something went wrong</div>');

            }

            redirect(base_url('admin_Dashboard/gallery'));

        } else {

            $this->load->view('admin/add_gallery', $data);

        }

    }





    public function edit_gallery($id)

    {



        $data['title'] = 'Update Image';

        $data['tag'] = 'edit';



        $tid = decryptId($id);

        $data['banner'] = $this->CommonModal->getRowById('bc_home_gallery', 'bid', $tid);



        if (count($_POST) > 0) {

            $post = $this->input->post();





            $image_url = $post['image'];



            if ($_FILES['img']['name'] != '') {

                $img = imageUpload('img', 'uploads/banner/');

                $post['image'] = $img;

                if ($image_url != "") {

                    unlink('uploads/banner/' . $image_url);

                }

            }





            $category_id = $this->CommonModal->updateRowById('bc_home_gallery', 'bid', $tid, $post);

            if ($category_id) {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Image Updated successfully</div>');

            } else {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Something went wrong</div>');

            }

            redirect(base_url('admin_Dashboard/gallery'));

        } else {

            $this->load->view('admin/add_gallery', $data);

        }

    }





    public function newsletter_pdf()

    {



        $data['title'] = 'Newsletter Pdf';





        $BdID = $this->input->get('BdID');

        $img = $this->input->get('img');

        if (decryptId($BdID) != '') {

            $delete = $this->CommonModal->deleteRowById('bc_newslatter_pdf', array('id' => decryptId($BdID)));

            unlink('./uploads/newsletter/' . $img);

            redirect('admin_Dashboard/newsletter_pdf');

            exit;

        }

        $data['banner'] = $this->CommonModal->getAllRows('bc_newslatter_pdf');



        if (count($_POST) > 0) {

            $post = $this->input->post();

            $post['pdffile'] = pdfUpload('pdffile', 'uploads/newsletter/');

            $category_id = $this->CommonModal->insertRowReturnId('bc_newslatter_pdf', $post);

            if ($category_id) {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Newsletter Added successfully</div>');

            } else {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Something went wrong</div>');

            }

            redirect(base_url('admin_Dashboard/newsletter_pdf'));

        } else {

            $this->load->view('admin/newsletter-pdf', $data);

        }

    }





    public function whats_new()

    {



        $data['title'] = "what's New";

        $data['tag'] = 'edit';





        $data['banner'] = $this->CommonModal->getRowById('bc_whats_new', 'bid', '1');



        if (count($_POST) > 0) {

            $post = $this->input->post();

            $image_url = $post['image'];



            if ($_FILES['img']['name'] != '') {

                $img = imageUpload('img',  'uploads/new/');

                $post['image'] = $img;

                if ($image_url != "") {

                    unlink('uploads/new/' . $image_url);

                }

            }



            $category_id = $this->CommonModal->updateRowById('bc_whats_new', 'bid', '1', $post);

            if ($category_id) {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Banner Updated successfully</div>');

            } else {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Something went wrong</div>');

            }

            redirect(base_url('admin_Dashboard/whats_new'));

        } else {

            $this->load->view('admin/whats_new', $data);

        }

    }



    public function services()

    {

        $data['title'] = "Services";

        $data['tag'] = "services";

        $BdID = $this->input->get('BdID');

        $img = $this->input->get('img');

        if (decryptId($BdID) != '') {

            $delete = $this->CommonModal->deleteRowById('bc_services', array('blog_id' => decryptId($BdID)));

            unlink('./uploads/services/' . $img);

            redirect('admin_Dashboard/services');

            exit;

        }

        $data['services'] = $this->CommonModal->getAllRows('bc_services');

        $this->load->view('admin/services', $data);

    }





    public function add_services()

    {

        $data['title'] = "Add Services";

        $data['tag'] = "services";



        if (count($_POST) > 0) {

            $post = $this->input->post();




            $post['image'] = imageUpload('img', 'uploads/services/');



            $savedata = $this->CommonModal->insertRowReturnId('services', $post);

            if ($savedata) {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Blog Add Successfully</div>');

            } else {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Blog Add Successfully</div>');

            }

            redirect(base_url('admin_Dashboard/services'));

        } else {

            $this->load->view('admin/add_services', $data);

        }

    }







    public function edit_services($id)

    {





        $data['title'] = 'Update Services';

        $data['tag'] = "services";

        $tid = decryptId($id);

        $data['service'] = $this->CommonModal->getRowById('bc_services', 'blog_id', $tid);



        if (count($_POST) > 0) {

            $post = $this->input->post();





            $image_url = $post['image'];



            if ($_FILES['img']['name'] != '') {

                $img = imageUpload('img', 'uploads/services/');

                $post['image'] = $img;

                if ($image_url != "") {

                    unlink('uploads/services/' . $image_url);

                }

            }

           





            $category_id = $this->CommonModal->updateRowById('services', 'blog_id', $tid, $post);

            if ($category_id) {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Blog Updated successfully</div>');

            } else {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Blog Updated successfully</div>');

            }

            redirect(base_url('admin_Dashboard/services'));

        } else {

            $this->load->view('admin/edit_services', $data);

        }

    }









    public function initiatives()

    {

        $data['title'] = "Initiatives";

        $data['tag'] = "initiatives";

        $BdID = $this->input->get('BdID');

        $img = $this->input->get('img');

        if (decryptId($BdID) != '') {

            $delete = $this->CommonModal->deleteRowById('bc_initiatives', array('id' => decryptId($BdID)));

            unlink('./uploads/initiatives/' . $img);

            redirect('admin_Dashboard/initiatives');

            exit;

        }

        $data['blogs'] = $this->CommonModal->getAllRows('bc_initiatives');

        $this->load->view('admin/blogs', $data);

    }





    public function add_initiatives()

    {

        $data['title'] = "Add Initiatives";

        $data['tag'] = "initiatives";



        if (count($_POST) > 0) {

            $post = $this->input->post();



            $video_path = preg_replace("#.*youtube\.com/watch\?v=#", "", $post['video']);

            $video_path = preg_replace("#.*https://youtu.be/#", "", $post['video']);



            $post['video'] =  $video_path;

            $post['image'] = imageUpload('img', 'uploads/initiatives/');



            $savedata = $this->CommonModal->insertRowReturnId('bc_initiatives', $post);

            if ($savedata) {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Initiatives Add Successfully</div>');

            } else {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Initiatives Add Successfully</div>');

            }

            redirect(base_url('admin_Dashboard/initiatives'));

        } else {

            $this->load->view('admin/add_blog', $data);

        }

    }







    public function edit_initiatives($id)

    {





        $data['title'] = 'Update Initiatives';

        $data['tag'] = "initiatives";

        $tid = decryptId($id);

        $data['blog'] = $this->CommonModal->getRowById('initiatives', 'id', $tid);



        if (count($_POST) > 0) {

            $post = $this->input->post();

            $video_path = preg_replace("#.*youtube\.com/watch\?v=#", "", $post['video']);

            $video_path = preg_replace("#.*https://youtu.be/#", "", $post['video']);



            $post['video'] =  $video_path;



            $image_url = $post['image'];



            if ($_FILES['img']['name'] != '') {

                $img = imageUpload('img', 'uploads/initiatives/');

                $post['image'] = $img;

                if ($image_url != "") {

                    unlink('uploads/initiatives/' . $image_url);

                }

            }





            $category_id = $this->CommonModal->updateRowById('initiatives', 'id', $tid, $post);

            if ($category_id) {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Initiatives Updated successfully</div>');

            } else {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Initiatives Updated successfully</div>');

            }

            redirect(base_url('admin_Dashboard/initiatives'));

        } else {

            $this->load->view('admin/edit_blog', $data);

        }

    }







    public function newsletter()

    {



        $data['title'] = "Newsletter";

        $table = "newsletter";

        $BdID = $this->input->get('BdID');

        if (decryptId($BdID) != '') {

            $delete = $this->CommonModal->deleteRowById('newsletter', array('id' => decryptId($BdID)));



            redirect('Admin_Dashboard/newsletter');

            exit;

        }

        $data['newsletter'] = $this->CommonModal->getAllRows($table);

        $this->load->view('admin/newsletter', $data);

    }



    public function contact_query()

    {



        $data['title'] = "Contact Query";

        $table = "contact_query";

        $BdID = $this->input->get('BdID');

        if (decryptId($BdID) != '') {

            $delete = $this->CommonModal->deleteRowById('contact_query', array('cid' => decryptId($BdID)));



            redirect('Admin_Dashboard/contact_query');

            exit;

        }

        $data['contact'] = $this->CommonModal->getAllRows($table);

        $this->load->view('admin/contact', $data);

    }
    public function career()

    {



        $data['title'] = "Career";

        $table = "career";

        $BdID = $this->input->get('BdID');

        if (decryptId($BdID) != '') {

            $delete = $this->CommonModal->deleteRowById('career', array('cid' => decryptId($BdID)));



            redirect('Admin_Dashboard/career');

            exit;

        }

        $data['career'] = $this->CommonModal->getAllRows($table);

        $this->load->view('admin/career', $data);

    }




    public function contactdetails()

    {

        $data['title'] = "Contact Details";

        $table = "contactdetails";



        $data['contactdetails'] = $this->CommonModal->getRowById($table, 'cid', '1');

        if (count($_POST) > 0) {

            $post = $this->input->post();

            $update = $this->CommonModal->updateRowByMoreId($table, array('cid' => '1'), $post);

            if ($update) {



                $this->session->set_flashdata('msg', 'Category Add successfully');

                $this->session->set_flashdata('msg_class', 'alert-success');

            } else {

                $this->session->set_flashdata('msg', 'Soemthing went wrong Please try again!!');

                $this->session->set_flashdata('msg_class', 'alert-danger');

            }



            redirect(base_url() . 'admin_Dashboard/contactdetails');

        } else {

            $this->load->view('admin/contactdetails', $data);

        }

    }



    public function policy()

    {

        $data['title'] = "Policy";



        $data['policy'] = $this->CommonModal->getAllRowsInOrder('policy', 'id', 'desc');

        $this->load->view('admin/policy', $data);

    }



    public function policy_edit()

    {

        $key = $this->uri->segment(3);

        $data['title'] = "Policy Edit";

        $id = decryptId($key);



        $data['policy'] = $this->CommonModal->getRowById('policy', 'id', $id);

        if (count($_POST) > 0) {

            $post = $this->input->post();

            $savedata = $this->CommonModal->updateRowById('policy', 'id', $id, $post);

            if ($savedata) {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Policy Update Successfully</div>');

            } else {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Policy Update Successfully</div>');

            }

            redirect(base_url('admin_Dashboard/policy'));

        } else {

            $this->load->view('admin/policy-edit', $data);

        }

    }

    public function terms()

    {

        $data['title'] = "Term of Uses";



        $data['terms'] = $this->CommonModal->getAllRowsInOrder('terms', 'id', 'desc');

        $this->load->view('admin/terms', $data);

    }



    public function terms_edit()

    {

        $key = $this->uri->segment(3);

        $data['title'] = "Terms Edit";

        $id = decryptId($key);



        $data['terms'] = $this->CommonModal->getRowById('terms', 'id', $id);

        if (count($_POST) > 0) {

            $post = $this->input->post();

            $savedata = $this->CommonModal->updateRowById('terms', 'id', $id, $post);

            if ($savedata) {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Terms Update Successfully</div>');

            } else {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Terms Update Successfully</div>');

            }

            redirect(base_url('admin_Dashboard/terms'));

        } else {

            $this->load->view('admin/terms-edit', $data);

        }

    }



    public function testimonials()

    {



        $data['title'] = "Testimonial";

        if (count($_POST) > 0) {

            $post = $this->input->post();



            // $post['testimonial'] = imageUpload('testimonial', 'uploads/testimonials/');



            $savedata = $this->CommonModal->insertRowReturnId('testimonial', $post);

            if ($savedata) {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Testimonials Added Successfully</div>');

            } else {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Something  went wrong</div>');

            }

            redirect(base_url('admin_Dashboard/testimonials'));

        } else {



            $data['testimonials'] = $this->CommonModal->getAllRows('testimonial');

            $this->load->view('admin/testimonials', $data);

        }

    }







    public function deletetestimonials($id)

    {



        if ($this->CommonModal->deleteRowById('testimonial', array('id' => $id))) {

            $this->session->set_flashdata('msg', 'Testimonial Delete successfully');

            $this->session->set_flashdata('msg_class', 'alert-success');

        } else {

            $this->session->set_flashdata('msg', 'Testimonial not Delete Please try again!!');

            $this->session->set_flashdata('msg_class', 'alert-danger');

        }

        redirect('admin_Dashboard/testimonials');

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

