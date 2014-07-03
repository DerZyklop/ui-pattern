<?php snippet('header') ?>

<?php if(param('format') == 'iframe'): ?>
  <?php foreach($pages->find('atoms', 'molecules', 'organisms')->children()->children() as $pattern): ?>
  <?php snippet('listitem', array('pattern' => $pattern)) ?>
  <?php endforeach ?>
<?php else: ?>
  <iframe class="pl-iframe" src="<?php echo $page->url() ?>/format:iframe"></iframe>
<?php endif ?>

<?php snippet('footer') ?>