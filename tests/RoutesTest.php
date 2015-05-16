<?php

use Laracasts\Integrated\Extensions\Goutte as IntegrationTest;

class RoutesTest extends Testcase {

	protected $baseUrl = 'http://imgurbox.app:8000';

	/** @test */
	public function it_loads_landingpages()
	{
		$this->visit('/')->andSee('Sync your Imgur favorites to');
	}

	/** @test */
	public function it_loads_login_page()
	{
		$this->visit('auth/login');
	}

	/** @test */
	public function it_loads_register_page()
	{
		$this->visit('auth/register');
	}
}