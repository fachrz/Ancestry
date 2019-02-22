<?php
namespace Application\Models;
use Core\Database;

class APIModel{
    private $db;
    public function __construct()
    {

        $this->db = new Database;
        
    }
    public function getAPIData()
    {

        $this->db->query("SELECT * FROM user_details");
        return $this->db->resultSet();

    }
    public function setAPIData($indata)
    {  
        
 
        $query = "INSERT INTO Data_Konter
        VALUES (:email, :nama, :umur, :tgl_lahir, :tmpt_lahir, :no_telp, :no_hp, :jalan, :rt, :kelurahan, :kota, :kodepos, :no_identitas, :tgl_pengisian, :nm_pml_bng, :notelp_pml_bgn, :lebar_bangunan, :panjang_bangunan, :lbr_jl_depan, :kecamatan)";

        $this->db->query($query);

        $email = $indata['email'];
        $nama = $indata['nama'];  
        $umur = $indata['umur'];  
        $tgl_lahir = $indata['tgl_lahir'];  
        $tmpt_lahir = $indata['tmpt_lahir'];  
        $no_telp = $indata['no_telp'];
        $no_hp = $indata['no_hp'];
        $jalan = $indata['nomor'];
        $rt = $indata['rw'];
        $kelurahan = $indata['kelurahan'];
        $kota = $indata['kota'];
        $kodepos = $indata['kodepos'];
        $no_identitas = $indata['no_identitas'];
        $tgl_pengisian = $indata['tgl_pengisian'];
        $nm_pml_bng = $indata['nm_pml_bgn'];
        $notelp_pml_bgn = $indata['notelp_pml_bgn'];
        $lebar_bangunan = $indata['lebar_bangunan'];
        $panjang_bangunan = $indata['panjang_bangunan'];
        $lbr_jl_depan = $indata['lbr_jl_depan'];
        $kecamatan = $indata['kecamatan'];

        $this->db->bind('email', $email);
        $this->db->bind('nama', $nama);
        $this->db->bind('umur', $umur);
        $this->db->bind('tgl_lahir', $tgl_lahir);
        $this->db->bind('tmpt_lahir', $tmpt_lahir);
        $this->db->bind('no_telp', $no_telp);
        $this->db->bind('no_hp', $no_hp);
        $this->db->bind('jalan', $jalan);
        $this->db->bind('rt', $rt);
        $this->db->bind('kelurahan', $kelurahan);
        $this->db->bind('kota', $kota);
        $this->db->bind('kodepos', $kodepos);
        $this->db->bind('no_identitas', $no_identitas);
        $this->db->bind('tgl_pengisian', $tgl_pengisian);
        $this->db->bind('nm_pml_bng', $nm_pml_bng);
        $this->db->bind('notelp_pml_bgn', $notelp_pml_bgn);
        $this->db->bind('lebar_bangunan', $lebar_bangunan);
        $this->db->bind('panjang_bangunan', $panjang_bangunan);
        $this->db->bind('lbr_jl_depan', $lbr_jl_depan);
        $this->db->bind('kecamatan', $kecamatan);
      
        return $this->db->execute();
    }
}
