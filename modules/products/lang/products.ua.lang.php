<?php
/**
 * Ukrainian Language File for the Products Module (products.ua.lang.php)
 *
 * @package products
 * @author CrazyFreeMan (http://simple-website.in.ua/) 
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Module Config
 */

$L['cfg_autovalidateprd'] = 'Автоматичне затвердження товарів';
$L['cfg_autovalidateprd_hint'] = 'Автоматично затверджувати публікацію товарів, створених користувачем з правом адміністрування розділу';
$L['cfg_count_admin'] = 'Рахувати відвідування адміністраторів';
$L['cfg_count_admin_hint'] = 'Включити відвідування адміністраторів в статистику відвідуваності сайту';
$L['cfg_maxlistsperpage'] = 'Макс. кількість категорій на сторінці';
$L['cfg_maxlistsperpage_hint'] = ' ';
$L['cfg_order'] = 'Поле сортування';
$L['cfg_title_products'] = 'Формат заголовка товару';
$L['cfg_title_prd_hint'] = 'Опції: {TITLE}, {CATEGORY}';
$L['cfg_way'] = 'Напрям сортування';
$L['cfg_truncateprdtext'] = 'Обмежити розмір тексту в списках товарів';
$L['cfg_truncateprdtext_hint'] = '0 для відключення';
$L['cfg_keywords'] = 'Ключові слова';

$L['info_desc'] = 'Управління контентом: товари та послуги';

/**
 * Structure Confing
 */

$L['cfg_order_params'] = array(); // Redefined in cot_products_config_order()
$L['cfg_way_params'] = array($L['Ascending'], $L['Descending']);

/**
 * Admin Products Section
 */

$L['adm_queue_deleted'] = 'Товар вилучений до кошика';
$L['adm_valqueue'] = 'У черзі на затвердження';
$L['adm_validated'] = 'Затверджені';
$L['adm_structure'] = 'Структура (категорії)';
$L['adm_sort'] = 'Сортувати';
$L['adm_sortingorder'] = 'Порядок сортування за замовчуванням в категорії';
$L['adm_showall'] = 'Показати все';
$L['adm_help_prd'] = '';

/**
 * Products add and edit
 */

$L['prd_addtitle'] = 'Додати товар';
$L['prd_addsubtitle'] = 'Заповніть необхідні поля та натисніть "Відправити" для продовження';
$L['prd_edittitle'] = 'Інформація про товар';
$L['prd_editsubtitle'] = 'Змініть необхідні поля та натисніть "Відправити" для продовження';

$L['prd_aliascharacters'] = 'Неприпустимо використання символів \'+\', \'/\', \'?\', \'%\', \'#\', \'&\' в аліасах';
$L['prd_catmissing'] = 'Код категорії відсутній';
$L['prd_clone'] = 'Клонувати товар';
$L['prd_conproducts_delete'] = 'Ви дійсно хочете видалити цей товар?';
$L['prd_conproducts_validate'] = 'Хочете затвердити цей товар?';
$L['prd_conproducts_unvalidate'] = 'Ви дійсно хочете відправити цей товар в чергу на затвердження?';
$L['prd_drafts'] = 'Чернетки';
$L['prd_drafts_desc'] = 'Товари, збережені в ваших чернетках';
$L['prd_notavailable'] = 'Товар буде опублікований через';
$L['prd_textmissing'] = 'Опис товару не повинно бути порожнім';
$L['prd_titletooshort'] = 'Тема товару занадто коротка або відсутня';
$L['prd_validation'] = 'Очікують затвердження';
$L['prd_validation_desc'] = 'Ваші товари, які ще не затверджені адміністратором';

$L['prd_title'] = 'Назва товару';
$L['prd_desc'] = 'Короткий опис';

$L['prd_metakeywords'] = 'Ключові слова';
$L['prd_metatitle'] = 'Meta-заголовок';
$L['prd_metadesc'] = 'Meta-опис';

$L['prd_cost'] = 'Ціна';

$L['prd_formhint'] = 'Після заповнення форми товар буде поміщено в чергу на затвердження і буде приховано доти, поки модератор або адміністратор не затвердять його публікацію у відповідному розділі. Уважно перевірте правильність заповнення полів форми. Якщо вам знадобиться змінити зміст товару, то ви зможете зробити це пізніше, але товар знову буде відправлений на затвердження.';

$L['prd_prdid'] = 'ID товару';
$L['prd_deleteproducts'] = 'Видалити товар';

$L['prd_savedasdraft'] = 'Товар збережено в чернетках';

/**
 * Products statuses
 */

$L['prd_status_draft'] = 'Чернетки';
$L['prd_status_pending'] = 'На розгляді';
$L['prd_status_approved'] = 'Затверджено';
$L['prd_status_published'] = 'Опубліковано';

/**
 * Moved from theme.lang
 */

$L['prd_linesperpage'] = 'Записів на сторінку';
$L['prd_linesinthissection'] = 'Записів у розділі';

$L['Products'] = "Товари";
$L['products_catalog'] = "Каталог товарів";
$L['products_new'] = "Нові товари";

$Ls['products'] = "товар,товару,товарів";
$Ls['unvalidated_products'] = "незатверджений товар, незатверджені товари, незатверджених товарів";
$Ls['prd_in_drafts'] = "товар в чернетках, товара в чернетках, товарів в чернетках";

$L['prd_submitnewprd'] = 'Додати товар';

// Параметры поиск товаров
$L['plu_products_set_sec'] = 'Розділи';
$L['plu_products_res_sort1'] = 'Датою публікації';
$L['plu_products_res_sort2'] = 'Заголовку';
$L['plu_products_res_sort3'] = 'Популярності';
$L['plu_products_res_sort3'] = 'Категорії';
$L['plu_products_search_names'] = 'Пошук в назвах';
$L['plu_products_search_desc'] = 'Пошук в короткому описі';
$L['plu_products_search_text'] = 'Пошук в описі';
$L['plu_products_set_subsec'] = 'Пошук в підрозділах';

$L['prd_error_wrongcost'] = 'Помилкова ціна';

$L['prd_seller'] = 'Продавець';