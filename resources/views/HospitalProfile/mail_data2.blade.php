<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Monthly Mail Data</title>
    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
</head>
<body>
    <canvas id="kt_chartjs_1"></canvas>
    <script>
        var ctx = document.getElementById('kt_chartjs_1');

        // Define colors for each mail type
        var colors = {
            '1': '#36a2eb', // Surat Masuk
            '2': '#ff6384', // Surat Keluar
        };

        // Define fonts
        var fontFamily = KTUtil.getCssVariableValue('--bs-font-sans-serif');

        // Chart labels
        const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

        // Chart data
        const monthlyData = {!! json_encode($monthlyData) !!};
        const datasets = [];
        const mailTypes = monthlyData.reduce((acc, data) => {
            if (!acc.includes(data.mail_type)) {
                acc.push(data.mail_type);
                datasets.push({
                    label: data.mail_type === '1' ? 'Surat Masuk' : 'Surat Keluar',
                    data: Array(12).fill(0),
                    backgroundColor: colors[data.mail_type],
                });
            }
            return acc;
        }, []);

        monthlyData.forEach(data => {
            const index = data.month - 1;
            const datasetIndex = mailTypes.indexOf(data.mail_type);
            datasets[datasetIndex].data[index] = data.count;
        });

        const data = {
            labels: labels,
            datasets: datasets
        };

        // Chart config
        const config = {
            type: 'bar',
            data: data,
            options: {
                plugins: {
                    title: {
                        display: false,
                    }
                },
                responsive: true,
                indexAxis: 'x', // Display bars side by side along the x-axis
                scales: {
                    x: {
                        stacked: false, // No longer stacked
                    },
                    y: {
                        stacked: false
                    }
                }
            },
            defaults: {
                global: {
                    defaultFont: fontFamily
                }
            }
        };

        // Init ChartJS
        var myChart = new Chart(ctx, config);
    </script>
</body>
</html>
