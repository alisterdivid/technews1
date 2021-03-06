<style>
@import url(<?php echo $this->plugin_url . 'assets/lib/icomoon/icomoon.min.css'; ?>);
</style>
<table class="gwa-table" data-id="sc-fields" data-shortcode="<i{atts}></i>" data-parent-id="shortcode" data-parent-value="icomoon">
<tr>
	<th><label><?php _e( 'Color', 'go_pricing_textdomain' ); ?></label></th>
	<td><label><div class="gwa-colorpicker gwa-colorpicker-inline" tabindex="0"><input type="hidden" name="icomoon-color" data-attr="style" data-value="color:{value};" value=""><span class="gwa-cp-picker"><span></span></span><span class="gwa-cp-label">&nbsp;</span><div class="gwa-cp-popup"><div class="gwa-cp-popup-inner"></div><div class="gwa-input-btn"><input type="text" tabindex="-1" value="<?php echo esc_attr( !empty( $col_data['main-color'] ) ? $col_data['main-color'] : '' ); ?>"><a href="#" data-action="cp-fav" tabindex="-1" title="<?php _e( 'Add To Favourites', 'go_pricing_textdomain' ); ?>"><i class="fa fa-heart"></i></a></div></div></label></td>
	<td class="gwa-abox-info"><p class="gwa-info"><i class="fa fa-info-circle"></i><?php _e( 'Color of icon (optional).', 'go_pricing_textdomain' ); ?></p></td>									
</tr>
<tr>
	<th><label><?php _e( 'Size', 'go_pricing_textdomain' ); ?> <span class="gwa-info">(px)</span></label></th>
	<td><input type="text" name="icomoon-size" data-attr="style" data-value="font-size:{value}px;"  data-type="int"></td>
	<td class="gwa-abox-info"><p class="gwa-info"><i class="fa fa-info-circle"></i><?php _e( 'Font size of the icon. (optional).', 'go_pricing_textdomain' ); ?></p></td>									
</tr>
<tr>
	<th><label><?php _e( 'Width', 'go_pricing_textdomain' ); ?> <span class="gwa-info">(px)</span></label></th>
	<td><input type="text" name="icomoon-swidth" data-attr="style" data-value="width:{value}px;"  data-type="int"></td>
	<td class="gwa-abox-info"><p class="gwa-info"><i class="fa fa-info-circle"></i><?php _e( 'Width of the icon. Leave blank if want to specify auto width (optional).', 'go_pricing_textdomain' ); ?></p></td>									
</tr>
<tr>
	<th><label><?php _e( 'Aligment', 'go_pricing_textdomain' ); ?></label></th>
	<td>
		<select name="icomoon-alignment" data-attr="style" data-value="text-align:{value};">                                
			<option value=""><?php _e( 'Left', 'go_pricing_textdomain' ); ?></option>
			<option value="center"><?php _e( 'Center', 'go_pricing_textdomain' ); ?></option>
			<option value="right"><?php _e( 'Right', 'go_pricing_textdomain' ); ?></option>
		</select>	
	<td class="gwa-abox-info"><p class="gwa-info"><i class="fa fa-info-circle"></i><?php _e( 'Alignment of the icon. You can set it when fixed with is used (optional).', 'go_pricing_textdomain' ); ?></p></td>									
