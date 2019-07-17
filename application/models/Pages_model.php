<?php

class Pages_model extends CI_Model {

    public function get_latestjob() {

        $this->db->select('jobslist.*,jobs_company.*');
        $this->db->from('jobslist');
        $this->db->join('jobs_company', 'jobs_company.id = jobslist.JobCompany', 'left');

        $this->db->where('JobStatus', 1);
        $this->db->limit(10);
        $this->db->order_by('JobsId', 'DESC');
        $query = $this->db->get();

        $result = $query->result();

        return $result;
    }

    public function get_searchjob(array $searchdata) {

        $this->db->select('jobslist.*,jobs_company.*,category.*');
        $this->db->from('jobslist');
        $this->db->join('jobs_company', 'jobs_company.id = jobslist.JobCompany', 'left');
        $this->db->join('category', 'category.Id = jobslist.JobCategory', 'left');

        $this->db->like($searchdata);
        $this->db->where('JobStatus', 1);
        $this->db->limit(10);
        $this->db->order_by('JobsId', 'DESC');
        $query = $this->db->get();

        $result = $query->result();

        return $result;
    }

    public function get_alljobs() {

        $this->db->select('jobslist.*,jobs_company.*,category.CategoryName,category.Id');
        $this->db->from('jobslist');
        $this->db->join('category', 'category.Id = jobslist.JobCategory');
        $this->db->join('jobs_company', 'jobs_company.id = jobslist.JobCompany', 'left');
        $this->db->where('JobStatus', 1);
        $this->db->order_by('JobsId', 'DESC');

        $query = $this->db->get();
        $result = $query->result();

        return $result;
    }

    public function getcompany_alljobs($id) {

        $this->db->select('jobslist.*,jobs_company.*,category.CategoryName,category.Id');
        $this->db->from('jobslist');
        $this->db->join('category', 'category.Id = jobslist.JobCategory');
        $this->db->join('jobs_company', 'jobs_company.id = jobslist.JobCompany', 'left');
        $this->db->where('JobCompany', $id);
        $this->db->where('JobStatus', 1);
        $this->db->order_by('JobsId', 'DESC');

        $query = $this->db->get();
        $result = $query->result();

        return $result;
    }

    public function get_jobsbycategories($jobcategory) {

        $this->db->select('jobslist.*,jobs_company.*,category.CategoryName,category.Id');
        $this->db->from('jobslist');

        $this->db->join('category', 'category.Id = jobslist.JobCategory');
        $this->db->join('jobs_company', 'jobs_company.id = jobslist.JobCompany', 'left');

        $this->db->where('JobCategory', $jobcategory);
        $this->db->where('JobStatus', 1);

        $this->db->order_by('JobsId', 'DESC');

        $query = $this->db->get();
        $result = $query->result();

        return $result;
    }

    public function getapplied_jobname($id) {

        $this->db->select('*');
        $this->db->from('jobslist');

        $this->db->where('JobsId', $id);
        $this->db->where('JobStatus', 1);

        $query = $this->db->get();
        $result = $query->row();

        return $result;
    }

    public function getapplied_allusers($id, $cid) {

        $this->db->select('applyjob.*,jobslist.*,users.*,jobs_company.*');
        $this->db->from('applyjob');

        $this->db->join('jobslist', 'jobslist.JobsId = applyjob.JobNo');
        $this->db->join('users', 'users.UserId = applyjob.UserNo');
        $this->db->join('jobs_company', 'jobs_company.id = jobslist.JobCompany');

        $this->db->where('CompanyNo', $cid);
        $this->db->where('JobNo', $id);

        $query = $this->db->get();
        $result = $query->result();

        return $result;
    }

    public function get_userdetails($uid) {
        $this->db->select('*');
        $this->db->from('users');

        $this->db->where('UserId', $uid);

        $query = $this->db->get();
        $result = $query->row();

        return $result;
    }

    public function get_companydetails($cid) {
        $this->db->select('*');
        $this->db->from('jobs_company');

        $this->db->where('id', $cid);

        $query = $this->db->get();
        $result = $query->row();

        return $result;
    }

    public function get_useralljobs($id) {

        $this->db->select('applyjob.*,jobslist.*,users.*,jobs_company.*');
        $this->db->from('applyjob');

        $this->db->join('jobslist', 'jobslist.JobsId = applyjob.JobNo');
        $this->db->join('users', 'users.UserId = applyjob.UserNo');
        $this->db->join('jobs_company', 'jobs_company.id = jobslist.JobCompany');

        $this->db->where('UserNo', $id);

        $query = $this->db->get();
        $result = $query->result();

        return $result;
    }

    public function get_jobdetails($jobid) {

        $this->db->select('jobslist.*,jobs_company.*,category.CategoryName');
        $this->db->from('jobslist');

        $this->db->join('category', 'category.Id = jobslist.JobCategory');
        $this->db->join('jobs_company', 'jobs_company.id = jobslist.JobCompany', 'left');
        $this->db->where('JobStatus', 1);
        $this->db->where('JobsId', $jobid);

        $query = $this->db->get();

        $result = $query->row();

        return $result;
    }

    public function register_user($data) {
        $this->db->insert('users', $data);
    }

    public function check_user_login($data) {

        $this->db->select('*');
        $this->db->from('users');

        $this->db->where($data);

        $query = $this->db->get();
        $result = $query->row();

        return $result;
    }

    public function check_company_login($data) {

        $this->db->select('*');
        $this->db->from('jobs_company');

        $this->db->where($data);

        $query = $this->db->get();
        $result = $query->row();

        return $result;
    }

    public function check_apply_available($data) {

        $this->db->select('*');
        $this->db->from('applyjob');

        $this->db->where($data);

        $query = $this->db->get();
        $result = $query->row();

        return $result;
    }

    public function apply_now($data) {
        $this->db->insert('applyjob', $data);
    }

    public function register_company($data) {
        $this->db->insert('jobs_company', $data);
    }

    public function insert_contact($data) {
        $this->db->insert('contact', $data);
    }

}
