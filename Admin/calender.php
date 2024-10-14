<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
    <style>
        #calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        #calendar-title {
            font-size: 1.5em;
            margin: 0;
        }

        #prev-month, #next-month {
            background: none;
            border: none;
            font-size: 1.5em;
            cursor: pointer;
            color: #5A8CFF;
        }

        #calendar-table {
            width: 100%;
            border-collapse: collapse;
        }

        #calendar-table th, #calendar-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        #calendar-table th {
            background-color: #f4f4f4;
            color: #333;
        }

        #calendar-table td {
            height: 40px;
            width: 40px;
            transition: background-color 0.3s ease;
        }

        #calendar-table td:hover {
            background-color: #f0f0f0;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="calendar">
        <div id="calendar-header">
            <button id="prev-month">‹</button>
            <h2 id="calendar-title">August 2024</h2>
            <button id="next-month">›</button>
        </div>
        <table id="calendar-table">
            <thead>
                <tr>
                    <th>Sun</th>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thu</th>
                    <th>Fri</th>
                    <th>Sat</th>
                </tr>
            </thead>
            <tbody id="calendar-body">
                <!-- Calendar dates will be populated here by JavaScript -->
            </tbody>
        </table>
    </div>
    <script src="calendar.js"></script>
</body>
</html>
