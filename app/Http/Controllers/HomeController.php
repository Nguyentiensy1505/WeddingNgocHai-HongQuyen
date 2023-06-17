<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    private function getBaseData()
    {
        return [
            'slider_content' => [
                'ja_text_1' => '一生のなかで、心から大好きになれる人は、そう多くない。',
                'ja_text_2' => '「好き」って思える人と出会えたこと。それはもう奇跡です。',
            ],
            'slider_images' => [
                'images/weddings/sliders/Wedding_Slider_0.png',
                'images/weddings/sliders/Wedding_Slider_1.jpg',
            ],
            'music_link' => 'audio/music.mp3',
            'time_now' => Carbon::now()->format('Y-m-d H:i:s'),
            'wedding_events' => [
                [
                    'title' => 'Đón Khách',
                    'date_time' => '2023-06-25 15:30:00',
                    'date' => '2023/06/25',
                    'time' => '15:30',
                    'icon' => './images/icons/rings.png',
                    'is_active' => true,
                ],
                [
                    'title' => 'Chụp lưu niệm',
                    'date_time' => '2023-06-25 16:00:00',
                    'date' => '2023/06/25',
                    'time' => '16:00',
                    'icon' => './images/icons/wedding-arch.png',
                    'is_active' => true,
                ],
                [
                    'title' => 'Lễ Báo Hỷ và Thôi Nôi',
                    'date_time' => '2023-26-05 16:30:00',
                    'date' => '2023/26/05',
                    'time' => '16:30',
                    'icon' => './images/icons/wedding-couple.png',
                    'is_active' => false,
                ],
                [
                    'title' => 'Tiệc',
                    'date_time' => '2023-06-25 16:45:00',
                    'date' => '2023/06/25',
                    'time' => '16:45',
                    'icon' => './images/icons/wine.png',
                    'is_active' => false,
                ],
                [
                    'title' => 'Sập Sình',
                    'date_time' => '2023-06-25 16:45:00',
                    'date' => '2023/06/25',
                    'time' => '16:45',
                    'icon' => './images/icons/camera.png',
                    'is_active' => false,
                ]
            ],
            'countdown' => [
                'image_link' => 'images/weddings/counting-down-image.jpg',
                'place' => '41 Cổ Mân Lan 4, Hoà Xuân, Cẩm Lệ, Đà Nẵng',
            ],
            'memories' => [
                [
                    'image_link' => 'images/memories/1.jpg',
                    'hashtags' => ['lotte', 'weekend'],
                    'emoji' => '😄'
                ],
                [
                    'image_link' => 'images/memories/2.jpg',
                    'hashtags' => ['ER', 'yearendparty'],
                    'emoji' => '🤗'
                ],
                [
                    'image_link' => 'images/memories/3.jpg',
                    'hashtags' => ['vincom', 'weekend'],
                    'emoji' => '😆'
                ],
                [
                    'image_link' => 'images/memories/4.jpg',
                    'hashtags' => ['sushi', 'che^'],
                    'emoji' => '😗'
                ],
                [
                    'image_link' => 'images/memories/5.jpg',
                    'hashtags' => ['valentine'],
                    'emoji' => '😍'
                ],
                [
                    'image_link' => 'images/memories/6.jpg',
                    'hashtags' => ['lau', 'rainyday'],
                    'emoji' => '🌧️✌'
                ],
                [
                    'image_link' => 'images/memories/7.jpg',
                    'hashtags' => ['flying'],
                    'emoji' => '🛩'
                ],
                [
                    'image_link' => 'images/memories/8.jpg',
                    'hashtags' => ['followme'],
                    'emoji' => '😊'
                ],
                [
                    'image_link' => 'images/memories/9.jpg',
                    'hashtags' => ['hangmua'],
                    'emoji' => '👟'
                ],
                [
                    'image_link' => 'images/memories/10.jpg',
                    'hashtags' => ['hoalu'],
                    'emoji' => '⛰'
                ],
                [
                    'image_link' => 'images/memories/11.jpg',
                    'hashtags' => ['baidinh'],
                    'emoji' => '🗼'
                ],
                [
                    'image_link' => 'images/memories/12.jpg',
                    'hashtags' => ['tamcoc'],
                    'emoji' => '🛶'
                ],
                [
                    'image_link' => 'images/memories/13.jpg',
                    'hashtags' => ['nhatholon', 'hanoi'],
                    'emoji' => '🏰'
                ],
                [
                    'image_link' => 'images/memories/14.jpg',
                    'hashtags' => ['mirror'],
                    'emoji' => '😲'
                ],
                [
                    'image_link' => 'images/memories/15.jpg',
                    'hashtags' => ['helio', 'onesummerday'],
                    'emoji' => '😎'
                ],
                [
                    'image_link' => 'images/memories/16.jpg',
                    'hashtags' => ['eogio'],
                    'emoji' => '😚'
                ],
                [
                    'image_link' => 'images/memories/17.jpg',
                    'hashtags' => ['eogio', 'chaclazuidulam'],
                    'emoji' => '🤣'
                ],
                [
                    'image_link' => 'images/memories/18.jpg',
                    'hashtags' => ['mot', 'hoian'],
                    'emoji' => '🤤'
                ],
                [
                    'image_link' => 'images/memories/19.jpg',
                    'hashtags' => ['coffee'],
                    'emoji' => '😉'
                ],
                [
                    'image_link' => 'images/memories/20.jpg',
                    'hashtags' => ['cinema'],
                    'emoji' => '🎬'
                ],
                [
                    'image_link' => 'images/memories/21.jpg',
                    'hashtags' => ['nhao~'],
                    'emoji' => '🍻'
                ],
                [
                    'image_link' => 'images/memories/22.jpg',
                    'hashtags' => ['cungandinh', 'hue'],
                    'emoji' => '⛲'
                ],
                [
                    'image_link' => 'images/memories/23.jpg',
                    'hashtags' => ['chillcoffee', 'everyday'],
                    'emoji' => '😪☕'
                ],
                [
                    'image_link' => 'images/memories/24.jpg',
                    'hashtags' => ['savethemoment'],
                    'emoji' => '💍🍛'
                ],
                [
                    'image_link' => 'images/memories/25.jpg',
                    'hashtags' => ['sombodywedding'],
                    'emoji' => '🤢'
                ],
            ],
            'couple' => [
                'v_image_link' => 'images/weddings/single-v.jpg',
                'v_image_qr_code_link' => 'images/icons/v-qr-code.png',
                'v_cc_info' => 'Techcombank - 19036816252011',
                'u_image_link' => 'images/weddings/single-u.jpg',
                'u_image_qr_code_link' => 'images/icons/u-qr-code.png',
                'u_cc_info' => 'VietinBank - 109005626989',
            ],
            'thank_you' => [
                'image_link' => 'images/weddings/thankyou.jpg'
            ]
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        try {
            $data = $this->getBaseData();

            return view('home', compact('data'));
        } catch (\Exception $e) {
            abort(500);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $params = $request->only('name', 'content', 'type');

            if (empty($params['name']) && empty($params['content'])) {
                return;
            }

            $params['type'] = $params['type'] == 'v' ? 'Bạn Vĩnh' : 'Bạn Uyên';
            $fileName = 'data.csv';

            if (!file_exists(storage_path($fileName))) {
                $fp = fopen(storage_path($fileName), 'a');
                fputcsv($fp, ["Name","Content","Type"]);
            }

            $fp = fopen(storage_path($fileName), 'a');
            fputcsv($fp, [$params['name'], $params['content'], $params['type']]);
        } catch (\Exception $e) {
            abort(500);
        }
    }
}
