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
                            <h2 class="title-1">Feature</h2>
                            <button data-toggle="modal" data-target="#featureModal" class="au-btn au-btn-icon au-btn--blue">
                                <i class="zmdi zmdi-plus"></i>add item</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                    <i class="fas fa-tachometer-alt"></i>
                                    <h4 class="text-sm-left mt-2 mb-1">Steven Lee</h4>
                                    <div class="location text-sm-left">
                                        Some quick example text to build on the card title and make up the bulk of the card's content.</div>
                                </div>
                                <hr>
                                <div style="text-align: right">
                                    <a class="btn btn-warning" href="">Edit</a>
                                    <a class="btn btn-danger" href="">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                    <i class="fas fa-tachometer-alt"></i>
                                    <h4 class="text-sm-left mt-2 mb-1">Steven Lee</h4>
                                    <div class="location text-sm-left">
                                        Some quick example text to build on the card title and make up the bulk of the card's content.</div>
                                </div>
                                <hr>
                                <div style="text-align: right">
                                    <a class="btn btn-warning" href="">Edit</a>
                                    <a class="btn btn-danger" href="">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                    <i class="fas fa-tachometer-alt"></i>
                                    <h4 class="text-sm-left mt-2 mb-1">Steven Lee</h4>
                                    <div class="location text-sm-left">
                                        Some quick example text to build on the card title and make up the bulk of the card's content.</div>
                                </div>
                                <hr>
                                <div style="text-align: right">
                                    <a class="btn btn-warning" href="/edit-feature">Edit</a>
                                    <a class="btn btn-danger" href="">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    <!-- feature medium -->
    <div class="modal fade" id="featureModal" tabindex="-1" role="dialog" aria-labelledby="featureModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="featureModalLabel">Add Data Feature</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="modal-body">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Text Title</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="text-input" placeholder="Text"
                                    class="form-control">
                                <small class="form-text text-muted">Masukkan Title Carousell</small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="textarea-input" class=" form-control-label">Textarea</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Masukkan Desc. Carousell..."
                                    class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="file-input" class=" form-control-label">File input</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="file" id="file-input" name="file-input" class="form-control-file">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
