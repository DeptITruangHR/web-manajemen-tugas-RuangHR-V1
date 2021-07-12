<?php
class account extends CI_model {
    function insertNewUser(){
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $level = $this->input->post('level');
        $dept = $this->input->post('dept');
        $q = "INSERT into user (username, password) VALUES ('$username', '$password')";
        $this->db->query($q);

        $id_user = $this->db->insert_id();
        if($level == "1"){
            $q1 = "INSERT into member (id_grup, id_user, id_departemen) values ('$level', '$id_user', '0')";
            $this->db->query($q1);
        }else if($level == "2"){
            $q2 = "INSERT INTO member (id_grup, id_user, id_departemen) values ('$level', '$id_user', '$dept')";
            $this->db->query($q2);
        }else if($level == "3"){
            $q3 = "INSERT INTO member (id_grup, id_user, id_departemen) values ('$level', '$id_user', '$dept')";
            $this->db->query($q3);
        }
    }
    function getIdUser(){
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $q = "SELECT * FROM user inner join member ON user.id_user=member.id_member where user.username='$username' AND user.password='$password'";
        $res = $this->db->query($q);
        $users = $res->result_array();
        if(count($users)>0){
            return $users; 
        }
        return [];
    }
    function getAllDept(){
        $q = "SELECT * FROM departemen";
        $res = $this->db->query($q);
        $dept = $res->result_array();
        return $dept; 
    }

    // function getAllJob($id_member){
    //     $q = "SELECT * FROM tugas where id_member";
    // }
}

?>