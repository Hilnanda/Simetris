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
                                <strong>Edit Category</strong>
                            </div>
                            <form action="/admin/update-category" method="post" class="form-horizontal">
                                {{ csrf_field() }}
                                <div class="card-body card-block">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="category_name" class=" form-control-label">Icon Feature</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="hidden" name="id" value="{{ $category->id }}"
                                                class="form-control">
                                            <input type="text" id="category_name" value="{{ $category->category_name }}" name="category_name"
                                                placeholder="Masukkan Category Name" class="form-control">
                                            <small class="form-text text-muted">Masukkan Category Name</small>
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
