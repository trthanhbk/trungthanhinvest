<?php
class FrontendController extends BaseController
{
    protected $formDatHang;
    protected $formPhanHoi;

    public function __construct(FormDatHang $formDatHang, FormPhanHoi $formPhanHoi)
    {
        $this->formDatHang = $formDatHang;
        $this->formPhanHoi = $formPhanHoi;
    }
    
    public function getIndex()
    {
        
        return View::make('frontends.index');
    }
    
    public function getIntro()
    {
        
        return View::make('frontends.intro');
    }
    
    public function getKhuyenMai()
    {
        
        return View::make('frontends.khuyen_mai');
    }
    
    public function getQuyTrinhDatHang()
    {
        
        return View::make('frontends.quy_trinh_dat_hang');
    }
    
    public function getDatHangInAn()
    {
        
        return View::make('frontends.dat_hang_in_an');
    }

    public function postDatHangInAn()
    {
        $this->formDatHang->validate(Input::all());
        $body = "";
        $newLine = "<br>";
        $body .= "Họ tên: " . Input::get('name') . $newLine;
        $body .= "Cơ quan / công ty: " . Input::get('company') . $newLine;
        $body .= "Số điện thoại: " . Input::get('phone') . $newLine;
        $body .= "Địa chỉ: " . Input::get('address') . $newLine;
        $body .= "Ngày giao hàng: " . Input::get('delivery_date') . $newLine;
        $body .= "Số lượng: " . Input::get('amount') . $newLine;
        $body .= "Chất liệu / Loại giấy in ấn: " . Input::get('type') . $newLine;
        $body .= "Kích cỡ: " . Input::get('size') . (Input::get('size') == 'other' ? ' - ' . Input::get('other_size') . ' mm' : '') . $newLine;
        $body .= "Số màu in: mặt trước -> " . Input::get('front') . ', mặt sau -> ' . Input::get('back') . $newLine;
        $body .= "<strong>Dịch vụ bổ sung:</strong> " . $newLine;
        $body .= "Cán: Loại cán -> " . Input::get('loai_can') . ', Mặt cán -> ' . Input::get('mat_can') . $newLine;
        $body .= "Dập nổi: Kích thước -> " . Input::get('dap_noi_size') . $newLine;
        $body .= "Cắt: Kích thước -> " . Input::get('cat_size') . $newLine;
        $body .= "Dán: Kích thước -> " . Input::get('dan_size') . ', Màu -> ' . Input::get('dan_color') . $newLine;
        $body .= "Chú ý: " . Input::get('note') . $newLine;

        // dd($body);

        Mail::send('emails.template', ['body' => $body ], function ($message) {
            $message->to('trungthanhinan@gmail.com')->subject("Đặt hàng in ấn");
        });

        return Redirect::action('FrontendController@getDatHangInAn')->withMessage('Cám ơn bạn đã đặt hàng. Chúng tôi sẽ kiểm tra và phản hồi sớm.');
    }
    
    public function getPhanHoi()
    {
        
        return View::make('frontends.phan_hoi');
    }

    public function postPhanHoi()
    {
        $this->formPhanHoi->validate(Input::all());
        $body = "";
        $newLine = "<br>";
        $answer = Input::get('answer');
        $questions = getFeedbackQuestions();

        $body .= "Họ tên: " . Input::get('name') . $newLine;
        $body .= "Email: " . Input::get('email') . $newLine;
        $body .= "Số điện thoại: " . Input::get('phone') . $newLine;

        foreach ($answer as $index => $choice) {
            $body .= $questions[$index]['question'] . ": " . $choice . $newLine;           
        }

        $body .= "Ý kiến: " . Input::get('y_kien') . $newLine;

        Mail::send('emails.template', ['body' => $body ], function ($message) {
            $message->to('trungthanhinan@gmail.com')->subject("Phản hồi");
        });

        return Redirect::action('FrontendController@getPhanHoi')->withMessage('Cám ơn bạn đã phản hôi');
    }
    
    public function getLienHe()
    {
        
        return View::make('frontends.lien_he');
    }
}
