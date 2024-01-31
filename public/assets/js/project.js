"use strict";

var KTProjectOverview = function () {
    var primaryColor = KTUtil.getCssVariableValue("--bs-primary"),
        lightPrimaryColor = KTUtil.getCssVariableValue("--bs-light-primary"),
        successColor = KTUtil.getCssVariableValue("--bs-success"),
        lightSuccessColor = KTUtil.getCssVariableValue("--bs-light-success"),
        gray200Color = KTUtil.getCssVariableValue("--bs-gray-200"),
        gray500Color = KTUtil.getCssVariableValue("--bs-gray-500");

    return {
        init: function () {
            function updateChart(selectedYear) {
                // Assuming getMailCounts is a function to fetch updated MailIn and MailOut values based on the selected year
                var updatedMailCounts = getMailCounts(selectedYear);

                var chart = document.getElementById("project_chart");
                if (chart) {
                    chart.dataset.mailIn = updatedMailCounts.mailIn;
                    chart.dataset.mailOut = updatedMailCounts.mailOut;

                    var chartContext = chart.getContext("2d");
                    new Chart(chartContext, {
                        type: "doughnut",
                        data: {
                            datasets: [{
                                data: [updatedMailCounts.mailIn, updatedMailCounts.mailOut],
                                backgroundColor: ["#00A3FF", "#50CD89"]
                            }],
                            labels: ["Surat Masuk", "Surat Keluar"]
                        },
                        options: {
                            chart: {
                                fontFamily: "inherit"
                            },
                            cutoutPercentage: 75,
                            responsive: !0,
                            maintainAspectRatio: !1,
                            cutout: "75%",
                            // ... (existing chart options)
                        }
                    });
                }
            }

            var selectYear = document.getElementById('selectYear');
            if (selectYear) {
                // Initial update on page load
                updateChart(parseInt(selectYear.value));

                // Add event listener for the select element
                selectYear.addEventListener('change', function () {
                    // Call the updateChart function when the year changes
                    updateChart(parseInt(selectYear.value));
                });
            }

            // ... (existing code)
        }
    };
}();

KTUtil.onDOMContentLoaded((function () {
    KTProjectOverview.init();
}));
