@extends('admin.layouts.app')
@section('title')
    Admin Simetris
@endsection
@section('content-admin')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="overview-wrap">
                            <h2 class="title-1">Carousel</h2>
                            <button data-toggle="modal" data-target="#carouselModal" class="au-btn au-btn-icon au-btn--blue">
                                <i class="zmdi zmdi-plus"></i>add item</button>
                        </div>
                    </div>
                    @foreach ($carousel as $item)
                    <div class="col-md-6">
                        <div class="card">
                            <a class="card-img-top" href="{{ asset('image/carousel/' . $item->carousell_image . '') }}"><img
                                style="max-width: 100%"
                                src="{{ asset('image/carousel/' . $item->carousell_image . '') }}"></a>
                            <div class="card-body">
                                <h4 class="card-title mb-3">{{ $item->carousell_title }}</h4>
                                <p class="card-text">
                                    @if (strlen($item->carousell_desc) < 100)
                                        {!! $item->carousell_desc !!}
                                    @else
                                        {!! substr($item->carousell_desc, 0, 100) . '.....' !!}
                                    @endif
                                </p>
                                <hr>
                                <div style="text-align: right">
                                    <a class="btn btn-warning" href="/edit-carousel/{{$item->id}}">Edit</a>
                                    <a href="/delete-carousel/{{$item->id}}" class="btn btn-danger delete">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>


    <!-- carousel medium -->
    <div class="modal fade" id="carouselModal" tabindex="-1" role="dialog" aria-labelledby="carouselModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="carouselModalLabel">Add Data Carousell</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="admin/add-carousel" method="post" enctype="multipart/form-data" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Text Title</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="carousell_title" placeholder="Text"
                                    class="form-control">
                                <small class="form-text text-muted">Masukkan Title Carousell</small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="textarea-input" class=" form-control-label">Desc Carousell</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <textarea name="carousell_desc" id="carousell_desc" rows="9" placeholder="Masukkan Desc. Carousell..."
                                    class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="file-input" class=" form-control-label">File input</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="file" id="carousell_image" name="carousell_image" class="form-control-file">
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
