<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 offset-md-1">
                                        <br />
                                        <h2>{{ trans('saas.billing.best_product_ever') }}</h2>
                                        <p>{{ trans('saas.billing.some_description') }}</p>
                                        <a href="{{ route('register') }}" class="btn btn-primary">{{ trans('saas.billing.button.try_now') }}</a>
                                        <br /><br />
                                    </div>
                                    <div class="col-md-7 text-center">
                                        <img src="https://via.placeholder.com/400x200" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if($plans)
                            <br /><br />
                            <h1 class="text-center">{{ trans('saas.pricing') }}</h1>
                            <hr />
                            <div class="row">
                                <div class="col-md-{{ $planClass }}">
                                    <div class="card text-center">
                                        <div class="card-header">
                                            <h3>{{ trans('saas.plan.free.title') }}</h3>
                                        </div>

                                        <div class="card-body text-center">
                                            <h4>$0 / {{ trans('saas.month') }}</h4>
                                            <hr />
                                            - {{ trans('saas.plan.feature_1') }}<br />
                                            - {{ trans('saas.plan.feature_2') }}<br />
                                            - {{ trans('saas.plan.feature_3') }}<br />
                                            <hr />
                                            <a class="btn btn-primary" href="{{ route('register') }}">{{ trans('saas.plan.button.start_now') }}</a>
                                        </div>
                                    </div>
                                </div>
                                @foreach($plans as $plan)
                                    <div class="col-md-{{ $planClass }}">
                                        <div class="card text-center">
                                            <div class="card-header">
                                                <h3>{{ $plan->title }}</h3>
                                            </div>
                                            <div class="card-body text-center">
                                                <h4>${{ number_format($plan->price / 100, 2) }} / {{ trans('saas.month') }}</h4>
                                                <hr />
                                                - {{ trans('saas.plan.feature_1') }}<br />
                                                - {{ trans('saas.plan.feature_2') }}<br />
                                                - {{ trans('saas.plan.feature_3') }}<br />
                                                <hr />
                                                <a class="btn btn-primary" href="{{ route('register') }}">{{ trans('saas.plan.button.start_now') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>