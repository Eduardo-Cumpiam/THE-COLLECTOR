




// highlights filter apply

document.addEventListener('DOMContentLoaded', (event) => {
    const prevControl = document.querySelector('.carousel-control-prev');
    const nextControl = document.querySelector('.carousel-control-next');
    const carouselImages = document.querySelectorAll('.carousel-item img');

    function addDimmedClass() {
        carouselImages.forEach(img => img.classList.add('dimmed'));
    }

    function removeDimmedClass() {
        carouselImages.forEach(img => img.classList.remove('dimmed'));
    }

    prevControl.addEventListener('mouseenter', addDimmedClass);
    prevControl.addEventListener('mouseleave', removeDimmedClass);
    nextControl.addEventListener('mouseenter', addDimmedClass);
    nextControl.addEventListener('mouseleave', removeDimmedClass);
});




document.addEventListener('DOMContentLoaded', function () {
    // Function to change the large image
    function changeImage(newSrc) {
        document.getElementById('bigImage').src = newSrc;
    }

    // Get all thumbnail images
    var thumbnails = document.querySelectorAll('.pictureFolder img');

    // Add click event to each thumbnail
    thumbnails.forEach(function (thumbnail) {
        thumbnail.addEventListener('click', function () {
            changeImage(thumbnail.src);
        });
        
    });

    var collapseElement = document.getElementById('galleryPlus');
    var toggleButton = document.querySelector('[data-bs-target="#galleryPlus"] .arrow-icon');

    collapseElement.addEventListener('show.bs.collapse', function() {
      toggleButton.classList.add('rotate');
    });

    collapseElement.addEventListener('hide.bs.collapse', function() {
      toggleButton.classList.remove('rotate');
    });
});



// revelations :O
window.addEventListener('scroll', reveal);

function reveal(){
    var reveals = document.querySelectorAll('.reveal');

    for(var i = 0; i < reveals.length; i++){
        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 150;

        if(revealtop < windowheight - revealpoint){
            reveals[i].classList.add('active');
        } else{
            reveals[i].classList.remove('active');
        }
    }
}

jQuery(document).ready(function( $ ) {
    $(window).scroll(function () {
           if ($(this).scrollTop() > 30) {
            $('.revealLoad').fadeIn();
           } else {
            $('.revealLoad').fadeOut();
           }
          });
    });

