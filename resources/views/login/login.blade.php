@extends ('layouts.page')

@section('title')
    Přihlášení
@endsection

@section('content')

@section('pageHeading')
    Přihlášení do administrace
@endsection
<form class="c-login-form" method="POST" action="/login">
    @csrf
    <x-forms.input inputType="email" labelText="Email" placeholder="Email" inputId="email" inputName="email"/>
    <x-forms.input inputType="password" labelText="Heslo" placeholder="Heslo" inputId="password" inputName="password"/>
    <div class="d-flex mt-4">
        <button type="submit" class="btn btn-primary c-btn-primary" style="margin: auto">Přihlásit se
        </button>
    </div>
</form>

@endsection
