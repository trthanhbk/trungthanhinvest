<?php
class NhanController extends BaseController
{
    public function getIndex()
    {
        
        return View::make('frontends.nhan.index');
    }
    
    public function getNhanDecal()
    {
        
        return View::make('frontends.nhan.nhan_decal');
    }
    
    public function getTemBaoHanh()
    {
        
        return View::make('frontends.nhan.tem_bao_hanh');
    }
}
