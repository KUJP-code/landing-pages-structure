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

            // Create img tags with src directly
            images.forEach(imageUrl => {
                const slide = `
                    <div class="swiper-slide">
                            <img src="${imageUrl}">
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
            lazyLoading: true,
            loop: true,
            keyboard: {enabled: true,},
            
            // General Settings
            pagination: false,
            simulateTouch: true,
            grabCursor: true,
            centeredSlides: true,

            // Navigation
            navigation: {
                nextEl: '.gallery-nav-next',
                prevEl: '.gallery-nav-prev',
            },

            // Responsive breakpoints -- ADDED HERE
            breakpoints: {
                1400: {
                    slidesPerView: 3.75,
                         spaceBetween: 16,
                },

                1200: {
                    slidesPerView: 3.5,
                    spaceBetween: 16,

                },


                992: {
                    slidesPerView: 3.25,
                    spaceBetween: 16,
                },
                768: {
                    slidesPerView: 2.75,
                    spaceBetween: 16,
                },

              576: {
                    slidesPerView: 2.5,
                    spaceBetween: 16,
                },

                0: {
                    slidesPerView: 1.25,
                    spaceBetween: 16,
                },
            },
        });

        const modal = document.getElementById('image-modal');
        const modalImg = document.getElementById('modal-image');
        const closeModalBtn = document.querySelector('.close-modal');
        const modalBackground = document.querySelector('.modal-background');

        swiperWrapper.addEventListener('click', (event) => {
            // Find any img tag, not just one with a specific class
            const clickedImg = event.target.closest('img');
            if (clickedImg) {
                modal.classList.add('show');
                // Use the direct src from the clicked image
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