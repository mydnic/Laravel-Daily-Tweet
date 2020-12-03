@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form action="{{route('admin.setting.update')}}" enctype="multipart/form-data" method="post">
            @csrf

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Add new item</div>

                    <div class="panel-body">
                        <div class="form-group">
                            <label for="name">Application Name</label>
                            <input class="form-control" type="text" name="name" value="{{ $settings->name }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Application Description</label>
                            <textarea name="description" id="description" class="form-control">
                                {{ $settings->description }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="logo">Your logo</label>
                            <input type="file" name="logo" class="form-control">
                            @if (!empty($settings->logo))
                                <img src="{{ $settings->logo }}" alt="Your Logo">
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="twitter_account">Application Twitter Account</label>
                            <input class="form-control" type="text" name="twitter_account" value="{{ $settings->twitter_account }}">
                        </div>
                        <div class="form-group">
                            <label for="script_head">A script to load inside `head`</label>
                            <textarea name="script_head" id="script_head" class="form-control">{{ $settings->script_head }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="script_body">A script or code to display after the content</label>
                            <textarea name="script_body" id="script_body" class="form-control">{{ $settings->script_body }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Publish
                    </div>
                    <div class="panel-body">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
