<?php


class RequestTest extends TestCase {

    public function _prepareModelTest(){
        $model = new RequestModel();
        $model->from = "2014-10-16 08:00:00";
        $model->to = "2014-10-16 08:00:00";
        $model->type = TYPE_LEAVE;
        return $model;
    }

    public function test1Hour(){
        $model = $this->_prepareModelTest();
        $model->to = "2014-10-16 09:00:00";
        $this->assertEquals(1,$model->hour());
    }

    public function test2Hour(){
        $model = $this->_prepareModelTest();
        $model->to = "2014-10-16 10:00:00";
        $this->assertEquals(2,$model->hour());
    }

    public function test3Hour(){
        $model = $this->_prepareModelTest();
        $model->to = "2014-10-16 11:00:00";
        $this->assertEquals(3,$model->hour());
    }

    public function test3AndHalfHour(){
        $model = $this->_prepareModelTest();
        $model->to = "2014-10-16 11:30:00";
        $this->assertEquals(3.5,$model->hour());
    }

    public function test3AndHalfHourAfternoon(){
        $model = $this->_prepareModelTest();
        $model->to = "2014-10-16 13:00:00";
        $this->assertEquals(3.5,$model->hour());
    }

    public function test4AndHalfHourAfternoon(){
        $model = $this->_prepareModelTest();
        $model->to = "2014-10-16 14:00:00";
        $this->assertEquals(4.5,$model->hour());
    }

    public function test5AndHalfHourAfternoon(){
        $model = $this->_prepareModelTest();
        $model->to = "2014-10-16 15:00:00";
        $this->assertEquals(5.5,$model->hour());
    }

    public function test6AndHalfHourAfternoon(){
        $model = $this->_prepareModelTest();
        $model->to = "2014-10-16 16:00:00";
        $this->assertEquals(6.5,$model->hour());
    }

    public function test7AndHalfHourAfternoon(){
        $model = $this->_prepareModelTest();
        $model->to = "2014-10-16 17:00:00";
        $this->assertEquals(7.5,$model->hour());
    }

    public function test8HourAfternoon(){
        $model = $this->_prepareModelTest();
        $model->to = "2014-10-16 17:30:00";
        $this->assertEquals(8,$model->hour());
    }

    public function test8HourNight(){
        $model = $this->_prepareModelTest();
        $model->to = "2014-10-16 18:00:00";
        $this->assertEquals(8,$model->hour());
    }

    public function test8HourNextDay(){
        $model = $this->_prepareModelTest();
        $model->to = "2014-10-17 08:00:00";
        $this->assertEquals(8,$model->hour());
    }

    public function test9HourNextDay(){
        $model = $this->_prepareModelTest();
        $model->to = "2014-10-17 09:00:00";
        $this->assertEquals(9,$model->hour());
    }

    public function test11HourNextDay(){
        $model = $this->_prepareModelTest();
        $model->to = "2014-10-17 11:00:00";
        $this->assertEquals(11,$model->hour());
    }

    public function test11AndHalfHourNextDay(){
        $model = $this->_prepareModelTest();
        $model->to = "2014-10-17 11:30:00";
        $this->assertEquals(11.5,$model->hour());
    }

    public function test11AndHalfHourNextDayNoon(){
        $model = $this->_prepareModelTest();
        $model->to = "2014-10-17 13:00:00";
        $this->assertEquals(11.5,$model->hour());
    }

    public function test16HourNextDayNoon(){
        $model = $this->_prepareModelTest();
        $model->to = "2014-10-17 17:30:00";
        $this->assertEquals(16,$model->hour());
    }

    public function test16HourNextDayNight(){
        $model = $this->_prepareModelTest();
        $model->to = "2014-10-17 23:30:00";
        $this->assertEquals(16,$model->hour());
    }

} 