<?php
/**
 * Matomo - free/libre analytics platform
 *
 * @link https://matomo.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */
namespace Piwik\Plugins\TagManager\Template\Tag;

use Piwik\Settings\FieldConfig;
use Piwik\Validators\NotEmpty;

class UttTag extends BaseTag
{
    public function getIcon()
    {
        return 'plugins/TagManager/images/defaultIcon.svg';
    }

    public function getParameters()
    {
        return array(
            $trackingType,
            $this->makeSetting('advertiser_id', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'advertiser_id';
                $field->description = 'advertiser_id';
                $field->validators[] = new NotEmpty();
            }),
            $this->makeSetting('pt_pagetype', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'pt_pagetype';
                $field->description = 'insert pagetype, possible values: \'home\', \'product\', \'category\', \'conversion\'';
            }),
            $this->makeSetting('pt_checkout', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'pt_checkout';
                $field->description = 'insert orderstep 1-n (optional)';
            }),
            $this->makeSetting('pt_conversion', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'pt_conversion';
                $field->description = 'specify your conversion type, e.g. \'lead\' or \'order\' (optional)';
            }),
            $this->makeSetting('pt_conversion_orderid', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'pt_conversion_orderid';
                $field->description = 'insert your order ID or unique identifer (mandatory)';
            }),
            $this->makeSetting('pt_conversion_total', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'pt_conversion_total';
                $field->description = 'insert value of basket (optional)';
            }),
            $this->makeSetting('pt_conversion_quantity', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'pt_conversion_quantity';
                $field->description = 'insert number of purchased products (optional)';
            }),
            $this->makeSetting('pt_conversion_success', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'pt_conversion_success';
                $field->description = 'if Lasttouch / deduplication (Cookie-Weiche) insert 1, for hardcoded 0; Default 0';
            }),
            $this->makeSetting('pt_category', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'pt_category';
                $field->description = 'insert main category';
            }),
            $this->makeSetting('pt_subcategory1', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'pt_subcategory1';
                $field->description = 'insert subcategory 1';
            }),
            $this->makeSetting('pt_subcategory2', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'pt_subcategory2';
                $field->description = 'insert subcategory 2';
            }),
            $this->makeSetting('pt_subcategory3', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'pt_subcategory3';
                $field->description = 'insert subcategory 3';
            }),
            $this->makeSetting('pt_subcategory4', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'pt_subcategory4';
                $field->description = 'insert subcategory 4';
            }),
            $this->makeSetting('pt_subcategory5', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'pt_subcategory5';
                $field->description = 'insert subcategory 5';
            }),
            $this->makeSetting('pt_subcategory6', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'pt_subcategory6';
                $field->description = 'insert subcategory 6';
            }),
            $this->makeSetting('pt_subcategory7', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'pt_subcategory7';
                $field->description = 'insert subcategory 6';
            }),
            $this->makeSetting('pt_subcategory8', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'pt_subcategory8';
                $field->description = 'insert subcategory 8';
            }),
            $this->makeSetting('pt_subcategory9', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'pt_subcategory9';
                $field->description = 'insert subcategory 9';
            }),
            $this->makeSetting('pt_subcategory10', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'pt_subcategory10';
                $field->description = 'insert subcategory 10';
            }),
            $this->makeSetting('pt_productname', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'pt_productname';
                $field->description = 'insert product name';
            }),
            $this->makeSetting('pt_productid', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'pt_productid';
                $field->description = 'insert product id';
            }),
            $this->makeSetting('pt_channel', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'pt_channel';
                $field->description = 'insert channel for visit or conversion';
            }),
            $this->makeSetting('pt_channel_keyword', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'pt_channel_keyword';
                $field->description = 'insert channel keyword (e.g. Google Keyword)';
            }),
            $this->makeSetting('pt_customvar1', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'pt_customvar1';
                $field->description = 'insert value for defined customvar1';
            }),
            $this->makeSetting('pt_customvar2', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'pt_customvar2';
                $field->description = 'insert value for defined customvar2';
            }),
            $this->makeSetting('pt_customvar3', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'pt_customvar3';
                $field->description = 'insert value for defined customvar3';
            }),
            $this->makeSetting('pt_customvar4', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'pt_customvar4';
                $field->description = 'insert value for defined customvar4';
            }),
            $this->makeSetting('pt_customvar5', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'pt_customvar5';
                $field->description = 'insert value for defined customvar5';
            }),
            $this->makeSetting('pt_customvar6', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'pt_customvar6';
                $field->description = 'insert value for defined customvar6';
            }),
            $this->makeSetting('pt_customvar7', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'pt_customvar7';
                $field->description = 'insert value for defined customvar7';
            }),
            $this->makeSetting('pt_customvar8', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'pt_customvar8';
                $field->description = 'insert value for defined customvar8';
            }),
            $this->makeSetting('pt_customvar9', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'pt_customvar9';
                $field->description = 'insert value for defined customvar9';
            }),
            $this->makeSetting('pt_customvar10', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'pt_customvar10';
                $field->description = 'insert value for defined customvar10';
            }),
                     
        );
    }
    public function getCategory()
    {
            return self::CATEGORY_OTHERS;
    }
}
