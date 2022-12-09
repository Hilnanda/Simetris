@extends('admin.layouts.app')
@section('title')
    Admin Simetris
@endsection
@section('content-admin')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Edit About Us</strong>
                            </div>
                            <form action="/admin/update-about_us" method="post" enctype="multipart/form-data"
                                class="form-horizontal">
                                {{ csrf_field() }}
                                <div class="card-body card-block">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="textarea-input" class=" form-control-label">Desc. About Us</label>
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <input type="hidden" name="id" value="{{ $about_us->id }}"
                                                class="form-control">
                                            <textarea id="editor1" name="about_us_desc" rows="10" cols="80">
                                                {{ $about_us->about_us_desc }}
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="file-input" class=" form-control-label">File input</label>
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <a href="{{ asset('image/about_us/' . $about_us->about_us_image . '') }}"><img
                                                    style="max-width: 250px"
                                                    src="{{ asset('image/about_us/' . $about_us->about_us_image . '') }}"></a>
                                            <input type="file" id="about_us_image" name="about_us_image"
                                                class="form-control-file">
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer" style="text-align: right">
                                    <input type="submit" class="btn btn-success btn-sm" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@push('bottom-script')
    
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
