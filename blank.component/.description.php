<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => "Название компонента",
	"DESCRIPTION" => "",
	"SORT" => 100,
	"CACHE_PATH" => "Y",
	"PATH" => array(
		"ID" => "Codenails",
		"SORT" => 200,
		"NAME" => "Компоненты Codenails",
		"CHILD" => array(
			"ID" => "cn_custom",
			"NAME" => "Настраиваемые",
			"SORT" => 10,
		)
	),
);

?>