@extends('layouts.backend.backend_master')
@section('title', 'Registering||Category')
@push('css')
    <!-- DataTables -->
    <link href="{{ asset('assets/backend/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .fa-trash{
            color: red;
        }
        .fa{
            font-size: 18px;
        }
    </style>
@endpush
@section('content')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-title-box">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">Uplon</a></li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="m-t-0 header-title">Registering for Who Category</h4>
                        <a href="{{ route('admin.regforwho.create') }}">
                            <button class="btn btn-info mb-2">Create New <i class="fa fa-plus"></i></button>
                        </a>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Serial</th>
                                <th>Name</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $key=>$data)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $data->regforwho }}</td>
                                        <td>{{ $data->created_at }}</td>
                                        <td>{{ $data->updated_at }}</td>
                                        <td class="d-flex justify-content-center">
                                            <a href="{{ route('admin.regforwho.edit', $data->id) }}"><i class="fa fa-edit"></i></a>
                                            <a href="{{ route('admin.regforwho.show', $data->id) }}" class="px-2"><i class="fa fa-eye"></i></a>
                                            <a type="button"
                                            onclick="deletePost({{ $data->id }})">
                                            <i class="fa fa-trash"></i>
                                            </a>
                                            <form id="delete-form-{{ $data->id }}"
                                                action="{{ route('admin.regforwho.destroy', $data->id) }}" method="POST"
                                                style="display: none">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- container -->
    </div> <!-- content -->
</div>
@endsection

@push('js')
<!-- Required datatable js -->
<script src="{{ asset('assets/backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script> 
<!-- Sweet Aleart -->
<script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>

<script>
    $(document).ready(function() {
        // Default Datatable
        $('#datatable').DataTable();
        table.buttons().container()
                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');      
    } );

    //Toastr Delete Function 
    function deletePost(id) {
                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    confirmButtonClass: 'btn btn-success',
                    cancelButtonClass: 'btn btn-danger',
                    buttonsStyling: false,
                    reverseButtons: true
                }).then((result) => {
                    if (result.value) {
                        event.preventDefault();
                        document.getElementById('delete-form-'+id).submit();
                    } else if (
                        // Read more about handling dismissals
                        result.dismiss === swal.DismissReason.cancel
                    ) {
                        swal(
                            'Cancelled',
                            'Your data is safe :)',
                            'error'
                        )
                    }
                })
            }

</script>
     
 @endpush
     
 