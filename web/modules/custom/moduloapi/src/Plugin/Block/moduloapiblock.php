<?php
/**
 * @file
 * Contains \Drupal\moduloapi\Plugin\Block\moduloapiblock.
 */
 
namespace Drupal\moduloapi\Plugin\Block;
use Drupal\Core\Block\BlockBase;
 
/**
 * Provides an 'Api' Block
 *
 * @Block(
 *   id = "moduloapi",
 *   admin_label = @Translation("Hello block"),
 * )
 */
class moduloapiblock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $output['#theme'] = 'modapitwit';
    return $output;
  }
}