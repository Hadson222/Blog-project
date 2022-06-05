<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Create Article</title>
</head>
<form action="{{ route('baiviet.store') }}" method="POST">
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
</html>