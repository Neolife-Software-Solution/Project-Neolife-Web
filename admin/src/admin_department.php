<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Department</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="tailwind.css" />

    <link rel="icon" href="resources/logo/favicon.png" />

</head>

<body class="bg-gray-100">

    <!-- Manage Department Section -->

    <div class="text-center py-10">

        <h1 class="text-3xl font-bold text-gray-700">Manage Department</h1>

        <div class="mt-6">

            <button class="bg-orange-500 text-white px-6 py-2 rounded-lg">Add New Department</button>

        </div>
        <div class="mt-4">

            <div class="bg-gray-300 inline-block">

                <input type="text" placeholder="HR Department"></div>

            <button class="bg-blue-500 text-white px-6 py-2 rounded-lg ml-2">Add Department</button>

        </div>

        <div class="mt-6">

            <button class="bg-blue-500 text-white px-6 py-2 rounded-lg">Our Departments</button>

        </div>

    </div>

    <!-- HR Department Section -->

    <div class="bg-white shadow-md rounded-lg max-w-5xl mx-auto p-6">

        <h2 class="text-center text-2xl font-bold text-gray-700">HR Department</h2>

        <div class="flex justify-between mt-6">

            <button class="bg-gray-200 text-gray-700 px-6 py-2 rounded-lg">Add New Employee</button>

            <button class="bg-gray-200 text-gray-700 px-6 py-2 rounded-lg">Add Job Roles</button>

            <button class="bg-blue-500 text-white px-6 py-2 rounded-lg">Add Employee</button>

        </div>

        <!-- Employee Table -->

        <div class="mt-6">

            <div class="grid grid-cols-8 gap-4 text-center text-gray-600">

                <div>Full Name</div>

                <div>Employee Id</div>

                <div>Join Date</div>

                <div>Position</div>

                <div>Availability</div>

                <div>Status</div>

                <div>Block/Un Block</div>

                <div>Remove Employee</div>

            </div>

            <div class="grid grid-cols-8 gap-4 mt-4 items-center text-center text-gray-700">

                <div>Saman Kumara</div>

                <div>101</div>

                <div>2024-01-01</div>

                <div>HR Manager</div>

                <div>Full-Time</div>

                <div >Online</div>

                <div>

                    <button class="bg-orange-500 text-white px-3 py-1 rounded-lg">Block</button>

                </div>

                <div>

                    <button class="bg-red-500 text-white px-3 py-1 rounded-lg">Remove</button>

                </div>

            </div>

        </div>

    </div>

</body>

</html>
