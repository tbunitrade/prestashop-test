{**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{extends file='page.tpl'}


    {block name='page_content_container'}
      <section id="content" class="page-home" style="display: none">
        {block name='page_content_top'}{/block}

        {block name='page_content'}
          {block name='hook_home'}
            {$HOOK_HOME nofilter}
          {/block}
        {/block}
      </section>
        <section class="noskiHome">

            <div class="row">

                <div class="col-sm-12 col-md-4">

                    <ul class="homeCategorymenu">
                        <li class="menu-item"><a href="/uk/10-tm-furia">ТМ Furia:</a></li>
                        <li class="menu-item"><a href="/uk/14-tm-conte">ТМ Conte::</a></li>
                        <li class="menu-item"><a href="">ТМ Акцент:</a></li>
                        <li class="menu-item"><a href="">ТМ Бонус:</a></li>
                        <li class="menu-item"><a href="">ТМ Дюна:</a></li>
                        <li class="menu-item"><a href="">ТМ Легка хода ОПТ:</a></li>
                        <li class="menu-item"><a href="">ТМ Легка хода розница/мелкий опт:</a></li>
                    </ul>

                </div>

                <div class="col-cm-12 col-md-8">

                    <div class="hGold">
                        <span>Добро пожаловать</span>
                        на сайт официального  дистрибьютора  торговых марок:
                    </div>

                    <p class="hTitle">
                        ТМ Акцент, ТМ Бонус, ТМ Легка хода, ТМ Lightstep, ТМ Дюна, TM Furia
                    </p>

                    <p class="pClassic">
                        У нас Вы можете купить оптом:  крупным и мелкий опт:
                        <br>
                        Носки мужские, женские, детские; колготки для детей, колготы женские. В ассортименте так же присутствуют гольфы осенние, зимние, мужские, женские и детские; следы; леггинсы; чулки женские (полиамид), носки спортивные.
                    </p>


                    <ul class="partnersList">

                        <h2>Партнёрам мы гарантируем:</h2>

                    <li class="menu-item"><h4>1.  Полный и постоянный ассортимент</h4></li>

                    <li class="menu-item"><h4>2.  Оперативность выполнения заказа</h4></li>

                    <li class="menu-item"><h4>3.  Компетентную  консультацию</h4></li>

                    <li class="menu-item"><h4>4.  Индивидуальный подход к каждому покупателю</h4></li>

                    <li class="menu-item"><h4>5.  Помощь в выборе ассортимента для начинающих свой бизнес</h4></li>

                    <li class="menu-item"><h4>6.  Лучшие финансовые и организационные условия для крупно оптовых предприятий</h4></li>

                    <li class=""><h4>7.  Ориентированность на прибыльность Вашего бизнеса</h4></li>

                    </ul>
                </div>
            </div>
        </section>
    {/block}
