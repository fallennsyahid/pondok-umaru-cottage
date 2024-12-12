let currentIndex = 0;

function slideLeft() {
    const slider = document.querySelector('.slider');
    const totalImages = slider.children.length;
    currentIndex = (currentIndex > 0) ? currentIndex - 1 : totalImages - 1;
    updateSliderPosition();
}

function slideRight() {
    const slider = document.querySelector('.slider');
    const totalImages = slider.children.length;
    currentIndex = (currentIndex < totalImages - 1) ? currentIndex + 1 : 0;
    updateSliderPosition();
}

function updateSliderPosition() {
    const slider = document.querySelector('.slider');
    const width = slider.clientWidth;
    slider.style.transform = `translateX(${-currentIndex * width}px)`;
}