@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add new item</div>

                <div class="panel-body">
                    {!! Form::open(['route' => 'admin.item.store']) !!}
                        <div class="form-group">
                            {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
