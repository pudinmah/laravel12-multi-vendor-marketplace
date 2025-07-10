@extends('frontend.home.layouts.master')

@section('title', 'Login')

@section('content')
    <!-- ======================== Breadcrumb Two Section Start ===================== -->
    <section class="breadcrumb border-bottom p-0 d-block section-bg position-relative z-index-1"
        style="background: url({{ asset(config('settings.breadcrumb')) }});">
        <div class="breadcrumb-two">
            <img src="{{asset('assets/frontend/images/gradients/breadcrumb-gradient-bg.png')}}" alt="" class="bg--gradient">
            <div class="container container-two">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="breadcrumb-two-content text-center">

                            <ul class="breadcrumb-list flx-align gap-2 mb-2 justify-content-center">
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <a href="index.html"
                                        class="breadcrumb-list__link text-body hover-text-main">{{ __('Home') }}</a>
                                </li>
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <span class="breadcrumb-list__icon font-10"><i class="fas fa-chevron-right"></i></span>
                                </li>
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <span class="breadcrumb-list__text">{{ __('Sign In') }}</span>
                                </li>
                            </ul>

                            <h3 class="breadcrumb-two-content__title mb-0 text-capitalize">{{ __('Sign In') }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================== Breadcrumb Two Section End ===================== -->

    <section class="wsus__login padding-y-120">
        <div class="container">
            <div class="row">
                <div class="col-xxl-5 col-xl-6 col-md-9 col-lg-7 m-auto">
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <div class="wsus__login_area">
                        <h2>{{ __('Welcome back') }}!</h2>
                        <p>{{ __('sign in to continue') }}</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="wsus__login_imput">
                                        <label>{{ __('email') }}</label>
                                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email"
                                            required>
                                        <x-input-error :message="$errors->first('email')" class="mt-2" />

                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="wsus__login_imput">
                                        <label>{{ __('password') }}</label>
                                        <input type="password" name="password" required placeholder="Password">
                                        <x-input-error :message="$errors->first('password')" class="mt-2" />

                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="wsus__login_imput wsus__login_check_area">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault" name="remember">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                        <a href="{{ route('password.request') }}">{{ __('Forget Password') }} ?</a>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="wsus__login_imput">
                                        <button type="submit" class="btn btn-main btn-lg">{{ __('Sign in') }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <p class="create_account">{{ __('Dont have an account') }} ? <a
                                href="{{ route('register') }}">{{ __('Sign Up') }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
