<?php
$title = "Forgot Password";
include __DIR__  . '/../layouts/head.php';
?>

<body class="bg-slate-50 min-h-screen flex items-center justify-center p-4">
    <div class="max-w-md w-full">
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center p-3 bg-white text-navy-900 rounded-2xl mb-4 shadow-xl shadow-gray-200/50 border border-gray-100">
                <i class="fas fa-key text-2xl"></i>
            </div>
            <h1 class="text-2xl font-bold text-navy-900 tracking-tight">Reset Password</h1>
            <p class="text-gray-500 mt-1 max-w-[280px] mx-auto">Enter your email and we'll send you instructions to reset your password.</p>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow-xl shadow-gray-200/50 border border-gray-100">
            <form action="reset-password.html" class="space-y-6">
                <div>
                    <label class="form-label">Email Address</label>
                    <div class="relative">
                        <i class="fas fa-envelope absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-xs"></i>
                        <input type="email" class="form-input pl-10" placeholder="e.g. john@example.com" required>
                    </div>
                </div>

                <button type="submit" class="w-full bg-navy-900 text-white py-3 rounded-xl font-bold text-sm hover:bg-blue-800 shadow-lg shadow-navy-900/20 transition-all">
                    SEND INSTRUCTIONS
                </button>

                <a href="login.html" class="block text-center text-xs font-bold text-gray-400 hover:text-navy-900 uppercase tracking-widest transition-colors">
                    <i class="fas fa-arrow-left mr-2"></i> Back to Login
                </a>
            </form>
        </div>
    </div>
</body>

</html>