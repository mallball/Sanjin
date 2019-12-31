<?php 

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

 $fa_icons = array(
    'icon-glass' => 'icon-glass',
	  'icon-music' => 'icon-music',
	  'icon-search' => 'icon-search',
	  'icon-envelope-alt' => 'icon-envelope-alt',
	  'icon-heart' => 'icon-heart',
	  'icon-star' => 'icon-star',
	  'icon-star-empty' => 'icon-star-empty',
	  'icon-user' => 'icon-user',
	  'icon-film' => 'icon-film',
	  'icon-th-large' => 'icon-th-large',
	  'icon-th' => 'icon-th',
	  'icon-th-list' => 'icon-th-list',
	  'icon-ok' => 'icon-ok',
	  'icon-remove' => 'icon-remove',
	  'icon-zoom-in' => 'icon-zoom-in',
	  'icon-zoom-out' => 'icon-zoom-out',
	  'icon-off' => 'icon-off',
	  'icon-signal' => 'icon-signal',
	  'icon-cog' => 'icon-cog',
	  'icon-trash' => 'icon-trash',
	  'icon-home' => 'icon-home',
	  'icon-file-alt' => 'icon-file-alt',
	  'icon-time' => 'icon-time',
	  'icon-road' => 'icon-road',
	  'icon-download-alt' => 'icon-download-alt',
	  'icon-download' => 'icon-download',
	  'icon-upload' => 'icon-upload',
	  'icon-inbox' => 'icon-inbox',
	  'icon-play-circle' => 'icon-play-circle',
	  'icon-repeat' => 'icon-repeat',
	  'icon-refresh' => 'icon-refresh',
	  'icon-list-alt' => 'icon-list-alt',
	  'icon-lock' => 'icon-lock',
	  'icon-flag' => 'icon-flag',
	  'icon-headphones' => 'icon-headphones',
	  'icon-volume-off' => 'icon-volume-off',
	  'icon-volume-down' => 'icon-volume-down',
	  'icon-volume-up' => 'icon-volume-up',
	  'icon-qrcode' => 'icon-qrcode',
	  'icon-barcode' => 'icon-barcode',
	  'icon-tag' => 'icon-tag',
	  'icon-tags' => 'icon-tags',
	  'icon-book' => 'icon-book',
	  'icon-bookmark' => 'icon-bookmark',
	  'icon-print' => 'icon-print',
	  'icon-camera' => 'icon-camera',
	  'icon-font' => 'icon-font',
	  'icon-bold' => 'icon-bold',
	  'icon-italic' => 'icon-italic',
	  'icon-text-height' => 'icon-text-height',
	  'icon-text-width' => 'icon-text-width',
	  'icon-align-left' => 'icon-align-left',
	  'icon-align-center' => 'icon-align-center',
	  'icon-align-right' => 'icon-align-right',
	  'icon-align-justify' => 'icon-align-justify',
	  'icon-list' => 'icon-list',
	  'icon-indent-left' => 'icon-indent-left',
	  'icon-indent-right' => 'icon-indent-right',
	  'icon-facetime-video' => 'icon-facetime-video',
	  'icon-picture' => 'icon-picture',
	  'icon-pencil' => 'icon-pencil',
	  'icon-map-marker' => 'icon-map-marker',
	  'icon-adjust' => 'icon-adjust',
	  'icon-tint' => 'icon-tint',
	  'icon-edit' => 'icon-edit',
	  'icon-share' => 'icon-share',
	  'icon-check' => 'icon-check',
	  'icon-move' => 'icon-move',
	  'icon-step-backward' => 'icon-step-backward',
	  'icon-fast-backward' => 'icon-fast-backward',
	  'icon-backward' => 'icon-backward',
	  'icon-play' => 'icon-play',
	  'icon-pause' => 'icon-pause',
	  'icon-stop' => 'icon-stop',
	  'icon-forward' => 'icon-forward',
	  'icon-fast-forward' => 'icon-fast-forward',
	  'icon-step-forward' => 'icon-step-forward',
	  'icon-eject' => 'icon-eject',
	  'icon-chevron-left' => 'icon-chevron-left',
	  'icon-chevron-right' => 'icon-chevron-right',
	  'icon-plus-sign' => 'icon-plus-sign',
	  'icon-minus-sign' => 'icon-minus-sign',
	  'icon-remove-sign' => 'icon-remove-sign',
	  'icon-ok-sign' => 'icon-ok-sign',
	  'icon-question-sign' => 'icon-question-sign',
	  'icon-info-sign' => 'icon-info-sign',
	  'icon-screenshot' => 'icon-screenshot',
	  'icon-remove-circle' => 'icon-remove-circle',
	  'icon-ok-circle' => 'icon-ok-circle',
	  'icon-ban-circle' => 'icon-ban-circle',
	  'icon-arrow-left' => 'icon-arrow-left',
	  'icon-arrow-right' => 'icon-arrow-right',
	  'icon-arrow-up' => 'icon-arrow-up',
	  'icon-arrow-down' => 'icon-arrow-down',
	  'icon-share-alt' => 'icon-share-alt',
	  'icon-resize-full' => 'icon-resize-full',
	  'icon-resize-small' => 'icon-resize-small',
	  'icon-plus' => 'icon-plus',
	  'icon-minus' => 'icon-minus',
	  'icon-asterisk' => 'icon-asterisk',
	  'icon-exclamation-sign' => 'icon-exclamation-sign',
	  'icon-gift' => 'icon-gift',
	  'icon-leaf' => 'icon-leaf',
	  'icon-fire' => 'icon-fire',
	  'icon-eye-open' => 'icon-eye-open',
	  'icon-eye-close' => 'icon-eye-close',
	  'icon-warning-sign' => 'icon-warning-sign',
	  'icon-plane' => 'icon-plane',
	  'icon-calendar' => 'icon-calendar',
	  'icon-random' => 'icon-random',
	  'icon-comment' => 'icon-comment',
	  'icon-magnet' => 'icon-magnet',
	  'icon-chevron-up' => 'icon-chevron-up',
	  'icon-chevron-down' => 'icon-chevron-down',
	  'icon-retweet' => 'icon-retweet',
	  'icon-shopping-cart' => 'icon-shopping-cart',
	  'icon-folder-close' => 'icon-folder-close',
	  'icon-folder-open' => 'icon-folder-open',
	  'icon-resize-vertical' => 'icon-resize-vertical',
	  'icon-resize-horizontal' => 'icon-resize-horizontal',
	  'icon-bar-chart' => 'icon-bar-chart',
	  'icon-twitter-sign' => 'icon-twitter-sign',
	  'icon-facebook-sign' => 'icon-facebook-sign',
	  'icon-camera-retro' => 'icon-camera-retro',
	  'icon-key' => 'icon-key',
	  'icon-cogs' => 'icon-cogs',
	  'icon-comments' => 'icon-comments',
	  'icon-thumbs-up-alt' => 'icon-thumbs-up-alt',
	  'icon-thumbs-down-alt' => 'icon-thumbs-down-alt',
	  'icon-star-half' => 'icon-star-half',
	  'icon-heart-empty' => 'icon-heart-empty',
	  'icon-signout' => 'icon-signout',
	  'icon-linkedin-sign' => 'icon-linkedin-sign',
	  'icon-pushpin' => 'icon-pushpin',
	  'icon-external-link' => 'icon-external-link',
	  'icon-signin' => 'icon-signin',
	  'icon-trophy' => 'icon-trophy',
	  'icon-github-sign' => 'icon-github-sign',
	  'icon-upload-alt' => 'icon-upload-alt',
	  'icon-lemon' => 'icon-lemon',
	  'icon-phone' => 'icon-phone',
	  'icon-check-empty' => 'icon-check-empty',
	  'icon-bookmark-empty' => 'icon-bookmark-empty',
	  'icon-phone-sign' => 'icon-phone-sign',
	  'icon-twitter' => 'icon-twitter',
	  'icon-facebook' => 'icon-facebook',
	  'icon-github' => 'icon-github',
	  'icon-unlock' => 'icon-unlock',
	  'icon-credit-card' => 'icon-credit-card',
	  'icon-rss' => 'icon-rss',
	  'icon-hdd' => 'icon-hdd',
	  'icon-bullhorn' => 'icon-bullhorn',
	  'icon-bell' => 'icon-bell',
	  'icon-certificate' => 'icon-certificate',
	  'icon-hand-right' => 'icon-hand-right',
	  'icon-hand-left' => 'icon-hand-left',
	  'icon-hand-up' => 'icon-hand-up',
	  'icon-hand-down' => 'icon-hand-down',
	  'icon-circle-arrow-left' => 'icon-circle-arrow-left',
	  'icon-circle-arrow-right' => 'icon-circle-arrow-right',
	  'icon-circle-arrow-up' => 'icon-circle-arrow-up',
	  'icon-circle-arrow-down' => 'icon-circle-arrow-down',
	  'icon-globe' => 'icon-globe',
	  'icon-wrench' => 'icon-wrench',
	  'icon-tasks' => 'icon-tasks',
	  'icon-filter' => 'icon-filter',
	  'icon-briefcase' => 'icon-briefcase',
	  'icon-fullscreen' => 'icon-fullscreen',
	  'icon-group' => 'icon-group',
	  'icon-link' => 'icon-link',
	  'icon-cloud' => 'icon-cloud',
	  'icon-beaker' => 'icon-beaker',
	  'icon-cut' => 'icon-cut',
	  'icon-copy' => 'icon-copy',
	  'icon-paper-clip' => 'icon-paper-clip',
	  'icon-save' => 'icon-save',
	  'icon-sign-blank' => 'icon-sign-blank',
	  'icon-reorder' => 'icon-reorder',
	  'icon-list-ul' => 'icon-list-ul',
	  'icon-list-ol' => 'icon-list-ol',
	  'icon-strikethrough' => 'icon-strikethrough',
	  'icon-underline' => 'icon-underline',
	  'icon-table' => 'icon-table',
	  'icon-magic' => 'icon-magic',
	  'icon-truck' => 'icon-truck',
	  'icon-pinterest' => 'icon-pinterest',
	  'icon-pinterest-sign' => 'icon-pinterest-sign',
	  'icon-google-plus-sign' => 'icon-google-plus-sign',
	  'icon-google-plus' => 'icon-google-plus',
	  'icon-money' => 'icon-money',
	  'icon-caret-down' => 'icon-caret-down',
	  'icon-caret-up' => 'icon-caret-up',
	  'icon-caret-left' => 'icon-caret-left',
	  'icon-caret-right' => 'icon-caret-right',
	  'icon-columns' => 'icon-columns',
	  'icon-sort' => 'icon-sort',
	  'icon-sort-down' => 'icon-sort-down',
	  'icon-sort-up' => 'icon-sort-up',
	  'icon-envelope' => 'icon-envelope',
	  'icon-linkedin' => 'icon-linkedin',
	  'icon-undo' => 'icon-undo',
	  'icon-legal' => 'icon-legal',
	  'icon-dashboard' => 'icon-dashboard',
	  'icon-comment-alt' => 'icon-comment-alt',
	  'icon-comments-alt' => 'icon-comments-alt',
	  'icon-bolt' => 'icon-bolt',
	  'icon-sitemap' => 'icon-sitemap',
	  'icon-umbrella' => 'icon-umbrella',
	  'icon-paste' => 'icon-paste',
	  'icon-lightbulb' => 'icon-lightbulb',
	  'icon-exchange' => 'icon-exchange',
	  'icon-cloud-download' => 'icon-cloud-download',
	  'icon-cloud-upload' => 'icon-cloud-upload',
	  'icon-user-md' => 'icon-user-md',
	  'icon-stethoscope' => 'icon-stethoscope',
	  'icon-suitcase' => 'icon-suitcase',
	  'icon-bell-alt' => 'icon-bell-alt',
	  'icon-coffee' => 'icon-coffee',
	  'icon-food' => 'icon-food',
	  'icon-file-text-alt' => 'icon-file-text-alt',
	  'icon-building' => 'icon-building',
	  'icon-hospital' => 'icon-hospital',
	  'icon-ambulance' => 'icon-ambulance',
	  'icon-medkit' => 'icon-medkit',
	  'icon-fighter-jet' => 'icon-fighter-jet',
	  'icon-beer' => 'icon-beer',
	  'icon-h-sign' => 'icon-h-sign',
	  'icon-plus-sign-alt' => 'icon-plus-sign-alt',
	  'icon-double-angle-left' => 'icon-double-angle-left',
	  'icon-double-angle-right' => 'icon-double-angle-right',
	  'icon-double-angle-up' => 'icon-double-angle-up',
	  'icon-double-angle-down' => 'icon-double-angle-down',
	  'icon-angle-left' => 'icon-angle-left',
	  'icon-angle-right' => 'icon-angle-right',
	  'icon-angle-up' => 'icon-angle-up',
	  'icon-angle-down' => 'icon-angle-down',
	  'icon-desktop' => 'icon-desktop',
	  'icon-laptop' => 'icon-laptop',
	  'icon-tablet' => 'icon-tablet',
	  'icon-mobile-phone' => 'icon-mobile-phone',
	  'icon-circle-blank' => 'icon-circle-blank',
	  'icon-quote-left' => 'icon-quote-left',
	  'icon-quote-right' => 'icon-quote-right',
	  'icon-spinner' => 'icon-spinner',
	  'icon-circle' => 'icon-circle',
	  'icon-reply' => 'icon-reply',
	  'icon-github-alt' => 'icon-github-alt',
	  'icon-folder-close-alt' => 'icon-folder-close-alt',
	  'icon-folder-open-alt' => 'icon-folder-open-alt',
	  'icon-expand-alt' => 'icon-expand-alt',
	  'icon-collapse-alt' => 'icon-collapse-alt',
	  'icon-smile' => 'icon-smile',
	  'icon-frown' => 'icon-frown',
	  'icon-meh' => 'icon-meh',
	  'icon-gamepad' => 'icon-gamepad',
	  'icon-keyboard' => 'icon-keyboard',
	  'icon-flag-alt' => 'icon-flag-alt',
	  'icon-flag-checkered' => 'icon-flag-checkered',
	  'icon-terminal' => 'icon-terminal',
	  'icon-code' => 'icon-code',
	  'icon-reply-all' => 'icon-reply-all',
	  'icon-mail-reply-all' => 'icon-mail-reply-all',
	  'icon-star-half-empty' => 'icon-star-half-empty',
	  'icon-location-arrow' => 'icon-location-arrow',
	  'icon-crop' => 'icon-crop',
	  'icon-code-fork' => 'icon-code-fork',
	  'icon-unlink' => 'icon-unlink',
	  'icon-question' => 'icon-question',
	  'icon-info' => 'icon-info',
	  'icon-exclamation' => 'icon-exclamation',
	  'icon-superscript' => 'icon-superscript',
	  'icon-subscript' => 'icon-subscript',
	  'icon-eraser' => 'icon-eraser',
	  'icon-puzzle-piece' => 'icon-puzzle-piece',
	  'icon-microphone' => 'icon-microphone',
	  'icon-microphone-off' => 'icon-microphone-off',
	  'icon-shield' => 'icon-shield',
	  'icon-calendar-empty' => 'icon-calendar-empty',
	  'icon-fire-extinguisher' => 'icon-fire-extinguisher',
	  'icon-rocket' => 'icon-rocket',
	  'icon-maxcdn' => 'icon-maxcdn',
	  'icon-chevron-sign-left' => 'icon-chevron-sign-left',
	  'icon-chevron-sign-right' => 'icon-chevron-sign-right',
	  'icon-chevron-sign-up' => 'icon-chevron-sign-up',
	  'icon-chevron-sign-down' => 'icon-chevron-sign-down',
	  'icon-html5' => 'icon-html5',
	  'icon-css3' => 'icon-css3',
	  'icon-anchor' => 'icon-anchor',
	  'icon-unlock-alt' => 'icon-unlock-alt',
	  'icon-bullseye' => 'icon-bullseye',
	  'icon-ellipsis-horizontal' => 'icon-ellipsis-horizontal',
	  'icon-ellipsis-vertical' => 'icon-ellipsis-vertical',
	  'icon-rss-sign' => 'icon-rss-sign',
	  'icon-play-sign' => 'icon-play-sign',
	  'icon-ticket' => 'icon-ticket',
	  'icon-minus-sign-alt' => 'icon-minus-sign-alt',
	  'icon-check-minus' => 'icon-check-minus',
	  'icon-level-up' => 'icon-level-up',
	  'icon-level-down' => 'icon-level-down',
	  'icon-check-sign' => 'icon-check-sign',
	  'icon-edit-sign' => 'icon-edit-sign',
	  'icon-external-link-sign' => 'icon-external-link-sign',
	  'icon-share-sign' => 'icon-share-sign',
	  'icon-compass' => 'icon-compass',
	  'icon-collapse' => 'icon-collapse',
	  'icon-collapse-top' => 'icon-collapse-top',
	  'icon-expand' => 'icon-expand',
	  'icon-eur' => 'icon-eur',
	  'icon-gbp' => 'icon-gbp',
	  'icon-usd' => 'icon-usd',
	  'icon-inr' => 'icon-inr',
	  'icon-jpy' => 'icon-jpy',
	  'icon-cny' => 'icon-cny',
	  'icon-krw' => 'icon-krw',
	  'icon-btc' => 'icon-btc',
	  'icon-file' => 'icon-file',
	  'icon-file-text' => 'icon-file-text',
	  'icon-sort-by-alphabet' => 'icon-sort-by-alphabet',
	  'icon-sort-by-alphabet-alt' => 'icon-sort-by-alphabet-alt',
	  'icon-sort-by-attributes' => 'icon-sort-by-attributes',
	  'icon-sort-by-attributes-alt' => 'icon-sort-by-attributes-alt',
	  'icon-sort-by-order' => 'icon-sort-by-order',
	  'icon-sort-by-order-alt' => 'icon-sort-by-order-alt',
	  'icon-thumbs-up' => 'icon-thumbs-up',
	  'icon-thumbs-down' => 'icon-thumbs-down',
	  'icon-youtube-sign' => 'icon-youtube-sign',
	  'icon-youtube' => 'icon-youtube',
	  'icon-xing' => 'icon-xing',
	  'icon-xing-sign' => 'icon-xing-sign',
	  'icon-youtube-play' => 'icon-youtube-play',
	  'icon-dropbox' => 'icon-dropbox',
	  'icon-stackexchange' => 'icon-stackexchange',
	  'icon-instagram' => 'icon-instagram',
	  'icon-flickr' => 'icon-flickr',
	  'icon-adn' => 'icon-adn',
	  'icon-bitbucket' => 'icon-bitbucket',
	  'icon-bitbucket-sign' => 'icon-bitbucket-sign',
	  'icon-tumblr' => 'icon-tumblr',
	  'icon-tumblr-sign' => 'icon-tumblr-sign',
	  'icon-long-arrow-down' => 'icon-long-arrow-down',
	  'icon-long-arrow-up' => 'icon-long-arrow-up',
	  'icon-long-arrow-left' => 'icon-long-arrow-left',
	  'icon-long-arrow-right' => 'icon-long-arrow-right',
	  'icon-apple' => 'icon-apple',
	  'icon-windows' => 'icon-windows',
	  'icon-android' => 'icon-android',
	  'icon-linux' => 'icon-linux',
	  'icon-dribbble' => 'icon-dribbble',
	  'icon-skype' => 'icon-skype',
	  'icon-foursquare' => 'icon-foursquare',
	  'icon-trello' => 'icon-trello',
	  'icon-female' => 'icon-female',
	  'icon-male' => 'icon-male',
	  'icon-gittip' => 'icon-gittip',
	  'icon-sun' => 'icon-sun',
	  'icon-moon' => 'icon-moon',
	  'icon-archive' => 'icon-archive',
	  'icon-bug' => 'icon-bug',
	  'icon-vk' => 'icon-vk',
	  'icon-weibo' => 'icon-weibo',
	  'icon-renren' => 'icon-renren',
	  'fa-pagelines' => 'fa fa-pagelines',
	  'fa-stack-exchange' => 'fa fa-stack-exchange',
	  'fa-arrow-circle-o-right' => 'fa fa-arrow-circle-o-right',
	  'fa-arrow-circle-o-left' => 'fa fa-arrow-circle-o-left',
	  'fa-caret-square-o-left' => 'fa fa-caret-square-o-left',
	  'fa-dot-circle-o' => 'fa fa-dot-circle-o',
	  'fa-wheelchair' => 'fa fa-wheelchair',
	  'fa-vimeo-square' => 'fa fa-vimeo-square',
	  'fa-try' => 'fa fa-try',
	  'fa-plus-square-o' => 'fa fa-plus-square-o',
	  'fa-space-shuttle' => 'fa fa-space-shuttle',
	  'fa-slack' => 'fa fa-slack',
	  'fa-envelope-square' => 'fa fa-envelope-square',
	  'fa-wordpress' => 'fa fa-wordpress',
	  'fa-openid' => 'fa fa-openid',
	  'fa-university' => 'fa fa-university',
	  'fa-graduation-cap' => 'fa fa-graduation-cap',
	  'fa-yahoo' => 'fa fa-yahoo',
	  'fa-google' => 'fa fa-google',
	  'fa-reddit' => 'fa fa-reddit',
	  'fa-reddit-square' => 'fa fa-reddit-square',
	  'fa-stumbleupon-circle' => 'fa fa-stumbleupon-circle',
	  'fa-stumbleupon' => 'fa fa-stumbleupon',
	  'fa-delicious' => 'fa fa-delicious',
	  'fa-digg' => 'fa fa-digg',
	  'fa-pied-piper-pp' => 'fa fa-pied-piper-pp',
	  'fa-pied-piper-alt' => 'fa fa-pied-piper-alt',
	  'fa-drupal' => 'fa fa-drupal',
	  'fa-joomla' => 'fa fa-joomla',
	  'fa-language' => 'fa fa-language',
	  'fa-fax' => 'fa fa-fax',
	  'fa-building' => 'fa fa-building',
	  'fa-child' => 'fa fa-child',
	  'fa-paw' => 'fa fa-paw',
	  'fa-spoon' => 'fa fa-spoon',
	  'fa-cube' => 'fa fa-cube',
	  'fa-cubes' => 'fa fa-cubes',
	  'fa-behance' => 'fa fa-behance',
	  'fa-behance-square' => 'fa fa-behance-square',
	  'fa-steam' => 'fa fa-steam',
	  'fa-steam-square' => 'fa fa-steam-square',
	  'fa-recycle' => 'fa fa-recycle',
	  'fa-car' => 'fa fa-car',
	  'fa-taxi' => 'fa fa-taxi',
	  'fa-tree' => 'fa fa-tree',
	  'fa-spotify' => 'fa fa-spotify',
	  'fa-deviantart' => 'fa fa-deviantart',
	  'fa-soundcloud' => 'fa fa-soundcloud',
	  'fa-database' => 'fa fa-database',
	  'fa-file-pdf-o' => 'fa fa-file-pdf-o',
	  'fa-file-word-o' => 'fa fa-file-word-o',
	  'fa-file-excel-o' => 'fa fa-file-excel-o',
	  'fa-file-powerpoint-o' => 'fa fa-file-powerpoint-o',
	  'fa-file-image-o' => 'fa fa-file-image-o',
	  'fa-file-archive-o' => 'fa fa-file-archive-o',
	  'fa-file-audio-o' => 'fa fa-file-audio-o',
	  'fa-file-video-o' => 'fa fa-file-video-o',
	  'fa-file-code-o' => 'fa fa-file-code-o',
	  'fa-vine' => 'fa fa-vine',
	  'fa-codepen' => 'fa fa-codepen',
	  'fa-jsfiddle' => 'fa fa-jsfiddle',
	  'fa-life-ring' => 'fa fa-life-ring',
	  'fa-circle-o-notch' => 'fa fa-circle-o-notch',
	  'fa-rebel' => 'fa fa-rebel',
	  'fa-empire' => 'fa fa-empire',
	  'fa-git-square' => 'fa fa-git-square',
	  'fa-git' => 'fa fa-git',
	  'fa-hacker-news' => 'fa fa-hacker-news',
	  'fa-tencent-weibo' => 'fa fa-tencent-weibo',
	  'fa-qq' => 'fa fa-qq',
	  'fa-weixin' => 'fa fa-weixin',
	  'fa-paper-plane' => 'fa fa-paper-plane',
	  'fa-paper-plane-o' => 'fa fa-paper-plane-o',
	  'fa-history' => 'fa fa-history',
	  'fa-circle-thin' => 'fa fa-circle-thin',
	  'fa-header' => 'fa fa-header',
	  'fa-paragraph' => 'fa fa-paragraph',
	  'fa-sliders' => 'fa fa-sliders',
	  'fa-share-alt' => 'fa fa-share-alt',
	  'fa-share-alt-square' => 'fa fa-share-alt-square',
	  'fa-bomb' => 'fa fa-bomb',
	  'fa-futbol-o' => 'fa fa-futbol-o',
	  'fa-tty' => 'fa fa-tty',
	  'fa-binoculars' => 'fa fa-binoculars',
	  'fa-plug' => 'fa fa-plug',
	  'fa-slideshare' => 'fa fa-slideshare',
	  'fa-twitch' => 'fa fa-twitch',
	  'fa-yelp' => 'fa fa-yelp',
	  'fa-newspaper-o' => 'fa fa-newspaper-o',
	  'fa-wifi' => 'fa fa-wifi',
	  'fa-calculator' => 'fa fa-calculator',
	  'fa-paypal' => 'fa fa-paypal',
	  'fa-google-wallet' => 'fa fa-google-wallet',
	  'fa-cc-visa' => 'fa fa-cc-visa',
	  'fa-cc-mastercard' => 'fa fa-cc-mastercard',
	  'fa-cc-discover' => 'fa fa-cc-discover',
	  'fa-cc-amex' => 'fa fa-cc-amex',
	  'fa-cc-paypal' => 'fa fa-cc-paypal',
	  'fa-cc-stripe' => 'fa fa-cc-stripe',
	  'fa-bell-slash' => 'fa fa-bell-slash',
	  'fa-bell-slash-o' => 'fa fa-bell-slash-o',
	  'fa-trash' => 'fa fa-trash',
	  'fa-copyright' => 'fa fa-copyright',
	  'fa-at' => 'fa fa-at',
	  'fa-eyedropper' => 'fa fa-eyedropper',
	  'fa-paint-brush' => 'fa fa-paint-brush',
	  'fa-birthday-cake' => 'fa fa-birthday-cake',
	  'fa-area-chart' => 'fa fa-area-chart',
	  'fa-pie-chart' => 'fa fa-pie-chart',
	  'fa-line-chart' => 'fa fa-line-chart',
	  'fa-lastfm' => 'fa fa-lastfm',
	  'fa-lastfm-square' => 'fa fa-lastfm-square',
	  'fa-toggle-off' => 'fa fa-toggle-off',
	  'fa-toggle-on' => 'fa fa-toggle-on',
	  'fa-bicycle' => 'fa fa-bicycle',
	  'fa-bus' => 'fa fa-bus',
	  'fa-ioxhost' => 'fa fa-ioxhost',
	  'fa-angellist' => 'fa fa-angellist',
	  'fa-cc' => 'fa fa-cc',
	  'fa-ils' => 'fa fa-ils',
	  'fa-meanpath' => 'fa fa-meanpath',
	  'fa-buysellads' => 'fa fa-buysellads',
	  'fa-connectdevelop' => 'fa fa-connectdevelop',
	  'fa-dashcube' => 'fa fa-dashcube',
	  'fa-forumbee' => 'fa fa-forumbee',
	  'fa-leanpub' => 'fa fa-leanpub',
	  'fa-sellsy' => 'fa fa-sellsy',
	  'fa-shirtsinbulk' => 'fa fa-shirtsinbulk',
	  'fa-simplybuilt' => 'fa fa-simplybuilt',
	  'fa-skyatlas' => 'fa fa-skyatlas',
	  'fa-cart-plus' => 'fa fa-cart-plus',
	  'fa-cart-arrow-down' => 'fa fa-cart-arrow-down',
	  'fa-diamond' => 'fa fa-diamond',
	  'fa-ship' => 'fa fa-ship',
	  'fa-user-secret' => 'fa fa-user-secret',
	  'fa-motorcycle' => 'fa fa-motorcycle',
	  'fa-street-view' => 'fa fa-street-view',
	  'fa-heartbeat' => 'fa fa-heartbeat',
	  'fa-venus' => 'fa fa-venus',
	  'fa-mars' => 'fa fa-mars',
	  'fa-mercury' => 'fa fa-mercury',
	  'fa-transgender' => 'fa fa-transgender',
	  'fa-transgender-alt' => 'fa fa-transgender-alt',
	  'fa-venus-double' => 'fa fa-venus-double',
	  'fa-mars-double' => 'fa fa-mars-double',
	  'fa-venus-mars' => 'fa fa-venus-mars',
	  'fa-mars-stroke' => 'fa fa-mars-stroke',
	  'fa-mars-stroke-v' => 'fa fa-mars-stroke-v',
	  'fa-mars-stroke-h' => 'fa fa-mars-stroke-h',
	  'fa-neuter' => 'fa fa-neuter',
	  'fa-genderless' => 'fa fa-genderless',
	  'fa-facebook-official' => 'fa fa-facebook-official',
	  'fa-pinterest-p' => 'fa fa-pinterest-p',
	  'fa-whatsapp' => 'fa fa-whatsapp',
	  'fa-server' => 'fa fa-server',
	  'fa-user-plus' => 'fa fa-user-plus',
	  'fa-user-times' => 'fa fa-user-times',
	  'fa-bed' => 'fa fa-bed',
	  'fa-viacoin' => 'fa fa-viacoin',
	  'fa-train' => 'fa fa-train',
	  'fa-subway' => 'fa fa-subway',
	  'fa-medium' => 'fa fa-medium',
	  'fa-y-combinator' => 'fa fa-y-combinator',
	  'fa-optin-monster' => 'fa fa-optin-monster',
	  'fa-opencart' => 'fa fa-opencart',
	  'fa-expeditedssl' => 'fa fa-expeditedssl',
	  'fa-battery-full' => 'fa fa-battery-full',
	  'fa-battery-three-quarters' => 'fa fa-battery-three-quarters',
	  'fa-battery-half' => 'fa fa-battery-half',
	  'fa-battery-quarter' => 'fa fa-battery-quarter',
	  'fa-battery-empty' => 'fa fa-battery-empty',
	  'fa-mouse-pointer' => 'fa fa-mouse-pointer',
	  'fa-i-cursor' => 'fa fa-i-cursor',
	  'fa-object-group' => 'fa fa-object-group',
	  'fa-object-ungroup' => 'fa fa-object-ungroup',
	  'fa-sticky-note' => 'fa fa-sticky-note',
	  'fa-sticky-note-o' => 'fa fa-sticky-note-o',
	  'fa-cc-jcb' => 'fa fa-cc-jcb',
	  'fa-cc-diners-club' => 'fa fa-cc-diners-club',
	  'fa-clone' => 'fa fa-clone',
	  'fa-balance-scale' => 'fa fa-balance-scale',
	  'fa-hourglass-o' => 'fa fa-hourglass-o',
	  'fa-hourglass-start' => 'fa fa-hourglass-start',
	  'fa-hourglass-half' => 'fa fa-hourglass-half',
	  'fa-hourglass-end' => 'fa fa-hourglass-end',
	  'fa-hourglass' => 'fa fa-hourglass',
	  'fa-hand-rock-o' => 'fa fa-hand-rock-o',
	  'fa-hand-paper-o' => 'fa fa-hand-paper-o',
	  'fa-hand-scissors-o' => 'fa fa-hand-scissors-o',
	  'fa-hand-lizard-o' => 'fa fa-hand-lizard-o',
	  'fa-hand-spock-o' => 'fa fa-hand-spock-o',
	  'fa-hand-pointer-o' => 'fa fa-hand-pointer-o',
	  'fa-hand-peace-o' => 'fa fa-hand-peace-o',
	  'fa-trademark' => 'fa fa-trademark',
	  'fa-registered' => 'fa fa-registered',
	  'fa-creative-commons' => 'fa fa-creative-commons',
	  'fa-gg' => 'fa fa-gg',
	  'fa-gg-circle' => 'fa fa-gg-circle',
	  'fa-tripadvisor' => 'fa fa-tripadvisor',
	  'fa-odnoklassniki' => 'fa fa-odnoklassniki',
	  'fa-odnoklassniki-square' => 'fa fa-odnoklassniki-square',
	  'fa-get-pocket' => 'fa fa-get-pocket',
	  'fa-wikipedia-w' => 'fa fa-wikipedia-w',
	  'fa-safari' => 'fa fa-safari',
	  'fa-chrome' => 'fa fa-chrome',
	  'fa-firefox' => 'fa fa-firefox',
	  'fa-opera' => 'fa fa-opera',
	  'fa-internet-explorer' => 'fa fa-internet-explorer',
	  'fa-television' => 'fa fa-television',
	  'fa-contao' => 'fa fa-contao',
	  'fa-500px' => 'fa fa-500px',
	  'fa-amazon' => 'fa fa-amazon',
	  'fa-calendar-plus-o' => 'fa fa-calendar-plus-o',
	  'fa-calendar-minus-o' => 'fa fa-calendar-minus-o',
	  'fa-calendar-times-o' => 'fa fa-calendar-times-o',
	  'fa-calendar-check-o' => 'fa fa-calendar-check-o',
	  'fa-industry' => 'fa fa-industry',
	  'fa-map-pin' => 'fa fa-map-pin',
	  'fa-map-signs' => 'fa fa-map-signs',
	  'fa-map-o' => 'fa fa-map-o',
	  'fa-map' => 'fa fa-map',
	  'fa-commenting' => 'fa fa-commenting',
	  'fa-commenting-o' => 'fa fa-commenting-o',
	  'fa-houzz' => 'fa fa-houzz',
	  'fa-vimeo' => 'fa fa-vimeo',
	  'fa-black-tie' => 'fa fa-black-tie',
	  'fa-fonticons' => 'fa fa-fonticons',
	  'fa-reddit-alien' => 'fa fa-reddit-alien',
	  'fa-edge' => 'fa fa-edge',
	  'fa-credit-card-alt' => 'fa fa-credit-card-alt',
	  'fa-codiepie' => 'fa fa-codiepie',
	  'fa-modx' => 'fa fa-modx',
	  'fa-fort-awesome' => 'fa fa-fort-awesome',
	  'fa-usb' => 'fa fa-usb',
	  'fa-product-hunt' => 'fa fa-product-hunt',
	  'fa-mixcloud' => 'fa fa-mixcloud',
	  'fa-scribd' => 'fa fa-scribd',
	  'fa-pause-circle' => 'fa fa-pause-circle',
	  'fa-pause-circle-o' => 'fa fa-pause-circle-o',
	  'fa-stop-circle' => 'fa fa-stop-circle',
	  'fa-stop-circle-o' => 'fa fa-stop-circle-o',
	  'fa-shopping-bag' => 'fa fa-shopping-bag',
	  'fa-shopping-basket' => 'fa fa-shopping-basket',
	  'fa-hashtag' => 'fa fa-hashtag',
	  'fa-bluetooth' => 'fa fa-bluetooth',
	  'fa-bluetooth-b' => 'fa fa-bluetooth-b',
	  'fa-percent' => 'fa fa-percent',
	  'fa-gitlab' => 'fa fa-gitlab',
	  'fa-wpbeginner' => 'fa fa-wpbeginner',
	  'fa-wpforms' => 'fa fa-wpforms',
	  'fa-envira' => 'fa fa-envira',
	  'fa-universal-access' => 'fa fa-universal-access',
	  'fa-wheelchair-alt' => 'fa fa-wheelchair-alt',
	  'fa-question-circle-o' => 'fa fa-question-circle-o',
	  'fa-blind' => 'fa fa-blind',
	  'fa-audio-description' => 'fa fa-audio-description',
	  'fa-volume-control-phone' => 'fa fa-volume-control-phone',
	  'fa-braille' => 'fa fa-braille',
	  'fa-assistive-listening-systems' => 'fa fa-assistive-listening-systems',
	  'fa-american-sign-language-interpreting' => 'fa fa-american-sign-language-interpreting',
	  'fa-deaf' => 'fa fa-deaf',
	  'fa-glide' => 'fa fa-glide',
	  'fa-glide-g' => 'fa fa-glide-g',
	  'fa-sign-language' => 'fa fa-sign-language',
	  'fa-low-vision' => 'fa fa-low-vision',
	  'fa-viadeo' => 'fa fa-viadeo',
	  'fa-viadeo-square' => 'fa fa-viadeo-square',
	  'fa-snapchat' => 'fa fa-snapchat',
	  'fa-snapchat-ghost' => 'fa fa-snapchat-ghost',
	  'fa-snapchat-square' => 'fa fa-snapchat-square',
	  'fa-pied-piper' => 'fa fa-pied-piper',
	  'fa-first-order' => 'fa fa-first-order',
	  'fa-yoast' => 'fa fa-yoast',
	  'fa-themeisle' => 'fa fa-themeisle',
	  'fa-google-plus-official' => 'fa fa-google-plus-official',
	  'fa-font-awesome' => 'fa fa-font-awesome'

);
	
