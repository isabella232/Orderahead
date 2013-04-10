<?php
/**
 * PayPal Checkout
 *
 * @package      :  PayPal_Checkout
 * @version      :  0.9.0
 * @since        :  Magento 1.7
 * @author       :  Paypal - http://www.paypal.com
 * @copyright    :  Copyright (C) 2013 Powered by Paypal
 * @license      :  http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @Creation Date:  19/03/2013
 * 
 */
class Paypal_Checkout_Block_Json_Success extends Mage_Checkout_Block_Onepage_Success
{
    public function _toHtml() {
        $order = Mage::getModel('sales/order')->loadByIncrementId($this->getOrderId());
        $array = Mage::helper('paypal_sales')->getOrderDetails($order);
        return Mage::helper('core')->jsonEncode($array);
    }
}
