<?php

/**
 * @file
 * Contains \Drupal\title_formatter\Plugin\field\formatter\TitleFormatter.
 */

namespace Drupal\title_formatter\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 * Plugin implementation of the 'title_formatter' formatter.
 *
 * @FieldFormatter(
 *   id = "title_formatter",
 *   label = @Translation("Title Formatter"),
 *   field_types = {
 *     "text",
 *     "text_plain",
 *     "string",
 *   }
 * )
 */

class TitleFormatter extends FormatterBase { 
  public function viewElements(FieldItemListInterface $items) {
    $text = items->get(0);
    $element = [
      '#content' => "<h2>" . $text->getString() . "</h3>";
    ]
    return $element;
  }
}