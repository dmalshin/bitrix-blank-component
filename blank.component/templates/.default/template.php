<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult['ITEMS'])):?>
	<?foreach($arResult['ITEMS'] as $arItem):?>

	<?endforeach?>
<?else:?>
	<div class="alert alert-info">
		Элементы не найдены
	</div>
<?endif?>

<?=$arResult["NAV_STRING"]?>