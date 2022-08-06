<?php

class Login_models extends CI_Model{

    function login($data){      
        $password   = $data['password'];
        $email   = $data['email'];

        $this->db->select("*");
        $this->db->from("user");
        $this->db->where("email", $email);

        $query  = $this->db->get();
        $check  = $query->result_array();
        
        $returnData = new \stdClass();

        if (count($check) > 0) {
            $hashpassword = $check[0]['password'];
            $userid = $check[0]['id'];

            if (password_verify($password, $hashpassword)) {
                $returnData->status_code = "200";
                $returnData->message = "Success";
                $returnData->data = $check[0];
            } else {
                $returnData->status_code = "404";
                $returnData->message = "Wrong Password";
            }
        } else {
            $returnData->status_code = "404";
            $returnData->message = "User Not Found";
        }
        return $returnData;
    }   

}