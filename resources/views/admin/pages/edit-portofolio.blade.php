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
                                <strong>Edit Portofolio</strong>
                            </div>
                            <form action="/admin/update-portofolio" method="post" enctype="multipart/form-data"
                                class="form-horizontal">
                                {{ csrf_field() }}
                                <div class="card-body card-block">

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Title Portofolio</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="hidden" name="id" value="{{ $portofolio->id }}"
                                                class="form-control">
                                            <input type="text" id="portofolio_title"
                                                value="{{ $portofolio->portofolio_title }}" name="portofolio_title"
                                                placeholder="Text" class="form-control">
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
                                                <option value="{{ $item->id }}" {{ $item->id == $portofolio->portofolio_category_id ? 'selected' : '' }}>{{ $item->category_portofolio_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="textarea-input" class=" form-control-label">Desc. Portofolio</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="portofolio_desc" id="portofolio_desc" rows="9" placeholder="Masukkan Desc. Portofolio..."
                                                class="form-control">{{ $portofolio->portofolio_desc }}</textarea>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="file-input" class=" form-control-label">File input</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <a href="{{ asset('image/portofolio/' . $portofolio->portofolio_image . '') }}"><img
                                                    style="max-width: 250px"
                                                    src="{{ asset('image/portofolio/' . $portofolio->portofolio_image . '') }}"></a>
                                            <input type="file" id="portofolio_image" name="portofolio_image"
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
