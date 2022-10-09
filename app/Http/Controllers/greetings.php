<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class greetings extends Controller
{
    public function comment($time)
    {
        switch ($time) {
            case 'morning':
                $title = "朝";
                $greeting = "おは";
                break;
            case 'afternoon':
                $title = "昼";
                $greeting = "こんにちは";
                break;
            case 'evening':
                $title = "夕方";
                $greeting = "こんばんは";
                break;
            case 'night':
                $title = "夜";
                $greeting = "おやすみ";
                break;
        }
        return view('message.greet', ['title' => $title, 'greeting' => $greeting]);
    }
    public function freecomment($freeword)
    {
        $freemessage = $freeword;
        return view('message.freemessage', ['freemessage' => $freemessage]);
    }
    public function randomcomment()
    {
        $array = ["おはよう", "こんにちは", "こんばんは", "おやすみ"];
        $array_number = array_rand($array);
        $randommessage=$array[$array_number];
        return view('message.randommessage', ['randommessage' => $randommessage]);
    }
}
