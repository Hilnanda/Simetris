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
                                <strong>Edit Team</strong>
                            </div>
                            <form action="/admin/update-team" method="post" enctype="multipart/form-data"
                                class="form-horizontal">
                                {{ csrf_field() }}
                                <div class="card-body card-block">

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Name Team</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="hidden" name="id" value="{{ $team->id }}"
                                                class="form-control">
                                            <input type="text" id="team_name"
                                                value="{{ $team->team_name }}" name="team_name"
                                                placeholder="Text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Posisi Team</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="team_posisi"
                                                value="{{ $team->team_posisi }}" name="team_posisi"
                                                placeholder="Text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="textarea-input" class=" form-control-label">Desc. Team</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="team_desc" id="team_desc" rows="9" placeholder="Masukkan Desc. team..."
                                                class="form-control">{{ $team->team_desc }}</textarea>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="file-input" class=" form-control-label">File input</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <a href="{{ asset('image/team/' . $team->team_image . '') }}"><img
                                                    style="max-width: 250px"
                                                    src="{{ asset('image/team/' . $team->team_image . '') }}"></a>
                                            <input type="file" id="team_image" name="team_image"
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
