<?php
/**
 * Plugin_scrape
 * Scrapes the content of a URL, parses YAML front matter if found,
 * and returns an array of data
 *
 * @author  Jack McDade
 */

class Plugin_scrape extends Plugin {

	public function index()
	{
		return $this->tasks->scrape($this->fetchParam('url'));
	}

}