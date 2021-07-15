<?php
class hrd extends CI_model {
    function getAllTask($id_departemen=-1){
        $query = "SELECT * from tugas JOIN member on tugas.id_member = member.id_member JOIN user on user.id_user=member.id_user WHERE member.id_departemen ='".$id_departemen."'";
        $res = $this->db->query($query);
        return $res->result_array();
    }

    function getTaskDetail($id_grup=-1){
        $kode = $this->input->get('kode');
        $query = "SELECT * from tugas JOIN member on tugas.id_member = member.id_member JOIN user on user.id_user=member.id_user WHERE tugas.kode = '".$kode."'";
        $res = $this->db->query($query);
        return $res->result_array();
    }

    function getAllAnggota($id_departemen=-1){
        $query = "SELECT * FROM user AS a INNER JOIN 
                    member AS b ON a.id_user=b.id_user WHERE (b.id_grup='3' OR b.id_grup='4') AND b.id_departemen='".$id_departemen."'";
        $res = $this->db->query($query);
        return $res->result_array();        
    }

    function insertTaskForStaf($id_member=-1){
        $this->db->set("id_member", $this->input->post("user"));
        $this->db->set("pekerjaan", $this->input->post("tugas"));
        $this->db->set("detail", $this->input->post("deskripsi"));
        $date1 = strtotime($this->input->post("tanggal"));
        $date1 = date('Y-m-d', $date1);
        $this->db->set("deadline", $date1);
        $kode = $id_member.'.'.time();
        $this->db->set("kode", md5($kode));
        $this->db->set("status", '1');
        $this->db->insert('tugas');
        return $this->db->insert_id();
    }

    function approveTask(){
        $kode = $this->input->get('kode');
        $query = "UPDATE tugas SET 
                        status='0' 
                WHERE kode='".$kode."'";
        $res = $this->db->query($query);
    }

    function getMyProfile($id_user=-1){
        $query = "SELECT * FROM user WHERE id_user='".$id_user."'";
        $res = $this->db->query($query);
        return $res->result_array();  
    }

    function updateProfileDetail($id_user=-1){
        $this->db->set("username", $this->input->post('username'));
        $this->db->set("nama_user", $this->input->post("nama"));
        $this->db->set("alamat", $this->input->post("alamat"));
        $this->db->set("nomor_telepon", $this->input->post("nomor"));
        $this->db->where("id_user", $id_user);
        $this->db->update('user');
        return $this->db->insert_id();
    }
}

?>