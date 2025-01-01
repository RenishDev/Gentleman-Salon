<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gentleman Salon Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css" rel="stylesheet">

    <style>
        /* Default Theme (Light) */
        :root {
            --color-primary: #e9ccab;
            --color-sec: #d1ad89;
            --color-white: #ffffff;
            --color-black: #000000;
            --color-dark: #000000;
            --color-dark-2: #936b3d;
            --color-dark-3: #9f7648;
            --color-grey: #999999;
            --color-grey-light: #DFDFDF;
            --color-grey-dark: #616161;
            --gradient: linear-gradient(135deg, #e9ccab 0%, #d1ad89 100%);
        }

        .theme-1 {
            --color-primary: #e9ccab;
            --color-sec: #d1ad89;
            --gradient: linear-gradient(135deg, #e9ccab 0%, #d1ad89 100%);
        }

        /* Theme 2 */
        .theme-2 {
            --color-primary: #a6dace;
            --color-sec: #8fbca3;
            --gradient: linear-gradient(135deg, #a6dace 0%, #8fbca3 100%);
        }

        /* Theme 3 */
        .theme-3 {
            --color-primary: #FFA28D;
            --color-sec: #f0856b;
            --gradient: linear-gradient(135deg, #FFA28D 0%, #f0856b 100%);
        }

        /* Theme 4 */
        .theme-4 {
            --color-primary: #ffafcc;
            --color-sec: #e37ea5;
            --gradient: linear-gradient(135deg, #ffafcc 0%, #e37ea5 100%);
        }

        /* Theme 5 */
        .theme-5 {
            --color-primary: #cda0d8;
            --color-sec: #966dc8;
            --gradient: linear-gradient(135deg, #cda0d8 0%, #966dc8 100%);
        }

       
        /* Content Styling */
        .content {
            margin-left: 250px;
            margin-top: 60px;
            padding: 20px;
            transition: margin-left 0.3s ease;
        }

        .content h1 {
            font-size: 2rem;
            color: var(--color-dark);
            margin-bottom: 20px;
        }

        .card-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            /* Add spacing between the cards */
            flex-wrap: wrap;
            /* Allow cards to wrap on smaller screens */
        }

        .card {
            flex: 1;
            /* Allow the card to take equal space */
            min-width: 200px;
            /* Set a minimum width to avoid cards becoming too small */
            background-color: #e7e7e7;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Button to Open Theme Switcher */
        .settings-btn {
            cursor: pointer;
            background-color: var(--color-sec);
            /* Use the secondary theme color */
            border: none;
            color: var(--color-white);
            font-size: 1.5rem;
            position: fixed;
            bottom: 20px;
            /* Position 20px from the bottom */
            right: 20px;
            /* Position 20px from the right */
            z-index: 1001;
            /* Ensure it is above other elements */
            border-radius: 50%;
            /* Make the button circular */
            padding: 10px;
            transition: background-color 0.3s ease;
            /* Smooth transition */
        }

        .settings-btn:hover {
            background-color: var(--color-primary);
            /* On hover, use the primary theme color */
        }

        /* Theme Switcher */
        .theme-switcher {
            position: fixed;
            bottom: 80px;
            right: 0;
            background-color: var(--color-white);
            padding: 10px;
            border-radius: 10px 0 0 10px;
            box-shadow: -2px 0 10px rgba(0, 0, 0, 0.1);
            display: none;
        }

        .theme-switcher ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 10px;
            /* Spacing between color boxes */
        }

        .theme-switcher li {
            cursor: pointer;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            transition: transform 0.3s ease, border 0.3s ease;
        }

        .theme-switcher li:hover {
            transform: scale(1.2);
            border: 2px solid var(--color-white);
            /* Highlight on hover */
        }

        body {
            background-color: #f4f6f9;
            font-family: 'Arial', sans-serif;
        }

        .card {
            background-color: #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 10px;

        }

        .card h5 {
            font-size: 1.2em;
            color: #555;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 1em;
            margin-bottom: 5px;
            color: #777;
        }

        .sales-card {
            background-color: #f9f9f9;

        }

        .occupancy-card {
            background-color: #f9f9f9;
        }

        .client-card {
            background-color: #f9f9f9;
        }

        .chart-placeholder {
            height: 200px;
            background-color: #ffffff00;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #777;
        }

        .service {
            text-align: center;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 8px;
            width: 30%;
        }

        .service h6 {
            font-size: 1em;
            font-weight: bold;
            color: #444;
        }

        .appointments .list-group-item {
            background-color: #f8f9fa;
            border: none;
            padding: 12px;
        }

        .team-members {
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }

        .team-members .member {
            margin-bottom: 15px;
        }

        .member h6 {
            font-size: 1.1em;
            color: #333;
        }

        @media (max-width: 767px) {
            .service {
                width: 100%;
                margin-bottom: 10px;
            }

            .appointments .list-group-item {
                padding: 10px;
            }

            .sales-card {
                background-color: #f9f9f9;
                margin-bottom: 10px;
            }

            .occupancy-card {
                background-color: #f9f9f9;
                margin-bottom: 10px;
            }

            .client-card {
                background-color: #f9f9f9;
            }

        }

       

        .progress-bar {
            background-color: var(--color-primary);
        }

        h5,
        h6 {
            color: var(--color-black);
        }

        .container {

            width: 100%;
            margin-right: auto;
            margin-left: auto;
            padding-right: 0;
            padding-left: 0;
        }

        #calendar {
            background-color: var(--color-white);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 10px;
            overflow: hidden;
            /* Remove horizontal scrollbar */
            width: 100%;
            /* Ensure full width */
            max-width: 100%;
            /* Prevent overflow */
            box-sizing: border-box;
            /* Include padding in width */
        }


        /* Remove borders from day cells */
        .fc-daygrid-day {
            border: none !important;
            outline: none !important;
        }

        /* Remove borders from header cells */
        .fc-col-header-cell {
            border: none !important;
            outline: none !important;
        }

        /* Toolbar title */
        .fc-toolbar-title {
            font-size: 1.5rem;
            color: var(--color-primary);
            text-align: center;
            font-weight: bold;
        }

        /* Day numbers */
        .fc-daygrid-day-number {
            color: var(--color-dark);
            font-size: 1rem;
        }

        /* Remove event borders */
        .fc-event {
            background-color: var(--color-primary) !important;
            border: none !important;
            color: var(--color-white) !important;
            font-size: 0.85rem;
        }

        /* Appointment count badge */
        .appointment-count {
            position: absolute;
            top: 5px;
            right: 5px;
            background-color: var(--color-sec);
            color: var(--color-white);
            border-radius: 50%;
            padding: 3px 7px;
            font-size: 0.75rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            #calendar {
                padding: 5px;
                box-shadow: none;
            }

            .fc-toolbar-title {
                font-size: 1.2rem;
            }

            .fc-daygrid-day-number {
                font-size: 0.85rem;
            }

            .fc-event {
                font-size: 0.75rem;
            }

            .appointment-count {
                padding: 2px 5px;
                font-size: 0.65rem;
            }
        }

        @media (max-width: 576px) {
            #calendar {
                padding: 2px;
                border-radius: 4px;
            }

            .fc-toolbar-title {
                font-size: 1rem;
            }

            .fc-daygrid-day-number {
                font-size: 0.75rem;
            }

            .fc-event {
                font-size: 0.65rem;
            }
        }

        /* Style for the current date */
        .fc-daygrid-day-number.fc-day-today {
            background-color: var(--color-primary) !important;
            color: var(--color-white) !important;
            border-radius: 50%;
            font-weight: bold;
        }

        /* Optional: Add hover effect for the current date */
        .fc-daygrid-day-number.fc-day-today:hover {
            background-color: var(--color-sec) !important;
            /* A slightly different color on hover */
            color: var(--color-white) !important;
        }



        .price {
            color: var(--color-primary);
        }

        .rating {
            color: var(--color-primary);
        }
    </style>
</head>
<body>
    @include('admin.layouts.header')
    @yield('main-section')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
    <script>
        const settingsBtn = document.getElementById('settingsBtn');
        const themeSwitcher = document.getElementById('themeSwitcher');
        const themeOptions = document.querySelectorAll('.theme-option');
        // Show theme switcher panel
        settingsBtn.addEventListener('click', () => {
            themeSwitcher.style.display = themeSwitcher.style.display === 'block' ? 'none' : 'block';
        });
        // Change theme
        themeOptions.forEach(option => {
            option.addEventListener('click', (e) => {
                const selectedTheme = e.target.getAttribute('data-theme');
                document.body.classList.remove(...document.body.classList);
                document.body.classList.add(selectedTheme);
                themeSwitcher.style.display = 'none'; // Hide theme switcher after selection
            });
        });
        // Mobile menu toggle
        const menuToggle = document.getElementById('menuToggle');
        const sidebar = document.getElementById('sidebar');
        menuToggle.addEventListener('click', () => {
            sidebar.classList.toggle('active');
        });
    </script>
    <script>
        // Sample data for wave effect
        const labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov'];

        // Generate a sine wave pattern for the sales data
        function generateWaveData() {
            const salesData = [];
            for (let i = 0; i < labels.length; i++) {
                salesData.push(5000 + 1000 * Math.sin(i * 0.7)); // Sine wave pattern
            }
            return salesData;
        }

        // Initialize both charts
        const ctx1 = document.getElementById('salesWaveChart1').getContext('2d');
        const ctx2 = document.getElementById('salesWaveChart2').getContext('2d');

        // Create the wave chart for Recent Sales
        const salesWaveChart1 = new Chart(ctx1, {
            type: 'line', // Line chart for wave effect
            data: {
                labels: labels,
                datasets: [{
                    label: 'Sales ($)',
                    data: generateWaveData(),
                    borderColor: getComputedStyle(document.documentElement).getPropertyValue(
                        '--color-primary').trim(),
                    backgroundColor: getComputedStyle(document.documentElement).getPropertyValue(
                        '--color-primary').trim(),
                    borderWidth: 2,
                    tension: 0.4,
                    pointRadius: 0,
                    fill: true,
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: false,
                        suggestedMin: 4000,
                        suggestedMax: 7000,
                        grid: {
                            display: false
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        // Create the wave chart for Top Products (similar to the first chart)
        const salesWaveChart2 = new Chart(ctx2, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Top Products',
                    data: generateWaveData(),
                    borderColor: getComputedStyle(document.documentElement).getPropertyValue(
                        '--color-primary').trim(),
                    backgroundColor: getComputedStyle(document.documentElement).getPropertyValue(
                        '--color-primary').trim(),
                    borderWidth: 2,
                    tension: 0.4,
                    pointRadius: 0,
                    fill: true,
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: false,
                        suggestedMin: 4000,
                        suggestedMax: 7000,
                        grid: {
                            display: false
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        // Function to change theme dynamically
        document.querySelectorAll('.theme-option').forEach(option => {
            option.addEventListener('click', function() {
                const theme = this.getAttribute('data-theme');
                document.documentElement.className = theme; // Apply the selected theme class
                updateChartColors(); // Update the chart colors
            });
        });

        // Function to update the chart colors based on the theme
        function updateChartColors() {
            const primaryColor = getComputedStyle(document.documentElement).getPropertyValue('--color-primary').trim();
            const secColor = getComputedStyle(document.documentElement).getPropertyValue('--color-sec').trim();

            // Update the first chart (Recent Sales)
            salesWaveChart1.data.datasets[0].borderColor = primaryColor;
            salesWaveChart1.data.datasets[0].backgroundColor = primaryColor;
            salesWaveChart1.update();

            // Update the second chart (Top Products)
            salesWaveChart2.data.datasets[0].borderColor = primaryColor;
            salesWaveChart2.data.datasets[0].backgroundColor = primaryColor;
            salesWaveChart2.update();
        }

        // Initialize the chart colors based on the current theme
        updateChartColors();
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const calendarEl = document.getElementById('calendar');

            // Appointments Data
            const appointments = [{
                    date: '2024-01-23',
                    title: 'Haircut',
                    price: 80
                },
                {
                    date: '2024-12-23',
                    title: 'Tattoo & Piercing',
                    price: 60
                },
                {
                    date: '2024-12-24',
                    title: 'Massage',
                    price: 50
                },
                {
                    date: '2024-01-25',
                    title: 'Facial',
                    price: 70
                },
                {
                    date: '2024-01-26',
                    title: 'Nail Treatment',
                    price: 30
                }
            ];

            // Get current date to set the view
            const currentDate = new Date();

            // Initialize FullCalendar
            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth', // Month view only
                events: appointments.map(appointment => ({
                    title: `${appointment.title} ($${appointment.price})`,
                    start: appointment.date
                })),
                headerToolbar: {
                    left: '',
                    center: 'title',
                    right: ''
                },
                themeSystem: 'bootstrap5',
                showNonCurrentDates: true, // Show days from the adjacent months that are in the current week
                dayCellDidMount: function(info) {
                    // Highlight days with appointments and show appointment count
                    const dayAppointments = appointments.filter(
                        appointment => appointment.date === info.dateStr
                    );
                    if (dayAppointments.length > 0) {
                        const countBadge = document.createElement('span');
                        countBadge.className = 'appointment-count';
                        countBadge.innerText = dayAppointments.length;
                        info.el.appendChild(countBadge);
                    }

                    // Get the current date and check if this day is today
                    const currentDate = new Date().toISOString().split('T')[
                        0]; // Get current date in YYYY-MM-DD format
                    if (info.dateStr === currentDate) {
                        // Apply the theme color to the current date
                        const themeColor = getComputedStyle(document.documentElement)
                            .getPropertyValue('--color-primary').trim();
                        info.el.style.backgroundColor = themeColor; // Set background to theme color
                        info.el.style.color = 'white'; // Set text color to white for contrast
                        info.el.style.borderRadius = '50%'; // Make the current day rounded
                    }
                },
                eventDidMount: function(info) {
                    // Ensure events take the theme color
                    info.el.style.backgroundColor = getComputedStyle(document.documentElement)
                        .getPropertyValue('--color-primary').trim();
                    info.el.style.color = getComputedStyle(document.documentElement).getPropertyValue(
                        '--color-white').trim();
                }
            });

            calendar.render();
        });
    </script>

</body>
</html>