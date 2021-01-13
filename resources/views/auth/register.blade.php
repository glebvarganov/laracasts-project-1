<x-master>
<div class="container mx-auto px-6 py-4 bg-gray-100">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="font-bold text-xl mb-4">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="font-bold text-grey-darkest">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="border py-2 px-3 text-grey-darkest w-full @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="font-bold text-grey-darkest">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="border py-2 px-3 text-grey-darkest w-full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="border py-2 px-3 text-grey-darkest w-full @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label for="password-confirm" class="font-bold text-grey-darkest">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="border py-2 px-3 text-grey-darkest w-full" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="px-6 py-4 rounded text-sm text-white uppercase bg-blue-600">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-master>
