<?php
/**
 * @var bool $has_errors
 * @var bool $is_latest
 * @var string $latest_version
 * @var bool $gcaptcha_enabled
 * @var array $config
 * @var $validation
 */
?>

<!doctype html>
<html lang="<?= current_language_code() ?>">

<head>
    <meta charset="utf-8">
    <base href="<?= base_url() ?>">
    <title><?= $config['company'] . ' | ' . lang('Common.software_short') . ' | ' . lang('Login.login') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <meta name="theme-color" content="#6366f1">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/modern-theme.css">
    <style>
        .login-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
            padding: 1rem;
            position: relative;
            overflow: hidden;
        }

        .login-wrapper::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(99, 102, 241, 0.05) 0%, transparent 70%);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .login-wrapper::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -5%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(79, 70, 229, 0.03) 0%, transparent 70%);
            border-radius: 50%;
            animation: float 8s ease-in-out infinite reverse;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(30px); }
        }

        .login-container {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 460px;
            background: white;
            border-radius: 1.5rem;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            animation: slideUp 0.6s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-header {
            background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%);
            padding: 3.5rem 2rem 2.5rem;
            text-align: center;
            color: white;
        }

        .login-logo {
            width: 90px;
            height: 90px;
            margin: 0 auto 1.5rem;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 1.25rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            color: white;
            box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .login-logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 1rem;
        }

        .login-header h1 {
            font-size: 1.875rem;
            margin: 0 0 0.5rem 0;
            color: white;
            font-weight: 700;
            letter-spacing: -0.5px;
        }

        .login-header p {
            margin: 0;
            font-size: 0.95rem;
            opacity: 0.95;
            color: rgba(255, 255, 255, 0.95);
            font-weight: 400;
        }

        .login-body {
            padding: 2.5rem 2rem;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            gap: 1.75rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        .form-group label {
            font-weight: 700;
            font-size: 0.85rem;
            color: #374151;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .form-input {
            padding: 0.95rem 1rem;
            font-size: 1rem;
            border: 1.5px solid #e5e7eb;
            border-radius: 0.75rem;
            transition: all 0.3s ease;
            font-family: inherit;
            background: #f9fafb;
        }

        .form-input:focus {
            outline: none;
            border-color: #2563eb;
            background: white;
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
        }

        .form-input::placeholder {
            color: #d1d5db;
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
        }

        .form-remember input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
            accent-color: #2563eb;
            border-radius: 0.375rem;
        }

        .form-remember label {
            font-size: 0.875rem;
            font-weight: 500;
            color: #6b7280;
            cursor: pointer;
            margin: 0;
            text-transform: none;
            letter-spacing: normal;
        }

        .form-remember label:hover {
            color: #374151;
        }

        .form-forgot {
            text-align: right;
        }

        .form-forgot a {
            font-size: 0.875rem;
            font-weight: 600;
            color: #2563eb;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .form-forgot a:hover {
            color: #1e40af;
            text-decoration: underline;
        }

        .login-btn {
            padding: 1.05rem;
            background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
            color: white;
            border: none;
            border-radius: 0.75rem;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            margin-top: 0.5rem;
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(37, 99, 235, 0.4);
        }

        .login-btn:active {
            transform: translateY(0);
        }

        .login-btn svg {
            width: 20px;
            height: 20px;
        }

        .alert-box {
            padding: 1rem;
            border-radius: 0.75rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: flex-start;
            gap: 1rem;
        }

        .alert-box.alert-danger {
            background-color: #fee2e2;
            border: 1px solid #fecaca;
            color: #991b1b;
        }

        .alert-box.alert-info {
            background-color: #e0f2fe;
            border: 1px solid #bae6fd;
            color: #0c4a6e;
        }

        .alert-icon {
            font-size: 1.25rem;
            flex-shrink: 0;
        }

        .g-recaptcha {
            display: flex !important;
            justify-content: center;
            margin: 1.5rem 0 !important;
        }

        .login-footer {
            background-color: #fafafa;
            padding: 1.5rem 2rem;
            text-align: center;
            border-top: 1px solid #f0f0f0;
        }

        .login-footer p {
            margin: 0;
            font-size: 0.8rem;
            color: #9ca3af;
            letter-spacing: 0.3px;
        }

        .form-divider {
            text-align: center;
            color: #d1d5db;
            font-size: 0.875rem;
            margin: 1rem 0;
        }

        .migration-warning {
            background: #fef08a;
            border: 2px solid #fcd34d;
            color: #92400e;
            border-radius: 0.75rem;
            padding: 1rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
        }

        .migration-warning-icon {
            font-size: 1.25rem;
            flex-shrink: 0;
        }

        .migration-warning-content p {
            margin: 0;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .login-container {
                border-radius: 1.25rem;
            }

            .login-header {
                padding: 2.5rem 1.5rem 1.75rem;
            }

            .login-header h1 {
                font-size: 1.625rem;
            }

            .login-logo {
                width: 75px;
                height: 75px;
            }

            .login-body {
                padding: 2rem;
            }

            .login-footer {
                padding: 1.25rem 1.5rem;
            }

            .form-options {
                flex-direction: column;
                gap: 1rem;
            }

            .form-forgot {
                text-align: left;
            }
        }

        @media (max-width: 480px) {
            .login-wrapper {
                padding: 1rem;
            }

            .login-container {
                max-width: 100%;
                border-radius: 1rem;
            }

            .login-header {
                padding: 2rem 1rem 1.25rem;
            }

            .login-header h1 {
                font-size: 1.375rem;
            }

            .login-header p {
                font-size: 0.85rem;
            }

            .login-logo {
                width: 65px;
                height: 65px;
                margin-bottom: 1rem;
            }

            .login-body {
                padding: 1.5rem 1rem;
            }

            .form-input {
                padding: 0.85rem 0.875rem;
                font-size: 16px;
            }

            .form-group {
                gap: 0.5rem;
            }

            .login-form {
                gap: 1.25rem;
            }

            .login-btn {
                padding: 0.95rem;
                font-size: 0.95rem;
            }

            .login-footer {
                padding: 1rem;
            }

            .form-options {
                font-size: 0.8rem;
            }
        }
    </style>
