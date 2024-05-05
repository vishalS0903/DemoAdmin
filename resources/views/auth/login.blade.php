 {{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<x-login-layout>
   <!--begin::Login-->
   <div class="login login-5 login-signin-on d-flex flex-row-fluid" id="kt_login">
    <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background-image: url(assets/media/bg/bg-12.jpg);">
        <div class="login-form text-center text-white p-7 position-relative overflow-hidden">
            <!--begin::Login Header-->
            <div class="d-flex flex-center mb-10">
                <a href="#">
                    <img src="assets/media/logos/logo-letter-14.png" class="max-h-75px" alt="" />
                </a>
            </div>
            <!--end::Login Header-->
            <!--begin::Login Sign in form-->
            <div class="login-signin">
                <div class="mb-0">
                    <h3 class="opacity-60 font-weight-normal">Sign In</h3>
                    <p class="opacity-60">Enter your details to login to your account:</p>
                </div>
                <form class="form" id="kt_login_signin_form"  method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input class="form-control h-auto text-white bg-white-o-25 rounded-pill border-0 py-4 px-8" type="email" placeholder="Email" name="email" :value="old('email')" autocomplete="off" />
                    </div>
                    <div class="form-group">
                        <input class="form-control h-auto text-white bg-white-o-25 rounded-pill border-0 py-4 px-8" type="password" placeholder="Password" name="password" />
                    </div>
                    <div class="form-group d-flex flex-wrap justify-content-between align-items-center px-8 opacity-80">
                        <div class="checkbox-inline">
                            <label class="checkbox checkbox-outline checkbox-white text-white m-0">
                            <input type="checkbox" name="remember" />
                            <span></span>Remember me</label>
                        </div>
                        <a href="javascript:;" id="kt_login_forgot" class="text-white font-weight-bold">Forget Password ?</a>
                    </div>
                    <div class="form-group text-center mt-10">
                        <button id="kt_login_signin_submit" class="btn btn-pill btn-primary opacity-90 px-15 py-3">Sign In</button>
                    </div>
                </form>
            </div>
            <!--end::Login Sign in form-->
            <!--begin::Login forgot password form-->
            <div class="login-forgot">
                <div class="mb-10">
                    <h3 class="opacity-40 font-weight-normal">Forgotten Password ?</h3>
                    <p class="opacity-40">Enter your email to reset your password</p>
                </div>
                <form class="form" id="kt_login_forgot_form">
                    <div class="form-group mb-10">
                        <input class="form-control h-auto text-white bg-white-o-25 rounded-pill border-0 py-4 px-8" type="text" placeholder="Email" name="email" autocomplete="off" />
                    </div>
                    <div class="form-group">
                        <button id="kt_login_forgot_submit" class="btn btn-pill btn-primary opacity-90 px-15 py-3 m-2">Request</button>
                        <button id="kt_login_forgot_cancel" class="btn btn-pill btn-outline-white opacity-70 px-15 py-3 m-2">Cancel</button>
                    </div>
                </form>
            </div>
            <!--end::Login forgot password form-->
        </div>
    </div>
</div>
<!--end::Login-->
</x-login-layout>

