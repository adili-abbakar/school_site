<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login | Academy</title>
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

<body class="bg-slate-100 min-h-screen flex items-center justify-center px-4">

    <!-- LOGIN CARD -->
    <div class="w-full max-w-md bg-white rounded-xl shadow-lg overflow-hidden">

        <!-- Header -->
        <div class="bg-slate-900 text-white px-6 py-6 text-center">
            <div class="flex justify-center mb-3">
                <i class="fas fa-graduation-cap text-3xl"></i>
            </div>
            <h1 class="text-xl font-semibold">Academy Portal</h1>
            <p class="text-sm text-slate-300 mt-1">Sign in to your account</p>
        </div>

        <!-- Form -->
        <form class="px-6 py-6 space-y-5" method="POST" action="login.php">

            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Email Address
                </label>
                <div class="relative">
                    <i class="fas fa-envelope absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    <input
                        type="email"
                        name="email"
                        required
                        placeholder="you@example.com"
                        class="w-full pl-10 pr-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
            </div>

            <!-- Password -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Password
                </label>
                <div class="relative">
                    <i class="fas fa-lock absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    <input
                        type="password"
                        name="password"
                        required
                        placeholder="••••••••"
                        class="w-full pl-10 pr-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
            </div>

            <!-- Remember + Forgot -->
            <div class="flex items-center justify-between text-sm">
                <label class="flex items-center gap-2">
                    <input type="checkbox" class="rounded border-gray-300 text-blue-600">
                    Remember me
                </label>
                <a href="#" class="text-blue-600 hover:underline">
                    Forgot password?
                </a>
            </div>

            <!-- Submit -->
            <button
                type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg font-medium transition">
                Sign In
            </button>

        </form>

        <!-- Footer -->
        <div class="px-6 py-4 bg-gray-50 text-center text-sm text-gray-600">
            © 2025 Academy Management System
        </div>

    </div>

</body>

</html>