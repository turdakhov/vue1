<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="h-full grid place-items-center bg-gray-800 text-white">
    <div id="app">
        <div class="grid gap-6">
            <assignments></assignments>
            <panel>
                This is my default content!
            </panel>

            <panel>
                <template v-slot:heading>
                    This is heading!
                </template>
                This is my default content!
            </panel>

            <panel theme="light">
                <template v-slot:heading>
                    This is heading!
                </template>
                This is my default content!
                <template v-slot:footer>
                    This is footer!
                </template>
            </panel>
        </div>
    </div>
</body>

</html>
