<form action="{{ route('product.store') }}" method="POST">
    @csrf
    <input type="text" name="name"><br>

    <input type="submit" value="maak product">
</form>
