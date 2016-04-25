<?php

require_once('../IyzipayBootstrap.php');
require_once('Sample.php');

IyzipayBootstrap::init();

$sample = new ConnectPostAuthSample();
$sample->should_post_auth();

class ConnectPostAuthSample
{
    public function should_post_auth()
    {
        # create request class
        $request = new \Iyzipay\Request\CreatePaymentPostAuthRequest();
        $request->setLocale(\Iyzipay\Model\Locale::TR);
        $request->setConversationId("123456789");
        $request->setPaymentId("1");
        $request->setPaidPrice("0.6");
        $request->setIp("85.34.78.112");

        # make request
        $connectPaymentPostAuth = \Iyzipay\Model\ConnectPaymentPostAuth::create($request, Sample::options());

        # print result
        print_r($connectPaymentPostAuth);

    }
}
