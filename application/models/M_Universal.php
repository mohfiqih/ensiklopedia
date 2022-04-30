<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Universal extends CI_Model
{
    public function getOne($where, $tabel)
    {
        if (!empty($where)) {
            $this->db->where($where);
        }

        $data = $this->db->get($tabel)->row();
        return (count((array)$data) > 0) ? $data : false;
    }

    public function getOneSelect($select, $where, $table)
    {
        $this->db->select($select);
        if (!empty($where)) {
            $this->db->where($where);
        }
        $data = $this->db->get($table)->row();
        return (count((array)$data) > 0) ? $data : false;
    }


    public function getMulti($where, $tabel)
    {
        if (!empty($where)) {
            $this->db->where($where);
        }
        $data = $this->db->get($tabel)->result();
        return $data;
    }

    public function update($data, $where, $tabel)
    {
        $this->db->where($where);
        $update = $this->db->update($tabel, $data);
        return ($update) ? true : false;
    }

    public function insert($data, $tabel)
    {
        return ($this->db->insert($tabel, $data)) ? true : false;
    }
    

    public function delete($where, $tabel)
    {
        return ($this->db->where($where)->delete($tabel)) ? true : false;
    }

	
    public function getOrderBy($where, $tabel, $order, $urutan, $limit)
    {
        if (!empty($where)) {
            $this->db->where($where);
        }
        if (!empty($urutan)) {
            $this->db->order_by($order, $urutan);
        }
        $this->db->order_by($order);
        if (!empty($limit)) {
            $this->db->limit($limit);
        }

        $data = $this->db->get($tabel)->result();
        return (count((array)$data) > 0) ? $data : false;
    }
	
    public function insert_batch($data, $tabel)
    {
        return ($this->db->insert_batch($tabel, $data)) ? true : false;
    }

    public function upload($data = array())
    {
        return $this->db->insert_batch('berkas', $data);
    }
     
    public function get_kuesioner($where, $tabel)
    {
        if (!empty($where)) {
           $this->db->where($where);
        }
           $data = $this->db->get($tabel)->result();
           return (count((array)$data) > 0) ? $data : false;
    }

    // function insertDataBuah($data)
    // {
    //     $this->db->insert('buah', $data);
    // }

    // function getDataBuahDetail($id_buah)
    // {
    //     $this->db->where('id_buah', $id_buah);
    //     $query = $this->db->get('buah');
    //     return $query->row();
    // }

    // function total_buah()
    // {
    //     return $this->db->get('buah')->num_rows();
    // }

    // function getDataBuah()
    // {
    //     $query = $this->db->get('buah');
    //     return $query->result();
    // }

    // public function total_buah()
    // {
    //     return $this->db->get('buah')->num_rows();
    // }

    // public function getDataBuah()
    // {
    //     $query = $this->db->get('buah');
    //     return $query->result();
    // }

    // public function insertDataBuah($data)
    // {
    //     $this->db->insert('buah', $data);
    // }

    // public function getDataBuahDetail($id_buah)
    // {
    //     $this->db->where('id_buah', $id_buah);
    //     $query = $this->db->get('buah');
    //     return $query->row();
    // }
    // public function updateDataBuah($id_buah, $data)
    // {
    //     $this->db->where('id_buah', $id_buah);
    //     $this->db->update('buah', $data);
    // }

    // public function deleteDataBuah($id_buah)
    // {
    //     $this->db->where('id_buah', $id_buah);
    //     $this->db->delete('buah');
    // }
}
?>