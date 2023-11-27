<form method="POST" action="{{ route('tasks.store') }}">
    @csrf

    <label for="name">Name</label>
    <input type="text" id="name" name="name">

    <label for="status">Status</label>
    <input type="checkbox" id="status" name="status">

    <label for="amount">Amount</label>
    <input type="number" id="amount" name="amount">

    <button type="submit">Create</button>
</form>