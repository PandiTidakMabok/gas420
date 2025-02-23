document.addEventListener("DOMContentLoaded", function () {
    const track = document.querySelector(".brands-track");
    const logos = track.querySelectorAll("img");

    // Hitung total lebar semua logo termasuk margin
    let totalWidth = 0;
    logos.forEach((logo) => {
        totalWidth += logo.offsetWidth + 60; // 60 adalah margin (30px di kiri dan kanan)
    });

    // Set lebar .brands-track sesuai dengan total lebar logo
    track.style.width = `${totalWidth}px`;

    // Duplikasi logo untuk efek scroll yang mulus
    track.innerHTML += track.innerHTML;
});
document.querySelector('.brands-track').addEventListener('mouseenter', () => {
    document.querySelector('.brands-track').style.animationPlayState = 'paused';
});

document.querySelector('.brands-track').addEventListener('mouseleave', () => {
    document.querySelector('.brands-track').style.animationPlayState = 'running';
});