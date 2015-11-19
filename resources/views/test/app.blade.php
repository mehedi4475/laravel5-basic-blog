<!doctype html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Gallery</title>    

    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">

    <! -- WE ASSUME YOU ARE USING A main.css FOR CSS CUSTOMIZATION -->
    <!-- link rel="stylesheet" href="./css/main.css"> -->
    <! -- DOWNLOAD LAST VERSION IN http://modernizr.com/ -->
    <!-- script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script> -->
</head>

<body>
    
    
    <div class="container">
       
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="header-area">
                   <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <div class="logo">
                            <img src="http://placehold.it/120x50" alt="">
                        </div>
                   </div>                    
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                        <div class="menu">
                            <ul>
                                <li><a href="{{URL::to('/dashboard')}}">Home</a></li>
                                <li><a href="#">Download</a></li>
                                <li><a href="#">My Story</a></li>
                                <li><a href="#">Resume</a></li>
                                <li><a href="#">Contact</a></li> 
                                <li><a href="{{URL::to('/logout')}}">Logout</a></li> 
                                                          
                            </ul>
                        </div>
                   </div>
              </div> 
            </div>
        </div>
        
          
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="section">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    @if(Session::get('message'))
                        <div class="alert {{Session::get('alert')}}">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                        </button>
                            {!! Session::get('message') !!}
                        </div>
                    @endif 
                    
                     @if($errors->any())
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                        </button>
                            @foreach($errors->all() as $error)
                            {{$error}}<br/>
                            @endforeach
                        </div>
                    @endif 
                    
                    
                </div>
              </div> 
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="section">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    @yield('body')
                </div>
              </div> 
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="section">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <p><hr></p>
                   <p>All right reserved and &copy; 2015</p>
                </div>
              </div> 
            </div>
        </div>
        
    </div>

    
    
    

    <!--[if IE]>
        <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Start coding here -->


    <!-- Coding End -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>
