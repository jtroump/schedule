<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <h1>This is the number that we fetched: {{ config('constants.DAYS_NUM') }}</h1>
        <h1>This is the number that we fetched: {{ $scheduleInteger }}</h1>
        <h1>This is its binary version: {{ $scheduleBinary }}</h1>
        <h1>And now, lets translate the {{ $scheduleBinary }} to an integer: {{ $scheduleTranslatedInteger }}</h1>

    </body>
</html>
