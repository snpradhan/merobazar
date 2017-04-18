<?php

/**
 * @file
 * Template to display a view as a table.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $header: An array of header labels keyed by field id.
 * - $caption: The caption for this table. May be empty.
 * - $header_classes: An array of header classes keyed by field id.
 * - $fields: An array of CSS IDs to use for each field id.
 * - $classes: A class or classes to apply to the table, based on settings.
 * - $row_classes: An array of classes to apply to each row, indexed by row
 *   number. This matches the index in $rows.
 * - $rows: An array of row items. Each row is an array of content.
 *   $rows are keyed by row number, fields within rows are keyed by field ID.
 * - $field_classes: An array of classes to apply to each field, indexed by
 *   field id, then row number. This matches the index in $rows.
 * @ingroup views_templates
 */
?>
<div>
  <?php if (!empty($title)) : ?>
    <h2><?php print $title; ?></h2>
  <?php endif; ?>
  <div class="row">
    <?php foreach ($rows as $row_count => $row): ?>
      <div class="col-md-3 tile">
        <div><?php print $row['field_pictures']; ?></div>
        <div>
          <span><h4><?php print $row['title']; ?></h4></span>
          <span><?php print " - ".$row['field_amount']." ".$row['field_pay_frequency']; ?></span>
        </div>
        <div><?php print $row['field_area_tole'].", ".$row['field_city']; ?></div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
