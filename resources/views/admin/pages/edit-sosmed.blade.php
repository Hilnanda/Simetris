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
                                <strong>Edit Social Media</strong>
                            </div>
                            <form action="/admin/update-sosmed" method="post" class="form-horizontal">
                                {{ csrf_field() }}
                                <div class="card-body card-block">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="sosmed_username" class=" form-control-label">Username Social Media</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="hidden" name="id" value="{{ $sosmed->id }}"
                                                class="form-control">
                                            <input type="text" id="sosmed_username" value="{{ $sosmed->sosmed_username }}" name="sosmed_username"
                                                placeholder="Masukkan Username" class="form-control">
                                            <small class="form-text text-muted">Masukkan Username Social Media</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="sosmed_nama" class=" form-control-label">Nama Social Media</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="sosmed_nama" value="{{ $sosmed->sosmed_nama }}" name="sosmed_nama"
                                                placeholder="Masukkan Nama Social Media" class="form-control">
                                            <small class="form-text text-muted">Masukkan Nama Social Media</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="sosmed_url" class=" form-control-label">Url Social Media</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="sosmed_url" value="{{ $sosmed->sosmed_url }}" name="sosmed_url"
                                                placeholder="Masukkan Url Social Media" class="form-control">
                                            <small class="form-text text-muted">Masukkan Url Social Media</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="sosmed_icon" class=" form-control-label">Icon Social Media</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="sosmed_icon" value="{{ $sosmed->sosmed_icon }}" name="sosmed_icon"
                                                placeholder="Masukkan Category Name" class="form-control">
                                            <small class="form-text text-muted">Masukkan Icon Social Media</small>
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
