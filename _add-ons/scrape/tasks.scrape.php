<?php
/**
 * Tasks_scrape
 * Scrapes the content of a URL, parses YAML front matter if found,
 * and returns an array of data
 *
 * @author  Jack McDade
 */

class Tasks_scrape extends Tasks {

	public function scrape($url)
	{
		// Make a hash based on the URL requests
		$url_hash = Helper::makeHash($url);

		// Configurable cache length
		$cache_length = trim($this->fetchConfig('cache_length', "5 minutes"));

		// Check if a cache exists or is out of date
		if ($this->cache->exists($url_hash) && $this->cache->getAge($url_hash) <= $cache_length) {
			$content = $this->cache->get($url_hash);
		} else {
			$content = file_get_contents($url);
			$this->cache->put($url_hash, $content);
		}

		// YAMLize that sucker
		if (Pattern::startsWith($content, "---")) {
			$content = Statamic::yamlize_content($content);
		} else {
			$content = array('content' => $content);
		}

		return $content;
	}

}