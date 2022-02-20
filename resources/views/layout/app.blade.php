<html >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    <title>VueJS </title>
    <link href="{{ mix('/css/app.css') }}" type="text/css" rel="stylesheet" />
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">--}}
    <script src="{{ mix('/js/app.js') }}" type="text/javascript"></script>
</head>

<body>
<div id="app">
    <example-component></example-component>
</div>

</body>

</html>