</tr>
<tr class="gwa-row-fullwidth">
	<th><label><?php _e( 'Icon', 'go_pricing_textdomain' ); ?></label></th>
	<td>
	<div class="gwa-icon-picker">
		<div class="gwa-icon-picker-header">
			<div class="gwa-icon-picker-selected gwa-clearfix">
				<a href="#" class="gwa-icon-picker-icon" tabindex="-1" data-action="ip-bg-switch"></a>
				<input type="hidden" name="icomoon-icon" data-attr="class">
			</div>
			<div class="gwa-icon-picker-search">
				<div class="gwa-input-btn gwa-search-input" data-action="ip-search"><input type="text" placeholder="<?php esc_attr_e( 'e.g. \'Icon Name\'', 'go_pricing_textdomain' ); ?>"><a href="#" tabindex="-1" title="<?php esc_attr_e( 'Search', 'go_pricing_textdomain' ); ?>"><i class="fa fa-search"></i></a><span class="gwa-info"></span></div>
			</div>
		</div>
		<div class="gwa-icon-picker-content gwa-clearfix">
			<a href="#" class="gwa-icon-picker-icon gwa-current" data-action="ip-select-blank" tabindex="0" title="<?php esc_attr_e( 'None', 'go_pricing_textdomain' ); ?>"><i class="fa fa-ban"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-home"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-home2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-home3"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-office"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-newspaper"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-pencil"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-pencil2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-quill"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-pen"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-blog"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-eyedropper"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-droplet"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-paint-format"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-image"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-images"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-camera"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-headphones"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-music"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-play"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-film"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-video-camera"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-dice"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-pacman"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-spades"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-clubs"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-diamonds"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-bullhorn"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-connection"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-podcast"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-feed"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-mic"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-book"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-books"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-library"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-file-text"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-profile"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-file-empty"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-files-empty"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-file-text2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-file-picture"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-file-music"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-file-play"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-file-video"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-file-zip"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-copy"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-paste"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-stack"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-folder"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-folder-open"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-folder-plus"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-folder-minus"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-folder-download"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-folder-upload"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-price-tag"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-price-tags"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-barcode"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-qrcode"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-ticket"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-cart"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-coin-dollar"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-coin-euro"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-coin-pound"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-coin-yen"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-credit-card"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-calculator"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-lifebuoy"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-phone"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-phone-hang-up"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-address-book"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-envelop"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-pushpin"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-location"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-location2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-compass"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-compass2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-map"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-map2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-history"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-clock"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-clock2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-alarm"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-bell"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-stopwatch"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-calendar"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-printer"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-keyboard"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-display"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-laptop"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-mobile"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-mobile2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-tablet"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-tv"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-drawer"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-drawer2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-box-add"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-box-remove"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-download"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-upload"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-floppy-disk"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-drive"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-database"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-undo"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-redo"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-undo2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-redo2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-forward"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-reply"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-bubble"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-bubbles"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-bubbles2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-bubble2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-bubbles3"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-bubbles4"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-user"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-users"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-user-plus"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-user-minus"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-user-check"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-user-tie"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-quotes-left"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-quotes-right"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-hour-glass"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-spinner"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-spinner2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-spinner3"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-spinner4"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-spinner5"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-spinner6"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-spinner7"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-spinner8"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-spinner9"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-spinner10"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-spinner11"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-binoculars"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-search"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-zoom-in"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-zoom-out"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-enlarge"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-shrink"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-enlarge2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-shrink2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-key"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-key2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-lock"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-unlocked"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-wrench"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-equalizer"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-equalizer2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-cog"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-cogs"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-hammer"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-magic-wand"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-aid-kit"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-bug"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-pie-chart"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-stats-dots"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-stats-bars"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-stats-bars2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-trophy"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-gift"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-glass"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-glass2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-mug"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-spoon-knife"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-leaf"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-rocket"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-meter"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-meter2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-hammer2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-fire"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-lab"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-magnet"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-bin"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-bin2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-briefcase"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-airplane"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-truck"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-road"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-accessibility"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-target"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-shield"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-power"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-switch"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-power-cord"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-clipboard"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-list-numbered"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-list"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-list2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-tree"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-menu"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-menu2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-menu3"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-menu4"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-cloud"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-cloud-download"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-cloud-upload"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-cloud-check"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-download2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-upload2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-download3"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-upload3"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-sphere"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-earth"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-link"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-flag"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-attachment"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-eye"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-eye-plus"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-eye-minus"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-eye-blocked"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-bookmark"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-bookmarks"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-sun"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-contrast"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-brightness-contrast"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-star-empty"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-star-half"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-star-full"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-heart"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-heart-broken"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-man"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-woman"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-man-woman"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-happy"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-happy2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-smile"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-smile2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-tongue"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-tongue2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-sad"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-sad2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-wink"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-wink2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-grin"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-grin2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-cool"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-cool2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-angry"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-angry2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-evil"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-evil2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-shocked"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-shocked2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-baffled"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-baffled2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-confused"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-confused2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-neutral"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-neutral2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-hipster"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-hipster2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-wondering"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-wondering2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-sleepy"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-sleepy2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-frustrated"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-frustrated2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-crying"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-crying2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-point-up"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-point-right"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-point-down"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-point-left"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-warning"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-notification"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-question"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-plus"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-minus"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-info"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-cancel-circle"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-blocked"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-cross"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-checkmark"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-checkmark2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-spell-check"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-enter"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-exit"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-play2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-pause"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-stop"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-previous"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-next"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-backward"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-forward2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-play3"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-pause2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-stop2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-backward2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-forward3"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-first"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-last"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-previous2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-next2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-eject"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-volume-high"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-volume-medium"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-volume-low"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-volume-mute"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-volume-mute2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-volume-increase"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-volume-decrease"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-loop"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-loop2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-infinite"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-shuffle"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-arrow-up-left"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-arrow-up"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-arrow-up-right"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-arrow-right"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-arrow-down-right"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-arrow-down"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-arrow-down-left"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-arrow-left"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-arrow-up-left2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-arrow-up2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-arrow-up-right2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-arrow-right2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-arrow-down-right2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-arrow-down2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-arrow-down-left2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-arrow-left2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-circle-up"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-circle-right"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-circle-down"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-circle-left"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-tab"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-move-up"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-move-down"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-sort-alpha-asc"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-sort-alpha-desc"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-sort-numeric-asc"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-sort-numberic-desc"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-sort-amount-asc"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-sort-amount-desc"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-command"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-shift"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-ctrl"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-opt"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-checkbox-checked"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-checkbox-unchecked"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-radio-checked"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-radio-checked2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-radio-unchecked"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-crop"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-make-group"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-ungroup"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-scissors"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-filter"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-font"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-ligature"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-ligature2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-text-height"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-text-width"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-font-size"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-bold"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-underline"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-italic"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-strikethrough"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-omega"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-sigma"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-page-break"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-superscript"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-subscript"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-superscript2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-subscript2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-text-color"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-pagebreak"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-clear-formatting"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-table"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-table2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-insert-template"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-pilcrow"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-ltr"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-rtl"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-section"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-paragraph-left"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-paragraph-center"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-paragraph-right"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-paragraph-justify"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-indent-increase"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-indent-decrease"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-share"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-new-tab"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-embed"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-embed2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-terminal"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-share2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-mail"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-mail2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-mail3"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-mail4"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-google"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-google-plus"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-google-plus2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-google-plus3"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-google-drive"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-facebook"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-facebook2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-facebook3"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-ello"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-instagram"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-twitter"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-twitter2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-twitter3"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-feed2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-feed3"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-feed4"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-youtube"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-youtube2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-youtube3"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-youtube4"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-twitch"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-vimeo"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-vimeo2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-vimeo3"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-lanyrd"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-flickr"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-flickr2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-flickr3"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-flickr4"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-picassa"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-picassa2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-dribbble"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-dribbble2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-dribbble3"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-forrst"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-forrst2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-deviantart"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-deviantart2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-steam"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-steam2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-dropbox"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-onedrive"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-github"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-github2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-github3"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-github4"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-github5"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-wordpress"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-wordpress2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-joomla"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-blogger"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-blogger2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-tumblr"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-tumblr2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-yahoo"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-tux"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-apple"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-finder"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-android"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-windows"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-windows8"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-soundcloud"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-soundcloud2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-skype"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-reddit"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-linkedin"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-linkedin2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-lastfm"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-lastfm2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-delicious"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-stumbleupon"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-stumbleupon2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-stackoverflow"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-pinterest"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-pinterest2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-xing"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-xing2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-flattr"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-foursquare"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-paypal"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-paypal2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-paypal3"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-yelp"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-file-pdf"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-file-openoffice"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-file-word"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-file-excel"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-libreoffice"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-html5"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-html52"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-css3"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-git"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-svg"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-codepen"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-chrome"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-firefox"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-IE"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-opera"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-safari"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="icomoon-IcoMoon"></i></a>
		</div>
	</div>		
	</td>
</tr>