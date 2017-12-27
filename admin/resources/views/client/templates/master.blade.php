<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FRIDAYデジタル</title>
    <link rel="stylesheet" href="{{ asset('client/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/vendor/fa/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/mycss.css') }}">
    <link rel="shortcut icon" href="{{ asset('client/images/faviconf.ico') }}" type="image/x-icon">
</head>

<body>
    <div id="page">
        <div id="wrapper" class="container">
            {{--  ###### Layout #######  --}}
             @include("client.templates.header") 
            {{--  ###### Layout #######  --}}
            <div class="content container">
                <div class="row">
                    <div role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs mtab" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#home" aria-controls="home" role="tab" data-toggle="tab">新着</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">芸能</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">事件</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">スポーツ</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">コラム</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">グラビア</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">オススメ</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="row">
                                    <div class="news col-xs-9">
                                        
                                    </div>
                                    <div class="sidebar col-xs-3">
    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-9">
                        {{--  ###### Layout #######  --}}
                        @yield('content')
                        {{--  ###### Layout #######  --}}
                    </div>

                    <!-- navbav -->
                    <div class="col-md-3">
                        {{--  ###### Layout #######  --}}
                        @include("client.templates.nav-bar") 
                        {{--  ###### Layout #######  --}}
                    </div>
                    <!-- /navbav -->
                </div>
            </div>
            {{--  ###### Layout #######  --}}
            @include("client.templates.footer") 
            {{--  ###### Layout #######  --}}
        </div>
    </div>
    <script src="{{ asset('client/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('client/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('client/js/myjs.js') }}"></script>
</body>

</html>