@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        {!! Form::model($settings, ['route' => 'admin.setting.update', 'files' => true]) !!}
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Add new item</div>

                    <div class="panel-body">
                        <div class="form-group">
                            {!! Form::label('name', 'Application Name') !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('description', 'Application Description') !!}
                            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('logo', 'Your logo') !!}
                            {!! Form::file('logo', null, ['class' => 'form-control']) !!}
                            @if (!empty($settings->logo))
                                <img src="{{ $settings->logo }}" alt="Your Logo">
                            @endif
                        </div>
                        <div class="form-group">
                            {!! Form::label('twitter_account', 'Application Twitter Account') !!}
                            {!! Form::text('twitter_account', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('script_head', 'A script to load inside <head>') !!}
                            {!! Form::textarea('script_head', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('script_body', 'A script or code to display after the content') !!}
                            {!! Form::textarea('script_body', null, ['class' => 'form-control']) !!}
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
                        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection
