<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>
    @include('partials.styles')
</head>
<body>
<main class="container">
    <h1>Customer Details</h1>
    <p><strong>Full Name:</strong> {{ $customer->full_name }}</p>
    <p><strong>Email:</strong> {{ $customer->email }}</p>
    <div class="actions">
        <a class="button warning" href="{{ route('customers.edit', $customer) }}">Edit</a>
        <a class="button secondary" href="{{ route('customers.index') }}">Back</a>
    </div>
</main>
</body>
</html>
