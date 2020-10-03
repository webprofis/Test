<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>


11111111


<div class="banner">

	<div class="napravleniya">
		<div>создание</div>
		<div>продвижение</div><br>
		<div>сопровождение</div>
		<div>сайтов</div>
	</div>

	<div class="polosa">
		<div class="kontent">
			<div class="zvonite"><a href="tel:+79266140194"><img src="/bitrix/templates/webprofi/files/zvonite.png" alt=""><br>Позвоните нам<br>+7 (926) 614-01-94</a></div>
			<div class="pishite"><a href="mailto:webprofis@mail.ru"><img src="/bitrix/templates/webprofi/files/pishite.png" alt=""><br>Напишите нам<br>webprofis@mail.ru</a></div>
			<div class="tekst"><span>Профессионально и честно</span></div>
			<div class="zakazat">Заказать</div>
		</div>
	</div>
	
</div>



<script>
	$(document).ready(function() {
		$('.zakazat').click(function() {
			$('html, body').animate({
				 scrollTop: $('div.zayavka').offset().top-95
			}, 1000);
		});
	});	
	
</script>

<a id="uslugi"></a>
<div class="uslugi">
	<h2>Услуги и цены</h2>
	<div class="сeny">
		<div class="block_cena">
			<div class="bitrix"></div>
			<div class="cena">от 30 000 руб.</div>
			<div class="nazvanie_uslugi">Лендинг<br>сайт визитка</div>
			<div class="cherta"></div>
			<div class="opisanie_uslugi">Поможем представить продукт или услугу, создав яркий и запоминающийся промо-сайт.</div>
			<a href="#" class="button"><div>Заказать</div></a>
		</div><div class="block_cena">
			<div class="bitrix"></div>
			<div class="cena">от 50 000 руб.</div>
			<div class="nazvanie_uslugi">Корпоративный<br>сайт</div>
			<div class="cherta"></div>
			<div class="opisanie_uslugi">Разработаем полностью управляемый корпоративный сайт товаров<br>или услуг.</div>
			<a href="#" class="button"><div>Заказать</div></a>
		</div><div class="block_cena">
			<div class="bitrix"></div>
			<div class="cena">от 70 000 руб.</div>
			<div class="nazvanie_uslugi">Сайт каталог<br>интернет-магазин</div>
			<div class="cherta"></div>
			<div class="opisanie_uslugi">Создадим управляемый каталог<br>товаров или услуг, интернет-магазин под ваши требования.</div>
			<a href="#" class="button"><div>Заказать</div></a>
		</div><div class="block_cena">
			<div class="cena">от 5 000 руб./мес.</div>
			<div class="nazvanie_uslugi">Сопровождение<br>сайтов</div>
			<div class="cherta"></div>
			<div class="opisanie_uslugi">Поддержим проект в актуальном состоянии, красиво и качественно наполним.</div>
			<a href="#" class="button"><div>Заказать</div></a>
		</div><div class="block_cena">
			<div class="cena">от 3 000 руб./мес.</div>
			<div class="nazvanie_uslugi">Продвижение<br>сайтов</div>
			<div class="cherta"></div>
			<div class="opisanie_uslugi">Проведём рекламные кампании:<br>SEO, контекстная реклама, SMM, PR и другие.</div>
			<a href="#" class="button"><div>Заказать</div></a>
		</div><div class="block_cena">
			<div class="cena">от 3 000 руб.</div>
			<div class="nazvanie_uslugi">Интернет-маркетинг<br>веб-аналитика</div>
			<div class="cherta"></div>
			<div class="opisanie_uslugi">Проведём всесторонние аудиты сайта, проанализируем все каналы привлечения трафика.</div>
			<a href="#" class="button"><div>Заказать</div></a>
		</div>
	</div>

</div>

