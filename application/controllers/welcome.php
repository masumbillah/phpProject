<?php 

if ( ! defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            $data=array();
            $data['title']='Home';
            $data['category']=1;
            $data['popular_post']=1;
            $data['all_published_category']=$this->welcome_model->select_published_category();
            $data['all_published_blog']=$this->welcome_model->select_published_blog();
            $data['maincontent']=$this->load->view('home_content',$data,true);
            $this->load->view('master',$data);
	}
        public function portfolio()
        {
            $data=array();
            $data['title']='Portfolio';
            $data['category']=1;
            $data['recent_post']=1;
            $data['maincontent']=$this->load->view('portfolio_content','',true);
            $this->load->view('master',$data);
        }
        public function blog_details($blog_id)
        {
            $data=array();
            $data['title']='Blog Details';
            $data['category']=1;
            $data['popular_post']=1;
            $data['all_published_category']=$this->welcome_model->select_published_category();
            $data['blog_info']=$this->welcome_model->select_blog_by_id($blog_id);
            $data['maincontent']=$this->load->view('blog_details',$data,true);
            $this->load->view('master',$data);
        }
        public function category_blog($category_id)
        {
            $data=array();
            $data['title']='Home';
            $data['category']=1;
            $data['popular_post']=1;
            $data['all_published_category']=$this->welcome_model->select_published_category();
            $data['all_published_blog']=$this->welcome_model->select_published_blog_by_category_id($category_id);
            $data['maincontent']=$this->load->view('home_content',$data,true);
            $this->load->view('master',$data);
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */