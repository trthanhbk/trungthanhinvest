<?php

use Illuminate\Support\Facades\Auth;

class RequestModel extends BaseArdentModel {

    protected $table = "requests";

    public static $rules = array(
        "remark" => "required",
        "from"   => "required|date",
        "to"     => "required|date|after:from",
    );

    public function requester() {
        return $this->belongsTo('User', 'author');
    }

    public function approval() {
        return $this->belongsTo('User', 'approve_l1');
    }

    public function request_status() {
        return $this->belongsTo('RequestStatus', 'status', 'id');
    }

    public function hour() {
        $diff = $this->_getHourDiff($this->to, $this->from);
        if ($this->type == TYPE_OT)
            return $diff;
        $from = $this->from;
        $to = $this->to;
        $hrs = 0;
        while (true) {
            if ($this->_moreDateThan($this->_addHalfHour($from), $to)){
                break;
            }
            $from = $this->_addHalfHour($from);
            if ($this->_isValidLeaveTime($from))
                $hrs += 0.5;
        }

        return $hrs;
    }

    private function _getHourDiff($to, $from) {
        return round((strtotime($to) - strtotime($from)) / 3600, 1);
    }

    private function _isValidLeaveTime($date) {
        $hour = $this->_getHourInDate($date);
        return (('08:00' < $hour) && ($hour <= '11:30')) || (('13:00' < $hour) && ($hour <= '17:30'));
    }

    private function _moreDateThan($from, $to) {
        return strtotime($from) > strtotime($to);
    }

    private function _addHalfHour($date) {
        $timestamp = strtotime($date);
        $timestamp_half_hour_later = $timestamp + 1800;
        return date('Y-m-d H:i:s', $timestamp_half_hour_later);
    }

    private function _getHourInDate($date) {
        $timestamp = strtotime($date);
        return date('H:i', $timestamp);
    }

    public static function boot() {
        parent::boot();
        RequestModel::observe(new RequestObserver());
    }
}

class RequestObserver {
    public function saving($model) {
        if (is_null($model->author)) {
            $model->author = Auth::user()->id;
        }
        if (is_null($model->status)) {
            $model->status = STATUS_PENDING;
        }
        if ($model->type == TYPE_OT) {
            $model->status = STATUS_APPROVE;
        }
    }
}