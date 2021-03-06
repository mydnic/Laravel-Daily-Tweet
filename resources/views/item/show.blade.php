@extends('layouts.app')

@section('meta-title', $settings->name . ' | ' . strip_tags($item->content))
@section('meta-description', \Str::limit(strip_tags($item->content), 140))
@section('meta-url', route("item.show", $item->slug))

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
