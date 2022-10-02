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
                    @foreach ($feature as $item)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                    {!! $item->feature_icon !!}
                                    <h4 class="text-sm-left mt-2 mb-1">{{ $item->feature_title }}</h4>
                                    <div class="location text-sm-left">
                                        @if (strlen($item->feature_desc) < 100)
                                        {!! $item->feature_desc !!}
                                        @else
                                            {!! substr($item->feature_desc, 0, 100) . '.....' !!}
                                        @endif
                                    </div>
                                </div>
                                <hr>
                                <div style="text-align: right">
                                    <a class="btn btn-warning" href="/edit-feature/{{$item->id}}">Edit</a>
                                    <a href="/delete-feature/{{$item->id}}" class="btn btn-danger delete">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
                <form action="admin/add-feature" method="post" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="feature_icon" class=" form-control-label">Icon Feature</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="feature_icon" name="feature_icon" placeholder="<i class='fas fa-tachometer-alt'></i>"
                                    class="form-control">
                                <small class="form-text text-muted">Masukkan Icon Feature</small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="feature_title" class=" form-control-label">Feature Title</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="feature_title" name="feature_title" placeholder="Masukkan Title Feature"
                                    class="form-control">
                                <small class="form-text text-muted">Masukkan Title Feature</small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="feature_desc" class=" form-control-label">Feature Desc.</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <textarea name="feature_desc" id="feature_desc" rows="9" placeholder="Masukkan Desc. Feature..."
                                    class="form-control"></textarea>
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
