<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <input type="text" name="title">
    <button type="submit">Send</button>
</form>

<form action="{{ route('posts.update', ['post'=>$id]) }} method="post">
    @csrf
    @method('PUT')
    <input type="text" name="title">
    <button type="submit">Update</button>
</form>