@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        {!! Form::model($item, ['route' => ['admin.item.update', $item->id], 'method' => 'put']) !!}
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit item</div>

                    <div class="panel-body">
                        <div class="form-group">
                            {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
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
                        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-list fa-fw"></i>
                        Categories
                    </div>
                    <div class="panel-body">
                        @foreach ($categories as $category)
                            <div class="checkbox">
                                <label>
                                    {!! Form::checkbox('category_id[]', $category->id, $item->categories->contains($category->id)) !!} {{ $category->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection
