<form method="POST" action="{{ route('admin.services.store') }}">
    @csrf()
    @include('admin.services.form')
</form>
