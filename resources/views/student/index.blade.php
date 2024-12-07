<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div class="table-responsive">
        <table class="table table-primary" border="1">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Religion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->religion->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div style="width: 100%; max-width: 800px;">
        <canvas id="religionChart"></canvas>
    </div>


    <script>
        // Pass the religion data to JavaScript
        const religionData = @json($religionData);

        // Prepare data for Chart.js
        const labels = Object.keys(religionData);
        const data = Object.values(religionData);

        const ctx = document.getElementById('religionChart').getContext('2d');
        const religionChart = new Chart(ctx, {
            type: 'bar', // Choose the chart type (e.g., bar, pie, line)
            data: {
                labels: labels,
                datasets: [{
                    label: 'Number of Students by Religion',
                    data: data,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>
