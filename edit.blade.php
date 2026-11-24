<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    @include('partials.styles')
</head>
<body>
<main class="container">
    <h1>Edit User</h1>
    @include('partials.messages')

    <form method="POST" action="{{ route('users.update', $user) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="field">
            <label for="username">Username</label>
            <input id="username" name="username" type="text" value="{{ old('username', $user->username) }}" required>
        </div>
        <div class="field">
            <label for="full_name">Full Name</label>
            <input id="full_name" name="full_name" type="text" value="{{ old('full_name', $user->full_name) }}" required>
        </div>
        <div class="field">
            <label for="email">Email</label>
            <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" required>
        </div>
        <div class="field">
            <label for="password">New Password</label>
            <input id="password" name="password" type="password">
            <div class="hint">Leave blank to keep the existing password.</div>
        </div>
        <div class="field">
            <label for="password_confirmation">Confirm New Password</label>
            <input id="password_confirmation" name="password_confirmation" type="password">
        </div>
        <div class="field">
            <label>Current Avatar</label>
            <img class="avatar large" src="{{ $user->avatar ? Storage::disk('public')->url($user->avatar) : asset('images/avatar-placeholder.svg') }}" alt="{{ $user->full_name }}">
        </div>
        <div class="field">
            <label for="avatar">New Profile Picture</label>
            <input id="avatar" name="avatar" type="file" accept="image/*">
            <div class="hint">Image files only. Maximum size: 2 MB.</div>
        </div>
        <div class="actions">
            <button class="button" type="submit">Update User</button>
            <a class="button secondary" href="{{ route('users.index') }}">Cancel</a>
        </div>
    </form>
</main>
</body>
</html>
