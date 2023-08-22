<h1>Список постов</h1>
<ul>
    <li>
        <a href="{{ route('posts.show', ['slug'=>1]) }}">post 1</a> |
        <a href="{{ route('posts.edit', ['slug'=>1]) }}">edit</a> |
        <form action="{{ route('posts.destroy', ['slug'=>1]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button>
        </form>
    </li>
    <li>
        <a href="{{ route('posts.show', ['slug'=>2]) }}">post 2</a> |
        <a href="{{ route('posts.edit', ['slug'=>2]) }}">edit</a> |
        <form action="{{ route('posts.destroy', ['slug'=>2]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button>
        </form>
    </li>
    <li>
        <a href="{{ route('posts.show', ['slug'=>3]) }}">post 3</a> |
        <a href="{{ route('posts.edit', ['slug'=>3]) }}">edit</a> |
        <form action="{{ route('posts.destroy', ['slug'=>3]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button>
        </form>
    </li>
</ul>