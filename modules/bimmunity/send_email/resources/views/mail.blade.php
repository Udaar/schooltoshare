<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/metronic/assets/global/plugins/bootstrap/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        body{
            padding: 70px 0;
        }
        .navbar-brand{
            height: 50px;
            padding:0;
            width: 150px;
        }
        .navbar-brand img{
            margin: 4px 0;
            width: 100%;
        }
        .email-row{
            margin-bottom: 15px;
        }
        .email-label{
            font-size: 16px;
            margin-bottom: 0;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img src="/metronic/images/BIMMUNITY_LOGO.png" alt="logo" class="logo-default">
                </a>
            </div>            
        </div><!-- /.container-fluid -->
    </nav>
    <!-- /Navigation Bar -->

    <!-- Email Wrap -->
    <div class="container-fluid">
        
        <!-- First Row -->
        <div class="row email-row">

            <!-- From -->
            <div class="col-lg-6">
                <label class="email-label">From: </label>
                <span class="text-capitalize">{{ $data[0]}}</span>
            </div>
            <!-- /From -->

            <!-- Email -->
            <div class="col-lg-6">
                <label class="email-label">Email: </label>
                <span class="text-capitalize">{{ $data[1]}}</span>
            </div>
            <!-- /Email -->

        </div>
        <!-- /First Row -->

        <!-- Second Row -->
        <div class="row email-row">

            <!-- CC -->
            <div class="col-lg-12">
                <label class="email-label">CC: </label>
                @foreach($data[3] as $cc)
                    <span class="label label-default">{{$cc}}</span>
                @endforeach
            </div>
            <!-- /CC -->

        </div>
        <!-- /Second Row -->

        <!-- Third Row -->
        <div class="row email-row">
            <div class="col-lg-12">
                <label class="email-label">Subject: </label>
                <span class="text-capitalize">{{$data[4]}}</span>
            </div>
        </div>
        <!-- /Third Row -->

        <!-- Fourth Row -->
        <div class="row email-row">
            <div class="col-lg-12">
                <p class="lead">
                {{data[2]}}
                </p>
            </div>
        </div>
        <!-- /Fourth Row -->

    </div>
    <!-- /Email Wrap -->

    <script src="/metronic/assets/global/plugins/jquery.min.js"></script>
    <script src="/metronic/assets/global/plugins/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

{{--<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    </head>
    <body>
    <h1>This message form {!! ($data[0]) !!}:</h1>
      <h2>The email {!!($data[1]) !!}</h2>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                   With message  {!! ($data[2]) !!}
                </div>
            </div>
        </div>
    </body>
</html>--}}
