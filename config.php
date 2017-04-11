<?php

return [

  '#theme-name' => 'Starter Theme',
  '#theme-key' => 'starter-theme',
  '#theme-version' => '1.0',
  '#ideaspace-version' => '>=1.0.0',
  '#theme-description' => 'Getting Started with VR Theme development.',
  '#theme-author-name' => 'IdeaSpaceVR',
  '#theme-author-email' => 'info@ideaspacevr.org',
  '#theme-homepage' => 'https://www.ideaspacevr.org/themes',
  '#theme-keywords' => 'starter theme, simple',
  '#theme-compatibility' => 'Google Cardboard, Daydream, Oculus, Samsung Gear VR, no headset',
  '#theme-view' => 'scene',

  '#content-types' => [

    'messages' => [
      '#label' => 'Messages',
      '#description' => 'Write some messages and view them in VR.',
      '#max-values' => 'infinite',
      '#fields' => [

        'message-text' => [
          '#label' => 'Message',
          '#description' => 'Enter some text.',
          '#help' => '',
          '#type' => 'textfield',
          '#maxlength' => 200,
          '#contentformat' => 'text', 
          '#required' => true,
        ],

      ], /* fields */

    ], /* blog-posts */

  ], /* content types */

];


