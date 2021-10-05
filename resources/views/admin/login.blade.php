<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layout.head')
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #6a11cb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
        }
    </style>
</head>
<body>
<form class="vh-100 gradient-custom" method="post" action="/admin/store">

    <div class="container py-5 h-100">

        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">

                            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                            <p class="text-white-50 mb-5">Please enter your login and password!</p>
                            @include('admin.layout.alert')
                            <div class="form-outline form-white mb-4">
                                <label class="form-label" for="typeEmailX">Email</label>
                                <input type="email" id="email" name="email"  class="form-control form-control-lg" />

                            </div>

                            <div class="form-outline form-white mb-4">
                                <label class="form-label" for="typePasswordX">Password</label>
                                <input type="password" name="password" id="password" class="form-control form-control-lg" />
                            </div>

                            <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                            <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    @csrf
</form>
@include('admin.layout.footer')
</body>
</html>
