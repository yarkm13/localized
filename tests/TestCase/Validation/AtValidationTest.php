<?php
/**
 * Austrian Localized Validation class test case
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org
 * @since         Localized Plugin v 0.1
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace Localized\Test\TestCase\Validation;

use Cake\TestSuite\TestCase;
use Localized\Validation\AtValidation;

/**
 * AtValidationTest
 *
 */
class AtValidationTest extends TestCase
{
    /**
     * test the postal method of AtValidation
     *
     * @return void
     */
    public function testPostal()
    {
        $this->assertTrue(AtValidation::postal('5110'));
        $this->assertFalse(AtValidation::postal('05110'));
    }

    /**
     * test not implemented method
     *
     * @expectedException NotImplementedException
     */
    // public function testPhone()
    // {
    //     $this->markTestIncomplete('Not implemented yet.');
    //     // AtValidation::phone('05110');
    // }
}
