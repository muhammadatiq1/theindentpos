<?php
/**
 * Modern Dashboard Home Page
 * Displays key business metrics and recent activity
 */
?>

<?= $this->extend('layouts/modern_layout') ?>

<?= $this->section('content') ?>

<!-- Page Header -->
<div class="page-header">
    <div class="page-title-section">
        <h1><?= lang('Home.welcome') . ', ' . ($user_info->first_name ?? 'User') ?></h1>
        <p><?= lang('Home.dashboard_description') ?? 'Here\'s what\'s happening with your business today.' ?></p>
    </div>
    <div class="page-actions">
        <button class="btn btn-secondary">
            <svg style="width: 1em; height: 1em;" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 7a1 1 0 011-1h12a1 1 0 11 0 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
            <?= lang('Common.filter') ?>
        </button>
        <button class="btn btn-primary">
            <svg style="width: 1em; height: 1em;" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3.586L7.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 10.586V7z" clip-rule="evenodd"></path>
            </svg>
            <?= lang('Common.export') ?>
        </button>
    </div>
</div>

<!-- Stats Grid -->
<div class="row">
    <div class="col-3">
        <div class="card card-stat">
            <div class="card-stat-icon" style="background: linear-gradient(135deg, #ec4899 30%, #f472b6 100%);">
                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 6H6.28l-.31-1.243A1 1 0 005 4H3z"></path>
                </svg>
            </div>
            <div class="card-stat-content">
                <h3>৳ 24,500</h3>
                <p><?= lang('Common.today_sales') ?? 'Today\'s Sales' ?></p>
            </div>
        </div>
    </div>

    <div class="col-3">
        <div class="card card-stat">
            <div class="card-stat-icon" style="background: linear-gradient(135deg, #06b6d4 30%, #22d3ee 100%);">
                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM9 10a3 3 0 11-6 0 3 3 0 016 0zM12.9 1.1a.5.5 0 01.5-.5h6a.5.5 0 01.5.5v6a.5.5 0 01-.5.5h-6a.5.5 0 01-.5-.5v-6zM17.6 4.7a1 1 0 10-2 0 1 1 0 002 0z"></path>
                </svg>
            </div>
            <div class="card-stat-content">
                <h3>456</h3>
                <p><?= lang('Common.total_customers') ?? 'Total Customers' ?></p>
            </div>
        </div>
    </div>

    <div class="col-3">
        <div class="card card-stat">
            <div class="card-stat-icon" style="background: linear-gradient(135deg, #10b981 30%, #34d399 100%);">
                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"></path>
                </svg>
            </div>
            <div class="card-stat-content">
                <h3>892</h3>
                <p><?= lang('Common.items_in_stock') ?? 'Items in Stock' ?></p>
            </div>
        </div>
    </div>

    <div class="col-3">
        <div class="card card-stat">
            <div class="card-stat-icon" style="background: linear-gradient(135deg, #f59e0b 30%, #fbbf24 100%);">
                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zm-11-1a1 1 0 11-2 0 1 1 0 012 0zM5 8a1 1 0 000 2h8a1 1 0 100-2H5zm7 1h-1.5a1 1 0 110-2H11a1 1 0 110 2z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <div class="card-stat-content">
                <h3>14</h3>
                <p><?= lang('Common.pending_orders') ?? 'Pending Orders' ?></p>
            </div>
        </div>
    </div>
</div>

<!-- Charts and Tables Section -->
<div class="row" style="margin-top: 2rem;">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= lang('Common.sales_trend') ?? 'Sales Trend (Last 7 Days)' ?></h3>
            </div>
            <div class="card-body">
                <div style="height: 300px; background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%); border-radius: 0.75rem; display: flex; align-items: center; justify-content: center; color: #9ca3af;">
                    <p><?= lang('Common.chart_placeholder') ?? 'Chart will be rendered here' ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= lang('Common.top_products') ?? 'Top Selling Products' ?></h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th><?= lang('Common.product') ?></th>
                            <th><?= lang('Common.quantity') ?></th>
                            <th><?= lang('Common.revenue') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Premium Widget</td>
                            <td><span class="badge" style="background-color: #e0f2fe; color: #0c4a6e; padding: 0.25rem 0.75rem; border-radius: 9999px; font-weight: 500;">145</span></td>
                            <td>৳ 14,500</td>
                        </tr>
                        <tr>
                            <td>Standard Widget</td>
                            <td><span class="badge" style="background-color: #e0f2fe; color: #0c4a6e; padding: 0.25rem 0.75rem; border-radius: 9999px; font-weight: 500;">234</span></td>
                            <td>৳ 9,360</td>
                        </tr>
                        <tr>
                            <td>Deluxe Widget</td>
                            <td><span class="badge" style="background-color: #e0f2fe; color: #0c4a6e; padding: 0.25rem 0.75rem; border-radius: 9999px; font-weight: 500;">89</span></td>
                            <td>৳ 8,910</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Recent Activity -->
<div class="row" style="margin-top: 2rem;">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= lang('Common.recent_transactions') ?? 'Recent Transactions' ?></h3>
            </div>
            <div class="card-body p-0">
                <table class="table" style="margin-bottom: 0;">
                    <thead>
                        <tr>
                            <th><?= lang('Common.transaction_id') ?></th>
                            <th><?= lang('Common.customer') ?></th>
                            <th><?= lang('Common.amount') ?></th>
                            <th><?= lang('Common.status') ?></th>
                            <th><?= lang('Common.date') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#INV-2024-001</td>
                            <td>John Doe</td>
                            <td>৳ 5,250</td>
                            <td><span class="badge" style="background: #ecfdf5; color: #047857; padding: 0.25rem 0.75rem; border-radius: 9999px; font-weight: 500;"><?= lang('Common.completed') ?></span></td>
                            <td>2024-03-14 10:30 AM</td>
                        </tr>
                        <tr>
                            <td>#INV-2024-002</td>
                            <td>Jane Smith</td>
                            <td>৳ 3,750</td>
                            <td><span class="badge" style="background: #ecfdf5; color: #047857; padding: 0.25rem 0.75rem; border-radius: 9999px; font-weight: 500;"><?= lang('Common.completed') ?></span></td>
                            <td>2024-03-14 09:15 AM</td>
                        </tr>
                        <tr>
                            <td>#INV-2024-003</td>
                            <td>Mike Johnson</td>
                            <td>৳ 8,900</td>
                            <td><span class="badge" style="background: #fef3c7; color: #b45309; padding: 0.25rem 0.75rem; border-radius: 9999px; font-weight: 500;"><?= lang('Common.pending') ?></span></td>
                            <td>2024-03-14 08:45 AM</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    .card-stat {
        gap: 1.5rem;
    }

    .card-stat-icon {
        width: 4rem;
        height: 4rem;
        border-radius: 0.75rem;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
    }

    .card-stat-icon svg {
        width: 1.5rem;
        height: 1.5rem;
    }

    .badge {
        display: inline-block;
        padding: 0.25rem 0.75rem;
        border-radius: 9999px;
        font-size: 0.75rem;
        font-weight: 600;
    }

    @media (max-width: 768px) {
        .col-3 {
            grid-column: span 6 !important;
        }

        .col-6 {
            grid-column: span 12 !important;
        }
    }
</style>

<?= $this->endSection() ?>
