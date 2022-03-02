<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client; 
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class HotpepperController extends Controller
{
    // HTTPリクエストを送るURL
    private const REQUEST_URL = 'http://webservice.recruit.co.jp/hotpepper/gourmet/v1/';

    public function index(Request $req)
    {
        // インスタンス生成
        $client = new Client();

        // HTTPリクエストメソッド
        $method = 'GET';

        // APIキー
        $api_key = "4d346281f808660b";

        // APIキーや検索ワードなどの設定を記述
        $options = [
            'query' => [
                'key' => "4d346281f808660b",
                'lat' => $req->input('lat'),
                'lng' => $req->input('lng'),
                'range' => $req->input('range'),
                'count' => 100,
                'format' => 'json',
            ],
        ];

        // HTTPリクエストを送信
        $response = $client->request($method, self::REQUEST_URL, $options);

        // jsonから連想配列に変換
        $restaurants = json_decode($response->getBody(), true)['results']; 
        
        $result_restaurants = $restaurants["shop"]; //ページネーション用 配列変換

        $data = $this->createPaginator($result_restaurants, $req->page, $req->per_page, $req->url());

        // index.blade.phpに検索結果を返す
        return view('index', compact('data'));
    }

    protected function createPaginator(array $data, ?int $current_page, ?int $per_page, String $url)
    {
        $current_page = $current_page ?: 1;
        $per_page = $per_page ?: 10; // 定数を定義するなど
        return new LengthAwarePaginator(
            collect($data)->forPage($current_page, $per_page),
            count($data),
            $per_page,
            $current_page,
            ['path' => $url]
        );
    }

    public function detailIndex(Request $req)
    {
        // インスタンス生成
        $client = new Client();

        // HTTPリクエストメソッド
        $method = 'GET';

        // APIキー
        $api_key = "4d346281f808660b";

        // APIキーや検索ワードなどの設定を記述
        $options = [
            'query' => [
                'key' => "4d346281f808660b",
                'id' => $req->input('id'),
                'format' => 'json',
            ],
        ];

        // HTTPリクエストを送信
        $response = $client->request($method, self::REQUEST_URL, $options);

        // jsonから連想配列に変換
        $details = json_decode($response->getBody(), true)['results']; 
        
        $shopdetail = $details["shop"];

        // index.blade.phpに検索結果を返す
        return view('detail', compact('shopdetail'));
    }
}
