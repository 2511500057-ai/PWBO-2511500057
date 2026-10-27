<?php
class Pengembalian_model {
    private $table = '2511500057pengembalian'; 
    private $db; 

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPengembalian()
    {
       $this->db->query('SELECT * FROM '.$this->table);
       return $this->db->resultSet();
    }

    public function getPengembalianById($id)
    {
        $this->db->query('SELECT * FROM '.$this->table.' where id=:Kd_Kembali057');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataPengembalian($data)
    {
         $query = "INSERT INTO $this->table(Kd_Kembali057, NimMhs057 ,NmMhs057, NmBuku057, JumBuku057, TglKembali057, Denda057) VALUES (:Kd_Kembali057, :NimMhs057, :NmMhs057, :NmBuku057, :JumBuku057, :TglKembali057, :Denda057)";

        $this->db->query($query);
        $this->db->bind('Kd_Kembali057', $data['Kd_Kembali057']);
        $this->db->bind('NimMhs057', $data['NimMhs057']);
        $this->db->bind('NmMhs057', $data['NmMhs057']);
        $this->db->bind('NmBuku057', $data['NmBuku057']);
        $this->db->bind('JumBuku057', $data['JumBuku057']);
        $this->db->bind('TglKembali057', $data['TglKembali057']);
        $this->db->bind('Denda057', $data['Denda057']);

        $this->db->execute();

        return $this->db->rowCount();
    }

public function hapusDataPengembalian($id)
{
    $query = "DELETE FROM $this->table WHERE id= :Kd_Kembali057";
    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();
    return $this->db->rowCount();
}
}