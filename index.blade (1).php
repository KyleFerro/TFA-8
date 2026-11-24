<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    @include('partials.styles')
</head>
<body>
<main class="container">
    <div class="toolbar">
        <h1>Customers</h1>
        <a class="button" href="{{ route('customers.create') }}">Create Customer</a>
    </div>

    @include('partials.messages')

    <table>
        <thead><tr><th>Full Name</th><th>Email</th><th>Action</th></tr></thead>
        <tbody>
        @forelse ($customers as $customer)
            <tr>
                <td>{{ $customer->full_name }}</td>
                <td>{{ $customer->email }}</td>
                <td>
                    <a class="button secondary" href="{{ route('customers.show', $customer) }}">View</a>
                    <a class="button warning" href="{{ route('customers.edit', $customer) }}">Edit</a>
                    <form method="POST" action="{{ route('customers.destroy', $customer) }}" style="display:inline" onsubmit="return confirm('Delete this customer?')">
                        @csrf
                        @method('DELETE')
                        <button class="button danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="3">No customers found.</td></tr>
        @endforelse
        </tbody>
    </table>
</main>
</body>
</html>
