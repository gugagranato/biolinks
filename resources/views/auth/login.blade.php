<div>


    <h1>Login</h1>

    <form action="/login" method="post">
        @csrf

        {{ config('app.name') }}

        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Login</button>
    </form>
</div>
