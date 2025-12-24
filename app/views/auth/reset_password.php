<?php
$title  = 'Reset Password';
include  __DIR__ . '/../layouts/head.php';
?>

<body class="min-h-screen bg-gray-100 flex items-center justify-center px-4">

    <div class="w-full max-w-md rounded-2xl bg-white/90 backdrop-blur shadow-xl overflow-hidden">

        <!-- Header -->
        <div class="rounded-t-2xl bg-gray-900 px-6 py-8 text-center text-white">
            <div class="mb-3 flex justify-center">
                <i class="fas fa-unlock-alt text-4xl"></i>
            </div>
            <h1 class="text-2xl font-bold tracking-tight">Reset Password</h1>
            <p class="mt-1 text-sm text-gray-300">
                Enter your new password below
            </p>
        </div>

        <!-- Form -->
        <form class="px-6 py-8 space-y-6" method="POST" action="/reset-password">

            <!-- Hidden token -->
            <input type="hidden" name="token" value="<?= htmlspecialchars($_GET['token'] ?? '') ?>">

            <!-- New Password -->
            <div class="space-y-1">
                <label class="text-sm font-medium text-gray-700">
                    New Password
                </label>
                <div class="relative">
                    <i class="fas fa-lock absolute left-3 top-1/2 -translate-y-1/2 text-gray-400  px-2"></i>
                    <input
                        type="password"
                        name="password"
                        required
                        placeholder="••••••••"
                        class="w-full rounded-xl border border-gray-300 bg-white py-2.5 pl-10 pr-3
                               text-gray-900 placeholder-gray-400
                               focus:border-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-100 px-8 py-2">
                </div>
            </div>

            <!-- Confirm Password -->
            <div class="space-y-1">
                <label class="text-sm font-medium text-gray-700">
                    Confirm Password
                </label>
                <div class="relative">
                    <i class="fas fa-lock absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 px-2"></i>
                    <input
                        type="password"
                        name="password_confirmation"
                        required
                        placeholder="••••••••"
                        class="w-full rounded-xl border border-gray-300 bg-white py-2.5 pl-10 pr-3
                               text-gray-900 placeholder-gray-400
                               focus:border-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-100  px-8 py-2">
                </div>
            </div>

            <!-- Submit -->
            <button
                type="submit"
                class="w-full rounded-lg bg-blue-600 py-2 text-white font-semibold
                       hover:bg-blue-700 active:bg-blue-800
                       transition focus:outline-none focus:ring-4 focus:ring-blue-200">
                Reset Password
            </button>

            <!-- Back to login -->
            <p class="text-center text-sm text-gray-600">
                <a href="<?= $router->url('login') ?>" class="text-blue-600 hover:underline">Back to login</a>
            </p>
        </form>

        <!-- Footer -->
        <div class="rounded-b-2xl bg-gray-50 px-6 py-4 text-center text-sm text-gray-500">
            © 2025 Academy Management System
        </div>

    </div>

</body>

</html>