$steadysets = array(
	  'steadysets-icon-type' => 'steadysets-icon-type',
	  'steadysets-icon-box' => 'steadysets-icon-box',
	  'steadysets-icon-archive' => 'steadysets-icon-archive',
	  'steadysets-icon-envelope' => 'steadysets-icon-envelope',
	  'steadysets-icon-email' => 'steadysets-icon-email',
	  'steadysets-icon-files' => 'steadysets-icon-files',
	  'steadysets-icon-uniE606' => 'steadysets-icon-uniE606',
	  'steadysets-icon-connection-empty' => 'steadysets-icon-connection-empty',
	  'steadysets-icon-connection-25' => 'steadysets-icon-connection-25',
	  'steadysets-icon-connection-50' => 'steadysets-icon-connection-50',
	  'steadysets-icon-connection-75' => 'steadysets-icon-connection-75',
	  'steadysets-icon-connection-full' => 'steadysets-icon-connection-full',
	  'steadysets-icon-microphone' => 'steadysets-icon-microphone',
	  'steadysets-icon-microphone-off' => 'steadysets-icon-microphone-off',
	  'steadysets-icon-book' => 'steadysets-icon-book',
	  'steadysets-icon-cloud' => 'steadysets-icon-cloud',
	  'steadysets-icon-book2' => 'steadysets-icon-book2',
	  'steadysets-icon-star' => 'steadysets-icon-star',
	  'steadysets-icon-phone-portrait' => 'steadysets-icon-phone-portrait',
	  'steadysets-icon-phone-landscape' => 'steadysets-icon-phone-landscape',
	  'steadysets-icon-tablet' => 'steadysets-icon-tablet',
	  'steadysets-icon-tablet-landscape' => 'steadysets-icon-tablet-landscape',
	  'steadysets-icon-laptop' => 'steadysets-icon-laptop',
	  'steadysets-icon-uniE617' => 'steadysets-icon-uniE617',
	  'steadysets-icon-barbell' => 'steadysets-icon-barbell',
	  'steadysets-icon-stopwatch' => 'steadysets-icon-stopwatch',
	  'steadysets-icon-atom' => 'steadysets-icon-atom',
	  'steadysets-icon-syringe' => 'steadysets-icon-syringe',
	  'steadysets-icon-pencil' => 'steadysets-icon-pencil',
	  'steadysets-icon-chart' => 'steadysets-icon-chart',
	  'steadysets-icon-bars' => 'steadysets-icon-bars',
	  'steadysets-icon-cube' => 'steadysets-icon-cube',
	  'steadysets-icon-image' => 'steadysets-icon-image',
	  'steadysets-icon-crop' => 'steadysets-icon-crop',
	  'steadysets-icon-graph' => 'steadysets-icon-graph',
	  'steadysets-icon-select' => 'steadysets-icon-select',
	  'steadysets-icon-bucket' => 'steadysets-icon-bucket',
	  'steadysets-icon-mug' => 'steadysets-icon-mug',
	  'steadysets-icon-clipboard' => 'steadysets-icon-clipboard',
	  'steadysets-icon-lab' => 'steadysets-icon-lab',
	  'steadysets-icon-bones' => 'steadysets-icon-bones',
	  'steadysets-icon-pill' => 'steadysets-icon-pill',
	  'steadysets-icon-bolt' => 'steadysets-icon-bolt',
	  'steadysets-icon-health' => 'steadysets-icon-health',
	  'steadysets-icon-map-marker' => 'steadysets-icon-map-marker',
	  'steadysets-icon-stack' => 'steadysets-icon-stack',
	  'steadysets-icon-newspaper' => 'steadysets-icon-newspaper',
	  'steadysets-icon-uniE62F' => 'steadysets-icon-uniE62F',
	  'steadysets-icon-coffee' => 'steadysets-icon-coffee',
	  'steadysets-icon-bill' => 'steadysets-icon-bill',
	  'steadysets-icon-sun' => 'steadysets-icon-sun',
	  'steadysets-icon-vcard' => 'steadysets-icon-vcard',
	  'steadysets-icon-shorts' => 'steadysets-icon-shorts',
	  'steadysets-icon-drink' => 'steadysets-icon-drink',
	  'steadysets-icon-diamond' => 'steadysets-icon-diamond',
	  'steadysets-icon-bag' => 'steadysets-icon-bag',
	  'steadysets-icon-calculator' => 'steadysets-icon-calculator',
	  'steadysets-icon-credit-cards' => 'steadysets-icon-credit-cards',
	  'steadysets-icon-microwave-oven' => 'steadysets-icon-microwave-oven',
	  'steadysets-icon-camera' => 'steadysets-icon-camera',
	  'steadysets-icon-share' => 'steadysets-icon-share',
	  'steadysets-icon-bullhorn' => 'steadysets-icon-bullhorn',
	  'steadysets-icon-user' => 'steadysets-icon-user',
	  'steadysets-icon-users' => 'steadysets-icon-users',
	  'steadysets-icon-user2' => 'steadysets-icon-user2',
	  'steadysets-icon-users2' => 'steadysets-icon-users2',
	  'steadysets-icon-unlocked' => 'steadysets-icon-unlocked',
	  'steadysets-icon-unlocked2' => 'steadysets-icon-unlocked2',
	  'steadysets-icon-lock' => 'steadysets-icon-lock',
	  'steadysets-icon-forbidden' => 'steadysets-icon-forbidden',
	  'steadysets-icon-switch' => 'steadysets-icon-switch',
	  'steadysets-icon-meter' => 'steadysets-icon-meter',
	  'steadysets-icon-flag' => 'steadysets-icon-flag',
	  'steadysets-icon-home' => 'steadysets-icon-home',
	  'steadysets-icon-printer' => 'steadysets-icon-printer',
	  'steadysets-icon-clock' => 'steadysets-icon-clock',
	  'steadysets-icon-calendar' => 'steadysets-icon-calendar',
	  'steadysets-icon-comment' => 'steadysets-icon-comment',
	  'steadysets-icon-chat-3' => 'steadysets-icon-chat-3',
	  'steadysets-icon-chat-2' => 'steadysets-icon-chat-2',
	  'steadysets-icon-chat-1' => 'steadysets-icon-chat-1',
	  'steadysets-icon-chat' => 'steadysets-icon-chat',
	  'steadysets-icon-zoom-out' => 'steadysets-icon-zoom-out',
	  'steadysets-icon-zoom-in' => 'steadysets-icon-zoom-in',
	  'steadysets-icon-search' => 'steadysets-icon-search',
	  'steadysets-icon-trashcan' => 'steadysets-icon-trashcan',
	  'steadysets-icon-tag' => 'steadysets-icon-tag',
	  'steadysets-icon-download' => 'steadysets-icon-download',
	  'steadysets-icon-paperclip' => 'steadysets-icon-paperclip',
	  'steadysets-icon-checkbox' => 'steadysets-icon-checkbox',
	  'steadysets-icon-checkbox-checked' => 'steadysets-icon-checkbox-checked',
	  'steadysets-icon-checkmark' => 'steadysets-icon-checkmark',
	  'steadysets-icon-refresh' => 'steadysets-icon-refresh',
	  'steadysets-icon-reload' => 'steadysets-icon-reload',
	  'steadysets-icon-arrow-right' => 'steadysets-icon-arrow-right',
	  'steadysets-icon-arrow-down' => 'steadysets-icon-arrow-down',
	  'steadysets-icon-arrow-up' => 'steadysets-icon-arrow-up',
	  'steadysets-icon-arrow-left' => 'steadysets-icon-arrow-left',
	  'steadysets-icon-settings' => 'steadysets-icon-settings',
	  'steadysets-icon-battery-full' => 'steadysets-icon-battery-full',
	  'steadysets-icon-battery-75' => 'steadysets-icon-battery-75',
	  'steadysets-icon-battery-50' => 'steadysets-icon-battery-50',
	  'steadysets-icon-battery-25' => 'steadysets-icon-battery-25',
	  'steadysets-icon-battery-empty' => 'steadysets-icon-battery-empty',
	  'steadysets-icon-battery-charging' => 'steadysets-icon-battery-charging',
	  'steadysets-icon-uniE669' => 'steadysets-icon-uniE669',
	  'steadysets-icon-grid' => 'steadysets-icon-grid',
	  'steadysets-icon-list' => 'steadysets-icon-list',
	  'steadysets-icon-wifi-low' => 'steadysets-icon-wifi-low',
	  'steadysets-icon-folder-check' => 'steadysets-icon-folder-check',
	  'steadysets-icon-folder-settings' => 'steadysets-icon-folder-settings',
	  'steadysets-icon-folder-add' => 'steadysets-icon-folder-add',
	  'steadysets-icon-folder' => 'steadysets-icon-folder',
	  'steadysets-icon-window' => 'steadysets-icon-window',
	  'steadysets-icon-windows' => 'steadysets-icon-windows',
	  'steadysets-icon-browser' => 'steadysets-icon-browser',
	  'steadysets-icon-file-broken' => 'steadysets-icon-file-broken',
	  'steadysets-icon-align-justify' => 'steadysets-icon-align-justify',
	  'steadysets-icon-align-center' => 'steadysets-icon-align-center',
	  'steadysets-icon-align-right' => 'steadysets-icon-align-right',
	  'steadysets-icon-align-left' => 'steadysets-icon-align-left',
	  'steadysets-icon-file' => 'steadysets-icon-file',
	  'steadysets-icon-file-add' => 'steadysets-icon-file-add',
	  'steadysets-icon-file-settings' => 'steadysets-icon-file-settings',
	  'steadysets-icon-mute' => 'steadysets-icon-mute',
	  'steadysets-icon-heart' => 'steadysets-icon-heart',
	  'steadysets-icon-enter' => 'steadysets-icon-enter',
	  'steadysets-icon-volume-decrease' => 'steadysets-icon-volume-decrease',
	  'steadysets-icon-wifi-mid' => 'steadysets-icon-wifi-mid',
	  'steadysets-icon-volume' => 'steadysets-icon-volume',
	  'steadysets-icon-bookmark' => 'steadysets-icon-bookmark',
	  'steadysets-icon-screen' => 'steadysets-icon-screen',
	  'steadysets-icon-map' => 'steadysets-icon-map',
	  'steadysets-icon-measure' => 'steadysets-icon-measure',
	  'steadysets-icon-eyedropper' => 'steadysets-icon-eyedropper',
	  'steadysets-icon-support' => 'steadysets-icon-support',
	  'steadysets-icon-phone' => 'steadysets-icon-phone',
	  'steadysets-icon-email2' => 'steadysets-icon-email2',
	  'steadysets-icon-volume-increase' => 'steadysets-icon-volume-increase',
	  'steadysets-icon-wifi-full' => 'steadysets-icon-wifi-full'
);

