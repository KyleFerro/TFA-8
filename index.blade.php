<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Accounts</title>
    @include('partials.styles')
</head>
<body>
<main class="container">
    <div class="toolbar">
        <h1>User Accounts</h1>
        <a class="button" href="{{ route('users.create') }}">Create User</a>
    </div>

    @include('partials.messages')

    <table>
        <thead><tr><th>Avatar</th><th>Username</th><th>Full Name</th><th>Action</th></tr></thead>
        <tbody>
        @forelse ($users as $user)
            <tr>
                <td>
                    <img class="avatar" src="{{ $user->avatar ? Storage::disk('public')->url($user->avatar) : asset('images/avatar-placeholder.svg') }}" alt="{{ $user->full_name }}">
                </td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->full_name }}</td>
                <td>
                    <a class="button secondary" href="{{ route('users.show', $user) }}">View</a>
                    <a class="button warning" href="{{ route('users.edit', $user) }}">Edit</a>
                    @if (auth()->id() !== $user->id)
                        <form method="POST" action="{{ route('users.destroy', $user) }}" style="display:inline" onsubmit="return confirm('Delete this user?')">
                            @csrf
                            @method('DELETE')
                            <button class="button danger" type="submit">Delete</button>
                        </form>
                    @endif
                </td>
            </tr>
        @empty
            <tr><td colspan="4">No users found.</td></tr>
        @endforelse
        </tbody>
    </table>
</main>
</body>
</html>
