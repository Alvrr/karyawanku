<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-blue-900 text-white min-h-screen p-4">
            <div class="text-lg font-bold mb-4">Admin Dashboard</div>
            <ul>
                <li><a href="#" class="block py-2 px-4 hover:bg-blue-700">Dashboard</a></li>
                <li><a href="#" class="block py-2 px-4 hover:bg-blue-700">Users</a></li>
                <li><a href="#" class="block py-2 px-4 hover:bg-blue-700">Settings</a></li>
            </ul>
        </div>

        <!-- Main content -->
        <div class="flex-1 p-6">
            @yield('content')
        </div>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
