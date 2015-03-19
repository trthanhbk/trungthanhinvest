<?php
class LichController extends BaseController
{
    public function getIndex()
    {
        
        return View::make('frontends.lich.index');
    }

    private function getAllImages($folder) {
        $imageObjects = File::allFiles($folder);
        $images = [];
        foreach ($imageObjects as $imageObject) {
            $images[] = url($folder) . '/' . $imageObject->getRelativePathname();
        }
        return $images;
    }
    
    public function getLichDocQuyen()
    {
        $action = "LichController@getLichDocQuyenDemo";
        $base_url = "asset/frontend/img/lich/lich_doc_quyen/";
        $products = [
            [
                "title" => "In lịch độc quyền",
                "action" => $action,
                "image" => $base_url . "in_lich_doc_quyen.jpg",
            ],            
        ];
        return View::make('frontends.lich.lich_doc_quyen', compact("products"));
    }

    public function getLichDocQuyenDemo() {
        $folder = "asset/frontend/img/lich/lich_doc_quyen/lion_king";        
        $images = $this->getAllImages($folder);

        return View::make('frontends.lich.lich_doc_quyen_demo', compact("images"));
    }
    
    public function getLichBan()
    {
        $action1 = "LichController@getLichBan14x245";
        $action2 = "LichController@getLichBan20x21";
        $base_url = "asset/frontend/img/lich/lich_ban/";
        $products = [
            [
                "title" => "In lịch bàn 14x25,5 cm",
                "action" => $action1,
                "image" => $base_url . "lich_ban_14x24,5.jpg",
            ],  
            [
                "title" => "In lịch bàn 20x21 cm",
                "action" => $action2,
                "image" => $base_url . "lich_ban_20x21.jpg",
            ],            
        ];
        return View::make('frontends.lich.lich_ban', compact("products"));
    }

    public function getLichBan14x245() {
        $folder = "asset/frontend/img/lich/lich_ban/lich_ban_14x245";        
        $images = $this->getAllImages($folder);

        return View::make('frontends.lich.lich_ban_14_24', compact("images"));
    }

    public function getLichBan20x21() {
        $folder = "asset/frontend/img/lich/lich_ban/lich_ban_20x21";         
        $images = $this->getAllImages($folder);

        return View::make('frontends.lich.lich_ban_20_21', compact("images"));
    }
    
    public function getLichLoXo7To()
    {
        $action = "LichController@getThietKeLichLoXo7To";
        $base_url = "asset/frontend/img/lich/lich_lo_xo_7_to/";
        $products = [
            [
                "title" => "In lịch lò xo 7 tờ",
                "action" => $action,
                "image" => $base_url . "in_lich_lo_xo_7_to.jpg",
            ],            
        ];
        return View::make('frontends.lich.lich_lo_xo', compact("products"));
    }

    public function getThietKeLichLoXo7To() {
        $folder = "asset/frontend/img/lich/lich_lo_xo_7_to/lich_bs_11";         
        $images = $this->getAllImages($folder);

        return View::make('frontends.lich.lich_lo_xo_demo', compact("images"));
    }

    public function getLichLoXo12Thang()
    {
        $action = "LichController@getThietKeLichLoXo12Thang";
        $base_url = "asset/frontend/img/lich/lich_lo_xo_12_thang/";
        $products = [
            [
                "title" => "In lịch lò xo 12 tháng",
                "action" => $action,
                "image" => $base_url . "in_lich_lo_xo_12_thang.jpg",
            ],            
        ];
        return View::make('frontends.lich.lich_lo_xo_12_thang', compact("products"));
    }

    public function getThietKeLichLoXo12Thang() {
        $folder = "asset/frontend/img/lich/lich_lo_xo_12_thang/lo_xo_12_thang";         
        $images = $this->getAllImages($folder);

        return View::make('frontends.lich.lich_lo_xo_12_thang_demo', compact("images"));
    }
    
    public function getLichNepThiec()
    {
        $folder = "asset/frontend/img/lich/lich_nep_thiec";         
        $images = $this->getAllImages($folder);
        return View::make('frontends.lich.lich_nep_thiec', compact("images"));
    }
    
    public function getThiepChucMungNamMoi()
    {
        $folder = "asset/frontend/img/lich/thiep_chuc_mung_nam_moi";         
        $images = $this->getAllImages($folder);
        return View::make('frontends.lich.thiep_chuc_mung_nam_moi', compact("images"));
    }
    
    public function getTuiGiay()
    {
        $folder = "asset/frontend/img/lich/tui_giay";         
        $images = $this->getAllImages($folder);
        return View::make('frontends.lich.tui_giay', compact("images"));
    }
}
