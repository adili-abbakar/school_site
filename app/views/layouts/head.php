<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'School Site' ?></title>
    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="<?= $router->asset('asset/css/tailwind.css') ?>">
    <link rel="stylesheet" href="<?= $router->asset('asset/css/fontawesome.css') ?>">
    <link rel="stylesheet" href="<?= $router->asset('asset/css/tom-select.css') ?>">
    <link src="<?= $router->asset('asset/js/tom-select.complete.min.js') ?>">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        }

        /* Sidebar transition */
        .sidebar {
            transition: width 0.3s ease;
            width: 14rem;
        }

        .sidebar.collapsed {
            width: 5rem;
        }

        /* Sidebar text fade transition */
        .sidebar-text {
            transition: opacity 0.3s ease, visibility 0.3s ease;
            opacity: 1;
            visibility: visible;
        }

        .sidebar.collapsed .sidebar-text {
            opacity: 0;
            visibility: hidden;
        }

        /* Menu item dropdown transition */
        .menu-item-content {
            max-height: 500px;
            overflow: hidden;
            transition: max-height 0.3s ease, opacity 0.3s ease;
            opacity: 1;
        }

        .menu-item-content.collapsed {
            max-height: 0;
            opacity: 0;
        }

        /* Chevron rotation */
        .chevron-icon {
            transition: transform 0.3s ease;
        }

        .chevron-icon.rotated {
            transform: rotate(180deg);
        }

        /* Content main area */
        .main-content {
            transition: margin-left 0.3s ease;
        }

        /* Small text utility */
        .text-xs {
            font-size: 0.75rem;
        }

        .text-sm {
            font-size: 0.875rem;
        }
    </style>
</head>

<body class="bg-white text-gray-800">