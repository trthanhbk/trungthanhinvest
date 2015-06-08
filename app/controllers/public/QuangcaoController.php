<?php
class QuangcaoController extends BaseController
{
    public function getIndex()
    {
        
        return View::make('frontends.quang_cao.index');
    }
    
    public function getToGap()
    {
        $action = "QuangcaoController@getToGapBaoGia";
        $base_url = "asset/frontend/img/quang_cao/to_gap/";
        $products = [
            [
                "title" => "Công ty in tờ gấp chuyên nghiệp",
                "action" => $action,
                "image" => $base_url . "cong_ty_in_to_gap_chuyen_nghiep.jpg",
            ],
            [
                "title" => "In tờ gấp nhanh",
                "action" => $action,
                "image" => $base_url . "in_to_gap_nhanh.jpg",
            ],
            [
                "title" => "In tờ gấp giá rẻ",
                "action" => $action,
                "image" => $base_url . "in_to_gap_gia_re.jpg",
            ],
            [
                "title" => "In tờ gấp quảng cáo",
                "action" => $action,
                "image" => $base_url . "in_to_gap_quang_cao.jpg",
            ],
            [
                "title" => "In tờ gấp tại Hà Nội",
                "action" => $action,
                "image" => $base_url . "in_to_gap_tai_ha_noi.jpg",
            ],
            [
                "title" => "In tờ gấp",
                "action" => $action,
                "image" => $base_url . "in_to_gap.jpg",
            ],
            [
                "title" => "Thiết kế tờ gấp chuyên nghiệp",
                "action" => $action,
                "image" => $base_url . "thiet_ke_to_gap_chuyen_nghiep.jpg",
            ],
        ];
        return View::make('frontends.quang_cao.to_gap', compact("products"));
    }

    public function getToGapBaoGia()
    {
        $prices = [
            [
                "title" => "BẢNG GIÁ IN TỜ GẤP A3 (42x29,7cm) - In 2 mặt",
                "header" => ["Loại giấy / Tờ", "500 tờ", "1.000 tờ", "2.000 tờ", "3.000 tờ", "5.000 tờ", "7.000 tờ", "10.000 tờ", "20.000 tờ"],
                "data" => [
                    ["C100",2760,1820,1330,950,870,750,700,650],
                    ["C120",2850,1880,1400,1150,1020,950,780,750],
                    ["C150",3050,2010,1450,1300,1120,1000,820,780],
                    ["C200",4100,2210,1500,1400,1200,1150,1100,1000],
                    ["C250",4300,2420,1750,1650,1420,1400,1300,1200],
                    ["C300",4500,2680,2010,2000,1680,1570,1540,1450],
                ],
                'note' => [
                    "Đơn giá đã bao gồm phí thiết kế.",
                    "Cán mờ cộng thêm 390đ/1 mặt, cán bóng cộng thêm 370đ/1 mặt.",
                    "Đơn giá chưa bao gồm 10% VAT, Thời gian giao hàng 2-3 ngày.",
                    "In trên máy in công nghiệp Offset 4 màu.",
                ]
            ],
            [
                "title" => "BẢNG GIÁ IN TỜ GẤP A4 (21x29,7cm) - In 2 mặt",
                "header" => ["Loại giấy / Tờ", "1.000 tờ", "2.000 tờ", "3.000 tờ", "5.000 tờ", "7.000 tờ", "10.000 tờ", "20.000 tờ"],
                "data" => [
                    ["C100",1200,725,605,505,450,405,380],
                    ["C120",1250,750,630,530,480,435,420],
                    ["C150",1350,830,700,550,540,460,450],
                    ["C200",1450,980,795,670,620,570,550],
                    ["C250",1500,1000,895,775,710,650,620],
                    ["C300",1650,1110,985,950,790,740,720],
                ],
                'note' => [
                    "Đơn giá đã bao gồm phí thiết kế.",
                    "Cán mờ cộng thêm 195đ/1 mặt, cán bóng cộng thêm 185đ/1 mặt.",
                    "Đơn giá chưa bao gồm 10% VAT, Thời gian giao hàng 2-3 ngày.",
                    "In trên máy in công nghiệp Offset 4 màu.",
                ]
            ],
            [
                "title" => "BẢNG GIÁ IN TỜ GẤP A5 (15x20,5cm) - In 2 mặt",
                "header" => ["Loại giấy / Tờ", "1.000 tờ", "2.000 tờ", "3.000 tờ", "5.000 tờ", "7.000 tờ", "10.000 tờ", "20.000 tờ"],
                "data" => [
                    ["C100",1100,610,470,340,280,245,190],
                    ["C120",1150,650,490,370,305,260,200],
                    ["C150",1200,690,530,400,340,270,240],
                    ["C200",1230,740,600,440,390,340,285],
                    ["C250",1250,800,680,510,450,395,330],
                    ["C300",1320,850,750,570,500,440,375],
                ],
                'note' => [
                    "Đơn giá đã bao gồm phí thiết kế.",
                    "Cán mờ cộng thêm 100đ/1 mặt, cán bóng cộng thêm 90đ/1 mặt.",
                    "Đơn giá chưa bao gồm 10% VAT, Thời gian giao hàng 2-3 ngày.",
                    "In trên máy in công nghiệp Offset 4 màu.",
                ]
            ],
        ];
        return View::make('frontends.quang_cao.to_gap_bao_gia', compact("prices"));
    }
    
