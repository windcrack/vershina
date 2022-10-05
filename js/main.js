const navTopItems = document.querySelectorAll('.nav-top__item');
const mobMenuLists = document.querySelector('.mob-menu__lists');
const mobButton = document.querySelector('.mob-menu__btn');
const buttons = document.querySelectorAll('.js-button');
const mainForm = document.querySelector('.modal-body');
const cross = document.querySelector('.modal-body__cross');


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

// modal

function showModal(elems = [], elemForm){
    if(elems.length > 0 && elemForm !== null){
        [...elems].forEach(elem => {
            elem.addEventListener('click', ()=>{
                elemForm.classList.toggle('show');
            })
        })
    }
    
}

function closeForm(elem, modal){
    elem.addEventListener('click', (e)=>{
        modal.classList.toggle('show');
    })
}

mainForm.addEventListener('click', (e)=>{
    if(e.target.classList.contains('modal-body')) mainForm.classList.toggle('show')
})

closeForm(cross, mainForm);



showModal(buttons, mainForm);