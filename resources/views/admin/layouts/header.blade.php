 <!-- Header -->
 <div class="header">
    <div class="d-flex align-items-center w-100 justify-content-between">
        <!-- Menu Toggle for Mobile -->
        <span class="menu-toggle d-md-none me-3" id="menuToggle">
            <i class="fas fa-bars fs-3 text-white"></i>
        </span>
        <div class="logo d-flex align-items-center justify-content-start w-100 w-md-auto">
            <span class="d-block">Gentleman Salon</span>
        </div>
        <!-- User Profile Section -->
        <div class="user-profile d-flex align-items-center">
            <button class="settings-btn" id="settingsBtn">
                <i class="fas fa-cogs"></i>
            </button>
            <img src="https://via.placeholder.com/35" alt="Admin">
            <span>Admin</span>
        </div>
    </div>
</div>
<!-- Sidebar -->
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <a href="{{ route('admin.home') }}" class="{{ request()->routeIs('admin.home') ? 'active' : '' }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    <a href="" class=""><i class="fas fa-calendar-check"></i> Appointment</a>
    <a href="#invoice" class=""><i class="fas fa-file-invoice-dollar"></i> Invoice</a>
    <a href="#staff" class=""><i class="fas fa-users"></i> Staff</a>
    <a href="#sales" class=""><i class="fas fa-chart-line"></i> Sales</a>
    <a href="{{ route('admin.calender') }}" class="{{ request()->routeIs('admin.calender') ? 'active' : '' }}"><i class="fas fa-calendar-alt"></i> Calendar</a>
    <a href="#customers" class=""><i class="fas fa-users"></i> Customers</a>
    <a href="#inventory" class=""><i class="fas fa-box"></i> Inventory</a>
    <a href="#services" class="}"><i class="fas fa-cogs"></i> Services</a>
    <a href="#logout" class=""><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>
