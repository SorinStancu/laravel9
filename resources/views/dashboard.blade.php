<html >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    <title>VueJS CRUD Operations in Laravel</title>
    <link href="{{ mix('/css/app.css') }}" type="text/css" rel="stylesheet" />
</head>

<body>
<div id="app">
</div>
<div>xxxxxxxx</div>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <router-view v-slot="{ Component, route }">
            </div>
        </div>
    </div>
</div>
<script src="{{ mix('/js/app.js') }}" type="text/javascript"></script>
</body>

</html>