var xValues = ["Outpatient", "Inpatient","Day Surgery", "Emergency" ];
var yValues = [988, 50, 100, 158,];
var barColors = [
    "#F7A9A0",
    "#D9D9D9",
    "#92E3A9",
    "#407BFF",

];

new Chart("myChart", {
    type: "doughnut",
    data: {
        labels:xValues,
        datasets: [{
            backgroundColor: barColors,
            data: yValues
        }]
    },
});