<h1>Список постов</h1>
<ul>
    <li>
        <a href="{{ route('posts.show', ['post'=>1]) }}">post 1</a> |
        <a href="{{ route('posts.edit', ['post'=>1]) }}">edit</a> |
        <form action="{{ route('posts.destroy', ['post'=>1]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button>
        </form>
    </li>
    <li>
        <a href="{{ route('posts.show', ['post'=>2]) }}">post 2</a> |
        <a href="{{ route('posts.edit', ['post'=>2]) }}">edit</a> |
        <form action="{{ route('posts.destroy', ['post'=>2]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button>
        </form>
    </li>
    <li>
        <a href="{{ route('posts.show', ['post'=>3]) }}">post 3</a> |
        <a href="{{ route('posts.edit', ['post'=>3]) }}">edit</a> |
        <form action="{{ route('posts.destroy', ['post'=>3]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button>
        </form>
    </li>
</ul>