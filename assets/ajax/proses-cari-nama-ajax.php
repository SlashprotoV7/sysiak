<?php


public function getDataBagianCari(){
    $this->db->select('d_laporan_pemeliharaan.*, ref_bagian.bagian as bagians');
    $this->db->join('ref_bagian', 'ref_bagian.id = d_laporan_pemeliharaan.id_bagian');

    return $this->db->get('d_laporan_pemeliharaan')->result_array();
}

$cari_bagian = $this->tampilDataFormMasuk();

$data = array(
            'bagian_cari'    =>  $cari_bagian['bagians'],);
 echo json_encode($data);



 ?>
