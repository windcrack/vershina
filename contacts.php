<?php include_once 'template/header.php' ?>

<main class="container">
    <section class="contacts">
        <h1 class="title-main">Контакты и место рассположение</h1>
        <div class="contact__address">
            <p>Где мы находимся:</p>
            <address>г Смоленск, ул.Тенишевой, 22</address>
        </div>
        <div class="contact__phones">
            <p>Телефоны для связи:</p>
            <a href="tel:7(481) 229-44-54">7(481) 229-44-54</a>
            <a href="tel:8-800-200-40-30">8-800-200-40-30</a>
        </div>
    </section>
    <section class="contact-form">
        <h2 class="title-second">Мы на связи</h2>
        <p>Оставьте свою заявку, и мы свяжемся с Вами</p>
        <form action="" class="contact-form__body">
            <input type="text" placeholder="Ваше имя">
            <input type="text" placeholder="Кто обращается">
            <input type="tel" placeholder="Номер телефона">
            <textarea name="" id="" cols="30" rows="10" placeholder="Опишите Ваш запрос"></textarea>
            <small>Нажимая кнопку “Отправить”, Вы соглашаетесь на обработку персональных данных в соответсвии с Политикой конфеденциальности</small>
            <button type="submit" class="btn">Отправить</button>
        </form>
    </section>
    <section>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2301.481186175881!2d32.05523031600339!3d54.771508074707775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46ce5874c0bfed15%3A0xe05bc614a2311215!2z0YPQuy4g0KLQtdC90LjRiNC10LLQvtC5LCAyMiwg0KHQvNC-0LvQtdC90YHQuiwg0KHQvNC-0LvQtdC90YHQutCw0Y8g0L7QsdC7LiwgMjE0MDE4!5e0!3m2!1sru!2sru!4v1664478126362!5m2!1sru!2sru" width="100%" height="537" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
</main>

<?php include_once 'template/footer.php' ?>