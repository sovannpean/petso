@extends('dashboard')

@section('content')
<div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4 mt-4">
        <div class="text-center pt-5 pb-5 border-2 border-dashed border-[#ffe7ab] rounded-lg">
            <div>
                <i class="fa-solid fa-heart-pulse text-6xl pb-5 text-[#ffe7ab]"></i>
                <h1 class="text-3xl font-mono font-semibold text-[#ffe7ab]">Total Products: {{ $productCount }}</h1>
            </div>
        </div>
        <div class="text-center pt-5 pb-5 border-2 border-dashed border-[#a5dfe0] rounded-lg">
            <div>
                <i class="fa-solid fa-users text-6xl pb-5 text-[#a5dfe0]"></i>
                <h1 class="text-3xl font-mono font-semibold text-[#a5dfe0]">Total Categories: {{ $categoryCount }}</h1>
            </div>
        </div>
    </div>
    <div class="mt-10">
        <canvas id="entityChart" width="400" height="400"></canvas>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('entityChart').getContext('2d');
    var entityChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Product', 'Category',],
            datasets: [{
                label: 'Entity Distribution',
                data: [{{ $productCount}}, {{ $categoryCount }}],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(255, 206, 86, 0.5)',
                    'rgba(75, 192, 192, 0.5)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            title: {
                display: true,
                text: 'Entity Distribution'
            },
            legend: {
                display: true,
                position: 'right'
            }
        }
    });
</script>
@endsection
