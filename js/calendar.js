const date = new Date();
const renderCalendar = function () {
    const month = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December '
    ];
    date.setDate(1);
    const firstDayIndex = date.getDay();
    const lastDayIndex = new Date(date.getFullYear(), date.getMonth() + 1, 0).getDay();
    document.querySelector('.date h5').innerHTML = month[date.getMonth()] + ',' + ' ' + date.getFullYear();
    const monthDays = document.querySelector('.days');
    const lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0).getDate();
    const prevLastDay = new Date(date.getFullYear(), date.getMonth(), 0).getDate();
    const nextDays = 7 - lastDayIndex - 1;
    let days = '';
    for (let x = firstDayIndex; x > 0; x--) {
        days = `<div class="prev-date">${prevLastDay - x + 1}</div>`;

    }

    for (let i = 1; i <= lastDay; i++) {
        if (i === new Date().getDate() && date.getMonth() === new Date().getMonth()) {
            days += `<div class="today">${i}</div>`;
        } else {
            days += `<div class="today">${i}</div>`;
        }

    }
    for (let y = 1; y <= nextDays; y++) {
        days += `<div class="next-date">${y}</div>`;
        monthDays.innerHTML = days;

    }
};
renderCalendar();
document.querySelector('.prev').addEventListener("click", () => {
    date.setMonth(date.getMonth() - 1);
    renderCalendar();
});
document.querySelector('.next').addEventListener("click", () => {
    date.setMonth(date.getMonth() + 1);
    renderCalendar();
});
