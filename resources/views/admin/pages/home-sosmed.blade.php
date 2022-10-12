@push('top-style')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ url('../../admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endpush
@extends('admin.layouts.app')
@section('title')
    Admin Simetris
@endsection
@section('content-admin')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="overview-wrap">
                            <h2 class="title-1">Social Media</h2>
                            <button data-toggle="modal" data-target="#sosmedModal" class="au-btn au-btn-icon au-btn--blue">
                                <i class="zmdi zmdi-plus"></i>add item</button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <div class="card">
                            <div class="card-body">
                                <table id="category" class="table table-bordered table-hover category">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Username</th>
                                            <th>Sosmed Name</th>
                                            <th>Sosmed Url</th>
                                            <th>Sosmed Icon</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sosmed as $item)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $item->sosmed_username }}</td>
                                                <td>{{ $item->sosmed_nama }}</td>
                                                <td>{{ $item->sosmed_url }}</td>
                                                <td style="text-align: center"><i class="fa {{ $item->sosmed_icon }}"></i></td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>{{ $item->updated_at }}</td>
                                                <td>
                                                    <a class="btn btn-warning"
                                                        href="/edit-sosmed/{{ $item->id }}">Edit</a>
                                                    <a href="/delete-sosmed/{{ $item->id }}"
                                                        class="btn btn-danger delete">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>

                                </table>
                            </div>
                        </div>

                        <!-- END DATA TABLE -->
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Category medium -->
    <div class="modal fade" id="sosmedModal" tabindex="-1" role="dialog" aria-labelledby="sosmedModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="sosmedModalLabel">Add Data Social Media</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="admin/add-sosmed" method="post">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Username Social Media</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="sosmed_username" placeholder="Text"
                                    class="form-control">
                                <small class="form-text text-muted">Masukkan Username Social Media</small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Nama Social Media</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="sosmed_nama" placeholder="Text"
                                    class="form-control">
                                <small class="form-text text-muted">Masukkan Nama Social Media</small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Url Social Media</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="sosmed_url" placeholder="Text"
                                    class="form-control">
                                <small class="form-text text-muted">Masukkan Url Social Media</small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Icon Social Media</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="sosmed_icon" placeholder="Text"
                                    class="form-control">
                                <small class="form-text text-muted">Masukkan Icon Social Media</small>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <input type="submit" class="btn btn-primary" value="Confirm">
                    </div>
                </form>
            </div>
        </div>
    </div>

    
@endsection
@push('bottom-script')
    <!-- DataTables -->
    <script src="{{ url('admin/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ url('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    
    <script>
        $(function() {
            $('#category').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': true,
                'ordering': true,
                'info': true,
                'autoWidth': false,
                'scrollX': true
            })
        })
    </script>
@endpush
