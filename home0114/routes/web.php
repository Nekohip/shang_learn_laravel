<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    $name = "shang";
    //dump顯示並繼續
    dump($name);
    $mobile = "0911";
    $text = "$name - $mobile";
    //dd顯示並停止，之後沒辦法輸出
    dd($text);
    return view('welcome');
});

//{id}變數
Route::get('/user/{id}', function (string $id)
{
    dd($id);
    return 'User '.$id;
});

Route::get('sum/{num}', function (string $num)
{
    // dump($num);
    $sum = 0;
    for($i = $num; $i > 0; $i--)
    {
        $sum += $i;
    }

    $data = 
    [
        'num' => $num,
        'sum' => $sum
    ];
    // dd("1+2+....+$num = " . $sum);
    // return view('sum') -> with("result1",$sum);
    return view('sum') -> with("result2",$data);
});

Route::get('calculator/{num1}/{num2}', function (string $num1, string $num2)
{
    $data = 
    [
        'num1' => $num1,
        'num2' => $num2,
        'plus' => $num1 + $num2,
        'minus' => $num1 - $num2,
        'multiply' => $num1 * $num2,
        'divide' => $num1 / $num2
    ];

    return view('calculator') -> with("data",$data);
});

// Route::get('/home0114', function () {
//     return view('home0114');
// });
