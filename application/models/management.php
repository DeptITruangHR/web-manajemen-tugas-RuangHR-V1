<?php
class management extends CI_model {
    // kode belum optimal
    function getAllData(){
        $query = "SELECT *, count(member.id_departemen) AS jumlah FROM departemen INNER JOIN member on member.id_departemen = departemen.id_departemen group by departemen.id_departemen";
        $res = $this->db->query($query);
        return $res->result_array();
    }

    function getAllAnggota(){
        $query = "SELECT * FROM user JOIN member on user.id_user = member.id_user JOIN departemen ON member.id_departemen = departemen.id_departemen";
        $res = $this->db->query($query);
        return $res->result_array();
    }
}

?>