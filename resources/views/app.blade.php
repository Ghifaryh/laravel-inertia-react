<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @viteReactRefresh
    @vite('resources/js/app.jsx')
    {{-- @vite(['resources/css/app.css', 'resources/js/app.jsx']) --}}
    @inertiaHead
    @routes
</head>

<body>
    @inertia
</body>

</html>
