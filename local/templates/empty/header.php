<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<title><?$APPLICATION->ShowTitle();?></title>
<? $APPLICATION->ShowHead(); ?>
<?
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/screen.css');
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/font/font.css');
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/jquery.fancybox.css');
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/jquery.bxslider.css');
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/jquery.formstyler.css');
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/jquery.formstyler.theme.css');

	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery-3.1.1.min.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.fancybox.min.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.bxslider.min.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.formstyler.min.js');
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/main.js');
	
	$isIndex=$APPLICATION->GetCurPage()==SITE_DIR;
	
?>
	
</head>
<body>
<div id="panel"><? $APPLICATION->ShowPanel(); ?><div>
	<header>
		<div class="top_head_white_bl">
			<div class="standart_width">
				<div class="top_head_logo">
				    <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/inc_logo1.php"
	)
);?>
				    </div>
				<div class="top_head_tel_bl">
					<div class="top_head_tel">
					    <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/inc_phone.php"
	)
);?>
						
						<span>
						    <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/inc_grafic.php"
	)
);?>
						    
						      </span>
					</div>
				</div>
				<div class="top_head_favor_bl">
					<div class="top_head_favor">
						<a href="">Избранное</a><span>10</span>
					</div>
				</div>
				<div class="top_head_bt"><a class="green_bt" data-fancybox data-src="#call_back" href="javascript:;">
				    
				    
				    
				    
				    
				    
				    <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/inc_obrzvonok.php"
	)
);?>
				    </a></div>
			</div>
		</div>
		<div class="blue_head_info_bl">
			<div class="standart_width clear_after">
				<div class="header_menu_bl">
                                                        				    <?$APPLICATION->IncludeComponent("bitrix:menu", "header", Array(
                                                        	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                                                        		"CHILD_MENU_TYPE" => "section",	// Тип меню для остальных уровней
                                                        		"DELAY" => "N",	// Откладывать выполнение шаблона меню
                                                        		"MAX_LEVEL" => "3",	// Уровень вложенности меню
                                                        		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                                                        		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                                                        		"MENU_CACHE_TYPE" => "A",	// Тип кеширования
                                                        		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                                                        		"ROOT_MENU_TYPE" => "top_catalog",	// Тип меню для первого уровня
                                                        		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                                                        		"COMPONENT_TEMPLATE" => "horizontal_multilevel"
                                                        	),
                                                        	false
                                                        );?>
					<? /*<ul class="header_menu">
						<li>
							<a class="menu_lvl1_bt arrow active" href=""><span>Каталог</span></a>
							<ul class="menu_lvl2">
								<li>
									<a class="menu_lvl2_bt arrow active" href="">Учебная литература</a>
									<ul class="menu_lvl3">
										<li><a href="">Для школьников</a></li>
										<li><a class="active" href="">Дополнительное образование</a></li>
										<li><a href="">Книги для дошкольников</a></li>
										<li><a href="">Подготовка к ЕГЭ</a></li>
										<li><a href="">Подготовка к ОГЭ (ГИА)</a></li>
										<li><a href="">Словари и разговорники</a></li>
									</ul>
								</li>
								<li>
									<a class="menu_lvl2_bt arrow" href="">Детская литература</a>
									<ul class="menu_lvl3">
										<li><a href="">Для школьников</a></li>
										<li><a href="">Дополнительное образование</a></li>
										<li><a href="">Книги для дошкольников</a></li>
										<li><a href="">Подготовка к ЕГЭ</a></li>
										<li><a href="">Подготовка к ОГЭ (ГИА)</a></li>
										<li><a href="">Словари и разговорники</a></li>
									</ul>
								</li>
								<li>
									<a class="menu_lvl2_bt arrow" href="">Художественная литература</a>
									<ul class="menu_lvl3">
										<li><a href="">Для школьников</a></li>
										<li><a href="">Дополнительное образование</a></li>
										<li><a href="">Книги для дошкольников</a></li>
										<li><a href="">Подготовка к ЕГЭ</a></li>
										<li><a href="">Подготовка к ОГЭ (ГИА)</a></li>
										<li><a href="">Словари и разговорники</a></li>
									</ul>
								</li>
								<li>
									<a class="menu_lvl2_bt arrow" href="">Бизнес-литература</a>
									<ul class="menu_lvl3">
										<li><a href="">Для школьников</a></li>
										<li><a href="">Дополнительное образование</a></li>
										<li><a href="">Книги для дошкольников</a></li>
										<li><a href="">Подготовка к ЕГЭ</a></li>
										<li><a href="">Подготовка к ОГЭ (ГИА)</a></li>
										<li><a href="">Словари и разговорники</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a class="menu_lvl1_bt" href=""><span>Акции</span></a></li>
						<li><a class="menu_lvl1_bt" href=""><span>Доставка</span></a></li>
						<li><a class="menu_lvl1_bt" href=""><span>О компании</span></a></li>
						<li><a class="menu_lvl1_bt" href=""><span>Новости</span></a></li>
						<li><a class="menu_lvl1_bt" href=""><span>Контакты</span></a></li>
					</ul>*/?>
				</div>
				<div class="head_search_bl">
					<form>
						<input type="text" placeholder="Поиск ..."/>
						<input type="submit" value="найти"/>
					</form>
				</div>
			</div>
		</div>
		<? if($isIndex): ?>
		
		<div class="index_slider_bl">
		    
	<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"slider_index", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "DETAIL_PICTURE",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "sale",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
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
			0 => "URL",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "slider_index"
	),
	false
);?>
		    
		<? /*	<ul class="index_slider">
				<li>
					<div class="index_slider_el" style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/img/index_slider_bg.png);">
						<div class="standart_width index_slider_cont">
							<div class="ind_slid_txt_bl">
								<div class="ind_slid_tit">Осенний ценопад</div>
								<div class="ind_slid_txt">Перспективное планирование способствует повышению качества поставленных обществом задач. В частности, синтетическое тестирование прекрасно подходит для реализации стандартных подходов.</div>
								<a class="red_bt" href="">Узнать подробнее</a>
							</div>
							<div class="ind_slid_img"><img src="<?= SITE_TEMPLATE_PATH ?>/img/index_slider1.png" alt=""/></div>
						</div>
					</div>
				</li>
				<li>
					<div class="index_slider_el" style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/img/index_slider_bg.png);">
						<div class="standart_width index_slider_cont">
							<div class="ind_slid_txt_bl">
								<div class="ind_slid_tit">Осенний ценопад</div>
								<div class="ind_slid_txt">Перспективное планирование способствует повышению качества поставленных обществом задач. В частности, синтетическое тестирование прекрасно подходит для реализации стандартных подходов.</div>
								<a class="red_bt" href="">Узнать подробнее</a>
							</div>
							<div class="ind_slid_img"><img src="<?= SITE_TEMPLATE_PATH ?>/img/index_slider1.png" alt=""/></div>
						</div>
					</div>
				</li>
			</ul>
			*/ ?>
		</div>
		<? endif; ?>
	</header>
	<section>
	    
	    <? if(!$isIndex): ?>
	    		<div class="bread_crumbs_bl">
			        <div class="standart_width">    
                                	    <?$APPLICATION->IncludeComponent(
                                	"bitrix:breadcrumb",
                                	"page",
                                	Array(
                                		"PATH" => "",
                                		"SITE_ID" => "s1",
                                		"START_FROM" => "0"
                                	)
                                );?><br>
                    </div>
		        </div>

                                
                                <? endif; ?>
		<div class="white_bg">
			<div class="standart_width">
			    
			    <? if(!$isIndex): ?>
			    
			    <div class="title"><?$APPLICATION->ShowTitle(false);?></div>
			    <? endif; ?>



