<?php
/**
 * @file field--fences-aside-downloadverify.tpl.php
 * Wrap each field value in the <aside> element with a classname
 * of 'download-link-container'.
 *
 * @see https://drupal.org/project/download_verify
 * @see http://developers.whatwg.org/sections.html#the-aside-element
 */
?>
<?php if ($element['#label_display'] == 'inline'): ?>
  <span class="field-label"<?php print $title_attributes; ?>>
    <?php print $label; ?>:
  </span>
<?php elseif ($element['#label_display'] == 'above'): ?>
  <h3 class="field-label"<?php print $title_attributes; ?>>
    <?php print $label; ?>
  </h3>
<?php endif; ?>

<?php foreach ($items as $delta => $item): ?>
  <aside class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <div class="download-link-container">
      <?php print render($item); ?>
    </div>
  </aside>
<?php endforeach; ?>
