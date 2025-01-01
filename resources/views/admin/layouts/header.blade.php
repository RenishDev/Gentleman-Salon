<style>
    /* Header */
    .header {
        background-color: var(--color-dark);
        color: var(--color-white);
        height: 60px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px;
        position: fixed;
        width: calc(100% - 277px);
        top: 10px;
        left: 269px;
        z-index: 1000;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        border-top-right-radius: 30px;
        border-top-left-radius: 30px;
        border-bottom-right-radius: 30px;
        border-bottom-left-radius: 30px;
    }

    .header .logo {
        font-size: 1.1rem;
        font-weight: bold;
        letter-spacing: 1px;
    }

    .header .user-profile img {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        margin-right: 10px;
    }

    /* Sidebar */
    .sidebar {
        background-color: #000000;
        height: 98vh;
        position: fixed;
        top: 10px;
        left: 10px;
        width: 250px;
        padding-top: 20px;
        transition: all 0.3s ease;
        border-radius: 20px;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        z-index: 1;
    }

    .sidebar a {
        text-decoration: none;
        color: var(--color-grey);
        padding: 12px 20px;
        /* Default padding */
        display: block;
        font-size: 1rem;
        font-weight: 500;
        transition: background-color 0.3s, color 0.3s, padding 0.3s;
        border-radius: 5px;
        /* Rounded corners for the link */
        position: relative;
        /* Position relative to apply background color inside */
    }

    .sidebar.active {
        left: 0;
        /* Show the sidebar */
    }

    /* Active sidebar item with background color and space on left and right */
    .sidebar a:hover,
    .sidebar a.active {
        background-color: var(--color-primary);
        color: var(--color-white);
        padding: 12px 40px;
        /* Increased left and right padding */
        border-radius: 20px;
        margin-left: 10px;
        margin-right: 10px;
        /* More rounded background for active item */
    }

    /* Wrap the background color inside the link */
    .sidebar a:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border-radius: 20px;
        z-index: -1;
        /* Place it behind the text */
        padding: 0 20px;
        /* Padding to match the link's inner padding */
    }

    /* Icon styling */
    .sidebar a i {
        margin-right: 10px;
    }

    /* Responsive for Mobile View */
    @media (max-width: 768px) {
        .sidebar {
            left: -250px;
            background-color: #000000;
        }

        .header {
            width: 95%;
            /* Ensure the header takes the full width on mobile */
            left: 0;
            /* Remove left offset */
            top: 0;
            /* Adjust top position for mobile */
            border-top-right-radius: 30px;
            border-top-left-radius: 30px;
            border-bottom-right-radius: 30px;
            border-bottom-left-radius: 30px;
            top: 10px;
            padding: 0 20px;
            margin-left: 10px;
        }

        /* Sidebar when active */
        .sidebar.active {
            left: 20px;
            height: auto;
            top: 80px;
            width: auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            z-index: 2;
        }

        /* Add styles for items inside the sidebar */
        .sidebar.active a {
            color: var(--color-white);
            padding: 12px 20px;
            /* Adjust padding for better spacing */
            text-decoration: none;
            display: block;
            border-radius: 8px;
            /* Rounded corners for each link */
            /* Initial background color */
            font-size: 1rem;
            /* Optional: Adjust font size */
            transition: background-color 0.3s ease, padding 0.3s ease;
            /* Smooth transitions */
        }
    }
</style>
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
    <a href="{{ route('admin.home') }}" class="{{ request()->routeIs('admin.home') ? 'active' : '' }}"><i
            class="fas fa-tachometer-alt"></i> Dashboard</a>
    <a href="{{ route('admin.appointment') }}" class="{{ request()->routeIs('admin.appointment') ? 'active' : '' }}"><i
            class="fas fa-calendar-check"></i> Appointment</a>
    <a href="#invoice" class=""><i class="fas fa-file-invoice-dollar"></i> Invoice</a>
    <a href="#staff" class=""><i class="fas fa-users"></i> Staff</a>
    <a href="#sales" class=""><i class="fas fa-chart-line"></i> Sales</a>
    <a href="{{ route('admin.calender') }}" class="{{ request()->routeIs('admin.calender') ? 'active' : '' }}"><i
            class="fas fa-calendar-alt"></i> Calendar</a>
    <a href="#customers" class=""><i class="fas fa-users"></i> Customers</a>
    <a href="#inventory" class=""><i class="fas fa-box"></i> Inventory</a>
    <a href="#services" class="}"><i class="fas fa-cogs"></i> Services</a>
    <a href="#logout" class=""><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>
