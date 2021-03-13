<table>
  <tbody>
    <?php foreach ($terms as $item) { ?>
      <tr>
        <td>
          <?php $raw = sfOutputEscaper::unescape($item) ?>
          <?php if ($raw instanceof QubitTerm) { ?>
            <?php echo link_to(isset($sf_request->addWords) ? '<b>'.render_title($item).'</b> '.$sf_request->addWords : render_title($item), [$item, 'module' => 'term']) ?>
          <?php } else { ?>
            <?php echo link_to(__(isset($sf_request->addWords) ? '<b>%1% (use: %2%)</b> '.$sf_request->addWords : '%1% (use: %2%)', ['%1%' => $item[1], '%2%' => render_title($item[0])]), url_for([$item[0], 'module' => 'term'])) ?>
          <?php } ?>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
