<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite([
    'resources/css/app.css', 
    'resources/js/app.js',
    'resources/js/CreateAccountModal',
    'resources/js/CreateSpendModal',
    'resources/js/spend',
    ])
</head>

<body class="font-sans w-[90%] mx-auto flex flex-col bg-neutral-100">
    {{ $slot }}
</body>

</html>
