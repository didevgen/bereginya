<div class="wrap">
	<h2>VKontakte API - <?php _e( 'Settings', 'vkapi' ); ?></h2>

	<style type="text/css" scoped="scoped">
		.wrap {
			font-weight: normal;
		}

		#mymenu {
			height: 30px;
		}

		#mymenu li {
			float: left;
			padding: 10px;
			border-top: 1px solid #0074a2; /*#21759b;*/
			border-right: 1px solid #0074a2;
			border-left: 1px solid #0074a2;
			border-radius: 5px 5px 0 0;
			margin: 5px 5px 0 5px;
			cursor: pointer;
		}

		#pages {
			border-top: 1px solid #0074a2;
			padding: 10px 5px;
		}

		.page div {
			padding: 5px 0;
		}

		.page div div {
			display: inline-block;
			width: 20%;
			vertical-align: top;
		}

		.section-title {
			width: 100% !important;
		}

		.section-title h3 {
			margin: 0;
			padding: 5px 10px;
			background: #DFDFDF;
			border: 1px solid #999 !important;
			font-size: 14px;
			font-weight: 700;
			line-height: 18px;
			color: #464646;
			text-shadow: #fff 0 1px 0;
			border-radius: 6px;
		}

		#vkapi_api_secret {
			width: 155px;
		}

		#vk_at_input {
			width: 580px;
			border-color: #0074a2 !important;
		}

		#fbapi_admin_id {
			width: 115px;
			border-color: #0074a2 !important;
		}
	</style>

	<ul id="mymenu">
		<li id="vk">
			<?php _e( 'VKontakte', 'vkapi' ); ?>
		</li>
		<li id="fb">
			<?php _e( 'Facebook', 'vkapi' ); ?>
		</li>
		<li id="sc">
			<?php _e( 'Socialize', 'vkapi' ); ?>
		</li>
		<li id="other">
			<?php _e( 'Other', 'vkapi' ); ?>
		</li>
	</ul>

	<div id="pages">

		<form method="post" action="options.php">
			<table class="form-table">
				<?php settings_fields( 'vkapi-settings-group' ); ?>

				<!--vkontakte-->
				<div id="page_vk"
				     class="page">
