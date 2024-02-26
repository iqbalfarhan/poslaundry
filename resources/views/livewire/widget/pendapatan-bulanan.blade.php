<div class="card card-compact border-2 aspect-square overflow-hidden">
    <div class="flex flex-col justify-between h-full">
        <div class="card-body">
            <div class="card-title">Pendapatan bulanan</div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum fuga doloribus deserunt et, illum magni.</p>
        </div>
        <canvas id="myChart" class="scale-110"></canvas>
    </div>
</div>

@script
    <script>
        const ctx = document.getElementById('myChart');
        const data = $wire.datasets;
        console.log(data)

        const labels = data.map(item => item.bulan);
        const values = data.map(item => item.value);

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    data: values,
                    fill: true,
                    tension: 0.3,
                    pointStyle: false,
                    showLine: true
                }]
            },
            options: {
                layout: {
                    padding: 0
                },
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                scales: {
                    y: {
                        display: false,
                    },
                    x: {
                        display: false,
                    }

                }
            }
        });
    </script>
@endscript
