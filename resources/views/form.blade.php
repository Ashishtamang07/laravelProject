<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <form action="{{url('/')}}/register" method="post">
            <!-- csrf token authenticate the user request to server -->
            @csrf

            <div class="container">
                <h2 class="text-center">Registration</h2>
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <!-- value="{{old('name')}}" helps to regenereate old value after refreshing the form  -->
                    <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{old('name')}}">
                    <span class="text-danger">
                        <!-- error function takes key argument and  helps to catch error with $message  -->
                        @error('name')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">email</label>
                    <input type="text" name="email" id="" class="form-control" placeholder="email" aria-describedby="helpId" value="{{old('email')}}">
                    <span class="text-danger">
                        @error('email')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">password</label>
                    <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <!-- <small id="helpId" class="text-muted">Help text</small> -->
                    <span class="text-danger">
                        @error('password')
                        {{$message}}
                        @enderror
                        </sp>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">confirm password</label>
                    <input type="password" name="confirmPassword" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <!-- <small id="helpId" class="text-muted">Help text</small> -->
                    <span class="text-danger">
                        @error('confirmPassword')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <h4 class="text-center">
                    <button class="btn btn-primary" type="submit">sumnit</button>
                </h4>
            </div>
        </form>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>