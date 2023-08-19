<h1>Contact Page</h1>
<form action="/email" method="POST">
    @csrf
    <input type="text" name="name">
    <input type="email" name="email">
    <button type="submit">send</button>
</form>