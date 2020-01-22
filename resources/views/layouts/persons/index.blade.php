@extends('layouts.dash')
@section('title', 'Penduduk')

@section('header')
<meta name="csrf-token" content="{{ csrf_token() }}" >

@endsection

@section('judul_page','Data')
@section('subjudul','Penduduk')

@section('content')

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">                             
    <div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">                        
                    <h3 class="panel-title">Data Penduduk Metatu</h3>
                    <div class="pull-right">
                        <a href="{{route('get.people.import')}}" class="btn btn-default"><i class="glyphicon glyphicon-import"></i>Import Data</a>
                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                            <ul class="dropdown-menu">
                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'json',escape:'false'});"><img src='/assets/img/icons/json.png' width="24"/> JSON</a></li>
                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});"><img src='/assets/img/icons/json.png' width="24"/> JSON (ignoreColumn)</a></li>
                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'json',escape:'true'});"><img src='/assets/img/icons/json.png' width="24"/> JSON (with Escape)</a></li>
                                <li class="divider"></li>
                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'xml',escape:'false'});"><img src='/assets/img/icons/xml.png' width="24"/> XML</a></li>
                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'sql'});"><img src='/assets/img/icons/sql.png' width="24"/> SQL</a></li>
                                <li class="divider"></li>
                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'csv',escape:'false'});"><img src='/assets/img/icons/csv.png' width="24"/> CSV</a></li>
                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'txt',escape:'false'});"><img src='/assets/img/icons/txt.png' width="24"/> TXT</a></li>
                                <li class="divider"></li>
                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='/assets/img/icons/xls.png' width="24"/> XLS</a></li>
                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'doc',escape:'false'});"><img src='/assets/img/icons/word.png' width="24"/> Word</a></li>
                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'powerpoint',escape:'false'});"><img src='/assets/img/icons/ppt.png' width="24"/> PowerPoint</a></li>
                                <li class="divider"></li>
                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'png',escape:'false'});"><img src='/assets/img/icons/png.png' width="24"/> PNG</a></li>
                                <li><a href="#" onClick ="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='/assets/img/icons/pdf.png' width="24"/> PDF</a></li>
                            </ul>
                        </div>  

                    </div>
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif                              
                </div>
                <div class="panel-body">
                    <table class="table datatable" id="tablependuduk">
                        <thead>
                        <tr>
                          <th>Nama Lengkap</th>
                          <th>No. Telp</th>
                          <th>Tempat Lahir</th>
                          <th>Tgl. Lahir</th>
                          <th>L/P</th>
                          <th>Alamat</th>
                          <th>RT</th>
                          <th>RW</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <!-- END DEFAULT DATATABLE --> 
        </div>
    </div>                                         
</div>
<!-- PAGE CONTENT WRAPPER -->  
@endsection

@section('scriptjs')
<!-- THIS PAGE PLUGINS -->
<script type="text/javascript" src="{{url('/assets/js/plugins/icheck/icheck.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>

<script type="text/javascript" src="{{url('/assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>


<!-- END PAGE PLUGINS -->
<script >
    $('#tablependuduk').DataTable({
        processing:true,
        serverside:true,
        ajax:"{{route('ajax.get.data.people')}}",
        columns:[
            {data:'nama_link',name:'nama_link'},
            {data:'tlp',name:'tlp'},
            {data:'tempat_lahir',name:'tempat_lahir'},
            {data:'tgl_lahir',name:'tgl_lahir'},
            {data:'jenis_kel',name:'jenis_kel'},
            {data:'alamat',name:'alamat'},
            {data:'rt',name:'rt'},
            {data:'rw',name:'rw'},
        ]
    });
</script>

@endsection