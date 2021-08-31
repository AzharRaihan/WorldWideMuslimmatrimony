@extends('layouts.backend.backend_master')
@section('title', 'Citizenship||Category')
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
                        <h4 class="m-t-0 header-title">Citizenship Category</h4>
                        <a href="{{ route('citizenship.create') }}">
                            <button class="btn btn-info mb-2">Create New <i class="fa fa-plus"></i></button>
                        </a>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Serial</th>
                                <th>Looking</th>
                                <th>Education</th>
                                <th>Parents Info</th>
                                <th>Siblings Info</th>
                                <th>Home District</th>
                                <th>P.Country</th>
                                <th>Name</th>
                                <th>For Who</th>
                                <th>Permission</th>
                                <th>B.F.Name</th>
                                <th>B.L.Name</th>
                                <th>S.Address</th>
                                <th>Address2</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Z.Code</th>
                                <th>Number</th>
                                <th>Birthday</th>
                                <th>Heights</th>
                                <th>Citizen</th>
                                <th>M.status</th>
                                <th>Hobbies</th>
                                <th>Partner </th>
                                <th>Email </th>
                                <th>Image</th>
                                <th>Member</th>
                                <th>T.Condition</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $key=>$data)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $data->lookingfor }}</td>
                                        <td>{{ $data->education }}</td>
                                        <td>{{ $data->parents_info }}</td>
                                        <td>{{ $data->siblings_info }}</td>
                                        <td>{{ $data->home_district }}</td>
                                        <td>{{ $data->preferencecountry }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->regforwho }}</td>
                                        <td>{{ $data->bg_name }}</td>
                                        <td>{{ $data->bg_lastname }}</td>
                                        <td>{{ $data->street_address }}</td>
                                        <td>{{ $data->addressline2 }}</td>
                                        <td>{{ $data->city }}</td>
                                        <td>{{ $data->citizenship }}</td>
                                        <td>{{ $data->state }}</td>
                                        <td>{{ $data->zip_code }}</td>
                                        <td>{{ $data->phonenumber }}</td>
                                        <td>{{ $data->dateofbirth }}</td>
                                        <td>{{ $data->heights }}</td>
                                        <td>{{ $data->maritalstatus }}</td>
                                        <td>{{ $data->interesthobbies }}</td>
                                        <td>{{ $data->typepartner }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td></td>
                                        <td>{{ $data->membership }}</td>
                                        <td>{{ $data->termscondition }}</td>
                                        <td class="d-flex justify-content-center">
                                            <a href="{{ route('registration.show', $data->id) }}" class="px-2"><i class="fa fa-eye"></i></a>
                                            <a type="button" 
                                            onclick="deletePost({{ $data->id }})">
                                            <i class="fa fa-trash"></i>
                                            </a>
                                            <form id="delete-form-{{ $data->id }}"
                                                action="{{ route('registration.destroy', $data->id) }}" method="POST"
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
    
