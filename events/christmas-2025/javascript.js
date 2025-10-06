document.addEventListener('DOMContentLoaded', function () {

    const swiperWrapper = document.querySelector('.gallery-swiper .swiper-wrapper');
    let mySwiper;

    const getImagesUrl = new URL('get_images.php', window.location.href);

    fetch(getImagesUrl)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(images => {
            if (images.length === 0) {
                swiperWrapper.innerHTML = '<p>No images found in the gallery.</p>';
                return;
            }

            // MODIFIED: Create img tags with src directly
            images.forEach(imageUrl => {
                const slide = `
                    <div class="swiper-slide">
                        <div class="container">
                            <img src="${imageUrl}">
                        </div>
                    </div>
                `;
                swiperWrapper.insertAdjacentHTML('beforeend', slide);
            });

            initializeSwiper();
        })
        .catch(error => {
            console.error('Error fetching or processing images:', error);
            swiperWrapper.innerHTML = '<p>Error loading gallery. Please check console for details.</p>';
        });

    function initializeSwiper() {
        mySwiper = new Swiper('.gallery-swiper', {

            
              // Slide Formatting
            centeredSlides: true,
            lazyLoading: true,
            loop: true,
            keyboard: {enabled: true,},



            pagination: false,
            simulateTouch: true,
            grabCursor: true,
            slidesPerView: 2,
            centeredSlides: true,
            spaceBetween: 32,

            navigation: {
                nextEl: '.gallery-nav-next',
                prevEl: '.gallery-nav-prev',
            },
        });

        const modal = document.getElementById('image-modal');
        const modalImg = document.getElementById('modal-image');
        const closeModalBtn = document.querySelector('.close-modal');
        const modalBackground = document.querySelector('.modal-background');

        swiperWrapper.addEventListener('click', (event) => {
            // MODIFIED: Find any img tag, not just one with a specific class
            const clickedImg = event.target.closest('img');
            if (clickedImg) {
                modal.classList.add('show');
                // MODIFIED: Use the direct src from the clicked image
                modalImg.src = clickedImg.src;
            }
        });

        const closeModal = () => {
            modal.classList.remove('show');
        };

        closeModalBtn.addEventListener('click', closeModal);
        modalBackground.addEventListener('click', closeModal);
    }
});