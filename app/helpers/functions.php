<?php

function getFeedbackQuestions()
{
    $choice1 = ['Luôn luôn', 'Thường xuyên', 'Thỉng thoảng', 'Hiếm khi', 'Không'];
    $choice2 = ['Rất tốt', 'Tốt', 'Trung bình', 'Kém'];
    $choice3 = ['Có', 'Không'];

    $items = [
        [
            'question' => 'Nhân viên đáng tin cậy và hữu ích',
            'choices' => $choice1,
        ],
        [
            'question' => 'Nhân viên có kiến thức sản phẩm tốt và cho tôi lời khuyên tốt/ gợi ý tốt',
            'choices' => $choice1,
        ],
        [
            'question' => 'Nhân viên thiết kế lịch sự và đáp ứng chu đáo đối với nhu cầu của anh (chị)',
            'choices' => $choice1,
        ],
        [
            'question' => 'Nhân viên văn phòng và kế toán lịch sự và có trách nhiệm',
            'choices' => $choice1,
        ],
        [
            'question' => 'Giao hàng đúng hẹn',
            'choices' => $choice2,
        ],
        [
            'question' => 'Giao hàng đúng số lượng',
            'choices' => $choice2,
        ],
        [
            'question' => 'Giao hàng đúng chất lượng',
            'choices' => $choice2,
        ],
        [
            'question' => 'Chúng tôi đáp ứng và giải quyết  khiếu nại của anh (chị) một cách nhanh chóng',
            'choices' => $choice1,
        ],
        [
            'question' => 'Anh (chị) có hài lòng với dịch vụ của chúng tôi không?',
            'choices' => $choice3,
        ],
    ];
    return $items;
}

function getFeedbackQuestionsForm()
{
    $items = getFeedbackQuestions();
    $ques_str = '';
    foreach ($items as $index => $item) {
        $ques_str .= "<div>" . ($index + 1) . '. ' . $item['question'] . '</div>';
        foreach ($item['choices'] as $answear_index => $choice) {
            $ques_str .= "<div class='col-md-4'><input type='radio' name='answer[{$index}]' value='" . $choice . "' /> " . $choice . '</div>';
        }
        $ques_str .= "<div class='clear'></div>";
    }

    $last_question = 'Xin vui lòng đóng góp ý kiến của Anh(Chị) để dịch vụ và sản phẩm của chúng tôi được hoàn thiện hơn:';

    $ques_str .= "<div name='last_question' value='{$last_question}' style='margin-top: 20px'>" . $last_question . "</div>";
    $ques_str .= "<div><textarea name='y_kien' style='width: 100%; height: 100px; margin-bottom: 20px;'></textarea></div>";

    return $ques_str;
}