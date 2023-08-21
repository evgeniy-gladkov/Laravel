<h1>Contact Page</h1>
<form action="{{ route('email') }}" method="POST">
    {{-- {{ csrf_field() }} --}}
    {{-- {{ method_field('PUT') }} --}}
    @method('PUT')
    @csrf
    <input type="text" name="name">
    <input type="email" name="email">
    <button type="submit">send</button>
</form>