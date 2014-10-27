<?php

function getRequestBackground($request) {
    if ($request->status == STATUS_APPROVE) {
        return "style='background-color: #81F781'";
    } elseif ($request->status == STATUS_DENY) {
        return "style='background-color: #F5A9A9'";
    }
    return "";
}

function getUserStatus($status){
    if ($status == STATUS_USER_ACTIVE){
        return "Active";
    } elseif ($status == STATUS_USER_IN_ACTIVE){
        return "Inactive";
    }
    return "";
}

function getAppClose($status){
    if ($status == STATUS_USER_ACTIVE){
        return "True";
    } elseif ($status == STATUS_USER_IN_ACTIVE){
        return "False";
    }
    return "";
}

function getAppCloseForMobile($status){
    if ($status == STATUS_USER_ACTIVE){
        return "1";
    } elseif ($status == STATUS_USER_IN_ACTIVE){
        return "0";
    }
    return "";
}

function getUserStatusBackground($status){
    if ($status == STATUS_USER_ACTIVE){
        return "style='background-color: #81F781'";
    } elseif($status == STATUS_USER_IN_ACTIVE) {
        return "style='background-color: #F5A9A9'";
    }
    return "";
}

function getOtType($type){
    if ($type == OT_HOLIDAY)
        return trans("labels.Holiday");
    if ($type == OT_NORMAL)
        return trans("labels.Normal");
}