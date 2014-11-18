<?php

class FrontendController extends BaseController {

    public function getIndex() {
        return View::make('frontends.index');
    }

    public function getIntro(){
    	return View::make('frontends.intro');
    }

    public function getKhuyenMai(){
    	return View::make('frontends.khuyen_mai');
    }

    public function getQuyTrinhDatHang(){
    	return View::make('frontends.quy_trinh_dat_hang');
    }

    public function getDatHangInAn(){
    	return View::make('frontends.dat_hang_in_an');
    }

	public function getPhanHoi(){
    	return View::make('frontends.phan_hoi');
    }

    public function getLienHe(){
    	return View::make('frontends.lien_he');
    }    

}