'use strict';

{

    
        const images = [
         'img/youlose.jpg',
         'img/youlose.jpg',
         'img/youlose.jpg',
         'img/youlose.jpg',
         'img/25cents.jpg',
         'img/1dollar.jpg',
         'img/500dollar.jpg',
         'img/youlose.jpg',
         
         
        ];
    

    let currentIndex = 0;


    const mainImage = document.getElementById('main');
   


    images.forEach((image, index) => {
        const img = document.createElement('img');
        img.src = images[Math.floor(Math.random() * images.length)];
        const li = document.createElement('li');
        li.addEventListener('click', () => {
            mainImage.src = img.src;
            const thumbnails = document.querySelectorAll('.thumbnails > li');
            thumbnails[currentIndex].classList.remove('space');
            currentIndex = index;
            thumbnails[currentIndex].classList.add('space');
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



    let timeoutId;

    function playSlide() {
        timeoutId = setTimeout(() => {
            next.click();
            playSlide();
        }, 95);
    }

   
    let isPlaying = false;

    const play = document.getElementById('play');
    play.addEventListener('click', () => {
        if (isPlaying === false) {
            playSlide();
            play.textContent = 'Stop';
        } else {
            clearTimeout(timeoutId);
            play.textContent = 'Start again';
        }
        isPlaying = !isPlaying;
        
        
    });

}