<?php


class DummyTestCest
{
    public function _before(ApiTester $I)
    {
    }

    public function _after(ApiTester $I)
    {
    }

    // tests
    public function tryToTest(ApiTester $I)
    {
        $I->wantTo('Make a dummy test');
        $I->sendGET('/');
        $I->seeResponseCodeIs(200);

    }
}