<span class="description">
        <?php printf(
	        __(
		        'If you dont have <b>Application ID</b> and <b>Secure key</b> : go this <a href="%s" target="_blank">link</a> and select <b>`Web-site`</b>. It\'s easy.',
		        'vkapi'
	        ),
	        'https://vk.com/editapp?act=create'
        ); ?>
    </span>
					<br/>
    <span class="description">
    <?php printf(
	    __(
		    'If don\'t remember : go this <a href="%s" target="_blank">link</a> and choose need application.',
		    'vkapi'
	    ),
	    'https://vk.com/apps?act=manage'
    ); ?>
    </span>
					<br/>

					<div>
						<div><label for="vkapi_appid"><?php _e( 'Application ID:', 'vkapi' ); ?></label>
						</div>
						<div><input type="text"
						            id="vkapi_appid"
						            name="vkapi_appid"
						            value="<?php echo get_option( 'vkapi_appid' ); ?>"/></div>
					</div>
					<div>
						<div><label for="vkapi_api_secret"><?php _e( 'Secure key:', 'vkapi' ); ?></label>
						</div>
						<div><input type="text"
						            id="vkapi_api_secret"
						            name="vkapi_api_secret"
						            value="<?php echo get_option( 'vkapi_api_secret' ); ?>"/></div>
					</div>
					<!-- Comments -->
					<div>
						<div class="section-title">
							<h3><?php _e( 'VKontakte Comments:', 'vkapi' );
								$temp = get_option(
									'vkapi_show_comm'
								); ?></h3>
						</div>
					</div>
					<div>
						<div>
							<select name="vkapi_show_comm"
							        id="vkapi_show_comm"
							        class="widefat">
								<option value="true" <?php selected( $temp, 'true' ); ?>><?php _e(
										'Show',
										'vkapi'
									); ?></option>
								<option value="false" <?php selected( $temp, 'false' ); ?>><?php _e(
										'Dont show',
										'vkapi'
									); ?></option>
							</select>
						</div>
					</div>
					<div>
						<div><label for="vkapi_comm_height"><?php _e(
									'Height of widget(0=auto):',
									'vkapi'
								); ?></label></div>
						<div><input size="10"
						            type="text"
						            id="vkapi_comm_height"
						            name="vkapi_comm_height"
						            value="<?php echo get_option( 'vkapi_comm_height' ); ?>"/>
						</div>
						<div><label for="vkapi_comm_width"><?php _e(
									'Block width in pixels(>300):',
									'vkapi'
								) ?></label></div>
						<div><input size="10"
						            type="text"
						            id="vkapi_comm_width"
						            name="vkapi_comm_width"
						            value="<?php echo get_option( 'vkapi_comm_width' ); ?>"/>
						</div>
						<div><label for="vkapi_comm_limit"><?php _e(
									'Number of comments on the page (5-100):',
									'vkapi'
								) ?></label></div>
						<div><input size="10"
						            type="text"
						            id="vkapi_comm_limit"
						            name="vkapi_comm_limit"
						            value="<?php echo get_option( 'vkapi_comm_limit' ); ?>"/>
						</div>
					</div>
					<div>
						<div><label for="vkapi_comm_autoPublish"><?php _e(
									'AutoPublish to vk user wall',
									'vkapi'
								); ?></label></div>
						<div><input type="checkbox"
						            id="vkapi_comm_autoPublish"
						            name="vkapi_comm_autoPublish"
						            value="1" <?php echo get_option(
								'vkapi_comm_autoPublish'
							) ? 'checked' : ''; ?> /></div>
						<div><label for="vkapi_show_first_vk"><?php printf(
									__(
										'Show first %s comments',
										'vkapi'
									),
									'VKontakte'
								); ?></label></div>
						<div>
							<input
								type="radio"
								id="vkapi_show_first_vk"
								name="vkapi_show_first"
								value="vk"
								<?php echo get_option( 'vkapi_show_first' ) == 'vk' ? 'checked' : ''; ?>
							/>
						</div>
					</div>
					<div>
						<div><label for="vkapi_close_wp"><span style="color: red"><?php _e(
										'Hide WordPress Comments',
										'vkapi'
									); ?></span></label></div>
						<div><input type="checkbox"
						            id="vkapi_close_wp"
						            name="vkapi_close_wp"
						            value="1" <?php echo get_option(
								'vkapi_close_wp'
							) ? 'checked' : ''; ?> /></div>

						<div>
							<label for="vkapi_notice_admin">
            <span>
                <?php _e( 'Notice by email about new comment', 'vkapi' ); ?>
            </span>
							</label>
						</div>
						<div>
							<input type="checkbox" id="vkapi_notice_admin" name="vkapi_notice_admin" value="1"
								<?php echo get_option( 'vkapi_notice_admin' ) ? 'checked' : ''; ?>
							/>
						</div>
					</div>
					<!-- Comments Media -->
					<div>
						<div class="section-title"><h3><?php _e( 'Media in comments:', 'vkapi' ) ?></h3>
						</div>
					</div>
					<div>
						<div><label for="vkapi_comm_graffiti"><?php _e( 'Graffiti:', 'vkapi' ); ?></label>
						</div>
						<div><input type="checkbox"
						            id="vkapi_comm_graffiti"
						            name="vkapi_comm_graffiti"
						            value="1" <?php echo get_option(
								'vkapi_comm_graffiti'
							) ? 'checked' : ''; ?> /></div>
						<div><label for="vkapi_comm_photo"><?php _e( 'Photo:', 'vkapi' ); ?></label></div>
						<div><input type="checkbox"
						            id="vkapi_comm_photo"
						            name="vkapi_comm_photo"
						            value="1" <?php echo get_option(
								'vkapi_comm_photo'
							) ? 'checked' : ''; ?> /></div>
						<div><label for="vkapi_comm_audio"><?php _e( 'Audio:', 'vkapi' ); ?></label></div>
						<div><input type="checkbox"
						            id="vkapi_comm_audio"
						            name="vkapi_comm_audio"
						            value="1" <?php echo get_option(
								'vkapi_comm_audio'
							) ? 'checked' : ''; ?> /></div>
					</div>
					<div>
						<div><label for="vkapi_comm_video"><?php _e( 'Video:', 'vkapi' ); ?></label></div>
						<div><input type="checkbox"
						            id="vkapi_comm_video"
						            name="vkapi_comm_video"
						            value="1" <?php echo get_option(
								'vkapi_comm_video'
							) ? 'checked' : ''; ?> /></div>
						<div><label for="vkapi_comm_link"><?php _e( 'Link:', 'vkapi' ); ?></label></div>
						<div><input type="checkbox"
						            name="vkapi_comm_link"
						            id="vkapi_comm_link"
						            value="1" <?php echo get_option(
								'vkapi_comm_link'
							) ? 'checked' : ''; ?> /></div>
					</div>
					<!-- SignOn -->
					<div>
						<div class="section-title"><h3><?php _e( 'Sign On: ', 'vkapi' );
								$temp = get_option(
									'vkapi_login'
								); ?></h3>
						</div>
					</div>
					<div>
						<div>
							<select name="vkapi_login"
							        id="vkapi_login"
							        class="widefat">
								<option
									value="true"<?php selected( $temp, 'true' ); ?>><?php _e( 'Enable', 'vkapi' ); ?></option>
								<option value="false"<?php selected( $temp, 'false' ); ?>><?php _e(
										'Disable',
										'vkapi'
									); ?></option>
							</select>
						</div>
					</div>
					<div>
						<div>
							<p>
								<?php _e( 'Can also be used in a template', 'vkapi' ); ?>:
							</p>
        <textarea readonly cols="71" rows="1" style="width: auto; resize: none; overflow: hidden;"><?php
	        echo htmlentities( '<?php echo class_exists(\'VK_api\') ? VK_api::get_vk_login() : null; ?>' );
	        ?></textarea>
						</div>
					</div>
					<!-- VK Like -->
					<div>
						<div class="section-title"><h3><?php _e( 'Like button: ', 'vkapi' );
								$temp = get_option(
									'vkapi_show_like'
								); ?></h3>
						</div>
					</div>
					<div>
						<div>
							<select name="vkapi_show_like"
							        id="vkapi_show_like"
							        class="widefat">
								<option
									value="true"<?php selected( $temp, 'true' ); ?>><?php _e( 'Show', 'vkapi' ); ?></option>
								<option value="false"<?php selected( $temp, 'false' ); ?>><?php _e(
										'Dont show',
										'vkapi'
									); ?></option>
							</select>
						</div>
					</div>
					<div>
						<div><label
								for="vkapi_like_top"><?php _e( 'Show before post:', 'vkapi' ); ?></label>
						</div>
						<div>
							<input type="checkbox"
							       id="vkapi_like_top"
							       name="vkapi_like_top"
							       value="1" <?php echo get_option(
								'vkapi_like_top'
							) ? 'checked' : ''; ?> />
						</div>
					</div>
					<div>
						<div><label
								for="vkapi_like_bottom"><?php _e( 'Show after post:', 'vkapi' ); ?></label>
						</div>
						<div>
							<input type="checkbox"
							       id="vkapi_like_bottom"
							       name="vkapi_like_bottom"
							       value="1" <?php echo get_option(
								'vkapi_like_bottom'
							) ? 'checked' : ''; ?> />
						</div>
					</div>
					<div>
						<div><label for="vkapi_align"><?php _e( 'Align:', 'vkapi' );
								$temp = get_option(
									'vkapi_align'
								); ?></label></div>
						<div>
							<select name="vkapi_align"
							        id="vkapi_align"
							        class="widefat">
								<option
									value="right"<?php selected( $temp, 'right' ); ?>><?php _e( 'right', 'vkapi' ); ?></option>
								<option
									value="left"<?php selected( $temp, 'left' ); ?>><?php _e( 'left', 'vkapi' ); ?></option>
							</select>
						</div>
					</div>
					<div>
						<div><label for="vkapi_like_type"><?php _e( 'Button style:', 'vkapi' );
								$temp = get_option(
									'vkapi_like_type'
								); ?></label></div>
						<div>
							<select name="vkapi_like_type"
							        id="vkapi_like_type"
							        class="widefat">
								<option value="full"<?php selected( $temp, 'full' ); ?>><?php _e(
										'Button with text counter',
										'vkapi'
									); ?></option>
								<option value="button"<?php selected( $temp, 'button' ); ?>><?php _e(
										'Button with mini counter',
										'vkapi'
									); ?></option>
								<option value="mini"<?php selected( $temp, 'mini' ); ?>><?php _e(
										'Mini button',
										'vkapi'
									); ?></option>
								<option value="vertical"<?php selected( $temp, 'vertical' ); ?>><?php _e(
										'Mini button with counter at the top',
										'vkapi'
									); ?></option>
							</select>
						</div>
					</div>
					<div>
						<div><label for="vkapi_like_verb"><?php _e( 'Statement:', 'vkapi' );
								$temp = get_option(
									'vkapi_like_verb'
								); ?></label></div>
						<div><select name="vkapi_like_verb"
						             id="vkapi_like_verb"
						             class="widefat">
								<option
									value="0"<?php selected( $temp, '0' ); ?>><?php _e( 'I like', 'vkapi' ); ?></option>
								<option
									value="1"<?php selected( $temp, '1' ); ?>><?php _e( 'It\'s interesting', 'vkapi' ); ?></option>
							</select></div>
					</div>
					<div>
						<div><label for="vkapi_like_cat"><?php _e(
									'Show in Categories page and Home:',
									'vkapi'
								); ?></label></div>
						<div>
							<input type="checkbox"
							       id="vkapi_like_cat"
							       name="vkapi_like_cat"
							       value="1" <?php echo get_option(
								'vkapi_like_cat'
							) ? 'checked' : ''; ?> />
						</div>
					</div>
					<!-- VK Share -->
					<div>
						<div class="section-title"><h3><?php _e( 'Share button: ', 'vkapi' );
								$temp = get_option(
									'vkapi_show_share'
								); ?></h3>
						</div>
					</div>
					<div>
						<div><select name="vkapi_show_share"
						             id="vkapi_show_share"
						             class="widefat">
								<option
									value="true"<?php selected( $temp, 'true' ); ?>><?php _e( 'Show', 'vkapi' ); ?></option>
								<option
									value="false"<?php selected( $temp, 'false' ); ?>><?php _e( 'Dont show', 'vkapi' ); ?></option>
							</select></div>
					</div>
					<div>
						<div><label for="vkapi_share_type"><?php _e( 'Button style:', 'vkapi' );
								$temp = get_option(
									'vkapi_share_type'
								); ?></label></div>
						<div><select name="vkapi_share_type"
						             id="vkapi_share_type"
						             class="widefat">
								<option
									value="round"<?php selected( $temp, 'round' ); ?>><?php _e( 'Button', 'vkapi' ); ?></option>
								<option value="round_nocount"<?php selected( $temp, 'round_nocount' ); ?>><?php _e(
										'Button without a Counter',
										'vkapi'
									); ?></option>
								<option value="button"<?php selected( $temp, 'button' ); ?>><?php _e(
										'Button Right Angles',
										'vkapi'
									); ?></option>
								<option value="button_nocount"<?php selected( $temp, 'button_nocount' ); ?>><?php _e(
										'Button without a Counter Right Angles',
										'vkapi'
									); ?></option>
								<option
									value="link"<?php selected( $temp, 'link' ); ?>><?php _e( 'Link', 'vkapi' ); ?></option>
								<option value="link_noicon"<?php selected( $temp, 'link_noicon' ); ?>><?php _e(
										'Link without an Icon',
										'vkapi'
									); ?></option>
							</select></div>
					</div>
					<div>
						<div><label
								for="vkapi_share_text"><?php _e( 'Text on the button:', 'vkapi' ); ?></label>
						</div>
						<div><input type="text"
						            id="vkapi_share_text"
						            name="vkapi_share_text"
						            value="<?php echo get_option( 'vkapi_share_text' ); ?>"/></div>
					</div>
					<div>
						<div><label for="vkapi_share_cat">
								<?php _e( 'Show in Categories page and Home:', 'vkapi' ); ?>
							</label></div>
						<div>
							<input type="checkbox"
							       id="vkapi_share_cat"
							       name="vkapi_share_cat"
							       value="1" <?php echo get_option(
								'vkapi_share_cat'
							) ? 'checked' : ''; ?> />
						</div>
					</div>
					<!-- Anti Cross Post -->
					<div>
						<div class="section-title">
							<h3><?php echo '(Beta)' . __( 'AntiCrossPost: ', 'vkapi' ); ?></h3>
						</div>
					</div>
					<div>
						<div><label
								for="vkapi_crosspost_category"><?php _e( 'Category ID:', 'vkapi' ); ?></label>
						</div>
						<div>
							<?php $temp = get_option( 'vkapi_crosspost_category' ); ?>
							<?php wp_dropdown_categories( array(
								'name'  => 'vkapi_crosspost_category',
								'class' => 'widefat'
							) ); ?>
						</div>
					</div>
					<div>
						<div>
							<?php _e( 'Path for Cron:', 'vkapi' ) ?>
						</div>
						<div>
							<?php
							$url = get_bloginfo( 'wpurl' );
							echo $url .= '/wp-content/plugins/vkontakte-api/php/cron.php';
							?>
						</div>
					</div>
					<!-- Cross Post -->
					<div>
						<div class="section-title"><h3><?php _e( 'CrossPost: ', 'vkapi' ); ?></h3>
						</div>
					</div>
					<div>
						<div><label for="vkapi_vk_group"><?php _e( 'Group ID:', 'vkapi' ); ?></label></div>
						<div><input type="text"
						            id="vkapi_vk_group"
						            name="vkapi_vk_group"
						            value="<?php echo get_option( 'vkapi_vk_group' ); ?>"/></div>
					</div>
					<div>
						<div>
							<label id="vk_at"
							       for="vk_at_input">
								<?php
								echo 'Access Token<br />' . __(
										'Click me, and then cut out the address bar (as a whole) and paste into this field:',
										'vkapi'
									) ?>
							</label>
						</div>
						<div>
							<input id="vk_at_input"
							       type="text"
							       name="vkapi_at"
							       value="<?php echo get_option( 'vkapi_at' ); ?>"/>
						</div>
					</div>

					<div>
						<div><label for="vkapi_crosspost_default"><?php _e(
									'Enable by default:',
									'vkapi'
								); ?></label></div>
						<div><input type="checkbox"
						            id="vkapi_crosspost_default"
						            name="vkapi_crosspost_default"
						            value="1" <?php echo get_option(
								'vkapi_crosspost_default'
							) ? 'checked' : ''; ?> /></div>
					</div>

					<div>
						<div>
							<label for="vkapi_crosspost_post_types">
								<?php _e( 'Post types:', 'vkapi' ); ?>
							</label>
						</div>
						<div>
							<?php $post_types = get_post_types( array(), 'objects' ) ?>
							<?php $crosspost_post_types = (array) get_option( 'vkapi_crosspost_post_types' ) ?>
							<?php foreach ( $post_types as $post_type ) : ?>
								<?php $post_types_ignore = array(
									'attachment',
									'revision',
									'nav_menu_item',
									'link',
								) ?>
								<?php if ( in_array( $post_type->name, $post_types_ignore ) ) {
									continue;
								} ?>
								<input type="checkbox"
								       id="vkapi_crosspost_post_types[]"
								       name="vkapi_crosspost_post_types[]"
								       value="<?php echo $post_type->name ?>"
									<?php echo in_array( $post_type->name, $crosspost_post_types ) ? 'checked="checked"' : '' ?>
								/>
								<?php echo $post_type->label ?><br/>
							<?php endforeach; ?>
						</div>
					</div>

					<div>
						<div><label
								for="vkapi_crosspost_length"><?php _e( 'Text length(0=unlimited, -1=Don\'t send text):', 'vkapi' ); ?></label>
						</div>
						<div><input type="number"
						            id="vkapi_crosspost_length"
						            name="vkapi_crosspost_length"
						            value="<?php echo get_option( 'vkapi_crosspost_length' ); ?>"/>
						</div>
					</div>

					<div>
						<div>
							<label for="vkapi_crosspost_images_count">
								<?php _e( 'Images count:', 'vkapi' ); ?>
							</label>
						</div>
						<div>
							<input type="number"
							       id="vkapi_crosspost_images_count"
							       name="vkapi_crosspost_images_count"
							       value="<?php echo get_option( 'vkapi_crosspost_images_count' ); ?>"/>
						</div>
					</div>

					<div>
						<div>
							<label for="vkapi_crosspost_delay">
								<?php _e( 'Publication delay (in minutes)', 'vkapi' ); ?>
							</label>
						</div>
						<div>
							<input type="number"
							       id="vkapi_crosspost_delay"
							       name="vkapi_crosspost_delay"
							       value="<?php echo get_option( 'vkapi_crosspost_delay' ); ?>"/>
						</div>
					</div>

					<div>
						<div><label for="vkapi_tags"><?php _e( 'Add tags:', 'vkapi' ); ?></label></div>
						<div><input type="checkbox"
						            id="vkapi_tags"
						            name="vkapi_tags"
						            value="1" <?php echo get_option(
								'vkapi_tags'
							) ? 'checked' : ''; ?> /></div>
					</div>
					<div>
						<div><label
								for="vkapi_crosspost_link"><?php _e( 'Show link:', 'vkapi' ); ?></label>
						</div>
						<div><input type="checkbox"
						            id="vkapi_crosspost_link"
						            name="vkapi_crosspost_link"
						            value="1" <?php echo get_option(
								'vkapi_crosspost_link'
							) ? 'checked' : ''; ?> /></div>
					</div>
					<div>
						<div><label
								for="vkapi_crosspost_signed"><?php _e( 'Signed by author:', 'vkapi' ); ?></label>
						</div>
						<div><input type="checkbox"
						            id="vkapi_crosspost_signed"
						            name="vkapi_crosspost_signed"
						            value="1" <?php echo get_option( 'vkapi_crosspost_signed' ) ? 'checked' : ''; ?> />
						</div>
					</div>
				</div>

				<!--facebook-->
				<div id="page_fb"
				     class="page">
    <span class="description">
        <?php _e(
	        "Facebook <b>App ID</b> : go this <a href='https://developers.facebook.com/apps' target='_blank'>link</a> and register your site(blog). It's easy.",
	        'vkapi'
        ); ?></span>
					<br/>

					<div>
						<div><label for="fbapi_appid"><?php _e( 'Facebook App ID:', 'vkapi' ); ?></label>
						</div>
						<div><input type="text"
						            id="fbapi_appid"
						            name="fbapi_appid"
						            value="<?php echo get_option( 'fbapi_appid' ); ?>"/></div>
					</div>
					<div>
						<div>
							<label id="fb_admin"
							       for="fbapi_admin_id">
								<?php printf(
									__(
										'Admin ID %s (click me)',
										'vkapi'
									),
									'<br />'
								); ?>
							</label>
						</div>
						<div>
							<input size="15"
							       type="text"
							       id="fbapi_admin_id"
							       name="fbapi_admin_id"
							       value="<?php echo get_option( 'fbapi_admin_id' ); ?>"/>
						</div>
					</div>
					<!-- FB comments -->
					<div>
						<div class="section-title"><h3><?php _e( 'FaceBook Comments: ', 'vkapi' );
								$temp = get_option(
									'fbapi_show_comm'
								); ?></h3>
						</div>
					</div>
					<div>
						<div>
							<select name="fbapi_show_comm"
							        id="fbapi_show_comm"
							        class="widefat">
								<option value="true"<?php selected( $temp, 'true' ); ?>><?php _e(
										'Show',
										'vkapi'
									); ?></option>
								<option value="false"<?php selected( $temp, 'false' ); ?>><?php _e(
										'Dont show',
										'vkapi'
									); ?></option>
							</select>
						</div>
					</div>
					<div>
						<div><label for="vkapi_show_first_fb"><?php printf(
									__(
										'Show first %s comments',
										'vkapi'
									),
									'Facebook'
								); ?></label></div>
						<div>
							<input
								type="radio"
								id="vkapi_show_first_fb"
								name="vkapi_show_first"
								value="fb"
								<?php echo get_option( 'vkapi_show_first' ) == 'fb' ? 'checked' : ''; ?>
							/>
						</div>
					</div>
					<!-- FB Like -->
					<div>
						<div class="section-title"><h3><?php _e(
									'Facebook Like button: ',
									'vkapi'
								);
								$temp = get_option( 'fbapi_show_like' ); ?></h3>
						</div>
					</div>
					<div>
						<div><select name="fbapi_show_like"
						             id="fbapi_show_like"
						             class="widefat">
								<option
									value="true"<?php selected( $temp, 'true' ); ?>><?php _e( 'Show', 'vkapi' ); ?></option>
								<option value="false"<?php selected( $temp, 'false' ); ?>><?php _e(
										'Dont show',
										'vkapi'
									); ?></option>
							</select></div>
					</div>
					<div>
						<div><label for="fbapi_like_cat"><?php _e(
									'Show in Categories page and Home:',
									'vkapi'
								); ?></label></div>
						<div>
							<input type="checkbox"
							       id="fbapi_like_cat"
							       name="fbapi_like_cat"
							       value="1" <?php echo get_option(
								'fbapi_like_cat'
							) ? 'checked' : ''; ?> />
						</div>
					</div>
				</div>


				<!--socialize-->
				<div id="page_sc"
				     class="page">
					<!-- PlusOne -->
					<div>
						<div class="section-title"><h3><?php _e( 'PlusOne button:', 'vkapi' );
								$temp = get_option(
									'gpapi_show_like'
								); ?></h3>
						</div>
					</div>
					<div>
						<div><select name="gpapi_show_like"
						             id="gpapi_show_like"
						             class="widefat">
								<option
									value="true"<?php selected( $temp, 'true' ); ?>><?php _e( 'Show', 'vkapi' ); ?></option>
								<option value="false"<?php selected( $temp, 'false' ); ?>><?php _e(
										'Dont show',
										'vkapi'
									); ?></option>
							</select></div>
					</div>
					<div>
						<div><label for="gpapi_like_cat"><?php _e(
									'Show in Categories page and Home:',
									'vkapi'
								); ?></label></div>
						<div>
							<input type="checkbox"
							       id="gpapi_like_cat"
							       name="gpapi_like_cat"
							       value="1" <?php echo get_option(
								'gpapi_like_cat'
							) ? 'checked' : ''; ?> />
						</div>
					</div>
					<!-- Twitter -->
					<div>
						<div class="section-title"><h3><?php _e( 'Tweet button:', 'vkapi' );
								$temp = get_option(
									'tweet_show_share'
								); ?></h3>
						</div>
					</div>
					<div>
						<div><select name="tweet_show_share"
						             id="tweet_show_share"
						             class="widefat">
								<option
									value="true"<?php selected( $temp, 'true' ); ?>><?php _e( 'Show', 'vkapi' ); ?></option>
								<option value="false"<?php selected( $temp, 'false' ); ?>><?php _e(
										'Dont show',
										'vkapi'
									); ?></option>
							</select></div>
					</div>
					<div>
						<div><label for="tweet_share_cat"><?php _e(
									'Show in Categories page and Home:',
									'vkapi'
								); ?></label></div>
						<div>
							<input type="checkbox"
							       id="tweet_share_cat"
							       name="tweet_share_cat"
							       value="1" <?php echo get_option(
								'tweet_share_cat'
							) ? 'checked' : ''; ?> />
						</div>
					</div>
					<div>
						<div><label for="tweet_account"><?php _e( 'Twitter account:', 'vkapi' ); ?></label>
						</div>
						<div><input type="text"
						            id="tweet_account"
						            name="tweet_account"
						            value="<?php echo get_option( 'tweet_account' ); ?>"/></div>
					</div>

					<!-- Mail.ru -->
					<div>
						<div class="section-title"><h3><?php _e(
									'Mail.ru button:',
									'vkapi'
								);
								$temp = get_option( 'mrc_show_share' ); ?></h3>
						</div>
					</div>
					<div>
						<div><select name="mrc_show_share"
						             id="mrc_show_share"
						             class="widefat">
								<option
									value="true"<?php selected( $temp, 'true' ); ?>><?php _e( 'Show', 'vkapi' ); ?></option>
								<option value="false"<?php selected( $temp, 'false' ); ?>><?php _e(
										'Dont show',
										'vkapi'
									); ?></option>
							</select></div>
					</div>
					<div>
						<div><label for="mrc_share_cat"><?php _e(
									'Show in Categories page and Home:',
									'vkapi'
								); ?></label></div>
						<div>
							<input type="checkbox"
							       id="mrc_share_cat"
							       name="mrc_share_cat"
							       value="1" <?php echo get_option(
								'mrc_share_cat'
							) ? 'checked' : ''; ?> />
						</div>
					</div>

					<!-- OK.ru -->
					<div>
						<div class="section-title"><h3><?php _e(
									'OK.ru button:',
									'vkapi'
								);
								$temp = get_option( 'ok_show_share' ); ?></h3>
						</div>
					</div>
					<div>
						<div><select name="ok_show_share"
						             id="ok_show_share"
						             class="widefat">
								<option
									value="true"<?php selected( $temp, 'true' ); ?>><?php _e( 'Show', 'vkapi' ); ?></option>
								<option value="false"<?php selected( $temp, 'false' ); ?>><?php _e(
										'Dont show',
										'vkapi'
									); ?></option>
							</select></div>
					</div>
					<div>
						<div><label for="ok_share_cat"><?php _e(
									'Show in Categories page and Home:',
									'vkapi'
								); ?></label></div>
						<div>
							<input type="checkbox"
							       id="ok_share_cat"
							       name="ok_share_cat"
							       value="1" <?php echo get_option(
								'ok_share_cat'
							) ? 'checked' : ''; ?> />
						</div>
					</div>

				</div>


				<!--other-->
				<div id="page_other"
				     class="page">
					<div>
						<div><label for="vkapi_show_first_wp">
								<?php printf(
									__(
										'Show first %s comments',
										'vkapi'
									),
									'WordPress'
								); ?></label></div>
						<div>
							<input
								type="radio"
								id="vkapi_show_first_wp"
								name="vkapi_show_first"
								value="wp"
								<?php echo get_option( 'vkapi_show_first' ) == 'wp' ? 'checked' : ''; ?>
							/>
						</div>
					</div>
					<!-- Non plugin -->
					<div>
						<div class="section-title"><h3><?php _e( 'No Plugin Options: ', 'vkapi' ); ?></h3>
						</div>
					</div>
					<div>
						<div><label
								for="vkapi_some_logo_e"><?php _e( 'Custom login logo:', 'vkapi' ); ?></label>
						</div>
						<div><input type="checkbox"
						            id="vkapi_some_logo_e"
						            name="vkapi_some_logo_e"
						            value="1" <?php echo get_option(
								'vkapi_some_logo_e'
							) ? 'checked' : ''; ?> /></div>
						<div><label for="vkapi_some_logo"><?php _e( 'Path :', 'vkapi' ); ?></label></div>
						<div>
							<a onclick='jQuery("#vkapi_some_logo").val("/wp-content/plugins/vkontakte-api/images/wordpress-logo.jpg");'>default</a>
							<br/><textarea rows="2"
							               cols="65"
							               placeholder="<?php _e( 'path to image...', 'vkapi' ); ?>"
							               id="vkapi_some_logo"
							               name="vkapi_some_logo"><?php echo get_option( 'vkapi_some_logo' ); ?></textarea>
						</div>
					</div>
					<div>
						<div><label for="vkapi_some_revision_d"><?php _e(
									'Disable Revision Post Save:',
									'vkapi'
								); ?></label></div>
						<div><input type="checkbox"
						            id="vkapi_some_revision_d"
						            name="vkapi_some_revision_d"
						            value="1" <?php echo get_option(
								'vkapi_some_revision_d'
							) ? 'checked' : ''; ?> /></div>
					</div>
				</div>


				<!-- Donate -->
				<div class="infofooter">

					<div class="info">

						<span class="description">
                            <?php _e( 'Support project (I need some eating...)', 'vkapi' ) ?>
                        </span>

						<p>
							Webmoney <b>R771756795015</b>, <b>U247198770431</b>, <b>Z163761330315</b>
						</p>

						<p>
							<iframe
								frameborder="0"
								allowtransparency="true"
								scrolling="no"
								src="https://money.yandex.ru/embed/donate.xml?account=410011126761075&quickpay=donate&payment-type-choice=on&default-sum=256&targets=VKontakte+API&project-name=VKontakte+API&project-site=https%3A%2F%2Fdarx.net%2Fprojects%2Fvkontakte-api&button-text=05&successURL=https%3A%2F%2Fdarx.net%2Fprojects%2Fvkontakte-api%23spasibo"
								width="100%"
								height="105"></iframe>
						</p>

                        <span class="description">
                            <?php _e( 'Thanks...', 'vkapi' ) ?>
                        </span>

						<p class="submit">
							<input type="submit"
							       class="button-primary"
							       value="<?php _e( 'Save Changes', 'vkapi' ) ?>"/>
						</p>
					</div>

					<div class="info2">

						<div class="kowack">
							<img src="//www.gravatar.com/avatar/<?php echo md5( 'kowack@gmail.com' ); ?>"
							     style="float:left"/>

							<p>
                                <span class="description">
                                    Разработчик:
                                </span>
							</p>

							<p>
                                <span class="description">
                                    <a href="https://vk.com/kowack" target="_blank">
	                                    Забродский Евгений
                                    </a>


                                </span>
							</p>
						</div>

						<div class="kowack">
							<p><span class="description">Группа:</span></p>
							<script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>
							<div id="vk_subscribe"></div>
							<script
								type="text/javascript">VK.Widgets.Subscribe("vk_subscribe", {}, -119710998);</script>
						</div>

						<div class="stats">
							<p><span class="description">Статистика:</span></p>

							<p id="stats"></p>

							<p>
								Плагин установлен на <?php echo get_option( 'vkapi__active_installs' ) ?><b>+</b>
								сайтах.
							</p>
						</div>
					</div>
				</div>
	</div>
