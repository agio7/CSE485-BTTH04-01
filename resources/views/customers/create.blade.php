<form action="{{ route('customers.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="account_type">Account Type</label>
        <input type="text" name="account_type" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <input type="text" name="status" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="last_login">Last Login</label>
        <input type="date" name="last_login" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
    