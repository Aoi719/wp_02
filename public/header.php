<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Travel Blog</title>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="description" content="" />
  <meta name="format-detection" content="telephone=no,email=no,address=no" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="" />
  <meta property="og:description" content="" />
  <meta name="twitter:card" content="summary_large_image" />
  <!-- アイコン関係 -->
  <link rel="icon" type="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/common/apple-touch-icon.png" />
  <!-- リソース -->
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/style.css" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>