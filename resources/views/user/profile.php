<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-3xl">
        <div class="flex items-center">
            <img class="w-24 h-24 rounded-full mr-4" src="https://via.placeholder.com/100" alt="Profile Picture">
            <div>
                <h2 class="text-2xl font-bold text-gray-900">Rizqi Iqmal Fauzan</h2>
                <p class="text-gray-600">rizqiiqmal850@gmail.com</p>
                <p class="text-gray-600">Bandung Barat, Indonesia</p>
            </div>
        </div>
        <div class="mt-6">
            <h3 class="text-xl font-semibold text-gray-900 mb-4">About Me</h3>
            <p class="text-gray-700 mb-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.
            </p>
            <h3 class="text-xl font-semibold text-gray-900 mb-4">Skills</h3>
            <ul class="list-disc list-inside text-gray-700 mb-4">
                <li>JavaScript</li>
                <li>React</li>
                <li>Node.js</li>
                <li>Python</li>
            </ul>
            <h3 class="text-xl font-semibold text-gray-900 mb-4">Experience</h3>
            <div class="mb-4">
                <h4 class="font-bold text-gray-900">Software Engineer at microsoft</h4>
                <p class="text-gray-700">Jan 2027 - Present</p>
                <p class="text-gray-700">
                    Working on developing web applications using modern technologies such as React and Node.js.
                </p>
            </div>
            <div class="mb-4">
                <h4 class="font-bold text-gray-900">Frontend Developer at XYZ Inc</h4>
                <p class="text-gray-700">Jun 2018 - Dec 2019</p>
                <p class="text-gray-700">
                    Focused on creating responsive web designs and improving user experience.
                </p>
            </div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                Edit Profile
            </button>
        </div>
    </div>
</body>
</html>
