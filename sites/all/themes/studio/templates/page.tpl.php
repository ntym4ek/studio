<div class="page-wrapper">

  <div class="nav-mobile">
    <div class="branding">
      <div class="logo"><a href="<?php print url('<front>'); ?>"><img src="<?php print $logo_inverted; ?>" alt="Студия макраме" /></a></div>
    </div>
    <?php if (isset($search_form_mobile)): ?>
      <div class="search hide-lg">
        <?php print render($search_form_mobile); ?>
      </div>
    <?php endif; ?>
    <div class="menu-mobile-wr">
      <div>
        <?php if ($primary_nav): print $primary_nav; endif; ?>
      </div>
      <div>
        <?php if ($secondary_nav): print $secondary_nav; endif; ?>
      </div>
    </div>
  </div>

  <div class="page">
    <?php if ($is_header_on): ?>
    <header class="page-header">
      <div class="container">
        <div class="row middle-xs full-height no-wrap">
          <div class="col col-1 full-height hide-xs show-lg">
            <div class="menu-wr">
              <div class="primary-menu">
                <?php if ($primary_nav): print $primary_nav; endif; ?>
              </div>
            </div>
          </div>
          <div class="col col-2 full-height">
            <div class="branding">
              <div class="logo"><a href="<?php print url('<front>'); ?>"><img src="<?php print $logo; ?>" alt="Студия макраме" /></a></div>
            </div>
          </div>
          <div class="col col-3 full-height hide-xs show-lg">
            <div class="menu-wr">
              <div class="secondary-menu">
                <?php if ($secondary_nav): print $secondary_nav; endif; ?>
              </div>
            </div>
          </div>
          <div class="col col-4 full-height hide-lg">
            <div class="nav-mobile-label"><div class="label"><div class="icon"></div></div></div>
          </div>
        </div>
      </div>

    </header>
    <?php endif; ?>

    <div class="page-content">
      <div class="container">

        <?php if ($page['highlighted'] || $is_banner_on): ?>
        <div class="page-highlighted">

          <?php if (isset($search_form)): ?>
            <div class="search hide show-lg">
              <?php print drupal_render($search_form); ?>
            </div>
          <?php endif; ?>

          <?php if ($page['highlighted']): ?>
            <?php print render($page['highlighted']); ?>
          <?php endif; ?>

          <?php if ($is_banner_on): ?>
          <div class="page-banner">
            <div class="screen-width">
              <div class="image">
                <picture>
                  <?php if (!empty($banner_mobile_url)): ?><source class="mobile" srcset="<?php print $banner_mobile_url; ?>" media="(max-width: <?php print $banner_break; ?>px)"><?php endif; ?>
                  <img src="<?php print $banner_url; ?>" alt="<?php print $banner_title ?? t('Banner'); ?>">
                </picture>
              </div>

              <div class="container full-height">
                <div class="banner-title-wrapper">
                  <?php if (!empty($banner_title_prefix)): ?><div class="banner-prefix"><?php print $banner_title_prefix; ?></div><?php endif; ?>
                  <?php if (!empty($banner_title)): ?><div class="banner-title"><?php print $banner_title; ?></div><?php endif; ?>
                  <?php if (!empty($banner_title_suffix)): ?><div class="banner-suffix"><?php print $banner_title_suffix; ?></div><?php endif; ?>
                </div>
              </div>
              </div>
          </div>

          <?php if ($page['header']): ?>
          <div class="page-context-menu">
            <div class="screen-width mobile-menu-disabled">
              <div class="container">
                <?php print render($page['header']); ?>
              </div>
            </div>
          </div>
          <?php endif; ?>
          <?php endif; ?>
        </div>
        <?php else: ?>
        <div class="page-margin"></div>
        <?php endif; ?>

        <?php print $breadcrumb; ?>

        <?php
          $ls = !empty($page['sidebar_first']);
          $rs = !empty($page['sidebar_second']);
        ?>
        <?php if ($ls || $rs): ?>
        <div class="row">
        <?php endif; ?>

        <?php if ($ls): ?>
          <div class="col-xs-12 col-lg-3">
            <div class="page-left">
              <?php print render($page['sidebar_first']); ?>
            </div>
          </div>
        <?php endif; ?>

          <?php if ($ls || $rs): ?>
          <div class="col-xs-12 col-lg-9">
          <?php endif; ?>

            <div class="page-main">
              <?php if (isset($tabs)): ?><?php print render($tabs); ?><?php endif; ?>
              <?php print $messages; ?>
              <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

              <?php if ($is_title_on): ?>
                <div class="page-title">
                  <?php print render($title_prefix); ?>
                  <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
                  <?php print render($title_suffix); ?>
                </div>
              <?php endif; ?>

              <?php print render($page['content']); ?>
            </div>

          <?php if ($ls || $rs): ?>
          </div>
          <?php endif; ?>

          <?php if ($rs): ?>
          <div class="col-xs-12 col-lg-3">
            <div class="page-right">
              <?php print render($page['sidebar_second']); ?>
            </div>
          </div>
          <?php endif; ?>

        <?php if ($ls || $rs): ?>
        </div>
        <?php endif; ?>

        <?php if (!empty($page['downlighted'])): ?>
          <div class="page-downlighted">
            <?php print render($page['downlighted']); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>

    <div class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col-xs-6 col-lg-4">
            <div class="menu platforms p1">
              <ul>
                <li><a href="#" rel="nofollow" target="_blank" title="<?php print t('Ozon'); ?>"><?php print t('Ozon'); ?></a></li>
                <li><a href="#" rel="nofollow" target="_blank" title="<?php print t('Yandex Market'); ?>"><?php print t('Yandex Market'); ?></a></li>
              </ul>
            </div>
          </div>

          <div class="hide-xs show-lg col-lg-4">
            <div class="branding">
              <div class="logo"><a href="<?php print url('<front>'); ?>"><img src="<?php print $logo; ?>" /></a></div>
            </div>
          </div>

          <div class="col-xs-6 col-lg-4">
            <div class="menu platforms p2">
              <ul>
                <li><a href="https://vk.com/yulya_macrame" rel="nofollow" target="_blank" title="<?php print t('VKontakte'); ?>"><?php print t('VKontakte'); ?></a></li>
                <li><a href="#" rel="nofollow" target="_blank" title="<?php print t('Odnoklassniki'); ?>"><?php print t('Odnoklassniki'); ?></a></li>
                <li><a href="https://www.livemaster.ru/ashikhmina" rel="nofollow" target="_blank" title="<?php print t('Yarmarka Masterov'); ?>"><?php print t('Yarmarka Masterov'); ?></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  </div>

  <div id="back-to-top"><i class="icon icon-03"></i></div>
</div>

