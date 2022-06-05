<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Article</title>  
</head>
<body>
    <div>
        <a class="btn btn-primary" href="{{ route('baiviet.index') }}"> Back </a>
    </div>
    <div>
        <form action="{{ route('baiviet.update') }}" method="Post">
            @csrf 
            <div>
                <label for='title'>Title:</label>
                <br>
                <input type='text' name="title"/>
                @error('title')
                <span class='invalid-feedback' role ='alert'>
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div>
                <label for='content'>Content:</label>
                <br>
                <textarea cols="25" rows="8" name='content'></textarea>
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>