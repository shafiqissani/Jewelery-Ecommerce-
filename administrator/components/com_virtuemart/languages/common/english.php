<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
* @translator soeren
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
global $VM_LANG;
$langvars = array (
	'CHARSET' => 'ISO-8859-1',
	'PHPSHOP_ERROR' => 'ERROR',
	'PHPSHOP_CATEGORY' => 'Category',
	'PHPSHOP_CATEGORIES' => 'Categories',
	'PHPSHOP_ADMIN' => 'Administration',
	'PHPSHOP_PRODUCT' => 'Product',
	'PHPSHOP_LIST' => 'List',
	'PHPSHOP_ALL' => 'All',
	'PHPSHOP_LIST_ALL_PRODUCTS' => 'List All Products',
	'PHPSHOP_VIEW' => 'View',
	'PHPSHOP_SHOW' => 'Show',
	'PHPSHOP_ADD' => 'Add',
	'PHPSHOP_UPDATE' => 'Update',
	'PHPSHOP_DELETE' => 'Delete',
	'PHPSHOP_SELECT' => 'Select',
	'PHPSHOP_SUBMIT' => 'Submit',
	'PHPSHOP_LATEST' => 'Latest Products',
	'PHPSHOP_CART_TITLE' => 'Cart',
	'PHPSHOP_CHECKOUT_TITLE' => 'Checkout',
	'PHPSHOP_SEARCH_TITLE' => 'Search',
	'PHPSHOP_ACCOUNT_TITLE' => 'Account Maintenance',
	'PHPSHOP_PRODUCTS_LBL' => 'Products',
	'PHPSHOP_PRODUCT_LBL' => 'Product',
	'PHPSHOP_SEARCH_LBL' => 'Search',
	'PHPSHOP_PRODUCT_SEARCH_LBL' => 'Product Search',
	'PHPSHOP_PRODUCT_NAME_TITLE' => 'Product Name',
	'PHPSHOP_PRODUCT_DESC_TITLE' => 'Description',
	'PHPSHOP_CART_SHOW' => 'Show Cart',
	'PHPSHOP_CART_ADD_TO' => 'Add to Cart',
	'PHPSHOP_CART_NAME' => 'Name',
	'PHPSHOP_CART_SKU' => 'SKU',
	'PHPSHOP_CART_PRICE' => 'Price',
	'PHPSHOP_CART_QUANTITY' => 'Quantity',
	'PHPSHOP_CART_QUANTITY_EXCEEDED' => 'The selected quantity exceeds quantity available in stock.',
	'PHPSHOP_CART_SUBTOTAL' => 'Subtotal',
	'PHPSHOP_ADD_SHIPTO_1' => 'Add a new',
	'PHPSHOP_ADD_SHIPTO_2' => 'Shipping Address',
	'PHPSHOP_NO_SEARCH_RESULT' => 'Your search returned 0 results.<br />',
	'PHPSHOP_DELETE_MSG' => 'Are you sure you want to delete this record?',
	'PHPSHOP_MOD_NOT_REG' => 'Module Not Registered.',
	'PHPSHOP_MOD_ISNO_REG' => 'is not a valid VirtueMart core module.',
	'PHPSHOP_MOD_NO_AUTH' => 'You do not have permission to access the requested module.',
	'PHPSHOP_PAGE_404_1' => 'Page Does Not Exist',
	'PHPSHOP_PAGE_404_2' => 'Given filename does not exist. Cannot find file:',
	'PHPSHOP_PAGE_403' => 'Insufficient Access Rights',
	'PHPSHOP_FUNC_NO_EXEC' => 'You do not have permission to execute ',
	'PHPSHOP_FUNC_NOT_REG' => 'Function Not Registered',
	'PHPSHOP_FUNC_ISNO_REG' => ' is not a valid VirtueMart function.',
	'PHPSHOP_ADMIN_MOD' => 'Admin',
	'PHPSHOP_USER_LIST_MNU' => 'List Users',
	'PHPSHOP_USER_FORM_BILLTO_LBL' => 'Bill To Information',
	'PHPSHOP_USER_FORM_SHIPTO_LBL' => 'Shipping Addresses',
	'PHPSHOP_USER_FORM_ADD_SHIPTO_LBL' => 'Add Address',
	'PHPSHOP_USER_FORM_ADDRESS_LABEL' => 'Address Nickname',
	'PHPSHOP_USER_FORM_TITLE' => 'Title',
	'PHPSHOP_MODULE_LIST_MNU' => 'List Modules',
	'PHPSHOP_MODULE_FORM_MNU' => 'Add Module',
	'PHPSHOP_FUNCTION_LIST_MNU' => 'List Functions',
	'PHPSHOP_FUNCTION_FORM_MNU' => 'Add Function',
	'PHPSHOP_CURRENCY_LIST_MNU' => 'List Currencies',
	'PHPSHOP_CURRENCY_LIST_ADD' => 'Add Currency',
	'PHPSHOP_COUNTRY_LIST_MNU' => 'List Countries',
	'PHPSHOP_COUNTRY_LIST_ADD' => 'Add Country',
	'PHPSHOP_ADDRESS' => 'Address',
	'PHPSHOP_EMPTY_CART' => 'Your Cart is currently empty.',
	'PHPSHOP_ISSHIP_LIST_CARRIER_LBL' => 'Ship Methods',
	'PHPSHOP_ORDER_MOD' => 'Orders',
	'PHPSHOP_ORDER_CONFIRM_MNU' => 'Confirm Order',
	'PHPSHOP_ORDER_LIST_MNU' => 'List Orders',
	'PHPSHOP_ORDER_LIST_LBL' => 'Order List',
	'PHPSHOP_ORDER_LIST_ID' => 'Order Number',
	'PHPSHOP_ORDER_LIST_CDATE' => 'Order Date',
	'PHPSHOP_ORDER_LIST_MDATE' => 'Last Modified',
	'PHPSHOP_ORDER_LIST_STATUS' => 'Status',
	'PHPSHOP_ORDER_LIST_TOTAL' => 'Total',
	'PHPSHOP_ORDER_ITEM' => 'Order Items',
	'PHPSHOP_ORDER_PRINT_PO_LBL' => 'Purchase Order',
	'PHPSHOP_ORDER_PRINT_PO_NUMBER' => 'Order Number',
	'PHPSHOP_ORDER_PRINT_PO_DATE' => 'Order Date',
	'PHPSHOP_ORDER_PRINT_PO_STATUS' => 'Order Status',
	'PHPSHOP_ORDER_PRINT_CUST_INFO_LBL' => 'Customer Information',
	'PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL' => 'Billing Information',
	'PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL' => 'Shipping Information',
	'PHPSHOP_ORDER_PRINT_BILL_TO_LBL' => 'Bill To',
	'PHPSHOP_ORDER_PRINT_SHIP_TO_LBL' => 'Ship To',
	'PHPSHOP_ORDER_PRINT_NAME' => 'Name',
	'PHPSHOP_ORDER_PRINT_COMPANY' => 'Company',
	'PHPSHOP_ORDER_PRINT_ADDRESS_1' => 'Address 1',
	'PHPSHOP_ORDER_PRINT_ADDRESS_2' => 'Address 2',
	'PHPSHOP_ORDER_PRINT_CITY' => 'City',
	'PHPSHOP_ORDER_PRINT_STATE' => 'State/Province/Region',
	'PHPSHOP_ORDER_PRINT_ZIP' => 'Zip/Postal Code',
	'PHPSHOP_ORDER_PRINT_COUNTRY' => 'Country',
	'PHPSHOP_ORDER_PRINT_PHONE' => 'Phone',
	'PHPSHOP_ORDER_PRINT_FAX' => 'Fax',
	'PHPSHOP_ORDER_PRINT_EMAIL' => 'Email',
	'PHPSHOP_ORDER_PRINT_ITEMS_LBL' => 'Order Items',
	'PHPSHOP_ORDER_PRINT_QUANTITY' => 'Quantity',
	'PHPSHOP_ORDER_PRINT_QTY' => 'Qty',
	'PHPSHOP_ORDER_PRINT_SKU' => 'SKU',
	'PHPSHOP_ORDER_PRINT_PRICE' => 'Price',
	'PHPSHOP_ORDER_PRINT_TOTAL' => 'Total',
	'PHPSHOP_ORDER_PRINT_SUBTOTAL' => 'SubTotal',
	'PHPSHOP_ORDER_PRINT_TOTAL_TAX' => 'Tax Total',
	'PHPSHOP_ORDER_PRINT_SHIPPING' => 'Shipping and Handling Fee',
	'PHPSHOP_ORDER_PRINT_SHIPPING_TAX' => 'Shipping Tax',
	'PHPSHOP_ORDER_PRINT_PAYMENT_LBL' => 'Payment Method',
	'PHPSHOP_ORDER_PRINT_ACCOUNT_NAME' => 'Account Name',
	'PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER' => 'Account Number',
	'PHPSHOP_ORDER_PRINT_EXPIRE_DATE' => 'Expire Date',
	'PHPSHOP_ORDER_PRINT_SHIPPING_LBL' => 'Shipping Information',
	'PHPSHOP_ORDER_PRINT_PAYINFO_LBL' => 'Payment Information',
	'PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL' => 'Carrier',
	'PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL' => 'Shipping Mode',
	'PHPSHOP_ORDER_STATUS_LIST_MNU' => 'List Order Status Types',
	'PHPSHOP_ORDER_STATUS_FORM_MNU' => 'Add Order Status Type',
	'PHPSHOP_PRODUCT_MOD' => 'Products',
	'PHPSHOP_PRODUCT_INVENTORY_MNU' => 'View Inventory',
	'PHPSHOP_PRODUCT_INVENTORY_PRICE' => 'Price',
	'PHPSHOP_PRODUCT_LIST_MNU' => 'List Products',
	'PHPSHOP_PRODUCT_LIST_LBL' => 'Product List',
	'PHPSHOP_PRODUCT_LIST_NAME' => 'Product Name',
	'PHPSHOP_PRODUCT_LIST_SKU' => 'SKU',
	'PHPSHOP_PRODUCT_FORM_MNU' => 'Add Product',
	'PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU' => 'Add Item',
	'PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU' => 'Add Another Item',
	'PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL' => 'New Item',
	'PHPSHOP_PRODUCT_FORM_RETURN_LBL' => 'Return to Parent Product',
	'PHPSHOP_PRODUCT_FORM_VENDOR' => 'Vendor',
	'PHPSHOP_PRODUCT_FORM_URL' => 'URL',
	'PHPSHOP_PRODUCT_FORM_PRICE_GROSS' => 'Product Price (Gross)',
	'PHPSHOP_PRODUCT_FORM_PRICE_NET' => 'Product Price (Net)',
	'PHPSHOP_PRODUCT_FORM_DESCRIPTION' => 'Product Description',
	'PHPSHOP_PRODUCT_FORM_S_DESC' => 'Short Description',
	'PHPSHOP_PRODUCT_FORM_IN_STOCK' => 'In Stock',
	'PHPSHOP_PRODUCT_FORM_WEIGHT' => 'Weight',
	'PHPSHOP_PRODUCT_FORM_THUMB_IMAGE' => 'Thumbnail Image',
	'PHPSHOP_PRODUCT_FORM_UNIT' => 'Unit',
	'PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT' => 'piece',
	'PHPSHOP_PRODUCT_CSV_UPLOAD' => 'CSV Import/Export',
	'PHPSHOP_PRODUCT_FOLDERS' => 'Product Folders',
	'PHPSHOP_CATEGORY_LIST_MNU' => 'List Categories',
	'PHPSHOP_CATEGORY_LIST_LBL' => 'Category Tree',
	'PHPSHOP_CATEGORY_FORM_MNU' => 'Add Category',
	'PHPSHOP_ATTRIBUTE_LIST_MNU' => 'List Attributes',
	'PHPSHOP_ATTRIBUTE_FORM_MNU' => 'Add Attribute',
	'PHPSHOP_PRICE_LIST_MNU' => 'List Prices',
	'PHPSHOP_PRICE_FORM_MNU' => 'Add Price',
	'PHPSHOP_REPORTBASIC_MOD' => 'Reports',
	'PHPSHOP_SHOP_MOD' => 'Shop',
	'PHPSHOP_PRODUCT_PRICE_TITLE' => 'Price',
	'PHPSHOP_SHOPPER_MOD' => 'Shopper',
	'PHPSHOP_SHOPPER_LIST_USERNAME' => 'User Name',
	'PHPSHOP_SHOPPER_LIST_NAME' => 'Full Name',
	'PHPSHOP_SHOPPER_LIST_GROUP' => 'Group',
	'PHPSHOP_SHOPPER_FORM_LBL' => 'Shopper Information',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL' => 'Information',
	'PHPSHOP_SHOPPER_FORM_SHIPTO_LBL' => 'Shipping Information',
	'PHPSHOP_SHOPPER_FORM_FIRST_NAME' => 'First Name',
	'PHPSHOP_SHOPPER_FORM_LAST_NAME' => 'Last Name',
	'PHPSHOP_SHOPPER_FORM_MIDDLE_NAME' => 'Middle Name',
	'PHPSHOP_SHOPPER_FORM_TITLE' => 'Title',
	'PHPSHOP_SHOPPER_FORM_PASSWORD_1' => 'Password',
	'PHPSHOP_SHOPPER_FORM_PASSWORD_2' => 'Confirm Password',
	'PHPSHOP_SHOPPER_FORM_GROUP' => 'Shopper Group',
	'PHPSHOP_SHOPPER_FORM_COMPANY_NAME' => 'Company Name',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_1' => 'Address 1',
	'PHPSHOP_SHOPPER_FORM_ADDRESS_2' => 'Address 2',
	'PHPSHOP_SHOPPER_FORM_CITY' => 'City',
	'PHPSHOP_SHOPPER_FORM_STATE' => 'State/Province/Region',
	'PHPSHOP_SHOPPER_FORM_ZIP' => 'Zip/Postal Code',
	'PHPSHOP_SHOPPER_FORM_COUNTRY' => 'Country',
	'PHPSHOP_SHOPPER_FORM_PHONE' => 'Phone',
	'PHPSHOP_SHOPPER_FORM_PHONE2' => 'Mobile phone',
	'PHPSHOP_SHOPPER_FORM_FAX' => 'Fax',
	'PHPSHOP_SHOPPER_FORM_EMAIL' => 'Email',
	'PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_1' => '',
	'PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_2' => '',
	'PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_3' => '',
	'PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4' => '',
	'PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_1' => 'Yes',
	'PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_2' => 'No',
	'PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5' => '',
	'PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_1' => 'AAA',
	'PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_2' => 'BBB',
	'PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_3' => 'CCC',
	'PHPSHOP_SHOPPER_GROUP_LIST_MNU' => 'List Shopper Groups',
	'PHPSHOP_SHOPPER_GROUP_FORM_MNU' => 'Add Shopper Group',
	'PHPSHOP_STORE_MOD' => 'Store',
	'PHPSHOP_STORE_FORM_MNU' => 'Edit Store',
	'PHPSHOP_STORE_FORM_LBL' => 'Store Information',
	'PHPSHOP_STORE_FORM_CONTACT_LBL' => 'Contact Information',
	'PHPSHOP_STORE_FORM_PHONE' => 'Phone',
	'PHPSHOP_STORE_FORM_FAX' => 'Fax',
	'PHPSHOP_STORE_FORM_EMAIL' => 'Email',
	'PHPSHOP_PAYMENT' => 'Payment',
	'PHPSHOP_PAYMENT_METHOD_LIST_MNU' => 'List Payment Methods',
	'PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT' => 'Discount',
	'PHPSHOP_PAYMENT_METHOD_FORM_MNU' => 'Add Payment Method',
	'PHPSHOP_TAX_MOD' => 'Tax',
	'PHPSHOP_TAX_LIST_MNU' => 'List Tax Rates',
	'PHPSHOP_TAX_LIST_RATE' => 'Tax Rate',
	'PHPSHOP_TAX_FORM_MNU' => 'Add Tax Rate',
	'PHPSHOP_VENDOR_MOD' => 'Vendor',
	'PHPSHOP_VENDOR_LIST_MNU' => 'List Vendors',
	'PHPSHOP_VENDOR_LIST_VENDOR_NAME' => 'Vendor Name',
	'PHPSHOP_VENDOR_FORM_MNU' => 'Add Vendor',
	'PHPSHOP_VENDOR_FORM_INFO_LBL' => 'Vendor Information',
	'PHPSHOP_VENDOR_CAT_LIST_MNU' => 'List Vendor Categories',
	'PHPSHOP_VENDOR_CAT_FORM_MNU' => 'Add Vendor Category',
	'PHPSHOP_MANUFACTURER_MOD' => 'Manufacturer',
	'PHPSHOP_MANUFACTURER_LIST_MNU' => 'List Manufacturers',
	'PHPSHOP_MANUFACTURER_LIST_ADMIN' => 'Admin',
	'PHPSHOP_MANUFACTURER_FORM_MNU' => 'Add Manufacturer',
	'PHPSHOP_MANUFACTURER_FORM_INFO_LBL' => 'Manufacturer Information',
	'PHPSHOP_MANUFACTURER_FORM_DESCRIPTION' => 'Description',
	'PHPSHOP_MANUFACTURER_CAT_LIST_MNU' => 'List Manufacturer Categories',
	'PHPSHOP_MANUFACTURER_CAT_FORM_MNU' => 'Add Manufacturer Category',
	'PHPSHOP_HELP_MOD' => 'Help',
	'PHPSHOP_CART_ACTION' => 'Update',
	'PHPSHOP_CART_UPDATE' => 'Update Quantity In Cart',
	'PHPSHOP_CART_DELETE' => 'Delete Product From Cart',
	'PHPSHOP_PRODUCT_CALL' => 'Call for Pricing',
	'PHPSHOP_CART_TAX' => 'Tax',
	'PHPSHOP_CART_TOTAL' => 'Total',
	'PHPSHOP_CHECKOUT_CONF_PHONE' => 'Phone',
	'PHPSHOP_CHECKOUT_CONF_FAX' => 'Fax',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO' => 'Payment Information',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD' => 'Name On Card',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM' => 'Credit Card Number',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE' => 'Expiration Date',
	'PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER' => 'Complete Order',
	'PHPSHOP_ZONE_MOD' => 'Zone Shipping',
	'PHPSHOP_ZONE_LIST_MNU' => 'List Zones',
	'PHPSHOP_ZONE_FORM_MNU' => 'Add Zone',
	'PHPSHOP_ZONE_ASSIGN_MNU' => 'Assign Zones',
	'PHPSHOP_ZONE_ASSIGN_CURRENT_LBL' => 'Current Zone',
	'PHPSHOP_STORE_FORM_TOS' => 'Terms of Service',
	'PHPSHOP_AGREE_TO_TOS' => 'Please agree to our terms of Service first.',
	'PHPSHOP_I_AGREE_TO_TOS' => 'I agree to the Terms of Service',
	'PHPSHOP_RETURN_LOGIN' => 'Returning Customers: Please Log In',
	'PHPSHOP_NEW_CUSTOMER' => 'New? Please Provide Your Billing Information',
	'PHPSHOP_ACC_ORDER_INFO' => 'Order Information',
	'PHPSHOP_ACC_NO_ORDERS' => 'No Orders to Display',
	'PHPSHOP_ACC_BILL_DEF' => '- Default (Same as Billing)',
	'PHPSHOP_SHIPTO_TEXT' => 'You can add shipping locations to your account. Please think of a suitable nickname or code for the shipping location you select below.',
	'PHPSHOP_CONFIG' => 'Configuration',
	'PHPSHOP_USERS' => 'Users',
	'PHPSHOP_SHIPPING_MOD' => 'Shipping',
	'PHPSHOP_CARRIER_LIST_MNU' => 'Shipper',
	'PHPSHOP_RATE_LIST_MNU' => 'Shipping Rates',
	'PHPSHOP_CARRIER_FORM_MNU' => 'Create Shipper',
	'PHPSHOP_RATE_FORM_MNU' => 'Create a Shipping Rate',
	'PHPSHOP_RATE_FORM_VALUE' => 'Fee',
	'PHPSHOP_RATE_FORM_VAT_ID' => 'VAT Id',
	'PHPSHOP_ERR_MSG_CARRIER_EXIST' => 'ERROR: Shipper ID exists.',
	'PHPSHOP_ERR_MSG_CARRIER_ID_REQ' => 'ERROR: Choose a shipper.',
	'PHPSHOP_ERR_MSG_CARRIER_INUSE' => 'ERROR: At least one Shipping Rate exists, delete rates prior to shipper',
	'PHPSHOP_ERR_MSG_CARRIER_NOTFOUND' => 'ERROR: Unable to find a shipper with this ID.',
	'PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ' => 'ERROR: Choose a shipper.',
	'PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV' => 'ERROR: Unable to find a shipper with this ID.',
	'PHPSHOP_ERR_MSG_RATE_NAME_REQ' => 'ERROR: A rate descriptor is requested.',
	'PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV' => 'ERROR: The Destination country is invalid. More than one country could be separated with ";".',
	'PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ' => 'ERROR: A lowest weight value is requested',
	'PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ' => 'ERROR: A highest weight value is requested',
	'PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV' => 'ERROR: The lowest weight must be smaller than the highest weight',
	'PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ' => 'ERROR: A shipping fee requested',
	'PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV' => 'ERROR: Choose a currency',
	'PHPSHOP_INFO_MSG_CARRIER' => 'Shipper',
	'PHPSHOP_INFO_MSG_SHIPPING_METHOD' => 'Shipping Rate',
	'PHPSHOP_INFO_MSG_SHIPPING_PRICE' => 'Price',
	'PHPSHOP_INFO_MSG_VAT_ZERO_LBL' => '0 (-none-)',
	'PHPSHOP_CHECKOUT_MSG_4' => 'Please select a Payment Method!',
	'PHPSHOP_CHECKOUT_ERR_NO_SHIP' => 'Please select a Shipping Method.',
	'PHPSHOP_CHECKOUT_ERR_OTHER_SHIP' => 'Please select another Shipping Method.',
	'PHPSHOP_CHECKOUT_ERR_NO_PAYM' => 'Please select a Payment Method.',
	'PHPSHOP_CHECKOUT_ERR_NO_CCNR' => 'Please enter your Credit Card Number.',
	'PHPSHOP_CHECKOUT_ERR_NO_CCDATE' => 'The Credit Card Number entered is not valid.',
	'PHPSHOP_CHECKOUT_ERR_NO_CCMON' => 'Please enter the Credit Card expiration month.',
	'PHPSHOP_CHECKOUT_ERR_NO_CCYEAR' => 'Please enter the Credit Card expiration year.',
	'PHPSHOP_CHECKOUT_ERR_CCDATE_INV' => 'The expiration date is invalid.',
	'PHPSHOP_CHECKOUT_ERR_NO_SHIPTO' => 'Please select a Ship To address.',
	'PHPSHOP_CHECKOUT_ERR_CCNUM_INV' => 'Invalid account number.',
	'PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND' => 'The selected Shipping Rate was not found!',
	'PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND' => 'Your Shipping Address was not found!',
	'PHPSHOP_CHECKOUT_ERR_NO_CCDATA' => 'There\'s no Credit Card data...',
	'PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND' => 'Credit Card Number not found!',
	'PHPSHOP_CHECKOUT_ERR_TEST' => 'Sorry, but the Credit Card Number you\'ve used is a testing number!',
	'PHPSHOP_CHECKOUT_ERR_NO_USER_DATA' => 'The user_id was not found in the database!',
	'PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME' => 'You have actually not provided your bank account holder name.',
	'PHPSHOP_CHECKOUT_ERR_NO_IBAN' => 'You have actually not provided your IBAN.',
	'PHPSHOP_CHECKOUT_ERR_NO_BA_NUM' => 'You have actually not provided your bank account number.',
	'PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT' => 'You have actually not provided your bank sort code.',
	'PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME' => 'You have actually not provided your bank\'s name.',
	'PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP' => 'CheckOut needs a valid Step!',
	'PHPSHOP_CHECKOUT_MSG_LOG' => 'Payment information captured for later processing.<br />',
	'PHPSHOP_CHECKOUT_ERR_MIN_POV' => 'Minimum purchase order value has not been reached yet.',
	'PHPSHOP_CHECKOUT_ERR_MIN_POV2' => 'Our minimum purchase order value is:',
	'PHPSHOP_CHECKOUT_PAYMENT_CC' => 'Credit Card Payment',
	'PHPSHOP_CHECKOUT_PAYMENT_OTHER' => 'Other Payment Methods',
	'PHPSHOP_STORE_FORM_MPOV' => 'Minimum purchase order value for your store',
	'PHPSHOP_ACCOUNT_BANK_TITLE' => 'Bank Account Info',
	'PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR' => 'Account Number',
	'PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE' => 'Bank sorting code number',
	'PHPSHOP_ACCOUNT_LBL_BANK_NAME' => 'Bank Name',
	'PHPSHOP_ACCOUNT_LBL_BANK_IBAN' => 'IBAN',
	'PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER' => 'Account Holder',
	'PHPSHOP_SPECIAL_PRODUCTS' => 'Special products',
	'PHPSHOP_CHECKOUT_CUSTOMER_NOTE' => 'Please leave a note to us with your order if you want to',
	'PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE' => 'Customer\'s note',
	'PHPSHOP_INCLUDING_TAX' => '(including $tax % tax)',
	'PHPSHOP_PLEASE_SEL_ITEM' => 'Please select an item',
	'PHPSHOP_DOWNLOADS_TITLE' => 'Download Area',
	'PHPSHOP_DOWNLOADS_ERR_EXP' => 'Sorry, but this Download has expired',
	'PHPSHOP_DOWNLOADS_ERR_MAX' => 'Sorry, but the maximum number of downloads has been reached',
	'PHPSHOP_DOWNLOADS_ERR_INV' => 'Invalid Download-ID!',
	'PHPSHOP_DOWNLOADS_ERR_SEND' => 'Could not send a message to ',
	'PHPSHOP_DOWNLOADS_SEND_MSG' => 'Message sent to ',
	'PHPSHOP_DOWNLOADS_SEND_SUBJ' => 'Download-Info',
	'PHPSHOP_DOWNLOADS_SEND_MSG_1' => 'the file(s) you ordered are ready for your download',
	'PHPSHOP_DOWNLOADS_SEND_MSG_2' => 'Please enter the following Download-ID(s) in our Downloads Area: ',
	'PHPSHOP_DOWNLOADS_SEND_MSG_3' => 'the maximum number of downloads for each file is: ',
	'PHPSHOP_DOWNLOADS_SEND_MSG_4' => 'Download until {expire} days after the first download',
	'PHPSHOP_DOWNLOADS_SEND_MSG_5' => 'Questions? Problems?',
	'PHPSHOP_DOWNLOADS_SEND_MSG_6' => 'Download-Info by ',
	'PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1' => 'Thank you for shopping with us.  Your order information follows.',
	'PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2' => 'Thank you for your patronage.',
	'PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3' => 'Questions? Problems?',
	'PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4' => 'The following order was received.',
	'PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5' => 'View the order by following the link below.',
	'PHPSHOP_CART_ERROR_NO_NEGATIVE' => 'Negative quantities are not allowed.',
	'PHPSHOP_CART_ERROR_NO_VALID_QUANTITY' => 'Please enter a valid quantity for this item.',
	'PHPSHOP_CART_SELECT_ITEM' => 'To add this product into your cart you have to select a product variant on the details page.',
	'PHPSHOP_REGISTRATION_FORM_NONE' => 'none',
	'PHPSHOP_REGISTRATION_FORM_MR' => 'Mr.',
	'PHPSHOP_REGISTRATION_FORM_MRS' => 'Mrs.',
	'PHPSHOP_REGISTRATION_FORM_DR' => 'Dr.',
	'PHPSHOP_REGISTRATION_FORM_PROF' => 'Prof.',
	'PHPSHOP_DEFAULT' => 'Default',
	'PHPSHOP_AFFILIATE_LIST_MNU' => 'List Affiliates',
	'PHPSHOP_DELIVERY_TIME' => 'Usually ships in',
	'PHPSHOP_MORE_CATEGORIES' => 'more categories',
	'PHPSHOP_AVAILABILITY' => 'Availability',
	'PHPSHOP_CURRENTLY_NOT_AVAILABLE' => 'This product is currently not available.',
	'PHPSHOP_PRODUCT_AVAILABLE_AGAIN' => 'It will be available again on: ',
	'PHPSHOP_STATISTIC_SUMMARY' => 'Summary',
	'PHPSHOP_STATISTIC_SUM' => 'Sum',
	'PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW' => 'Print view',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD' => 'Choose your store\'s shipping method',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS' => '<a href="http://www.ups.com" target="_blank">UPS Online� Tools</a> Shipping calculation',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE' => 'UPS access code',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN' => 'Your UPS access code',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID' => 'UPS user id',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN' => 'The user ID you got from UPS',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD' => 'UPS password',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN' => 'The password for your UPS account',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER' => 'InterShipper Module. Check only if you have an <a href="http://www.intershipper.com" target="_blank">Intershipper.com</a> account',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD' => 'InterShipper Password',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN' => 'Your password for your intershipper account.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL' => 'InterShipper email',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN' => 'Your email address for your intershipper account.',
	'PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL' => 'PayPal payment email:',
	'PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN' => 'Your business email address for PayPal payments. Also used as receiver_email.',
	'PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS' => 'Order Status for successful transactions',
	'PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN' => 'Select the order status to which the actual order is set, if the PayPal IPN was successful. If using download selling options: 
		select the status which enables the download (then the customer is instantly notified about the download via e-mail).',
	'PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED' => 'Order Status for failed transactions',
	'PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN' => 'Select an order status for failed PayPal transactions.',
	'PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME' => 'PayMate username:',
	'PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN' => 'Your user account for PayMate.',
	'PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET' => 'Enable Authorize.net payment?',
	'PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN' => 'Check to use Authorize.net with phpShop.',
	'PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE' => 'Test mode ?',
	'PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN' => 'Select \'Yes\' while testing. Select \'No\' for enabling live transactions.',
	'PHPSHOP_ADMIN_CFG_YES' => 'Yes',
	'PHPSHOP_ADMIN_CFG_NO' => 'No',
	'PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME' => 'Authorize.net Login ID',
	'PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN' => 'This is your Authorize.Net Login ID',
	'PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY' => 'Authorize.net Transaction Key',
	'PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN' => 'This is your Authorize.net Transaction Key',
	'PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE' => 'Authentication Type',
	'PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN' => 'This is the Authorize.Net authentication type.',
	'PHPSHOP_ADVANCED_SEARCH' => 'Advanced Search',
	'PHPSHOP_ORDERBY' => 'Order by',
	'PHPSHOP_CUSTOMER_RATING' => 'Average customer rating',
	'PHPSHOP_TOTAL_VOTES' => 'Total votes',
	'PHPSHOP_CAST_VOTE' => 'Please cast your vote',
	'PHPSHOP_RATE_BUTTON' => 'Rate',
	'PHPSHOP_RATE_NOM' => 'Rating',
	'PHPSHOP_REVIEWS' => 'Customer Reviews',
	'PHPSHOP_NO_REVIEWS' => 'There are yet no reviews for this product.',
	'PHPSHOP_WRITE_FIRST_REVIEW' => 'Be the first to write a review...',
	'PHPSHOP_REVIEW_LOGIN' => 'Please log in to write a review.',
	'PHPSHOP_REVIEW_ERR_RATE' => 'Please rate the product to complete your review!',
	'PHPSHOP_REVIEW_ERR_COMMENT1' => 'Please write down some more words for your review. Minimum characters allowed: %s',
	'PHPSHOP_REVIEW_ERR_COMMENT2' => 'Please shorten your review. Maximum characters allowed: %s',
	'PHPSHOP_WRITE_REVIEW' => 'Write a review for this product!',
	'PHPSHOP_REVIEW_RATE' => 'First: Rate the product. Please select a rating between 0 (poorest) and 5 stars (best).',
	'PHPSHOP_REVIEW_COMMENT' => 'Now please write a (short) review....(min. %s, max. %s characters) ',
	'PHPSHOP_REVIEW_COUNT' => 'Characters written: ',
	'PHPSHOP_REVIEW_SUBMIT' => 'Submit Review',
	'PHPSHOP_REVIEW_ALREADYDONE' => 'You already have written a review for this product. Thank you.',
	'PHPSHOP_REVIEW_THANKYOU' => 'Thanks for your review.',
	'PHPSHOP_CREDITCARD_FORM_LBL' => 'Add/Edit Credit Card Types',
	'PHPSHOP_CREDITCARD_LIST_LBL' => 'Credit Card List',
	'PHPSHOP_UDATE_ADDRESS' => 'Update Address',
	'PHPSHOP_ORDER_LINK' => 'Follow this link to view the Order Details.',
	'PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1' => 'the Status of your Order No. {order_id} has been changed.',
	'PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2' => 'New Status is:',
	'PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3' => 'To view the Order Details, please follow this link (or copy it into your browser):',
	'PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ' => 'Order Status Change: Your Order {order_id}',
	'PHPSHOP_PRODUCT_DISCOUNT_LBL' => 'Product Discount',
	'PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL' => 'Product Discount List',
	'PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT' => 'Add/Edit Product Discount',
	'PHPSHOP_PRODUCT_DISCOUNT_AMOUNT' => 'Discount amount',
	'PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP' => 'Enter the discount amount',
	'PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE' => 'Discount Type',
	'PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT' => 'Percentage',
	'PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL' => 'Total',
	'PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP' => 'Shall the amount be a percentage or a total?',
	'PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP' => 'You can use the Product Discount Form to add discounts!',
	'PHPSHOP_PRODUCT_DISCOUNT_SAVE' => 'You Save',
	'PHPSHOP_FLYPAGE_ENLARGE_IMAGE' => 'View Full-Size Image',
	'PHPSHOP_CURRENCY_DISPLAY' => 'Currency Display Style',
	'PHPSHOP_CURRENCY_SYMBOL' => 'Currency symbol',
	'PHPSHOP_CURRENCY_SYMBOL_TOOLTIP' => 'You can also use HTML Entities here (e.g. �,�,�,...)',
	'PHPSHOP_CURRENCY_DECIMALS' => 'Decimals',
	'PHPSHOP_CURRENCY_DECIMALS_TOOLTIP' => 'Number of displayed decimals (can be 0)<br><b>Performs rounding if value has different number of decimals</b>',
	'PHPSHOP_CURRENCY_DECIMALSYMBOL' => 'Decimal symbol',
	'PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP' => 'Character used as decimal symbol',
	'PHPSHOP_CURRENCY_THOUSANDS' => 'Thousands separator',
	'PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP' => 'Character used to separate thousands (can be empty)',
	'PHPSHOP_CURRENCY_POSITIVE_DISPLAY' => 'Positive format',
	'PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP' => 'Display format used to display positive values.<br>(Symb stands for currency symbol)',
	'PHPSHOP_CURRENCY_NEGATIVE_DISPLAY' => 'Negative format',
	'PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP' => 'Display format used to display negative values.<br>(Symb stands for currency symbol)',
	'PHPSHOP_MORE_IMAGES' => 'View More Images',
	'PHPSHOP_FILEMANAGER' => 'FileManager',
	'PHPSHOP_FILEMANAGER_ADD' => 'Add Image/File',
	'PHPSHOP_FILES_PATH_ERROR' => 'Please provide a valid path!',
	'PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS' => 'The Thumbnail Image has been successfully created!',
	'PHPSHOP_FILES_IMAGE_RESIZE_FAILURE' => 'Could NOT create Thumbnail Image!',
	'PHPSHOP_FILES_UPLOAD_FAILURE' => 'File/Image Upload Error',
	'PHPSHOP_FILES_FULLIMG_DELETE_FAILURE' => 'Could not delete the Full Image File.',
	'PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS' => 'Full Image successfully deleted.',
	'PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE' => 'Could not delete the Thumbnail Image File (maybe didn\'t exist): ',
	'PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS' => 'Thumbnail Image successfully deleted.',
	'PHPSHOP_FILES_FILE_DELETE_FAILURE' => 'Could not delete the File.',
	'PHPSHOP_FILES_FILE_DELETE_SUCCESS' => 'File successfully deleted.',
	'PHPSHOP_FILES_NOT_FOUND' => 'Sorry, but the requested file wasn\'t found!',
	'PHPSHOP_COUPON_MOD' => 'Coupon',
	'PHPSHOP_COUPON_LIST' => 'Coupon List',
	'PHPSHOP_COUPON_ALREADY_REDEEMED' => 'Coupon has already been redeemed.',
	'PHPSHOP_COUPON_ENTER_HERE' => 'If you have a coupon code, please enter it below:',
	'PHPSHOP_COUPON_SUBMIT_BUTTON' => 'Submit',
	'PHPSHOP_COUPON_CODE_EXISTS' => 'That coupon code already exists. Please try again.',
	'PHPSHOP_COUPON_COMPLETE_ALL_FIELDS' => 'Please complete all fields.',
	'PHPSHOP_COUPON_VALUE_NOT_NUMBER' => 'Coupon value must be a number.',
	'PHPSHOP_COUPON_NEW_HEADER' => 'New Coupon',
	'PHPSHOP_COUPON_COUPON_HEADER' => 'Coupon Code',
	'PHPSHOP_COUPON_VALUE' => 'Value',
	'PHPSHOP_COUPON_DISCOUNT' => 'Coupon Discount',
	'PHPSHOP_COUPON_CODE_INVALID' => 'Coupon code not found. Please try again.',
	'PHPSHOP_FREE_SHIPPING' => 'Free Shipping',
	'PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT' => 'Shipping is free on this Order!',
	'PHPSHOP_FREE_SHIPPING_AMOUNT' => 'Minimum Amount for Free Shipping',
	'PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP' => 'The amount (INCLUDING TAX!) which is the Minimum for Free Shipping 
                                                (example: <strong>50</strong> means Free Shipping when the customer checks out
                                                with $50 (including tax) or more.',
	'PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE' => 'Bank Account Type',
	'PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING' => 'Checking',
	'PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING' => 'Business Checking',
	'PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS' => 'Saving',
	'PHPSHOP_PAYMENT_AN_RECURRING' => 'Recurring Billings?',
	'PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP' => 'Define whether you want recurring billings.',
	'PHPSHOP_INTERNAL_ERROR' => 'Internal Error processing the Request to',
	'PHPSHOP_PAYMENT_ERROR' => 'Failure in Processing the Payment',
	'PHPSHOP_PAYMENT_TRANSACTION_SUCCESS' => 'Payment successfully processed',
	'PHPSHOP_UPS_RESPONSE_ERROR' => 'UPS was not able to process the Shipping Rate Request.',
	'PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS' => 'Guaranteed Day(s) To Delivery',
	'PHPSHOP_UPS_PICKUP_METHOD' => 'UPS Pickup Method',
	'PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP' => 'How do you give packages to UPS?',
	'PHPSHOP_UPS_PACKAGE_TYPE' => 'UPS Packaging?',
	'PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP' => 'Select the default Type of Packaging.',
	'PHPSHOP_UPS_TYPE_RESIDENTIAL' => 'Residential Delivery?',
	'PHPSHOP_UPS_RESIDENTIAL' => 'Residential (RES)',
	'PHPSHOP_UPS_COMMERCIAL' => 'Commercial Delivery (COM)',
	'PHPSHOP_UPS_RESIDENTIAL_TOOLTIP' => 'Quote for Residential (RES) or Commercial Delivery (COM).',
	'PHPSHOP_UPS_HANDLING_FEE' => 'Handling Fee',
	'PHPSHOP_UPS_HANDLING_FEE_TOOLTIP' => 'Your Handling fee for this shipping method.',
	'PHPSHOP_UPS_TAX_CLASS' => 'Tax Class',
	'PHPSHOP_UPS_TAX_CLASS_TOOLTIP' => 'Use the following tax class on the shipping fee.',
	'PHPSHOP_ERROR_CODE' => 'Error Code',
	'PHPSHOP_ERROR_DESC' => 'Error Description',
	'PHPSHOP_CHANGE_TRANSACTION_KEY' => 'Show / Change the Transaction Key',
	'PHPSHOP_PAYMENT_CVV2' => 'Request/Capture Credit Card Code Value (CVV2/CVC2/CID)',
	'PHPSHOP_PAYMENT_CVV2_TOOLTIP' => 'Check for a valid CVV2/CVC2/CID value (three- or four-digit number on the back of a credit card, on the Front of American Express Cards)?',
	'PHPSHOP_CUSTOMER_CVV2_TOOLTIP' => 'Please type in the three or four-digit number on the back of your credit card (On the Front of American Express Cards)',
	'PHPSHOP_CUSTOMER_CVV2_ERROR' => 'You need to enter your Credit Card Code to proceed.',
	'PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST' => 'Attribute List',
	'PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST' => 'Custom Attribute List',
	'PHPSHOP_MULTISELECT' => 'Multiselect: use CTRL-Key and Mouse',
	'PHPSHOP_ADMIN_CFG_ENABLE_EPN' => 'Enable eProcessingNetwork.com payment?',
	'PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN' => 'Check to use eProcessingNetwork.com with phpShop.',
	'PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE' => 'Test mode ?',
	'PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN' => 'Select \'Yes\' while testing. Select \'No\' for enabling live transactions.',
	'PHPSHOP_ADMIN_CFG_EPN_USERNAME' => 'eProcessingNetwork.com Login ID',
	'PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN' => 'This is your eProcessingNetwork.com Login ID',
	'PHPSHOP_ADMIN_CFG_EPN_KEY' => 'eProcessingNetwork.com Transaction Key',
	'PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN' => 'This is your eProcessingNetwork.com Transaction Key',
	'PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE' => 'Authentication Type',
	'PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN' => 'This is the eProcessingNetwork.com authentication type.',
	'PHPSHOP_RELATED_PRODUCTS' => 'Related Products',
	'PHPSHOP_RELATED_PRODUCTS_HEADING' => 'You may also be interested in this/these product(s)',
	'PHPSHOP_NONE' => 'none',
	'PHPSHOP_ORDER_HISTORY' => 'Order History',
	'PHPSHOP_ORDER_HISTORY_COMMENT' => 'Comment',
	'PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL' => 'Comments on your Order',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME' => 'USPS shipping username',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME_TOOLTIP' => 'USPS shipping username',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD' => 'USPS shipping password',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD_TOOLTIP' => 'USPS shipping password',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER' => 'USPS shipping server',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER_TOOLTIP' => 'USPS shipping server',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH' => 'USPS shipping path',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH_TOOLTIP' => 'USPS shipping path',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE' => 'USPS Package Size',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE_TOOLTIP' => 'USPS Package Size',
	'PHPSHOP_USPS_HANDLING_FEE' => 'Your Handling fee for this shipping method.',
	'PHPSHOP_USPS_HANDLING_FEE_TOOLTIP' => 'Your Handling fee for this shipping method.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE' => 'Your International Handling fee for USPS shipments.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE_TOOLTIP' => 'Your International Handling fee for USPS shipments.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE' => 'Your International per pound rate for USPS shipments.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE_TOOLTIP' => 'Your International per pound rate for USPS shipments.',
	'PHPSHOP_USPS_RESPONSE_ERROR' => 'USPS was not able to process the Shipping Rate Request.',
	'PHPSHOP_PRODUCT_TYPE_LIST_LBL' => 'Product Type List',
	'PHPSHOP_PRODUCT_TYPE_ADDEDIT' => 'Add/Edit Product Type',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU' => 'List Product Types',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU' => 'Add Product Type',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION' => 'Parameter Description',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE' => 'Parameter Type',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT' => 'YYYY-MM-DD',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT' => 'HH:MM:SS',
	'PHPSHOP_PARAMETER_SEARCH' => 'Advanced Search according to Parameters',
	'PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY' => 'Search in Category',
	'PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS' => 'Change Parameters',
	'PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER' => 'Descending order',
	'PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER' => 'Ascending order',
	'PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY' => 'Parameters of Category',
	'PHPSHOP_FEE' => 'Fee',
	'PHPSHOP_BACK_TO_COUNTRY' => 'Back to the country',
	'PHPSHOP_ADD_STATE' => 'Add a State',
	'PHPSHOP_LIST_STATES' => 'List States',
	'PHPSHOP_SHOW_FEATURED' => 'featured products',
	'PHPSHOP_USER_SEND_REGISTRATION_DETAILS' => 'Hello %s,

Thank you for registering at %s. Your customer account has been created.
You may login to %s using the following username and password:

Username - %s
Password - %s
',
	'PEAR_LOG_CRIT' => 'Critical',
	'PEAR_LOG_ERR' => 'Error',
	'PEAR_LOG_WARNING' => 'Warning',
	'PEAR_LOG_INFO' => 'Info',
	'PEAR_LOG_TIP' => 'Info',
	'PEAR_LOG_ALERT' => 'Alert',
	'PEAR_LOG_EMERG' => 'Emergency',
	'PEAR_LOG_NOTICE' => 'Notice',
	'PEAR_LOG_DEBUG' => 'Debug',
	'PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE' => 'Test mode ?',
	'PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE_EXPLAIN' => 'Select \'Yes\' while testing. Select \'No\' for enabling live transactions.',
	'PHPSHOP_ADMIN_CFG_PFP_PARTNER' => 'VeriSign processing Partner ID',
	'PHPSHOP_ADMIN_CFG_PFP_PARTNET_EXPLAIN' => 'The Partner ID provided to you by the authorized VeriSign Reseller that registered you for the PayFlow Pro service',
	'VM_MANAGE_USER_FIELDS' => 'Manage User Fields',
	'VM_FIELDMANAGER_REORDER' => 'Reorder',
	'VM_PRODUCTS_MOVE_TOOLBAR' => 'Move Products',
	'VM_ADMIN_CFG_PAYPAL_NOTIFYSCRIPT_TIP' => 'When enabled, let\'s you test your Notify Script File %s through the PayPal IPN Simulator: <a href="https://developer.paypal.com/cgi-bin/devscr?cmd=_ipn-link-session" target="_blank">https://developer.paypal.com</a>',
	'VM_ADMIN_CFG_PAYPAL_STATUS_PENDING_EXPLAIN' => 'The order Status to which Orders are set, which have no completed Payment Transaction. 
		The transaction was not cancelled in this case, but it is just pending and waiting for completion.',
	'VM_ADMIN_CFG_PAYPAL_STATUS_PENDING' => 'Order Status for Pending Payments',
	'VM_SHIPPING_MODULE_LIST_LBL' => 'Shipping Module List',
	'VM_ENABLED' => 'enabled',
	'VM_DISABLED' => 'disabled',
	'VM_ABOUT' => 'About',
	'VM_HELP_TOPICS' => 'Help Topics',
	'VM_COMMUNITY_FORUM' => 'Forum',
	'VM_CONFIGURATION_CHANGE_SUCCESS' => 'The configuration details have been updated!',
	'VM_CONFIGURATION_CHANGE_FAILURE' => 'Unable to write into the configuration file %s!',
	'VM_WRITABLE' => 'Writeable',
	'VM_UNWRITABLE' => 'Unwriteable',
	'VM_FEDEX_ACCOUNT_NUMBER' => 'FedEx Account Number',
	'VM_FEDEX_METER_NUMBER' => 'FedEx Meter Number',
	'VM_FEDEX_METER_NUMBER_TIP' => 'The meter number you have received from FedEx',
	'VM_FEDEX_URI' => 'FedEx Server Address',
	'VM_FEDEX_URI_TIP' => 'Per FedEx request the addresses to FedEx\'s API servers are not included (FEDEX_URI). Please register with FedEx to receive this information (<a href="http://www.fedex.com/globaldeveloper/shipapi/">www.fedex.com/globaldeveloper/shipapi/</a>).
		<br/>Default for testing is: <strong>https://gatewaybeta.fedex.com/GatewayDC</strong>',
	'VM_ORDER_EXPORT' => 'Export Modules',
	'VM_ORDER_EXPORT_MODULE_LIST_MNU' => 'List Export Modules',
	'VM_ORDER_EXPORT_MODULE_FORM_MNU' => 'Add Export Module',
	'VM_TAXDETAILS_LABEL' => 'Tax Total contains',
	'PHPSHOP_REVIEW_MODIFIED' => 'The review has been updated.',
	'VM_RECOMMEND_FORM_MESSAGE' => 'Your message',
	'VM_RECOMMEND_MESSAGE' => 'Hello,

I\'ve found this great product on %s that might be of interest for you.

You can find it here:
%s

Regards.',
	'VM_ENQUIRY_SHOPPER_EMAIL_SUBJECT' => '%s - Confirmation of your enquiry',
	'VM_ENQUIRY_VENDOR_EMAIL_SUBJECT' => '%s - Product enquiry for Product Name: %s',
	'VM_ENQUIRY_SHOPPER_EMAIL_MESSAGE' => 'Confirmation of receipt of your enquiry

Thank you for enquiry with {vendor_name} regarding:
Product Name: {product_name}
Product SKU: {product_sku}
Product Link: {product_url}

We will contact you soon regarding your enquiry.
(Please do not reply to this email)',
	'VM_ENQUIRY_VENDOR_EMAIL_MESSAGE' => 'You have received a product enquiry from {shopper_name} regarding the following product: 
Product Name: {product_name}
Product SKU: {product_sku}

Enquiry:
{shopper_message}
URL: {product_url}

Mail mailto: {shopper_email}',
	'VM_RECOMMEND_SUBJECT' => 'Product recommendation at %s',
	'VM_RECOMMEND_DONE' => 'Recommendation sent successfully!',
	'VM_RECOMMEND_FAILED' => 'Recommendation could not be sent!',
	'VM_LEGALINFO_SHORTTEXT' => '<h5>Returns Policy</h5>

You can cancel this order within two weeks after we have received it.
You can return new, unopened items from a cancelled order within 2 weeks after they have been 
delivered to you. Items should be returned in their original packaging.
For more information on cancelling orders and returning items, see the <a href="%s" onclick="%s" target="_blank">Our Returns Policy</a> page.',
	'VM_SESSION_SAVEPATH_UNWRITABLE_TMPFIX' => 'The directory to store session data is not writable. Please correct this or contact your provider.',
	'VM_SESSION_SAVEPATH_UNWRITABLE' => 'The Session Save Path %s is not writable. Please correct this! The shop is temporarily trying to use the %s instead.',
	'VM_SESSION_COOKIES_NOT_ACCEPTED_TIP' => 'Your browser does not accept cookies. To put products into your cart and purchase them you need to enable cookies.',
	'BUTTON_SEND_REG' => 'Send Registration',
	'CONTACT_FORM_NC' => 'Please make sure the form is complete and valid.',
	'CMN_REQUIRED' => 'Required',
	'CMN_NEW' => 'New',
	'CMN_SAVE' => 'Save',
	'CMN_NEW_ITEM_LAST' => 'New items default to the last place. Ordering can be changed after this item is saved.',
	'CMN_OPTIONAL' => 'Optional',
	'E_APPLY' => 'Apply',
	'E_IMAGES' => 'Images',
	'URL' => 'URL:',
	'E_REMOVE' => 'Remove',
	'PN_LT' => '<',
	'PN_RT' => '>',
	'PN_PAGE' => 'Page',
	'PN_OF' => 'of',
	'PN_START' => 'Start',
	'PN_PREVIOUS' => 'Prev',
	'PN_NEXT' => 'Next',
	'PN_END' => 'End',
	'PN_DISPLAY_NR' => 'Display #',
	'PN_RESULTS' => 'Results',
	'CMN_PRINT' => 'Print',
	'CMN_PDF' => 'PDF',
	'CMN_EMAIL' => 'E-mail',
	'BACK' => 'Back',
	'USERNAME' => 'Username',
	'PASSWORD' => 'Password',
	'BUTTON_LOGIN' => 'Login',
	'REGISTER_UNAME' => 'Username',
	'REGISTER_EMAIL' => 'Email',
	'REGWARN_MAIL' => 'Please enter a valid e-mail address.',
	'SEND_SUB' => 'Account details for %s at %s',
	'ASEND_MSG' => 'Hello %s,
	
	A new user has registered at %s.
	This email contains their details:
	
	Name - %s
	e-mail - %s
	Username - %s
	
	Please do not respond to this message as it is automatically generated and is for information purposes only',
	'REG_COMPLETE' => '<div class="componentheading">Registration Complete!</div>',
	'REG_COMPLETE_ACTIVATE' => '<div class="componentheading">Registration Completed!</div><br />Your account has been created and activation link has been sent to the e-mail address you entered. Note that you must activate the account by clicking on the activation link when you get the e-mail before you can login.',
	'DATE_FORMAT_LC' => '%A, %d %B %Y',
	'VM_CART_PRODUCT_ADDED' => 'The product was added to your cart.',
	'VM_CART_PRODUCT_UPDATED' => 'The product quantity has been updated.',
	'CMN_OK' => 'Ok',
	'CMN_CONTINUE' => 'Continue',
	'CMN_CANCEL' => 'Cancel',
	'VM_USERGROUP_LBL' => 'User Groups',
	'VM_CART_MIN_ORDER' => 'The minimum order level for this product is $min items.',
	'VM_CART_MAX_ORDER' => 'The maximum order level for this product is $max items.',
	'ITEM_PREVIOUS' => 'previous',
	'ITEM_NEXT' => 'next',
	'VM_ORDER_EDIT_ACTIONS' => 'Actions',
	'VM_ORDER_EDIT' => 'Modify Order',
	'VM_ORDER_EDIT_ADD' => 'Add',
	'VM_ORDER_EDIT_ADD_PRODUCT' => 'Add product',
	'VM_ORDER_EDIT_EDIT_ORDER' => 'Modify order',
	'VM_ORDER_EDIT_ERROR_QUANTITY_MUST_BE_HIGHER_THAN_0' => 'The quantity has to be more than 0',
	'VM_ORDER_EDIT_PRODUCT_ADDED' => 'Product successfully added to the order',
	'VM_ORDER_EDIT_PRODUCT_DELETED' => 'Product successfully removed from the order',
	'VM_ORDER_EDIT_QUANTITY_UPDATED' => 'Quantity successfully updated',
	'VM_ORDER_EDIT_RETURN_PARENTS' => 'Back to the parent product',
	'VM_ORDER_EDIT_CHOOSE_PRODUCT' => 'Choose a product',
	'PHPSHOP_PRODUCT_FORM_ATTRIBUTE_NEW' => 'New Attribute',
	'PHPSHOP_PRODUCT_FORM_PROPERTY_NEW' => 'New Property',
	'PHPSHOP_PRODUCT_FORM_PROPERTY' => 'Property',
	'PHPSHOP_PRODUCT_FORM_ATTRIBUTE_DELETE' => 'Delete Attribute',
	'LAST_UPDATED' => 'Last Updated',
	'NOT_AUTH' => 'You are not authorized to view this resource.',
	'DO_LOGIN' => 'You need to login.',
	'VALID_AZ09' => 'Please enter a valid %s.  No spaces, more than %d characters and contain 0-9,a-z,A-Z',
	'CMN_PUBLISHED' => 'Published',
	'CMN_UNPUBLISHED' => 'Unpublished',
	'MORE' => 'More...',
	'BUTTON_LOGOUT' => 'Logout',
	'NO_ACCOUNT' => 'No account yet?',
	'CREATE_ACCOUNT' => 'Register',
	'REGWARN_PASS' => 'Please enter a valid password.  No spaces, more than 6 characters and contain 0-9,a-z,A-Z',
	'REGWARN_VPASS1' => 'Please verify the password.',
	'REGWARN_VPASS2' => 'Password and verification do not match, please try again.',
	'USEND_MSG_ACTIVATE' => 'Hello %s,

Thank you for registering at %s. Your account is created and must be activated before you can use it.
To activate the account click on the following link or copy-paste it in your browser:
%s

After activation you may login to %s using the following username and password:

Username - %s
Password - %s',
	'USEND_MSG' => 'Hello %s,

Thank you for registering at %s.

You may now login to %s using the username and password you registered with.',
	'HI' => 'Hi',
	'NEW_USER_MESSAGE_SUBJECT' => 'New User Details',
	'NEW_USER_MESSAGE' => 'Hello %s,


You have been added as a user to %s by an Administrator.

This email contains your username and password to log into the %s

Username - %s
Password - %s


Please do not respond to this message as it is automatically generated and is for information purposes only',
	'REMEMBER_ME' => 'Remember me',
	'JAN' => 'January',
	'FEB' => 'February',
	'MAR' => 'March',
	'APR' => 'April',
	'MAY' => 'May',
	'JUN' => 'June',
	'JUL' => 'July',
	'AUG' => 'August',
	'SEP' => 'September',
	'OCT' => 'October',
	'NOV' => 'November',
	'DEC' => 'December',
	'VM_DOWNLOAD_FILE_NOTREADABLE' => 'Sorry, but the requested file can\'t be read from the Server',
	'VM_DOWNLOAD_FILE_NOTFOUND' => 'Sorry, but the requested file wasn\'t found. Possible Cause: Wrong path',
	'VALID_EUVATID' => 'Please enter a valid EU VAT ID',
	'VM_REGISTER_ACCOUNT' => 'Register an Account?<br />
		An Account allows you to come back to this shop and view all the orders you have made.',
	'RELOAD' => 'Reload',
	'VM_FEED_SUBSCRIBE_TITLE' => 'Subscribe to the Feed of the latest Products!',
	'VM_FEED_SUBSCRIBE_TOCATEGORY_TITLE' => 'Subscribe to the Feed of the latest Products in this Category!',
	'VM_FEDEX_ACCOUNT_SETTINGS' => 'FedEx Account Settings',
	'VM_FEDEX_TAXES_FEES' => 'Taxes and Fees',
	'VM_FEDEX_ADDITIONAL_SETTINGS' => 'Additional Settings',
	'VM_FEDEX_TAX_CLASS' => 'Tax Class',
	'VM_FEDEX_TAX_CLASS_TOOLTIP' => 'This tax rate will be applied to the shipping fee.',
	'VM_FEDEX_HANDLING_FEE' => 'Handling Fee',
	'VM_FEDEX_HANDLING_FEE_TOOLTIP' => 'Specify an additional handling fee, if desired.',
	'VM_FEDEX_SERVICES' => 'Allowed Services',
	'VM_FEDEX_SIGNATURE_OPTION' => 'Signature Option',
	'VM_FEDEX_SIGNATURE_OPTION_1' => 'Deliver without signature',
	'VM_FEDEX_SIGNATURE_OPTION_2' => 'Indirect signature',
	'VM_FEDEX_SIGNATURE_OPTION_3' => 'Direct signature',
	'VM_FEDEX_SIGNATURE_OPTION_4' => 'Adult signature',
	'VM_FEDEX_SORT_ORDER' => 'Rate Display Order',
	'VM_FEDEX_SORT_ASC' => 'Ascending',
	'VM_FEDEX_SORT_DESC' => 'Descending',
	'VM_FEDEX_ERR_METER_NUMBER' => 'Error updating the Meter Number.',
	'VM_FEDEX_LBL_METHOD' => 'Shipping Method',
	'VM_FEDEX_LBL_PRICE' => 'Price',
	'VM_FEATURED_PRODUCT' => 'Featured Products',
	'VM_RECENT_PRODUCTS' => 'Recently Viewed Products',
	'VM_ADMIN_SIMPLE_LAYOUT' => 'Simple Layout',
	'VM_ADMIN_EXTENDED_LAYOUT' => 'Extended Layout',
	'VM_YOUR_VERSION' => 'Your Version',
	'VM_ADMIN_BACKTOJOOMLA' => 'Back to Joomla! Administration',
	'VM_ADMIN_PANELTITLE' => 'VirtueMart Administration Panel',
	'VM_VERSIONCHECK_TITLE' => 'VirtueMart Version Check',
	'VM_VERSIONCHECK_NOW' => 'Check for latest version',
	'LOST_PASSWORD' => 'Lost Password?',
	'PHPSHOP_USPS_PADDING' => 'Percent to pad weight for shipping package. (Include %)',
	'PHPSHOP_USPS_PADDING_TOOLTIP' => 'Pad the shipping weight to allow additional weight for shipping box and packing. Using this allows you to put actual weight in your items weight settings.  Requires you to have the % sign included.  Example 15%',
	'PHPSHOP_SHIPPING_METHOD_DHL_INTERNATIONAL_ENABLED' => 'Enable International Express Shipping Method',
	'PHPSHOP_SHIPPING_METHOD_DHL_INTERNATIONAL_ENABLED_TOOLTIP' => 'Get shipping estimates for International Express shipping method.',
	'PHPSHOP_SHIPPING_METHOD_DHL_DOMESTIC_PACKAGE' => 'Domestic Package Type',
	'PHPSHOP_SHIPPING_METHOD_DHL_DOMESTIC_PACKAGE_TOOLTIP' => 'Domestic Package Type',
	'PHPSHOP_SHIPPING_METHOD_DHL_INTERNATIONAL_PACKAGE' => 'International Package Type',
	'PHPSHOP_SHIPPING_METHOD_DHL_INTERNATIONAL_PACKAGE_TOOLTIP' => 'International Package Type',
	'PHPSHOP_SHIPPING_METHOD_DHL_PACKAGE_LETTER' => 'Letter/Envelope',
	'PHPSHOP_SHIPPING_METHOD_DHL_PACKAGE_PACKAGE' => 'Package',
	'PHPSHOP_SHIPPING_METHOD_DHL_PACKAGE_DHL_PACKAGE' => 'DHL Packaging',
	'PHPSHOP_SHIPPING_METHOD_DHL_PACKAGE_OTHER' => 'Your Packaging',
	'PHPSHOP_SHIPPING_METHOD_DHL_CONTENT_DESC' => 'Shipping Contents Description (for Intl.)',
	'PHPSHOP_SHIPPING_METHOD_DHL_CONTENT_DESC_TOOLTIP' => 'Shipping contents description for use with international shipments.  Harmonizing codes would be a good choice.',
	'PHPSHOP_SHIPPING_METHOD_DHL_EXPRESS' => 'Express',
	'PHPSHOP_SHIPPING_METHOD_DHL_NEXT_AFTERNOON' => 'Next Afternoon',
	'PHPSHOP_SHIPPING_METHOD_DHL_SECOND_DAY' => 'Second Day',
	'PHPSHOP_SHIPPING_METHOD_DHL_GROUND' => 'Ground',
	'PHPSHOP_SHIPPING_METHOD_DHL_1030' => 'Express 10:30am',
	'PHPSHOP_SHIPPING_METHOD_DHL_SATURDAY' => 'Express Saturday',
	'PHPSHOP_SHIPPING_METHOD_DHL_INTERNATIONAL' => 'International Express',
	'PHPSHOP_SHIPPING_METHOD_DHL_INVALID_XML' => 'Invalid DHL XML Response',
	'PHPSHOP_SHIPPING_METHOD_DHL_MISSING_RESULT' => 'DHL XML Response missing result code',
	'PHPSHOP_SHIPPING_METHOD_DHL_NOT_ON_WEEKENDS' => 'DHL Shipping is not available on weekends.',
	'PHPSHOP_SHIPPING_METHOD_DHL_TOO_LATE_TO_SHIP' => 'It is too late for the DHL shipment to go out today.',
	'PHPSHOP_SHIPPING_METHOD_DHL_WILL_GO_OUT' => 'The order will ship on',
	'PHPSHOP_SHIPPING_METHOD_DHL_ID' => 'DHL ID',
	'PHPSHOP_SHIPPING_METHOD_DHL_ID_TOOLTIP' => 'DHL assigned access ID',
	'PHPSHOP_SHIPPING_METHOD_DHL_PASSWORD' => 'DHL Password',
	'PHPSHOP_SHIPPING_METHOD_DHL_PASSWORD_TOOLTIP' => 'DHL Password corresponding to ID',
	'PHPSHOP_SHIPPING_METHOD_DHL_DOMESTIC_SHIPPING_KEY' => 'Domestic DHL Shipping Key',
	'PHPSHOP_SHIPPING_METHOD_DHL_DOMESTIC_SHIPPING_KEY_TOOLTIP' => 'DHL assigned Domestic shipping key',
	'PHPSHOP_SHIPPING_METHOD_DHL_INTERNATIONAL_SHIPPING_KEY' => 'International DHL Shipping Key',
	'PHPSHOP_SHIPPING_METHOD_DHL_INTERNATIONAL_SHIPPING_KEY_TOOLTIP' => 'DHL assigned International shipping key',
	'PHPSHOP_SHIPPING_METHOD_DHL_ACCOUNT_NUMBER' => 'DHL Account Number',
	'PHPSHOP_SHIPPING_METHOD_DHL_ACCOUNT_NUMBER_TOOLTIP' => 'DHL account number corresponding to shipping key',
	'PHPSHOP_SHIPPING_METHOD_DHL_TOO_LATE' => 'Too late to ship at (24h format)',
	'PHPSHOP_SHIPPING_METHOD_DHL_TOO_LATE_TOOLTIP' => 'This is the time when items will no longer ship the same day.  The will ship the next business day.  Use 24 hour format (.e.g. 1600, not 4:00pm)',
	'PHPSHOP_SHIPPING_METHOD_DHL_TEST_MODE' => 'Use Test Mode',
	'PHPSHOP_SHIPPING_METHOD_DHL_TEST_MODE_TOOLTIP' => 'Use DHL\'s testing server, not the production server',
	'PHPSHOP_SHIPPING_METHOD_DHL_EXPRESS_ENABLED' => 'Enable Express Shipping Method',
	'PHPSHOP_SHIPPING_METHOD_DHL_EXPRESS_ENABLED_TOOLTIP' => 'Get shipping estimates for Express shipping method.',
	'PHPSHOP_SHIPPING_METHOD_DHL_NEXT_AFTERNOON_ENABLED' => 'Enable Next Afternoon Shipping Method',
	'PHPSHOP_SHIPPING_METHOD_DHL_NEXT_AFTERNOON_ENABLED_TOOLTIP' => 'Get shipping estimates for Next Afternoon shipping method.',
	'PHPSHOP_SHIPPING_METHOD_DHL_SECOND_DAY_ENABLED' => 'Enable Second Day Shipping Method',
	'PHPSHOP_SHIPPING_METHOD_DHL_SECOND_DAY_ENABLED_TOOLTIP' => 'Get shipping estimates for Second Day shipping method.',
	'PHPSHOP_SHIPPING_METHOD_DHL_GROUND_ENABLED' => 'Enable Ground Shipping Method',
	'PHPSHOP_SHIPPING_METHOD_DHL_GROUND_ENABLED_TOOLTIP' => 'Get shipping estimates for Ground shipping method.',
	'PHPSHOP_SHIPPING_METHOD_DHL_1030_ENABLED' => 'Enable Express 10:30am Shipping Method',
	'PHPSHOP_SHIPPING_METHOD_DHL_1030_ENABLED_TOOLTIP' => 'Get shipping estimates for Express 10:30am shipping method.',
	'PHPSHOP_SHIPPING_METHOD_DHL_SATURDAY_ENABLED' => 'Enable Express Saturday Shipping Method (Fridays only)',
	'PHPSHOP_SHIPPING_METHOD_DHL_SATURDAY_ENABLED_TOOLTIP' => 'Get shipping estimates for Express Saturday shipping method (will only appear on Fridays).',
	'PHPSHOP_SHIPPING_METHOD_DHL_PACKAGE_WEIGHT' => 'Weight of packaging',
	'PHPSHOP_SHIPPING_METHOD_DHL_PACKAGE_WEIGHT_TOOLTIP' => 'The packaging weight will be added to the total order weight.  Set to 0 if your item weights already include package weight.',
	'PHPSHOP_SHIPPING_METHOD_DHL_DUTY_SHOPPER_GROUP' => 'Shopper Group to Use for Duty Values (for Intl.)',
	'PHPSHOP_SHIPPING_METHOD_DHL_DUTY_SHOPPER_GROUP_TOOLTIP' => 'Enter the shopper group you have created to hold the product value used in calculating international duty values.  For example, create a shopper group \'DUTY\' and use it in each item to define a special price to be used in duty value calculations.  If no group is specified, or a product item does not contain this shopper group, the default price is used.',
	'PHPSHOP_SHIPPING_METHOD_DHL_ADDITIONAL_PROTECTION' => 'Additional Protection Type',
	'PHPSHOP_SHIPPING_METHOD_DHL_ADDITIONAL_PROTECTION_TOOLTIP' => 'Select a form of Additional Protection (insurance), or none',
	'PHPSHOP_SHIPPING_METHOD_DHL_ASSET_PROTECTION' => 'Asset Protection',
	'PHPSHOP_SHIPPING_METHOD_DHL_NOT_REQUIRED' => 'Not Required',
	'PHPSHOP_SHIPPING_METHOD_DHL_INSURANCE_SHOPPER_GROUP' => 'Shopper Group to Use for Insurance Values',
	'PHPSHOP_SHIPPING_METHOD_DHL_INSURANCE_SHOPPER_GROUP_TOOLTIP' => 'Enter the shopper group you have created to hold the product value used in calculating insurance protection.  For example, create a shopper group \'INSURANCE\' and use it in each item to define a special price to be used in insurance value calculations.  If no group is specified, or a product item does not contain this shopper group, the default price is used.',
	'PHPSHOP_SHIPPING_METHOD_DHL_DOMESTIC_INSURANCE' => 'Default Domestic Insurance Rate',
	'PHPSHOP_SHIPPING_METHOD_DHL_DOMESTIC_INSURANCE_TOOLTIP' => 'DHL\'s default Domestic insurance rate - flat value per package.',
	'PHPSHOP_SHIPPING_METHOD_DHL_INTERNATIONAL_INSURANCE' => 'Default International Insurance Rate (per pound)',
	'PHPSHOP_SHIPPING_METHOD_DHL_INTERNATIONAL_INSURANCE_TOOLTIP' => 'DHL\'s default International insurance rate - per pound rate.',
	'PHPSHOP_SHIPPING_METHOD_DHL_HANDLING_FEE' => 'Handling Fee',
	'PHPSHOP_SHIPPING_METHOD_DHL_HANDLING_FEE_TOOLTIP' => 'Handling fee to add to all shipments.',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_HISTORY' => 'Tracking History',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_NO_DATA' => 'No tracking data.',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_NUMBER' => 'Tracking Number',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_PACKAGE' => 'Package Type',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_SERVICE' => 'Service Type',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_SENDER' => 'Sender',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_RECEIVER' => 'Receiver',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_PICKUP' => 'Pick-Up',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_DELIVERY' => 'Delivery',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_DATE' => 'Date',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_TIME' => 'Time',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_LOCATION' => 'Location',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_EST_DEL' => 'Estimated Delivery',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_SIGNATORY' => 'Signatory',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_SIGNATURE_LEGEND' => 'The list below can be used to decipher delivery codes (if shown):',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_LEGEND_LD' => 'LD Locally Delivered',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_LEGEND_FD' => 'FD Front Door',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_LEGEND_SD' => 'SD Side Door',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_LEGEND_BD' => 'BD Back Door',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_LEGEND_GAR' => 'GAR Garage',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_LEGEND_LOF' => 'LOF Left per Letter on File at Station',
	'PHPSHOP_SHIPPING_METHOD_DHL_TRACKING_LEGEND_LPN' => 'LPN Left per Signed not or Attempted Delivery Notice',
	'FORGOT_YOUR_USERNAME' => 'Forgot your username?',
	'EMAIL_FRIEND' => 'E-mail this to a friend.',
	'EMAIL_FRIEND_ADDR' => 'Your friend\'s e-mail:',
	'EMAIL_YOUR_NAME' => 'Your Name:',
	'EMAIL_YOUR_MAIL' => 'Your e-mail:',
	'VM_CART_NOTIFY' => 'Notify Me!',
	'CMN_PUBLISH' => 'Publish',
	'CMN_UNPUBLISH' => 'Unpublish',
	'CMN_PLEASESELECT_PUBLISH' => 'Please make a selection from the list to publish',
	'CMN_PLEASESELECT_UNPUBLISH' => 'Please make a selection from the list to unpublish',
	'CMN_PLEASESELECT_DELETE' => 'Please make a selection from the list to delete',
	'CMN_PLEASESELECT_TO' => 'Please make a selection from the list to',
	'CMN_CONFIRM_DELETE_ITEMS' => 'Are you sure you want to delete selected items?',
	'NO_RESTRICTION' => 'No Restriction',
	'CMN_ORDER_UP' => 'Order Up',
	'CMN_ORDER_DOWN' => 'Order Down',
	'PRODUCT_WAITING_LIST_EMAIL_SUBJECT' => '%s Has Arrived!',
	'PRODUCT_WAITING_LIST_EMAIL_TEXT' => 'Thank you for your patience.

Our %s  is now in stock and can be purchased by following this link:
%s

 This is a one time notice, you will not receive this e-mail again.',
	'PHPSHOP_CART_GOTO_WAITING_LIST' => 'Please wait: in the next page you can submit the notify request.',
	'PHPSHOP_ADMIN_CFG_PAYMENT_ORDERSTATUS_SUCC' => 'Order Status for successful transactions',
	'PHPSHOP_ADMIN_CFG_PAYMENT_ORDERSTATUS_SUCC_EXPLAIN' => 'Select the order status to which the actual order is set, if the payment transaction was successful. 
		If using download selling options: select the status which enables the download (then the customer is instantly notified about the download via e-mail).',
	'PHPSHOP_ADMIN_CFG_PAYMENT_ORDERSTATUS_FAIL' => 'Order Status for failed transactions',
	'PHPSHOP_ADMIN_CFG_PAYMENT_ORDERSTATUS_FAIL_EXPLAIN' => 'Select an order status for failed payment transactions.',
	'PHPSHOP_ADMIN_CFG_AUTORIZENET_RESPCODES' => 'Show Response Codes for Failed Transactions?',
	'PHPSHOP_ADMIN_CFG_AUTORIZENET_RESPCODES_EXPLAIN' => 'If set to YES then the customer will see the Authorize.net Transaction Response Reason Codes (Response Code - 
		Response Subcode - Response Reason Code - AVS Result Code - Card Code (CVV2/CVC2/CID) Response Code - 
		Cardholder Authentication Verification Value (CAVV) Response Code - in a format like: 2-2-65-Y-N--)
		along with the Response Reason Text. This can be useful for troubleshooting failed or declined transactions.
		For further details see the <a href="http://www.authorize.net/support/AIM_guide.pdf">Authorize.net Advanced Integration Method (AIM) Implementation Guide</a>',
	'PHPSHOP_ADMIN_CFG_AUTORIZENET_EMAIL_MERCHANT' => 'Email Confirmation from Gateway to Merchant?',
	'PHPSHOP_ADMIN_CFG_AUTORIZENET_EMAIL_MERCHANT_EXPLAIN' => 'Send copy of the customer confirmation email to the Merchant? If yes then an email will
		be sent to the Merchant address as well as the address(es) configured in the Merchant Interface.
		<em> Note: this email is sent from the Authorize.net gateway and is independent of any email sent by VirtueMart</em>',
	'PHPSHOP_ADMIN_CFG_AUTORIZENET_EMAIL_CUSTOMER' => 'Email Confirmation from Gateway to Customer?',
	'PHPSHOP_ADMIN_CFG_AUTORIZENET_EMAIL_CUSTOMER_EXPLAIN' => 'Send a confirmation email to the customer? If yes then an email will
		be sent to the customer from the Merchant Interface.
		<em> Note: this email is sent from the Authorize.net gateway and is independent of any email sent by VirtueMart</em> ',
	'PHPSHOP_ADMIN_CFG_PFP_VENDOR' => 'Merchant Login / Vendor Name',
	'PHPSHOP_ADMIN_CFG_PFP_VENDOR_EXPLAIN' => 'Your Merchant Login Name',
	'PHPSHOP_ADMIN_CFG_PFP_USER' => 'User Name',
	'PHPSHOP_ADMIN_CFG_PFP_USER_EXPLAIN' => 'Your Merchant Login Name',
	'PHPSHOP_ADMIN_CFG_PFP_PASSWORD' => 'Password',
	'PHPSHOP_ADMIN_CFG_PFP_PASSWORD_SETCHANGE' => 'Set / Change the Password',
	'PHPSHOP_ADMIN_CFG_ECHECK_USERNAME' => 'eCheck.net Login ID',
	'PHPSHOP_ADMIN_CFG_ECHECK_USERNAME_EXPLAIN' => 'This is your eCheck.Net Login ID',
	'PHPSHOP_ADMIN_CFG_ECHECK_KEY' => 'eCheck.net Transaction Key',
	'PHPSHOP_ADMIN_CFG_ECHECK_KEY_EXPLAIN' => 'This is your eCheck.net Transaction Key',
	'PHPSHOP_ADMIN_CFG_ECHECK_AUTENTICATIONTYPE' => 'Authentication Type',
	'PHPSHOP_ADMIN_CFG_ECHECK_AUTENTICATIONTYPE_EXPLAIN' => 'This is the eCheck.Net authentication type.',
	'PHPSHOP_ADMIN_CFG_ECHECK_TRANSACTIONTYPE' => 'eCheck.net Transaction Type',
	'PHPSHOP_ADMIN_CFG_ECHECK_TRANSACTIONTYPE_EXPLAIN' => 'This is the eCheck.Net transaction type.',
	'PHPSHOP_ADMIN_CFG_EWAY_CUSTID' => 'eWay Customer ID',
	'PHPSHOP_ADMIN_CFG_EWAY_CUSTID_EXPLAIN' => 'The Customer ID you received from eWay.',
	'PHPSHOP_ADMIN_CFG_NOCHEX_EMAIL' => 'NoChex Email',
	'PHPSHOP_ADMIN_CFG_NOCHEX_EMAIL_EXPLAIN' => 'The Email-Account for your NoChex Payments.',
	'PHPSHOP_ADMIN_CFG_PN_LOGIN' => 'PayMeNow ID',
	'PHPSHOP_ADMIN_CFG_PN_LOGIN_EXPLAIN' => 'The PayMeNow Login/Account ID',
	'PHPSHOP_ADMIN_CFG_PAYPAL_ONLYVERIFIED' => 'Accept only verified buyers?',
	'PHPSHOP_ADMIN_CFG_PAYPAL_ONLYVERIFIED_EXPLAIN' => 'Here you can choose if you only want to accept payments from buyers with a
		<strong>verified</strong> PayPal account (when an account is not verified, PayPal does transfer the funds, but they do not fully guarantee the validity of the sale).',
	'PHPSHOP_ADMIN_CFG_2CHECKOUT_LOGIN' => '2Checkout.com Seller/Vendor ID',
	'PHPSHOP_ADMIN_CFG_2CHECKOUT_LOGIN_EXPLAIN' => 'Your 2Checkout.com Seller ID',
	'PHPSHOP_ADMIN_CFG_2CHECKOUT_SECRETWORD' => '2Checkout.com Secret Word',
	'PHPSHOP_ADMIN_CFG_2CHECKOUT_SECRETWORD_EXPLAIN' => 'Your Secret Word for 2Checkout.com. Makes the transactions more secure.',
	'PHPSHOP_ADMIN_CFG_2CHECKOUT_MERCHANT_NOTIF' => 'Merchant Notifications',
	'PHPSHOP_ADMIN_CFG_2CHECKOUT_MERCHANT_NOTIF_EXPLAIN' => 'Should 2CheckOut e-mail a receipt to the store owner?',
	'PHPSHOP_EPAY_FRAUD' => 'There have been made %s payment(s) with this card in the last 24 hours',
	'PHPSHOP_EPAY_PAYMENT_DATE' => 'Date of payment: ',
	'PHPSHOP_EPAY_PAYMENT_FEE' => 'Fee have been charged the payment: ',
	'PHPSHOP_EPAY_PAYMENT_CALLBACK' => '<b>Order payment info was updated using callback!</b>',
	'PHPSHOP_EPAY_PAYMENT_ORDER_COMMENT' => 'The payment was authorised by ePay/PBS. \n The payment have received the following transaction number in ePay: ',
	'PHPSHOP_EPAY_PAYMENT_RETRY_PAYMENT' => '<br/><br><br><b>Click on the link below to try paying again:</b><br>',
	'PHPSHOP_EPAY_PAYMENT_ORDER_NOT_FOUND' => '(The order was not found - Internal error)',
	'PHPSHOP_EPAY_PAYMENT_MD5_CHECK_FAILURE' => '(Error in MD5 validation - Internal error - configuration error)',
	'PHPSHOP_EPAY_PAYMENT_DECLINE' => 'The payment was not authorised by ePay/PBS. The payment was rejected because of the following error code: ',
	'PHPSHOP_EPAY_PAYMENT_LOG_TID' => 'The payment is set up with transaction number: ',
	'PHPSHOP_EPAY_PAYMENT_EPAY_LINK' => 'The payment can be processed at: <a href="https://ssl.ditonlinebetalingssystem.dk/admin" target="_new">www.epay.dk</a>',
	'VM_CHECKOUT_EPAY_PAYMENT_CHECKOUT_HEADER' => 'You have now confirmed the order and must now choose how the order have to be paid. This is done by clicking the required payment method below. The payment will happen in a SSL secure window at ePay (<a href="http://www.epay.dk" target="_new">www.epay.dk</a>).<br><br>',
	'VM_CHECKOUT_EPAY_PAYMENT_CHECKOUT_FOOTER' => 'If the Standard Payment window does not open automatically , then click the button to activate it. Notice! If you are using a pop-up blocker, you must press the CTRL key while clicking the button.',
	'VM_CHECKOUT_EPAY_BUTTON_OPEN_WINDOW' => 'OPEN PAYMENT WINDOW',
	'PHPSHOP_ADMIN_CFG_EPAY_MERCHANTNUMBER' => 'PBS Merchant ID',
	'PHPSHOP_ADMIN_CFG_EPAY_MERCHANTNUMBER_EXPLAIN' => 'The Merchant ID you have received from PBS. For testing purpose a test Merchant ID can be obtained by contacting ePay (sales@epay.dk)',
	'PHPSHOP_ADMIN_CFG_EPAY_CARDTYPES' => 'Cardtypes',
	'PHPSHOP_ADMIN_CFG_EPAY_CARDTYPES_EXPLAIN' => 'Select cardtypes to show the customer.',
	'PHPSHOP_ADMIN_CFG_EPAY_LANGUAGE' => 'Language',
	'PHPSHOP_ADMIN_CFG_EPAY_LANGUAGE_EXPLAIN' => 'Select the language of the payment window.',
	'PHPSHOP_ADMIN_CFG_EPAY_INSTANT_CAPTURE' => 'Instant capture',
	'PHPSHOP_ADMIN_CFG_EPAY_INSTANT_CAPTURE_EXPLAIN' => 'To capture payments immediately.',
	'PHPSHOP_ADMIN_CFG_EPAY_GROUP' => 'Group',
	'PHPSHOP_ADMIN_CFG_EPAY_GROUP_EXPLAIN' => 'To move the payment to a specified group. If not leave this field empty.',
	'PHPSHOP_ADMIN_CFG_EPAY_MD5_TYPE_1' => 'MD5 on accept page',
	'PHPSHOP_ADMIN_CFG_EPAY_MD5_TYPE_2' => 'MD5 on both data transmitted to ePay and on accept page',
	'PHPSHOP_ADMIN_CFG_EPAY_MD5_TYPE_EXPLAIN' => 'The type of MD5 usage. 0 disables MD5. 1 uses MD5 on the accept page on this shop. 2 creates a MD5 stamp, which is send to ePay with transaction data. If this stamp does not match ePay will decline the payment.',
	'PHPSHOP_ADMIN_CFG_EPAY_MD5_KEY' => 'MD5 key',
	'PHPSHOP_ADMIN_CFG_EPAY_MD5_KEY_EXPLAIN' => 'If MD5 is enabled above the secure key for MD5 stamping is defined here (same secret key must be defined in the ePay administration). If MD5 is disabled leave this field empty.',
	'PHPSHOP_ADMIN_CFG_EPAY_AUTHSMS' => 'Auth SMS',
	'PHPSHOP_ADMIN_CFG_EPAY_AUTHSMS_EXPLAIN' => 'Enter a mobile number here to receive a SMS message when the payment is verified by ePay. <b>Notice! each SMS costs DKK 0.25.</b>',
	'PHPSHOP_ADMIN_CFG_EPAY_AUTHEMAIL' => 'Auth EMAIL',
	'PHPSHOP_ADMIN_CFG_EPAY_AUTHEMAIL_EXPLAIN' => 'Enter one or more email addresses to receive an email when the payment is verified by ePay. For multiple receivers separate the email addresses by semicolon (;).',
	'PHPSHOP_ADMIN_CFG_EPAY_WINDOWSTATE' => 'Window State',
	'PHPSHOP_ADMIN_CFG_EPAY_WINDOWSTATE_1' => 'Popup',
	'PHPSHOP_ADMIN_CFG_EPAY_WINDOWSTATE_2' => 'Same window (full screen)',
	'PHPSHOP_ADMIN_CFG_EPAY_3DSECURE' => '3D secure',
	'PHPSHOP_ADMIN_CFG_EPAY_3DSECURE_1' => '3D secure is enabled',
	'PHPSHOP_ADMIN_CFG_EPAY_3DSECURE_2' => 'Only payments by use of 3D secure is allowed',
	'PHPSHOP_ADMIN_CFG_EPAY_3DSECURE_3' => '3D secure payments are disabled',
	'PHPSHOP_ADMIN_CFG_EPAY_CALLBACK' => 'Activate callback',
	'PHPSHOP_ADMIN_CFG_EPAY_CALLBACK_0' => 'Callback is disabled',
	'PHPSHOP_ADMIN_CFG_EPAY_CALLBACK_1' => 'Enable callback',
	'PHPSHOP_ADMIN_CFG_EPAY_CALLBACK_EXPLAIN' => 'Callback is used to avoid missing update of the shopping system if
		the user closes the browser before redirect to the shop from ePay is made. <b>(It is recommended that callback is enabled to update the
		shop even if the customer during the payment process closes the browser)</b>',
	'PHPSHOP_ADMIN_CFG_EPAY_ADDFEE' => 'Transaction Fee',
	'PHPSHOP_ADMIN_CFG_EPAY_ADDFEE_0' => 'Customer does not pay the transaction fee',
	'PHPSHOP_ADMIN_CFG_EPAY_ADDFEE_1' => 'The customer pays the transaction fee',
	'PHPSHOP_ADMIN_CFG_EPAY_ADDFEE_EXPLAIN' => 'Often it is necessary to present the transaction fee to the customer.
		ePay will calculate the fee and put it on the payment before the payment is made.',
	'PHPSHOP_ADMIN_CFG_EPAY_SUBSCRIPTION' => 'Subscription',
	'PHPSHOP_ADMIN_CFG_EPAY_SUBSCRIPTION_0' => 'Disable subscription',
	'PHPSHOP_ADMIN_CFG_EPAY_SUBSCRIPTION_1' => 'All payments are created as recurrent subscriptions',
	'PHPSHOP_ADMIN_CFG_EPAY_SUBSCRIPTION_EXPLAIN' => 'Subscriptions are used for creating payments that can be authorized more than once (recurrent payments)',
	'PHPSHOP_ADMIN_CFG_WORLDPAY_INSTID' => 'WorldPay Installation ID',
	'PHPSHOP_ADMIN_CFG_WORLDPAY_INSTID_EXPLAIN' => 'The "Installation ID", you\'ve got from WorldPay.',
	'PHPSHOP_ADMIN_CFG_PBS_MERCHANT_ID' => 'PBS Merchant ID',
	'PHPSHOP_ADMIN_CFG_PBS_MERCHANT_ID_EXPLAIN' => 'The Merchant ID you have received from PBS',
	'PHPSHOP_ADMIN_CFG_PBD_GATEWAY' => 'Payment Gateway',
	'PHPSHOP_ADMIN_CFG_PBD_GATEWAY_EXPLAIN' => 'The Payment Gateway you are using for Payment Transactions.',
	'PHPSHOP_ADMIN_CFG_PBS_SHOP_ID' => 'Shop ID',
	'PHPSHOP_ADMIN_CFG_PBS_SHOP_ID_EXPLAIN' => 'The Shop ID (Only if you are using Webhosting.dk, Danhost.dk or Wannafind.dk Payment Gateway)',
	'PHPSHOP_MENU' => 'Menu',
	'PHPSHOP_SELECT_CATEGORY' => 'Select a Category:',
	'PHPSHOP_RANDOM' => 'Random Products',
	'VM_ORDER_EXPORT_MODULE_FORM_LBL' => 'Export Module Form',
	'VM_ORDER_EXPORT_MODULE_FORM_NAME' => 'Name of Export Module',
	'VM_ORDER_EXPORT_MODULE_FORM_DESC' => 'Description',
	'VM_ORDER_EXPORT_CLASS_NAME' => 'Export Module Class Name',
	'VM_ORDER_EXPORT_CLASS_NAME_TIP' => '(e.g. <strong>ps_olsi</strong>) :<br />
		default: ps_xmlexport<br />
		<i>Leave blank if you\'re not sure what to fill in!</i>',
	'VM_ORDER_EXPORT_CONFIG' => 'Order Export configuration',
	'VM_ORDER_EXPORT_CONFIG_TIP' => 'Here you can configure your export.
		It has to be valid PHP Code!',
	'VM_REGISTER_BEFORE' => 'Please register to use this facility',
	'VM_RECOMMEND_MESSAGE_PREFACE' => 'The following recommendation from the "%s" website has been sent to you by %s (%s).

_____________________',
	'VM_CFG_BROWSE_STYLE' => 'Select a product listing style',
	'VM_CFG_BROWSE_STYLE_TIP' => 'Change the overall style of the product list with this setting.<br />The tableless layout is perfect for your tableless XHTML/CSS powered site. Try the other ones if your layout is screwed up.',
	'PHPSHOP_CHECKOUT_MSG_2' => 'Please select a Shipping Address!',
	'PHPSHOP_CHECKOUT_MSG_3' => 'Please select a Shipping Method!',
	'PHPSHOP_CHECKOUT_MSG_99' => 'Please review the provided data and confirm the order!',
	'PROMPT_PASSWORD' => 'Lost your Password?',
	'REGISTER_TITLE' => 'Registration',
	'VM_LATEST_PRODUCT' => 'Latest Products',
	'VM_CART_NOSTOCK' => 'Out of Stock',
	'CSVIMPROVED_TITLE' => 'CSV Improved - Import/Export Component',
	'CSVIMPROVED_NEEDINSTALL' => 'In order to use CSV Import/Export you need to install the Component "CSVImproved"',
	'VM_RECOVER_CART' => 'Recover Saved Cart',
	'VM_CART_PRODUCT_NOTEXIST' => 'The selected product does not exist.',
	'VM_COOKIE_MISSING' => 'Cookie Missing',
	'EMAIL_ERR_ONLYONE' => 'You cannot enter more than one email address',
	'VM_ENQUIRY_TEMPLATE_NOT_FOUND' => 'Enquiry template file not found!',
	'VM_PRODUCT_MISSING_SKU' => 'A Product Sku must be entered.',
	'VM_PRODUCT_MISSING_NAME' => 'A product name must be entered.',
	'VM_PRODUCT_MISSING_AVAILDATE' => 'You must provide an availability date.',
	'VM_PRODUCT_MISSING_CATEGORY' => 'A Category must be selected.',
	'VM_PRODUCT_IMAGEURL_MUSTBEGIN' => 'Image URL must begin with http.',
	'VM_PRODUCT_SPECIFY_DELETE' => 'Please specify a Product to delete!',
	'VM_PRODUCT_CLONED' => 'Product was successfully cloned.',
	'VM_PRODUCT_ADDED' => 'Product was successfully added.',
	'VM_PRODUCT_IMGDEL_FAILED' => 'Failed deleting Product Images!',
	'VM_PRODUCT_UPDATED' => 'Product was successfully updated',
	'VM_PRODUCT_ADDING_FAILED' => 'Something went wrong when trying to add the product!',
	'VM_PRODUCT_MOVE_NOTFOUND' => 'No product found to move.',
	'VM_PRODUCT_MUSTSELECT_ONE_CAT' => 'You must select ONE category!',
	'VM_PRODUCT_DELETED' => 'Deleted Product ID: {product_id}',
	'VM_PRODUCT_ID_MISSING' => 'A product ID is missing.',
	'VM_PRODUCT_PRICE_MISSING' => 'A price must be entered.',
	'VM_PRODUCT_PRICE_CURRENCY_MISSING' => 'A currency must be entered.',
	'VM_PRODUCT_PRICE_QEND_LESS' => 'The entered Quantity End is less than the Quantity Start.',
	'VM_PRODUCT_PRICE_ALREADY' => 'This product already has a price for the selected Shopper Group and the specified Quantity Range.',
	'VM_PRODUCT_PRICE_NOTENTERED' => 'You have entered no price.',
	'VM_PRODUCT_PRICE_ADDED' => 'The new product price has been added.',
	'VM_PRODUCT_PRICE_ADDING_FAILED' => 'The price could not be added to this product.',
	'VM_PRODUCT_PRICE_UPDATED' => 'The product price has been updated.',
	'VM_PRODUCT_PRICE_UPDATING_FAILED' => 'The price could not be updated.',
	'VM_PRODUCT_PRICE_DELETED' => 'The product price has been deleted.',
	'VM_ORDER_DELETE_ERR_ID' => 'Unable to delete without the order id.',
	'VM_ORDERSTATUS_CHANGE_ERR_CORE' => 'This Order Status Code cannot be changed, it is one of the core status codes.',
	'VM_ORDERSTATUS_DELETE_ERR_SELECT' => 'Please select an order status type to delete.',
	'VM_ORDERSTATUS_DELETE_ERR_CORE' => 'This Order Status cannot be deleted, it is one of the core status codes.',
	'VM_ORDERSTATUS_DELETE_ERR_STILL' => 'This Order Status cannot be deleted, there are still Orders with this Status.',
	'VM_ORDERSTATUS_ADDED' => 'The Order Status Type has been added.',
	'VM_ORDERSTATUS_ADD_FAILED' => 'Adding the Order Status Type has failed.',
	'VM_ORDERSTATUS_UPDATED' => 'The Order Status Type has been updated.',
	'VM_PAYMENTMETHOD_ERR_NAME' => 'Please enter a payment method name.',
	'VM_PAYMENTMETHOD_ERR_CODE' => 'Please enter a payment method code.',
	'VM_PAYMENTMETHOD_UPDATE_SELECT' => 'Please select a payment method to update.',
	'VM_PAYMENTMETHOD_DELETE_SELECT' => 'Please select a payment method to delete.',
	'VM_PAYMENTMETHOD_CLASS_NOT_EXIST' => 'The selected Payment Class can\'t be instantiated because it doesn\'t exist.',
	'VM_USER_ERR_MISSINGVALUE' => 'Missing value for field "%s".',
	'VM_USER_ERR_GROUP' => 'You must assign the user to a group.',
	'VM_USER_ADD_ERR_NOPERMS' => 'You have no permission to add a user of that usertype: %s.',
	'VM_USER_DELETE_SELECT' => 'Please select a user to delete.',
	'VM_USER_DELETE_ERR_NOPERMS' => 'You have no permission to delete a user of that usertype: %s.',
	'VM_USER_DELETE_ERR_YOURSELF' => 'Very funny, but you cannot delete yourself.',
	'VM_USER_ADD_FAILED' => 'New User couldn\'t be added',
	'VM_USER_ADDED' => 'The user has been added.',
	'VM_USER_UPDATED' => 'The user details have been updated.',
	'VM_USER_ERR_ONLYSUPERADMIN' => 'You cannot change this user\'s group as the user is the only active Super Administrator for your site.',
	'VM_USER_DELETE_ERR_SUPERADMIN' => 'You cannot delete a Super Administrator',
	'VM_USER_DELETE_ERR_ADMIN' => 'You cannot delete another `Administrator` only `Super Administrators` have this power',
	'MUST_NOT_USE' => 'You must not use this function.',
	'VM_USERADDRESS_ERR_LABEL_EXISTS' => 'The given address label already exists.',
	'VM_USERADDRESS_DELETE_SELECT' => 'Please select a user address to delete.',
	'VM_USERADDRESS_ADDED' => 'The Address was added to the user.',
	'VM_USERADDRESS_ADD_FAILED' => 'Something went wrong while adding the new address.',
	'VM_USERADDRESS_UPDATED' => 'The Address has been updated.',
	'VM_USERADDRESS_UPDATED_FAILED' => 'Something went wrong when updating the address.',
	'VM_USERFIELD_ERR_ALREADY' => 'The field name %s is already in use!',
	'VM_USERFIELD_SAVED' => 'The Field has been saved.',
	'VM_USERFIELD_DELETE_SELECT' => 'Please select a Field to delete.',
	'VM_USERFIELD_DELETE_ERR_SYSTEM' => '"%s" cannot be deleted, because it is a system field.',
	'VM_USERFIELD_DELETED' => 'Deleted Field "%s"',
	'PHPSHOP_PRODUCT_DISCOUNT_FORM_MNU' => 'Add Product Discount',
	'VM_CANADAPOST_SEND_LANGUAGE_CODE' => 'EN',
	'VM_CANADAPOST_FORM_HANDLING_DATE' => 'Expected Date of Arrival',
	'VM_CANADAPOST_FORM_HANDLING_LBL' => 'Handling Charge',
	'VM_SHIPPING_METHOD_CANADAPOST_MERCHANT_CPCID' => 'Canada Post Merchant ID',
	'VM_SHIPPING_METHOD_CANADAPOST_MERCHANT_CPCID_EXPLAIN' => 'Your Canada Post Merchant ID',
	'VM_SHIPPING_METHOD_CANADAPOST_CP_SERVER' => 'Canada Post Server IP',
	'VM_SHIPPING_METHOD_CANADAPOST_CP_SERVER_EXPLAIN' => 'This is the Canada Post Server IP Address - default is 206.191.4.228',
	'VM_SHIPPING_METHOD_CANADAPOST_CP_PORT' => 'Canada Post Server Port',
	'VM_SHIPPING_METHOD_CANADAPOST_CP_PORT_EXPLAIN' => 'This is the Canada Post Server Port<br />
The server port must be 30000<br />
If you cannot use this port, you will not be able to use this module<br />
check with your hosting company to see if you can access this port first',
	'VM_SHIPPING_METHOD_CANADAPOST_CP_FEDERAL_TAX' => 'Canada Post Federal Tax Amount',
	'VM_SHIPPING_METHOD_CANADAPOST_CP_FEDERAL_TAX_EXPLAIN' => 'Federal Tax Amount goes here',
	'VM_SHIPPING_METHOD_CANADAPOST_CP_PROVINCIAL_TAX' => 'Canada Post Provincal Tax Amount',
	'VM_SHIPPING_METHOD_CANADAPOST_CP_PROVINCIAL_TAX_EXPLAIN' => 'Provincal Tax Amount goes here',
	'VM_SHIPPING_METHOD_CANADAPOST_ARRIVAL_DATE_EXPLAIN' => 'Arrival Date Description',
	'VM_SHIPPING_METHOD_CANADAPOST_ARRIVAL_DATE_EXPLAIN_I' => 'Description for Arrival Dates',
	'VM_SHIPPING_METHOD_CANADAPOST_HANDLING_CHARGE_EXPLAIN' => 'Handling Charge Description',
	'VM_SHIPPING_METHOD_CANADAPOST_HANDLING_CHARGE_EXPLAIN_I' => 'Description for Handling Charges',
	'PHPSHOP_PRODUCT_FORM_TITLE' => 'Title',
	'VM_PRODUCT_ATTRIBUTE_ERR_ATTRNAME' => 'An attribute name must be entered.',
	'VM_PRODUCT_ATTRIBUTE_ERR_ATTRUNIQ' => 'A unique attribute name must be entered.',
	'VM_PRODUCT_ATTRIBUTE_ERR_DELITEMS' => 'Cannot delete last attribute while product has Items. Delete all Items first.',
	'VM_PRODUCT_ATTRIBUTE_ERR_SAVING' => 'Saving the attribute failed.',
	'VM_PRODUCT_ATTRIBUTE_SAVED' => 'The Attribute has been saved.',
	'VM_PRODUCT_ATTRIBUTE_ERR_UPDATING' => 'Updating the attribute failed.',
	'VM_PRODUCT_ATTRIBUTE_UPDATED' => 'The Attribute has been updated.',
	'VM_CHECK_UPDATES_MNU' => 'Check for Updates',
	'VM_PRODUCT_TYPE_ERR_NAME' => 'You must enter a name for the Product Type.',
	'VM_PRODUCT_TYPE_DELETE_SELECT' => 'Please select a Product Type to delete.',
	'VM_PRODUCT_TYPE_ADD_FAILED' => 'Failed to create a new table for this Product Type!!',
	'VM_PRODUCT_TYPE_ADDED' => 'The product type has been added.',
	'VM_PRODUCT_TYPE_PARAMETER_ERR_NAME' => 'You must enter a name for the Parameter.',
	'VM_PRODUCT_TYPE_PARAMETER_ERR_LABEL' => 'You must enter a label for the Parameter.',
	'VM_PRODUCT_TYPE_PARAMETER_ERR_VALUES' => 'If You checked Multiple select you must enter a Possible Values.',
	'VM_PRODUCT_TYPE_PARAMETER_ERR_EXIST' => 'The Parameter with this name in this Product Type already exist.',
	'VM_PRODUCT_TYPE_PARAMETER_DELETE_SELECT' => 'Please select a Parameter to delete.',
	'VM_PRODUCT_TYPE_PARAMETER_ADDING_FAILED' => 'Adding the new parameter field to the table failed.',
	'VM_PRODUCT_TYPE_PARAMETER_ADDED' => 'The Parameter has been added.',
	'VM_UPDATE_PACKAGE_EXISTS' => 'A file with the same name as the package to download already exists. Using the file:',
	'VM_UPDATE_ERR_STORE_FAILED' => 'Failed to store the Update Package. Please make the Cache Directory writable.',
	'VM_UPDATE_ERR_RETRIEVE_FAILED' => 'Failed to retrieve the location of the Patch Package virtuemart.net Server. Probably there\'s no Patch Package available for your Version. Try again later if you think it\'s a network problem.',
	'VM_UPDATE_ERR_EXTRACT_FAILED' => 'Failed to extract the Update Package Contents to',
	'VM_UPDATE_ERR_PARSE_FAILED' => 'Failed to parse the XML Update File.',
	'VM_UPDATE_ERR_FILE_MISSING' => 'The file %s is missing in the Update Package.',
	'VM_UPDATE_ERR_DOWNLOAD' => 'The Update Package could not be downloaded.',
	'VM_UPDATE_ERR_FILE_UNWRITABLE' => 'The File %s must be writable.',
	'VM_UPDATE_ERR_DIR_UNWRITABLE' => 'The Directory %s must be writable.',
	'VM_UPDATE_ERR_OVERWRITE_FAILED' => 'Failed to overwrite the file "%s"',
	'VM_UPDATE_FILE_OVERWROTE' => 'Successfully overwrote the file "%s"',
	'VM_UPDATE_ERR_QUERY_FAILED' => 'The following query failed: "%s". This may not be fatal, but please copy + save this error message for better problem handling.',
	'VM_UPDATE_QUERY_EXECUTED' => 'Successfully executed the Query "%s"',
	'VM_UPDATE_SUCCESS' => 'Your previous VirtueMart Version (%s) has successfully been updated to Version %s.',
	'VM_UPDATE_ERR_NOTMATCHING' => 'This Patch Package is not matching to your VirtueMart Version.',
	'VM_UPDATE_STEP_1' => 'Check for Updates',
	'VM_UPDATE_STEP_2' => 'Preview/Apply Update',
	'VM_UPDATE_STEP_3' => 'View Results',
	'VM_PRODUCT_TYPE_ERR_SELECT' => 'Please select a Product Type.',
	'VM_PRODUCT_TYPE_ERR_SELECT_PRODUCT' => 'Please select a Product.',
	'VM_PRODUCT_TYPE_ERR_ALREADY' => 'This Product is already assigned to this Product Type.',
	'VM_PRODUCT_PRODUCT_TYPE_DELETE_SELECT_PT' => 'Please select a Product Type to delete a Product from this Product Type.',
	'VM_PRODUCT_PRODUCT_TYPE_DELETE_SELECT_PR' => 'Please select a Product to delete from Product Type.',
	'VM_PRODUCT_PRODUCT_TYPE_ASSIGNED' => 'The Product was assigned to this product type.',
	'VM_WAITING_LIST_ERR_ALREADY' => 'You are already being notified of this product.',
	'VM_WAITING_LIST_ERR_EMAIL_ENTER' => 'You must enter an e-mail address to be on the waiting list.',
	'VM_WAITING_LIST_ERR_EMAIL_NOTVALID' => 'Please provide a valid email address.',
	'VM_WAITING_LIST_ERR_PRODUCT' => 'You must enter a product to be on the waiting list.',
	'VM_WAITING_LIST_DELETE_SELECT' => 'Please select a waiting list id to delete.',
	'VM_WAITING_LIST_DELETE_ERR_PRODUCT' => 'You must enter a product id.',
	'VM_USER_GROUP_ERR_PROTECTED' => 'The group %s cannot be removed or modified!',
	'VM_USER_GROUP_ERR_STILLUSERS' => 'The group %s still has users assigned to it and cannot be removed!',
	'VM_USER_GROUP_ADDED' => 'The new user group has been added.',
	'VM_USER_GROUP_UPDATED' => 'The user group has been updated.',
	'VM_ABSTRACTOBJECT_VALIDATE_ERR_ID' => 'Please specify an ID to validate',
	'VM_ABSTRACTOBJECT_VALIDATE_ERR_FIELD' => 'A value for the field "%s" is missing.',
	'VM_ABSTRACTOBJECT_VALIDATE_NOTUNIQUE' => 'A record with the same value "%s" for "%s" already exists. Please choose another value.',
	'VM_ABSTRACTOBJECT_REORDER_ERR_TYPE' => 'Could not determine the item type that is to be reordered.',
	'VM_ABSTRACTOBJECT_PUBLISH_ERR_TYPE' => 'Could not determine the item type that is to be (un)published.',
	'VM_ABSTRACTOBJECT_TASK_OK' => '{field_name}(s) {set} was/were {task}.',
	'CMN_YEARS' => 'Years',
	'VM_SORT_ALPHA_CONFIRM' => 'Are you sure to sort this list alphabetically? This cannot be undone.',
	'VM_SORT_SAVE_ORDER' => 'Save Order',
	'VM_SORT_ALPHA' => 'Sort Alphabetically',
	'VM_PRODUCT_DISCOUNT_ERR_AMOUNT' => 'You must enter an amount for the discount.',
	'VM_PRODUCT_DISCOUNT_ERR_TYPE' => 'You must select a discount type.',
	'VM_PRODUCT_DISCOUNT_START_END_DATE' => 'The start date must occur before the end date.',
	'VM_PRODUCT_DISCOUNT_ERR_UPDATE' => 'You must specify a discount to update.',
	'VM_PRODUCT_DISCOUNT_ERR_DELETE' => 'Please select a discount to delete.',
	'VM_PRODUCT_DISCOUNT_ADDED' => 'The product discount has been added.',
	'VM_PRODUCT_DISCOUNT_UPDATED' => 'The product discount has been updated.',
	'VM_PRODUCT_DISCOUNT_OVERRIDE' => 'Override',
	'PHPSHOP_ITEM' => 'Item',
	'VM_PRODUCT_CATEGORY_ERR_NAME' => 'You must enter a name for the category.',
	'VM_PRODUCT_CATEGORY_ERR_PARENT' => 'Category parent cannot be same category.',
	'VM_PRODUCT_CATEGORY_ERR_DELETE_SELECT' => 'Please select a category to delete.',
	'VM_PRODUCT_CATEGORY_ERR_DELETE_CHILDREN' => 'This category has children - please delete those children first.',
	'VM_PRODUCT_CATEGORY_ERR_DELETE_IMAGES' => 'Failed deleting Category Images!',
	'VM_PRODUCT_CATEGORY_ADDED' => 'Successfully added new category',
	'VM_PRODUCT_CATEGORY_UPDATED' => 'Successfully updated category',
	'VM_PRODUCT_CATEGORY_DELETED' => 'Successfully deleted category ID',
	'VM_DELETE_RECORD' => 'Delete this record',
	'VM_DEFAULT_TOP_LEVEL' => 'Default-Top Level',
	'VM_SORT_ERR_NUMBERS_ONLY' => 'Error: Please use numbers only for ordering the list!',
	'VM_PRODUCT_FILES_ERR_PROVIDE' => 'You must either Upload a File or provide a File URL.',
	'VM_PRODUCT_FILES_ERR_ID' => 'A product ID must be specified.',
	'VM_PRODUCT_FILES_ERR_DELETE' => 'Please select a file to delete.',
	'VM_PRODUCT_FILES_IMAGES_SET' => 'The Product Images have been set.',
	'VM_PRODUCT_FILES_ADDED' => 'The new file has been added.',
	'VM_PRODUCT_FILES_ERR_TOOBIG' => 'The file you are trying to upload is too big.',
	'VM_PRODUCT_FILES_ERR_PARTIALLY' => 'The file you are trying upload was only partially uploaded.',
	'VM_TAX_ERR_STATE_LISTED' => 'This state is already listed.',
	'VM_TAX_ERR_COUNTRY' => 'You must enter a country for this tax rate.',
	'VM_TAX_ERR_COUNTRY_NOTEXIST' => 'The Country you have selected does not exist.',
	'VM_TAX_ERR_TAXRATE' => 'You must enter a tax rate.',
	'VM_TAX_ERR_UPDATE_SELECT' => 'You must select a tax rate to update.',
	'VM_TAX_ERR_DELETE_SELECT' => 'Please select a tax rate to delete.',
	'VM_TAX_ADDED' => 'The Tax Rate has been added.',
	'VM_TAX_ADD_FAILED' => 'Failed to add the Tax Rate.',
	'VM_TAX_UPDATED' => 'The Tax Rate has been updated.',
	'VM_TAX_UPDATE_FAILED' => 'Failed to update the Tax Rate.',
	'VM_ENTER_VALUE_FIELD' => 'Please enter a value into the Field',
	'VM_COUPON_ADDED' => 'A new coupon has been added.',
	'VM_COUPON_UPDATED' => 'The coupon has been updated.',
	'VM_COUPON_GREATER_TOTAL_SETTO' => 'The Value of the Coupon is greater than the current Order Total, so the Coupon Value was temporarily set to {value}',
	'VM_CREDITCARD_ERR_NAME' => 'You must enter a name for the Credit Card Type.',
	'VM_CREDITCARD_ERR_CODE' => 'You must enter a code for the Credit Card Type.',
	'VM_CREDITCARD_EXISTS' => 'The given Credit Card Name/Code already exists.',
	'VM_CREDITCARD_ERR_DELETE_SELECT' => 'Please select a Credit Card Type to delete.',
	'VM_CREDITCARD_ADDED' => 'The Credit Card Type has been added.',
	'VM_CREDITCARD_UPDATED' => 'The Credit Card Type has been updated.',
	'VM_CURRENCY_ERR_NAME' => 'You must enter a name for the currency.',
	'VM_CURRENCY_ERR_CODE' => 'You must enter a code for the currency.',
	'VM_CURRENCY_ERR_EXISTS' => 'The given currency name already exists.',
	'VM_CURRENCY_ERR_DELETE_SELECT' => 'Please select a currency to delete.',
	'VM_CURRENCY_ADDED' => 'The Currency has been added.',
	'VM_CURRENCY_UPDATED' => 'The Currency has been updated.',
	'VM_EXPORT_ERR_MODULE_NAME' => 'You must enter a name for the order export module.',
	'VM_EXPORT_ERR_CLASS_NOT_EXIST' => 'Export Class does not exist.',
	'VM_EXPORT_ERR_DELETE_SELECT' => 'Please select an export module to delete.',
	'VM_EXPORT_ERR_UPDATE_SELECT' => 'You must select an export module to update.',
	'VM_FUNCTION_ERR_DELETE_SELECT' => 'Please select a function to delete.',
	'VM_FUNCTION_ERR_DELETE_NOTALLOWED_MOD' => 'You are not allowed to delete this function (Module Restrictions: {module_perms}, Your Perms: {perms}).',
	'VM_FUNCTION_ERR_DELETE_NOTALLOWED_FUNC' => 'You are not allowed to delete this function (Function Restrictions: {function_perms}, Your Perms: {perms}).',
	'VM_MANUF_CAT_ERR_NAME' => 'You must enter a name for the manufacturer category.',
	'VM_MANUF_CAT_ERR_EXISTS' => 'The given manufacturer category name already exists.',
	'VM_MANUF_CAT_ERR_DELETE_SELECT' => 'Please select a manufacturer category to delete.',
	'VM_MANUF_CAT_ADDED' => 'The Manufacturer Category has been added.',
	'VM_MANUF_CAT_UPDATED' => 'The Manufacturer Category has been updated.',
	'VM_MODULE_ERR_NAME' => 'You must enter a name for the module.',
	'VM_MODULE_ERR_EXISTS' => 'The given module name already exists.',
	'VM_MODULE_ERR_PERMS' => 'You must enter permissions for the module.',
	'VM_MODULE_ERR_DELETE_SELECT' => 'Please select a module to delete.',
	'VM_MODULE_ERR_DELETE_CORE' => 'The module {name} is a core module. It cannot be deleted.',
	'VM_MODULE_ADDED' => 'The Module has been added.',
	'VM_MODULE_UPDATED' => 'The Module has been updated.',
	'VM_MANUF_ERR_NAME' => 'You must enter a name for the manufacturer.',
	'VM_MANUF_ERR_EXISTS' => 'The given manufacturer name already exists.',
	'VM_MANUF_ERR_DELETE_SELECT' => 'Please select a manufacturer to delete.',
	'VM_MANUF_ERR_DELETE_STILLPRODUCTS' => 'This Manufacturer still has products assigned to it.',
	'VM_MANUF_ADDED' => 'The Manufacturer has been added.',
	'VM_MANUF_UPDATED' => 'The Manufacturer has been updated.',
	'PHPSHOP_CUSTOMER_CVV2_TOOLTIP_TITLE' => 'Credit Card Security Code',
	'VM_CREDIT_CARD_TYPE' => 'Credit Card Type',
	'PHPSHOP_ADMIN_CFG_EPAY_AUTHEMAIL_1' => 'Send authemail to customer',
	'PHPSHOP_ADMIN_CFG_EPAY_AUTHEMAIL_0' => 'Don\'t send authemail to customer',
	'PHPSHOP_ADMIN_CFG_EPAY_EXTRAINFO_RESET_EXPLAIN' => 'IF THE PAYMENT EXTRA INFO FIELD IS BLANK YOU MUST CLICK THIS BUTTON BELOW!',
	'PHPSHOP_ADMIN_CFG_EPAY_EXTRAINFO_RESET' => 'Reset Payment Extra Info',
	'PHPSHOP_ADMIN_CFG_EPAY_ERR_CONFIGFILE' => 'Could not write to configuration file',
	'VM_CHECKOUT_ERR_CCTYPE' => 'Credit Card Type not found.',
	'VM_ENQUIRY_MAIL_CUSTOMER_QUESTION' => 'Customer Question',
	'VM_ENQUIRY_MAIL_HAS_REQUESTED' => 'has requested more information on',
	'VM_ENQUIRY_MAIL_PRODUCT_SKU' => 'Product-SKU',
	'VM_ENQUIRY_MAIL_QUESTION' => 'Question',
	'OFFLINE_MODE' => 'OFFLINE MODE',
	'VM_STORE_UPDATED' => 'Your Store has been updated.',
	'VM_VENDOR_UPDATED' => 'The Vendor has been updated.',
	'PHPSHOP_DOWNLOADS_LINK' => 'Click on this link to download your file',
	'PHPSHOP_DOWNLOAD_REMAINING' => '{count} download remaining',
	'PHPSHOP_DOWNLOADS_REMAINING' => '{count} downloads remaining',
	'PHPSHOP_DOWNLOAD_VALID_UNTIL' => ' until {date}'
); $VM_LANG->initModule( 'common', $langvars );
?>