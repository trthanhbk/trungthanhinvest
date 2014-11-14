<?php

class FrontendController extends BaseController {

    public function getIndex() {
        return View::make('frontends.index');
    }

    public function getIntro(){
    	return View::make('frontends.intro');
    }

}