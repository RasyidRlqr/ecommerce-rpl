import './bootstrap';
import 'flowbite';
import Chart from 'chart.js/auto';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    const marquee = document.getElementById('game-marquee');
    marquee.innerHTML += marquee.innerHTML;

    let speed = 1;
    let pos = 0;

    function animate() {
        pos -= speed;
        if (Math.abs(pos) >= marquee.scrollWidth / 2) pos = 0;
        marquee.style.transform = `translateX(${pos}px)`;
        requestAnimationFrame(animate);
    }

    marquee.addEventListener('mouseenter', () => speed = 0);
    marquee.addEventListener('mouseleave', () => speed = 1);

    animate();
});


document.addEventListener("DOMContentLoaded", () => {
  // ===========================
  // Chart.js - Monthly Sales
  // ===========================
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

  // ===========================
  // Chart.js - Products Category
  // ===========================
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
      options: { 
        plugins: { legend: { position: 'bottom' } } 
      }
    });
  }

  // ===========================
  // Page Transition
  // ===========================
  const content = document.querySelector(".page-content");
  if (content) {
    setTimeout(() => content.classList.add("page-enter"), 50);
  }
});
