<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    class Hotel_Model extends CI_Model {
    
    public function get_rooms()
    {
        $query = $this->db->get('room');
        return $query->result_array();
    }
    
    public function check($checkin){
        $query = $this->db->query("
                                            select Room_No, Type, Status
                                            from room
                                            where  gssn is NULL or '$checkin'>Check_out_Date
                                   ");
        return $query->result_array();
    }
    
    function pf_used($data)
    {
        $this->db->insert('facilities', $data);
    }
    
    function dab_used($data)
    {
        $this->db->insert('facilities', $data);
    }
    
    function dc_used($data)
    {
        $this->db->insert('facilities', $data);
    }
    
    function ag_used($data)
    {
        $this->db->insert('facilities', $data);
    }
    
    function search_mercedes()
    {
        $query = $this->db->query("
                                            SELECT Plate_No
                                            FROM Car
                                            WHERE  Model='Mercedes' and gssn is null
                                   ");
        return $query->result_array();
    }
    
    function search_toyota()
    {
        $query = $this->db->query("
                                            SELECT Plate_No
                                            FROM Car
                                            WHERE  Model='Toyota' and gssn is null
                                   ");
        return $query->result_array();
    }
    
    function search_bmw()
    {
        $query = $this->db->query("
                                            SELECT Plate_No
                                            FROM Car
                                            WHERE  Model='BMW' and gssn is null
                                   ");
        return $query->result_array();
    }
    
    function rent_car($data, $plate)
    {
        $this->db->where('Plate_No', $plate); 
        $this->db->update('car', $data); 
    }
    
    function add_guest($data)
    {
        $this->db->insert('guest', $data);
    }
    
    function reserve_room($data2, $room_no)
    {
        $this->db->where('room_no', $room_no); 
        $this->db->update('room', $data2); 
    }
    
    
    function check2($room_no)
    {
                $query = $this->db->query("
                                            SELECT Status
                                            FROM Room
                                            WHERE  Room_No='$room_no'
                                   ");
        return $query->row();
    }
    
    function add_single($data3)
    {
        $this->db->insert('single', $data3);
    }
    
    function add_family($data)
    {
        $this->db->insert('family', $data);
    }
    
    
    function add_member($data)
    {
        $this->db->insert('members', $data);
    }
    
    function car_payment($ssn)
    {
        $query = $this->db->query("
                                            select sum(Price) as ssum
                                            from car
                                            where gssn='$ssn';
                                            
                                   ");
        
        return $query->row()->ssum;
    }
    function f_payment($ssn)
    {
        $query = $this->db->query("
                                            select sum(Price) as ssum
                                            from facilities
                                            where gssn='$ssn';
                                            
                                   ");
        
        return $query->row()->ssum;
    }
    function r_payment($ssn)
    {
        $query = $this->db->query("
                                            select sum(Price) as ssum
                                            from room
                                            where gssn='$ssn';
                                            
                                   ");
        
        return $query->row()->ssum;
    }
    
    function pay($data)
    {
        $this->db->insert('payment', $data);
    }
    
    function return_car($data, $ssn)
    {
        $this->db->where('gssn', $ssn); 
        $this->db->update('car', $data);
    }
    
    function del_facility($ssn) 
    { 
        $this->db->where('gssn', $ssn); 
        $this->db->delete('facilities'); 
    }
    
    function del_family($ssn) 
    { 
        $this->db->where('family_ssn', $ssn); 
        $this->db->delete('family'); 
    }
    
    function del_guest($ssn) 
    { 
        $this->db->where('guest_ssn', $ssn); 
        $this->db->delete('guest'); 
    }
    
    function del_members($ssn) 
    { 
        $this->db->where('fssn', $ssn); 
        $this->db->delete('members'); 
    }
    
    function del_single($ssn) 
    { 
        $this->db->where('single_ssn', $ssn); 
        $this->db->delete('single'); 
    }
    
    function return_room($data2, $ssn)
    {
        $this->db->where('gssn', $ssn); 
        $this->db->update('room', $data2);
    }
    

}