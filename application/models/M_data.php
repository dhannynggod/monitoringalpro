<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_data extends CI_Model
{
    private $table1 = "data_alpro";

    public function getAll()
    {
        return $this->db->get($this->table1)->result();
    }

    public function getStatusBelum()
    {
        $this->db->select('*');
        $this->db->where("status='Belum'");
        return $this->db->get($this->table1)->result();
    }

    public function getCountBelum()
    {
        $sql = "SELECT count(if(status = 'Belum',status, NULL)) as status from data_alpro";
        $result = $this->db->query($sql);
        return $result->row();
    }
    public function getCountSelesai()
    {
        $sql = "SELECT count(if(status = 'Selesai',status, NULL)) as status from data_alpro";
        $result = $this->db->query($sql);
        return $result->row();
    }

    public function getStatusSelesai()
    {
        $this->db->select('*');
        $this->db->where("status='Selesai'");
        return $this->db->get($this->table1)->result();
    }

    public function upload_image($data, $type)
    {
        if ($type == 'add') {
            $this->db->insert('data_alpro', $data);
        } else {
            $this->db->update('data_alpro', $data, ['id' => $data['id']]);
        }
        return $this->db->affected_rows();
    }

    public function delete($id)
    {
        $this->db->delete($this->table1, ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function getImageById($id)
    {
        return $this->db->get_where($this->table1, ['id' => $id])->row_array();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table1, ["id" => $id])->result();
    }

    public function update($data, $id)
    {
        return $this->db->update($this->table1, $data, array('id' => $id));
    }
}
