<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>School Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Sora', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800 text-sm">

    <div class="flex h-screen overflow-hidden">

        <!-- SIDEBAR -->
        <aside id="sidebar"
            class="w-64 bg-slate-900 text-slate-200 flex flex-col transition-all duration-300">

            <!-- Sidebar Header -->
            <div class="flex items-center justify-between px-4 py-4 border-b border-slate-700">
                <div class="flex items-center gap-3">
                    <i class="fas fa-graduation-cap text-xl"></i>
                    <span class="font-semibold text-lg sidebar-text">Academy</span>
                </div>
                <button id="toggleBtn" class="text-slate-300 hover:text-white">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

            <!-- Sidebar Menu -->
            <div class="flex-1 overflow-y-auto px-2 py-4 space-y-2">

                <!-- Menu Section -->
                <div>
                    <button class="menu-toggle flex items-center w-full gap-3 px-3 py-2 rounded hover:bg-slate-800">
                        <i class="fas fa-users w-5"></i>
                        <span class="flex-1 text-left sidebar-text">Users Management</span>
                        <i class="fas fa-chevron-down chevron transition-transform duration-300"></i>
                    </button>
                    <div class="menu-content max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out pl-10 space-y-1">

                        <a href="#" class="block px-2 py-1 rounded hover:bg-slate-800">Teachers</a>
                        <a href="#" class="block px-2 py-1 rounded hover:bg-slate-800">Students</a>
                        <a href="#" class="block px-2 py-1 rounded hover:bg-slate-800">Staff</a>
                        <a href="#" class="block px-2 py-1 rounded hover:bg-slate-800">Admins</a>
                    </div>
                </div>

                <div>
                    <button class="menu-toggle flex items-center w-full gap-3 px-3 py-2 rounded hover:bg-slate-800">
                        <i class="fas fa-file-contract w-5"></i>
                        <span class="flex-1 text-left sidebar-text">Admission</span>
                        <i class="fas fa-chevron-down chevron transition-transform duration-300"></i>
                    </button>
                    <div class="menu-content max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out pl-10 space-y-1">

                        <a href="#" class="block px-2 py-1 rounded hover:bg-slate-800">Applications</a>
                        <a href="#" class="block px-2 py-1 rounded hover:bg-slate-800">Approvals</a>
                        <a href="#" class="block px-2 py-1 rounded hover:bg-slate-800">Enrollment</a>
                    </div>
                </div>

                <div>
                    <button class="menu-toggle flex items-center w-full gap-3 px-3 py-2 rounded hover:bg-slate-800">
                        <i class="fas fa-chart-line w-5"></i>
                        <span class="flex-1 text-left sidebar-text">Results</span>
                        <i class="fas fa-chevron-down chevron transition-transform duration-300"></i>
                    </button>
                    <div class="menu-content max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out pl-10 space-y-1">

                        <a href="#" class="block px-2 py-1 rounded hover:bg-slate-800">Marks</a>
                        <a href="#" class="block px-2 py-1 rounded hover:bg-slate-800">Reports</a>
                    </div>
                </div>

            </div>
        </aside>

        <!-- MAIN CONTENT -->
        <main class="flex-1 flex flex-col overflow-hidden">

            <!-- TOP BAR -->
            <header class="bg-white border-b px-6 py-3 flex items-center justify-between">
                <h1 class="text-2xl font-bold">Dashboard</h1>
                <div class="flex items-center gap-4">
                    <input type="text"
                        placeholder="Search..."
                        class="border rounded-lg px-4 py-2 text-sm focus:ring-2 focus:ring-blue-500 outline-none">
                    <button class="relative">
                        <i class="fas fa-bell text-lg"></i>
                        <span class="absolute top-0 right-0 w-2 h-2 bg-red-500 rounded-full"></span>
                    </button>
                    <div class="w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
            </header>

            <!-- CONTENT -->
            <div class="flex-1 overflow-y-auto p-6 space-y-6">

                <!-- STATS -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="bg-white p-4 rounded-lg shadow">
                        <p class="text-sm text-gray-500">Students</p>
                        <p class="text-2xl font-bold">1,250</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow">
                        <p class="text-sm text-gray-500">Teachers</p>
                        <p class="text-2xl font-bold">85</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow">
                        <p class="text-sm text-gray-500">Subjects</p>
                        <p class="text-2xl font-bold">42</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow">
                        <p class="text-sm text-gray-500">Pending</p>
                        <p class="text-2xl font-bold">12</p>
                    </div>
                </div>

                <!-- TABLE -->
                <div class="bg-white rounded-lg shadow overflow-x-auto">
                    <div class="p-4 border-b font-semibold">Recent Activity</div>
                    <table class="w-full text-sm">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="p-3 text-left">User</th>
                                <th class="p-3 text-left">Action</th>
                                <th class="p-3 text-left">Date</th>
                                <th class="p-3 text-left">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-t hover:bg-gray-50">
                                <td class="p-3">John Doe</td>
                                <td class="p-3">Added Student</td>
                                <td class="p-3">Dec 20</td>
                                <td class="p-3"><span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">Completed</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </main>

    </div>

    <!-- JS -->
    <script>
        const sidebar = document.getElementById('sidebar');
        const toggleBtn = document.getElementById('toggleBtn');
        const menuToggles = document.querySelectorAll('.menu-toggle');

        // Sidebar collapse
        toggleBtn.onclick = () => {
            const isCollapsed = sidebar.classList.contains('w-20');

            sidebar.classList.toggle('w-64');
            sidebar.classList.toggle('w-20');

            // Hide text
            document.querySelectorAll('.sidebar-text').forEach(el => {
                el.classList.toggle('hidden');
            });

            // Close ALL dropdowns when collapsing
            if (!isCollapsed) {
                document.querySelectorAll('.menu-content').forEach(menu => {
                    menu.classList.remove('max-h-40', 'opacity-100');
                    menu.classList.add('max-h-0', 'opacity-0');
                });

                document.querySelectorAll('.chevron').forEach(icon => {
                    icon.classList.remove('rotate-180');
                });
            }
        };

        // Dropdown toggle
        menuToggles.forEach(btn => {
            btn.onclick = () => {
                const menu = btn.nextElementSibling;
                const chevron = btn.querySelector('.chevron');
                const isOpen = menu.classList.contains('max-h-40');

                // Close others
                document.querySelectorAll('.menu-content').forEach(m => {
                    m.classList.remove('max-h-40', 'opacity-100');
                    m.classList.add('max-h-0', 'opacity-0');
                });

                document.querySelectorAll('.chevron').forEach(c => {
                    c.classList.remove('rotate-180');
                });

                // Toggle current
                if (!isOpen) {
                    menu.classList.remove('max-h-0', 'opacity-0');
                    menu.classList.add('max-h-40', 'opacity-100');
                    chevron.classList.add('rotate-180');
                }
            };
        });
    </script>

</body>

</html>