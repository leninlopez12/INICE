<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('INICIO') }}
        </h2>
    </x-slot>

    <div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 mb-8">
            <a href="{{ route('certificados-ad') }}" class="bg-sky-500 hover:bg-sky-600 shadow rounded-lg p-8 flex items-center justify-center text-white">
                <i class="fas fa-certificate mr-2"></i> <!-- Icono de certificado -->
                <h3 class="text-2xl font-semibold">Ir a Certificados</h3>
            </a>
            
            <a href="{{ route('invoices') }}" class="bg-indigo-600 hover:bg-indigo-700 shadow rounded-lg p-8 flex items-center justify-center text-white">
                <i class="fas fa-file-invoice mr-2"></i> <!-- Icono de factura -->
                <h3 class="text-2xl font-semibold">Ir a Factura</h3>
            </a>
            


            <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4 flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Solicitudes Certificados</h3>
                    <p class="text-2xl font-bold text-blue-500">2896</p>
                </div>
                <div class="text-blue-500">
                    <i class="fas fa-certificate text-4xl"></i>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4 flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Invoices</h3>
                    <p class="text-2xl font-bold text-yellow-500">2</p>
                </div>
                <div class="text-yellow-500">
                    <i class="fas fa-hourglass-half text-4xl"></i>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4 flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Total Invoices</h3>
                    <p class="text-2xl font-bold text-green-500">10</p>
                </div>
                <div class="text-green-500">
                    <i class="fas fa-check-circle text-4xl"></i>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4 flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Rechazados Certificados</h3>
                    <p class="text-2xl font-bold text-red-500">45</p>
                </div>
                <div class="text-red-500">
                    <i class="fas fa-times-circle text-4xl"></i>
                </div>
            </div>
        </div>
        <!-- Stats Section -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-8">
            <!-- Total Certificates -->
            <div class="bg-fucsia text-white rounded-lg p-6 shadow-lg flex items-center justify-between">
                <div>
                    <h3 class="text-2xl font-semibold">Total Certificados</h3>
                    <p class="text-4xl font-bold" id="certificatesCount">1,234</p>
                </div>
                <div class="text-white">
                    <i class="fas fa-certificate text-4xl"></i>
                </div>
            </div>

            <!-- Active Users -->
            <div class="bg-blue-600 text-white rounded-lg p-6 shadow-lg flex items-center justify-between">
                <div>
                    <h3 class="text-2xl font-semibold">Usuarios Activos</h3>
                    <p class="text-4xl font-bold" id="activeUsersCount">524</p>
                </div>
                <div class="text-white">
                    <i class="fas fa-users text-4xl"></i>
                </div>
            </div>

            <!-- Pending Tasks -->
            <div class="bg-yellow-600 text-white rounded-lg p-6 shadow-lg flex items-center justify-between">
                <div>
                    <h3 class="text-2xl font-semibold">Tareas Pendientes</h3>
                    <p class="text-4xl font-bold" id="pendingTasksCount">78</p>
                </div>
                <div class="text-white">
                    <i class="fas fa-tasks text-4xl"></i>
                </div>
            </div>
        </div>
        <br>
        <!-- Charts Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Monthly Certificates Chart -->
            <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6 h-80 relative">
                <h4 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-4">Certificates Datos</h4>
                <canvas id="certificatesChart"></canvas>
            </div>

            <!-- Invoice Completion Rate Chart -->
            <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6 h-80 relative">
                <h4 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-4">Invoice Datos</h4>
                <canvas id="completionRateChart"></canvas>
            </div>
        </div>
        

    </div>
</div>
<canvas id="certificatesChart" style="max-height: 100%;"></canvas>
<canvas id="completionRateChart" style="max-height: 100%;"></canvas>


</x-app-layout>
<!-- Add Chart.js Initialization Script -->
<script>
// Monthly Certificates Issued Chart
const certificatesCtx = document.getElementById('certificatesChart').getContext('2d');
new Chart(certificatesCtx, {
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [{
            label: 'Certificates Issued',
            data: [50, 75, 100, 125, 150, 175, 200, 225, 250, 275, 300, 325],
            backgroundColor: 'rgba(54, 162, 235, 0.6)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
    }
});

// Invoice Completion Rate Chart
const completionRateCtx = document.getElementById('completionRateChart').getContext('2d');
new Chart(completionRateCtx, {
    type: 'doughnut',
    data: {
        labels: ['Completed', 'Pending', 'Rejected'],
        datasets: [{
            data: [60, 30, 10],
            backgroundColor: ['#4CAF50', '#FFC107', '#F44336'],
            borderColor: ['#4CAF50', '#FFC107', '#F44336'],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        cutout: '70%'
    }
});

</script>
<!-- Add the necessary JavaScript for the animation -->
<script>
    // Simulate updating statistics with animation
    const stats = {
        certificates: 1234,
        activeUsers: 524,
        pendingTasks: 78
    };

    function animateStat(elementId, startValue, endValue) {
        const element = document.getElementById(elementId);
        let currentValue = startValue;
        const stepTime = Math.abs(Math.floor(2000 / (endValue - startValue)));
        
        const interval = setInterval(() => {
            currentValue++;
            element.textContent = currentValue.toLocaleString();
            if (currentValue >= endValue) {
                clearInterval(interval);
            }
        }, stepTime);
    }

    // Call the function for each stat
    animateStat('certificatesCount', 0, stats.certificates);
    animateStat('activeUsersCount', 0, stats.activeUsers);
    animateStat('pendingTasksCount', 0, stats.pendingTasks);
</script>