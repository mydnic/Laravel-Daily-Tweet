@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
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
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-list fa-fw"></i>
                    Categories
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        @foreach ($categories as $category)
                            <li class="list-group-item">
                                {{ $category->name }} ({{ $category->items()->count() }})
                                <span class="pull-right text-muted">
                                    <a href="{{ route('admin.category.delete', $category->id) }}" class="confirm-delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </span>
                            </li>
                        @endforeach
                    </ul>
                    {!! Form::open(['route' => 'admin.category.store']) !!}
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </span>
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Add new category']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
