<?php
/**
 * Created by PhpStorm.
 * User: hoa
 * Date: 14/02/2019
 * Time: 14:41
 */
?>
<html>
<head>
    <title>English-Vietnamese Dictionary</title>
    {{--<link rel="stylesheet" type="text/css" href="../../public/css/style.css" />--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
</head>
<body>

<div id="content">
    <h1>ENGLISH-->VIETNAMESE</h1>
    <form method="GET" action="{{route('result')}}">
        @csrf
        <div id="data">
            <label>Input word:</label>
            <input type="text" name="english"/><br/>
        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Translate"/>
        </div>
    </form>
</div>
</body>
</html>
