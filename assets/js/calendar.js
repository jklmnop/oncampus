/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */
import '../css/calendar.css';
import '@fullcalendar/common/main.css';

import { Calendar } from '@fullcalendar/core';
import listPlugin from '@fullcalendar/list';

document.addEventListener('DOMContentLoaded', function() {
    const calendarEl = document.getElementById('calendar');

    const calendar = new Calendar(calendarEl, {
        plugins: [listPlugin],
        timeZone: 'America/New_York',
        initialView: 'listDay',

        views: {
            listDay: { buttonText: 'Day' },
            listWeek: { buttonText: 'Week' },
            listMonth: { buttonText: 'Month' },
            listYear: { buttonText: 'Year' }
        },

        headerToolbar: {
            left: 'title',
            center: '',
            right: 'listDay,listWeek,listMonth,listYear'
        },
        eventSources: [
            {
                url: '/fc-load-events',
                method: "GET",
                extraParams: {
                    filters: JSON.stringify({})
                },
                failure: () => {
                    // alert("There was an error while fetching FullCalendar!");
                },
            },
        ],
        editable: true
    });

    calendar.render();
});
