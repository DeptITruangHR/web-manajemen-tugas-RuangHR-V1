<?php
class staff extends CI_model {
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

    function getMyTask($id_member = -1){
        $query = "SELECT * from tugas JOIN member on tugas.id_member = member.id_member JOIN user on user.id_user=member.id_user WHERE tugas.id_member = '".$id_member."'";
        $res = $this->db->query($query);
        return $res->result_array();
    }

    function getMyUndoneTask($id_member = -1){
        $query = "SELECT * from tugas JOIN member on tugas.id_member = member.id_member JOIN user on user.id_user=member.id_user WHERE tugas.id_member = '".$id_member."' AND tugas.status = '1'";
        $res = $this->db->query($query);
        return $res->result_array();
    }

    function insertNewTask($id_member=-1, $filename=""){
        $this->db->set("pekerjaan", $this->input->post('tugas'));
        $this->db->set("id_member", $id_member);
        $this->db->set("detail", $this->input->post("deskripsi"));
        $this->db->set("file", $filename);
        $this->db->set("link", $this->input->post("link"));
        $kode = $id_member.'.'.time();
        $this->db->set("kode", md5($kode));
        // $this->db->set("date", time());
        $this->db->insert('tugas');
        return $this->db->insert_id();
    }

    function insertUpdateTask($id_member=-1, $filename=""){
        $kode = $this->input->get('kode');
        $query = "UPDATE tugas SET pekerjaan ='".$this->input->post('tugas')."',
                        detail = '".$this->input->post("deskripsi")."',
                        file='".$filename."',
                        link='".$this->input->post("link")."',
                        status='2' 
                WHERE kode='".$kode."'";
        $res = $this->db->query($query);
        // $this->db->set("pekerjaan", $this->input->post('tugas'));
        // $this->db->set("detail", $this->input->post("deskripsi"));
        // $this->db->set("file", $filename);
        // $this->db->set("link", $this->input->post("link"));
        // $this->db->set("status", '2');
        // // $kode = $id_member.'.'.time();
        // // $this->db->set("date", time());
        // $this->db->where("kode", $kode);
        // $this->db->update('tugas');
        // return $this->db->insert_id();
    }

    function insertNewNotulensi($id_member=-1){
        $this->db->set("id_member", $id_member);
        $this->db->set("subject", $this->input->post("subjects"));
        $this->db->set("detail", $this->input->post("deskripsi"));
        $date1 = strtotime($this->input->post("dates"));
        $date1 = date('Y-m-d', $date1);
        $this->db->set("tanggal", $date1);
        $kode = $id_member.'.'.time();
        $this->db->set("kode", md5($kode));
        // $this->db->set("date", time());
        $this->db->insert('notulensi');
        return $this->db->insert_id();
    }

    function getAllNotulensi($id_departemen=-1){
        $query = "SELECT * FROM notulensi AS a
                    JOIN MEMBER AS b ON a.id_member=b.id_member
                    JOIN USER AS c ON c.id_user = b.id_user
                    WHERE b.id_departemen='".$id_departemen."'";
        $res = $this->db->query($query);
        return $res->result_array();
    }

    function getNotulensiDetail(){
        $kode = $this->input->get('kode');
        $query = "SELECT * from notulensi JOIN member on notulensi.id_member = member.id_member JOIN user on user.id_user=member.id_user WHERE notulensi.kode = '".$kode."'";
        $res = $this->db->query($query);
        return $res->result_array();
    }

    function getProfileDetail($id_user=-1){
        $query= "SELECT * FROM user WHERE id_user='".$id_user."'";
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

    // function getAllJob($id_member){
    //     $q = "SELECT * FROM tugas where id_member";
    // }
}

?>