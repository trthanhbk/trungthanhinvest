<?php

class FrontendController extends BaseController {

    public function getIndex() {
        return View::make('frontends.index');
    }

}