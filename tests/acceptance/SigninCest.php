<?php

namespace Tests;

class SigninCest
{
    /**
     * @param AcceptanceTester $I
     */
    public function _before(AcceptanceTester $I): void
    {
    }

    /**
     * @param AcceptanceTester $I
     */
    public function tryToTest(AcceptanceTester $I): void
    {
        $I->amOnPage('/');
        $I->see('Hello Pop');
    }
}
