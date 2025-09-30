import './bootstrap';
import 'flowbite';
import Chart from 'chart.js/auto';
import Glide from '@glidejs/glide';
import '@glidejs/glide/dist/css/glide.core.min.css';
import '@glidejs/glide/dist/css/glide.theme.min.css';

/* ===========================
   Glide.js Slider (game-slider)
=========================== */
new Glide('.game-slider', {
  type: 'carousel',        // carousel biasa
  startAt: 0,              // mulai dari slide pertama
  perView: 2,              // jumlah slide terlihat
  gap: 20,                 // jarak antar slide
  autoplay: 0,             // 0 = continuous marquee
  hoverpause: true,        // pause saat hover
  animationDuration: 3000, // lama animasi per scroll
  breakpoints: {           // responsive
    768: { perView: 3 },
    1024: { perView: 4 }
  }
}).mount();

/* ===========================
   Chart.js
=========================== */
// Monthly Sales Chart
const salesChartEl = document.getElementById('monthlySalesChart');
if (salesChartEl) {
  new Chart(salesChartEl, {
    type: 'line',
    data: {
      labels: JSON.parse(salesChartEl.dataset.labels || '["Jan","Feb","Mar","Apr"]'),
      datasets: [{
        label: 'Penjualan',
        data: JSON.parse(salesChartEl.dataset.values || '[1000000,2000000,1500000,3000000]'),
        borderColor: '#4F46E5',
        backgroundColor: 'rgba(79,70,229,0.2)',
        fill: true,
        tension: 0.4
      }]
    }
  });
}

// Products by Category
const categoryChartEl = document.getElementById('productsCategoryChart');
if (categoryChartEl) {
  new Chart(categoryChartEl, {
    type: 'doughnut',
    data: {
      labels: JSON.parse(categoryChartEl.dataset.labels || '[]'),
      datasets: [{
        data: JSON.parse(categoryChartEl.dataset.values || '[]'),
        backgroundColor: ['#3B82F6','#10B981','#F59E0B','#8B5CF6']
      }]
    },
    options: { plugins: { legend: { position: 'bottom' } } }
  });
}

/* ===========================
   Page Transition
=========================== */
document.addEventListener("DOMContentLoaded", () => {
  const content = document.querySelector(".page-content");
  if (content) {
    setTimeout(() => content.classList.add("page-enter"), 50);
  }
});
