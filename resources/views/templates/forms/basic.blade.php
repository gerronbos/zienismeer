<!DOCTYPE html>
<html style="margin:0;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zienismeer.nl</title>
    <link rel="stylesheet" href="/forms_layouts/basic/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/forms_layouts/basic/assets/css/styles.min.css">

    @yield("head")
</head>

<body @if(isset($body_id) && $body_id) id="{{$body_id}}" @endif @if(isset($body_class) && $body_class) class="{{$body_class}}" @endif>
    @yield("content")
    <div></div>
    <script src="/forms_layouts/basic/assets/js/jquery.min.js"></script>
    <script src="/forms_layouts/basic/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/forms_layouts/basic/assets/js/script.min.js"></script>
</body>

</html>