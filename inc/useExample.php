<!-- you can use this section for usecase or try purpose -->


<section class="animation-box">
    <div class="fifth-text">Final text, now I am done</div>
</section>
<style>
/* .animation-box {
    width: 75%;
    height: 27.5rem;
    background-color: blue;
    margin: 0 auto;
    overflow: hidden;
    position: relative;
}

.animation-container {
    width: 1000rem;
    height: 30rem;
} */

@keyframes bottomFadeOut {
    0% {
        position: absolute;
        bottom: -5rem;
        opacity: 0;
    }

    75% {
        position: absolute;
        bottom: 25%;
        opacity: 1;
    }

    100% {
        opacity: 1;
    }

}


/* @keyframes fadeInOut {
    0% {
        opacity: 0;
    }

    45% {
        opacity: 1;
    }

    100% {
        opacity: 01%;
    }
} */



.fifth-text {
    font-size: 5rem;
    position: absolute;
    left: 5%;
    bottom: 25%;
    opacity: 0;
    color: #F0EBA3;
    animation-name: bottomFadeOut;
    animation-delay: 1s;
    animation-duration: 9s;
}
</style>