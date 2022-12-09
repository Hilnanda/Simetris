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
                            {{-- <h2 class="title-1">Contact Us</h2> --}}
                            @if (!$contact_us)
                                <button data-toggle="modal" data-target="#contactUsModal"
                                    class="au-btn au-btn-icon au-btn--blue">
                                    <i class="zmdi zmdi-plus"></i>add item</button>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <div class="card">
                            <div class="card-body">
                                @if (isset($contact_us))
                                    <!-- About -->
                                    <div class="content-lg container m-3">
                                        <div class="row margin-b-20">
                                            <div class="col-sm-6">
                                                <h2>Contact Us</h2>
                                            </div>
                                        </div>
                                        <!--// end row -->
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-7 sm-margin-b-50">
                                                <div class="margin-b-30">
                                                    <p>Created At : {{ $contact_us->created_at }}</p>
                                                    <p>Updated At : {{ $contact_us->updated_at }}</p>
                                                </div><br>
                                                <div class="margin-b-50">
                                                    <h4>{{ $contact_us->contact_us_title }}</h4>
                                                    <p>{{ $contact_us->contact_us_address }}</p>
                                                    <p><i class="fa fa-phone"></i> {{ $contact_us->contact_us_telp }}</p>
                                                    <p><i class="fa fa-envelope"></i> {{ $contact_us->contact_us_email }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-sm-offset-1">
                                                <a href="{{ asset('image/about_us/' . $about_us->about_us_image . '') }}"><img
                                                        style="max-width: 350px" class="img-responsive"
                                                        src="{{ asset('image/about_us/' . $about_us->about_us_image . '') }}"></a>
                                                {{-- <img class="img-responsive" src="img/640x380/01.jpg" alt="Our Office"> --}}

                                            </div>
                                            <div class="col-12 mt-5">
                                                <div class="mapouter">
                                                    <div class="gmap_canvas"><iframe style="width: 100%; height: 400px;" id="gmap_canvas"
                                                            src="https://maps.google.com/maps?q=simetris%20digital%20agency&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-5" style="text-align: right">
                                                <a class="btn btn-warning"
                                                    href="/edit-contact_us/{{ $contact_us->id }}">Edit</a>
                                                <a href="/delete-contact_us/{{ $contact_us->id }}"
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
    <div class="modal fade" id="contactUsModal" tabindex="-1" role="dialog" aria-labelledby="contactUsModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactUsModalLabel">Add Data Contact Us</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="admin/add-contact_us" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Masukkan Title</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="contact_us_title" placeholder="Masukkan Title"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Masukkan Alamat</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <textarea name="contact_us_address" class="form-control" cols="30" rows="10"></textarea>

                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Masukkan No Tlp</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="contact_us_telp" placeholder="Masukkan No Tlp"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Masukkan Email</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="email" name="contact_us_email" placeholder="Masukkan Email"
                                    class="form-control">
                            </div>
                        </div>
                        {{-- <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Masukkan Coordinate</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="contact_us_coordinate" placeholder="Masukkan Coordinate"
                                    class="form-control">
                            </div>
                        </div> --}}
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
