<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <input type="text" name="title">
    <button type="submit">Send</button>
</form>