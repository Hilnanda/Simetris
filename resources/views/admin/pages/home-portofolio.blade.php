@push('top-style')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ url('../../admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
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
                            <h2 class="title-1">Portofolio</h2>
                            <button data-toggle="modal" data-target="#porofolioModal" class="au-btn au-btn-icon au-btn--blue">
                                <i class="zmdi zmdi-plus"></i>add item</button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <div class="card">
                            <div class="card-body">
                                <table id="portofolio" class="table table-bordered table-hover portofolio">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Portofolio Image</th>
                                            <th>Title Portofolio</th>
                                            <th>Description Portofolio</th>
                                            <th>Category Portofolio</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($portofolio as $item)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td><a href="{{ asset('image/portofolio/' . $item->portofolio_image . '') }}"><img
                                                            style="max-width: 250px"
                                                            src="{{ asset('image/portofolio/' . $item->portofolio_image . '') }}"></a>
                                                </td>
                                                <td>{{ $item->portofolio_title }}</td>
                                                @if (strlen($item->portofolio_desc) < 100)
                                                    <td>{!! $item->portofolio_desc !!}</td>
                                                @else
                                                    <td>{!! substr($item->portofolio_desc, 0, 100) . '.....' !!}</td>
                                                @endif
                                                <td>{{ $item->categoryPortofolio->category_portofolio_name }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>{{ $item->updated_at }}</td>
                                                <td>
                                                    <a class="btn btn-warning"
                                                        href="/edit-portofolio/{{ $item->id }}">Edit</a>
                                                    <a href="/delete-portofolio/{{ $item->id }}"
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



    <!-- Portofolio medium -->
    <div class="modal fade" id="porofolioModal" tabindex="-1" role="dialog" aria-labelledby="porofolioModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="porofolioModalLabel">Add Data Portofolio</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="admin/add-portofolio" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Text Title</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="portofolio_title" name="portofolio_title" placeholder="Text"
                                    class="form-control">
                                <small class="form-text text-muted">Masukkan Title Portofolio</small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Category</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="portofolio_category_id" id="portofolio_category_id" class="form-control">
                                    <option value="">Please select</option>
                                    @foreach ($category_portofolio as $item)
                                        <option value="{{ $item->id }}">{{ $item->category_portofolio_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="textarea-input" class=" form-control-label">Desc Portofolio</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <textarea name="portofolio_desc" id="portofolio_desc" rows="9" placeholder="Masukkan Desc. Portofolio..."
                                    class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="file-input" class=" form-control-label">File input</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="file" id="portofolio_image" name="portofolio_image" class="form-control-file">
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
            $('#portofolio').DataTable({
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
