<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>Error 419 | Greenwich Cantho - VSTEP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Myra Studio" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('students\assets\images\logo-white.png') }}">

    <!-- App css -->
    <link href="{{ asset('admin/assets/css/style.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('admin/assets/js/config.js') }}"></script>
</head>

<body class="bg-primary d-flex justify-content-center align-items-center min-vh-100 p-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-5">
                <div class="card">
                    <div class="card-body p-4">

                        <div class="text-center w-50 mx-auto my-4">
                            <img src="{{ asset('admin/assets/images/404-error.svg') }}" title="invite.svg">
                        </div>

                        <h3 class="text-center mb-4 mt-3">Page Page Expired</h3>

                        <p class="text-muted text-center mt-3">Sorry, your session has expired. Please refresh and try again.</p>
                        <div class="mt-4 text-center">
                            <a href="{{ url()->previous() }}" class="btn btn-primary w-100">Back to Home</a>
                        </div>

                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->

    <!-- App js -->
    <script src="{{ asset('admin/assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>

</body>

</html>
