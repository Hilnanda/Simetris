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
                            {{-- <h2 class="title-1">About Us</h2> --}}
                            @if (!$about_us)
                                <button data-toggle="modal" data-target="#aboutUsModal"
                                    class="au-btn au-btn-icon au-btn--blue">
                                    <i class="zmdi zmdi-plus"></i>add item</button>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <div class="card">
                            <div class="card-body">
                                @if (isset($about_us))
                                <!-- About -->
                                <div class="content-lg container m-3">
                                    <div class="row margin-b-20">
                                        <div class="col-sm-6">
                                            <h2>About Us</h2>
                                        </div>
                                    </div>
                                    <!--// end row -->
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-7 sm-margin-b-50">
                                            <div class="margin-b-30">
                                                <p>Created At : {{ $about_us->created_at }}</p>
                                                <p>Updated At : {{ $about_us->updated_at }}</p>
                                            </div><br>
                                            <div class="margin-b-30">
                                                {!! $about_us->about_us_desc !!}
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-sm-offset-1">
                                            <a href="{{ asset('image/about_us/' . $about_us->about_us_image . '') }}"><img
                                                    style="max-width: 350px" class="img-responsive"
                                                    src="{{ asset('image/about_us/' . $about_us->about_us_image . '') }}"></a>
                                            {{-- <img class="img-responsive" src="img/640x380/01.jpg" alt="Our Office"> --}}

                                        </div>
                                        <div class="col-12 mt-5" style="text-align: right">
                                            <a class="btn btn-warning" href="/edit-about_us/{{ $about_us->id }}">Edit</a>
                                            <a href="/delete-about_us/{{ $about_us->id }}"
                                                class="btn btn-danger delete">Delete</a>
                                        </div>
                                    </div>
                                    <!--// end row -->
                                </div>
                                <!-- End About -->
                                @else
                                <div class="col-md-12" style="text-align: center">
                                    <h2>Tidak ada Data!</h2>
                                </div>
                                @endif
                            </div>
                        </div>

                        <!-- END DATA TABLE -->
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- About Us medium -->
    <div class="modal fade" id="aboutUsModal" tabindex="-1" role="dialog" aria-labelledby="aboutUsModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="aboutUsModalLabel">Add Data About Us</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="admin/add-about_us" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="row form-group">
                            <div class="col">
                                <label for="textarea-input" class=" form-control-label">Desc About Us</label>
                            </div><br>
                            <div class="col-12 col-md-12">
                                <textarea id="editor1" name="about_us_desc" rows="10" cols="80">
                                </textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="file-input" class=" form-control-label">File input</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="file" id="about_us_image" name="about_us_image" class="form-control-file">
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
            $('#about_us').DataTable({
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
    <script src="{{ url('admin/ckeditor/ckeditor.js') }}"></script>
    <script>
        $(function() {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
        $(function() {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor2')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
        $(function() {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor3')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
        $(function() {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor4')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
    </script>
@endpush
