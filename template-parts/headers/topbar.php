<div class="topbar">
    <?php if ($email = get_theme_mod('blackcats_phanter_topbar_email')) : ?>
        <span class="topbar-email"><?php echo esc_html($email); ?></span>
    <?php endif; ?>
    <?php if ($phone = get_theme_mod('blackcats_phanter_topbar_phone')) : ?>
        <span class="topbar-phone"><?php echo esc_html($phone); ?></span>
    <?php endif; ?>
    <?php if ($address = get_theme_mod('blackcats_phanter_topbar_address')) : ?>
        <span class="topbar-address"><?php echo esc_html($address); ?></span>
    <?php endif; ?>
    <!-- Aquí puedes añadir las redes sociales u otros elementos -->
</div>
