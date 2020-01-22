<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>@yield('title')</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="{{url('favicon.ico')}}" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="{{url('/assets/css/theme-default.css')}}"/>
        <!-- EOF CSS INCLUDE --> 
        
        
        @yield('header')
    </head>
    <body>
    <div id="mp">
    <app>
    
    </app>    
    </div>
        <!-- START PAGE CONTAINER -->
        <div class="page-container page-navigation-top-fixed">
            
            <!-- START PAGE SIDEBAR -->
            @include('layouts.dashboard.includes._sidebar')
            <!-- END PAGE SIDEBAR -->

            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                @include('layouts.dashboard.includes._navbar')
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">@yield('judul_page')</a></li>                    
                    <li class="active">@yield('subjudul')</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <div class="page-content-wrap">        
                @yield('content')
                </div>

                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Hei , Apakah kamu ingin keluar?</p>                    
                        <p>Tekan tidak jika ingin tetap bekerja. Tekan ya jika memang ingin keluar.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="" class="btn btn-success btn-lg">Yes
                           
                        </a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="{{url('/assets/audio/alert.mp3')}}" preload="auto"></audio>
        <audio id="audio-fail" src="{{url('/assets/audio/fail.mp3')}}" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
        <!-- START SCRIPTS -->
        
        <!-- START PLUGINS -->
        <script type="text/javascript" src="{{url('/assets/js/plugins/jquery/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{url('/assets/js/plugins/jquery/jquery-ui.min.js')}}"></script>
        <script type="text/javascript" src="{{url('/assets/js/plugins/bootstrap/bootstrap.min.js')}}"></script>        
        <!-- END PLUGINS -->

     

        <!-- START TEMPLATE -->
        
        <script type="text/javascript" src="{{url('/assets/js/plugins.js')}}"></script>        
        <script type="text/javascript" src="{{url('/assets/js/actions.js')}}"></script>
        
        <!-- END TEMPLATE -->


        @yield('scriptjs')
    <!-- END SCRIPTS -->         
    </body>
</html>
