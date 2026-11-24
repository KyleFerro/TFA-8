@if (session('success'))
    <div class="message success">{{ session('success') }}</div>
@endif

@if ($errors->any())
    <div class="message error">
        <strong>Please correct the following:</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
