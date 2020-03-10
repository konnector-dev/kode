<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo env('APP_NAME', 'Kode'); ?></title>

    <link rel="icon" type="image/png" href="/favicon.png" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{  url('/css/tailwind-style.css') }}" rel="stylesheet">
    <link href="{{  url('/assets/fonts/font-awesome.min.css') }}" rel="stylesheet">

</head>

<body>
    <div class="min-h-screen bg-gray-50 flex justify-center py-10 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <img class="mx-auto h-12 w-auto" src="/images/kode.png" alt="Kode!!" />
            <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
                Kode!!
            </h2>
            <div class="py-10 mx-auto flex justify-center align-content-center">
                <span class="inline-flex shadow-sm">
                  <a
                      href="{{url('/oauth-github/auth-request')}}"
                      type="button"
                          class="
                          inline-flex items-center px-6 py-3 border border-transparent text-base leading-6 font-medium
                          text-white bg-red-600
                          hover:bg-red-500
                          focus:outline-none focus:border-red-700 focus:shadow-outline-red
                          active:bg-red-700 transition ease-in-out duration-150"
                      style="background-color: red;"
                  >
                      <i class="fa fa-github"></i>
                     &nbsp; &nbsp; Sign in with GitHub
                  </a>
                </span>
            </div>
        </div>
    </div>
</body>

</html>
