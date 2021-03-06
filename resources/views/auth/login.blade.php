{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

<x-guest-layout>
<body class="home home-1">
    <div id="all">
  <!-- Main Content -->
        <div id="content" class="site-content">
            <!-- Breadcrumb -->
            <div id="breadcrumb">
                <div class="container">
                    <h2 class="title">Login</h2>
                    
                    <ul class="breadcrumb">
                        <li><a href="/" title="Home">Home</a></li>
                        <li><span>Login</span></li>
                    </ul>
                </div>
            </div>


            <div class="container">
                <div class="login-page">
                    <div class="login-form edge form">
                        <div class="block-title">
                            <h2 class="title"><span>Login</span></h2>
                        </div>
                        <x-jet-validation-errors class="mb-4" />
                            
                            <form  class="" action="{{ route('login') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email"  name="email" :value="old('email')" required autofocus>
                                </div>
                                
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password"  name="password"  required autocomplete="current">
                                </div>
                                <div class="form-group">
                                    <label>Remember Me</label>
                                    <input class="frm-input" type="checkbox" id="rememberme" value="forever" name="remember">
                                </div>
                                
                                <div class="form-group text-center">
                                    <div class="link">
                                        <a href="{{ route('password.request') }}">Forgot your password?</a> 

                                        <a href="{{ route('register') }}">Register?</a>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <input type="submit" class="btn btn-submit" value="Login" name="submit">
                                </div>
                            </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</body>
  
</x-guest-layout>