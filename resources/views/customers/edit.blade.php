<form action="{{ route('customers.update', $customer->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" value="{{ $customer->email }}" required>
    </div>
    <div class="form-group">
        <label for="account_type">Account Type</label>
        <input type="text" name="account_type" class="form-control" value="{{ $customer->account_type }}" required>
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <input type="text" name="status" class="form-control" value="{{ $customer->status }}" required>
    </div>
    <div class="form-group">
        <label for="last_login">Last Login</label>
        <input type="date" name="last_login" class="form-control" value="{{ $customer->last_login }}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
