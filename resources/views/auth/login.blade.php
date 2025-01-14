<div>


    <h1>Login</h1>


    @if ($message = session()->get('message'))
        <div>
            {{ $message }}
        </div>
    @endif

    <form action="/login" method="post">
        @csrf

        {{ config('app.name') }}

        <div style="display: flex; flex-direction: column;">
            <div>
                <input type="text" name="email" placeholder="Email" value="{{ old('email')}}">

                @error('email')

                <span style="color: red;">{{ $message }}</span>

                @enderror
            </div>

            <div>
                <input type="password" name="password" placeholder="Password">

                @error('password')

                <span style="color: red;">{{ $message }}</span>

                @enderror
            </div>

        </div>

        <button type="submit">Login</button>
    </form>
</div>
