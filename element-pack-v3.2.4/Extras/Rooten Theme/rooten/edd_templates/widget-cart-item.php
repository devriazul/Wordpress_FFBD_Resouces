<li class="edd-cart-item">
	<span class="edd-cart-item-title">{item_title}</span>
	<span class="edd-cart-item-quantity">{item_quantity} @</span>
	<span class="edd-cart-item-price">{item_amount}</span>
	<span class="edd-cart-item-separator">-</span>
	<a href="{remove_url}" data-nonce="<?php echo wp_create_nonce( 'edd-remove-cart-widget-item' ); ?>" data-cart-item="{cart_item_id}" data-download-id="{item_id}" data-action="edd_remove_from_cart" class="edd-remove-from-cart"><?php _e( 'remove', 'rooten' ); ?></a>
</li>