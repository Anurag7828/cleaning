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
                $this->session->set_userdata('msg', '<div class="alert alert-success">Category Updated successfully</div>');
            } else {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Category Updated successfully</div>');
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
        $data['category'] = $this->CommonModal->getAllRows('category');
        if ($BdID) {
            $this->CommonModal->deleteRowById('sub_category', array('id' => $BdID));
            if ($img) {
                unlink('uploads/sub_cat/' . $img);
            }
            redirect('admin_Dashboard/view_sub_category');
        }
        $data['sub_category'] = $this->CommonModal->getAllRowsInOrder('sub_category', 'id', 'DESC');
     
        $this->load->view('admin/view_sub_category', $data);
    }


  public function add_sub_category()
  {
    $data['title'] = "Add Sub Category";
    $data['tag'] = "add";
    $data['category'] = $this->CommonModal->getAllRows('category');
    $data['sub_category'] = $this->CommonModal->getAllRows('sub_category');
   if (count($_POST) > 0) {
       
       $post = $this->input->post();
       $post['image'] = imageUpload('image', 'uploads/sub_cat/');
  
      $savedata = $this->CommonModal->insertRowReturnId('sub_category', $post);
           if ($savedata) {

           $this->session->set_userdata('msg', '<div class="alert alert-success">Sub Category Add Successfully</div>');
       } else {

           $this->session->set_userdata('msg', '<div class="alert alert-success">Sub Category Add Successfully</div>');
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
                $this->session->set_userdata('msg', '<div class="alert alert-success">Sub Category Updated successfully</div>');
            } else {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Sub Category Updated successfully</div>');
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
 
    public function view_blog()
    {
        $data['title'] = "Our Blogs";

        $BdID = $this->input->get('BdID');
        $img = $this->input->get('img');
        if ($BdID) {
            $this->CommonModal->deleteRowById('blog', array('id' => $BdID));
            if ($img) {
                unlink('uploads/blog/' . $img);
            }
            redirect('admin_Dashboard/view_blog');
        }
        $data['blog'] = $this->CommonModal->getAllRowsInOrder('blog', 'id', 'DESC');
     
        $this->load->view('admin/view_blog', $data);
    }


    public function add_blog()
    {
         $data['title'] = "Add Blogs";
         $data['tag'] = "add";
        if (count($_POST) > 0) {
            
            $post = $this->input->post();
            $post['image'] = imageUpload('image', 'uploads/blog/');
       
           $savedata = $this->CommonModal->insertRowReturnId('blog', $post);
                if ($savedata) {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Blog Add Successfully</div>');
            } else {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Blog Add Successfully</div>');
            }

            redirect(base_url('admin_Dashboard/view_blog'));
           } else {
           
            $this->load->view('admin/add_blog', $data);
        }
    }

    public function edit_blog($id)
    {
        $data['title'] = 'Update blogs';
        $data['tag'] = 'edit';
        $tid = $id;
        
        // Fetching the current product data
        $data['row'] = $this->CommonModal->getRowById('blog', 'id', $tid);
    
        if (count($_POST) > 0) {
            $post = $this->input->post();
            
          
            $existing_image1 = $post['image']; 
           
            if ($_FILES['image']['name'] != '') {
                $img1 = imageUpload('image', 'uploads/blog/');
                $post['image'] = $img1;
                if ($existing_image1 != "") {
                    unlink('uploads/blog/' . $existing_image1);
                }
            }
    
            
            // Update the product with the new data
            $update_result = $this->CommonModal->updateRowById('blog', 'id', $tid, $post);
    
            if ($update_result) {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Blogs updated successfully.</div>');
            } else {
                $this->session->set_userdata('msg', '<div class="alert alert-danger">Failed to update Blogs.</div>');
            } 
          
            // Redirect after the update
            redirect(base_url('admin_Dashboard/view_blog'));
        } else {
            
    
            // Load the edit product view if no POST data
            $this->load->view('admin/add_blog', $data);
        }
    }
    public function view_application()
    {
        $data['title'] = "Our Applications";

        $BdID = $this->input->get('BdID');
    
        if ($BdID) {
            $this->CommonModal->deleteRowById('application', array('id' => $BdID));
        
            redirect('admin_Dashboard/view_application');
        }
        $data['application'] = $this->CommonModal->getAllRowsInOrder('application', 'id', 'DESC');
     
        $this->load->view('admin/view_application', $data);
    }
    public function application($id)
    {
        $data['title'] = "Our Applications";

        $tid = decryptId($id);
        $data['application'] = $this->CommonModal->getRowById('application', 'id', $tid);

     
        $this->load->view('admin/application', $data);
    }
    public function view_job()
    {
        $data['title'] = "Our jobs";

        $BdID = $this->input->get('BdID');
    
        if ($BdID) {
            $this->CommonModal->deleteRowById('career', array('id' => $BdID));
        
            redirect('admin_Dashboard/view_job');
        }
        $data['career'] = $this->CommonModal->getAllRowsInOrder('career', 'id', 'DESC');
     
        $this->load->view('admin/view_job', $data);
    }


    public function add_job()
    {
         $data['title'] = "Add jobs";
         $data['tag'] = "add";
        if (count($_POST) > 0) {
            
            $post = $this->input->post();
       
           $savedata = $this->CommonModal->insertRowReturnId('career', $post);
                if ($savedata) {

                $this->session->set_userdata('msg', '<div class="alert alert-success">job Add Successfully</div>');
            } else {

                $this->session->set_userdata('msg', '<div class="alert alert-success">job Add Successfully</div>');
            }

            redirect(base_url('admin_Dashboard/view_job'));
           } else {
           
            $this->load->view('admin/add_job', $data);
        }
    }

    public function edit_job($id)
    {
        $data['title'] = 'Update jobs';
        $data['tag'] = 'edit';
        $tid = $id;
        
        // Fetching the current product data
        $data['row'] = $this->CommonModal->getRowById('career', 'id', $tid);
    
        if (count($_POST) > 0) {
            $post = $this->input->post();
            
    
            
            // Update the product with the new data
            $update_result = $this->CommonModal->updateRowById('career', 'id', $tid, $post);
    
            if ($update_result) {
                $this->session->set_userdata('msg', '<div class="alert alert-success">jobs updated successfully.</div>');
            } else {
                $this->session->set_userdata('msg', '<div class="alert alert-danger">Failed to update jobs.</div>');
            } 
          
            // Redirect after the update
            redirect(base_url('admin_Dashboard/view_job'));
        } else {
            
    
            // Load the edit product view if no POST data
            $this->load->view('admin/add_job', $data);
        }
    }

    public function view_video()
    {
        $data['title'] = "Our videos";

        $BdID = $this->input->get('BdID');
    
        if ($BdID) {
            $this->CommonModal->deleteRowById('video', array('id' => $BdID));
        
            redirect('admin_Dashboard/view_video');
        }
        $data['video'] = $this->CommonModal->getAllRowsInOrder('video', 'id', 'DESC');
     
        $this->load->view('admin/view_video', $data);
    }


    public function add_video()
    {
         $data['title'] = "Add videos";
         $data['tag'] = "add";
        if (count($_POST) > 0) {
            
            $post = $this->input->post();
       
           $savedata = $this->CommonModal->insertRowReturnId('video', $post);
                if ($savedata) {

                $this->session->set_userdata('msg', '<div class="alert alert-success">video Add Successfully</div>');
            } else {

                $this->session->set_userdata('msg', '<div class="alert alert-success">video Add Successfully</div>');
            }

            redirect(base_url('admin_Dashboard/view_video'));
           } else {
           
            $this->load->view('admin/add_video', $data);
        }
    }

    public function edit_video($id)
    {
        $data['title'] = 'Update videos';
        $data['tag'] = 'edit';
        $tid = $id;
        
        // Fetching the current product data
        $data['video'] = $this->CommonModal->getRowById('video', 'id', $tid);
    
        if (count($_POST) > 0) {
            $post = $this->input->post();
            
    
            
            // Update the product with the new data
            $update_result = $this->CommonModal->updateRowById('video', 'id', $tid, $post);
    
            if ($update_result) {
                $this->session->set_userdata('msg', '<div class="alert alert-success">videos updated successfully.</div>');
            } else {
                $this->session->set_userdata('msg', '<div class="alert alert-danger">Failed to update videos.</div>');
            } 
          
            // Redirect after the update
            redirect(base_url('admin_Dashboard/view_video'));
        } else {
            
    
            // Load the edit product view if no POST data
            $this->load->view('admin/add_video', $data);
        }
    }

    public function view_service()
    {
        $data['title'] = "Our Services";

        $BdID = $this->input->get('BdID');
        $img = $this->input->get('img');
        if ($BdID) {
            $this->CommonModal->deleteRowById('service', array('id' => $BdID));
            if ($img) {
                unlink('uploads/services/' . $img);
            }
            redirect('admin_Dashboard/view_service');
        }
        $data['service'] = $this->CommonModal->getAllRowsInOrder('service', 'id', 'DESC');
     
        $this->load->view('admin/view_service', $data);
    }


    public function add_service()
    {
         $data['title'] = "Add Services";
         $data['tag'] = "add";
        if (count($_POST) > 0) {
            
            $post = $this->input->post();
            $post['image'] = imageUpload('image', 'uploads/services/');
       
           $savedata = $this->CommonModal->insertRowReturnId('service', $post);
                if ($savedata) {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Service Add Successfully</div>');
            } else {

                $this->session->set_userdata('msg', '<div class="alert alert-success">Service Add Successfully</div>');
            }

            redirect(base_url('admin_Dashboard/view_service'));
           } else {
           
            $this->load->view('admin/add_service', $data);
        }
    }

    public function edit_service($id)
    {
        $data['title'] = 'Update Services';
        $data['tag'] = 'edit';
        $tid = $id;
        
        // Fetching the current product data
        $data['row'] = $this->CommonModal->getRowById('service', 'id', $tid);
    
        if (count($_POST) > 0) {
            $post = $this->input->post();
            
          
            $existing_image1 = $post['image']; 
           
            if ($_FILES['image']['name'] != '') {
                $img1 = imageUpload('image', 'uploads/services/');
                $post['image'] = $img1;
                if ($existing_image1 != "") {
                    unlink('uploads/services/' . $existing_image1);
                }
            }
    
            
            // Update the product with the new data
            $update_result = $this->CommonModal->updateRowById('service', 'id', $tid, $post);
    
            if ($update_result) {
                $this->session->set_userdata('msg', '<div class="alert alert-success">service updated successfully.</div>');
            } else {
                $this->session->set_userdata('msg', '<div class="alert alert-danger">Failed to update Service.</div>');
            } 
          
            // Redirect after the update
            redirect(base_url('admin_Dashboard/view_service'));
        } else {
            
    
            // Load the edit product view if no POST data
            $this->load->view('admin/add_service', $data);
        }
    }
    public function view_product()
    {
        $data['title'] = "Our Products";
        $BdID = $this->input->get('BdID');
         $completeID = $this->input->get('completeID');
         $stock = $this->input->get('stock');
        $img = $this->input->get('img');
        if ($BdID) {
            $this->CommonModal->deleteRowById('product', array('id' => $BdID));
            if ($img) {
                unlink('./uploads/product/' . $img);
            }
            redirect('admin_Dashboard/product');
        }
         if ($completeID) {
        $updateData = array('stock' =>  $stock); 
        $update = $this->CommonModal->updateRowById('product', 'id', $completeID, $updateData);

        if ($update) {
            $this->session->set_flashdata('msg', 'complete.');
            $this->session->set_flashdata('msg_class', 'alert-success');
        } else {
            $this->session->set_flashdata('msg', 'Failed ');
            $this->session->set_flashdata('msg_class', 'alert-danger');
        }

        redirect(base_url('admin_Dashboard/view_product'));
    }
        $data['product'] = $this->CommonModal->getAllRowsInOrder('product', 'id', 'DESC');
        $data['products'] = $this->CommonModal->getAllRows('category');
        $data['sub_category'] = $this->CommonModal->getAllRows('sub_category');
        $this->load->view('admin/view_product', $data);
    }

    public function add_product()
    {

         $data['title'] = "Add Products";
         $data['tag'] = "add";
        if (count($_POST) > 0) {
            
            $post = $this->input->post();
            $post['image'] = imageUpload('image', 'uploads/product/');
            $post['image1'] = imageUpload('image1', 'uploads/product/');
            $post['image2'] = imageUpload('image2', 'uploads/product/');

            $post['brochure_pdf'] = imageUpload('brochure_pdf', 'uploads/brochures/');

           $savedata = $this->CommonModal->insertRowReturnId('product', $post);
                if ($savedata) {

                $this->session->set_userdata('msg', '<div class="alert alert-success">product Add Successfully</div>');
            } else {

                $this->session->set_userdata('msg', '<div class="alert alert-success">product Add Successfully</div>');
            }

            redirect(base_url('admin_Dashboard/view_product'));
           } else {
            $data['category'] = $this->CommonModal->getAllRows('category');
            $data['sub_category'] = $this->CommonModal->getAllRows('sub_category');
            $this->load->view('admin/add_product', $data);
        }
    }

    public function edit_product($id)
    {
        $data['title'] = 'Update Products';
        $data['tag'] = 'edit';
        $tid = $id;
        
        // Fetching the current product data
        $data['row'] = $this->CommonModal->getRowById('product', 'id', $tid);
    
        if (count($_POST) > 0) {
            $post = $this->input->post();      
            $existing_image1 = $post['image']; 
            $existing_image2 = $post['image1'];
            $existing_image3 = $post['image2'];
            $existing_pdf = $post['brochure_pdf'];
           
            if ($_FILES['image']['name'] != '') {
                $img1 = imageUpload('image', 'uploads/product/');
                $post['image'] = $img1;
                if ($existing_image1 != "") {
                    unlink('uploads/product/' . $existing_image1);
                }
            }
    
            
            if ($_FILES['image1']['name'] != '') {
                $img2 = imageUpload('image1', 'uploads/product/');
                $post['image1'] = $img2;
                if ($existing_image2 != "") {
                    unlink('uploads/product/' . $existing_image2);
                }
            }
    
           
            if ($_FILES['image2']['name'] != '') {
                $img3 = imageUpload('image2', 'uploads/product/');
                $post['image2'] = $img3;
                if ($existing_image3 != "") {
                    unlink('uploads/product/' . $existing_image3);
                }
            }
            if ($_FILES['brochure_pdf']['name'] != '') {
                $img3 = imageUpload('image2', 'uploads/brochure_pdf/');
                $post['brochure_pdf'] = $pdf;
                if ($existing_pdf != "") {
                    unlink('uploads/brochure_pdf/' . $existing_pdf);
                }
            }
    
            $update_result = $this->CommonModal->updateRowById('product', 'id', $tid, $post);
    
            if ($update_result) {
                $this->session->set_userdata('msg', '<div class="alert alert-success">Product updated successfully.</div>');
            } else {
                $this->session->set_userdata('msg', '<div class="alert alert-danger">Failed to update product.</div>');
            }
          
       
            redirect(base_url('admin_Dashboard/view_product'));
        } else {
            $data['category'] = $this->CommonModal->getAllRows('category');
            $data['sub_category'] = $this->CommonModal->getAllRows('sub_category');
   
            $this->load->view('admin/add_product', $data);
        }
    }

    public function specification()
    {
        $data['title'] = "Our Product specification";
        $BdID = $this->input->get('BdID');
        $BID = $this->input->get('BID');

        if ($BdID) {
            $this->CommonModal->deleteRowById('specification', array('id' => decryptId($BdID)));
           
            redirect('admin_Dashboard/specification?BID=' . decryptId($BID));
        }
        $data['specification'] = $this->CommonModal->getRowById('specification', 'product_id',  decryptId($BID) );
        $this->load->view('admin/specification', $data);
    }

    public function add_specification()
    {

        $data['title'] = "Add specification";



        $data['tag'] = "add";
        $BdID = $this->input->get('BdID');

        $data['product'] = $this->CommonModal->getRowById('product', 'id',  decryptId($BdID) );



        if (count($_POST) > 0) {

            $post = $this->input->post();


            $savedata = $this->CommonModal->insertRowReturnId('specification', $post);

            if ($savedata) {

                $this->session->set_userdata('msg', '<div class="alert alert-success"> Add Successfully</div>');

            } else {

                $this->session->set_userdata('msg', '<div class="alert alert-success"> Add Successfully</div>');

            }

            redirect(base_url('admin_Dashboard/specification?BID=' . $BdID)); // Remove decryptId call within redirect


        } else {

            $this->load->view('admin/add_specification', $data);

        }

    }
    public function update_specification($id)
    {

        $data['title'] = 'Update specification';

        $data['tag'] = 'edit';

        $tid =  decryptId($id);

        $data['specification'] = $this->CommonModal->getRowById('specification', 'id', $tid);
        $spe = $this->CommonModal->getRowById('specification', 'id', $tid);



        if (count($_POST) > 0) {

            $post = $this->input->post();


            $category_id = $this->CommonModal->updateRowById('specification', 'id', $tid, $post);

            if ($category_id) {

                $this->session->set_userdata('msg', '<div class="alert alert-success"> Updated successfully</div>');

            } else {

                $this->session->set_userdata('msg', '<div class="alert alert-success"> Updated successfully</div>');

            }

            redirect(base_url('admin_Dashboard/specification?BID=' . encryptId($spe[0]['product_id'])));

        } else {

            $this->load->view('admin/add_specification', $data);

        }

    }

    public function testimonials()

    {
        $data['title'] = "Our Client Testimonials";
        $BdID = $this->input->get('BdID');
        
        if ($BdID) {
            $this->CommonModal->deleteRowById('testimonial', array('id' => $BdID));
          
            redirect('admin_Dashboard/testimonials');
        }
       $data['test'] = $this->CommonModal->getAllRows('testimonial');
        $this->load->view('admin/testimonials', $data);
    }

    public function add_testimonials()
    {

        $data['title'] = "Add testimonials";
        $data['tag'] = "add";
        $data['testimonials'] = $this->CommonModal->getAllRows('testimonial');

        if (count($_POST) > 0) {

            $post = $this->input->post();

            $savedata = $this->CommonModal->insertRowReturnId('testimonial', $post);

            if ($savedata) {
                $this->session->set_flashdata('msg', '<div class="alert alert-success">Added Successfully</div>');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger">Error while saving data</div>');
            }

            redirect(base_url('admin_Dashboard/testimonials'));
        } else {

            $this->load->view('admin/add_testimonials', $data);
        }
    }
    public function update_testimonials($id)
    {

        $data['title'] = 'Update testimonials';
        $data['tag'] = 'edit';
        $tid = $id;
        $data['testimonials'] = $this->CommonModal->getRowById('testimonial', 'id', $tid);

        if (count($_POST) > 0) {

            $post = $this->input->post();
            $category_id = $this->CommonModal->updateRowById('testimonial', 'id', $tid, $post);

            if ($category_id) {
                $this->session->set_userdata('msg', '<div class="alert alert-success">testimonials Updated successfully</div>');
            } else {
                $this->session->set_userdata('msg', '<div class="alert alert-success">testimonials Updated successfully</div>');
            }
            redirect(base_url('admin_Dashboard/testimonials'));
        } else {

            $this->load->view('admin/add_testimonials', $data);
        }
    }
  public function logout()

    {

        $this->session->unset_userdata('admin_id');

        redirect('Admin');

    }

}

