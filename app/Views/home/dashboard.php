<?php
/**
 * Advanced Modern Dashboard Home Page
 * Next-Gen Business Intelligence Dashboard with Premium Design
 * Features: Advanced metrics, real-time insights, and beautiful UI
 */
?>

<?= $this->extend('layouts/modern_layout') ?>

<?= $this->section('content') ?>

<!-- Dashboard Wrapper -->
<div class="dashboard-premium">
    
    <!-- Hero Header with Gradient Background -->
    <div class="dashboard-hero">
        <div class="hero-content">
            <div class="hero-left">
                <h1 class="hero-title">Welcome back, <?= ucfirst($user_info->first_name ?? 'User') ?>!</h1>
                <p class="hero-subtitle">Here's your business performance snapshot for today</p>
                <div class="hero-date-time">
                    <span class="date-display" id="currentDate">March 14, 2024</span>
                    <span class="time-display" id="currentTime">02:30 PM</span>
                </div>
            </div>
            <div class="hero-right">
                <div class="hero-actions">
                    <button class="btn-icon-rounded animated-btn" title="Generate Report">
                        <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"></path>
                        </svg>
                    </button>
                    <button class="btn-icon-rounded animated-btn" title="Export Data">
                        <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"></path>
                        </svg>
                    </button>
                    <button class="btn-icon-rounded animated-btn" title="Refresh Data">
                        <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Premium Stats Grid - Enhanced with More Details -->
    <div class="stats-grid premium">
        
        <!-- Sales Card -->
        <div class="stat-card premium-card sales-card">
            <div class="stat-header">
                <div class="stat-icon-wrapper sales-icon">
                    <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0c1.11 0 2.08.402 2.599 1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"></path>
                    </svg>
                </div>
                <div class="stat-badge up">+18.5%</div>
            </div>
            <div class="stat-value">৳ 84,250.50</div>
            <div class="stat-label">Today's Total Sales</div>
            <div class="stat-footer">
                <div class="stat-detail">Target: ৳ 75,000</div>
                <div class="progress-bar"><div class="progress" style="width: 112.3%"></div></div>
            </div>
        </div>

        <!-- Revenue Card -->
        <div class="stat-card premium-card revenue-card">
            <div class="stat-header">
                <div class="stat-icon-wrapper revenue-icon">
                    <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 10V3L4 14h7v7l9-11h-7z" fill="currentColor"></path>
                    </svg>
                </div>
                <div class="stat-badge up">+24.3%</div>
            </div>
            <div class="stat-value">৳ 125,380</div>
            <div class="stat-label">Weekly Revenue</div>
            <div class="stat-footer">
                <div class="stat-detail">vs Last Week: ৳ 101,000</div>
                <div class="progress-bar"><div class="progress" style="width: 124.3%"></div></div>
            </div>
        </div>

        <!-- Customers Card -->
        <div class="stat-card premium-card customers-card">
            <div class="stat-header">
                <div class="stat-icon-wrapper customers-icon">
                    <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 4.354a4 4 0 110 8 4 4 0 010-8M3 20.413V24h18v-3.587a6 6 0 00-9-5.753 6 6 0 00-9 5.753z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="currentColor"></path>
                    </svg>
                </div>
                <div class="stat-badge up">+12.4%</div>
            </div>
            <div class="stat-value">1,248</div>
            <div class="stat-label">Active Customers</div>
            <div class="stat-footer">
                <div class="stat-detail">New this month: 82</div>
                <div class="progress-bar"><div class="progress" style="width: 112.4%"></div></div>
            </div>
        </div>

        <!-- Inventory Card -->
        <div class="stat-card premium-card inventory-card">
            <div class="stat-header">
                <div class="stat-icon-wrapper inventory-icon">
                    <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 7l-8-4-8 4m0 0l8-4m0 0l8 4m-8 4l8-4m-8 0l-8 4m0 0v10l8 4v-10m0 0v10l8-4v-10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"></path>
                    </svg>
                </div>
                <div class="stat-badge warn">-3.2%</div>
            </div>
            <div class="stat-value">2,456</div>
            <div class="stat-label">Items in Stock</div>
            <div class="stat-footer">
                <div class="stat-detail">Low Stock Items: 24</div>
                <div class="progress-bar"><div class="progress" style="width: 96.8%"></div></div>
            </div>
        </div>

        <!-- Orders Card -->
        <div class="stat-card premium-card orders-card">
            <div class="stat-header">
                <div class="stat-icon-wrapper orders-icon">
                    <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"></path>
                    </svg>
                </div>
                <div class="stat-badge urgent">7</div>
            </div>
            <div class="stat-value">38</div>
            <div class="stat-label">Pending Orders</div>
            <div class="stat-footer">
                <div class="stat-detail">Urgent: 7 | Processing: 31</div>
                <div class="progress-bar"><div class="progress" style="width: 100%"></div></div>
            </div>
        </div>

        <!-- Satisfaction Card -->
        <div class="stat-card premium-card satisfaction-card">
            <div class="stat-header">
                <div class="stat-icon-wrapper satisfaction-icon">
                    <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"></path>
                    </svg>
                </div>
                <div class="stat-badge up">+5.2%</div>
            </div>
            <div class="stat-value">4.8/5</div>
            <div class="stat-label">Customer Satisfaction</div>
            <div class="stat-footer">
                <div class="stat-detail">Based on 312 reviews</div>
                <div class="stars-display">
                    <span class="star filled">★</span>
                    <span class="star filled">★</span>
                    <span class="star filled">★</span>
                    <span class="star filled">★</span>
                    <span class="star half">★</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Grid -->
    <div class="dashboard-content">
        
        <!-- Left Column - Sales & Activity -->
        <div class="content-column left-column">
            
            <!-- Sales Breakdown Chart -->
            <div class="card card-advanced">
                <div class="card-advanced-header">
                    <div class="card-title-group">
                        <h3 class="card-advanced-title">Sales Breakdown</h3>
                        <p class="card-advanced-subtitle">Last 7 days performance</p>
                    </div>
                    <div class="card-actions">
                        <select class="period-selector">
                            <option>Last 7 Days</option>
                            <option>Last 30 Days</option>
                            <option>Last Quarter</option>
                            <option>This Year</option>
                        </select>
                    </div>
                </div>
                <div class="card-advanced-body">
                    <div class="chart-container mini-chart">
                        <div class="chart-placeholder">
                            <div class="bar-chart">
                                <div class="bar" style="height: 60%"><span class="bar-label">Mon</span></div>
                                <div class="bar" style="height: 75%"><span class="bar-label">Tue</span></div>
                                <div class="bar" style="height: 85%"><span class="bar-label">Wed</span></div>
                                <div class="bar" style="height: 70%"><span class="bar-label">Thu</span></div>
                                <div class="bar" style="height: 95%"><span class="bar-label">Fri</span></div>
                                <div class="bar" style="height: 80%"><span class="bar-label">Sat</span></div>
                                <div class="bar" style="height: 90%"><span class="bar-label">Sun</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="chart-stats">
                        <div class="chart-stat-item">
                            <span class="stat-color cash"></span>
                            <span>Cash Sales: ৳ 45,200</span>
                        </div>
                        <div class="chart-stat-item">
                            <span class="stat-color card"></span>
                            <span>Card Sales: ৳ 35,800</span>
                        </div>
                        <div class="chart-stat-item">
                            <span class="stat-color online"></span>
                            <span>Online Sales: ৳ 12,500</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Top Selling Products -->
            <div class="card card-advanced">
                <div class="card-advanced-header">
                    <div class="card-title-group">
                        <h3 class="card-advanced-title">Top Selling Products</h3>
                        <p class="card-advanced-subtitle">This month's best performers</p>
                    </div>
                    <a href="#" class="link-more">View All →</a>
                </div>
                <div class="card-advanced-body">
                    <div class="products-list">
                        <!-- Product Item 1 -->
                        <div class="product-item animated-hover">
                            <div class="product-rank">1</div>
                            <div class="product-info">
                                <div class="product-name">Premium Electronics Bundle</div>
                                <div class="product-meta">2,450 units sold</div>
                            </div>
                            <div class="product-revenue">৳ 245,000</div>
                            <div class="product-trend up">↑ 32%</div>
                        </div>

                        <!-- Product Item 2 -->
                        <div class="product-item animated-hover">
                            <div class="product-rank">2</div>
                            <div class="product-info">
                                <div class="product-name">Wireless Accessories Set</div>
                                <div class="product-meta">1,820 units sold</div>
                            </div>
                            <div class="product-revenue">৳ 156,300</div>
                            <div class="product-trend up">↑ 18%</div>
                        </div>

                        <!-- Product Item 3 -->
                        <div class="product-item animated-hover">
                            <div class="product-rank">3</div>
                            <div class="product-info">
                                <div class="product-name">Smart Home Devices</div>
                                <div class="product-meta">945 units sold</div>
                            </div>
                            <div class="product-revenue">৳ 128,500</div>
                            <div class="product-trend up">↑ 15%</div>
                        </div>

                        <!-- Product Item 4 -->
                        <div class="product-item animated-hover">
                            <div class="product-rank">4</div>
                            <div class="product-info">
                                <div class="product-name">Pro Audio Equipment</div>
                                <div class="product-meta">623 units sold</div>
                            </div>
                            <div class="product-revenue">৳ 98,450</div>
                            <div class="product-trend down">↓ 8%</div>
                        </div>

                        <!-- Product Item 5 -->
                        <div class="product-item animated-hover">
                            <div class="product-rank">5</div>
                            <div class="product-info">
                                <div class="product-name">Gaming Peripherals</div>
                                <div class="product-meta">521 units sold</div>
                            </div>
                            <div class="product-revenue">৳ 75,200</div>
                            <div class="product-trend up">↑ 12%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column - Recent Activity & Status -->
        <div class="content-column right-column">
            
            <!-- Real-time Activity Feed -->
            <div class="card card-advanced">
                <div class="card-advanced-header">
                    <div class="card-title-group">
                        <h3 class="card-advanced-title">Activity Feed</h3>
                        <p class="card-advanced-subtitle">Latest business events</p>
                    </div>
                </div>
                <div class="card-advanced-body">
                    <div class="activity-feed">
                        <div class="activity-item new">
                            <div class="activity-dot"></div>
                            <div class="activity-content">
                                <div class="activity-title">New Order Received</div>
                                <div class="activity-meta">Invoice #INV-2024-8847 - just now</div>
                                <div class="activity-value">৳ 8,900</div>
                            </div>
                        </div>

                        <div class="activity-item">
                            <div class="activity-dot"></div>
                            <div class="activity-content">
                                <div class="activity-title">Payment Received</div>
                                <div class="activity-meta">From Jane Smith - 5 mins ago</div>
                                <div class="activity-value">৳ 5,250</div>
                            </div>
                        </div>

                        <div class="activity-item">
                            <div class="activity-dot"></div>
                            <div class="activity-content">
                                <div class="activity-title">Low Stock Alert</div>
                                <div class="activity-meta">Premium Widget - 15 mins ago</div>
                                <div class="activity-value">Only 12 units left</div>
                            </div>
                        </div>

                        <div class="activity-item">
                            <div class="activity-dot"></div>
                            <div class="activity-content">
                                <div class="activity-title">Order Shipped</div>
                                <div class="activity-meta">Order #ORD-4521 - 1 hour ago</div>
                                <div class="activity-value">Tracking: BD123456789</div>
                            </div>
                        </div>

                        <div class="activity-item">
                            <div class="activity-dot"></div>
                            <div class="activity-content">
                                <div class="activity-title">Customer Review</div>
                                <div class="activity-meta">5-star review from John D. - 2 hours ago</div>
                                <div class="activity-stars">★★★★★</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order Status Overview -->
            <div class="card card-advanced">
                <div class="card-advanced-header">
                    <div class="card-title-group">
                        <h3 class="card-advanced-title">Order Status</h3>
                        <p class="card-advanced-subtitle">Current order pipeline</p>
                    </div>
                </div>
                <div class="card-advanced-body">
                    <div class="status-grid">
                        <div class="status-item pending">
                            <div class="status-number">8</div>
                            <div class="status-label">Pending</div>
                            <div class="status-icon">⏳</div>
                        </div>
                        <div class="status-item processing">
                            <div class="status-number">23</div>
                            <div class="status-label">Processing</div>
                            <div class="status-icon">⚙️</div>
                        </div>
                        <div class="status-item shipped">
                            <div class="status-number">156</div>
                            <div class="status-label">Shipped</div>
                            <div class="status-icon">🚚</div>
                        </div>
                        <div class="status-item delivered">
                            <div class="status-number">1,245</div>
                            <div class="status-label">Delivered</div>
                            <div class="status-icon">✅</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions Panel -->
            <div class="card card-advanced quick-actions-panel">
                <div class="card-advanced-header">
                    <h3 class="card-advanced-title">Quick Actions</h3>
                </div>
                <div class="card-advanced-body">
                    <div class="quick-actions">
                        <button class="quick-action-btn">
                            <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4v16m8-8H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"></path>
                            </svg>
                            <span>New Sale</span>
                        </button>
                        <button class="quick-action-btn">
                            <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 10V3L4 14h7v7l9-11h-7z" fill="currentColor"></path>
                            </svg>
                            <span>Print Report</span>
                        </button>
                        <button class="quick-action-btn">
                            <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0c1.11 0 2.08.402 2.599 1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"></path>
                            </svg>
                            <span>Refund</span>
                        </button>
                        <button class="quick-action-btn">
                            <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4.354a4 4 0 110 8 4 4 0 010-8M3 20.413V24h18v-3.587a6 6 0 00-9-5.753 6 6 0 00-9 5.753z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="currentColor"></path>
                            </svg>
                            <span>Add Customer</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Inline Styles for Premium Dashboard -->
