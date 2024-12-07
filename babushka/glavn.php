<p class="review-text">Это лучший питомец, которого я когда-либо имела! Он всегда радует меня своим настроением.</p> 
                                <span class="review-date">15 ноября 2024</span> 
                            </div> 
                        </div> 
                        <div class="swiper-slide"> 
                            <div class="review-card"> 
                                <img src="images/img/lev.jpg" alt="Фото животного" class="animal-photo"> 
                                <h3 class="author-name">Сидор</h3> 
                                <p class="review-text">Мой кот — это просто находка! Он всегда веселит и приносит радость в дом.</p> 
                                <span class="review-date">14 ноября 2024</span> 
                            </div> 
                        </div> 
                        <div class="swiper-slide"> 
                            <div class="review-card"> 
                                <img src="images/img/lev.jpg" alt="Фото животного" class="animal-photo"> 
                                <h3 class="author-name">Мария Иванова</h3> 
                                <p class="review-text">Я не представляю свою жизнь без своей собаки. Она — мой лучший друг и верный компаньон.</p> 
                                <span class="review-date">13 ноября 2024</span> 
                            </div> 
                        </div> 
                        <div class="swiper-slide"> 
                            <div class="review-card"> 
                                <img src="images/img/lev.jpg" alt="Фото животного" class="animal-photo"> 
                                <h3 class="author-name">Владик</h3> 
                                <p class="review-text">Очень смешной и  прикольный</p> 
                                <span class="review-date">13 ноября 2024</span> 
                            </div> 
                        </div> 
                    </div> 
                    <div class="swiper-button-next"></div> 
                    <div class="swiper-button-prev"></div> 
                </div> 
            </div> 
        </section> 
        <section class="sub"> 
            <div class="container"> 
                <form>  
                    <label for="email">Почта</label> 
                    <input type="email" name="email" id="email" placeholder="example@.com"> 
                    <input type="checkbox"  name="agree" id="agree"> 
                    <label for="agree">Согласие на обработку персональных данных</label> 
                     
                    <button type="submit">Подписаться</button> 
                     
                </form> 
            </div> 
        </section> 
        <!--Подвал сайта--> 
        <footer class="footer"> 
            <div class="container"> 
                <div class="footer-item"> 
                    <a class="tel" href="tel:8800553555">8 800 555 35 55</a> 
                    <a class="mail" href="mailto:mail@newlife.ru">mailto:mail@newlife.ru</a> 
                </div> 
                <div class="footer-item"> 
                    <ul> 
                        <li><a href="glavn.html">Главная</a></li> 
                        <li><a href="#register">Регистрация</a></li> 
                        <li><a href="#login">Авторизация</a></li> 
                        <li><a href="#my">Личный кабинет</a></li> 
                        <li><a href="#animal">Найдено животное</a></li> 
                        <li><a href="#search">Поиск</a></li> 
 
                    </ul> 
                </div> 
                </div> 
             
        </footer> 
    </main> 
    <!-- Swiper JS --> 
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> 
 
    <!-- Initialize Swiper --> 
    <script> 
    var swiper = new Swiper(".mySwiper", { 
        slidesPerView: 3, 
        spaceBetween: 30, 
        navigation: { 
            nextEl: ".swiper-button-next", 
            prevEl: ".swiper-button-prev", 
      }, 
    }); 
    var reviewsSwiper = new