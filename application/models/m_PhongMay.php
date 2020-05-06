<?php
class m_phongmay extends CI_Model
{
	public function __construct() {
        parent::__construct();        
    }
    public function ds_phongmay()
    {
    	$query = $this->db->query('select * from phong_may');
    		return $query->result_array();
    }
    public function them_phongmay($maPhongMay,$TenPhongMay)
    {
        $maPhongMay = 1;
        $ds_phongmay = $this->ds_phongmay();
        foreach($ds_phongmay as $item)
        {
            if($maPhongMay < $item['MaPhongMay'])
            {
                break;
            }
            $maPhongMay++;
        }
        $this->db->query("insert into phong_may values(".$maPhongMay.",'".$TenPhongMay."')");
    }

    public function tim_phongmay($thongTin)
    {       
        if(is_numeric($thongTin))
        {  
            $query=$this->db->query("select * from phong_may where MaPhongMay='".$thongTin."'");
            return $query->result_array();   
        }
        else 
        {
                $query=$this->db->query("select * from phong_may where TenPhongMay='".$thongTin."'");
                return $query->result_array();
        }   
    }
     public function tim_phongmay_id($maPhongMay)
    {
        $query=$this->db->query("select * from phong_may where MaPhongMay='".$maPhongMay."'");
        return $query->row_array();
    }
    public function xoa_phongmay_id($maPhongMay)
    {
            $this->db->query("delete from phong_may where MaPhongMay='".$maPhongMay."'");
    }
        
    public function sua_phongmay($maPhongMay,$TenPhongMay)
    {
        $this->db->query("update phong_may set TenPhongMay='".$TenPhongMay."' where MaPhongMay=".$maPhongMay."");
    }

}
?>