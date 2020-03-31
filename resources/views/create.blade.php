<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Add New Data</title>
    </head>
    <body>
        @extends('layout.main')
        @section('content')

        <h2 class="px-2 py-4">
                <strong>Create Page</strong>
        </h2>
        <hr>
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>

            @endforeach
        @endif
        <div class="container">
            <!-- Material form register -->
            <div class="card">

                <h5 class="card-header special-color-dark white-text text-center py-4">
                    <strong>Add Student</strong>
                </h5>

                <!--Card content-->
                <div class="card-body px-lg-5 pt-0">

                    <!-- Form -->
                    <form class="text-center" style="color: #757575;" action="{{route('store')}}" method="POST">

                        {{csrf_field()}}
                        <div class="form-row">
                            <div class="col">
                                <!-- First name -->
                                <div class="md-form">
                                    <input type="text" id="materialRegisterFormFirstName" class="form-control" name="firstname">
                                    <label for="materialRegisterFormFirstName">First name</label>
                                </div>
                            </div>
                            <div class="col">
                                <!-- Last name -->
                                <div class="md-form">
                                    <input type="text" id="materialRegisterFormLastName" class="form-control" name="lastname">
                                    <label for="materialRegisterFormLastName">Last name</label>
                                </div>
                            </div>
                        </div>
                        <!-- E-mail -->
                        <div class="md-form mt-0">
                            <input type="email" id="materialRegisterFormEmail" class="form-control" name="email">
                            <label for="materialRegisterFormEmail">E-mail</label>
                        </div>
                    <div class="form-row">
                        <div class="col">
                            <!-- Department -->
                            <div class="md-form mt-0">
                                <input type="text" id="materialRegisterFormDepartment" class="form-control" name="department">
                                <label for="materialRegisterFormDepartment">Department</label>
                            </div>
                        </div>

                        <div class="col">
                            <!-- Phone -->
                            <div class="md-form mt-0">
                                <input type="tel" id="materialRegisterFormPhone" class="form-control" name="phone">
                                <label for="materialRegisterFormPhone">Phone Number</label>
                            </div>
                        </div>
                    </div>

                        <!--Add data button -->
                        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Add Data</button>

                        <hr>

                    </form>
                    <!-- Form -->
                </div>
            </div>
        </div>

        @endsection
        
    </body>
</html>
