<?php

class Test extends Eloquent {
    public static function re() {
        return Redirect::action('FrontendController@getIndex');
    }
}