$linecons = array(
	  'linecon-icon-heart' => 'linecon-icon-heart',
	  'linecon-icon-cloud' => 'linecon-icon-cloud',
	  'linecon-icon-star' => 'linecon-icon-star',
	  'linecon-icon-tv' => 'linecon-icon-tv',
	  'linecon-icon-sound' => 'linecon-icon-sound',
	  'linecon-icon-video' => 'linecon-icon-video',
	  'linecon-icon-trash' => 'linecon-icon-trash',
	  'linecon-icon-user' => 'linecon-icon-user',
	  'linecon-icon-key' => 'linecon-icon-key',
	  'linecon-icon-search' => 'linecon-icon-search',
	  'linecon-icon-eye' => 'linecon-icon-eye',
	  'linecon-icon-bubble' => 'linecon-icon-bubble',
	  'linecon-icon-stack' => 'linecon-icon-stack',
	  'linecon-icon-cup' => 'linecon-icon-cup',
	  'linecon-icon-phone' => 'linecon-icon-phone',
	  'linecon-icon-news' => 'linecon-icon-news',
	  'linecon-icon-mail' => 'linecon-icon-mail',
	  'linecon-icon-like' => 'linecon-icon-like',
	  'linecon-icon-photo' => 'linecon-icon-photo',
	  'linecon-icon-note' => 'linecon-icon-note',
	  'linecon-icon-food' => 'linecon-icon-food',
	  'linecon-icon-t-shirt' => 'linecon-icon-t-shirt',
	  'linecon-icon-fire' => 'linecon-icon-fire',
	  'linecon-icon-clip' => 'linecon-icon-clip',
	  'linecon-icon-shop' => 'linecon-icon-shop',
	  'linecon-icon-calendar' => 'linecon-icon-calendar',
	  'linecon-icon-wallet' => 'linecon-icon-wallet',
	  'linecon-icon-vynil' => 'linecon-icon-vynil',
	  'linecon-icon-truck' => 'linecon-icon-truck',
	  'linecon-icon-world' => 'linecon-icon-world',
	  'linecon-icon-clock' => 'linecon-icon-clock',
	  'linecon-icon-paperplane' => 'linecon-icon-paperplane',
	  'linecon-icon-params' => 'linecon-icon-params',
	  'linecon-icon-banknote' => 'linecon-icon-banknote',
	  'linecon-icon-data' => 'linecon-icon-data',
	  'linecon-icon-music' => 'linecon-icon-music',
	  'linecon-icon-megaphone' => 'linecon-icon-megaphone',
	  'linecon-icon-study' => 'linecon-icon-study',
	  'linecon-icon-lab' => 'linecon-icon-lab',
	  'linecon-icon-location' => 'linecon-icon-location',
	  'linecon-icon-display' => 'linecon-icon-display',
	  'linecon-icon-diamond' => 'linecon-icon-diamond',
	  'linecon-icon-pen' => 'linecon-icon-pen',
	  'linecon-icon-bulb' => 'linecon-icon-bulb',
	  'linecon-icon-lock' => 'linecon-icon-lock',
	  'linecon-icon-tag' => 'linecon-icon-tag',
	  'linecon-icon-camera' => 'linecon-icon-camera',
	  'linecon-icon-settings' => 'linecon-icon-settings'
);

