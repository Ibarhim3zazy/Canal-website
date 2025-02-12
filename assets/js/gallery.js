const btns = document.querySelectorAll('.buttons button');
    const imgs = document.querySelectorAll('.images img');
    const modal = document.getElementById('imageModal');
    const modalImg = document.getElementById('modalImage');
    const closeBtn = document.querySelector('.close');
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    let currentImageIndex = -1;
    let filteredImgs = [];

    // Open modal with clicked image
    imgs.forEach((img, index) => {
        img.addEventListener('click', () => {
            currentImageIndex = index;
            modal.style.display = 'flex';
            modalImg.src = img.src;
            filteredImgs = Array.from(imgs).filter(image => image.dataset.img === img.dataset.img);
        });
    });

    // Close modal
    closeBtn.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    // Navigate to next image
    nextBtn.addEventListener('click', () => {
        currentImageIndex = (currentImageIndex + 1) % filteredImgs.length;
        modalImg.src = filteredImgs[currentImageIndex].src;
    });

    // Navigate to previous image
    prevBtn.addEventListener('click', () => {
        currentImageIndex = (currentImageIndex - 1 + filteredImgs.length) % filteredImgs.length;
        modalImg.src = filteredImgs[currentImageIndex].src;
    });

    // Filter images based on button click
    btns.forEach((btn) => {
        btn.addEventListener('click', (e) => {
            imgs.forEach((img) => {
                const imgType = parseInt(img.dataset.img);
                const btnType = parseInt(e.target.dataset.btn);
                if (btnType && imgType !== btnType) {
                    img.classList.add('img-shrink');
                } else {
                    img.classList.remove('img-shrink');
                    img.classList.add('img-expanded');
                }
            });
        });
    });

    // Reset to show all images when 'All' button is clicked
    btns[0].addEventListener('click', () => {
        imgs.forEach(img => {
            img.classList.remove('img-shrink');
            img.classList.add('img-expanded');
        });
    });