const images = document.querySelectorAll('.story-image, .team-image');

images.forEach(image => {
    image.addEventListener('click', function() {
        window.open(this.src, '_blank');
        const lightbox = document.createElement('div');
        lightbox.id = 'lightbox';
        

        const img = document.createElement('img');
        img.src = this.src;
        lightbox.appendChild(img);

        lightbox.addEventListener('click', function() {
            window.open(this.src, '_blank');
            
        });
    });
});