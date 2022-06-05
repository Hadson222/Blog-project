<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Article</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">

</div>
<div class="pull-right mb-2">

<a class="btn btn-success" href="{{ route('baiviet.create') }}"> Create Article</a>
</div>
</div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
<tr>
<th>Title</th>
<th>Content</th>
<th width="280px">Action</th>
</tr>

@foreach ($articles as $article)
<tr>
<td>{{ $article->title }}</td>
<td>{{ $article->content }}</td>
<td>
    <form action="{{ route('baiviet.destroy',$article->id) }}" method="POST">
        <a class="btn btn-primary" href="{{ route('baiviet.edit', $article->id ) }}">Edit</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</td>
</tr>
@endforeach

</body>
</html>