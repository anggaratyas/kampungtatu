@extends('layouts.dashboard.dash')
@section('title', 'Tambah Penduduk')

@section('header')

@endsection

@section('judul_page','Penduduk')
@section('subjudul','Register Penduduk')

@section('content')
<div class="page-content-wrap">                             
<div class="row">
    <div class="col-md-12">
        <!-- START DEFAULT DATATABLE -->
        <div class="panel panel-default">
            <div class="panel-heading">                        
                <h3 class="panel-title">Tambah Data Penduduk Metatu</h3>

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
                                            
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 col-xs-12 control-label">Nama Lengkap</label>
                                                <div class="col-md-6 col-xs-12">                                                                                                                                                        
                                                    <input type="text" class="form-control" name="nama_lengkap" value="{{old('nama_lengkap')}}"/>                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4 col-xs-12 control-label">Nomor Identitas</label>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="text" class="form-control" name="nik" value="{{old('nik')}}"/>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4 col-xs-12 control-label">Nomor Kartu Keluarga</label>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="text" class="form-control" name="kk" value="{{old('kk')}}"/>
                                                </div>
                                            </div>
                                    

                                            <div class="form-group">
                                                <label class="col-md-4 col-xs-12 control-label">Nomor Telepon</label>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="text" class="form-control" name="tlp" value="{{old('tlp')}}"/>
                                                </div>
                                            </div>  
                                            
                                            
                                            <div class="form-group">
                                                <label class="col-md-4 col-xs-12 control-label">Tempat Lahir</label>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="text" class="form-control" name="tempat_lahir" value="{{old('tempat_lahir')}}"/>
                                                </div>
                                            </div>

                                            <div class="form-group">                                        
                                                <label class="col-md-4 control-label">Tanggal Lahir</label>
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input name="tgl_lahir" type="text" class="form-control datepicker" value="{{old('tgl_lahir')}}"/>                                            
                                                    </div>
                                                    <span class="help-block">Format : Tahun-Bulan-Tanggal</span>
                                                </div>
                                            </div>
                                            
                                          </div>

                                          <div class="col-md-6">
                                            
                                            <div class="form-group">
                                                <label class="col-md-4 col-xs-12 control-label">Jenis Kelamin</label>
                                                <div class="col-md-6 col-xs-12"> 
                                                    <select name="jenis_kel" class="form-control select" value="{{old('jenis_kel')}}">
                                                        <option>L</option>
                                                        <option>P</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-4 col-xs-12 control-label">Status</label>
                                                <div class="col-md-6 col-xs-12"> 
                                                    <select name="status" class="form-control select" value="{{old('status')}}">
                                                <option>Belum Kawin</option>
                                                <option>Kawin</option>
                                                <option>Cerai Hidup</option>
                                                <option>Cerai Mati</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-4 col-xs-12 control-label">Agama</label>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <select name="agama" class="form-control select" value="{{old('agama')}}">
                                                    <option>Islam</option>
                            <option>Kristen Protestan</option>
                            <option>Katolik</option>
                            <option>Hindu</option>
                            <option>Buddha</option>
                            <option>Kong Hu Cu</option>
                                                    </select>
                                                </div>
                                            </div>
                                                                               
                                            <div class="form-group">
                                                <label class="col-md-4 col-xs-12 control-label">Pendidikan</label>
                                                <div class="col-md-6 col-xs-12">    
                                                <select name="skul" class="form-control select" data-live-search="true" value="{{old('skul')}}">
                                                <option>Tidak Sekolah</option>
                            <option>Sekolah Rakyat</option>
                            <option>SD/MI/Sederajat</option>
                            <option>SMP/MTS/Sederajat</option>
                            <option>SLTA/SMA/SMU/SMK/Sederajat</option>
                            <option>Diploma 1</option>
                            <option>Diploma 2</option>
                            <option>Diploma 3</option>
                            <option>Diploma 4</option>
                            <option>Strata 1</option>
                            <option>Strata 2</option>
                            <option>Strata 3</option>
                                                </select> 
                                                </div>
                                            </div> 

                                          <div class="form-group">
                                                <label class="col-md-4 col-xs-12 control-label">Nama Ibu Kandung</label>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="text" class="form-control" name="ibu" value="{{old('ibu')}}" />
                                                </div>
                                            </div>
                                                                               
                                            <div class="form-group">
                                                <label class="col-md-4 col-xs-12 control-label">Nama Ayah Kandung</label>
                                                <div class="col-md-6 col-xs-12">                                            
                                                    <input type="text" class="form-control" name="ayah" value="{{old('ayah')}}" />
                                                </div>
                                            </div>                                        

                                            <div class="form-group">
                                                <label class="col-md-4 col-xs-12 control-label">Kewarganegaraan</label>
                                                <div class="col-md-6 col-xs-12">
                                                <select name="kwn" class="form-control select" value="{{old('kwn')}}" >
                                                <option>WNI</option>
                                                <option>WNA</option>
                                                    </select>
                                                </div>
                                            </div> 

                                          </div>
                                        </div>


                                        <div class="tab-pane" id="tab-alamat">
                                            <p>Donec tristique eu sem et aliquam. Proin sodales elementum urna et euismod. Quisque nisl nisl, venenatis eget dignissim et, adipiscing eu tellus. Sed nulla massa, luctus id orci sed, elementum consequat est. Proin dictum odio quis diam gravida facilisis. Sed pharetra dolor a tempor tristique. Sed semper sed urna ac dignissim. Aenean fermentum leo at posuere mattis. Etiam vitae quam in magna viverra dictum. Curabitur feugiat ligula in dui luctus, sed aliquet neque posuere.</p>
                                          
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-4 col-xs-12 control-label">Alamat Identitas</label>
                                                <div class="col-md-6 col-xs-12">                                                                                                                                                        
                                                    <input type="text" class="form-control" name="alamat" value="{{old('alamat')}}" />                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-4"></div>
                                                <div class="col-md-3 col-xs-3">                                            
                                                  <label>RT</label>
                                                  <input name="rt" type="text" class="form-control" value="{{old('rt')}}" />
                                                </div>
                                                <div class="col-md-3 col-xs-3">                                            
                                                    <label>RW</label>
                                                  <input name="rw" type="text" class="form-control" value="{{old('rw')}}"/>
                                                </div>
                                            </div>
                                      
                                            <div class="form-group">
                                              <label class="col-md-4 col-xs-12 control-label">Email</label>
                                              <div class="col-md-6 col-xs-12">                                            
                                                <input type="email" class="form-control" name="email" value="{{old('email')}}" />
                                              </div>
                                            </div>                                        
                                            
                                            
                                          </div>
                                          
                                          <div class="col-md-6">
                                            
                                           
                                            
                                            </div>

                                            
                                          
                                            
                                        </div> 
                                        
                                        <div class="tab-pane" id="tab-data-lain">
                                          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum facilis corrupti dolorem quis modi ab id possimus ipsam. Voluptatibus deserunt eum aspernatur pariatur in iure tempora veritatis voluptate saepe et.</p>
                                         
                                          <div class="col-md-6">
                                            <div class="panel panel-default">

                                              <div class="panel-body">
                                                <h3><span class="fa fa-download"></span> Mini dropzone</h3>                                    
                                                <p>Add form with class <code>dropzone dropzone-mini</code> to get mini dropzone box</p>
                                                <form action="#" class="dropzone dropzone-mini"></form>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-6"></div>
                                        </div>
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
  