</head>

<body>
    <div class="login-wrapper">
        <div class="login-container">
            <!-- Header Section -->
            <div class="login-header">
                <div class="login-logo">
                    <?php if (isset($config['company_logo']) && !empty($config['company_logo'])): ?>
                        <img src="<?= base_url('uploads/' . $config['company_logo']) ?>" alt="<?= lang('Common.logo') . ' ' . $config['company'] ?>">
                    <?php else: ?>
                        <svg role="img" viewBox="0 0 308.57998 308.57997" xmlns="http://www.w3.org/2000/svg" style="width: 100%; height: 100%;">
                            <circle cx="154.28999" cy="154.28999" r="154.28999" fill="currentColor" />
                            <path fill="#fff" d="M154.88998 145.66999c-.03-1.26-.03-3.29.19-4.29 4.6-11.1 15.57-18.82 28.3-18.82h.41v58.3c0 .12-.03.78-.04.9-.54 16.46-14.01 29.7-30.59 29.7v27.08c21 0 39.17-11.27 49.29-28.07l.07-.11c2.9.45 5.86.75 8.9.75 31.95 0 57.81-26 57.81-57.81 0-30.87-24.37-56.46-55.1-57.81h-30.74c-17.18 0-32.61 7.64-43.22 19.63-10.59-11.92-25.86-19.59-43.02-19.59-31.86 0-57.77 25.91-57.77 57.77 0 31.86 25.91 57.77 57.77 57.77 31.86 0 57.77-25.91 57.77-57.77v-3.68c-.01.01-.02-3.31-.03-3.95zm-57.75 38.33c-16.92 0-30.69-13.77-30.69-30.69s13.77-30.69 30.69-30.69 30.69 13.77 30.69 30.69-13.77 30.69-30.69 30.69zm142.96-19.87c-4.33 11.64-15.57 19.9-28.7 19.9h-.54v-61.47h.54c13.13 0 24.37 8.26 28.7 19.9 1.35 3.25 2.03 6.91 2.03 10.83s-.67 7.59-2.03 10.84z" />
                        </svg>
                    <?php endif; ?>
                </div>
                <h1><?= $config['company'] ?></h1>
                <p><?= lang('Login.welcome_message') ?? 'Point of Sale System' ?></p>
            </div>

            <!-- Body Section -->
            <div class="login-body">
                <!-- Migration Alert -->
                <?php if (!$is_latest): ?>
                    <div class="migration-warning">
                        <svg class="migration-warning-icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                        <div class="migration-warning-content">
                            <p><?= lang('Login.migration_needed', [$latest_version]) ?></p>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Error Alerts -->
                <?php if ($has_errors): ?>
                    <?php foreach ($validation->getErrors() as $error): ?>
                        <div class="alert-box alert-danger">
                            <svg class="alert-icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                            </svg>
                            <div><?= $error ?></div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

                <!-- Login Form -->
                <?= form_open('login', ['class' => 'login-form']) ?>

                <div class="form-group">
                    <label for="input-username"><?= lang('Login.username') ?></label>
                    <input
                        class="form-input"
                        id="input-username"
                        name="username"
                        type="text"
                        placeholder="talha@fdeworks.com"
                        required
                        <?php if (ENVIRONMENT == "testing") echo 'value="admin"'; ?>
                    >
                </div>

                <div class="form-group">
                    <label for="input-password"><?= lang('Login.password') ?></label>
                    <input
                        class="form-input"
                        id="input-password"
                        name="password"
                        type="password"
                        placeholder="••••••••••••"
                        required
                        <?php if (ENVIRONMENT == "testing") echo 'value="pointofsale"'; ?>
                    >
                </div>

                <!-- Google reCAPTCHA -->
                <?php if ($gcaptcha_enabled): ?>
                    <script src="https://www.google.com/recaptcha/api.js"></script>
                    <div class="g-recaptcha" data-sitekey="<?= $config['gcaptcha_site_key'] ?>"></div>
                <?php endif; ?>

                <div class="form-options">
                    <div class="form-remember">
                        <input
                            class="form-remember-checkbox"
                            id="input-remember"
                            name="remember"
                            type="checkbox"
                            value="1"
                        >
                        <label for="input-remember"><?= lang('Login.remember_me') ?? 'Remember me' ?></label>
                    </div>
                    <div class="form-forgot">
                        <a href="#"><?= lang('Login.forgot_password') ?? 'Forgot Password?' ?></a>
                    </div>
                </div>

                <button class="login-btn" type="submit" name="login-button">
                    <?= lang('Login.go') ?? 'Sign In' ?>
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </button>

                <?= form_close() ?>
            </div>

            <!-- Footer Section -->
            <div class="login-footer">
                <p><?= lang('Common.powered_by') ?? 'Powered by' ?> <strong>OSPOS</strong> v<?= config('App')->application_version ?></p>
            </div>
        </div>
    </div>

    <script>
        // Add smooth focus effects
        document.querySelectorAll('.form-input').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.opacity = '1';
            });
        });

        // Disable button while loading
        document.querySelector('.login-form')?.addEventListener('submit', function(e) {
            const btn = this.querySelector('.login-btn');
            if (btn && !btn.disabled) {
                btn.disabled = true;
                btn.style.opacity = '0.7';
                btn.innerHTML = '<?= lang("Login.logging_in") ?? "Signing in..." ?> <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>';
            }
        });

        // Add enter key support for password field
        document.getElementById('input-password')?.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                document.querySelector('.login-form').dispatchEvent(new Event('submit'));
            }
        });
    </script>
</body>

</html>