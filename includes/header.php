<!DOCTYPE html>
<html lang="en">
<!-- arada ctrl+S ele kodlar duzelsin -->
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from https://bootdey.com  -->
    <!--  All snippets are MIT license https://bootdey.com/license -->
    <title>Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
        body {
            margin-top: 20px;
            background: #eee;
        }

        .box.box-aqua {
            border-top-color: #00c0ef !important;
        }

        .box.box-green {
            border-top-color: #00a65a !important;
        }

        .box.box-success {
            border-top-color: #3c8dbc;
        }

        .box {
            position: relative;
            border-radius: 3px;
            background: #ffffff;
            border-top: 3px solid #d2d6de;
            margin-bottom: 20px;
            width: 100%;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        }

        .box-header {
            color: #444;
            display: block;
            padding: 10px;
            position: relative;
        }

        .box-header>.ion {
            margin-right: 5px;
        }

        .box-header .box-title {
            display: inline-block;
            font-size: 18px;
            margin: 0;
            line-height: 1;
        }

        .box-header>.box-tools {
            position: absolute;
            right: 10px;
            top: 5px;
        }

        .inline {
            display: inline;
        }

        .box-body {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px;
            padding: 10px;
        }

        .todo-list {
            margin: 0;
            padding: 0;
            list-style: none;
            overflow: auto;
        }

        .todo-list>li {
            border-radius: 2px;
            padding: 10px;
            background: #f4f4f4;
            margin-bottom: 2px;
            border-left: 2px solid #e6e7e8;
            color: #444;
        }

        .todo-list>li .label {
            margin-left: 10px;
            font-size: 9px;
        }

        .todo-list>li .tools {
            display: none;
            float: right;
            color: #dd4b39;
        }

        .todo-list>li:hover .tools {
            display: block;
        }

        .no-border {
            border: 0 !important;
        }

        .box-footer {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px;
            border-top: 1px solid #f4f4f4;
            padding: 10px;
            background-color: #fff;
        }

        .btn-default {
            background-color: #f4f4f4;
            color: #444;
            border-color: #ddd;
        }

        .btn {
            border-radius: 5px;
            -webkit-box-shadow: none;
            box-shadow: none;
            border: 2px solid transparent;
            float: right;
        }
    </style>
</head>

<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="box box-aqua">
                    <div class="box-header ui-sortable-handle" style="cursor: move;">
                        <i class="ion ion-clipboard"></i>
                        <h3 class="box-title">Tapşırıq listi</h3>
                        <div class="box-tools pull-right">
                            <ul class="pagination pagination-sm inline">
                                <li> </li>

                            </ul>
                        </div>
                    </div>
                    <div class="box-body">