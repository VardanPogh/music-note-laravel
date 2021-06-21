<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Clefs</title>


    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto|Varela+Round'>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/js/i18n/defaults-*.min.js"></script>

    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('sass/main.css')}}">
    <link rel="stylesheet" href="{{ url('sass/responsive.css')}}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script type="text/javascript" src="{{ url('js/index.js') }}"></script>


</head>
<style>
    .nonFlexDirection {
        flex-direction: unset !important;
    }

    .nonFlexDirection button {
        font-size: 22px !important;
    }

    .note4 {
        margin-bottom: 28px;
    }

    .custom-table td,.custom-table th{
        color: black !important;
    }

</style>
<body>
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2><b>Clefs</b> Manager</h2>
                </div>
                <div class="col-sm-6 d-inline-flex">

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>