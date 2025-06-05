<?php

namespace Opencart\System\Helper;

/**
 * @title OpenCart 4.x Admin Model Awareness Trait for IDE Autocompletion
 *
 * This trait provides `@property` docblock annotations for all default OpenCart
 * models commonly accessed within the administration panel. It is designed
 * purely for IDE autocompletion and should not contain any executable code.
 *
 * @property \Opencart\Admin\Model\Catalog\Attribute $model_catalog_attribute
 * @property \Opencart\Admin\Model\Catalog\AttributeGroup $model_catalog_attribute_group
 * @property \Opencart\Admin\Model\Catalog\Category $model_catalog_category
 * @property \Opencart\Admin\Model\Catalog\Download $model_catalog_download
 * @property \Opencart\Admin\Model\Catalog\Information $model_catalog_information
 * @property \Opencart\Admin\Model\Catalog\Manufacturer $model_catalog_manufacturer
 * @property \Opencart\Admin\Model\Catalog\Option $model_catalog_option
 * @property \Opencart\Admin\Model\Catalog\Product $model_catalog_product
 * @property \Opencart\Admin\Model\Catalog\Recurring $model_catalog_recurring
 * @property \Opencart\Admin\Model\Catalog\Review $model_catalog_review
 * @property \Opencart\Admin\Model\Checkout\Order $model_checkout_order
 * @property \Opencart\Admin\Model\Customer\CustomField $model_customer_custom_field
 * @property \Opencart\Admin\Model\Customer\Customer $model_customer_customer
 * @property \Opencart\Admin\Model\Customer\CustomerGroup $model_customer_customer_group
 * @property \Opencart\Admin\Model\Design\Banner $model_design_banner
 * @property \Opencart\Admin\Model\Design\Layout $model_design_layout
 * @property \Opencart\Admin\Model\Design\Theme $model_design_theme
 * @property \Opencart\Admin\Model\Design\Translation $model_design_translation
 * @property \Opencart\Admin\Model\Localisation\Country $model_localisation_country
 * @property \Opencart\Admin\Model\Localisation\Currency $model_localisation_currency
 * @property \Opencart\Admin\Model\Localisation\Language $model_localisation_language
 * @property \Opencart\Admin\Model\Localisation\LengthClass $model_localisation_length_class
 * @property \Opencart\Admin\Model\Localisation\OrderStatus $model_localisation_order_status
 * @property \Opencart\Admin\Model\Localisation\ReturnAction $model_localisation_return_action
 * @property \Opencart\Admin\Model\Localisation\ReturnReason $model_localisation_return_reason
 * @property \Opencart\Admin\Model\Localisation\ReturnStatus $model_localisation_return_status
 * @property \Opencart\Admin\Model\Localisation\StockStatus $model_localisation_stock_status
 * @property \Opencart\Admin\Model\Localisation\WeightClass $model_localisation_weight_class
 * @property \Opencart\Admin\Model\Localisation\Zone $model_localisation_zone
 * @property \Opencart\Admin\Model\Marketing\Affiliate $model_marketing_affiliate
 * @property \Opencart\Admin\Model\Marketing\Coupon $model_marketing_coupon
 * @property \Opencart\Admin\Model\Marketing\Marketing $model_marketing_marketing
 * @property \Opencart\Admin\Model\Report\Statistics $model_report_statistics
 * @property \Opencart\Admin\Model\Setting\Extension $model_setting_extension
 * @property \Opencart\Admin\Model\Setting\Module $model_setting_module
 * @property \Opencart\Admin\Model\Setting\Setting $model_setting_setting
 * @property \Opencart\Admin\Model\Setting\Store $model_setting_store
 * @property \Opencart\Admin\Model\Tool\Backup $model_tool_backup
 * @property \Opencart\Admin\Model\Tool\Error $model_tool_error
 * @property \Opencart\Admin\Model\Tool\Upload $model_tool_upload
 * @property \Opencart\Admin\Model\User\User $model_user_user
 * @property \Opencart\Admin\Model\User\UserGroup $model_user_user_group
 */
trait AdminComponentAwareTrait {
    use SystemLibraryAwareTrait;
}
