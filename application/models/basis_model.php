<?php
class basis_model extends CI_Model {
    //put your code here
    public function admin_login_check_info($admin_email_address,$password)
    {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('admin_email_address',$admin_email_address);
        $this->db->where('admin_password',md5($password));
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
}

?>
