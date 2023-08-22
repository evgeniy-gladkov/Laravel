{{-- <form action="{{ route('posts.update', ['post'=>$id]) }} method="post">
    @csrf
    @method('PUT')
    <input type="text" name="title">
    <button type="submit">Update</button>
</form> --}}

<form action="{{ route('posts.update', ['slug'=>$id]) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="title">
    <button type="submit">Update</button>
</form>