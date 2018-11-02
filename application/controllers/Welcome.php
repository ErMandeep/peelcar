<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('index');
	}

      /**
     * This function is used to load the view application
     */
 

    public function view_application()
    {
        $this->load->view('view_application');
    }

     public function create_application()
    {
        $this->load->view('create_application');
    }


/**
     * This function is used to create new application
     */   

public function new_application(){
     
        $data = array(
        'applicationsFirstname' => $this->input->post('applicationsFirstname'),
        'applicationsLastname' => $this->input->post('applicationsLastname'),
        'applicationsInitials' => $this->input->post('applicationsInitials'),
        'applicationCountry' => $this->input->post('applicationCountry'),
        'applicationProvince' => $this->input->post('applicationProvince'),
        'applicationPostal_Code' => $this->input->post('applicationPostal_Code'),
        'applicationHome_Phone' => $this->input->post('applicationHome_Phone'),
        'applicationBusiness_Phone' => $this->input->post('applicationBusiness_Phone'),
        'applicationEmail' => $this->input->post('applicationEmail'),
        'applicationcomment' => $this->input->post('applicationcomment'),
        'applicationDealership_name' => $this->input->post('applicationDealership_name'),
        'applicationPhone' => $this->input->post('applicationPhone'),
        'applicationDealership_Registration' => $this->input->post('applicationDealership_Registration'),
        'applicationvin' => $this->input->post('applicationvin'),
        'applicationtype' => $this->input->post('applicationtype'),
        'applicationyear' => $this->input->post('applicationyear'),
        'applicationmake' => $this->input->post('applicationmake'),
        'applicationmodel' => $this->input->post('applicationmodel'),
        'applicationTransmission' => $this->input->post('applicationTransmission'),
        'applicationFuel' => $this->input->post('applicationFuel'),
        'applicationBody_Type' => $this->input->post('applicationBody_Type'),
        'applicationColour' => $this->input->post('applicationColour'),
        'applicationMileage' => $this->input->post('applicationMileage'),
        'applicationPurchase_Price' => $this->input->post('applicationPurchase_Price'),
        'applicatioinFinancial_Institution' => $this->input->post('applicatioinFinancial_Institution')

        );

        $this->db->insert('applications', $data);
        // Produces: INSERT INTO mytable (title, name, date) VALUES ('My title', 'My name', 'My date')
        redirect('welcome/view_application');

    }



    public function application_data(){
        // $result = $this->db->from('applications')->get->result();
        // var_dump($result); 
        $query = $this->db->query("SELECT * FROM applications;");

foreach ($query->result_array() as $row)
{
        echo $row['applicationsFirstname'];
        echo $row['applicationBody_Type'];
        echo $row['applicationColour'];
}

    }






}
