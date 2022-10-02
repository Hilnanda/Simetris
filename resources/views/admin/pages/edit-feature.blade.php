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
                                <strong>Edit Feature</strong>
                            </div>
                            <form action="/admin/update-feature" method="post" class="form-horizontal">
                                {{ csrf_field() }}
                                <div class="card-body card-block">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="feature_icon" class=" form-control-label">Icon Feature</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="hidden" name="id" value="{{ $feature->id }}"
                                                class="form-control">
                                            <input type="text" id="feature_icon" value="{{ $feature->feature_icon }}" name="feature_icon"
                                                placeholder="<i class='fas fa-tachometer-alt'></i>" class="form-control">
                                            <small class="form-text text-muted">Masukkan Icon Feature</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="feature_title" class=" form-control-label">Feature Title</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="feature_title" value="{{ $feature->feature_title }}" name="feature_title"
                                                placeholder="Masukkan Title Feature" class="form-control">
                                            <small class="form-text text-muted">Masukkan Title Feature</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="feature_desc" class=" form-control-label">Feature Desc.</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="feature_desc" id="feature_desc" rows="9" placeholder="Masukkan Desc. Feature..."
                                                class="form-control">{{ $feature->feature_desc }}</textarea>
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