</div>


<script type="text/javascript">
	jQuery(function ($) {

		$('#fb_admin').click(function () {
				if (typeof FB !== "undefined") {
					FB.login(function (response) {
						$('input#fbapi_admin_id').val(response.authResponse.userID);
					})
				} else {
					$(document.createElement('div')).attr('id', 'fb-root').appendTo($('body'));
					window.fbAsyncInit = function () {
						FB.init({
							appId: $('#fbapi_appid').val(), // App ID
							status: true, // check login status
							cookie: true, // enable cookies to allow the server to access the session
							xfbml: true  // parse XFBML
						});

						$('input#fbapi_admin_id').val(response.authResponse.userID);
					};

					(function (d) {
						var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
						if (d.getElementById(id)) {
							return;
						}
						js = d.createElement('script');
						js.id = id;
						js.async = true;
						js.src = "//connect.facebook.net/ru_RU/all.js";
						ref.parentNode.insertBefore(js, ref);
					}(document));
				}
			}
		);

		$('#vk_at').click(function () {
				window.open('https://oauth.vk.com/authorize?client_id=2742215&scope=groups,photos,wall,offline&redirect_uri=blank.html&display=page&response_type=token', 'CrossPost', '');
			}
		);

		$('#vk_at_input').on('change', function () {
			if ($('#vk_at_input').val().substring(0, 4) == 'http') {
				var search = $('#vk_at_input').val().split('#')[1];
				var parts = search.split("&");
				var $_GET = {};
				for (var i = 0; i < parts.length; i++) {
					var temp = parts[i].split("=");
					$_GET[decodeURIComponent(temp[0])] = decodeURIComponent(temp[1]);
				}
				$('#vk_at_input').val($_GET['access_token']);
			}
		});

		$('div.page').slideUp(0);
		$('#mymenu').on('click', 'li', function () {
			var page = '#page_' + $(this).attr('id');
			if ($(page).css('display') == 'none') {
				$('#mymenu').find('li').css({color: '#333'});
				$(this).css({color: '#21759b'});
				$('div.page').stop().slideUp(100);
				var speed = $(page).height();
				$(page).slideDown(speed);
			}
		});

		$.getJSON('https://api.wordpress.org/stats/plugin/1.0/downloads.php?slug=vkontakte-api&limit=730&callback=?', function (data) {
			var yesterday = 0;
			var lastWeek = 0;
			var lastMonth = 0;
			var count = 1;
			var arr = [];
			for (var value in data) {
				arr.unshift(data[value]);
			}
			$.each(arr, function (key, value) {
				if (count == 1) {
					yesterday = parseInt(value);
				}
				if (count < 8) {
					lastWeek += parseInt(value);
				}
				if (count < 32) {
					lastMonth += parseInt(value);
				}
				count++;
			});
			var string = "Вчера плагин скачали " + yesterday;
			string += ", за неделю " + lastWeek;
			string += ", а за последний месяц " + lastMonth + " раз.";

			$('#stats').html(string);
		});
	});

	function isNumber(n) {
		return !isNaN(parseFloat(n)) && isFinite(n);
	}

	function print_r(arr, level) {
		var print_red_text = "";
		if (!level) level = 0;
		var level_padding = "";
		for (var j = 0; j < level + 1; j++) level_padding += "    ";
		if (typeof(arr) == 'object') {
			for (var item in arr) {
				var value = arr[item];
				if (typeof(value) == 'object') {
					print_red_text += level_padding + "'" + item + "' :\n";
					print_red_text += print_r(value, level + 1);
				}
				else
					print_red_text += level_padding + "'" + item + "' => \"" + value + "\"\n";
			}
		}

		else  print_red_text = "===>" + arr + "<===(" + typeof(arr) + ")";
		return print_red_text;
	}
</script>

</table>
</form>
</div>