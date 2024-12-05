<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>カレンダー</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
            text-align: center;
        }
        th,td{
            border: 1px solid #ccc;
            padding: 8px;
        }
        th{
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1>{{ $year }}年 {{ $month }} 月のカレンダー</h1>
    <table>
        <thead>
            <tr>
                <th>月</th>
                <th>火</th>
                <th>水</th>
                <th>木</th>
                <th>金</th>
                <th style="color: blue;">土</th>
                <th style="color: red;">日</th>
            </tr>
        </thead>
        <tbody>
            @foreach($calendar as $week)
                <tr>
                    @foreach($week as $day)
                        <td>{{ $day }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        <a href="{{ route('calendar.blade.php', ['year' => $year, 'month' => $month -1]) }}">前月</a>
        <a href="{{ route('calendar.blade.php', ['year' => $year, 'month' => $month +1]) }}">次次月</a>

    </div>
</body>
</html>