<form action="{{ route('posts.store') }}" method="post">
    
    {{ csrf_field() }}
    <input type="text" name="title">
    <button type="submit">Send</button>
</form>