<style>
    .dashboard-premium {
        display: flex;
        flex-direction: column;
        gap: 2rem;
        padding: 2rem 0;
    }

    /* ===== HERO SECTION ===== */
    .dashboard-hero {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 1.5rem;
        padding: 2.5rem;
        color: white;
        box-shadow: 0 20px 25px -5px rgba(102, 126, 234, 0.3);
    }

    .hero-content {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 3rem;
    }

    .hero-left {
        flex: 1;
    }

    .hero-title {
        font-size: 2rem;
        font-weight: 700;
        margin: 0 0 0.5rem 0;
        letter-spacing: -0.5px;
    }

    .hero-subtitle {
        font-size: 1rem;
        opacity: 0.95;
        margin: 0 0 1.5rem 0;
        font-weight: 400;
    }

    .hero-date-time {
        display: flex;
        gap: 1.5rem;
        align-items: center;
    }

    .date-display, .time-display {
        font-size: 0.95rem;
        opacity: 0.9;
        font-weight: 500;
    }

    .hero-right {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .hero-actions {
        display: flex;
        gap: 0.75rem;
    }

    .btn-icon-rounded {
        width: 44px;
        height: 44px;
        border-radius: 10px;
        border: 2px solid rgba(255,255,255,0.3);
        background: rgba(255,255,255,0.1);
        color: white;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        font-size: 0;
    }

    .btn-icon-rounded svg {
        width: 20px;
        height: 20px;
    }

    .btn-icon-rounded:hover {
        background: rgba(255,255,255,0.2);
        border-color: rgba(255,255,255,0.5);
        transform: translateY(-2px);
    }

    /* ===== PREMIUM STATS GRID ===== */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 1.5rem;
    }

    .stat-card {
        background: white;
        border-radius: 1rem;
        padding: 1.5rem;
        border: 1px solid #e5e7eb;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #667eea, #764ba2);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.3s ease;
    }

    .stat-card:hover {
        border-color: #d1d5db;
        transform: translateY(-4px);
        box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1);
    }

    .stat-card:hover::before {
        transform: scaleX(1);
    }

    .stat-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 1rem;
    }

    .stat-icon-wrapper {
        width: 50px;
        height: 50px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
    }

    .sales-icon { background: linear-gradient(135deg, #ec4899, #f472b6); }
    .revenue-icon { background: linear-gradient(135deg, #f59e0b, #fbbf24); }
    .customers-icon { background: linear-gradient(135deg, #06b6d4, #22d3ee); }
    .inventory-icon { background: linear-gradient(135deg, #10b981, #34d399); }
    .orders-icon { background: linear-gradient(135deg, #8b5cf6, #a78bfa); }
    .satisfaction-icon { background: linear-gradient(135deg, #ef4444, #f87171); }

    .stat-icon-wrapper svg {
        width: 24px;
        height: 24px;
    }

    .stat-badge {
        font-size: 0.75rem;
        font-weight: 700;
        padding: 0.4rem 0.8rem;
        border-radius: 8px;
        display: inline-block;
    }

    .stat-badge.up {
        background: #d1fae5;
        color: #065f46;
    }

    .stat-badge.down {
        background: #fee2e2;
        color: #7f1d1d;
    }

    .stat-badge.warn {
        background: #fef3c7;
        color: #92400e;
    }

    .stat-badge.urgent {
        background: #fecaca;
        color: #991b1b;
    }

    .stat-value {
        font-size: 1.75rem;
        font-weight: 700;
        color: #111827;
        margin-bottom: 0.25rem;
    }

    .stat-label {
        font-size: 0.875rem;
        color: #6b7280;
        margin-bottom: 1rem;
    }

    .stat-footer {
        padding-top: 1rem;
        border-top: 1px solid #f3f4f6;
    }

    .stat-detail {
        font-size: 0.75rem;
        color: #9ca3af;
        margin-bottom: 0.5rem;
    }

    .progress-bar {
        width: 100%;
        height: 4px;
        background: #e5e7eb;
        border-radius: 9999px;
        overflow: hidden;
    }

    .progress {
        height: 100%;
        background: linear-gradient(90deg, #667eea, #764ba2);
        border-radius: 9999px;
        transition: width 0.6s ease;
    }

    .stars-display {
        color: #fbbf24;
        font-size: 0.9rem;
        letter-spacing: 2px;
    }

    .stars-display .star.half {
        color: #d1d5db;
    }

    /* ===== MAIN CONTENT GRID ===== */
    .dashboard-content {
        display: grid;
        grid-template-columns: repeat(12, 1fr);
        gap: 1.5rem;
    }

    .content-column {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .left-column {
        grid-column: span 7;
    }

    .right-column {
        grid-column: span 5;
    }

    /* ===== ADVANCED CARD STYLES ===== */
    .card-advanced {
        background: white;
        border-radius: 1rem;
        border: 1px solid #e5e7eb;
        overflow: hidden;
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    .card-advanced:hover {
        border-color: #d1d5db;
        box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1);
    }

    .card-advanced-header {
        padding: 1.5rem;
        border-bottom: 1px solid #f3f4f6;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .card-title-group {
        flex: 1;
    }

    .card-advanced-title {
        font-size: 1.125rem;
        font-weight: 700;
        color: #111827;
        margin: 0 0 0.25rem 0;
    }

    .card-advanced-subtitle {
        font-size: 0.875rem;
        color: #6b7280;
        margin: 0;
    }

    .card-actions {
        display: flex;
        gap: 1rem;
    }

    .period-selector {
        padding: 0.5rem 1rem;
        border: 1px solid #e5e7eb;
        border-radius: 0.5rem;
        background: white;
        color: #6b7280;
        font-size: 0.875rem;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .period-selector:hover {
        border-color: #d1d5db;
    }

    .period-selector:focus {
        outline: none;
        border-color: #667eea;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }

    .link-more {
        color: #667eea;
        text-decoration: none;
        font-size: 0.875rem;
        font-weight: 600;
        transition: all 0.2s ease;
    }

    .link-more:hover {
        color: #764ba2;
        gap: 0.5rem;
    }

    .card-advanced-body {
        padding: 1.5rem;
        flex: 1;
    }

    /* ===== CHART STYLES ===== */
    .chart-container {
        margin-bottom: 1.5rem;
    }

    .chart-placeholder {
        background: linear-gradient(135deg, #f9fafb 0%, #f3f4f6 100%);
        border-radius: 0.75rem;
        padding: 2rem 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 200px;
    }

    .bar-chart {
        display: flex;
        align-items: flex-end;
        justify-content: space-around;
        height: 150px;
        gap: 0.75rem;
        width: 100%;
    }

    .bar {
        flex: 1;
        background: linear-gradient(180deg, #667eea, #764ba2);
        border-radius: 0.5rem 0.5rem 0 0;
        position: relative;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .bar:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 15px -3px rgba(102, 126, 234, 0.3);
    }

    .bar-label {
        position: absolute;
        bottom: -25px;
        left: 50%;
        transform: translateX(-50%);
        font-size: 0.75rem;
        color: #6b7280;
        white-space: nowrap;
    }

    .chart-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
    }

    .chart-stat-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.75rem;
        background: #f9fafb;
        border-radius: 0.5rem;
        font-size: 0.875rem;
    }

    .stat-color {
        width: 12px;
        height: 12px;
        border-radius: 3px;
    }

    .stat-color.cash { background: #667eea; }
    .stat-color.card { background: #764ba2; }
    .stat-color.online { background: #f59e0b; }

    /* ===== PRODUCTS LIST ===== */
    .products-list {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .product-item {
        display: grid;
        grid-template-columns: 40px 1fr auto auto;
        align-items: center;
        gap: 1rem;
        padding: 1rem;
        background: #f9fafb;
        border-radius: 0.75rem;
        transition: all 0.3s ease;
        border: 1px solid transparent;
    }

    .product-item:hover {
        background: #f3f4f6;
        border-color: #e5e7eb;
        transform: translateX(4px);
    }

    .product-rank {
        width: 32px;
        height: 32px;
        background: linear-gradient(135deg, #667eea, #764ba2);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 0.9rem;
    }

    .product-info {
        flex: 1;
    }

    .product-name {
        font-weight: 600;
        color: #111827;
        font-size: 0.95rem;
        margin-bottom: 0.25rem;
    }

    .product-meta {
        font-size: 0.75rem;
        color: #9ca3af;
    }

    .product-revenue {
        font-weight: 700;
        color: #111827;
        text-align: right;
    }

    .product-trend {
        font-weight: 600;
        font-size: 0.9rem;
        padding: 0.4rem 0.8rem;
        border-radius: 0.5rem;
        text-align: center;
        min-width: 60px;
    }

    .product-trend.up {
        color: #065f46;
        background: #d1fae5;
    }

    .product-trend.down {
        color: #7f1d1d;
        background: #fee2e2;
    }

    /* ===== ACTIVITY FEED ===== */
    .activity-feed {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .activity-item {
        display: grid;
        grid-template-columns: 12px 1fr;
        gap: 1rem;
        padding: 1rem;
        background: #f9fafb;
        border-radius: 0.75rem;
        border-left: 3px solid #e5e7eb;
        transition: all 0.3s ease;
    }

    .activity-item.new {
        border-left-color: #667eea;
        background: linear-gradient(135deg, rgba(102,126,234,0.05), rgba(118,75,162,0.05));
    }

    .activity-dot {
        width: 12px;
        height: 12px;
        background: #667eea;
        border-radius: 50%;
        margin-top: 2px;
    }

    .activity-item.new .activity-dot {
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.5; }
    }

    .activity-content {
        flex: 1;
    }

    .activity-title {
        font-weight: 600;
        color: #111827;
        margin-bottom: 0.25rem;
        font-size: 0.95rem;
    }

    .activity-meta {
        font-size: 0.75rem;
        color: #9ca3af;
        margin-bottom: 0.5rem;
    }

    .activity-value {
        font-weight: 700;
        color: #667eea;
        font-size: 0.85rem;
    }

    .activity-stars {
        color: #fbbf24;
        font-size: 0.85rem;
        letter-spacing: 2px;
    }

    /* ===== STATUS GRID ===== */
    .status-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
    }

    .status-item {
        padding: 1.5rem;
        border-radius: 0.75rem;
        text-align: center;
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .status-item.pending {
        background: #fef3c7;
        border-color: #f59e0b;
    }

    .status-item.processing {
        background: #e0f2fe;
        border-color: #0ea5e9;
    }

    .status-item.shipped {
        background: #dbeafe;
        border-color: #06b6d4;
    }

    .status-item.delivered {
        background: #d1fae5;
        border-color: #10b981;
    }

    .status-item:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1);
    }

    .status-number {
        font-size: 1.75rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }

    .status-label {
        font-size: 0.875rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .status-icon {
        font-size: 1.5rem;
    }

    /* ===== QUICK ACTIONS ===== */
    .quick-actions {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
    }

    .quick-action-btn {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 0.75rem;
        padding: 1.25rem 1rem;
        background: linear-gradient(135deg, #f9fafb, #f3f4f6);
        border: 2px solid #e5e7eb;
        border-radius: 0.75rem;
        cursor: pointer;
        transition: all 0.3s ease;
        font-weight: 600;
        font-size: 0.85rem;
        color: #111827;
    }

    .quick-action-btn svg {
        width: 24px;
        height: 24px;
        color: #667eea;
    }

    .quick-action-btn:hover {
        border-color: #667eea;
        background: linear-gradient(135deg, #f0f4ff, #e0e7ff);
        transform: translateY(-2px);
        box-shadow: 0 10px 15px -3px rgba(102, 126, 234, 0.2);
    }

    .quick-action-btn:active {
        transform: translateY(0);
    }

    /* ===== RESPONSIVE DESIGN ===== */
    @media (max-width: 1400px) {
        .left-column {
            grid-column: span 8;
        }
        .right-column {
            grid-column: span 4;
        }
    }

    @media (max-width: 1024px) {
        .hero-content {
            flex-direction: column;
            gap: 1.5rem;
        }

        .left-column {
            grid-column: span 12;
        }
        .right-column {
            grid-column: span 12;
        }

        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .product-item {
            grid-template-columns: 40px 1fr auto;
        }

        .product-revenue {
            display: none;
        }
    }

    @media (max-width: 768px) {
        .dashboard-hero {
            padding: 1.5rem;
        }

        .hero-actions {
            flex-direction: column;
        }

        .btn-icon-rounded {
            width: 40px;
            height: 40px;
        }

        .stats-grid {
            grid-template-columns: 1fr;
        }

        .hero-title {
            font-size: 1.5rem;
        }

        .chart-stats {
            grid-template-columns: 1fr;
        }

        .status-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .quick-actions {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 480px) {
        .dashboard-premium {
            gap: 1rem;
            padding: 1rem 0;
        }

        .dashboard-hero {
            padding: 1rem;
            border-radius: 1rem;
        }

        .hero-title {
            font-size: 1.25rem;
        }

        .stat-value {
            font-size: 1.5rem;
        }

        .card-advanced-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 1rem;
        }

        .period-selector {
            width: 100%;
        }

        .status-grid {
            grid-template-columns: 1fr;
        }

        .quick-actions {
            grid-template-columns: 1fr;
        }
    }

    .animated-hover {
        cursor: pointer;
    }

    .animated-btn {
        position: relative;
    }

    .animated-btn:active {
        transform: scale(0.95);
    }
</style>

<?= $this->endSection() ?>
