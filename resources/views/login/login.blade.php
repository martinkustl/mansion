@extends ('layouts.page')

@section('title')
    Přihlášení
@endsection

@section('content')

@section('pageHeading')
    Přihlášení do administrace
@endsection
<form class="c-login-form">
    @csrf
    <x-forms.input inputType="email" labelText="Email" placeholder="Email" inputId="email" inputName="email"/>
    <x-forms.input inputType="password" labelText="Heslo" placeholder="Heslo" inputId="password" inputName="password"/>
</form>

@endsection
