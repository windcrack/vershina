    <div class="call-block">
        <button class="btn call-block__body js-button">
            <svg class="call-block__img">
                <use xlink:href="#call-img"></use>
            </svg>
        </button>
    </div>
    <footer class="container">
        <!-- <div class="footer">
            <div class="footer__copy">Врешина Смоленск 2022</div>
        </div> -->
    </footer>
    <!-- Modal -->
    <div class="modal-body">
        <div class="modal-block">
            <div class="modal-body__cross"><i class="fa-solid fa-xmark"></i></div>
            <h2 class="modal-body__title">Заполните форму</h2>
            <form action="" class="modal-form">
                <input type="text" class="modal-form__input contacts-form__input" placeholder="Ваше имя">
                <div class="contacts-form__input_block">
                    <input type="text" class="contacts-form__input" placeholder="Кто обращается">
                    <div class="contacts-form__input-img" data-title="Возможн указать вымешленное имя по которму наши специалисты будут обращатся к Вам">
                        <img src="img/svg/quest.svg" alt="" />
                    </div>
                </div>
                <input type="tel" class="modal-form__input contacts-form__input" placeholder="Ваш Телефон">
                <textarea class="contacts-form__text" class="modal-form__text" placeholder="Опишите Ваш запрос"></textarea>
                <button class="btn btn__modal">Заказать звонок</button>
                <p class="modal-form__policity">Нажимая на кнопку, я соглашаюсь с условиями обработки и использования моих персональных данных</p>
            </form>
        </div>
    </div>
    <!-- SVG -->

    <svg width="0" height="0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <defs>
            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 23" id="star-img">
                <path
                    d="M12.5 0L15.3064 8.63729H24.3882L17.0409 13.9754L19.8473 22.6127L12.5 17.2746L5.15268 22.6127L7.95911 13.9754L0.611794 8.63729H9.69357L12.5 0Z"
                    fill="#FFFF00" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" fill="none" id="call-img">
                <path
                    d="M16.5206 17.4541L18.3406 15.6341C18.5842 15.3905 18.894 15.2236 19.2315 15.1543C19.569 15.085 19.9194 15.1162 20.2394 15.2441L22.4559 16.1314C22.7826 16.2621 23.0626 16.4877 23.2599 16.7791C23.4571 17.0705 23.5625 17.4143 23.5625 17.7661V21.7969C23.5631 22.0365 23.5148 22.2737 23.4205 22.4939C23.3262 22.7142 23.188 22.9129 23.0143 23.0779C22.8405 23.2428 22.635 23.3706 22.4102 23.4534C22.1853 23.5362 21.946 23.5722 21.7068 23.5593C6.17014 22.5924 3.03227 9.43313 2.4497 4.39401C2.42149 4.14765 2.44575 3.89812 2.52089 3.66181C2.59603 3.42551 2.72035 3.20779 2.88567 3.02298C3.05099 2.83816 3.25356 2.69044 3.48006 2.58953C3.70656 2.48863 3.95186 2.43681 4.19983 2.43751H8.15914C8.51101 2.4375 8.85481 2.54291 9.14619 2.74016C9.43758 2.93741 9.66318 3.21744 9.79389 3.54413L10.6803 5.76063C10.8083 6.08057 10.8395 6.43102 10.7702 6.76854C10.7008 7.10606 10.534 7.41583 10.2903 7.65944L8.47033 9.47944C8.47033 9.47944 9.47945 16.5742 16.5206 17.4541Z"
                    fill="black" />
                <path d="M16.25 3.25V4.875H19.9761L14.625 10.2261L15.7739 11.375L21.125 6.02387V9.75H22.75V3.25H16.25Z"
                    fill="black" />
            </symbol>
        </defs>
    </svg>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script type="module" src="js/main.js"></script>
</body>

</html>