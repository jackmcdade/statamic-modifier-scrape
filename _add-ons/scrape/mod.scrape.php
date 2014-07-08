<?php
/**
 * Modifier_scrape
 * Scrapes the content of a URL, parses YAML front matter if found,
 * and returns an array of data
 *
 * @author  Jack McDade
 */

class Modifier_scrape extends Modifier {

	public function index($value, $parameters=array())
	{
		return $this->tasks->scrape($value);
	}
}