@extends('admin.layouts.app')

@section('main-section')

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
            --event-color: #936b3d; /* Default event color */
        }

        /* Calendar Styles */
        .calendar-container {
            padding: 2rem;
            background-color: var(--color-white);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .calendar-header .btn {
            font-size: 1.2rem;
            padding: 10px 20px;
            background-color: var(--color-primary);
            color: var(--color-white);
            border: none;
            border-radius: 5px;
        }

        .calendar-header .btn:hover {
            background-color: var(--color-sec);
        }

        .calendar-header #monthLabel {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--color-dark);
        }

        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 10px;
            text-align: center;
        }

        .calendar-grid .day {
            height: 80px;
            background-color: var(--color-white);
            border: 1px solid var(--color-grey-light);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .calendar-grid .day:hover {
            background-color: var(--color-sec);
            cursor: pointer;
        }

        .calendar-grid .event {
            background-color: var(--event-color); /* Using the event color variable */
            color: var(--color-white);
            border-radius: 5px;
            padding: 5px;
            font-size: 0.9rem;
            margin-top: 5px;
        }

        .calendar-footer {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .calendar-footer .btn {
            font-size: 1rem;
            margin-left: 10px;
            padding: 10px 20px;
            background-color: var(--color-primary);
            color: var(--color-white);
            border: none;
            border-radius: 5px;
        }

        .calendar-footer .btn:hover {
            background-color: var(--color-sec);
        }

        .font-weight-bold {
            font-weight: bold;
            font-size: 1rem;
        }


    </style>
</head>
<body>

<div class="container calendar-container">
    <!-- Calendar Header -->
    <div class="calendar-header">
        <div>
            <button class="btn" id="prevMonth" aria-label="Previous Month">❮</button>
            <button class="btn" id="nextMonth" aria-label="Next Month">❯</button>
        </div>
        <span id="monthLabel" class="font-weight-bold">February 2020</span>
        <button class="btn" id="todayBtn">Today</button>
    </div>

    <!-- Calendar Grid -->
    <div class="calendar-grid">
        <div class="font-weight-bold">Sun</div>
        <div class="font-weight-bold">Mon</div>
        <div class="font-weight-bold">Tue</div>
        <div class="font-weight-bold">Wed</div>
        <div class="font-weight-bold">Thu</div>
        <div class="font-weight-bold">Fri</div>
        <div class="font-weight-bold">Sat</div>

        <!-- Dynamic Days will be inserted here by JS -->
    </div>

    <!-- Footer for different calendar views -->
    <div class="calendar-footer mt-3">
        <button class="btn" id="monthView">Month</button>
        <button class="btn" id="weekView">Week</button>
        <button class="btn" id="dayView">Day</button>
        <button class="btn" id="listView">List</button>
    </div>
</div>

<!-- Theme Switcher Panel -->
<div class="theme-switcher" id="themeSwitcher">
    <ul>
        <li class="theme-option" data-theme="theme-1" style="background-color: #e9ccab;"></li>
        <li class="theme-option" data-theme="theme-2" style="background-color: #a6dace;"></li>
        <li class="theme-option" data-theme="theme-3" style="background-color: #FFA28D;"></li>
        <li class="theme-option" data-theme="theme-4" style="background-color: #ffafcc;"></li>
        <li class="theme-option" data-theme="theme-5" style="background-color: #cda0d8;"></li>
    </ul>
</div>

<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function () {
        let currentDate = new Date();

        // Function to render the calendar
        function renderCalendar(month, year) {
            const monthLabel = document.getElementById('monthLabel');
            const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            monthLabel.textContent = `${monthNames[month]} ${year}`;

            const firstDay = new Date(year, month).getDay();
            const lastDate = new Date(year, month + 1, 0).getDate();

            let daysHTML = '';
            for (let i = 0; i < firstDay; i++) {
                daysHTML += '<div class="day"></div>'; // Empty cells before the first day
            }

            for (let i = 1; i <= lastDate; i++) {
                const events = getEventsForDay(i);
                daysHTML += `<div class="day">
                                <div>${i}</div>
                                ${events ? `<div class="event">${events}</div>` : ''}
                            </div>`;
            }

            $('.calendar-grid').html(daysHTML);
        }

        function getEventsForDay(day) {
            const events = {
                1: "New Year's Day",
                4: "Birthday Party",
                14: "Conference",
                18: "Meeting",
            };
            return events[day] || null;
        }

        // Theme Switching Logic
        $('#themeSwitcher .theme-option').click(function () {
            const theme = $(this).data('theme');
            $(':root').removeClass().addClass(theme);  // Apply the selected theme's CSS variables
        });

        // Handle previous/next month navigation
        $('#prevMonth').click(function () {
            currentDate.setMonth(currentDate.getMonth() - 1);
            renderCalendar(currentDate.getMonth(), currentDate.getFullYear());
        });

        $('#nextMonth').click(function () {
            currentDate.setMonth(currentDate.getMonth() + 1);
            renderCalendar(currentDate.getMonth(), currentDate.getFullYear());
        });

        $('#todayBtn').click(function () {
            currentDate = new Date();
            renderCalendar(currentDate.getMonth(), currentDate.getFullYear());
        });

        renderCalendar(currentDate.getMonth(), currentDate.getFullYear());
    });
</script>

</body>
@endsection