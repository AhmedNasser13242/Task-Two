<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}"> <!-- CSS reset -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- Resource style -->
    <script src="{{ asset('js/modernizr.js') }}"></script> <!-- Modernizr -->
    <title>اشتراك</title>
</head>

<body>
    <header class="cd-header">
        <h1>Pricing Tables</h1>
    </header>

    <div class="cd-pricing-container">
        <div class="cd-pricing-switcher">
            <p class="fieldset">
                <input type="radio" name="duration-1" value="monthly" id="monthly-1" checked>
                <label for="monthly-1">Monthly</label>
                <input type="radio" name="duration-1" value="yearly" id="yearly-1">
                <label for="yearly-1">Yearly</label>
                <span class="cd-switch"></span>
            </p>
        </div> <!-- .cd-pricing-switcher -->

        <ul class="cd-pricing-list cd-bounce-invert">
            <li>
                <ul class="cd-pricing-wrapper">
                    <li data-type="monthly" class="is-visible">
                        <header class="cd-pricing-header">
                            <h2>Basic</h2>

                            <div class="cd-price">
                                <span class="cd-currency">$</span>
                                <span class="cd-value">30</span>
                                <span class="cd-duration">mo</span>
                            </div>
                        </header> <!-- .cd-pricing-header -->

                        <div class="cd-pricing-body">
                            <ul class="cd-pricing-features">
                                <li><em>256MB</em> Memory</li>
                                <li><em>1</em> User</li>
                                <li><em>1</em> Website</li>
                                <li><em>1</em> Domain</li>
                                <li><em>Unlimited</em> Bandwidth</li>
                                <li><em>24/7</em> Support</li>
                            </ul>
                        </div> <!-- .cd-pricing-body -->

                        <footer class="cd-pricing-footer">
                            <a class="cd-select" href="http://codyhouse.co/?p=429">Select</a>
                        </footer> <!-- .cd-pricing-footer -->
                    </li>

                    <li data-type="yearly" class="is-hidden">
                        <header class="cd-pricing-header">
                            <h2>Basic</h2>
                            <div class="cd-price">
                                <span class="cd-currency">$</span>
                                <span class="cd-value">320</span>
                                <span class="cd-duration">yr</span>
                            </div>
                        </header> <!-- .cd-pricing-header -->

                        <div class="cd-pricing-body">
                            <ul class="cd-pricing-features">
                                <li><em>256MB</em> Memory</li>
                                <li><em>1</em> User</li>
                                <li><em>1</em> Website</li>
                                <li><em>1</em> Domain</li>
                                <li><em>Unlimited</em> Bandwidth</li>
                                <li><em>24/7</em> Support</li>
                            </ul>
                        </div> <!-- .cd-pricing-body -->

                        <footer class="cd-pricing-footer">
                            <a class="cd-select" href="http://codyhouse.co/?p=429">Select</a>
                        </footer> <!-- .cd-pricing-footer -->
                    </li>
                </ul> <!-- .cd-pricing-wrapper -->
            </li>

            <li class="cd-popular">
                <ul class="cd-pricing-wrapper">
                    <li data-type="monthly" class="is-visible">
                        <header class="cd-pricing-header">
                            <h2>Popular</h2>

                            <div class="cd-price">
                                <span class="cd-currency">$</span>
                                <span class="cd-value">60</span>
                                <span class="cd-duration">mo</span>
                            </div>
                        </header> <!-- .cd-pricing-header -->

                        <div class="cd-pricing-body">
                            <ul class="cd-pricing-features">
                                <li><em>512MB</em> Memory</li>
                                <li><em>3</em> Users</li>
                                <li><em>5</em> Websites</li>
                                <li><em>7</em> Domains</li>
                                <li><em>Unlimited</em> Bandwidth</li>
                                <li><em>24/7</em> Support</li>
                            </ul>
                        </div>
                        <form method="post" action="{{ route('admin.profile.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3 row">
                                <div class="col-sm-3">
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="{{ $adminData->username }}"
                                        disabled hidden />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-3">
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="name" class="form-control"
                                        value="{{ $adminData->name }}" hidden />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-3">
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="email" name="email" class="form-control"
                                        value="{{ $adminData->email }}" hidden />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-3">
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="phone" class="form-control"
                                        value="{{ $adminData->phone }}" hidden />
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <div class="col-sm-3">
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="address" class="form-control"
                                        value="{{ $adminData->address }}" hidden />
                                </div>
                            </div>
                            <!-- .cd-pricing-body -->

                            <footer class="cd-pricing-footer">
                                <button type="submit" class="cd-select"
                                    href="http://codyhouse.co/?p=429">Select</button>
                            </footer> <!-- .cd-pricing-footer -->
                        </form>
                    </li>

                    <li data-type="yearly" class="is-hidden">
                        <header class="cd-pricing-header">
                            <h2>Popular</h2>

                            <div class="cd-price">
                                <span class="cd-currency">$</span>
                                <span class="cd-value">630</span>
                                <span class="cd-duration">yr</span>
                            </div>
                        </header> <!-- .cd-pricing-header -->

                        <div class="cd-pricing-body">
                            <ul class="cd-pricing-features">
                                <li><em>512MB</em> Memory</li>
                                <li><em>3</em> Users</li>
                                <li><em>5</em> Websites</li>
                                <li><em>7</em> Domains</li>
                                <li><em>Unlimited</em> Bandwidth</li>
                                <li><em>24/7</em> Support</li>
                            </ul>
                        </div> <!-- .cd-pricing-body -->

                        <footer class="cd-pricing-footer">
                            <a class="cd-select" href="http://codyhouse.co/?p=429">Select</a>
                        </footer> <!-- .cd-pricing-footer -->
                    </li>
                </ul> <!-- .cd-pricing-wrapper -->
            </li>

            <li>
                <ul class="cd-pricing-wrapper">
                    <li data-type="monthly" class="is-visible">
                        <header class="cd-pricing-header">
                            <h2>Premier</h2>

                            <div class="cd-price">
                                <span class="cd-currency">$</span>
                                <span class="cd-value">90</span>
                                <span class="cd-duration">mo</span>
                            </div>
                        </header> <!-- .cd-pricing-header -->

                        <div class="cd-pricing-body">
                            <ul class="cd-pricing-features">
                                <li><em>1024MB</em> Memory</li>
                                <li><em>5</em> Users</li>
                                <li><em>10</em> Websites</li>
                                <li><em>10</em> Domains</li>
                                <li><em>Unlimited</em> Bandwidth</li>
                                <li><em>24/7</em> Support</li>
                            </ul>
                        </div> <!-- .cd-pricing-body -->

                        <footer class="cd-pricing-footer">
                            <a class="cd-select" href="http://codyhouse.co/?p=429">Select</a>
                        </footer> <!-- .cd-pricing-footer -->
                    </li>

                    <li data-type="yearly" class="is-hidden">
                        <header class="cd-pricing-header">
                            <h2>Premier</h2>
                            <div class="cd-price">
                                <span class="cd-currency">$</span>
                                <span class="cd-value">950</span>
                                <span class="cd-duration">yr</span>
                            </div>
                        </header> <!-- .cd-pricing-header -->
                        <div class="cd-pricing-body">
                            <ul class="cd-pricing-features">
                                <li><em>1024MB</em> Memory</li>
                                <li><em>5</em> Users</li>
                                <li><em>10</em> Websites</li>
                                <li><em>10</em> Domains</li>
                                <li><em>Unlimited</em> Bandwidth</li>
                                <li><em>24/7</em> Support</li>
                            </ul>
                        </div> <!-- .cd-pricing-body -->
                        <footer class="cd-pricing-footer">
                            <a class="cd-select" href="http://codyhouse.co/?p=429">Select</a>
                        </footer> <!-- .cd-pricing-footer -->
                    </li>
                </ul> <!-- .cd-pricing-wrapper -->
            </li>
        </ul> <!-- .cd-pricing-list -->
    </div> <!-- .cd-pricing-container -->


    <script src="{{ asset('js/jquery-2.1.1.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script> <!-- Resource jQuery -->
</body>

</html>
