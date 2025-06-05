<?php

namespace Opencart\System\Helper;

/**
 * @title OpenCart 4.x Catalog Model Awareness Trait for IDE Autocompletion
 *
 * This trait provides `@property` docblock annotations for all default OpenCart
 * models commonly accessed within the storefront (catalog). It is designed
 * purely for IDE autocompletion and should not contain any executable code.
 *
 * @property \Opencart\Catalog\Model\Account\Activity $model_account_activity
 * @property \Opencart\Catalog\Model\Account\Address $model_account_address
 * @property \Opencart\Catalog\Model\Account\Customer $model_account_customer
 * @property \Opencart\Catalog\Model\Account\CustomerGroup $model_account_customer_group
 * @property \Opencart\Catalog\Model\Account\Gdpr $model_account_gdpr
 * @property \Opencart\Catalog\Model\Account\Order $model_account_order
 * @property \Opencart\Catalog\Model\Account\Recurring $model_account_recurring
 * @property \Opencart\Catalog\Model\Account\Return $model_account_return
 * @property \Opencart\Catalog\Model\Account\Wishlist $model_account_wishlist
 * @property \Opencart\Catalog\Model\Checkout\Customer $model_checkout_customer
 * @property \Opencart\Catalog\Model\Checkout\Order $model_checkout_order
 * @property \Opencart\Catalog\Model\Catalog\Attribute $model_catalog_attribute
 * @property \Opencart\Catalog\Model\Catalog\AttributeGroup $model_catalog_attribute_group
 * @property \Opencart\Catalog\Model\Catalog\Category $model_catalog_category
 * @property \Opencart\Catalog\Model\Catalog\Download $model_catalog_download
 * @property \Opencart\Catalog\Model\Catalog\Information $model_catalog_information
 * @property \Opencart\Catalog\Model\Catalog\Manufacturer $model_catalog_manufacturer
 * @property \Opencart\Catalog\Model\Catalog\Option $model_catalog_option
 * @property \Opencart\Catalog\Model\Catalog\Product $model_catalog_product
 * @property \Opencart\Catalog\Model\Catalog\Recurring $model_catalog_recurring
 * @property \Opencart\Catalog\Model\Catalog\Review $model_catalog_review
 * @property \Opencart\Catalog\Model\Localisation\Country $model_localisation_country
 * @property \Opencart\Catalog\Model\Localisation\Currency $model_localisation_currency
 * @property \Opencart\Catalog\Model\Localisation\Language $model_localisation_language
 * @property \Opencart\Catalog\Model\Localisation\Zone $model_localisation_zone
 * @property \Opencart\Catalog\Model\Tool\Captcha $model_tool_captcha
 * @property \Opencart\Catalog\Model\Tool\Image $model_tool_image
 * @property \Opencart\Catalog\Model\Tool\Upload $model_tool_upload
 */
trait CatalogComponentAwareTrait {
    use SystemLibraryAwareTrait;
}
