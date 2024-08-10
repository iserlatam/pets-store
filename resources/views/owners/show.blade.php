<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our owners</title>
    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-800 p-10">

    <div class="flex flex-col gap-4 text-white">
        <h1 class="mb-10 text-white text-4xl font-bold">
            {{ $owner->name }}
        </h1>
        <p>
            <b>City: </b> {{ $owner->city }}
        </p>
        <p>
            <b>Phone number: </b> {{ $owner->phone_number }}
        </p>
    </div>

</body>

</html>

