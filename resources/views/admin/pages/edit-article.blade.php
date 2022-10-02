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
                                <strong>Edit Article</strong>
                            </div>
                            <form action="/admin/update-article" method="post" enctype="multipart/form-data"
                                class="form-horizontal">
                                {{ csrf_field() }}
                                <div class="card-body card-block">

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Title Article</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="hidden" name="id" value="{{ $article->id }}"
                                                class="form-control">
                                            <input type="text" id="article_title"
                                                value="{{ $article->article_title }}" name="article_title"
                                                placeholder="Text" class="form-control">
                                            <small class="form-text text-muted">Masukkan Title Article</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Category</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="portofolio_category_id" id="portofolio_category_id" class="form-control">
                                                <option value="">Please select</option>
                                                @foreach ($category as $item)
                                                <option value="{{ $item->id }}" {{ $item->id == $article->article_category_id ? 'selected' : '' }}>{{ $item->category_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="textarea-input" class=" form-control-label">Desc. Article</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="article_desc" id="article_desc" rows="9" placeholder="Masukkan Desc. Article..."
                                                class="form-control">{{ $article->article_desc }}</textarea>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="file-input" class=" form-control-label">File input</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <a href="{{ asset('image/article/' . $article->article_image . '') }}"><img
                                                    style="max-width: 250px"
                                                    src="{{ asset('image/article/' . $article->article_image . '') }}"></a>
                                            <input type="file" id="article_image" name="article_image"
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
