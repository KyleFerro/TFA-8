<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer</title>
    @include('partials.styles')
</head>
<body>
<main class="container">
    <h1>Edit Customer</h1>
    @include('partials.messages')

    <form method="POST" action="{{ route('customers.update', $customer) }}">
        @csrf
        @method('PUT')
        <div class="field">
            <label for="full_name">Full Name</label>
            <input id="full_name" name="full_name" type="text" value="{{ old('full_name', $customer->full_name) }}" required>
        </div>
        <div class="field">
            <label for="email">Email</label>
            <input id="email" name="email" type="email" value="{{ old('email', $customer->email) }}" required>
        </div>
        <div class="actions">
            <button class="button" type="submit">Update Customer</button>
            <a class="button secondary" href="{{ route('customers.index') }}">Cancel</a>
        </div>
    </form>
</main>
</body>
</html>
