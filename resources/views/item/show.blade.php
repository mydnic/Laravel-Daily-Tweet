@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    The Daily Selection :
                </div>

                <div class="panel-body">
                    {{ $item->content }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
