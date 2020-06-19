<section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
        <ul class="promo__list">
            <!--заполните этот список из массива категорий-->
                <?php foreach ($categories as $value): ?>
                <li class="promo__item promo__item--<?= htmlspecialchars($value["code"]); ?>">
                    <a class="promo__link" href="pages/all-lots.html"><?= htmlspecialchars($value["name"]); ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </section>
        <section class="lots">
            <div class="lots__header">
                <h2>Открытые лоты</h2>
            </div>
            <ul class="lots__list">
                <!--заполните этот список из массива с товарами-->
                <?php foreach ($items as $key => $value): ?>
                <li class="lots__item lot">
                    <div class="lot__image">
                        <img src="<?=htmlspecialchars($value["image_link"]); ?>" width="350" height="260" alt="">
                    </div>
                    <div class="lot__info">
                        <span class="lot__category"><?=htmlspecialchars($value["category"]); ?></span>
                        <h3 class="lot__title"><a class="text-link" href="pages/lot.html"><?=htmlspecialchars($value["name"]); ?></a></h3>
                        <div class="lot__state">
                            <div class="lot__rate">
                                <span class="lot__amount">Стартовая цена</span>
                                <span class="lot__cost"><?=get_cost(htmlspecialchars($value["start_price"])); ?></span>
                            </div>
                            <div class="lot__timer timer <?php if (countdown($value["expiration_date"])[0] < 1) : ?>timer--finishing<?php endif; ?>"><?=implode(':',countdown($value["expiration_date"]));?>
                            </div>
                        </div>
                    </div>
                </li>
                <?php endforeach; ?>
        </ul>
    </section>