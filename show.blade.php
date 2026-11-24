<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    @include('partials.styles')
</head>
<body>
<main class="container">
    <h1>User Details</h1>
    <img class="avatar large" src="{{ $user->avatar ? Storage::disk('public')->url($user->avatar) : asset('images/avatar-placeholder.svg') }}" alt="{{ $user->full_name }}">
    <p><strong>Username:</strong> {{ $user->username }}</p>
    <p><strong>Full Name:</strong> {{ $user->full_name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <div class="actions">
        <a class="button warning" href="{{ route('users.edit', $user) }}">Edit</a>
        <a class="button secondary" href="{{ route('users.index') }}">Back</a>
    </div>
</main>
</body>
</html>
