@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 text-center">
            <h1>{{ $item->content }}</h1>
        </div>
    </div>
</div>
@endsection
