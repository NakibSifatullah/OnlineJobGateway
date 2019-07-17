<?php

class Admin_Model extends CI_Model {

    public function insert_categories($data) {
        $this->db->insert('category', $data);
    }

    public function update_categories($data) {
        $this->db->where('Id', $data['Id']);
        $this->db->update('category', $data);
    }

    public function update_admin($data) {
        $this->db->where('Id', $data['Id']);
        $this->db->update('admin', $data);
    }

    public function deleted_categories($cid) {
        $this->db->where('Id', $cid);
        $this->db->delete('category');
    }

    public function deleted_admin($aid) {
        $this->db->where('Id', $aid);
        $this->db->delete('admin');
    }

    public function insert_admin($data) {
        $this->db->insert('admin', $data);
    }

    public function get_categories() {
        $this->db->select('*');
        $this->db->from('category');

        $query = $this->db->get();
        $result = $query->result();

        return $result;
    }
    public function get_companies() {
        $this->db->select('*');
        $this->db->from('jobs_company');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_categorieswithjobs() {

        $this->db->select('COUNT(JobsId) as Jobcount,category.CategoryName,category.Id');
        $this->db->from('jobslist');

        $this->db->join('category', 'category.Id = jobslist.JobCategory');
        ;

        $this->db->where('JobStatus', 1);
        $this->db->group_by('JobCategory');
        $query = $this->db->get();
        $result = $query->result();

        return $result;
    }

    public function categories_byid($cid) {
        $this->db->select('*');
        $this->db->from('category');

        $this->db->where("Id", $cid);

        $query = $this->db->get();
        $result = $query->row();

        return $result;
    }

    public function get_admin() {
        $this->db->select('*');
        $this->db->from('admin');

        $query = $this->db->get();
        $result = $query->result();

        return $result;
    }

    public function admin_byid($aid) {
        $this->db->select('*');
        $this->db->from('admin');

        $this->db->where('Id', $aid);

        $query = $this->db->get();
        $result = $query->row();

        return $result;
    }

    public function check_login($admindata) {
        $this->db->select('*');
        $this->db->from('admin');

        $this->db->where($admindata);

        $query = $this->db->get();
        $result = $query->row();

        return $result;
    }

    public function insert_job(array $data) {
        $this->db->insert('jobslist', $data);
    }

    public function getall_jobs() {
        $this->db->select('jobslist.*,jobs_company.*');
        $this->db->from('jobslist');
        
        $this->db->join('jobs_company', 'jobs_company.id = jobslist.JobCompany');

        $query = $this->db->get();
        $result = $query->result();

        return $result;
    }

    public function delete_job($jid) {
        $data = array(
            'JobStatus' => 0
        );
        $this->db->where('JobsId', $jid);
        $this->db->update('jobslist', $data);
    }

    public function getindividual_jobsinfo($jid) {
        $this->db->select('*');
        $this->db->from('jobslist');

        $this->db->where('JobsId', $jid);
        $this->db->where('JobStatus', 1);

        $query = $this->db->get();
        $result = $query->row();

        return $result;
    }

    public function update_jobinfo($data) {

        $this->db->where('JobsId', $data['JobsId']);
        $this->db->update('jobslist', $data);
    }

    public function getall_appliedjob() {

        $this->db->select('applyjob.*,jobslist.*,users.*,jobs_company.*');
        $this->db->from('applyjob');

        $this->db->join('jobslist', 'jobslist.JobsId = applyjob.JobNo');
        $this->db->join('users', 'users.UserId = applyjob.UserNo');
        $this->db->join('jobs_company', 'jobs_company.id = jobslist.JobCompany');

        $query = $this->db->get();
        $result = $query->result();

        return $result;
    }
    
    public function unpublished_job($id) {
        $data = array(
            'JobStatus' =>0
        );
        $this->db->where('JobsId', $id);
        $this->db->update('jobslist', $data);
    }
    
    public function published_job($id) {
        $data = array(
            'JobStatus' =>1
        );
        $this->db->where('JobsId', $id);
        $this->db->update('jobslist', $data);
    }
    
    public function get_contact_mail(){
        
        $this->db->select('*');
        $this->db->from('contact');

        $query = $this->db->get();
        $result = $query->result();

        return $result;
    }

}
