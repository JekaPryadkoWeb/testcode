<!DOCTYPE html>
<html class="no-js no-touch" lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="imagetoolbar" content="no">
	<meta name="msthemecompatible" content="no">
	<meta name="cleartype" content="on">
	<meta name="HandheldFriendly" content="True">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<meta name="description" content="">
	<title><?php wp_title(); ?></title>
	<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,400;0,500;0,700;0,800;1,400&amp;display=swap" rel="stylesheet">
	<?php wp_head() ?>

</head>

<body>
	<?php if (is_front_page()) {
		get_template_part('template/parts/shape');
	} ?>
	<?php get_template_part('template/parts/header'); ?>

	<main>
