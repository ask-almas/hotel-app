<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    class Pages extends CI_Controller{
        
    function rooms()
    {  
        $this->load->model('hotel_model');
        $data['room'] = $this->hotel_model->get_rooms();
        $this->load->view('rooms_view', $data);
    }
    
    
    function index()
    {
        $data['title']='Home';
        $data['page']='index';
        $this->load->view('home_view', $data);
    }
    function check(){
        $checkin = $this->input->post('check_in_date');
        $this->load->model('hotel_model');
        $data['room'] = $this->hotel_model->check($checkin);
        $this->load->view('availability_view', $data);
    }    
    
    function services()
    {
        $data['title']='Services';
        $data['page']='services';
        $this->load->view('home_view', $data);
    }
    
    function cars()
    {
        $data['title']='Cars';
        $data['page']='cars';
        $this->load->view('home_view', $data);  
    }
    
    function booking()
    {
        $data['title']='Booking';
        $data['page']='booking';
        $this->load->view('home_view', $data);  
    }
    
    function payment()
    {
        $data['title']='Payment';
        $data['page']='payment';
        $this->load->view('home_view', $data);  
    }
    
    function use_facility()
    {
        $id = $this->input->post('id');
        $gssn = $this->input->post('gssn');
        
            if($id==1)
            {
                $data['facility_id']='1';
                $data['type']='Premium Food';
                $data['price']='10';
                $data['gssn']=$gssn;
                $this->load->model('hotel_model');
                $this->hotel_model->pf_used($data); 
            }
            
            else if($id==2)
            {
                $data['facility_id']='2';
                $data['type']='Drinks and Bevarages';
                $data['price']='5';
                $data['gssn']=$gssn;
                $this->load->model('hotel_model');
                $this->hotel_model->dab_used($data);
            }
            
            else if($id==3)
            {
                $data['facility_id']='3';
                $data['type']='Daily Cleaning';
                $data['price']='15';
                $data['gssn']=$gssn;
                $this->load->model('hotel_model');
                $this->hotel_model->dc_used($data);
            }
            
            else
            {
                $data['facility_id']='4';
                $data['type']='Access to Our Gym';
                $data['price']='15';
                $data['gssn']=$gssn;
                $this->load->model('hotel_model');
                $this->hotel_model->ag_used($data);
            }
        
        $this->load->view('used_facility_view', $data);
        
    }
    
    function search_car()
    {
        $model = $this->input->post("model");
        
        if($model==1){
            $this->load->model('hotel_model');
            $data['car'] = $this->hotel_model->search_mercedes();
            
        }else if($model==2){
            $this->load->model('hotel_model');
            $data['car'] = $this->hotel_model->search_toyota();
        
        }else {
            $this->load->model('hotel_model');
            $data['car'] = $this->hotel_model->search_bmw();
        }
        
        $this->load->view('search_car_view', $data);
    }
    
    function rent_car()
    {
        $plate = $this->input->post('plate');
        $gssn = $this->input->post('gssn');
        $order = $this->input->post('order');
        $return = $this->input->post('return');
        
        $data['gssn']=$gssn; 
        $data['ordered_date']=$order; 
        $data['return_date']=$return; 
        $this->load->model('hotel_model'); 
        $this->hotel_model->rent_car($data, $plate); 
        $this->load->view('rent_car_view');
 
    }
    
    function register()
    {
        $ssn = $this->input->post('ssn');
        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $adress = $this->input->post('adress');
        $status = $this->input->post('status');
        $checkin = $this->input->post('checkin');
        $checkout = $this->input->post('checkout');
        $room_no = $this->input->post('room_number');
        
        $this->load->model('hotel_model');
        $res=$this->hotel_model->check2($room_no);
        
        if($res='yes')
        {
            $data2['gssn']=$ssn;
            $data2['check_in_date']=$checkin;
            $data2['check_out_date']=$checkout;
            $data2['status']='No';
            $this->load->model('hotel_model');
            $this->hotel_model->reserve_room($data2, $room_no);
            
            $data['guest_ssn']=$ssn;
            $data['fname']=$fname;
            $data['lname']=$lname;
            $data['e-mail']=$email;
            $data['phone_no']=$phone;
            $data['adress']=$adress;
            $this->load->model('hotel_model');
            $this->hotel_model->add_guest($data);
            
            if($status==1)
            {
                $data3['single_ssn']=$ssn;
                $this->load->model('hotel_model');
                $this->hotel_model->add_single($data3);
                $this->load->view('reserve_room_view');
            }
            else
            {
                $this->load->view('add_family_view');
            }
        }
        else
        {
            $this->load->view('booking_error');
        }
         
    }
    
    
        function family()
        {
            $fssn = $this->input->post('ssn');
            $child = $this->input->post('child');
            $adult = $this->input->post('adult');
            
            $data['family_ssn']=$fssn;
            $data['no_of_children']=$child;
            $data['no_of_adults']=$adult;
            
            $this->load->model('hotel_model');
            $this->hotel_model->add_family($data);
            
            $this->load->view('add_member_view');
        }
        
            
        function add_member()
            {   
                $step = $this->input->post('step');
                $fssn = $this->input->post('ssn');
                $age = $this->input->post('age');
                $relation = $this->input->post('rel');
                $name = $this->input->post('name');
                
                $data['fssn']=$fssn;
                $data['age']=$age;
                $data['relation']=$relation;
                $data['name']=$name;
            
                $this->load->model('hotel_model');
                $this->hotel_model->add_member($data);
                
                if($step==1)
                {
                    $this->load->view('reserve_room_view');
                }
                else
                {
                    $this->load->view('add_member_view');
                }
            }
            
            
        function make_payment()
        {
            $ssn = $this->input->post('ssn');
            $this->load->model('hotel_model');
            $data['sum1'] = $this->hotel_model->car_payment($ssn);
            $data['sum2'] = $this->hotel_model->f_payment($ssn);
            $data['sum3'] = $this->hotel_model->r_payment($ssn);
            
            $this->load->view('make_payment_view', $data);
        }
        
        function pay()
        {
            $ssn = $this->input->post('ssn');
            $amount = $this->input->post('amount');
            $type = $this->input->post('type');
            $date = $this->input->post('date');
            
            $data['gssn']=$ssn;
            $data['type']=$type;
            $data['amount']=$amount;
            $data['date']=$date;
            
            $this->load->model('hotel_model');
            $this->hotel_model->pay($data);
            
            $this->load->view('payment_view', $data);
        }
        
        function check_out()
        {
            $data['title']='Check out';
            $data['page']='check_out';
            $this->load->view('home_view', $data);
        }
        
        function checkout()
        {
            $ssn = $this->input->post('ssn');
            
            $data['return_date']=NULL;
            $data['ordered_date']=NULL;
            $data['gssn']=NULL;
            $this->load->model('hotel_model');
            $this->hotel_model->return_car($data, $ssn);
            
            $this->load->model('hotel_model');
            $this->hotel_model->del_facility($ssn); 
            
            $this->load->model('hotel_model');
            $this->hotel_model->del_family($ssn); 
            
            $this->load->model('hotel_model');
            $this->hotel_model->del_guest($ssn); 
            
            $this->load->model('hotel_model');
            $this->hotel_model->del_members($ssn); 
            
            $this->load->model('hotel_model');
            $this->hotel_model->del_single($ssn);
            
            $data2['check_out_date']=NULL;
            $data2['check_in_date']=NULL;
            $data2['gssn']=NULL;
            $data2['status']='Yes';
            $this->load->model('hotel_model');
            $this->hotel_model->return_room($data2, $ssn);
            
            $this->load->view('checkout_view', $data);
        }
    }
    
    
