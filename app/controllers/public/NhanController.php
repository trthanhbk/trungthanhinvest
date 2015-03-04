<?php
class NhanController extends BaseController
{
    public function getIndex()
    {
        
        return View::make('frontends.nhan.index');
    }
    
    public function getNhanDecal()
    {
        $action = "NhanController@getNhanDecalBaoGia";
        $base_url = "asset/frontend/img/nhan/nhan_decal/";
        $products = [
            [
                "title" => "In nhãn mác",
                "action" => $action,
                "image" => $base_url . "in_nhan_mac.jpg",
            ],
            [
                "title" => "In vỏ đĩa giá rẻ",
                "action" => $action,
                "image" => $base_url . "in_vo_dia_gia_re.jpg",
            ],
            [
                "title" => "In vỏ đĩa tại Hà Nội",
                "action" => $action,
                "image" => $base_url . "in_vo_dia_tai_ha_noi.jpg",
            ],
            [
                "title" => "Thiết kế nhãn mác sản phẩm",
                "action" => $action,
                "image" => $base_url . "thiet-ke-nhan-mac-san-pham-01.jpg",
            ],            
        ];
        return View::make('frontends.nhan.nhan_decal', compact("products"));
    }

    public function getNhanDecalBaoGia() {

        return View::make('frontends.nhan.nhan_decal_bao_gia');
    }    
    
    public function getTemBaoHanh()
    {
        $action = "NhanController@getTemBaoHanhBaoGia";
        $base_url = "asset/frontend/img/nhan/tem_bao_hanh/";
        $products = [
            [
                "title" => "In tem chống hàng giả",
                "action" => $action,
                "image" => $base_url . "in-tem-7-mau_tem_chong_hang_gia-01.jpg",
            ],
            [
                "title" => "In tem bảy mầu",
                "action" => $action,
                "image" => $base_url . "in-tem-7-mau-02.jpg",
            ],
            [
                "title" => "In tem bảo hành",
                "action" => $action,
                "image" => $base_url . "in-tem-bao-hanh-01.jpg",
            ],
            [
                "title" => "Thiết kế tem bảo hành",
                "action" => $action,
                "image" => $base_url . "in-tem-bao-hanh-02.jpg",
            ],            
        ];
        return View::make('frontends.nhan.tem_bao_hanh', compact("products"));
    }

    public function getTemBaoHanhBaoGia() {
        
        return View::make('frontends.nhan.tem_bao_hanh_bao_gia');
    } 
}
