<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOQ Request</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="flex items-center justify-center min-h-screen p-5 bg-blue-100 min-w-screen">
    <div class="max-w-xl p-8 text-center text-gray-800 bg-white shadow-xl lg:max-w-3xl rounded-3xl lg:p-12">
        <h3 class="text-2xl">Thanks for BOQ Request!</h3>

        <p>Your BOQ Request is accepted!</p>
        <div class="mt-4">
            <a href="{{ route('user.boqs.show', $req->id) }}"
               class="px-2 py-2 text-blue-200 bg-blue-600 rounded">View</a>
            <p class="mt-4 text-sm">If you’re having trouble clicking the "View" button, copy
                and
                paste
                the URL below
                into your web browser:
                <a href="{{ route('user.boqs.show', $req->id) }}" class="text-blue-600 underline">{{ route('boqs.show', $req->id) }}</a>
            </p>
        </div>
    </div>
</div>
</body>
</html>