<script>
	$(document).ready(function() {
		$('.block_cena .button').click(function(event) {
		
			event.preventDefault(); // отменяем переход по ссылке
			
			$('html, body').animate({
				 scrollTop: $('div.zayavka').offset().top-95
			}, 1000);
			
			if ($(this).parent().find(".nazvanie_uslugi").text().indexOf("Лендинг")>=0) {
				$("#usluga_lending_vizitka").addClass("usluga_aktiv");
			}
			if ($(this).parent().find(".nazvanie_uslugi").text().indexOf("Корпоративный")>=0) {
				$("#usluga_korporativnyi").addClass("usluga_aktiv");
			}
			if ($(this).parent().find(".nazvanie_uslugi").text().indexOf("Сайт каталог")>=0) {
				$("#usluga_katalog_magazin").addClass("usluga_aktiv");
			}
			if ($(this).parent().find(".nazvanie_uslugi").text().indexOf("Сопровождение")>=0) {
				$("#usluga_soprovozhdenie").addClass("usluga_aktiv");
			}
			if ($(this).parent().find(".nazvanie_uslugi").text().indexOf("Продвижение")>=0) {
				$("#usluga_prodvizhenie").addClass("usluga_aktiv");
			}
			if ($(this).parent().find(".nazvanie_uslugi").text().indexOf("Интернет-маркетинг")>=0) {
				$("#usluga_marketing_analitika").addClass("usluga_aktiv");
			}
			
			
		});
	});	
	
</script>


<div class="portfolio">
    <h2>Наши работы</h2>
    <div class="block_rabot">
 	<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"nashi_raboty", 
	array(
		"IBLOCK_TYPE" => "webprofi",
		"IBLOCK_ID" => "3",
		"NEWS_COUNT" => "4",
		"SORT_BY1" => "RAND",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "PREVIEW_PICTURE",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Работы",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>       

    </div>
</div>


<a id="o_studii"></a>
<div class="studiya">
	<h2>О студии</h2>
		<div class="o_studii">
			<p>Студия &laquo;ВебПрофи&raquo; &ndash; это небольшая команда профессионалов, более 5 лет работающая на рынке веб-услуг. За это время мы реализовали более 20 проектов, большая часть из которых поддерживается и продвигается нами на постоянной основе. Таким  образом мы накопили достаточный опыт, позволяющий решать многие задачи по разработке сайтов и интернет-маркетингу.</p>
			<p>Принципы нашей работы &ndash; честность и открытость, качество и креатив. Нам нравится делать свою работу хорошо и быть честными с собой и с вами, поэтому мы сразу называем суммы и время, которые не меняются в процессе разработки сайта в большую сторону.</p>
			<p>Мы создаем сайты, которые помогают бизнесу развиваться, делаем это за разумные деньги и в реальные сроки. Звоните и пишите &ndash; мы найдем с вами общий язык.</p>
		</div>
		<div class="preimushestva">
			<h3>Преимущества</h3>
			<ul>
				<li>индивидуальный подход к клиенту &ndash; с нами можно договориться</li>
				<li>качество и профессионализм разработки</li>
				<li>сертифицированный партнёр 1C-Bitrix</li>
				<li>долгосрочное ведение проектов</li>
				<li>5 лет в сфере веб-услуг и 99% выполненных до конца проектов</li>
				<li>работаем по самым надёжным способам разработки, сопровождение и продвижения </li>
				<li>работаем на лучшей коммерческой CMS 1C-Bitrix:
					<ul>
						<li>масштабируемость проекта, удобство доработок, редизайнов</li>
						<li>надёжность</li>
						<li>долгосрочное функционирование сайта</li>
						<li>широкая функциональность</li>
						<li>возможность быстрого поиска специалиста по сопровождению, доработке</li>
						<li>сайт: CMS,  контент, домен и хостинг &ndash; ваша собственность</li>					
					</ul>
				</li>
			</ul>
		</div>
</div>







<?$APPLICATION->IncludeComponent("webprofi:forma", "", Array(),false);?>





<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>