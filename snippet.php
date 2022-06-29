add_action('admin_menu', 'register_visibility_submenu_page');
function register_visibility_submenu_page() {
	if($_REQUEST['page'] == 'wc-settings'){
		echo '<style>.woocommerce nav a:nth-child(11){display: none;}</style>';
		if($_REQUEST['tab'] == 'general' || $_REQUEST['tab'] == 'products' || $_REQUEST['tab'] == 'shipping' || $_REQUEST['tab'] == 'checkout' || $_REQUEST['tab'] == 'account' || $_REQUEST['tab'] == 'email' || $_REQUEST['tab'] == 'integration' || $_REQUEST['tab'] == 'advanced'){
			echo '<style>.woocommerce nav a:last-child{display: none;}</style>';
		}else if($_REQUEST['tab'] == 'cmwcv_settings'){	
			echo '<style>
						.woocommerce nav a{display: none;}.woocommerce nav a:nth-child(11){display: none;}
						.toplevel_page_woocommerce .wp-submenu {padding:7px 0px 8px 20px  !important; display: none;}
						.woocommerce .subsubsub { margin: -8px 0 0; display: none; }
						.woocommerce nav.woo-nav-tab-wrapper { margin: 1.5em 0 1em; display: none; }
				  </style>';
			echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>';
		
		}
		
	}
    add_menu_page( 'Permissions/Allergens', 'Permissions/Allergens', 'manage_options', 'wc-settings&tab=cmwcv_settings&section=wcpv', 'show_menu_visibility','','50');
	   	  

}

function show_menu_visibility () {
    //cho 'Visibility';
}


