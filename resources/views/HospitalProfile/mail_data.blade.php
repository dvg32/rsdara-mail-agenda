<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Monthly Mail Data</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="monthlyMailChart" width="800" height="400"></canvas>

    <script>
        const monthlyData = {!! json_encode($monthlyData) !!};
        const months = monthlyData.map(data => {
            const monthNumber = data.month;
            return new Date(2022, monthNumber - 1, 1).toLocaleString('default', { month: 'long' });
        });
        const mailTypes = [...new Set(monthlyData.map(data => data.mail_type))];

        const mailTypeLabels = mailTypes.map(mailType => {
            switch (mailType) {
                case 1:
                    return { label: 'Surat Masuk', color: 'green' };
                case 2:
                    return { label: 'Surat Keluar', color: 'blue' };
                default:
                    return 'Unknown';
            }
        });

        const countsByMailType = mailTypes.map(mailType => {
            return monthlyData
                .filter(data => data.mail_type === mailType)
                .map(data => data.count);
        });

        const ctx = document.getElementById('monthlyMailChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar', // Change the type to bar
            data: {
                labels: months,
                datasets: mailTypes.map((mailType, index) => {
                    return {
                        label: mailTypeLabels[index].label,
                        backgroundColor: mailTypeLabels[index].color,
                        data: countsByMailType[index]
                    };
                })
            },
            options: {
                scales: {
                    xAxes: [{
                        stacked: true // Enable stacking for x-axis
                    }],
                    yAxes: [{
                        stacked: true // Enable stacking for y-axis
                    }]
                }
            }
        });
    </script>
</body>
</html>
