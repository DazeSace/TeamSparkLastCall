@extends('layouts.app')

@section('content')
    <div class="w-1/2 border-r-4 h-64 border-secondary -mt-32"></div>
    <div class="flex bg-muted rounded-lg w-full md:w-1/3 mx-auto flex-col">
        <div class="w-32 mx-auto -mt-16">
            <svg width="100%" height="100%" viewBox="0 0 45 45" version="1.1"
                 xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                 style="fill-rule:evenodd;clip-rule:evenodd;stroke-miterlimit:2;"><path
                    d="M43.421,22.455c0,11.579 -9.387,20.966 -20.966,20.966c-11.58,0 -20.966,-9.387 -20.966,-20.966c0,-11.58 9.386,-20.966 20.966,-20.966c11.579,0 20.966,9.386 20.966,20.966Z"
                    style="fill:#002859;fill-rule:nonzero;"/>
                <path
                    d="M43.421,22.455c0,11.579 -9.387,20.966 -20.966,20.966c-11.58,0 -20.966,-9.387 -20.966,-20.966c0,-11.58 9.386,-20.966 20.966,-20.966c11.579,0 20.966,9.386 20.966,20.966Z"
                    style="fill:none;stroke:#002859;stroke-width:1.33px;"/>
                <path
                    d="M26.932,5.747l-11.625,14.23l-6.086,-8.455c0,0 3.183,-3.822 7.229,-5.255c5.268,-1.865 10.482,-0.52 10.482,-0.52Z"
                    style="fill:#0f9;fill-rule:nonzero;"/>
                <path
                    d="M10.969,25.359l-5.478,0.381c0,0 -0.443,-2.255 -0.208,-4.842c0.225,-2.486 1.284,-5.235 1.284,-5.235l7.954,5.221l-3.552,4.475Z"
                    style="fill:#0f9;fill-rule:nonzero;"/>
                <path
                    d="M13.318,37.063c0,0 -1.528,-0.825 -3.514,-2.894c-1.745,-1.818 -2.671,-3.762 -2.671,-3.762l4.264,-4.496l8.624,-0.719l-6.703,11.871Z"
                    style="fill:#0f9;fill-rule:nonzero;"/>
                <path
                    d="M19.507,39.305c0,0 -0.605,-0.031 -1.788,-0.448c-1.344,-0.474 -1.656,-0.639 -1.656,-0.639l5.57,-13.107l2.973,-0.237l-5.099,14.431Z"
                    style="fill:#0f9;fill-rule:nonzero;"/>
                <path
                    d="M30.093,37.97c0,0 -2.435,1.168 -5.306,1.339c-3.341,0.199 -4.836,0.207 -4.836,0.207l5.851,-8.407l4.291,6.861Z"
                    style="fill:#0f9;fill-rule:nonzero;"/>
                <path
                    d="M39.628,21.238l-5.615,-1.806l-7.844,11.192l6.417,5.766c0,0 3.98,-2.853 5.752,-7.25c1.932,-4.791 1.29,-7.902 1.29,-7.902Z"
                    style="fill:#0f9;fill-rule:nonzero;"/>
                <path
                    d="M37.925,14.847c0,0 0.114,-0.48 -1.526,-2.604c-1.328,-1.722 -2.42,-2.612 -2.42,-2.612l-5.914,9.47l5.877,-0.467l3.983,-3.787Z"
                    style="fill:#0f9;fill-rule:nonzero;"/>
                <path
                    d="M25.794,19.224l-4.457,0.354l5.988,-13.431c0,0 1.038,0.244 2.184,0.82c1.345,0.675 1.869,1.207 1.869,1.207l-5.584,11.05Z"
                    style="fill:#0f9;fill-rule:nonzero;"/>
                <path
                    d="M39.434,22.444c0,9.303 -7.635,16.845 -17.054,16.845c-9.419,0 -17.054,-7.542 -17.054,-16.845c0,-9.304 7.635,-16.846 17.054,-16.846c9.419,0 17.054,7.542 17.054,16.846Z"
                    style="fill:none;stroke:#002859;stroke-width:1.18px;"/></svg>
        </div>
        <form method="POST" action="{{ route('login') }}" class="w-full px-16 my-16" id="login">
            @csrf
            <input
                class="w-full py-3 px-4 border-2 border-muted rounded-full focus:outline-none focus:border-primary @error('email') border-danger focus:border-danger @enderror"
                placeholder="E-Mail Adresse" type="email"
                id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <p class="text-danger text-xs italic text-center">E-Mail nicht vorhanden oder Passwort falsch!</p>
            @enderror
            <input id="password" type="password"
                   class="w-full border-2 border-muted py-3 px-4 rounded-full focus:outline-none focus:border-primary mt-8"
                   name="password" required placeholder="Passwort">
            <div class="flex justify-center">
                <div>
                    <input type="checkbox" name="remember" id="remember"
                           class="mt-8" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember" class="ml-3 text-sm">Angemeldet bleiben</label>
                </div>
            </div>
        </form>
    </div>
    <div class="flex flex-col content-center mt-4">
        <div class="mx-auto">
            <button type="submit" form="login"
                    class="text-lg bg-secondary text-primary py-1 px-8 rounded-lg font-semibold uppercase leading-loose hover:bg-primary hover:text-secondary">
                Anmelden
            </button>
        </div>
        <a href="{{ route('password.request') }}" class="mx-auto mt-4 mb-32">Password vergessen?</a>
    </div>
@endsection
