<div class="card card-compact border-2 aspect-square overflow-hidden">
    <div class="card-body">
        <div class="card-title">Status laundry</div>
        <div class="grid place-content-center">
            <div class="w-64 h-full aspect-square">
                <canvas id="statusLaundry"></canvas>
            </div>
        </div>
    </div>
</div>

@script
    <script>
        const ctx = document.getElementById('statusLaundry');
        const data = $wire.datasets;

        const labels = data.map(item => item.bulan);
        const values = data.map(item => item.value);

        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    data: values,
                    fill: true,
                    pointStyle: 'circle',
                    borderWidth: 3
                }]
            },
            options: {
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
