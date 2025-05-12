document.addEventListener('DOMContentLoaded', function() {
    const grid = document.getElementById('masonry-gallery');

    if (grid) {
        function randomizeSizes() {
            const items = document.querySelectorAll('.masonry-item');
            const sizeClasses = ['small', 'medium', 'large', 'vertical'];

            items.forEach(item => {
                item.classList.remove('small', 'medium', 'large', 'vertical');

                const randomClass = sizeClasses[Math.floor(Math.random() * sizeClasses.length)];
                item.classList.add(randomClass);
            });
        }

        imagesLoaded(grid, function() {
            randomizeSizes();

            const items = document.querySelectorAll('.masonry-item');
            items.forEach((item, index) => {
                setTimeout(() => {
                    item.style.opacity = '1';
                    item.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });

        grid.addEventListener('click', function(e) {
            if (e.target.tagName === 'IMG') {
                e.target.classList.toggle('expanded');
            }
        });
    }
});