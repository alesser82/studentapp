@if($errors->any())
    <ul class="alert alert-danger">
    @foreach ($errors->all() as $error)
        <li class="mx-2">{{ $error }}</li>
    @endforeach
    </ul>
@endif