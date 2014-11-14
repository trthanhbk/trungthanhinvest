<?php

class AnPhamKhacController extends BaseController {

    public function getPhieuBaoHanh() {
        return View::make('frontends.an_pham_khac.phieu_bao_hanh');
    }  

    public function getThucDon() {
        return View::make('frontends.an_pham_khac.thuc_don');
    } 

    public function getBieuMau() {
        return View::make('frontends.an_pham_khac.bieu_mau');
    }     

    public function getTheNhua() {
        return View::make('frontends.an_pham_khac.the_nhua');
    } 

    public function getVeGiuXe() {
        return View::make('frontends.an_pham_khac.ve_giu_xe');
    } 

}