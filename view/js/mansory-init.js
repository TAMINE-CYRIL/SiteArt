document.addEventListener('DOMContentLoaded', function() {
    imagesLoaded(grid, function() {
        // Initialiser Masonry
        const masonry = new Masonry(grid, {
            itemSelector: '.masonry-item',
            columnWidth: '.masonry-item',
            percentPosition: true,
            gutter: 15,
            transitionDuration: '0.3s'
        });
    });
});