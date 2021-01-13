<x-master>
    <div class="container mx-auto px-6 py-4 bg-gray-100">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="font-bold text-xl mb-4">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="font-bold text-grey-darkest">{{ __('E-Mail Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="border py-2 px-3 text-grey-darkest w-full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="font-bold text-grey-darkest">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="border py-2 px-3 text-grey-darkest w-full @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-6">
                            <div class="col-md-6 offset-md-4">
                                <div class="flex items-center">
                                    <input class="form-checkbox h-5 w-5 text-gray-600" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="ml-2 text-gray-700" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="px-6 py-4 rounded text-sm text-white uppercase bg-blue-600 mr-4">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-master>
