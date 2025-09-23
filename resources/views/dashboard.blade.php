<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | HPZ Crew</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

    <div class="container-fluid mt-4">
        <h1 class="h3 mb-4">Tracking & Analytics Dashboard</h1>

        <div class="row">
            <!-- Total Anggota -->
            <div class="col-md-3 mb-4">
                <div class="card text-white bg-dark border-light shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Total Anggota</h5>
                        <h2 class="fw-bold">1,245</h2>
                    </div>
                </div>
            </div>

            <!-- Aktivitas -->
            <div class="col-md-3 mb-4">
                <div class="card bg-danger text-white shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Aktivitas</h5>
                        <p>Posting: <strong>320</strong></p>
                        <p>Reach: <strong>12,450</strong></p>
                        <p>Penjualan: <strong>85</strong></p>
                    </div>
                </div>
            </div>

            <!-- Engagement IG -->
            <div class="col-md-3 mb-4">
                <div class="card bg-primary text-white shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Engagement IG</h5>
                        <h2 class="fw-bold">6.5%</h2>
                        <small>real-time update</small>
                    </div>
                </div>
            </div>

            <!-- Engagement TikTok -->
            <div class="col-md-3 mb-4">
                <div class="card bg-success text-white shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Engagement TikTok</h5>
                        <h2 class="fw-bold">8.2%</h2>
                        <small>real-time update</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Grafik -->
        <div class="card mt-4 shadow-sm bg-dark border-light">
            <div class="card-header bg-black text-white">
                Grafik Aktivitas Bulanan
            </div>
            <div class="card-body">
                <canvas id="activityChart" height="100"></canvas>
            </div>
        </div>
    </div>

    <!-- Bootstrap & Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('activityChart');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Posting',
                    data: [50, 65, 80, 70, 95, 110],
                    borderColor: 'red',
                    backgroundColor: 'rgba(255, 0, 0, 0.2)',
                    fill: true,
                },
                {
                    label: 'Reach',
                    data: [500, 700, 1200, 1000, 1500, 1800],
                    borderColor: 'blue',
                    backgroundColor: 'rgba(0, 0, 255, 0.2)',
                    fill: true,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { labels: { color: 'white' } }
                },
                scales: {
                    x: { ticks: { color: 'white' } },
                    y: { ticks: { color: 'white' } }
                }
            }
        });
    </script>
</body>
</html>