    public function getToRoi()
    {
        $action = "QuangcaoController@getToRoiBaoGia";
        $base_url = "asset/frontend/img/quang_cao/to_roi/";
        $products = [
            [
                "title" => "In tờ rơi A4",
                "action" => $action,
                "image" => $base_url . "in_to_roi_a4.jpg",
            ],
            [
                "title" => "In tờ rơi quảng cáo",
                "action" => $action,
                "image" => $base_url . "in_to_roi_quang_cao.jpg",
            ],
            [
                "title" => "In tờ rơi giá rẻ",
                "action" => $action,
                "image" => $base_url . "in_to_roi_gia_re.jpg",
            ],
            [
                "title" => "In tờ rơi quảng cáo giá rẻ",
                "action" => $action,
                "image" => $base_url . "in_to_roi_quang_cao_gia_re.jpg",
            ],
            [
                "title" => "In tờ rơi giá rẻ tại Hà Nội",
                "action" => $action,
                "image" => $base_url . "in_to_roi_gia_re_tai_ha_noi.jpg",
            ],            
            [
                "title" => "In tờ rơi",
                "action" => $action,
                "image" => $base_url . "in_to_roi.jpg",
            ],
        ];
        return View::make('frontends.quang_cao.to_roi', compact("products"));
    }

    public function getToRoiBaoGia()
    {
        $prices = [
            [
                "title" => "BẢNG GIÁ IN TỜ RƠI A3 (42x29,7cm) - In 2 mặt",
                "header" => ["Loại giấy / Tờ", "500 tờ", "1.000 tờ", "2.000 tờ", "3.000 tờ", "5.000 tờ", "7.000 tờ", "10.000 tờ", "20.000 tờ"],
                "data" => [
                    ["C100",2760,1820,1330,950,870,750,700,650],
                    ["C120",2850,1880,1400,1150,1020,950,780,750],
                    ["C150",3050,2010,1450,1300,1120,1000,820,780],
                    ["C200",4100,2210,1500,1400,1200,1150,1100,1000],
                    ["C250",4300,2420,1750,1650,1420,1400,1300,1200],
                    ["C300",4500,2680,2010,2000,1680,1570,1540,1450],
                ],
                'note' => [
                    "Đơn giá đã bao gồm phí thiết kế.",
                    "Cán mờ cộng thêm 390đ/1 mặt, cán bóng cộng thêm 370đ/1 mặt.",
                    "Đơn giá chưa bao gồm 10% VAT, Thời gian giao hàng 2-3 ngày.",
                    "In trên máy in công nghiệp Offset 4 màu.",
                ]
            ],
            [
                "title" => "BẢNG GIÁ IN TỜ RƠI A4 (21x29,7cm) - In 2 mặt",
                "header" => ["Loại giấy / Tờ", "1.000 tờ", "2.000 tờ", "3.000 tờ", "5.000 tờ", "7.000 tờ", "10.000 tờ", "20.000 tờ"],
                "data" => [
                    ["C100",1200,725,605,505,450,405,380],
                    ["C120",1250,750,630,530,480,435,420],
                    ["C150",1350,830,700,550,540,460,450],
                    ["C200",1450,980,795,670,620,570,550],
                    ["C250",1500,1000,895,775,710,650,620],
                    ["C300",1650,1110,985,950,790,740,720],
                ],
                'note' => [
                    "Đơn giá đã bao gồm phí thiết kế.",
                    "Cán mờ cộng thêm 195đ/1 mặt, cán bóng cộng thêm 185đ/1 mặt.",
                    "Đơn giá chưa bao gồm 10% VAT, Thời gian giao hàng 2-3 ngày.",
                    "In trên máy in công nghiệp Offset 4 màu.",
                ]
            ],
            [
                "title" => "BẢNG GIÁ IN TỜ RƠI A5 (15x20,5cm) - In 2 mặt",
                "header" => ["Loại giấy / Tờ", "1.000 tờ", "2.000 tờ", "3.000 tờ", "5.000 tờ", "7.000 tờ", "10.000 tờ", "20.000 tờ"],
                "data" => [
                    ["C100",1100,610,470,340,280,245,190],
                    ["C120",1150,650,490,370,305,260,200],
                    ["C150",1200,690,530,400,340,270,240],
                    ["C200",1230,740,600,440,390,340,285],
                    ["C250",1250,800,680,510,450,395,330],
                    ["C300",1320,850,750,570,500,440,375],
                ],
                'note' => [
                    "Đơn giá đã bao gồm phí thiết kế.",
                    "Cán mờ cộng thêm 100đ/1 mặt, cán bóng cộng thêm 90đ/1 mặt.",
                    "Đơn giá chưa bao gồm 10% VAT, Thời gian giao hàng 2-3 ngày.",
                    "In trên máy in công nghiệp Offset 4 màu.",
                ]
            ],
        ];
        return View::make('frontends.quang_cao.to_roi_bao_gia', compact("prices"));
    }
    
