<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The covid 19 vaccination campaign</title>

    <base href="{{asset("")}}">
    
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">

</head>

<body>

<div class="container-fluid">
    <div class="row">
        <main class="col-md-6 mx-sm-auto px-4">
            <div class="pt-3 pb-2 mb-3 border-bottom text-center">
                <h1 class="h2">The covid 19 vaccination campaign</h1>
            </div>

            <form class="form-signin" action="{{route('login')}}" method="POST">
                @csrf
                @if(session()->get('login_error'))
                    <h1 class="h3 mb-3 font-weight-normal text-danger">{{session()->get('login_error')}}</h1>
                @else
                    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                @endif

                <label for="inputEmail" class="sr-only">Email</label>
                <input type="text" id="inputEmail" name="email" class="form-control" placeholder="Email" autofocus value="{{old('email')}}">
                <span class="text text-danger">
                    {{$errors->first('email')}}
                </span>

                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password">
                <span class="text text-danger">
                    {{$errors->first('password')}}
                </span>
                <button class="btn btn-lg btn-primary btn-block" id="login" type="submit">Sign in</button>
            </form>

        </main>
    </div>
</div>
</body>
</html>
