<?php

/**
 * Description of DefaultData
 *
 * @author U s E r ¨
 */
class DefaultData {

    public function getDetailsByCurrency() {
        $details = array(
            "LKR" => array(
                "currency" => 'LKR',
                "merchant_ID" => 'TESTNATURETRALKR',
                "API_username" => 'merchant.TESTNATURETRALKR',
                "API_password" => '09c456deceaf384a641b89600b74b07a'
            ),
            "USD" => array(
                "currency" => 'USD',
                "merchant_ID" => 'TESTNATURETRAUSD',
                "API_username" => 'merchant.TESTNATURETRAUSD',
                "API_password" => '427a7da7bca69f7214d7e615ef2814a4'
            )
        );


        return array($details);
    }

}
