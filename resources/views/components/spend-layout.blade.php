<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    @vite([
    'resources/css/app.css', 
    'resources/js/app.js',
    'resources/js/CreateAccountModal',
    'resources/js/CreateSpendModal',
    'resources/js/spend',
    'resources/js/CreateCreditCard',
    'resources/js/spendActions/show',
    'resources/js/spendActions/delete',
    'resources/js/spendActions/edit',
    'resources/js/AccountActions/create',
    'resources/js/AccountActions/show',
    'resources/js/AccountActions/edit',
    'resources/js/AccountActions/delete',
    ])

    
</head>

<body class="font-sans w-[90%] mx-auto flex flex-col bg-white">
    {{ $slot }}
</body>

</html>
