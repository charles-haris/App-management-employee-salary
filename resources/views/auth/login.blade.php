<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:700,600" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{asset('css/auth.css')}}">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">

        @csrf
        @method('POST')

        <div class="box">
            @if (Session::get('error_msg'))
                <p style="color:red; font-size:10px;"><b>{{Session::get('error_msg')}}</b></p>
            @endif
            {{Hash::make('1234')}}
            <h1>Login Page</h1>

            <input type="email" name="email" class="email" />

            <input type="password" name="password" class="email" />

            <div class="btn-container">
                <button type="submit"> Login</button>
            </div>

            <!-- End Btn -->
            <!-- End Btn2 -->
        </div>
        <!-- End Box -->
    </form>
</body>
</html>




