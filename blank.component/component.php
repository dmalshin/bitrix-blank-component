<?php

/*
 * Codenails Custom Form
 * Компонент для организации удобных форм
 * с возможностью вызова на AJAX
 *
 * @version 2.4
 * @date 27.03.2015
 *
 * @author Вадим Солуянов <sallee@info-expert.ru>
 * @author Павел Белоусов <pb@infoexpert.ru>
 * @author Денис Шишкин <ds@infoexpert.ru>
 * @author Мария Недоспасова <mn@infoexpert.ru>
 */

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arResult = array();
 
if ($this->StartResultCache(false))
{
    if(!CModule::IncludeModule("iblock"))
        return;


    $arSort = array("ID"=>"ASC");
    $arFilter = array(
        "ACTIVE" => "Y",
        "IBLOCK_ID" => $arParams["IBLOCK_ID"]
    );
    $arNav = false;
    $arSelect = Array(
        "ID",
        "NAME",
        "DETAIL_PICTURE",
        "PROPERTY_ANIMAL_GROUP"
    );

    $arRes = CIBlockElement::GetList($arSort, $arFilter, false, $arNav, $arSelect);

    while($arBuff = $arRes->Fetch())
    {
        //$arBuff["DETAIL_PICTURE"] = CFile::GetFileArray($arBuff["DETAIL_PICTURE"]);
        
        $arResult["ITEMS"][] = $arBuff;
    }

    //$arResult["NAV_STRING"] = $arRes->GetPageNavStringEx($navComponentObject, "", "pagination", true);

    $this->IncludeComponentTemplate();
}?>