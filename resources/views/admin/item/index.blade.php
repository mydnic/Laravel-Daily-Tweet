@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Manage Items
                    <a href="{{ route('admin.item.create') }}" class="pull-right btn btn-primary btn-xs">Add new Item</a>
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-bordered table-hover" id="TableData">
                        <thead>
                            <tr>
                                <th>Content</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>
                                        {{ $item->content }}
                                    </td>
                                    <td>
                                        {{ $item->created_at->format('d/m/Y') }}
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.item.edit', $item->id) }}" class="btn btn-info">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
