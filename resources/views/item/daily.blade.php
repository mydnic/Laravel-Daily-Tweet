@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">
                <h1>{!! nl2br(e($item->content)) !!}</h1>
            </div>
        </div>
    </div>
    <div class="code text-center">
        {!! $settings->script_body !!}
    </div>
@endsection
