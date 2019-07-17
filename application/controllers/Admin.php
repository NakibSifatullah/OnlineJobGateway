<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_Model');
        $this->load->library('form_validation');
    }

    public function savecategory() {

        $this->form_validation->set_rules('catname', 'Catname', 'required');
        $this->form_validation->set_rules('catdate', 'Catdate', 'required');
        //$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');

        if ($this->form_validation->run() == FALSE) {
            $info_msg = 'Category Field can not be empty';
            $this->session->set_userdata('msg', $info_msg);
            redirect($_SERVER['HTTP_REFERER']);
        } else {

            $categoryname = $this->input->post('catname');
            $categorydetails = $this->input->post('catdetails');
            $categorydate = $this->input->post('catdate');

            $data = array(
                'CategoryName' => $categoryname,
                'CategoryDetails' => $categorydetails,
                'CategoryDate' => $categorydate,
            );
            $this->Admin_Model->insert_categories($data);
            $info_msg = 'Category Inserted Successfully';
            $this->session->set_userdata('msg', $info_msg);
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function editcategory() {

        $this->form_validation->set_rules('catname', 'Catname', 'required');
        $this->form_validation->set_rules('catdate', 'Catdate', 'required');
        //$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');

        if ($this->form_validation->run() == FALSE) {
            $info_msg = 'Category Field can not be empty';
            $this->session->set_userdata('msg', $info_msg);
            redirect($_SERVER['HTTP_REFERER']);
        } else {

            $categoryid = $this->input->post('catid');
            $categoryname = $this->input->post('catname');
            $categorydetails = $this->input->post('catdetails');
            $categorydate = $this->input->post('catdate');

            $data = array(
                'Id' => $categoryid,
                'CategoryName' => $categoryname,
                'CategoryDetails' => $categorydetails,
                'CategoryDate' => $categorydate,
            );
            $this->Admin_Model->update_categories($data);
            $info_msg = 'Category Updated Successfully';
            $this->session->set_userdata('msg', $info_msg);
            redirect('view-category');
        }
    }

    public function delete_category() {
        $categoryid = $_GET['cid'];

        $this->Admin_Model->deleted_categories($categoryid);
        $info_msg = 'Category Deleted Successfully';
        $this->session->set_userdata('msg', $info_msg);
        redirect('view-category');
    }

    public function save_admin() {
        $this->form_validation->set_rules('uname', 'Uname', 'required');
        $this->form_validation->set_rules('umail', 'Umail', 'required');
        $this->form_validation->set_rules('upass', 'Upass', 'required');
        $this->form_validation->set_rules('uphone', 'Uphone', 'required');
        //$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');

        if ($this->form_validation->run() == FALSE) {
            $info_msg = 'Admin Field can not be empty';
            $this->session->set_userdata('msg', $info_msg);
            redirect($_SERVER['HTTP_REFERER']);
        } else {

            $adminname = $this->input->post('uname');
            $adminmail = $this->input->post('umail');
            $adminpass = $this->input->post('upass');
            $adminphone = $this->input->post('uphone');
            $admindate = $this->input->post('udate');

            $data = array(
                'UserName' => $adminname,
                'UserMail' => $adminmail,
                'UserPass' => md5($adminpass),
                'UserMobile' => $adminphone,
                'UserDate' => $admindate,
            );
            $this->Admin_Model->insert_admin($data);
            $info_msg = 'Admin Added Successfully';
            $this->session->set_userdata('msg', $info_msg);
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function delete_admin() {
        $adminid = $_GET['aid'];

        $this->Admin_Model->deleted_admin($adminid);
        $info_msg = 'Admin Deleted Successfully';
        $this->session->set_userdata('msg', $info_msg);
        redirect('view-admin');
    }

    public function update_admin() {
        $this->form_validation->set_rules('uname', 'Uname', 'required');
        $this->form_validation->set_rules('umail', 'Umail', 'required');
        $this->form_validation->set_rules('uphone', 'Uphone', 'required');
        //$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');

        if ($this->form_validation->run() == FALSE) {
            $info_msg = 'Admin Field can not be empty';
            $this->session->set_userdata('msg', $info_msg);
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $adminname = $this->input->post('uname');
            $adminmail = $this->input->post('umail');
            $adminid = $this->input->post('uid');
            $adminphone = $this->input->post('uphone');
            $admindate = $this->input->post('udate');

            $data = array(
                'UserName' => $adminname,
                'UserMail' => $adminmail,
                'Id' => $adminid,
                'UserMobile' => $adminphone,
                'UserDate' => $admindate,
            );
            $this->Admin_Model->update_admin($data);
            $info_msg = 'Admin Updated Successfully';
            $this->session->set_userdata('msg', $info_msg);
            redirect('view-admin');
        }
    }

    public function admin_login() {
        $adminmail = $this->input->post('urname');
        $adminpass = $this->input->post('uspassword');
        if (empty($adminmail) || empty($adminpass)) {
            redirect('login');
        } else {
            $data = array(
                'UserMail' => $adminmail,
                'UserPass' => md5($adminpass),
            );
            $logdata = $this->Admin_Model->check_login($data);
            if ($logdata) {
                $this->session->set_userdata('logged', $logdata);
                redirect('Pages/admin_panel');
            } else {
                redirect('login');
            }
        }
    }

    public function logout() {
        $this->session->unset_userdata('logged');
        redirect('login');
    }

    public function create_jobs() {

        

        $this->form_validation->set_rules('jobcategory', 'Jobcategory', 'required');
        $this->form_validation->set_rules('jobheadline', 'Jobheadline', 'required');
        //$this->form_validation->set_rules('jobcompany', 'Jobcompany', 'required');
        //$this->form_validation->set_rules('jobcompanyurl', 'Jobcompanyurl', 'required');
        //$this->form_validation->set_rules('jobcompanymail', 'Jobcompanymail', 'required');
        //$this->form_validation->set_rules('jobcompanymobile', 'Jobcompanymobile', 'required');
        $this->form_validation->set_rules('jobvacancy', 'Jobvacancy', 'required');
        $this->form_validation->set_rules('joblocation', 'Joblocation', 'required');
        $this->form_validation->set_rules('jobnature', 'Jobnature', 'required');
        $this->form_validation->set_rules('jobdetails', 'Jobdetails', 'required');
        $this->form_validation->set_rules('jobrequirements', 'Jobrequirements', 'required');
        $this->form_validation->set_rules('jobbenefits', 'Jobbenefits', 'required');
        $this->form_validation->set_rules('jobdeadline', 'Jobdeadline', 'required');
        //$this->form_validation->set_rules('company_id', 'company_id', 'required');

        if ($this->form_validation->run() == FALSE) {
            $info_msg = 'Jobs Field can not be empty';
            $this->session->set_userdata('msg', $info_msg);
            redirect($_SERVER['HTTP_REFERER']);
        } else {

            $provider = isset($this->session->userdata('userdata')->id)?$this->session->userdata('userdata')->id:'';
           

            $admin = isset($this->session->userdata['logged']->UserName)?$this->session->userdata['logged']->UserName:'';


            if (!empty($provider) || !empty($admin)) {
                
                if(!empty($provider)){
                    $jobcompany = $provider;
                     $JobStatus = 0;
                }
                if(!empty($admin)){
                    $jobcompany = $this->input->post('company_id');
                     $JobStatus = 1;
                }

               

                $jobcategory = $this->input->post('jobcategory');
                $jobtitle = $this->input->post('jobheadline');
                $jobvacancy = $this->input->post('jobvacancy');
                $joblocation = $this->input->post('joblocation');
                $jobnature = $this->input->post('jobnature');
                $jobdetails = $this->input->post('jobdetails');
                $jobrequirements = $this->input->post('jobrequirements');
                $jobbenefits = $this->input->post('jobbenefits');
                $jobdeadtime = $this->input->post('jobdeadline');

                $image = '';
                if (isset($_FILES['jobimage'])) {
                    $oldpath = $_FILES['jobimage']['tmp_name'];
                    $newpath = "assets/images/jobs/" . $_FILES['jobimage']['name'];
                    move_uploaded_file($oldpath, $newpath);
                    $image = base_url() . $newpath;
                }

                $data = array(
                    'JobCategory' => $jobcategory,
                    'JobTitle' => $jobtitle,
                    'JobCompany' => $jobcompany,
                    'Vacancy' => $jobvacancy,
                    'Location' => $joblocation,
                    'JobNature' => $jobnature,
                    'JobDetails' => $jobdetails,
                    'JobRequirements' => $jobrequirements,
                    'JobBenefits' => $jobbenefits,
                    'JobImages' => $image,
                    'JobDeadline' => $jobdeadtime,
                    'JobStatus' => $JobStatus,
                    'JobDate' => date('d-m-Y')
                );
               
                $this->Admin_Model->insert_job($data);
                $info_msg = 'Job Added Successfully';
                $this->session->set_userdata('msg', $info_msg);
                $error_msg = 'Job Added Successfully';
                $this->session->set_userdata('info_msg', $error_msg);
            } else {
                $info_msg = 'Only registered company can post job';
                $this->session->set_userdata('msg', $info_msg);
                $error_msg = 'Only registered company can post job';
                $this->session->set_userdata('info_msg', $error_msg);
            }
            if(!empty($admin)){
                redirect($_SERVER['HTTP_REFERER']);
            }
            redirect('Pages/post_jobs');
        }
    }

    public function update_jobs() {

        $this->form_validation->set_rules('jobcategory', 'Jobcategory', 'required');
        $this->form_validation->set_rules('jobheadline', 'Jobheadline', 'required');
        $this->form_validation->set_rules('jobvacancy', 'Jobvacancy', 'required');
        $this->form_validation->set_rules('joblocation', 'Joblocation', 'required');
        $this->form_validation->set_rules('jobnature', 'Jobnature', 'required');
        $this->form_validation->set_rules('jobdetails', 'Jobdetails', 'required');
        $this->form_validation->set_rules('jobrequirements', 'Jobrequirements', 'required');
        $this->form_validation->set_rules('jobbenefits', 'Jobbenefits', 'required');
        $this->form_validation->set_rules('jobdeadline', 'Jobdeadline', 'required');

        if ($this->form_validation->run() == FALSE) {
            $info_msg = 'Jobs Field can not be empty';
            $this->session->set_userdata('msg', $info_msg);
            redirect($_SERVER['HTTP_REFERER']);
        } else {

            $jobid = $this->input->post('jobsid');
            $jobcategory = $this->input->post('jobcategory');
            $jobtitle = $this->input->post('jobheadline');
            $jobvacancy = $this->input->post('jobvacancy');
            $joblocation = $this->input->post('joblocation');
            $jobnature = $this->input->post('jobnature');
            $jobdetails = $this->input->post('jobdetails');
            $jobrequirements = $this->input->post('jobrequirements');
            $jobbenefits = $this->input->post('jobbenefits');
            $jobdeadtime = $this->input->post('jobdeadline');

            $image = '';
            if (isset($_FILES['jobimage'])) {
                $oldpath = $_FILES['jobimage']['tmp_name'];
                $newpath = "assets/images/jobs/" . $_FILES['jobimage']['name'];
                move_uploaded_file($oldpath, $newpath);
                $image = base_url() . $newpath;
            } else {
                $image = $this->input->post('jobpreviuousimage');
            }

            $data = array(
                'JobsId' => $jobid,
                'JobCategory' => $jobcategory,
                'JobTitle' => $jobtitle,
                'CompanyName' => $jobcompany,
                'CompanyURL' => $jobcompanyurl,
                'CompanyMail' => $jobcompanymail,
                'CompanyContact' => $companymobile,
                'Vacancy' => $jobvacancy,
                'Location' => $joblocation,
                'JobNature' => $jobnature,
                'JobDetails' => $jobdetails,
                'JobRequirements' => $jobrequirements,
                'JobBenefits' => $jobbenefits,
                'JobImages' => $image,
                'JobDeadline' => $jobdeadtime,
                'JobStatus' => 0,
                'JobDate' => date('d-m-Y')
            );
            $this->Admin_Model->update_jobinfo($data);
            $info_msg = 'Job Upadted Successfully';
            $this->session->set_userdata('msg', $info_msg);
            redirect('add-jobs');
        }
    }

    public function delete_jobs() {
        $jobid = $_GET['jid'];
        $this->Admin_Model->delete_job($jobid);
        $info_msg = 'Job deleted successfully';
        $this->session->set_userdata('msg', $info_msg);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function unpublish_job() {
        $jobid = $_GET['jid'];
        $this->Admin_Model->unpublished_job($jobid);
        $info_msg = 'Job Unpublished successfully';
        $this->session->set_userdata('msg', $info_msg);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function publish_job() {
        $jobid = $_GET['jid'];
        $this->Admin_Model->published_job($jobid);
        $info_msg = 'Job Published successfully';
        $this->session->set_userdata('msg', $info_msg);
        redirect($_SERVER['HTTP_REFERER']);
    }

}
