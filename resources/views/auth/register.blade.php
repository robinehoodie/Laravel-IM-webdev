<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Timbertrack - Login</title>

    <link rel="stylesheet" href="{{asset('css/class.css')}}">
</head>

<body>
    <center>
        <h1>Register</h1>
        <form action="{{    route('register')  }}" method="post">
            <center>
                {{ csrf_field() }}
                <label for="name">Name</label><br>
                <input type="text" name="name" class="@error('name') border-red @enderror"
                    value="{{ old('name') }}"><br>
                @error('name')
                <div class="color-red">{{$message}}</div>
                @enderror
                <label for="username">Username</label><br>
                <input type="text" name="username" class="@error('username') border-red @enderror"
                    value="{{ old('username') }}"><br>
                @error('username')
                <div class="color-red">{{$message}}</div>
                @enderror
                <label for="email">Email</label><br>
                <input type="text" name="email" class="@error('email') border-red @enderror"
                    value="{{ old('email') }}"><br>
                @error('email')
                <div class="color-red">{{$message}}</div>
                @enderror
                <label for="password">Password</label><br>
                <input type="password" name="password" class="@error('password') border-red @enderror" value=""><br>
                @error('password')
                <div class="color-red">{{$message}}</div>
                @enderror
                <label for="password_confirmation">Confirm Password</label><br>
                <input type="password" name="password_confirmation" class="" value=""><br>
                <button type="submit">Submit</button>
            </center>
        </form>
    </center>
</body>

</html>
