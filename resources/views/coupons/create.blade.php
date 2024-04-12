<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Coupon</title>
</head>
<body>
    <h1>Create Coupon</h1>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <form action="{{ route('coupons.store') }}" method="POST">
        @csrf
        <div>
            <label for="code">Code:</label>
            <input type="text" id="code" name="code" required>
        </div>
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="discount_amount">Discount Amount:</label>
            <input type="number" id="discount_amount" name="discount_amount" min="0" step="0.01" required>
        </div>
        <div>
            <label for="status">Status:</label>
            <input type="checkbox" id="status" name="status" value="1" checked> Active
        </div>
        <div>
            <label for="starts_at">Starts At:</label>
            <input type="datetime-local" id="starts_at" name="starts_at" required>
        </div>
        <div>
            <label for="expires_at">Expires At:</label>
            <input type="datetime-local" id="expires_at" name="expires_at" required>
        </div>
        <button type="submit">Create Coupon</button>
    </form>
</body>
</html>