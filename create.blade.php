<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    @include('partials.styles')
</head>
<body>
<main class="container">
    <h1>Create User</h1>
    @include('partials.messages')

    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        <div class="field">
            <label for="username">Username</label>
            <input id="username" name="username" type="text" value="{{ old('username') }}" required>
        </div>
        <div class="field">
            <label for="full_name">Full Name</label>
            <input id="full_name" name="full_name" type="text" value="{{ old('full_name') }}" required>
        </div>
        <div class="field">
            <label for="email">Email</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" required>
        </div>
        <div class="field">
            <label for="password">Password</label>
            <input id="password" name="password" type="password" required>
        </div>
        <div class="field">
            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" name="password_confirmation" type="password" required>
        </div>
        <div class="actions">
            <button class="button" type="submit">Save User</button>
            <a class="button secondary" href="{{ route('users.index') }}">Cancel</a>
        </div>
    </form>
</main>
</body>
</html>
