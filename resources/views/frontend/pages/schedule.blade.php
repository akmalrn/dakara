@extends('frontend.layouts')
@section('title', 'Schedule')
@section('title-page', 'Schedule')
@section('content')
    @include('frontend.components.page-header')

    <!-- Section Teks -->
    <!-- start of main-heading -->
    <header class="main-heading text-center row">
        <div class="col-xs-12">
            <h2 class="heading"><span style="background: white; padding:10px; border-radius:5px;">Jadwal Terdekat</span></h2>
        </div>
    </header><!-- end of main-heading -->

    <!-- Section Kalender -->
    <div class="container pad-top-md pad-bottom-md">
        <section class="calendar-container">
            <div class="calendar-header">
                <button class="prev-month">&lt;</button>
                <h2 id="calendar-month-year">December 2024</h2>
                <button class="next-month">&gt;</button>
            </div>
            <div class="calendar-grid">
                <!-- Days and dates will be generated dynamically -->
            </div>
        </section>
    </div>

    <style>
        /* Section Teks */

        /* Section Kalender */
        .calendar-container {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            padding: 20px;
            background: url('https://example.com/your-background-image.jpg') no-repeat center center;
            background-size: cover;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .calendar-header h2 {
            font-size: 24px;
            margin: 0;
            color: #fff;
        }

        .calendar-header button {
            background: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        .calendar-header button:hover {
            background: #0056b3;
        }

        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 10px;
        }

        .calendar-day {
            font-weight: bold;
            padding: 10px;
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .calendar-date {
            padding: 20px;
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid #ddd;
            text-align: center;
            border-radius: 5px;
        }

        .calendar-date:hover {
            background: #007bff;
            color: #fff;
            cursor: pointer;
        }

        .calendar-today {
            background: #ffefc1;
            font-weight: bold;
            border: 2px solid #ff9800;
        }
    </style>

    <script>
        const calendarContainer = document.querySelector('.calendar-grid');
        const monthYearHeader = document.getElementById('calendar-month-year');
        const prevMonthBtn = document.querySelector('.prev-month');
        const nextMonthBtn = document.querySelector('.next-month');

        let currentDate = new Date();

        function generateCalendar(date) {
            calendarContainer.innerHTML = `
            <div class="calendar-day">Sun</div>
            <div class="calendar-day">Mon</div>
            <div class="calendar-day">Tue</div>
            <div class="calendar-day">Wed</div>
            <div class="calendar-day">Thu</div>
            <div class="calendar-day">Fri</div>
            <div class="calendar-day">Sat</div>
        `;

            const year = date.getFullYear();
            const month = date.getMonth();
            const firstDay = new Date(year, month, 1).getDay();
            const daysInMonth = new Date(year, month + 1, 0).getDate();
            const today = new Date();

            monthYearHeader.textContent = date.toLocaleString('default', {
                month: 'long',
                year: 'numeric'
            });

            for (let i = 0; i < firstDay; i++) {
                calendarContainer.innerHTML += `<div></div>`;
            }

            for (let day = 1; day <= daysInMonth; day++) {
                const isToday = today.getFullYear() === year && today.getMonth() === month && today.getDate() === day;
                calendarContainer.innerHTML += `
                <div class="calendar-date ${isToday ? 'calendar-today' : ''}">
                    ${day}
                </div>`;
            }
        }

        prevMonthBtn.addEventListener('click', () => {
            currentDate.setMonth(currentDate.getMonth() - 1);
            generateCalendar(currentDate);
        });

        nextMonthBtn.addEventListener('click', () => {
            currentDate.setMonth(currentDate.getMonth() + 1);
            generateCalendar(currentDate);
        });

        generateCalendar(currentDate);
    </script>

@endsection
