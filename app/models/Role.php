<?php

class Role extends BaseArdentModel {
    public static $rules = array(
        'name' => 'required|unique'
    );

    public function users() {
        return $this->haveMany('User');
    }
}