<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class CalendarController extends Controller
{
    //カレンダーの挿入
    public function index($year = null, $month = null)
    {
    //年月を現在の日付で補完
    $year = $year ?? now()->year;
    $month = $month ?? now()->month;

    //カレンダー情報を生成
    $date = Carbon::createFromDate($year, $month,1);
    $daysInMonth = $date->daysInMonth;
    $firstDayOfWeek = $date->dayOfWeekIso; //ISO標準（１：月曜日、７：日曜日）

    //カレンダーを構築するためのデータ
    $calender = [];
    $week = [];
    for($i = 1; $i < $firstDayOfWeek; $i++){
        $week[] = null; //空の日付
    }

    for($day = 1; $day <=$daysInMonth; $day++){
        $week[] = $day;
        if(count($week) == 7){
            $calender[] = $week;
            $week = [];
        }
    }

    if(count($week) > 0){
        while(count($week) < 7){
            $week[] = null; //空の日付
        }
        $calender[] = $week;
    }
    return view('calendar.index', compact('calendar', 'year', 'month'));
    }
}
