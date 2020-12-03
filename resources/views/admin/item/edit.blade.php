@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form action="{{route('admin.item.update', $item->id)}}" method="post">
            @csrf
            @method('put')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit item</div>

                    <div class="panel-body">
                        <div class="form-group">
                            <textarea name="content" id="content" class="form-control">
                                {{ $item->content }}
                            </textarea>
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
                        <button type="submit" class="btn btn-primary">Submit</button>
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
                                    <input type="checkbox" name="category_id[]" value="{{ $category->id }}" @if ($item->categories->contains($category->id)) checked @endif>
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
