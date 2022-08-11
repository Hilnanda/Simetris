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
                                <strong>Edit Carousel</strong>
                            </div>
                            <form action="/admin/update-carousel" method="post" enctype="multipart/form-data"
                                class="form-horizontal">
                                {{ csrf_field() }}
                                <div class="card-body card-block">

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Title Carousel</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="hidden" name="id" value="{{ $carousel->id }}"
                                                class="form-control">
                                            <input type="text" id="carousell_title"
                                                value="{{ $carousel->carousell_title }}" name="carousell_title"
                                                placeholder="Text" class="form-control">
                                            <small class="form-text text-muted">Masukkan Title Carousel</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="textarea-input" class=" form-control-label">Desc. Carousel</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="carousell_desc" id="carousell_desc" rows="9" placeholder="Masukkan Desc. Carousell..."
                                                class="form-control">{{ $carousel->carousell_desc }}</textarea>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="file-input" class=" form-control-label">File input</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <a href="{{ asset('image/carousel/' . $carousel->carousell_image . '') }}"><img
                                                    style="max-width: 250px"
                                                    src="{{ asset('image/carousel/' . $carousel->carousell_image . '') }}"></a>
                                            <input type="file" id="carousell_image" name="carousell_image"
                                                class="form-control-file">
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer" style="text-align: right">
                                    <input type="submit" class="btn btn-success btn-sm" value="Submit">
                                        </i> 
                                    
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
