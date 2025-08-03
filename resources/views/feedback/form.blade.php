@if(session('success'))
    <div>{{ session('success') }}</div>
@endif

<form method="POST" action="/feedback">
    @csrf
    <div>
        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name') }}">
    </div>
    <div>
        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}">
    </div>
    <div>
        <label>Message:</label>
        <textarea name="message">{{ old('message') }}</textarea>
    </div>
    <button type="submit">Send Feedback</button>
</form>