$icon_arr = array_merge($fa_icons, $steadysets, $linecons);

	return array(
	  "name" => esc_html__("Text With Icon", "salient-core"),
	  "base" => "text-with-icon",
	  "icon" => "icon-wpb-text-with-icon",
	  "category" => esc_html__('Nectar Elements', 'salient-core'),
	  "weight" => 1,
	  "description" => esc_html__('Add a text block with stylish icon', 'salient-core'),
	  "params" => array(
	    array(
		  "type" => "dropdown",
		  "heading" => esc_html__("Icon Type", "salient-core"),
		  "param_name" => "icon_type",
		  "admin_label" => true,
		  "value" => array(
			 "Font Icon" => "font_icon",
			 "Image Icon" => "image_icon",
		   ),
		  'save_always' => true,
		  "description" => esc_html__("Please select type of icon you would like for the text block", "salient-core")
		),
		array(
		  "type" => "dropdown",
		  "heading" => esc_html__("Icon", "salient-core"),
		  "param_name" => "icon",
		  "admin_label" => false,
		  "value" => $icon_arr,
		  'save_always' => true,
		  "description" => esc_html__("Please select the icon you wish to use", "salient-core"),
		  "dependency" => Array('element' => "icon_type", 'value' => array('font_icon'))
		),
	     array(
		  "type" => "dropdown",
		  "heading" => esc_html__("Color", "salient-core"),
		  "param_name" => "color",
		  "admin_label" => false,
		  'save_always' => true,
		  "value" => array(
			 esc_html__( "Accent Color", "salient-core") => "Accent-Color",
 			 esc_html__( "Extra Color 1", "salient-core") => "Extra-Color-1",
 			 esc_html__( "Extra Color 2", "salient-core") => "Extra-Color-2",	
 			 esc_html__( "Extra Color 3", "salient-core") => "Extra-Color-3",
		   ),
		  'description' => esc_html__( 'Choose a color from your','salient-core') . ' <a target="_blank" href="'. esc_url(admin_url()) .'?page=Salient&tab=6"> ' . esc_html__('globally defined color scheme','salient-core') . '</a>',
		  "dependency" => Array('element' => "icon_type", 'value' => array('font_icon'))
		),
		array(
			"type" => "attach_image",
			"class" => "",
			"heading" => esc_html__("Icon Image", "salient-core"),
			"param_name" => "icon_image",
			"value" => "",
			"description" => "",
			"dependency" => Array('element' => "icon_type", 'value' => array('image_icon'))
		),
		array(
	      "type" => "textarea_html",
	      "holder" => "div",
	      "heading" => esc_html__("Text Content", "salient-core"),
	      "param_name" => "content",
	      "value" => ''
	    )
	  )
	);


?>