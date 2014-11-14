<?php

class QuangcaoController extends BaseController {

    public function getToGap() {
        return View::make('frontends.quang_cao.to_gap');
    }  

    public function getToRoi() {
        return View::make('frontends.quang_cao.to_roi');
    } 

    public function getPoster() {
        return View::make('frontends.quang_cao.poster');
    }     

    public function getCatalogue() {
        return View::make('frontends.quang_cao.catalogue');
    }  

}