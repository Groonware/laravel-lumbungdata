@section('css')
<!-- DataTables -->
<link href="{{ asset('plugins/datatables/dataTables.bootstrap4.min.css') }} " rel="stylesheet" type="text/css" />
<link href="{{ asset('plugins/datatables/buttons.bootstrap4.min.css') }} " rel="stylesheet" type="text/css" />

<!-- Responsive datatable examples -->
<link href="{{ asset('plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('js')
<!-- Required datatable js -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Responsive examples -->
<script src="{{ asset('plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

<!-- Datatable init js -->
<script src="{{ asset('assets/pages/datatables.init.js') }}"></script>  
@stop

@extends('layouts.horizontal')

@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <h4 class="page-title">Tabel Dinamis - Kelola Master Tabel</h4>
        </div>
    </div>
    <!-- end row -->
</div>

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title">Edit Master Subjek</h4><br/>

                <form action="#" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="msubjek_id"></label>
                        <input type="text" id="msubjek_id" name="msubjek_id" value="msubjek_id" readOnly/>
                    </div>

                    <div class="form-group">
                        <label for="msubjek_nama_subjek"></label>
                        <input type="text" id="msubjek_nama_subjek" name="msubjek_nama_subjek"/>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection
