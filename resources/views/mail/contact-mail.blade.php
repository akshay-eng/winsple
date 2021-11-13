{{-- @component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact <form action=""></form></title>
</head>
<body>
    <h1> Contact form</h1>
    <p>Name :{{$details['name']}}</p>
    <p>Email :{{$details['email']}}</p>
    <p>Message :{{$details['msg']}}</p>
    
</body>
</html>