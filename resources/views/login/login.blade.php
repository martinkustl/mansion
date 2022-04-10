@extends ('layouts.page')

@section('title')
    Přihlášení
@endsection

@section('content')

@section('pageHeading')
    Přihlášení do administrace
@endsection
<form class="c-login-form" method="POST" action="{{url("/login")}}">
    @csrf
    <x-forms.input input-type="email" label-text="Email" placeholder="Email" input-id="email" input-name="email"/>
    <x-forms.input input-type="password" label-text="Heslo" placeholder="Heslo" input-id="password"
                   input-name="password"/>
    <div class="d-flex mt-4">
        <button type="submit" class="btn btn-primary c-btn-primary" style="margin: auto">Přihlásit se
        </button>
    </div>
</form>

@endsection
