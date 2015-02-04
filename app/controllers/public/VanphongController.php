<?php
class VanphongController extends BaseController
{
    
    public function getIndex()
    {
        
        return View::make('frontends.van_phong.index');
    }
    
    public function getDanhThiep()
    {
        
        return View::make('frontends.van_phong.danh_thiep');
    }

    public function getDanhThiepBaoGia()
    {
        
        return View::make('frontends.van_phong.danh_thiep_bao_gia');
    }
    
    public function getTieuDeThu()
    {
        
        return View::make('frontends.van_phong.tieu_de_thu');
    }
    
    public function getPhongBi()
    {
        
        return View::make('frontends.van_phong.phong_bi');
    }
    
    public function getBiaDungHoSo()
    {
        
        return View::make('frontends.van_phong.bia_dung_ho_so');
    }
}
