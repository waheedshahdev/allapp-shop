<?php
class Home extends MX_Controller 
{

function __construct() {
parent::__construct();
}


public function index()
{
    $data['view_module'] = "home";
    $data['view_files'] = "index";
    $this->load->module("templates");
    $this->templates->public_bootstrap($data);
}

public function purchase()
{
    $data['view_module'] = "home";
    $data['view_files'] = "purchase";
    $this->load->module("templates");
    $this->templates->public_bootstrap($data);
}

public function refinance()
{
    $data['view_module'] = "home";
    $data['view_files'] = "refinance";
    $this->load->module("templates");
    $this->templates->public_bootstrap($data);
}

public function add_purchase()
{
	$data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email' => $this->input->post('email'),
			'address' => $this->input->post('address'),
			'phone' => $this->input->post('phone'),
			'zip' => $this->input->post('zip'),
			'city' => $this->input->post('city'),
			'credit_score' => $this->input->post('credit_score'),
			'military_vetran' => $this->input->post('military_vetran'),
			'current_value' => $this->input->post('current_value'),
			'int_rate' => $this->input->post('int_rate'),
			'mortgage_bal' => $this->input->post('mortgage_bal'),
			'house_type' => $this->input->post('house_type'),
			'terms_check' => $this->input->post('terms_check'),
			'property_type' => $this->input->post('property_type')
		);

	 $result = save_data('tbl_customer_data', $data);
                    if($result)
                    {
                        $this->session->set_flashdata('success', 'Thank you Our Team Will Contact you Soon!.');
                        redirect('home/purchase');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Your Data Not Added Due to Error.');
                        redirect('home/purchase');
                    }
}

public function add_refinance()
{
	$data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email' => $this->input->post('email'),
			'address' => $this->input->post('address'),
			'phone' => $this->input->post('phone'),
			'zip' => $this->input->post('zip'),
			'city' => $this->input->post('city'),
			'credit_score' => $this->input->post('credit_score'),
			'military_vetran' => $this->input->post('military_vetran'),
			'current_value' => $this->input->post('current_value'),
			'int_rate' => $this->input->post('int_rate'),
			'mortgage_bal' => $this->input->post('mortgage_bal'),
			'house_type' => $this->input->post('house_type'),
			'terms_check' => $this->input->post('terms_check'),
			'property_type' => $this->input->post('property_type')
		);

	 $result = save_data('tbl_customer_data', $data);
                    if($result)
                    {
                        $this->session->set_flashdata('success', 'Thank you Our Team Will Contact you Soon!.');
                        redirect('home/refinance');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Your Data Not Added Due to Error.');
                        redirect('home/refinance');
                    }
}

public function contact()
{
	$this->load->view('home/contact');
}

public function add_contact()
{
	$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'description' => $this->input->post('description'),
		);

	 $result = save_data('tbl_contact', $data);
                    if($result)
                    {
                        $this->session->set_flashdata('success', 'Thank you Our Team Will Contact you Soon!.');
                        redirect('home/contact');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Your Data Not Added Due to Error.');
                        redirect('home/contact');
                    }
}



}