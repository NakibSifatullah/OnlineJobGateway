<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_Model');
        $this->load->model('Pages_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $data = array();
        $data['latest_job'] = $this->Pages_model->get_latestjob();
        $data['header'] = $this->load->view('home/header', $data, TRUE);
        $data['pages'] = $this->load->view('home/main', $data, TRUE);
        $this->load->view('master', $data);
    }

    public function search_jobs() {
        $title = $this->input->post('title');
        $category = $this->input->post('category');

        $data = array();
        $searchdata = array();

        if (!empty($title)) {
            $searchdata['JobTitle'] = $title;
        }

        if (!empty($category)) {
            $searchdata['CategoryName'] = $category;
        }

        $data['latest_job'] = $this->Pages_model->get_searchjob($searchdata);
        $data['header'] = $this->load->view('home/header', $data, TRUE);
        $data['pages'] = $this->load->view('home/search_job', $data, TRUE);
        $this->load->view('master', $data);
    }

    public function all_jobs() {
        $data = array();
        $data['all_jobs'] = $this->Pages_model->get_alljobs();
        $data['pages'] = $this->load->view('jobs/all_jobs', $data, TRUE);
        $this->load->view('master', $data);
    }

    public function post_jobs() {
        $data = array();
        $data['all_categories'] = $this->Admin_Model->get_categories();

        //$data['all_jobs'] = $this->Pages_model->get_alljobs();
        $data['pages'] = $this->load->view('jobs/postjobs', $data, TRUE);
        $this->load->view('master', $data);
    }

    public function users_profiles() {
        $logdata = $this->session->userdata('userdata');
        $data = array();
        $data['users_jobsprofile'] = $this->Pages_model->get_useralljobs($logdata->UserId);
        $data['pages'] = $this->load->view('profile/userprofile', $data, TRUE);
        $this->load->view('master', $data);
    }

    public function company_profiles() {
        $data = array();
        $logdata = $this->session->userdata('userdata');
        $data['company_alljobs'] = $this->Pages_model->getcompany_alljobs($logdata->id);
        $data['pages'] = $this->load->view('profile/companyprofile', $data, TRUE);
        $this->load->view('master', $data);
    }

    public function applied_user() {
        $jobid = $_GET['jid'];
        $data = array();
        $data['applied_jobname'] = $this->Pages_model->getapplied_jobname($jobid);
        $data['applied_alluser'] = $this->Pages_model->getapplied_allusers($jobid, $data['applied_jobname']->JobCompany);
        $data['pages'] = $this->load->view('profile/applied_user', $data, TRUE);
        $this->load->view('master', $data);
    }

    public function invite_user() {

        $data = array();
        $userid = $_GET['uid'];
        $jobid = $_GET['jid'];
        $companyid = $_GET['cid'];

        $userdetails = $this->Pages_model->get_userdetails($userid);
        $jobdetails = $this->Pages_model->get_jobdetails($jobid);
        $companydetails = $this->Pages_model->get_companydetails($companyid);

        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = '465';
        $config['smtp_timeout'] = '7';
        $config['smtp_user'] = 'bijoysha00@gmail.com';
        $config['smtp_pass'] = '0022446689';
        $config['charset'] = 'utf-8';
        $config['newline'] = "\r\n";
        $config['mailtype'] = 'html'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not

        $this->email->initialize($config);

        $this->email->from($companydetails->cemail, 'Job applied from onlinejobgateway.com');
        $this->email->to($userdetails->UserEmail);

        $this->email->subject($jobdetails->JobTitle);
        $this->email->message($jobdetails->JobDetails . 'congratulations!!! You are invited.Your applied mail is : ' . $userdetails->UserEmail);
        $this->email->attach($userdetails->UserCv);

        $sendinfo = $this->email->send();
        if ($sendinfo) {
            $error_msg = 'Job Invitation sent Successfully';
            $this->session->set_userdata('info_msg', $error_msg);

            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $error_msg = 'Job Invitation send Failed';
            $this->session->set_userdata('info_msg', $error_msg);
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function categories_job() {

        $jobcategory = $_GET['cj'];
        $data = array();
        $data['all_jobs'] = $this->Pages_model->get_jobsbycategories($jobcategory);
        $data['pages'] = $this->load->view('jobs/all_jobs', $data, TRUE);
        $this->load->view('master', $data);
    }

    public function jobs_category() {
        $data = array();
        //$data['detail_job'] = $this->Pages_model->get_jobdetails($jobsid);
        $data['all_categories'] = $this->Admin_Model->get_categorieswithjobs();
        $data['pages'] = $this->load->view('category/jobs_category', $data, TRUE);
        $this->load->view('master', $data);
    }

    public function jobs_details() {
        $jobsid = $_GET['j'];
        $data = array();
        $data['detail_job'] = $this->Pages_model->get_jobdetails($jobsid);
        $data['pages'] = $this->load->view('jobdetails/job_details', $data, TRUE);
        $this->load->view('master', $data);
    }

    public function about_us() {
        $data = array();
        //$data['detail_job'] = $this->Pages_model->get_jobdetails($jobsid);
        $data['pages'] = $this->load->view('about/aboutus', $data, TRUE);
        $this->load->view('master', $data);
    }

    public function contact_us() {
        $data = array();
        //$data['detail_job'] = $this->Pages_model->get_jobdetails($jobsid);
        $data['pages'] = $this->load->view('contact/contactus', $data, TRUE);
        $this->load->view('master', $data);
    }

//admin panel

    public function admin_panel() {

        $logged = $this->session->userdata('logged');

        if (isset($logged->Id)) {
            $data = array();
            $data['admin_pages'] = $this->load->view('admin/home', '', TRUE);
            $this->load->view('admin', $data);
        } else {
            redirect('login');
        }
    }

    public function login() {
        $this->load->view('admin/adminlogin');
    }

    public function add_category() {
        $logged = $this->session->userdata('logged');

        if (isset($logged->Id)) {
            $data = array();
            $data['admin_pages'] = $this->load->view('admin/addcategory', '', TRUE);
            $this->load->view('admin', $data);
        } else {
            redirect('login');
        }
    }

    public function edit_category() {
        $logged = $this->session->userdata('logged');

        if (isset($logged->Id)) {
            $categoryid = $_GET['cid'];
            $data = array();
            $data['individual_categories'] = $this->Admin_Model->categories_byid($categoryid);
            $data['admin_pages'] = $this->load->view('admin/editcategory', $data, TRUE);
            $this->load->view('admin', $data);
        } else {
            redirect('login');
        }
    }

    public function view_category() {
        $logged = $this->session->userdata('logged');

        if (isset($logged->Id)) {
            $data = array();
            $data['all_categories'] = $this->Admin_Model->get_categories();
            $data['admin_pages'] = $this->load->view('admin/viewcategory', $data, TRUE);
            $this->load->view('admin', $data);
        } else {
            redirect('login');
        }
    }

    public function add_jobs() {
        $logged = $this->session->userdata('logged');

        if (isset($logged->Id)) {
            $data = array();
            $data['all_categories'] = $this->Admin_Model->get_categories();
            $data['all_companies'] = $this->Admin_Model->get_companies();
            $data['admin_pages'] = $this->load->view('admin/addjobs', $data, TRUE);
            $this->load->view('admin', $data);
        } else {
            redirect('login');
        }
    }

    public function view_jobs() {
        $logged = $this->session->userdata('logged');

        if (isset($logged->Id)) {
            $data = array();
            $data['all_jobs'] = $this->Admin_Model->getall_jobs();
            $data['admin_pages'] = $this->load->view('admin/viewjobs', $data, TRUE);
            $this->load->view('admin', $data);
        } else {
            redirect('login');
        }
    }

    public function edit_jobs() {
        $logged = $this->session->userdata('logged');

        if (isset($logged->Id)) {
            $jodid = $_GET['jid'];
            $data = array();
            $data['all_categories'] = $this->Admin_Model->get_categories();
            $data['update_jobs'] = $this->Admin_Model->getindividual_jobsinfo($jodid);
            $data['admin_pages'] = $this->load->view('admin/editjobs', $data, TRUE);
            $this->load->view('admin', $data);
        } else {
            redirect('login');
        }
    }

    public function add_admin() {
        $logged = $this->session->userdata('logged');

        if (isset($logged->Id)) {
            $data = array();
            $data['admin_pages'] = $this->load->view('admin/addadmin', '', TRUE);
            $this->load->view('admin', $data);
        } else {
            redirect('login');
        }
    }

    public function view_admin() {
        $logged = $this->session->userdata('logged');

        if (isset($logged->Id)) {
            $data = array();
            $data['all_admin'] = $this->Admin_Model->get_admin();
            $data['admin_pages'] = $this->load->view('admin/viewadmin', $data, TRUE);
            $this->load->view('admin', $data);
        } else {
            redirect('login');
        }
    }

    public function edit_admin() {
        $logged = $this->session->userdata('logged');

        if (isset($logged->Id)) {
            $adminid = $_GET['aid'];
            $data = array();
            $data['individual_admin'] = $this->Admin_Model->admin_byid($adminid);
            $data['admin_pages'] = $this->load->view('admin/editadmin', $data, TRUE);
            $this->load->view('admin', $data);
        } else {
            redirect('login');
        }
    }

    public function applied_job() {

        $logged = $this->session->userdata('logged');

        if (isset($logged->Id)) {
            $data = array();
            $data['appliedjob'] = $this->Admin_Model->getall_appliedjob();
            $data['admin_pages'] = $this->load->view('admin/appliedjob', $data, TRUE);
            $this->load->view('admin', $data);
        } else {
            redirect('login');
        }
    }

    public function login_user() {
        $this->form_validation->set_rules('umail', 'Umail', 'required', array('required' => 'You must provide an useremail'));
        $this->form_validation->set_rules('upass', 'Upass', 'required', array('required' => 'You must provide password'));

        if ($this->form_validation->run() == FALSE) {
            $error_msg = 'Required field can not be empty';
            $this->session->set_userdata('info_msg', $error_msg);
        } else {

            $usermail = $this->input->post('umail');
            $userpass = $this->input->post('upass');

            $data = array(
                'UserEmail' => $usermail,
                'UserPass' => md5($userpass)
            );

            $userlogged = $this->Pages_model->check_user_login($data);

            if (count($userlogged) > 0) {
                $this->session->set_userdata('userdata', $userlogged);
                $error_msg = 'You Logged Successfully';
                $this->session->set_userdata('info_msg', $error_msg);
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                $error_msg = 'Incorrect useremail or password';
                $this->session->set_userdata('info_msg', $error_msg);
            }
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function company_login() {
        $this->form_validation->set_rules('cmail', 'Cmail', 'required', array('required' => 'You must provide an useremail'));
        $this->form_validation->set_rules('cpass', 'Cpass', 'required', array('required' => 'You must provide password'));

        if ($this->form_validation->run() == FALSE) {
            $error_msg = 'Required field can not be empty';
            $this->session->set_userdata('info_msg', $error_msg);
        } else {

            $usermail = $this->input->post('cmail');
            $userpass = $this->input->post('cpass');

            $data = array(
                'cemail' => $usermail,
                'cpassword' => md5($userpass)
            );

            $userlogged = $this->Pages_model->check_company_login($data);

            if (count($userlogged) > 0) {
                $this->session->set_userdata('userdata', $userlogged);
                $error_msg = 'You Logged Successfully';
                $this->session->set_userdata('info_msg', $error_msg);
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                $error_msg = 'Incorrect company email or password';
                $this->session->set_userdata('info_msg', $error_msg);
            }
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function logout_user() {

        $this->session->unset_userdata('userdata');
        $error_msg = 'Logout Successfully';
        $this->session->set_userdata('info_msg', $error_msg);
        redirect('Pages');
    }

    public function register() {

        $this->form_validation->set_rules('uname', 'Uname', 'required', array('required' => 'You must provide an username'));
        $this->form_validation->set_rules('umail', 'Umail', 'required', array('required' => 'You must provide an email address'));
        $this->form_validation->set_rules('upass', 'Upass', 'required', array('required' => 'You must provide an user password'));
        $this->form_validation->set_rules('umobile', 'Umobile', 'required', array('required' => 'You must provide an user mobile no'));
        //$this->form_validation->set_rules('ucv', 'Ucv', 'required',array('required' => 'You must upload a cv'));

        if ($this->form_validation->run() == FALSE || !isset($_FILES['ucv']['name'])) {
            $error_msg = 'Required Field can not be empty';
            $this->session->set_userdata('info_msg', $error_msg);
        } else {

            $username = $this->input->post('uname');
            $usermail = $this->input->post('umail');
            $userpass = $this->input->post('upass');
            $usermobile = $this->input->post('umobile');

            $ucv = '';
            if (isset($_FILES['ucv'])) {
                $oldpath = $_FILES['ucv']['tmp_name'];
                $newpath = "assets/images/cv/" . $_FILES['ucv']['name'];
                move_uploaded_file($oldpath, $newpath);
                $ucv = base_url() . $newpath;
            }

            $data = array(
                'UserName' => $username,
                'UserEmail' => $usermail,
                'UserPass' => md5($userpass),
                'UserMobile' => $usermobile,
                'UserCv' => $ucv,
                'UserDate' => date('d-m-Y')
            );

            $this->Pages_model->register_user($data);
            $error_msg = $username . ' registered Successfully';
            $this->session->set_userdata('info_msg', $error_msg);
            redirect($_SERVER['HTTP_REFERER']);
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function company_register() {

        $this->form_validation->set_rules('cname', 'Cname', 'required', array('required' => 'You must provide company name'));
        $this->form_validation->set_rules('cmail', 'Cmail', 'required', array('required' => 'You must provide an email address'));
        $this->form_validation->set_rules('cpass', 'Cpass', 'required', array('required' => 'You must provide company user password'));
        $this->form_validation->set_rules('cmobile', 'Cmobile', 'required', array('required' => 'You must provide company mobile no.'));
        $this->form_validation->set_rules('caddress', 'Caddress', 'required', array('required' => 'You must provide company address'));
        $this->form_validation->set_rules('cdetails', 'Cdetails', 'required', array('required' => 'You must provide company details'));
        //$this->form_validation->set_rules('ucv', 'Ucv', 'required',array('required' => 'You must upload a cv'));

        if ($this->form_validation->run() == FALSE) {
            $error_msg = 'Required Field can not be empty';
            $this->session->set_userdata('info_msg', $error_msg);
        } else {

            $companyname = $this->input->post('cname');
            $companymail = $this->input->post('cmail');
            $companypass = $this->input->post('cpass');
            $companymobile = $this->input->post('cmobile');
            $companyurl = $this->input->post('cweb');
            $companyaddress = $this->input->post('caddress');
            $companydetails = $this->input->post('cdetails');

            $data = array(
                'cname' => $companyname,
                'cemail' => $companymail,
                'cpassword' => md5($companypass),
                'cphone' => $companymobile,
                'curl' => $companyurl,
                'caddress' => $companyaddress,
                'cdetails' => $companydetails,
                'cactivity' => 9,
                'cdate' => date('d-m-Y')
            );

            $this->Pages_model->register_company($data);
            $error_msg = $companyname . ' regitered successfully';
            $this->session->set_userdata('info_msg', $error_msg);
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function apply_job() {

        $jobid = $_GET['jid'];

        $logdata = $this->session->userdata('userdata');

        if (isset($logdata)) {

            if (isset($logdata->UserName)) {
                $jobs_details = $this->Pages_model->get_jobdetails($jobid);
                $wheredata = array(
                    'JobNo' => $jobid,
                    'UserNo' => $logdata->UserId,
                    'CompanyNo' => $jobs_details->JobCompany
                );
                $data = array(
                    'JobNo' => $jobid,
                    'UserNo' => $logdata->UserId,
                    'CompanyNo' => $jobs_details->JobCompany,
                    'ApplyDate' => date('d-m-Y')
                );

                $check_appy = $this->Pages_model->check_apply_available($wheredata);

                if (count($check_appy) > 0) {
                    $error_msg = 'You already apply this job';
                    $this->session->set_userdata('info_msg', $error_msg);
                } else {
                    $this->Pages_model->apply_now($data);
                    $error_msg = 'You applied successfully';
                    $this->session->set_userdata('info_msg', $error_msg);
                }
            } else {
                $error_msg = 'Provider can not apply for job';
                $this->session->set_userdata('info_msg', $error_msg);
            }
        } else {
            $error_msg = 'Please login to apply this job';
            $this->session->set_userdata('info_msg', $error_msg);
        }

        redirect($_SERVER['HTTP_REFERER']);
    }

    public function set_contact() {

        $this->form_validation->set_rules('cname', 'Cname', 'required', array('required' => 'You must provide name'));
        $this->form_validation->set_rules('cmail', 'Cmail', 'required', array('required' => 'You must provide email'));
        $this->form_validation->set_rules('csubject', 'Csubject', 'required', array('required' => 'You must provide subject'));
        $this->form_validation->set_rules('cmsg', 'Cmsg', 'required', array('required' => 'You must provide your message'));

        if ($this->form_validation->run() == FALSE) {

            $error_msg = validation_errors();
            $this->session->set_userdata('info_msg', $error_msg);
            redirect($_SERVER['HTTP_REFERER']);
        } else {

            $contact_name = $this->input->post('cname');
            $contact_mail = $this->input->post('cmail');
            $contact_subject = $this->input->post('csubject');
            $contact_message = $this->input->post('cmsg');

            $data = array(
                'name' => $contact_name,
                'email' => $contact_mail,
                'subject' => $contact_subject,
                'messages' => $contact_message,
                'contactdate' => date('d-m-Y')
            );

            $this->Pages_model->insert_contact($data);
            $error_msg = 'Successfully sent email to contact us';
            $this->session->set_userdata('info_msg', $error_msg);
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function contacts_mail() {
        $logged = $this->session->userdata('logged');

        if (isset($logged->Id)) {
            $data = array();
            $data['contactmail'] = $this->Admin_Model->get_contact_mail();
            $data['admin_pages'] = $this->load->view('admin/contactmail', $data, TRUE);
            $this->load->view('admin', $data);
        } else {
            redirect('login');
        }
    }

}
