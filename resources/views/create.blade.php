<form action="{{ route('baiviet.store') }}" method="POST">
    @csrf
    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" />
    <div>
        <label for="content">Content:</label>
        <input type="text" id="content" name="content" />
    </div>

    </div>
        <button type="submit">Submit</button>
</form>