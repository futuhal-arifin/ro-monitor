<?php

//CONFIGURATION for SmartAdmin UI

//ribbon breadcrumbs config
//array("Display Name" => "URL");
$breadcrumbs = array(
	"Home" => APP_URL
);

/*navigation array config

ex:
"dashboard" => array(
	"title" => "Display Title",
	"url" => "http://yoururl.com",
	"url_target" => "_self",
	"icon" => "fa-home",
	"label_htm" => "<span>Add your custom label/badge html here</span>",
	"sub" => array() //contains array of sub items with the same format as the parent
)

*/
$page_nav = array(
	"dashboard" => array(
		"title" => "Dashboard",
		"url" => APP_URL,
		"icon" => "fa-home"
	),
	"inbox" => array(
		"title" => "RO Request",
		"url" => APP_URL."/inbox.php",
		"icon" => "fa-pencil-square-o"
	),
	"graphs" => array(
		"title" => "Improvement",
		"icon" => "fa-bar-chart-o",
		"sub" => array(
			"flot" => array(
				"title" => "Facility Request",
				"url" => APP_URL."/flot.php"
			),
			"morris" => array(
				"title" => "General Request",
				"url" => APP_URL."/morris.php"
			)
		)
	),
	"tables" => array(
		"title" => "Inventory",
		"icon" => "fa-table",
	)
	// "forms" => array(
	// 	"title" => "Forms",
	// 	"icon" => "fa-pencil-square-o",
	// 	"sub" => array(
	// 		"smart_elements" => array(
	// 			"title" => "Smart Form Elements",
	// 			"url" => APP_URL."/form-elements.php"
	// 		),
 //            "smart_layout" => array(
	// 			"title" => "Smart Form Layouts",
	// 			"url" => APP_URL."/form-templates.php"
	// 		),
 //            "smart_validation" => array(
	// 			"title" => "Smart Form Validation",
	// 			"url" => APP_URL."/validation.php"
	// 		),
 //            "bootstrap_forms" => array(
	// 			"title" => "Bootstrap Form Elements",
	// 			"url" => APP_URL."/bootstrap-forms.php"
	// 		),
 //            "form_plugins" => array(
	// 			"title" => "Form Plugins",
	// 			"url" => APP_URL."/plugins.php"
	// 		),
 //            "wizards" => array(
	// 			"title" => "Wizards",
	// 			"url" => APP_URL."/wizard.php"
	// 		),
 //            "bootstrap_editors" => array(
	// 			"title" => "Bootstrap Editors",
	// 			"url" => APP_URL."/other-editors.php"
	// 		),
 //            "dropzone" => array(
	// 			"title" => "Dropzone",
	// 			"url" => APP_URL."/dropzone.php"
	// 		),
	// 		"imagecrop" => array(
	// 			"title" => "Image Cropping",
	// 			"url" => APP_URL."/image-editor.php",
 //                "label_htm" => '<span class="badge pull-right inbox-badge bg-color-yellow">new</span>'
	// 		)
	// 	)
	// ),
 //    "ui_elements" => array(
 //        "title" => "UI Elements",
 //        "icon" => "fa-desktop",
 //        "sub" => array(
 //            "general" => array(
 //                "title" => "General Elements",
 //                "url" => APP_URL."/general-elements.php"
 //            ),
 //            "buttons" => array(
 //                "title" => "Buttons",
 //                "url" => APP_URL."/buttons.php"
 //            ),
 //            "icons" => array(
 //                "title" => "Icons",
 //                "sub" => array(
 //                    "fa" => array(
 //                        "title" => "Font Awesome",
 //                        "icon" => "fa-plane",
 //                        "url" => APP_URL."/fa.php"
 //                    ),
 //                    "glyph" => array(
 //                        "title" => "Glyph Icons",
 //                        "icon" => "fa-plane",
 //                        "url" => APP_URL."/glyph.php"
 //                    ),
 //                    "flags" => array(
 //                        "title" => "Flags",
 //                        "icon" => "fa-flag",
 //                        "url" => APP_URL."/flags.php"
 //                    )
 //                )
 //            ),
 //            "grid" => array(
 //                "title" => "Grid",
 //                "url" => APP_URL."/grid.php"
 //            ),
 //            "tree_view" => array(
 //                "title" => "Tree View",
 //                "url" => APP_URL."/treeview.php"
 //            ),
 //            "nestable_lists" => array(
 //                "title" => "Nestable Lists",
 //                "url" => APP_URL."/nestable-list.php"
 //            ),
 //            "jquery_ui" => array(
 //                "title" => "jQuery UI",
 //                "url" => APP_URL."/jqui.php"
 //            ),
	// 		"nav6" => array(
	// 			"title" => "Six Level Menu",
	// 			"sub" => array(
	// 				"second_lvl" => array(
	// 					"title" => "Item #2",
	// 					"icon" => "fa-folder-open",
	// 					"sub" => array(
	// 						"third_lvl" => array(
	// 							"title" => "Sub #2.1",
	// 							"icon" => "fa-folder-open",
	// 							"sub" => array(
	// 								"file" => array(
	// 									"title" => "Item #2.1.1",
	// 									"icon" => "fa-file-text"
	// 								),
	// 								"fourth_lvl" => array(
	// 									"title" => "Expand",
	// 									"icon" => "fa-plus",
	// 									"sub" => array(
	// 										"file" => array(
	// 											"title" => "File",
	// 											"icon" => "fa-file-text"
	// 										),
	// 										"fifth_lvl" => array(
	// 											"title" => "Delete",
	// 											"icon" => "fa-trash-o"
	// 										)
	// 									)
	// 								)
	// 							)
	// 						)
	// 					)
	// 				),
	// 				"folder" => array(
	// 					"title" => "Item #3",
	// 					"icon" => "fa-folder-open",
	// 					"sub" => array(
	// 						"third_lvl" => array(
	// 							"title" => "Sub #3.1",
	// 							"icon" => "fa-folder-open",
	// 							"sub" => array(
	// 								"file1" => array(
	// 									"title" => "File",
	// 									"icon" => "fa-file-text"
	// 								),
	// 								"file2" => array(
	// 									"title" => "File",
	// 									"icon" => "fa-file-text"
	// 								)
	// 							)
	// 						)
	// 					)
	// 				)
	// 			)
	// 		),
 //        )
 //    ),
 //    "cal" => array(
	// 	"title" => "Calendar",
	// 	"url" => APP_URL."/calendar.php",
	// 	"icon" => "fa-calendar",
	// 	"icon_badge" => "3"
	// ),
 //    "widgets" => array(
	// 	"title" => "Widgets",
	// 	"url" => APP_URL."/widgets.php",
	// 	"icon" => "fa-list-alt"
	// ),
 //    "gallery" => array(
	// 	"title" => "Gallery",
	// 	"url" => APP_URL."/gallery.php",
	// 	"icon" => "fa-picture-o"
	// ),
 //    "gmap_skins" => array(
	// 	"title" => "GMap Skins",
	// 	"url" => APP_URL."/gmap-xml.php",
	// 	"icon" => "fa-map-marker",
 //        "label_htm" => '<span class="badge bg-color-greenLight pull-right inbox-badge">9</span>'
	// ),
	// "misc" => array(
	// 	"title" => "Miscellaneous",
	// 	"icon" => "fa-windows",
	// 	"sub" => array(
	// 		"others" => array(
	// 	        "title" => "Other Pages",
	// 	        "icon" => "fa-file",
	// 	        "sub" => array(
	// 	            "forum" => array(
	// 	                "title" => "Forum Layout",
	// 	                "url" => APP_URL."/forum.php"
	// 	            ),
	// 	            "profile" => array(
	// 	                "title" => "Profile",
	// 	                "url" => APP_URL."/profile.php"
	// 	            ),
	// 	            "timeline" => array(
	// 	                "title" => "Timeline",
	// 	                "url" => APP_URL."/timeline.php"
	// 	            )
	// 	        )
	// 	    ),
 //            "typo" => array(
	// 			"title" => "Typography",
	// 			"url" => APP_URL."/typography.php"
	// 		),
 //            "pricing_tables" => array(
	// 			"title" => "Pricing Tables",
	// 			"url" => APP_URL."/pricing-table.php"
	// 		),
 //            "invoice" => array(
	// 			"title" => "Invoice",
	// 			"url" => APP_URL."/invoice.php"
	// 		),
 //            "login" => array(
	// 			"title" => "Login",
	// 			"url" => APP_URL."/login.php"
	// 		),
 //            "register" => array(
	// 			"title" => "Register",
	// 			"url" => APP_URL."/register.php"
	// 		),
 //            "lock" => array(
	// 			"title" => "Lock Screen",
	// 			"url" => APP_URL."/lock.php"
	// 		),
 //            "err_404" => array(
	// 			"title" => "Error 404",
	// 			"url" => APP_URL."/error404.php"
	// 		),
 //            "err_500" => array(
	// 			"title" => "Error 500",
	// 			"url" => APP_URL."/error500.php"
	// 		),
	// 		"blank" => array(
	// 			"title" => "Blank Page",
	// 			"url" => APP_URL."/blank_.php"
	// 		),
 //            "email_template" => array(
	// 			"title" => "Email Template",
	// 			"url" => APP_URL."/email-template.php"
	// 		),
 //            "search" => array(
	// 			"title" => "Search Page",
	// 			"url" => APP_URL."/search.php"
	// 		),
 //            "ck_editor" => array(
	// 			"title" => "CK Editor",
	// 			"url" => APP_URL."/ckeditor.php"
	// 		),
	// 	)
	// ),
	// "smartint" => array(
	// 	"title" => "SmartAdmin Intel",
	// 	"icon" => "fa-cube txt-color-blue",
	// 	"sub" => array(
	// 		"difver" => array(
	// 	        "title" => "Different Versions",
	// 	        "icon" => "fa-stack-overflow",
	// 	        "url" => APP_URL."/difver.php"
	// 	    ),
	// 	    "applayout" => array(
	// 	        "title" => "App Settings",
	// 	        "icon" => "fa-cube",
	// 	        "url" => APP_URL."/applayout.php"
	// 	    ),
	// 	   "doc" => array(
	// 	        "title" => "Documentation",
	// 	        "icon" => "fa-book",
	// 	        "url" => "http://bootstraphunter.com/smartadmin/BUGTRACK/track_/documentation/index.html",
	// 	        "url_target"=> "_blank"
	// 	    ),
	// 	   "bugtrack" => array(
	// 	        "title" => "Bug Tracker",
	// 	        "icon" => "fa-bug",
	// 	        "url" => "http://bootstraphunter.com/smartadmin/BUGTRACK/track_/",
	// 	        "url_target"=> "_blank"
	// 	    )
	// 	)
	// )
);

//configuration variables
$page_title = "";
$page_css = array();
$no_main_header = false; //set true for lock.php and login.php
$page_body_prop = array(); //optional properties for <body>
$page_html_prop = array(); //optional properties for <html>
?>