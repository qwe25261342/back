@extends('layouts/app')


@section('content')

<div class="container">
    @csrf
    <form method="POST" action="/name/news/store">
        <div class="form-group">
            <label for="IMG">IMG</label>
            <input type="text" class="form-control" id="IMG" name="IMG">

        </div>
        <div class="form-group">
            <label for="title">title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="content">content</label>
            <input type="text" class="form-control" id="content" name="content">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