@endsection

@section('scriptjs')

        <!-- THIS PAGE PLUGINS -->

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
        <!-- END THIS PAGE PLUGINS -->       
        <script>
            $(function(){
                $("#file-simple").fileinput({
                        showUpload: false,
                        showCaption: false,
                        browseClass: "btn btn-danger",
                        fileType: "any"
                });            
                $("#filetree").fileTree({
                    root: '/',
                    script: 'assets/filetree/jqueryFileTree.php',
                    expandSpeed: 100,
                    collapseSpeed: 100,
                    multiFolder: false                    
                }, function(file) {
                    alert(file);
                }, function(dir){
                    setTimeout(function(){
                        page_content_onresize();
                    },200);                    
                });                
            });            
        </script>

        <script type="text/javascript">
            var jvalidate = $("#jvalidate").validate({
                ignore: [],
                rules: {                                            
                        nama_lengkap: {
                                required: true,
                                minlength: 2,
                                maxlength: 30
                        },
                        password: {
                                required: true,
                                minlength: 5,
                                maxlength: 10
                        },
                        're-password': {
                                required: true,
                                minlength: 5,
                                maxlength: 10,
                                equalTo: "#password2"
                        },
                        age: {
                                required: true,
                                min: 18,
                                max: 100
                        },
                        email: {
                                required: true,
                                email: true
                        },
                        date: {
                                required: true,
                                date: true
                        },
                        credit: {
                                required: true,
                                creditcard: true
                        },
                        site: {
                                required: true,
                                url: true
                        }
                    }                                        
                });                                    

        </script>


@endsection