<div class="slide-container swiper">
    <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
            <div class="card swiper-slide">
                <div class="image-content">
                        <span class="overlay"
                              style="background-image: url('https://i.la-croix.com/1400x933/smart/2022/01/04/1201193112/Photo-dillustration-bateau-croisiere_0.jpg');"></span>
                    <div class="card-image">
                        <!-- <img src="images/profile1.jpg" alt="" class="card-img"> -->
                        <!-- <img class="card-img" src="https://i.la-croix.com/1400x933/smart/2022/01/04/1201193112/Photo-dillustration-bateau-croisiere_0.jpg" alt=""> -->
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">David Dell</h2>
                    <p class="description">The lorem text the section that contains header with having open
                        functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                    <button class="button">View More</button>
                </div>
            </div>
        </div>
    </div>

    <div class="swiper-button-next swiper-navBtn"></div>
    <div class="swiper-button-prev swiper-navBtn"></div>
    <div class="swiper-pagination"></div>
</div>
<style>
    .slide-container {
        max-width: 1120px;
        width: 100%;
        padding: 40px 0;
        min-height: 100vh !important;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .slide-content {
        margin: 0 40px;
        overflow: hidden;
        border-radius: 25px;
    }

    .card {
        border-radius: 25px;
        background-color: #fff;
        border-color: #fff !important;
    }

    .image-content,
    .card-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 10px 14px;
    }

    .image-content {
        position: relative;
        row-gap: 5px;
        padding: 25px 0;
    }

    /* .overlay::before, */
    .overlay::after {
        content: "";
        position: absolute;
        right: 0;
        bottom: -40px;
        height: 40px;
        width: 40px;
        background-color: rgba(123, 188, 209, 50);
    }

    .overlay {
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        background-color: rgba(123, 188, 209, 50);
        background-size: cover;
        border-radius: 25px 25px 0 25px;
    }

    .overlay::after {
        border-radius: 0 25px 0 0;
        background-color: #fff;
    }

    .card-image {
        position: relative;
        height: 150px;
        width: 150px;
        border-radius: 50%;
        /* background: #FFF; */
        padding: 3px;
    }

    .card-image .card-img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        border-radius: 50%;
        border: 4px solid rgba(123, 188, 209, 50);
    }

    .name {
        font-size: 18px;
        font-weight: 500;
        color: #333;
    }

    .description {
        font-size: 14px;
        color: #707070;
        text-align: center;
    }

    .button {
        border: none;
        font-size: 16px;
        color: #fff;
        padding: 8px 16px;
        background-color: rgba(123, 188, 209, 50);
        border-radius: 6px;
        margin: 14px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .button:hover {
        background: #8dd0e680;
    }

    .swiper-navBtn {
        color: #90c5d780 !important;
        transition: color 0.3s ease;
    }

    .swiper-navBtn:hover {
        color: rgba(123, 188, 209, 50);
    }

    .swiper-navBtn::before,
    .swiper-navBtn::after {
        font-size: 35px;
    }

    .swiper-button-next {
        right: 0;
    }

    .swiper-button-prev {
        left: 0;
    }
</style>