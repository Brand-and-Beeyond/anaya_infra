<style>
    .slider-container {
        position: relative;
        width: 100%;
        max-width: auto;
        margin: auto;
        height: 750px;
        z-index: 33;
    }

    .image-display {
        position: relative;
        width: 100%;
        height: 750px;
    }

    #displayedImage {
        width: 100%;
        height: 750px !important;
        object-fit: cover;
    }

    .marquee {
        position: absolute;
        top: 500px;
        left: 0;
        right: 0;
        overflow: hidden;
        white-space: nowrap;
    }

    .thumbnail {
        display: inline-block;
        padding: 10px 40px; /* Horizontal padding for spacing */
        margin: 0 150px; /* Increase the margin for spacing between thumbnails */
        font-size: 20px;
        color: #fff;
        cursor: pointer;
        transition: transform 0.3s ease-in-out;
        font-family: "Allerta Stencil", system-ui;
        font-size: 70px;
        font-weight: 400;
        line-height: 107.38px;
        text-shadow: 4px 4px 27.7px #252525;
        text-transform: capitalize;
    }

    .marquee-inner {
        display: inline-block;
        white-space: nowrap;
        animation: marquee 50s linear infinite; /* Adjusted duration */
        width: max-content;
        padding-left: 50px; /* Optional: Add padding at the start */
    }

    .marquee-inner span {
        display: inline-block;
        padding: 10px;
        font-size: 70px;
        color: #fff;
        transition: transform 0.3s ease-in-out;
        text-shadow: 4px 4px 27.7px #252525;
        text-transform: capitalize;
    }

    .thumbnail.active {
        transform: scale(1.14);
        color: #FF7425;
    }

    @keyframes marquee {
        from {
            transform: translateX(10%);
        }

        to {
            transform: translateX(-80%); 
        }
    }
</style>


<div class="slider-container pb-20">

    <div class="image-display">
        <div class="marquee">
            <div class="marquee-inner">
                <span class="thumbnail" data-image="images/projects/touchwood_bliss.jpg">Touchwood Bliss</span>
                <span class="thumbnail" data-image="images/projects/ashoka.jpg">Ashoka Medicover</span>
                <span class="thumbnail" data-image="https://touchwoodbliss.com/images/villa-slide/farmsyde.jpeg">Namco Bank</span>
                <span class="thumbnail" data-image="https://touchwoodbliss.com/images/villa-slide/tent-view.jpg">Thumbnail 4</span>

                <!-- Duplicate the items for seamless scroll -->
                <span class="thumbnail" data-image="images/projects/touchwood_bliss.jpg">Touchwood Bliss</span>
                <span class="thumbnail" data-image="images/projects/ashoka.jpg">Ashoka Medicover</span>
                <span class="thumbnail" data-image="https://touchwoodbliss.com/images/villa-slide/farmsyde.jpeg">Namco Bank</span>
                <span class="thumbnail" data-image="https://touchwoodbliss.com/images/villa-slide/tent-view.jpg">Thumbnail 4</span>
                <span class="thumbnail" data-image="images/projects/touchwood_bliss.jpg">Touchwood Bliss</span>
                <span class="thumbnail" data-image="images/projects/ashoka.jpg">Ashoka Medicover</span>
                <span class="thumbnail" data-image="https://touchwoodbliss.com/images/villa-slide/farmsyde.jpeg">Namco Bank</span>
                <span class="thumbnail" data-image="https://touchwoodbliss.com/images/villa-slide/tent-view.jpg">Thumbnail 4</span>
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const thumbnails = document.querySelectorAll('.thumbnail');
        const marquee = document.querySelector('.marquee');
        const marqueeInner = document.querySelector('.marquee-inner');

        // Initially set the displayed image to the first thumbnail
        const displayedImage = document.createElement('img');
        displayedImage.id = 'displayedImage';
        displayedImage.src = thumbnails[0].getAttribute('data-image');
        displayedImage.alt = 'Displayed Image';
        displayedImage.style.width = '100%';
        displayedImage.style.height = 'auto';
        document.querySelector('.image-display').prepend(displayedImage);

        function checkCenter() {
            const marqueeRect = marquee.getBoundingClientRect();
            const marqueeCenter = marqueeRect.left + marqueeRect.width / 2;

            thumbnails.forEach(thumbnail => {
                const thumbnailRect = thumbnail.getBoundingClientRect();
                const thumbnailCenter = thumbnailRect.left + thumbnailRect.width / 2;

                if (Math.abs(marqueeCenter - thumbnailCenter) < thumbnailRect.width / 2) {
                    thumbnail.classList.add('active');
                    const newImageSrc = thumbnail.getAttribute('data-image');
                    if (displayedImage.src !== newImageSrc) {
                        displayedImage.src = newImageSrc;
                    }
                } else {
                    thumbnail.classList.remove('active');
                }
            });
        }

        // Adjust marquee speed and animation
        function adjustMarqueeSpeed() {
            marqueeInner.style.animationDuration = '50s'; // Adjust duration as needed
            marqueeInner.style.animationTimingFunction = 'linear'; // Smooth, constant speed
        }

        // Initial check to set the active thumbnail and image
        checkCenter();

        // Adjust the interval for checking the center
        setInterval(checkCenter, 200); // Check frequently
        adjustMarqueeSpeed();

        window.addEventListener('resize', adjustMarqueeSpeed); // Adjust speed on window resize if needed
    });
</script>
