<?php
namespace Drupal\new_block_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;
/**
 * Provides a 'Drupalup Block' Block.
 *
 * @Block(
 *   id = "new_block_module",
 *   admin_label = @Translation("new block module"),
 *   category = @Translation("Building a simple block module for drupal 9"),
 * )
 */

class NewBlockModule extends BlockBase {

    /**
   * {@inheritdoc}
   */

    public function build(){
        return  [
            '#theme' => 'my_custom_block',
            '#title' => $this->getRandQuote(),
            '#cache' => [
                'max-age' => 0,
            ],
            
        ];
    }

    private function getRandQuote(){
       $quotes = [
        'You are the shuckiest shuck faced shuck in the world!',
        'I never know where I am going until I get there',
        'I am so random, I am always growing, learning',
        'But one thing you can be sure of about me',
        'Is I will always do exactly what I want to do',

       ];
       return $quotes[array_rand($quotes)]; 
    }

}