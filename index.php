<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
//кукобара
?>
	<div class="title">
	    <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/inc_populartovar.php"
	)
);

        ?>

	    </div>
				<div class="catalog_list">
					<div class="catalog_el">
						<div class="cat_el_img">
							<a href=""><img src="<?= SITE_TEMPLATE_PATH ?>/img/produce1.png" alt=""/></a>
							<div class="cat_el_status">
								<div class="red">акция</div>
								<div class="green">новинка</div>
								<div class="blue">бестселлер</div>
							</div>
						</div>
						<div class="cat_el_star">
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/star_orange.png" alt=""/>
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/star_orange.png" alt=""/>
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/star_orange.png" alt=""/>
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/star_orange.png" alt=""/>
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/star_gray.png" alt=""/>
						</div>
						<div class="cat_el_price">
							<div class="cat_price">221 руб.</div>
							<div class="cat_old_price">
								<div class="price">287 руб.</div>
								<div class="sale">-22%</div>
							</div>
						</div>
						<div class="cat_el_name">
							<div class="cat_el_tit"><a href="">Красная Книга</a></div>
							<div class="cat_el_avtor">Константин  Красновский</div>
						</div>
						<a class="favor_bt" href="">В избранное</a>
					</div>
					<div class="catalog_el">
						<div class="cat_el_img">
							<a href=""><img src="<?= SITE_TEMPLATE_PATH ?>/img/produce2.png" alt=""/></a>
						</div>
						<div class="cat_el_star">
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/star_orange.png" alt=""/>
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/star_orange.png" alt=""/>
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/star_orange.png" alt=""/>
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/star_orange.png" alt=""/>
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/star_gray.png" alt=""/>
						</div>
						<div class="cat_el_price">
							<div class="cat_price">221 руб.</div>
						</div>
						<div class="cat_el_name">
							<div class="cat_el_tit"><a href="">Зеленая Книга</a></div>
							<div class="cat_el_avtor">Зенаид Зеленовский</div>
						</div>
						<a class="favor_bt active" href="">В избранное</a>
					</div>
					<div class="catalog_el">
						<div class="cat_el_img">
							<a href=""><img src="<?= SITE_TEMPLATE_PATH ?>/img/produce3.png" alt=""/></a>
						</div>
						<div class="cat_el_star">
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/star_orange.png" alt=""/>
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/star_orange.png" alt=""/>
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/star_orange.png" alt=""/>
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/star_orange.png" alt=""/>
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/star_gray.png" alt=""/>
						</div>
						<div class="cat_el_price">
							<div class="cat_price">90 руб.</div>
							<div class="cat_old_price">
								<div class="price">100 руб.</div>
								<div class="sale">-10%</div>
							</div>
						</div>
						<div class="cat_el_name">
							<div class="cat_el_tit"><a href="">Фиолетовая книга</a></div>
							<div class="cat_el_avtor">Филипп Фиолетов</div>
						</div>
						<a class="favor_bt" href="">В избранное</a>
					</div>
					<div class="catalog_el">
						<div class="cat_el_img">
							<a href=""><img src="<?= SITE_TEMPLATE_PATH ?>/img/produce4.png" alt=""/></a>
						</div>
						<div class="cat_el_star">
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/star_orange.png" alt=""/>
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/star_orange.png" alt=""/>
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/star_orange.png" alt=""/>
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/star_orange.png" alt=""/>
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/star_gray.png" alt=""/>
						</div>
						<div class="cat_el_price">
							<div class="cat_price">450 руб.</div>
						</div>
						<div class="cat_el_name">
							<div class="cat_el_tit"><a href="">Серая Книга</a></div>
							<div class="cat_el_avtor">Сергей Серый</div>
						</div>
						<a class="favor_bt" href="">В избранное</a>
					</div>
					<div class="catalog_el">
						<div class="cat_el_img">
							<a href=""><img src="<?= SITE_TEMPLATE_PATH ?>/img/produce5.png" alt=""/></a>
						</div>
						<div class="cat_el_star">
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/star_orange.png" alt=""/>
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/star_orange.png" alt=""/>
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/star_orange.png" alt=""/>
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/star_orange.png" alt=""/>
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/star_gray.png" alt=""/>
						</div>
						<div class="cat_el_price">
							<div class="cat_price">900 000 руб.</div>
						</div>
						<div class="cat_el_name">
							<div class="cat_el_tit"><a href="">Цвет настроения синий</a></div>
							<div class="cat_el_avtor">Филипп Киркоров</div>
						</div>
						<a class="favor_bt" href="">В избранное</a>
					</div>
					<div class="catalog_el">
						<div class="cat_el_img">
							<a href=""><img src="<?= SITE_TEMPLATE_PATH ?>/img/produce6.png" alt=""/></a>
						</div>
						<div class="cat_el_star">
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/star_orange.png" alt=""/>
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/star_orange.png" alt=""/>
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/star_orange.png" alt=""/>
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/star_orange.png" alt=""/>
							<img src="<?= SITE_TEMPLATE_PATH ?>/img/star_gray.png" alt=""/>
						</div>
						<div class="cat_el_price">
							<div class="cat_price">653 руб.</div>
						</div>
						<div class="cat_el_name">
							<div class="cat_el_tit"><a href="">Blackstar</a></div>
							<div class="cat_el_avtor">Тимур Ильдарович</div>
						</div>
						<a class="favor_bt" href="">В избранное</a>
					</div>
				</div>
			</div>
		</div>
		<div class="white_bg">
			<div class="standart_width">
				<div class="title">
				    <? $APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/inc_preimushestva.php"
	)
);?>
				    </div>
			<?$APPLICATION->IncludeComponent("bitrix:news.list", "adventage_index", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "3",	// Код информационного блока
		"IBLOCK_TYPE" => "other",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "4",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>	    
				
			</div>
		</div>
		<div class="about_bl">
			<div class="about_img">
			    <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/inc_about_img.php"
	)
);?>
				
			</div>
			<div class="about_txt">
			    <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/inc_o_kompanii.php"
	)
);?>
			    
				
		</div>
		<div class="white_bg">
			<div class="standart_width">
				<div class="title">
				    <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/inc_novosti.php"
	)
);?>
				    </div>
				<div class="news_list">
				    <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"news_index", 
	array(
		"ACTIVE_DATE_FORMAT" => "j F, Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "SHOW_COUNTER",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "info",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "3",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "news_index"
	),
	false
);?>

				</div>
				<div class="all_bt_bl">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/inc_news_url.php"
                        )
                    );?>

				</div>
			</div>
		</div>
	</section>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>