<?php
/**
 * Modern Base Layout for OSPOS Dashboard
 *
 * This template provides the foundation for all dashboard pages.
 * It includes responsive navigation, sidebar, and main content area.
 */
?>
<!DOCTYPE html>
<html lang="<?= $request->getLocale() ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#6366f1">
    <title><?= isset($page_title) ? $page_title . ' | ' : '' ?><?= esc($config['company']) ?> - <?= lang('Common.software_short') ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('images/favicon.ico') ?>">

    <!-- Modern CSS Framework -->
    <link rel="stylesheet" href="<?= base_url('css/modern-theme.css') ?>">

    <!-- Dashboard Specific Styles -->
    <style>
        .wrapper {
            display: flex;
            min-height: 100vh;
            background-color: var(--surface-secondary);
        }

        .sidebar {
            width: 280px;
            background-color: var(--surface-primary);
            border-right: 1px solid var(--border-color);
            padding: var(--spacing-xl) 0;
            max-height: 100vh;
            overflow-y: auto;
            position: sticky;
            top: 0;
            transition: all 0.3s ease;
            z-index: 100;
        }

        .sidebar-header {
            display: flex;
            align-items: center;
            gap: var(--spacing-md);
            padding: var(--spacing-lg) var(--spacing-xl);
            margin-bottom: var(--spacing-lg);
            border-bottom: 1px solid var(--border-color);
        }

        .sidebar-logo {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%);
            border-radius: var(--radius-lg);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            font-size: 1.5rem;
            flex-shrink: 0;
        }

        .sidebar-brand {
            font-weight: 700;
            font-size: 1.125rem;
            color: var(--text-primary);
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .sidebar-brand-small {
            font-size: 0.75rem;
            color: var(--text-tertiary);
            margin-top: 0.125rem;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 70px;
            background-color: var(--surface-primary);
            border-bottom: 1px solid var(--border-color);
            padding: 0 var(--spacing-2xl);
            box-shadow: var(--shadow-sm);
            position: sticky;
            top: 0;
            z-index: 50;
        }

        .navbar-left {
            display: flex;
            align-items: center;
            gap: var(--spacing-lg);
            flex: 1;
        }

        .navbar-toggle {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            color: var(--text-primary);
            font-size: 1.5rem;
        }

        .navbar-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-primary);
            margin: 0;
        }

        .navbar-right {
            display: flex;
            align-items: center;
            gap: var(--spacing-lg);
        }

        .navbar-search {
            display: flex;
            align-items: center;
            gap: var(--spacing-sm);
            background-color: var(--surface-secondary);
            border-radius: var(--radius-lg);
            padding: 0.5rem var(--spacing-md);
            min-width: 300px;
        }

        .navbar-search input {
            background: none;
            border: none;
            outline: none;
            color: var(--text-primary);
            width: 100%;
        }

        .navbar-search svg {
            color: var(--text-tertiary);
            width: 1.25rem;
            height: 1.25rem;
            flex-shrink: 0;
        }

        .navbar-icons {
            display: flex;
            align-items: center;
            gap: var(--spacing-lg);
        }

        .navbar-icon-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 2.5rem;
            height: 2.5rem;
            border-radius: var(--radius-lg);
            background-color: var(--surface-secondary);
            border: none;
            cursor: pointer;
            color: var(--text-primary);
            transition: all var(--transition-base);
            position: relative;
        }

        .navbar-icon-btn:hover {
            background-color: var(--primary-50);
            color: var(--primary);
        }

        .navbar-avatar {
            display: flex;
            align-items: center;
            gap: var(--spacing-md);
            cursor: pointer;
            padding: 0.375rem var(--spacing-md);
            border-radius: var(--radius-lg);
            transition: all var(--transition-base);
        }

        .navbar-avatar:hover {
            background-color: var(--surface-secondary);
        }

        .navbar-avatar-img {
            width: 2rem;
            height: 2rem;
            border-radius: var(--radius-full);
            object-fit: cover;
        }

        .navbar-avatar-name {
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--text-primary);
        }

        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .content {
            flex: 1;
            overflow-y: auto;
            padding: var(--spacing-2xl);
            background-color: var(--surface-secondary);
        }

        .breadcrumb {
            display: flex;
            align-items: center;
            gap: var(--spacing-sm);
            margin-bottom: var(--spacing-lg);
            font-size: 0.9rem;
        }

        .breadcrumb-item {
            color: var(--text-tertiary);
        }

        .breadcrumb-item a {
            color: var(--primary);
        }

        .breadcrumb-item.active {
            color: var(--text-primary);
            font-weight: 600;
        }

        .breadcrumb-separator {
            color: var(--text-tertiary);
            margin: 0 var(--spacing-xs);
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: var(--spacing-2xl);
            padding-bottom: var(--spacing-lg);
            border-bottom: 1px solid var(--border-color);
        }

        .page-title-section h1 {
            font-size: 1.75rem;
            margin: 0;
            color: var(--text-primary);
        }

        .page-title-section p {
            margin: 0.25rem 0 0;
            font-size: 0.95rem;
            color: var(--text-secondary);
        }

        .page-actions {
            display: flex;
            align-items: center;
            gap: var(--spacing-md);
        }

        .notification-badge {
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            width: 1.5rem;
            height: 1.5rem;
            background-color: var(--danger);
            color: white;
            border-radius: var(--radius-full);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            font-weight: 700;
        }

        .sidebar-nav {
            list-style: none;
        }

        .sidebar-nav-item {
            display: flex;
            align-items: center;
            gap: var(--spacing-md);
            padding: var(--spacing-md) var(--spacing-xl);
            color: var(--text-secondary);
            cursor: pointer;
            transition: all var(--transition-base);
            border-left: 3px solid transparent;
            margin: 0.25rem var(--spacing-lg);
            border-radius: 0 var(--radius-lg) var(--radius-lg) 0;
            font-weight: 600;
        }

        .sidebar-nav-item:hover,
        .sidebar-nav-item.active {
            color: var(--primary);
            background-color: var(--primary-50);
            border-left-color: var(--primary);
        }

        .sidebar-nav-icon {
            width: 1.25rem;
            height: 1.25rem;
            flex-shrink: 0;
        }

        .sidebar-nav-label {
            flex: 1;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .sidebar-nav-badge {
            background-color: var(--danger);
            color: white;
            font-size: 0.75rem;
            padding: 0.25rem 0.5rem;
            border-radius: var(--radius-full);
            font-weight: 700;
        }

        /* Scrollbar Styling */
        .sidebar::-webkit-scrollbar,
        .content::-webkit-scrollbar {
            width: 6px;
        }

        .sidebar::-webkit-scrollbar-track,
        .content::-webkit-scrollbar-track {
            background: var(--surface-tertiary);
        }

        .sidebar::-webkit-scrollbar-thumb,
        .content::-webkit-scrollbar-thumb {
            background: var(--border-color);
            border-radius: 3px;
        }

        .sidebar::-webkit-scrollbar-thumb:hover,
        .content::-webkit-scrollbar-thumb:hover {
            background: var(--border-color-dark);
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .navbar-search {
                min-width: 200px;
            }

            .navbar-title {
                font-size: 1rem;
            }
        }

        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                left: -280px;
                width: 280px;
                height: 100vh;
                top: 70px;
                transition: left 0.3s ease;
                box-shadow: var(--shadow-lg);
                z-index: 99;
            }

            .sidebar.active {
                left: 0;
            }

            .navbar-toggle {
                display: flex;
            }

            .navbar-search {
                min-width: auto;
                flex: 1;
                max-width: 150px;
            }

            .content {
                padding: var(--spacing-lg);
            }

            .page-header {
                flex-direction: column;
                align-items: flex-start;
                gap: var(--spacing-lg);
            }

            .page-actions {
                width: 100%;
            }

            .page-actions .btn {
                flex: 1;
                width: 100%;
            }
        }

        @media (max-width: 576px) {
            .navbar {
                padding: 0 var(--spacing-lg);
                height: 60px;
            }

            .navbar-left {
                gap: var(--spacing-md);
            }

            .navbar-right {
                gap: var(--spacing-sm);
            }

            .navbar-search {
                display: none;
            }

            .navbar-avatar-name {
                display: none;
            }

            .content {
                padding: var(--spacing-md);
            }

            .page-title-section h1 {
                font-size: 1.5rem;
            }

            .card {
                border-radius: var(--radius-lg);
            }

            .sidebar-brand-small {
                display: none;
            }
        }
    </style>

    <?php if (isset($additional_css)): ?>
        <?php foreach ($additional_css as $css): ?>
            <link rel="stylesheet" href="<?= $css ?>">
        <?php endforeach; ?>
    <?php endif; ?>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar Navigation -->
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <div class="sidebar-logo">
                    <?php if (isset($config['company_logo']) && !empty($config['company_logo'])): ?>
                        <img src="<?= base_url('uploads/' . $config['company_logo']) ?>" alt="<?= $config['company'] ?>" style="width: 100%; height: 100%; object-fit: contain; border-radius: 0.375rem;">
                    <?php else: ?>
                        <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 6.75H7a.75.75 0 000 1.5h6a.75.75 0 000-1.5zM13 9.5H7a.75.75 0 000 1.5h6a.75.75 0 000-1.5zM13 12.25H7a.75.75 0 000 1.5h6a.75.75 0 000-1.5z"></path>
                            <path fill-rule="evenodd" d="M5.75 2a2.25 2.25 0 00-2.25 2.25v14.5A2.25 2.25 0 005.75 21h8.5a2.25 2.25 0 002.25-2.25V4.25a2.25 2.25 0 00-2.25-2.25h-8.5zm0 1.5h8.5a.75.75 0 01.75.75v14.5a.75.75 0 01-.75.75h-8.5a.75.75 0 01-.75-.75V4.25a.75.75 0 01.75-.75z" clip-rule="evenodd"></path>
                        </svg>
                    <?php endif; ?>
                </div>
                <div>
                    <div class="sidebar-brand"><?= $config['company'] ?? 'OSPOS' ?></div>
                    <div class="sidebar-brand-small"><?= lang('Common.software_short') ?></div>
                </div>
            </div>

            <nav class="sidebar-nav">
                <div class="sidebar-nav-item active">
                    <svg class="sidebar-nav-icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                    </svg>
                    <span class="sidebar-nav-label"><?= lang('Common.dashboard') ?></span>
                </div>

                <div class="sidebar-nav-item">
                    <svg class="sidebar-nav-icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 6H6.28l-.31-1.243A1 1 0 005 4H3z"></path>
                        <path d="M16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path>
                    </svg>
                    <span class="sidebar-nav-label"><?= lang('Common.sales') ?></span>
                </div>

                <div class="sidebar-nav-item">
                    <svg class="sidebar-nav-icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"></path>
                    </svg>
                    <span class="sidebar-nav-label"><?= lang('Common.items') ?></span>
                </div>

                <div class="sidebar-nav-item">
                    <svg class="sidebar-nav-icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM9 10a3 3 0 11-6 0 3 3 0 016 0zM12.9 1.1a.5.5 0 01.5-.5h6a.5.5 0 01.5.5v6a.5.5 0 01-.5.5h-6a.5.5 0 01-.5-.5v-6zM17.6 4.7a1 1 0 10-2 0 1 1 0 002 0z"></path>
                    </svg>
                    <span class="sidebar-nav-label"><?= lang('Common.customers') ?></span>
                </div>

                <div class="sidebar-nav-item">
                    <svg class="sidebar-nav-icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 6H6.28l-.31-1.243A1 1 0 005 4H3z"></path>
                    </svg>
                    <span class="sidebar-nav-label"><?= lang('Common.reports') ?></span>
                </div>

                <div class="sidebar-nav-item">
                    <svg class="sidebar-nav-icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M11.49 3.08C9.5 1.605 6.64 1.43 4.54 3.1c-2.1 1.67-2.28 4.57-.63 6.57m11.07 0c1.65-2-1.47-5.83-4.47-7.5M2.5 7a4.5 4.5 0 1 0 9 0 4.5 4.5 0 0 0-9 0zm9.8 7.6c-.8.4-1.6.7-2.3 1a5.5 5.5 0 1 1 4.7-2.1.5.5 0 0 1-.7.4 3.5 3.5 0 0 0-1.7.7z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sidebar-nav-label"><?= lang('Common.settings') ?></span>
                </div>
            </nav>
        </aside>

        <!-- Main Content Area -->
        <div class="main-content">
            <!-- Top Navbar -->
            <nav class="navbar">
                <div class="navbar-left">
                    <button class="navbar-toggle" id="sidebarToggle">
                        <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"></path>
                        </svg>
                    </button>
                    <h1 class="navbar-title"><?= $page_title ?? 'Dashboard' ?></h1>
                </div>

                <div class="navbar-right">
                    <div class="navbar-search">
                        <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"></path>
                        </svg>
                        <input type="text" placeholder="<?= lang('Common.search') ?>...">
                    </div>

                    <div class="navbar-icons">
                        <button class="navbar-icon-btn" title="<?= lang('Common.notifications') ?>">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5 1.5H9.5a1 1 0 00-1 1v1.814a6.5 6.5 0 00-5.5 6.436V12a6 6 0 01-3 5.197V18a1 1 0 001 1h4.75a.75.75 0 000-1.5H.5v-1.303A7 7 0 0110.5 3.5a7 7 0 110 14 7 7 0 01-7-7v-.5h4.75a.75.75 0 000-1.5H.5V9.75a6 6 0 016-6v-1.25a1 1 0 00-1-1zM14 14H6v1a2 2 0 11-4 0v-1H.5V9.75h12v4.25z"></path>
                            </svg>
                            <span class="notification-badge">3</span>
                        </button>

                        <button class="navbar-icon-btn" title="<?= lang('Common.settings') ?>">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M11.49 3.08C9.5 1.605 6.64 1.43 4.54 3.1c-2.1 1.67-2.28 4.57-.63 6.57m11.07 0c1.65-2-1.47-5.83-4.47-7.5M2.5 7a4.5 4.5 0 1 0 9 0 4.5 4.5 0 0 0-9 0zm9.8 7.6c-.8.4-1.6.7-2.3 1a5.5 5.5 0 1 1 4.7-2.1.5.5 0 0 1-.7.4 3.5 3.5 0 0 0-1.7.7z" clip-rule="evenodd"></path>
                            </svg>
                        </button>

                        <div class="navbar-avatar">
                            <img src="<?= base_url('images/avatar.png') ?>" alt="<?= $user_info->username ?? 'User' ?>" class="navbar-avatar-img">
                            <span class="navbar-avatar-name"><?= $user_info->username ?? 'Admin' ?></span>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Content -->
            <div class="content">
                <?= view('partial/breadcrumb', isset($breadcrumb) ? ['breadcrumb' => $breadcrumb] : []) ?>
                <?php if (isset($errors) && !empty($errors)): ?>
                    <?php foreach ($errors as $error): ?>
                        <div class="alert alert-danger">
                            <svg class="alert-icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                            </svg>
                            <div><?= $error ?></div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

                <?= $this->renderSection('content') ?>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script>
        // Sidebar Toggle
        document.getElementById('sidebarToggle')?.addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('active');
        });

        // Close sidebar on link click (mobile)
        if (window.innerWidth <= 768) {
            document.querySelectorAll('.sidebar-nav-item').forEach(item => {
                item.addEventListener('click', function() {
                    document.getElementById('sidebar').classList.remove('active');
                });
            });
        }

        // Close sidebar when clicking outside
        document.addEventListener('click', function(event) {
            const sidebar = document.getElementById('sidebar');
            const toggle = document.getElementById('sidebarToggle');
            if (!sidebar?.contains(event.target) && !toggle?.contains(event.target)) {
                sidebar?.classList.remove('active');
            }
        });

        // ==============================
        // PREMIUM DASHBOARD ENHANCEMENTS
        // ==============================

        // Update current date and time
        function updateDateTime() {
            const dateDisplay = document.getElementById('currentDate');
            const timeDisplay = document.getElementById('currentTime');
            
            if (dateDisplay || timeDisplay) {
                const now = new Date();
                const options = { 
                    weekday: 'short', 
                    year: 'numeric', 
                    month: 'short', 
                    day: 'numeric' 
                };
                
                if (dateDisplay) {
                    dateDisplay.textContent = now.toLocaleDateString('en-US', options);
                }
                
                if (timeDisplay) {
                    const timeOptions = { 
                        hour: '2-digit', 
                        minute: '2-digit',
                        second: '2-digit',
                        hour12: true
                    };
                    timeDisplay.textContent = now.toLocaleTimeString('en-US', timeOptions);
                }
            }
        }

        // Update time every second
        updateDateTime();
        setInterval(updateDateTime, 1000);

        // Add animations to stat cards on load
        function animateStatCards() {
            const statCards = document.querySelectorAll('.stat-card');
            statCards.forEach((card, index) => {
                setTimeout(() => {
                    card.style.animation = 'fadeInUp 0.6s ease-out forwards';
                }, index * 100);
            });
        }

        // Add animations to activity feed items
        function animateActivityItems() {
            const activityItems = document.querySelectorAll('.activity-item');
            activityItems.forEach((item, index) => {
                setTimeout(() => {
                    item.style.animation = 'slideInLeft 0.5s ease-out forwards';
                }, index * 50);
            });
        }

        // Add smooth scroll behavior
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });

        // Product item hover effects
        function setupProductItemInteractions() {
            const productItems = document.querySelectorAll('.product-item');
            productItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateX(8px)';
                });
                item.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateX(0)';
                });
            });
        }

        // Chart bar animation on hover
        function setupChartBarInteractions() {
            const bars = document.querySelectorAll('.bar');
            bars.forEach(bar => {
                bar.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-6px)';
                    this.style.boxShadow = '0 10px 20px rgba(102, 126, 234, 0.3)';
                });
                bar.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                    this.style.boxShadow = 'none';
                });
            });
        }

        // Quick action button ripple effect
        function setupQuickActionButtons() {
            const quickActionBtns = document.querySelectorAll('.quick-action-btn');
            quickActionBtns.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    const ripple = document.createElement('span');
                    ripple.style.position = 'absolute';
                    ripple.style.borderRadius = '50%';
                    ripple.style.background = 'rgba(255, 255, 255, 0.6)';
                    
                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.offsetX - size / 2;
                    const y = e.offsetY - size / 2;
                    
                    ripple.style.width = ripple.style.height = size + 'px';
                    ripple.style.left = x + 'px';
                    ripple.style.top = y + 'px';
                    ripple.style.animation = 'ripple 0.6s ease-out';
                    ripple.style.pointerEvents = 'none';
                    
                    this.appendChild(ripple);
                    setTimeout(() => ripple.remove(), 600);
                });
            });
        }

        // Add CSS for ripple animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes ripple {
                0% {
                    transform: scale(0);
                    opacity: 1;
                }
                100% {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);

        // Initialize all interactive elements when DOM is ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', function() {
                animateStatCards();
                animateActivityItems();
                setupProductItemInteractions();
                setupChartBarInteractions();
                setupQuickActionButtons();
            });
        } else {
            animateStatCards();
            animateActivityItems();
            setupProductItemInteractions();
            setupChartBarInteractions();
            setupQuickActionButtons();
        }

        // Keyboard shortcuts
        document.addEventListener('keydown', function(e) {
            // Ctrl+K or Cmd+K for quick search in dashboard
            if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
                e.preventDefault();
                const searchInput = document.querySelector('.navbar-search input');
                if (searchInput) {
                    searchInput.focus();
                }
            }
        });

        // Track scroll position for animations
        let lastScrollTop = 0;
        window.addEventListener('scroll', function() {
            lastScrollTop = window.scrollY;
            
            // Add subtle animations on scroll
            const cards = document.querySelectorAll('.card-advanced');
            cards.forEach(card => {
                const rect = card.getBoundingClientRect();
                if (rect.top < window.innerHeight * 0.8) {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }
            });
        });
    </script>

    <?php if (isset($additional_js)): ?>
        <?php foreach ($additional_js as $js): ?>
            <script src="<?= $js ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>
