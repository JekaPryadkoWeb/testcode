<?php
$footer_info = get_theme_option('footer-info', pll_current_language('slug'));
$work_mode = get_theme_option('work_mode', pll_current_language('slug'));
$footer_title = get_theme_option('footer-title', pll_current_language('slug'));
?>

<footer class="footer">
	<div class="footer__inner container">
		<div class="footer__col">
			<a class="footer__logo" href="index.html">
				<img src="<?= get_template_directory_uri() ?>/assets/img/logo-black.svg" width="206" height="50" alt="Onzo design" loading="lazy">
			</a>
			<p class="footer__text">
				<?= $footer_info['adress'] ?>
			</p>
			<div class="footer__text">
				<p class="footer__contact"><?= $footer_info['email_title'] ?>&nbsp;
					<a href="mailto:<?= $footer_info['email_value'] ?>">
						<?= $footer_info['email_value'] ?>
					</a>
				</p>
				<p class="footer__contact"><?= $footer_info['phone_title'] ?>&nbsp;
					<a href="tel:<?= $footer_info['phone_value'] ?>">
						<?= $footer_info['phone_value'] ?>
					</a>
				</p>
			</div>
		</div>
		<div class="footer__col footer__col--nav">
			<h3 class="footer__subtitle"><?= $footer_title['first_menu'] ?></h3>
			<?php
			wp_nav_menu(array(
				'container' => false,
				'items_wrap' => '<ul class="footer__nav">%3$s</ul>',
				'theme_location' => 'footer_menu_first'
			));
			?>
		</div>
		<div class="footer__col footer__col--nav">
			<h3 class="footer__subtitle"><?= $footer_title['second_menu'] ?></h3>
			<?php
			wp_nav_menu(array(
				'container' => false,
				'items_wrap' => '<ul class="footer__nav">%3$s</ul>',
				'theme_location' => 'footer_menu_second'
			));
			?>
		</div>
		<div class="footer__col">
			<h3 class="footer__subtitle">
				<?= $work_mode['title'] ?>
			</h3>
			<ul class="footer__schedule schedule">

				<?php
				$i = 0;
				$today_class =  new DayFormatter;
				$today_day =  $today_class->format_day();

				foreach ($work_mode['days'] as $day) {

					$open =  $today_class->work_time($day['work_start'], $day['work_end']);

				?>

					<li class="schedule__item
					<?php if ($today_day === $i) {
						echo 'schedule__item--today';
					} ?>">
						<span class="schedule__day">
							<?= $day['name_days']; ?>
						</span>
						<span class="schedule__hours">
							<?php
							if ($day['work_day']) { ?>
								<span><?= $day['work_start'] ?> &nbsp;</span>-
								<span <?php if (!$open && $today_day === $i) {
												echo 'class="schedule__mark"';
											} ?>>&nbsp;<?= $day['work_end'] ?></span>
								<?php if (!$open && $today_day === $i) { ?><small class="schedule__note">Closed now</small><?php } ?>
							<?php } else {
								echo $work_mode['not_work'];
							}
							?>
						</span>
					</li>

				<?php $i++;
				} ?>

			</ul>
		</div>
		<p class="footer__copy footer__text"><?= $footer_info['copy'] ?></p>
	</div>
</footer>
