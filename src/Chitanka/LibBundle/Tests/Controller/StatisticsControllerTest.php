<?php
namespace Chitanka\LibBundle\Tests\Controller;

class StatisticsControllerTest extends WebTestCase
{
	public function testIndex()
	{
		$page = $this->request('statistics');
		$this->assertHtmlPageIs($page, 'statistics');
		$this->assertCountGe(3, $page->filter('table.content'));
	}
}