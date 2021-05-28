'use strict';

{
    const images = [
         'img/pic00.png',
         'img/pic01.png',
         'img/pic02.png',
         'img/pic03.png',
         'img/pic04.png',
         'img/pic05.png',
         'img/pic06.png',
         'img/pic07.png',
    ]
    let currentIndex = 0;


    const mainImage = document.getElementById('main');
    mainImage.src = images[currentIndex];


    images.forEach((image, index) => {
        const img = document.createElement('img');
        img.src = image;

        const li = document.createElement('li');
        li.addEventListener('click', () => {
            mainImage.src = image;
            const thumbnails = document.querySelectorAll('.thumbnails > li');
            currentIndex = index;
        });

        li.appendChild(img);
        document.querySelector('.thumbnails').appendChild(li);
     });

    const next = document.getElementById('next');
     next.addEventListener('click', () => {
         let target = currentIndex + 1;
         if (target === images.length) {
             target = 0;
         } 
        document.querySelectorAll('.thumbnails > li')[target].click();
    });

    function playSlide() {
        setTimeout(() => {
            next.click();
            playSlide();
        }, 1000);
    }

    const play = document.getElementById('play');
    play.addEventListener('click', () => {
        playSlide();
    });

}