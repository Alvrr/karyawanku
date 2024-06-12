<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-black shadow-md h-full">
        <div class="p-6">
            <h2 class="text-2xl text-white font-bold mb-5">Dashboard</h2>
            <nav>
                <ul>
                    <li class="mb-4">
                        <a href="#" class=" text-white font-semibold hover:text-blue-500">Home</a>
                    </li>
                    <li class="mb-4">
                        <a href="profile" class="text-white font-semibold hover:text-blue-500">Profile</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="text-white font-semibold hover:text-blue-500">Settings</a>
                    </li>
                    <li class="mb-4">
                        <a href="logout" class="text-white font-semibold hover:text-blue-500">Logout</a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- Main Content -->
    <div class="flex-1 p-6 bg-gray-800">
        <!-- Header -->
        <header class="mb-6">
            <h1 class="text-3xl font-bold text-white">Welcome to the KaryawanKU</h1>
        </header>
        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-2">HRD</h2>
                <p class="text-gray-700">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-2">Manager</h2>
                <p class="text-gray-700">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-2">Karyawan</h2>
                <p class="text-gray-700">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <!-- Table -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-4">Data Table</h2>
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b border-gray-200 bg-gray-50">Name</th>
                        <th class="py-2 px-4 border-b border-gray-200 bg-gray-50">Email</th>
                        <th class="py-2 px-4 border-b border-gray-200 bg-gray-50">Role</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-200">John Doe</td>
                        <td class="py-2 px-4 border-b border-gray-200">john@example.com</td>
                        <td class="py-2 px-4 border-b border-gray-200">Admin</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-200">Jane Smith</td>
                        <td class="py-2 px-4 border-b border-gray-200">jane@example.com</td>
                        <td class="py-2 px-4 border-b border-gray-200">User</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-200">Bob Johnson</td>
                        <td class="py-2 px-4 border-b border-gray-200">bob@example.com</td>
                        <td class="py-2 px-4 border-b border-gray-200">Moderator</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </
