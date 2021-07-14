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
}

?>