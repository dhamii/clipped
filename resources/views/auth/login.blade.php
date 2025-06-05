@section()
    <form action="/login" method="post">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="tel" name="phone" placeholder="Phone">
        <input type="password" name="password" placeholder="Password">
        <button></button>
    </form>
@endsection
