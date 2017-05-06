<?php
class Welcome_Model extends CI_Model {
    //put your code here
    public function select_published_category()
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status',1);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function select_published_blog()
    {
        /*$this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('publication_status',1);*/
        $sql='SELECT * FROM tbl_blog as b,tbl_category as c  WHERE b.category_id=c.category_id AND b.publication_status=1  ';
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
    public function select_published_blog_by_category_id($category_id)
    {
        $sql="SELECT * FROM tbl_blog as b,tbl_category as c  WHERE b.category_id=c.category_id AND b.publication_status=1 AND b.category_id='$category_id' ";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }

    public function select_blog_by_id($blog_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('blog_id',$blog_id);
        $this->db->where('publication_status',1);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
}

?>
