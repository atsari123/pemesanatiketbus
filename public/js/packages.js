document.addEventListener('DOMContentLoaded', () => {
    // memilih semua elemen kartu
    const cards = document.querySelectorAll('.card');
    
    // menambahkan kelas 'fade-in-up' untuk animasi pada setiap kartu
    cards.forEach((card, index) => {
      // menambahkan sedikit delay antara setiap kartu
      setTimeout(() => {
        card.classList.add('fade-in-up');
      }, index * 300); // Delay 100ms per kartu
    });
  });
  