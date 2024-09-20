<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    {{-- <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head> --}}
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="Author" content="Yetoo Tech.">
        <meta name="renderer" content="webkit">
        <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
        <title>Sogboox</title>
        <!--JS-->
        {{-- <script src="js/i18n_en.js?v=1.3"></script>
        <script src="js/i18n_en.js?v=1.3"></script>
        <script src="/js/iexplore_patch.min.js?v=8.0"></script>
        <script src="/js/formdata.min.js?v=1.0"></script> --}}
        
        {{-- <script src="js/html5shiv.min.js?v=3.7.3"></script>
        <script src="js/respond.min.js?v=1.4.2"></script>
        <script src="js/i18n.js?v=1.2"></script>
      --}}
      
        {{-- <script src="js/lodash.min.js?v=4.17.11"></script>
        <script src="js/utf8.min.js?v=3.0.0"></script>
        <script src="js/cookies.min.js?v=1.2.3"></script>
        <script src="js/moment.min.js"></script>
        <script src="js/fullcalendar.min.js"></script>
        <script src="js/baseISSObject.min.js"></script>
        <script src="js/jsLoader.js?v=0.0.0.3"></script>   --}}
        {{-- <script src="https://cdn.jsdelivr.net/npm/echarts/dist/echarts.min.js"></script> --}}
        <!--Static-->
        <link rel="shortcut icon" href="/media/images/BioTime.ico" type="image/x-icon" sizes="16x16 24x24 32x32 64x64">
    
        <!--suppress JSUnresolvedVariable -->
      
        <link rel="stylesheet" type="text/css" href="css/base.css?v=20210409">
        <link rel="stylesheet" type="text/css" href="css/rtl.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/layui.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/layui.widgets.min.css">
        <link rel="stylesheet" type="text/css" href="css/model.css">
        <link rel="stylesheet" type="text/css" href="css/xadmin.main.min.css?v=1.1.1">
        <link rel="stylesheet" type="text/css" href="css/multi-switch.min.css?v=1.1.1">
        <link rel="stylesheet" type="text/css" href="css/noty.css?v=3.1.4">
        <link rel="stylesheet" type="text/css" href="css/spectrum.min.css?v=1.8.1">
        <link rel="stylesheet" type="text/css" href="css/extension.css?v=11.019">

        <!-- Use Awesome Style for zTree -->
        <link rel="stylesheet" type="text/css" href="css/awesome.css">
        <link rel="stylesheet" type="text/css" href="css/awesome.extended.min.css">
        <!-- Font-Awesome -->
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/layui.admin.css?v=20210315">
        <link rel="stylesheet" type="text/css" href="css/datepicker.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-clockpicker/bootstrap-clockpicker.min.css">
        <link rel="stylesheet" type="text/css" href="css/filters.css?v=1.1.1">
        <link rel="stylesheet" type="text/css" href="css/camera.css">
        
      <link id="layuicss-laydate" rel="stylesheet" href="css/laydate.css?v=5.3.0" media="all">
      <link id="layuicss-layer" rel="stylesheet" href="css/layer.css?v=3.5.0" media="all">
      <link id="layuicss-skincodecss" rel="stylesheet" href="css/code.css?v=2" media="all">
      <link rel="stylesheet" type="text/css" href="{{asset('css/uicons-regular-rounded.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('css/uicons-solid-straight.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div class="layui-layout layui-layout-admin"">
            <!-- Page Heading -->
            @include('layouts.navigation')
            <!-- Page Content -->
            <div id="dashboard" class="dashboard-main-body">
                @yield('content')
            </div>

        </div>
        {{-- Script --}}
        <script src="js/jquery-3.5.1.min.js?v=3.5.1"></script>
        <script src="js/jquery.form.js?v=4.2.2"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="{{asset('/js/layui.js')}}" type="text/javascript"></script>
        <script src="js/moment.min.js"></script>
        <script src="{{asset('/js/echarts.min.js')}}"></script>
        {{-- <script src="js/dashboard.js"></script> --}}
       
        <script src="js/app.js"></script>
        <script>
            
        </script>
    </body>
</html>
