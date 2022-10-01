const navTopItems = document.querySelectorAll('.nav-top__item');
const mobMenuLists = document.querySelector('.mob-menu__lists');
const mobButton = document.querySelector('.mob-menu__btn');

function showElem(btn, elem){
    btn.addEventListener('click', (e) =>{
        let target = e.target;
        elem.classList.toggle('hide');
        if(target.classList.contains('nav-top__item')){
            elem.classList.toggle('hide');
        }
    })
}

showElem(mobButton, mobMenuLists)

function moveItems() {
    if(navTopItems !== null){
        navTopItems.forEach((el, ind) => {
            if (window.matchMedia("(max-width: 850px)").matches) {
                if (ind >= 0) {
                    mobMenuLists.append(el);
                }
            }
        });
    }
}

moveItems()

// sliders

const sliderMain = new Swiper('.slider-main', {
    loop: true,
    effect: "fade",
    autoplay: {
        delay: 5000,
    },
    longSwipesMs: 500,
    
})

const sliderDiplom = new Swiper('.persona-diploms__body', {
    loop: true,
    slidesPerView: 4,
    spaceBetween: 30,
})