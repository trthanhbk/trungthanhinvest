<?php

class LichController extends BaseController {

    public function getLichDocQuyen() {
        return View::make('frontends.lich.lich_doc_quyen');
    }  

    public function getLichInPhoi() {
        return View::make('frontends.lich.lich_in_phoi');
    } 

    public function getLichLoXo() {
        return View::make('frontends.lich.lich_lo_xo');
    }     

    public function getLichNepThiec() {
        return View::make('frontends.lich.lich_nep_thiec');
    } 

    public function getThiepChucMungNamMoi() {
        return View::make('frontends.lich.thiep_chuc_mung_nam_moi');
    } 

    public function getTui() {
        return View::make('frontends.lich.tui');
    }  

}