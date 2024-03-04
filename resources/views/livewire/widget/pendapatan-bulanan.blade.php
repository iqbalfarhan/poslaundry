<div class="card card-compact border-2 h-full overflow-hidden">
    <div class="flex flex-col justify-between h-full">
        <div class="card-body">
            <div class="card-title">Pendapatan bulanan</div>
            <div class="flex flex-col">
                <h2 class="text-3xl font-bold">Rp. {{ Number::format($bulanini, locale: 'id') }}</h2>
                <span class="text-xs opacity-75">Bulan februari Rp. {{ Number::format($bulanlalu, locale: 'id') }}</span>
            </div>
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
                    tension: 0.1,
                    pointStyle: false,
                    showLine: true,
                    borderWidth: 4
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
