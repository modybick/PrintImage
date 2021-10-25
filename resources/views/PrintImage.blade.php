<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>PrintImage</title>
</head>

<body>
    <script src="{{ mix('js/app.js') }}"></script>
    <h1>PrintImage</h1>
    <div class="container">
        <form action="{{ url('') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="img">印刷する画像を選択</label>
                <input type="file" class="form-control-file is-invalid" id="img" name="img">
                @if (count($errors)>0)
                @foreach ($errors->all() as $error)
                <div class="invalid-feedback">{{$error}}</div>
                @endforeach
                @endif
                @if (Session::has('error'))
                <div class="invalid-feedback">{{Session::get('error')}}</div>
                @endif
            </div>
            <hr>
            <img id="preview" width="300px">
            <hr>
            <div>
                <button type="submit" class="btn btn-primary">印刷</button>
            </div>
        </form>
    </div>
</body>

</html>
