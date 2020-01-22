@extends('layouts.admin')
@section('title', 'User')

@section('header')

@endsection


@section('judul_page','Data')
@section('subjudul','User')

@section('content')
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">                           
    <div class="row">
        <div class="col-md-12">
    <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">        
                    <h3 class="panel-title">Manajemen Role</h3>
                    @if (session('status'))
                    <div class="alert alert-success">
                    {{ session('status') }}
                    </div>
                    @endif                              
                </div>
                <div class="panel-body">
                    <table class="table datatable" id="tableuser">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Hak Akses</th>
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
    $('#tableuser').DataTable({
        processing:true,
        serverside:true,
        ajax:"{{route('ajax.get.data.user')}}",
        columns:[
            {data:'name',name:'name'},
            {data:'email',name:'email'},
            {data:'role',name:'role'}
        ]
    });
</script>

@endsection
