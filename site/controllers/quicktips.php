<?php

use Kirby\Cms\Page;
use Kirby\Toolkit\Str;

return function (Page $page, $tag) {

	$quicktips = $page->children()->listed()->sortBy('title');
	$tags      = $page->children()->listed()->pluck('tags', ',', true);
	sort($tags);

	if ($tag) {
		$quicktips = $quicktips->filter(function($tip) use($tag) {
			$tags = array_map(
				fn ($item) => Str::slug($item),
				$tip->tags()->split(',')
			);
			return in_array($tag, $tags, true);
		});
	}


	return [
		'quicktips' => $quicktips,
		'tags'      => $tags,
	];
};
