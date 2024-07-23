<?php
?>
<div class="row">
  <div class="col-xs-12 col-md-9 col-lg-8 col-xl-6">
    <?php if (empty($form['message'])): ?>
    <div class="checkout-form">
      <div class="cart-list">
        <?php if (!empty($form['samples'])): ?>
        <div class="samples list">
          <h3>Заказ образцов</h3>
          <?php foreach($form['samples'] as $key => &$item): ?>
          <?php if (is_numeric($key)): ?>
            <div class="cart-product">
              <div class="image"><img src="<?php print $item['#image_url']; ?>"></div>
              <div class="content">
                <div class="info">
                  <div class="title">
                    <?php if ($item['#status']): ?>
                      <a href="<?php print $item['#url']; ?>" target="_blank"><?php print $item['#label']; ?></a>
                    <?php else: ?>
                      <?php print $item['#label']; ?>
                    <?php endif; ?>
                  </div>
                  <div class="category"><?php print $item['#category']; ?></div>
                </div>
                <div class="actions">
                  <div class="quantity">
                    <div class="wrapper">
                      <div class="minus"><?php print render($item['decrease-' . $item['#id']]); ?></div>
                      <div class="number"><?php print render($item['qty-' . $item['#id']]); ?></div>
                      <div class="plus"><?php print render($item['increase-' . $item['#id']]); ?></div>
                    </div>
                  </div>
                  <div class="delete"><?php print render($item['delete-' . $item['#id']]); ?></div>
                </div>
              </div>
            </div>
          <?php endif; ?>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <?php if (!empty($form['products'])): ?>
        <div class="products list">
          <h3><?php print t('Order items'); ?></h3>
          <?php foreach($form['products'] as $key => &$item): ?>
            <?php if (is_numeric($key)): ?>
              <div class="cart-product">
                <div class="image"><img src="<?php print $item['#image_url']; ?>"></div>
                <div class="content">
                  <div class="info">
                    <div class="title">
                      <?php if ($item['#status']): ?>
                        <a href="<?php print $item['#url']; ?>" target="_blank"><?php print $item['#label']; ?></a>
                      <?php else: ?>
                        <?php print $item['#label']; ?>
                      <?php endif; ?>
                    </div>
                    <div class="category"><?php print $item['#category']; ?></div>
                  </div>
                  <div class="actions">
                    <div class="quantity">
                      <div class="wrapper">
                        <div class="minus"><?php print render($item['decrease-' . $item['#id']]); ?></div>
                        <div class="number"><?php print render($item['qty-' . $item['#id']]); ?></div>
                        <div class="plus"><?php print render($item['increase-' . $item['#id']]); ?></div>
                      </div>
                    </div>
                    <div class="delete"><?php print render($item['delete-' . $item['#id']]); ?></div>
                  </div>
                </div>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
      </div>

      <div class="cart-checkout">
        <h3>Оформление</h3>
        <div class="content">
          <?php print render($form['username']); ?>
          <?php print render($form['phone']); ?>
          <?php print render($form['email']); ?>
          <?php print render($form['comment']); ?>
          <?php print render($form['submit']); ?>
        </div>
      </div>

    </div>
    <?php endif; ?>

    <?php echo drupal_render_children($form); ?>

  </div>
</div>
