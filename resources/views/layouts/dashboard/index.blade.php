@extends('layouts.admin')
@section('title', 'Metatu App')

@section('header')

@endsection

@section('judul_page','Home')
@section('subjudul','Dashboard')

@section('content')
  <!-- PAGE CONTENT WRAPPER -->
  <div class="page-content-wrap">
                    
                    <!-- START WIDGETS -->                    
                    <div class="row">
                        <div class="col-md-3">
                            
                            <!-- START WIDGET SLIDER -->
                            <div class="widget widget-default widget-carousel">
                                <div class="owl-carousel" id="owl-example">
                                    <div>                                    
                                        <div class="widget-title">Total Penduduk</div>                                                                        
                                        <div class="widget-subtitle">Aktif Terdata</div>
                                        <!-- <div class="widget-int"></div> -->
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">Pelanggan</div>
                                        <div class="widget-subtitle">Hipam</div>
                                        <div class="widget-int">1,695</div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">Pelanggan</div>
                                        <div class="widget-subtitle">Bermasalah</div>
                                        <div class="widget-int">1,977</div>
                                    </div>
                                </div>                                                        
                            </div>         
                            <!-- END WIDGET SLIDER -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='pages-messages.html';">
                                <div class="widget-item-left">
                                    <span class="fa fa-envelope"></span>
                                </div>                             
                                <div class="widget-data">
                                    <div class="widget-int num-count">48</div>
                                    <div class="widget-title">New messages</div>
                                    <div class="widget-subtitle">In your mailbox</div>
                                </div>      
                            </div>                            
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='pages-address-book.html';">
                                <div class="widget-item-left">
                                    <span class="fa fa-user"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">375</div>
                                    <div class="widget-title">Registred users</div>
                                    <div class="widget-subtitle">On your website</div>
                                </div>
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET CLOCK -->
                            <div class="widget widget-info widget-padding-sm">
                                <div class="widget-big-int plugin-clock">00:00</div>                            
                                <div class="widget-subtitle plugin-date">Loading...</div>                           
                                                         
                            </div>                        
                            <!-- END WIDGET CLOCK -->
                            
                        </div>
                    </div>
                    <!-- END WIDGETS -->                    
                    

                    
  </div>
  <!-- END PAGE CONTENT WRAPPER -->
@endsection

@section('scriptjs')
        <!-- <script type="text/javascript" src="{{url('/assets/js/demo_dashboard.js')}}"></script> -->
        
        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='/assets/js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src="{{url('/assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
        <script type="text/javascript" src="{{url('/assets/js/plugins/scrolltotop/scrolltopcontrol.js')}}"></script>
        
        <script type="text/javascript" src="{{url('/assets/js/plugins/morris/raphael-min.js')}}"></script>
        <!-- <script type="text/javascript" src="{{url('/assets/js/plugins/morris/morris.min.js')}}"></script>        -->
        <script type="text/javascript" src="{{url('/assets/js/plugins/rickshaw/d3.v3.js')}}"></script>
        <script type="text/javascript" src="{{url('/assets/js/plugins/rickshaw/rickshaw.min.js')}}"></script>
        <script type='text/javascript' src='/assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='/assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='/assets/js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="{{url('/assets/js/plugins/owl/owl.carousel.min.js')}}"></script>                 
        
        <script type="text/javascript" src="{{url('/assets/js/plugins/moment.min.js')}}"></script>
        <script type="text/javascript" src="{{url('/assets/js/plugins/daterangepicker/daterangepicker.js')}}"></script>
        <!-- END THIS PAGE PLUGINS-->  
        
        

@endsection