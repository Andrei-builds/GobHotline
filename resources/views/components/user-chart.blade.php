<div class="flex-1">
    <div class="bg-white p-6 rounded-lg shadow-sm">
    <h2 class="text-lg font-semibold mb-4">
        Users Overview
    </h2>

    <div class="h-64">
        <canvas id="userChart"></canvas>
    </div>
</div>

<script>
    const ctx = document.getElementById('userChart');

    new Chart(ctx, {
        type: 'bar',

        data: {
            labels: ['Staff', 'Team Leaders'],

            datasets: [{
                label: 'Number of Users',
                data: [100, 25, 10, 2],
                borderWidth: 1
            }]
        },

        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });
</script>
</div>