    public function getPoster()
    {
        $action = "QuangcaoController@getPosterBaoGia";
        $base_url = "asset/frontend/img/quang_cao/poster/";
        $products = [
            [
                "title" => "In poster giá rẻ",
                "action" => $action,
                "image" => $base_url . "in_poster_gia re.jpg",
            ],
            [
                "title" => "In poster tại Hà Nội",
                "action" => $action,
                "image" => $base_url . "in_poster_tai_ha_noi.jpg",
            ],
        ];
        return View::make('frontends.quang_cao.poster', compact("products"));
    }

    public function getPosterBaoGia()
    {
        
        return View::make('frontends.quang_cao.poster_bao_gia');
    }
    
    public function getCatalogue()
    {
        $action = "QuangcaoController@getCatalogueBaoGia";
        $base_url = "asset/frontend/img/quang_cao/catalogue/";
        $products = [
            [
                "title" => "Mẫu catalogue đẹp ấn tượng",
                "action" => $action,
                "image" => $base_url . "mau_catalogue_dep_an_tuong.jpg",
            ],
            [
                "title" => "In catalogue",
                "action" => $action,
                "image" => $base_url . "in_catalogue.jpg",
            ],
            [
                "title" => "Tầm quan trong của catalogue trong marketing",
                "action" => $action,
                "image" => $base_url . "tam_quan_trong_cua_catalogue_trong_marketing.jpg",
            ],
            [
                "title" => "Công ty in catalogue chuyên nghiệp",
                "action" => $action,
                "image" => $base_url . "cong_ty_in_catalogue_chuyen_nghiep.jpg",
            ],
            [
                "title" => "In catalogue giá rẻ",
                "action" => $action,
                "image" => $base_url . "in_catalogue_gia_re.jpg",
            ],
            [
                "title" => "In catalogue lấy ngay",
                "action" => $action,
                "image" => $base_url . "in_catalogue_lay_ngay.jpg",
            ],
            [
                "title" => "In catalogue ở đâu rẻ",
                "action" => $action,
                "image" => $base_url . "in_catalogue_o_dau_re.jpg",
            ],
            [
                "title" => "In catalogue số lượng ít",
                "action" => $action,
                "image" => $base_url . "in_catalogue_so_luong_it.jpg",
            ],
            [
                "title" => "In catalogue tại Hà Nội",
                "action" => $action,
                "image" => $base_url . "in_catalogue_tai_ha_noi.jpg",
            ],
            [
                "title" => "In nhanh catalogue",
                "action" => $action,
                "image" => $base_url . "in_nhanh_catalogue.jpg",
            ],            
        ];
        return View::make('frontends.quang_cao.catalogue', compact("products"));
    }

    public function getCatalogueBaoGia()
    {
        
        return View::make('frontends.quang_cao.catalogue_bao_gia');
    }
}
