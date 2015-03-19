<?php
class VanphongController extends BaseController
{
    
    public function getIndex()
    {
        
        return View::make('frontends.van_phong.index');
    }

    public function getInNameCardGiaRe()
    {
        $action = "VanphongController@getDanhThiep";
        $base_url = "asset/frontend/img/van_phong/danh_thiep/";
        $products = [
            [
                "title" => "In card giá rẻ",
                "action" => $action,
                "image" => $base_url . "in_card_gia_re.jpg",
            ],
            [
                "title" => "In card lấy ngay",
                "action" => $action,
                "image" => $base_url . "in_card_lay_ngay.jpg",
                "hot" => true,
            ],
            [
                "title" => "In card visit giá rẻ",
                "action" => $action,
                "image" => $base_url . "in_card_visit_gia_re.jpg",
            ],
            [
                "title" => "In card visit tại Hà Nội",
                "action" => $action,
                "image" => $base_url . "in_card_visit_tai_ha_noi.jpg",
            ],
            [
                "title" => "In card",
                "action" => $action,
                "image" => $base_url . "in_card.jpg",
            ],
            [
                "title" => "In danh thiếp",
                "action" => $action,
                "image" => $base_url . "in_danh_thiep.jpg",
                "hot" => true,
            ],
            [
                "title" => "In name card giá rẻ",
                "action" => $action,
                "image" => $base_url . "in_name_card_gia_re.jpg",
            ],
            [
                "title" => "In name card tại Hà Nội",
                "action" => $action,
                "image" => $base_url . "in_name_card_tai_ha_noi.jpg",
                "hot" => true,
            ],
            [
                "title" => "In nhanh card visit",
                "action" => $action,
                "image" => $base_url . "in_nhanh_card_visit.jpg",
                "hot" => true,
            ],
            [
                "title" => "Mẫu name card đẹp sáng tạo",
                "action" => $action,
                "image" => $base_url . "mau_name_card_dep_sang_tao.jpg",
            ],
            [
                "title" => "Thiết kế card visit miễn phí",
                "action" => $action,
                "image" => $base_url . "thiet_ke_card_visit_mien_phi.jpg",
            ],
        ];
        return View::make('frontends.van_phong.danh_thiep_product', compact("products"));
    }
    
    public function getDanhThiep()
    {
        
        return View::make('frontends.van_phong.danh_thiep');
    }

    public function getTaiSaoCanDanhThiep()
    {
        
        return View::make('frontends.van_phong.danh_thiep_bao_gia');
    }
    
    public function getTieuDeThu()
    {
        $action = "VanphongController@getTieuDeThuBaoGia";
        $base_url = "asset/frontend/img/van_phong/tieu_de_thu/";
        $products = [
            [
                "title" => "Công ty in tiêu đề thư chuyên nghiệp",
                "action" => $action,
                "image" => $base_url . "cong_ty_in_tieu_de_thu_chuyen_nghiep.png",
            ],
            [
                "title" => "In tiêu đề thư nhanh",
                "action" => $action,
                "image" => $base_url . "in_tieu_de_thu_nhanh.png",
            ],
            [
                "title" => "In tiêu đề thư tại Hà Nội",
                "action" => $action,
                "image" => $base_url . "in_tieu_de_thu_tai_ha_noi.png",
            ],
            [
                "title" => "In tiêu đề thư lấy ngay",
                "action" => $action,
                "image" => $base_url . "in_tieu_de_thu_lay_ngay.jpg",
            ],
            [
                "title" => "In tiêu đề thư giá rẻ tại Hà Nội",
                "action" => $action,
                "image" => $base_url . "in_tieu_de_thu_gia_re_tai_ha_noi.jpg",
            ],
            [
                "title" => "In tiêu đề thư giá rẻ",
                "action" => $action,
                "image" => $base_url . "in_tieu_de_thu_gia_re.jpg",
            ],
        ];
        return View::make('frontends.van_phong.tieu_de_thu', compact("products"));
    }

    public function getTieuDeThuBaoGia()
    {
        
        return View::make('frontends.van_phong.tieu_de_thu_bao_gia');
    }
    
    public function getPhongBi()
    {
        $action = "VanphongController@getPhongBiBaoGia";
        $base_url = "asset/frontend/img/van_phong/phong_bi/";
        $products = [
            [
                "title" => "In phong bì 12x22",
                "action" => $action,
                "image" => $base_url . "in_phong_bi_12x22.jpg",
            ],
            [
                "title" => "In phong bì A4",
                "action" => $action,
                "image" => $base_url . "in_phong_bi_A4.jpg",
            ],
            [
                "title" => "In phong bì công ty",
                "action" => $action,
                "image" => $base_url . "in_phong_bi_cong_ty.jpg",
            ],
            [
                "title" => "In phong bì giá rẻ tại Hà Nội",
                "action" => $action,
                "image" => $base_url . "in_phong_bi_gia_re_tai_ha_noi.jpg",
            ],
            [
                "title" => "In phong bì giá rẻ",
                "action" => $action,
                "image" => $base_url . "in_phong_bi_gia_re.jpg",
            ],
            [
                "title" => "In phong bì tại Hà Nội",
                "action" => $action,
                "image" => $base_url . "in_phong_bi_tai_ha_noi.jpg",
            ],
            [
                "title" => "In phong bì thư",
                "action" => $action,
                "image" => $base_url . "in_phong_bi_thu.jpg",
            ],
        ];
        return View::make('frontends.van_phong.phong_bi', compact("products"));
    }

    public function getPhongBiBaoGia()
    {
        
        return View::make('frontends.van_phong.phong_bi_bao_gia');
    }
    
    public function getKepFile()
    {
        $action = "VanphongController@getKepFileBaoGia";
        $base_url = "asset/frontend/img/van_phong/kep_file/";
        $products = [
            [
                "title" => "Các mẫu kẹp file ấn tượng",
                "action" => $action,
                "image" => $base_url . "cac_mau_kep_file_an_tuong.jpg",
            ],
            [
                "title" => "In kẹp file chất lượng",
                "action" => $action,
                "image" => $base_url . "in_kep_file_chat_luong.jpg",
            ],
            [
                "title" => "In kẹp file chuyên nghiệp",
                "action" => $action,
                "image" => $base_url . "in_kep_file_chuyen_nghiep.jpg",
            ],
            [
                "title" => "In kẹp file giá rẻ",
                "action" => $action,
                "image" => $base_url . "in_kep_file_gia_re.jpg",
            ],
            [
                "title" => "In kẹp file nhanh",
                "action" => $action,
                "image" => $base_url . "in_kep_file_nhanh.jpg",
            ],
            [
                "title" => "In kẹp file tại Hà Nội",
                "action" => $action,
                "image" => $base_url . "in_kep_file_tai_ha_noi.jpg",
            ],
            [
                "title" => "Thiết kế kẹp file ấn tượng",
                "action" => $action,
                "image" => $base_url . "thiet_ke_kep_file_an_tuong.jpg",
            ],
        ];
        return View::make('frontends.van_phong.kep_file', compact("products"));
    }

    public function getKepFileBaoGia()
    {
        
        return View::make('frontends.van_phong.kep_file_bao_gia');
    }
}
