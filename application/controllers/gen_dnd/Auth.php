<?php
Class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library('session');
        // $this->load->model('member_model');

    }

    public function index() {
        $data['error'] = "";
        $this->load->view('gen_dnd/pages/login', $data);
    }

    public function actionlogin() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $data['error'] = "";

        $data = $this->member_model->get_member_by_login($username, $password);
        if (empty($data)) {
            $data['error'] = 'Username / Password salah';
        } else {
             if($data != NULL)
            {
                $data3=array('login'=>TRUE,'uid'=>$data['id']);
                $this->session->set_userdata($data3);
                redirect('gen_dnd/home');
            }
        }
        $this->load->view('gen_dnd/login', $data);

    }

    public function actionLogout(){

        $array_items = array('login' => '', 'uid' => '');
        $this->session->unset_userdata($array_items);
        $this->session->sess_destroy();
        redirect('gen_dnd/login','refresh');
    }
}
?>
