import './bootstrap';
import 'flowbite';
import Chart from 'chart.js/auto';

// Chart 1: Monthly Sales
const salesChartEl = document.getElementById('monthlySalesChart');
if (salesChartEl) {
    new Chart(salesChartEl, {
        type: 'line',
        data: {
            labels: JSON.parse(salesChartEl.dataset.labels || '["Jan","Feb","Mar","Apr"]'),
            datasets: [{
                label: 'Sales',
                data: JSON.parse(salesChartEl.dataset.values || '[1000000, 2000000, 1500000, 3000000]'),
                borderColor: '#4F46E5',
                backgroundColor: 'rgba(79,70,229,0.2)',
                fill: true,
                tension: 0.4
            }]
        }
    });
}

// Chart 2: Products by Category
const categoryChartEl = document.getElementById('productsCategoryChart');
if (categoryChartEl) {
    new Chart(categoryChartEl, {
        type: 'doughnut',
        data: {
            labels: ['Website', 'Mobile App', 'Game', 'Course'],
            datasets: [{
                data: [12, 8, 5, 15],
                backgroundColor: ['#3B82F6','#10B981','#F59E0B','#8B5CF6']
            }]
        },
        options: {
            plugins: {
                legend: { position: 'bottom' }
            }
        }
    });
}

document.addEventListener("DOMContentLoaded", () => {
    const content = document.querySelector(".page-content");
    if (content) {
        setTimeout(() => {
            content.classList.add("page-enter");
        }, 50);
    }
});
