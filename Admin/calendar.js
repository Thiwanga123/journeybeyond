document.addEventListener('DOMContentLoaded', function() {
    const calendarTitle = document.getElementById('calendar-title');
    const calendarBody = document.getElementById('calendar-body');
    const prevMonthBtn = document.getElementById('prev-month');
    const nextMonthBtn = document.getElementById('next-month');
    
    let currentYear, currentMonth;

    function generateCalendar(year, month) {
        calendarBody.innerHTML = ''; // Clear previous calendar data

        // Get first day of the month and total days in the month
        const firstDay = new Date(year, month, 1).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();

        // Set calendar title to current month and year
        calendarTitle.innerText = `${new Date(year, month).toLocaleString('default', { month: 'long' })} ${year}`;

        // Create a blank cells for days of the previous month
        let date = 1;
        for (let i = 0; i < 6; i++) { // 6 rows in calendar grid
            const row = document.createElement('tr');

            for (let j = 0; j < 7; j++) { // 7 days in a week
                if (i === 0 && j < firstDay) {
                    const cell = document.createElement('td');
                    cell.innerText = '';
                    row.appendChild(cell);
                } else if (date > daysInMonth) {
                    break; // Stop adding cells once the current month is complete
                } else {
                    const cell = document.createElement('td');
                    cell.innerText = date;
                    row.appendChild(cell);
                    date++;
                }
            }

            calendarBody.appendChild(row);
        }
    }

    function loadCurrentMonth() {
        const now = new Date();
        currentYear = now.getFullYear();
        currentMonth = now.getMonth();
        generateCalendar(currentYear, currentMonth);
    }

    prevMonthBtn.addEventListener('click', function() {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        generateCalendar(currentYear, currentMonth);
    });

    nextMonthBtn.addEventListener('click', function() {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        generateCalendar(currentYear, currentMonth);
    });

    loadCurrentMonth();
});
