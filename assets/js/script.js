
// vertical slider section

document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.slide');
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');
    const dots = document.querySelectorAll('.dot');
    const slideNumber = document.querySelector('.slide-number');
    let currentSlide = 0;
    const totalSlides = slides.length;

    function initSlides() {
        slides.forEach((slide, index) => {
            slide.style.transform = `translateY(${100 * index}%)`;
        });
        updateSlideNumber();
    }

    function updateDots() {
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentSlide);
        });
    }

    function updateSlideNumber() {
        slideNumber.textContent = `${currentSlide + 1}/${totalSlides}`;
    }

    function goToSlide(index) {
        if (index < 0) {
            index = totalSlides - 1;
        } else if (index >= totalSlides) {
            index = 0;
        }
        
        slides.forEach((slide, i) => {
            slide.style.transform = `translateY(${100 * (i - index)}%)`;
        });
        
        currentSlide = index;
        updateDots();
        updateSlideNumber();
    }

    // Event listeners
    prevButton.addEventListener('click', () => {
        goToSlide(currentSlide - 1);
    });

    nextButton.addEventListener('click', () => {
        goToSlide(currentSlide + 1);
    });

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            goToSlide(index);
        });
    });

    // Initialize
    initSlides();
});


//for Our Experience section



// Counter Animation using Intersection Observer
function startCounters(entries, observer) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            let counters = document.querySelectorAll('.counter');
            counters.forEach(counter => {
                let target = parseFloat(counter.getAttribute('data-target'));
                let count = 0;
                let increment = target / 70;

                let interval = setInterval(() => {
                    count += increment;
                    if (count >= target) {
                        counter.innerText = target.toLocaleString("en-US", { minimumFractionDigits: 0, maximumFractionDigits: 2 });;
                        clearInterval(interval);
                    } else {
                        counter.innerText = Math.floor(count).toLocaleString("en-US", { minimumFractionDigits: 0, maximumFractionDigits: 2 });;
                    }
                }, 20);
            });
            observer.disconnect(); // Stop observing once animation runs
        }
    });
}

let observer = new IntersectionObserver(startCounters, { threshold: 0.5 });
observer.observe(document.querySelector('.sticky-container'));

// Sticky Fade-Out Effect (Only When Reaching Middle of Section)
window.addEventListener('scroll', function () {
    var section = document.querySelector('.experience-section');
    var sectionOffset = section.offsetTop;
    var scrollPos = window.scrollY;
    var middleOfSection = sectionOffset + (section.offsetHeight / 3);

    if (scrollPos > middleOfSection) {
        document.querySelector('.sticky-container').classList.add('fade-out');
    } else {
        document.querySelector('.sticky-container').classList.remove('fade-out');
    }
});

document.querySelectorAll('.conter-con span').forEach(el => {
    let num = parseFloat(el.textContent.replace(/,/g, '.'));
    if (!isNaN(num)) {
        el.textContent = num.toLocaleString("de-DE");
    }
});
