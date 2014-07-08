# Scrape modifier for Statamic

Scrape will take a URL stored in a variable and scrape and cache the text/html content from it, returning aa variable pair (and any YAML front-matter it might find) for your enjoyment.

## Installation

1. Download the zip file (or clone via git)
2. Drop the `_add-ons/scrape` folder in your own `_add-ons` directory.
3. Use it and stuff.

## Usage

Take the following page variable:

```
---
url: https://raw.githubusercontent.com/jackmcdade/statamic-modifier-scrape/master/README.md
---
```

You can scrape the contents of this raw url like so:

```
{{ url|scrape }}
  {{ content }}
{{ /url|scrape }}
```

If there are any YAML variables, those will be made available as well.