<?php
/**
 * Reepay payment extension for Magento
 *
 * @author      Radarsofthouse Team <info@radarsofthouse.dk>
 * @category    Radarsofthouse
 * @package     Radarsofthouse_Reepay
 * @copyright   Radarsofthouse (https://www.radarsofthouse.dk/)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *
 */
class Radarsofthouse_Reepay_Model_System_Config_Source_Dropdown_Klarnaallowwedpayment
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'klarna_pay_later', 'label' => __('Klarna Pay Later')),
            array('value' => 'klarna_pay_now', 'label' => __('Klarna Pay Now'))
        );
    }
}