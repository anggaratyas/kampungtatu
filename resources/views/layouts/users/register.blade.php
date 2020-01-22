@extends('layouts.admin')
@section('title', 'User')

@section('header')

@endsection


@section('judul_page','Data User Aplikasi')
@section('subjudul','')

@section('content')

<div class="page-content-wrap">                             
<div class="row">
    <div class="col-md-12">
        <!-- START DEFAULT DATATABLE -->
        <div class="panel panel-default">
            <div class="panel-heading">                        
                <h3 class="panel-title">Tambah Data User Aplikasi</h3>

                </div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                <!-- <div class="row">
                  <form id="validate" role="form" class="form-horizontal" action="javascript:alert('Form #validate submited');">
                    <div class="form-group">
                      <div class="input-group"></div>
                      <label class="col-md-2 control-label"> <h5>Masukan Nomor KTP:</h5></label>
                      <div class="form-group">
                        <div class="col-md-6">
                          <div class="input-group input-group-lg">                                            
                            <span class="input-group-addon"></span>
                            <input type="text" class="form-control" placeholder="Large"/>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div> -->
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
               
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" method="POST" action="/people">
                            @csrf                      
                                <div class="panel panel-default tabs">                            
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="active"><a href="#tab-data-diri" role="tab" data-toggle="tab">Data Pribadi</a></li>
                                        <li><a href="#tab-alamat" role="tab" data-toggle="tab">Alamat</a></li>
                                        <li><a href="#tab-data-lain" role="tab" data-toggle="tab">Foto</a></li>
                                    </ul>
                                    <div class="panel-body tab-content">
                                        <div class="tab-pane active" id="tab-data-diri">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum dolor sem, quis pharetra dui ultricies vel. Cras non pulvinar tellus, vel bibendum magna. Morbi tellus nulla, cursus non nisi sed, porttitor dignissim erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc facilisis commodo lectus. Vivamus vel tincidunt enim, non vulputate ipsum. Ut pellentesque consectetur arcu sit amet scelerisque. Fusce commodo leo eros, ut eleifend massa congue at.</p>
                                            
                                            <div class="form-group">
                          <label>Nama Lengkap</label>
                            <input name="name" type="name" class="form-control" placeholder="Nama Lengkap" value="{{old('name')}}">                         
                        </div>

                        <div class="form-group">
                          <label>Jabatan</label>
                            <input name="jabatan" type="text" class="form-control" placeholder="Jabatan" value="{{old('jabatan')}}">                         
                        </div>

                        <div class="form-group">
                          <label>Email</label>
                          <input name="email" type="email" class="form-control" value="{{old('email')}}">                       
                        </div>
                        
                        <div class="form-group">
                              @foreach ($role as $row)
                          <label class="col-md-4 col-xs-12 control-label">Hak Akses</label>
                          <div class="col-md-6 col-xs-12"> 
                              <select name="role" class="form-control select" value="{{old( $row->name )}}">
                                  <option>{{ $row->name}}</option>
                              </select>
                          </div>
                              @endforeach
                        
                        </div>

                        <div class="form-group">
                          <label>Password</label>
                            <input name="password" type="password" class="form-control" value="{{old('password')}}">                         
                        </div>      

                                    <div class="panel-footer">                                                                        
                                        <button type="/penduduk/create" class="btn btn-primary pull-right">Simpan Penduduk <span class="fa fa-floppy-o fa-right"></span></button>
                                    </div>
                                </div>                                
                            
                            </form>
                            
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->   
</div>
</div>
</div>
</div>
</div>




<!-- MAIN CONTENT -->
@if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

   <!-- Main content -->
   <section class="content">
    <form method="post" action="/user">
    @csrf
      <div class="row">
        <div class="col-xs-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#datapribadi" data-toggle="tab">Data Pribadi</a></li>
            </ul>
            
            <div class="tab-content">
              <!-- Data User -->
              <div class="tab-pane active" id="datapribadi">
                <section id="datapribadi">
                  <div class="row">

                    <div class="col-md-6">
                    <!-- form start -->
                    <form class="form-horizontal">
                      <div class="box-body">
                        <div class="form-group">
                          <label>Nama Lengkap</label>
                            <input name="name" type="name" class="form-control" placeholder="Nama Lengkap" value="{{old('name')}}">                         
                        </div>

                        <div class="form-group">
                          <label>Jabatan</label>
                            <input name="jabatan" type="text" class="form-control" placeholder="Jabatan" value="{{old('jabatan')}}">                         
                        </div>

                        <div class="form-group">
                          <label>Email</label>
                          <input name="email" type="email" class="form-control" value="{{old('email')}}">                       
                        </div>
                        
                        <div class="form-group">
                              @foreach ($role as $row)
                          <label class="col-md-4 col-xs-12 control-label">Hak Akses</label>
                          <div class="col-md-6 col-xs-12"> 
                              <select name="role" class="form-control select" value="{{old( $row->name )}}">
                                  <option>{{ $row->name}}</option>
                              </select>
                          </div>
                              @endforeach
                        
                        </div>

                        <div class="form-group">
                          <label>Password</label>
                            <input name="password" type="password" class="form-control" value="{{old('password')}}">                         
                        </div>

                      </div>
                      <!-- /.box-body -->
                    </div>

                  </div>

                </section>
              </div>
              <!-- /Data User -->

            <button type="/user/create" class="btn btn-info">Simpan</button>
            <button type="/dashboard" class="btn btn-default">Kembali</button>
              <!-- /Alamat -->



            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </form>
    </section>
    <!-- /.content -->


<!-- END MAIN CONTENT -->      
  
@endsection

@section('scriptjs')

        <script type='text/javascript' src='/assets/js/plugins/validationengine/languages/jquery.validationEngine-en.js'></script>
        <script type='text/javascript' src='/assets/js/plugins/validationengine/jquery.validationEngine.js'></script>        

        <script type='text/javascript' src='/assets/js/plugins/jquery-validation/jquery.validate.js'></script>  

               
        <script type="text/javascript" src="{{url('/assets/js/plugins/dropzone/dropzone.min.js')}}"></script>
        <script type="text/javascript" src="{{url('/assets/js/plugins/fileinput/fileinput.min.js')}}"></script>        
        <script type="text/javascript" src="{{url('/assets/js/plugins/filetree/jqueryFileTree.js')}}"></script>

        <script type='text/javascript' src='/assets/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="{{url('/assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
        
        <script type="text/javascript" src="{{url('/assets/js/plugins/bootstrap/bootstrap-datepicker.js')}}"></script>                
        <script type="text/javascript" src="{{url('/assets/js/plugins/bootstrap/bootstrap-file-input.js')}}"></script>
        <script type="text/javascript" src="{{url('/assets/js/plugins/bootstrap/bootstrap-select.js')}}"></script>
        <script type="text/javascript" src="{{url('/assets/js/plugins/tagsinput/jquery.tagsinput.min.js')}}"></script>
@endsection