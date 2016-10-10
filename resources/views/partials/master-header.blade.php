<!DOCTYPE html>
<html lang="en" ng-app="App">
<head>
    <title>WhatUsersDo</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>

    <!--[if IE]>
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/ie.main.css') }}" />
    <![endif]-->
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    @include('partials.main-nav')
    @include('partials.alert')
