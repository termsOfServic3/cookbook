<div  wire:ignore x-data="{
     lastYearOrders: @entangle('lastYearOrders'),
     selectedYear: @entangle('selectedYear'),
     thisYearOrders: @entangle('thisYearOrders'),
     init() {
         const ctx = document.getElementById('myChart').getContext('2d');

         // Инициализация графика
             myChart = new Chart(ctx, {
             type: 'bar',
             data: {
                 labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                 datasets: [
                     {
                         label: `${this.selectedYear - 1} Orders`,
                         backgroundColor: 'lightgray',
                         data: this.lastYearOrders,
                         borderWidth: 1
                     },
                     {
                         label: `${this.selectedYear} Orders`,
                         backgroundColor: 'lightgreen',
                         data: this.thisYearOrders,
                         borderWidth: 1
                     },
                 ]
             },
             options: {
                 scales: {
                     y: {
                         beginAtZero: true
                     }
                 }
             }
         });

         // Обработка события обновления графика от Livewire
         Livewire.on('updateTheChart', () => {
             myChart.data.datasets[0].label = `${this.selectedYear - 1} Orders`;
             myChart.data.datasets[1].label = `${this.selectedYear} Orders`;
             myChart.data.datasets[0].data = this.lastYearOrders;
             myChart.data.datasets[0].data = this.thisYearOrders;
             myChart.update();
         });
     }
}">
    <span>Year: </span>
    <select name="selectedYear" id="selectedYear" class="border" wire:model="selectedYear" wire:change="updateOrdersCount">
        @foreach ($availableYears as $year)
            <option value="{{ $year }}">{{ $year }}</option>
        @endforeach
    </select>
    <div>
        Selected: <span x-text="selectedYear"></span>
    </div>
    <div class="my-6">
        <div>
            <span x-text="selectedYear - 1"></span> Orders:
            <span x-text="lastYearOrders.reduce((a, b) => a + b)"></span>
        </div>
        <div>
            <span x-text="selectedYear"></span> Orders:
            <span x-text="thisYearOrders.reduce((a, b) => a + b)"></span>
        </div>
    </div>
    <canvas id="myChart" x-ref="canvas"></canvas>
</div>



