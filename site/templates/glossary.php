<?php layout() ?>

<article>
	<h1 class="h1 mb-12"><?= $page->title() ?></h1>
	<ul class="auto-fill auto-rows-fr" style="--gap: var(--spacing-12)">
		<?php foreach ($page->children()->sortBy('title', 'asc') as $term): ?>
		<li>
			<article id="<?= $term->slug() ?>">
				<?php if ($term->link()->isNotEmpty()): ?>
				<a href="<?= $term->link()->toUrl() ?>">
				<?php endif ?>
					<h2 class="h6 mb-1"><?= $term->title() ?></h2>
					<div class="prose text-base border-top pt-3">
						<?= $term->entry()->stripGlossary()->kt() ?>
					</div>
				<?php if ($term->link()->isNotEmpty()): ?>
				</a>
				<?php endif ?>
			</article>
		</li>
		<?php endforeach ?>
	</ul>
</article>
