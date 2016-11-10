<?php 
/* ------------------------------------------------------------------------ */
/* VC Extendes */
/* ------------------------------------------------------------------------ */


vc_map( array(
   "name" => __("Price Table",'orangeidea'),
   "base" => "vc_price",
   "class" => "",
   "icon" => "icon-wpb-price_table",
   "admin_enqueue_css" => array(get_template_directory_uri().'/vc_extend/style.css'),
   "category" => __('Content','orangeidea'),
   "params" => array(
	  array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("It will be special table?",'orangeidea'),
         "param_name" => "price_spec",
         "value" => __("0",'orangeidea'),
		 "description" => __("1 or 0",'orangeidea')
      ),
	  
	  array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Price Title",'orangeidea'),
         "param_name" => "price_title",
         "value" => __("Business Plan",'orangeidea'),
      ),
	  
	  array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Amount",'orangeidea'),
         "param_name" => "price_amount",
         "value" => __("10",'orangeidea'),
      ),
	  array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Currency",'orangeidea'),
         "param_name" => "price_cur",
         "value" => __("$",'orangeidea'),
      ),
	  array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Date",'orangeidea'),
         "param_name" => "price_date",
         "value" => __("per month",'orangeidea'),
      ),

      array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => __("Header background color",'orangeidea'),
         "param_name" => "price_head_bg",
         "value" => '#ff5c00',
      ),
	  
	  array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => __("Header text color",'orangeidea'),
         "param_name" => "price_title_color",
         "value" => '#ffffff',
      ),


	   array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Text on the button",'orangeidea'),
         "param_name" => "text_on_button",
         "value" => __("Order Now",'orangeidea'),
      ),
	  
	   array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Button URL",'orangeidea'),
         "param_name" => "url_on_button",
         "value" => __("#",'orangeidea'),
      ),

      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content",'orangeidea'),
         "param_name" => "content",
         "value" => __("<ul><li>1</li><li>2</li><li>3</li></ul>",'orangeidea'),
      )
   )
) );








vc_map( array(
   "name" => __("Gallery-Slider",'orangeidea'),
   "base" => "vc_oi_gallery",
   "class" => "",
   "icon" => "icon-wpb-price_table",
   "admin_enqueue_css" => array(get_template_directory_uri().'/vc_extend/style.css'),
   "category" => __('Content', 'orangeidea'),
   "params" => array(
    array(
      "type" => "attach_images",
      "heading" => __("Images", "js_composer"),
      "param_name" => "images",
      "value" => "",
      "description" => __("Select images from media library.", "js_composer")
    )
   )
) );















vc_map( array(
   "name" => __("Team Member",'orangeidea'),
   "base" => "vc_team_member",
   "class" => "",
   "icon" => "icon-wpb-team_member",
   "admin_enqueue_css" => array(get_template_directory_uri().'/vc_extend/style.css'),
   "category" => __('Content', 'orangeidea'),
   "params" => array(
	  array(
         "type" => "attach_image",
         "class" => "",
         "heading" => __("Member Photo",'orangeidea'),
         "param_name" => "image",
         "value" => __("",'orangeidea'),
      ),
	  array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Name",'orangeidea'),
         "param_name" => "name",
         "value" => __("Jhon Doe",'orangeidea'),
      ),
	  
	  array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Position In Company",'orangeidea'),
         "param_name" => "position",
         "value" => __("My Position In Company",'orangeidea'),
         "description" => __("",'orangeidea')
      ),
	  array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Contact text",'orangeidea'),
         "param_name" => "welcome",
         "value" => __("Text above the icons",'orangeidea'),
      ),
	  array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("URL to Facebook page",'orangeidea'),
         "param_name" => "fb_url",
         "value" => __("",'orangeidea'),
      ),
	   array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("URL to Twitter page",'orangeidea'),
         "param_name" => "tw_url",
         "value" => __("",'orangeidea'),
      ),
	   array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("URL to Google plus page",'orangeidea'),
         "param_name" => "gplus_url",
         "value" => __("",'orangeidea'),
      ),
	   array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("URL to LinkedIn page",'orangeidea'),
         "param_name" => "in_url",
         "value" => __("",'orangeidea'),
      ),
	  
	   array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("e-mail",'orangeidea'),
         "param_name" => "mail_url",
         "value" => __("",'orangeidea'),
      ),

      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content",'orangeidea'),
         "param_name" => "content",
         "value" => __("<p>I am test text block. Click edit button to change this text.</p>",'orangeidea'),
         "description" => __('Enter your content.', 'orangeidea')
      )
   )
) );










vc_map( array(
   "name" => __("Testimonial I",'orangeidea'),
   "base" => "testimonial_i",
   "class" => "",
   "icon" => "icon-wpb-testimonial",
   "admin_enqueue_css" => array(get_template_directory_uri().'/vc_extend/style.css'),
   "category" => __('Content', 'orangeidea'),
   "params" => array(
	  array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Want to stick with header?",'orangeidea'),
         "param_name" => "title",
         "value" => __("Testimonial Author",'orangeidea'),
      ),
	  array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Date",'orangeidea'),
         "param_name" => "date",
         "value" => __("Testimonial date",'orangeidea'),
      ),
	  
	  array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Rating",'orangeidea'),
         "param_name" => "rating",
         "value" => __("5",'orangeidea'),
         "description" => __("From 1 to 5",'orangeidea')
      ),
	  array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Company",'orangeidea'),
         "param_name" => "company",
         "value" => __("Testimonial Company",'orangeidea'),
      ),
	  array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("URL to Company Site",'orangeidea'),
         "param_name" => "cpmpany_url",
         "value" => __("#",'orangeidea'),
      ),
	   array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Author Image",'orangeidea'),
         "param_name" => "image",
         "value" => __("http://html.orange-idea.com/splendor/wp-content/uploads/2013/08/proff.png",'orangeidea'),
         "description" => __("Past url to your image",'orangeidea')
      ),
	  array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Image Style",'orangeidea'),
         "param_name" => "image_style",
         "value" => __("1",'orangeidea'),
		 "description" => __("1 -  Image Circle, 2 -  Image Rounded conors, 3 -  Image Polaroid Style",'orangeidea')
      ),
      array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => __("Background color",'orangeidea'),
         "param_name" => "bg",
         "value" => '#ffffff',
         "description" => __("Choose background color",'orangeidea')
      ),
	  array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => __("Border color",'orangeidea'),
         "param_name" => "border",
         "value" => '#f6f6f6',
         "description" => __("Choose border color",'orangeidea')
      ),
	  array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text color",'orangeidea'),
         "param_name" => "color",
         "value" => '#666666',
         "description" => __("Choose text color",'orangeidea')
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content",'orangeidea'),
         "param_name" => "content",
         "value" => __("<p>I am test text block. Click edit button to change this text.</p>",'orangeidea'),
         "description" => __("Enter your content.", 'orangeidea')
      )
   )
) );










vc_map( array(
   "name" => __("Icon Box I",'orangeidea'),
   "base" => "vc_box",
   "class" => "",
   "icon" => "icon-wpb-vc_box_i",
   "admin_enqueue_css" => array(get_template_directory_uri().'/vc_extend/style.css'),
   "category" => __('Content', 'orangeidea'),
   "params" => array(
	  array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Want to stick with header?",'orangeidea'),
         "param_name" => "title",
         "value" => __("Box Title",'orangeidea'),
         "description" => __("Enter the box title",'orangeidea')
      ),
	  array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon Background color",'orangeidea'),
         "param_name" => "icon_bg",
         "value" => '#ff5c00', 
         "description" => __("Choose Icon Background color",'orangeidea')
      ),
	   array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Icon",'orangeidea'),
         "param_name" => "icon",
         "value" => __("http://html.orange-idea.com/splendor/wp-content/themes/splendor/assets/img/plane.png",'orangeidea'),
         "description" => __("Past url to your icon",'orangeidea')
      ),
      array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => __("Background color",'orangeidea'),
         "param_name" => "bg",
         "value" => '#f9f9f9',
         "description" => __("Choose text color",'orangeidea')
      ),
	  array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => __("Border color",'orangeidea'),
         "param_name" => "border",
         "value" => '#ededed',
         "description" => __("Choose Border color",'orangeidea')
      ),
	  array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text color",'orangeidea'),
         "param_name" => "color",
         "value" => '#666666',
         "description" => __("Choose text color",'orangeidea')
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content",'orangeidea'),
         "param_name" => "content",
         "value" => __("<p>I am test text block. Click edit button to change this text.</p>",'orangeidea'),
         "description" => __("Enter your content.", 'orangeidea')
      )
   )
) );







vc_map( array(
   "name" => __("Icon Box II",'orangeidea'),
   "base" => "vc_box_ii",
   "class" => "",
   "icon" => "icon-wpb-vc_box_ii",
   "admin_enqueue_css" => array(get_template_directory_uri().'/vc_extend/style.css'),
   "category" => __('Content', 'orangeidea'),
   "params" => array(
	  array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Want to stick with header?",'orangeidea'),
         "param_name" => "title",
         "value" => __("Box Title",'orangeidea'),
         "description" => __("Enter the box title",'orangeidea')
      ),
	  array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon Background color",'orangeidea'),
         "param_name" => "icon_bg",
         "value" => '#ff5c00', 
         "description" => __("Choose Icon Background color",'orangeidea')
      ),
	   array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Icon",'orangeidea'),
         "param_name" => "icon",
         "value" => __("http://html.orange-idea.com/splendor/wp-content/themes/splendor/assets/img/plane.png",'orangeidea'),
         "description" => __("Past url to your icon",'orangeidea')
      ),
      array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => __("Background color",'orangeidea'),
         "param_name" => "bg",
         "value" => '#ffffff',
         "description" => __("Choose text color",'orangeidea')
      ),
	  array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => __("Border color",'orangeidea'),
         "param_name" => "border",
         "value" => '#ededed',
         "description" => __("Choose Border color",'orangeidea')
      ),
	  array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text color",'orangeidea'),
         "param_name" => "color",
         "value" => '#666666',
         "description" => __("Choose text color",'orangeidea')
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content",'orangeidea'),
         "param_name" => "content",
         "value" => __("<p>I am test text block. Click edit button to change this text.</p>",'orangeidea'),
         "description" => __("Enter your content.", 'orangeidea')
      )
   )
) );






vc_map( array(
   "name" => __("Icon Box III",'orangeidea'),
   "base" => "vc_box_iii",
   "class" => "",
   "icon" => "icon-wpb-vc_box_iii",
   "admin_enqueue_css" => array(get_template_directory_uri().'/vc_extend/style.css'),
   "category" => __('Content', 'orangeidea'),
   "params" => array(
	  array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Want to stick with header?",'orangeidea'),
         "param_name" => "title",
         "value" => __("Box Title",'orangeidea'),
         "description" => __("Enter the box title", 'orangeidea')
      ),
	   array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Icon",'orangeidea'),
         "param_name" => "icon",
         "value" => __("http://html.orange-idea.com/splendor/wp-content/themes/splendor/assets/img/or-plane.png",'orangeidea'),
         "description" => __("Past url to your icon",'orangeidea')
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content",'orangeidea'),
         "param_name" => "content",
         "value" => __("<p>I am test text block. Click edit button to change this text.</p>",'orangeidea'),
         "description" => __("Enter your content.", 'orangeidea')
      )
   )
) );




vc_map( array(
   "name" => __("Icon Box IV",'orangeidea'),
   "base" => "vc_box_iv",
   "class" => "",
   "icon" => "icon-wpb-vc_box_iv",
   "admin_enqueue_css" => array(get_template_directory_uri().'/vc_extend/style.css'),
   "category" => __('Content', 'orangeidea'),
   "params" => array(
	  array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Want to stick with header?",'orangeidea'),
         "param_name" => "title",
         "value" => __("Box Title",'orangeidea'),
         "description" => __("Enter the box title",'orangeidea')
      ),
	   array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Icon",'orangeidea'),
         "param_name" => "icon",
         "value" => __("fa-ban",'orangeidea'),
         "description" => __("FontAwesom icon", 'orangeidea')
      ),
	  
	   array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon Color",'orangeidea'),
         "param_name" => "iconcolor",
         "value" => '#fff',
         "description" => __("Choose icon color", 'orangeidea')
      ),
	  
	   array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon Background Color",'orangeidea'),
         "param_name" => "bgcolor",
         "value" => '#000',
         "description" => __("Choose icon background  color", 'orangeidea')
      ),
	  
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content",'orangeidea'),
         "param_name" => "content",
         "value" => __("<p>I am test text block. Click edit button to change this text.</p>",'orangeidea'),
         "description" => __("Enter your content.", 'orangeidea')
      )
   )
) );







vc_map( array(
   "name" => __("Achievements",'orangeidea'),
   "base" => "achievements",
   "class" => "",
   "icon" => "icon-wpb-ach",
   "admin_enqueue_css" => array(get_template_directory_uri().'/vc_extend/style.css'),
   "category" => __('Content', 'orangeidea'),
   "params" => array(
	  array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Achievement Title",'orangeidea'),
         "param_name" => "title",
         "value" => __("123",'orangeidea'),
         "description" => __("Enter the achievement title", 'orangeidea')
      ),
	  array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text color",'orangeidea'),
         "param_name" => "color",
         "value" => '#ff5c00',
         "description" => __("Choose text color", 'orangeidea')
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content",'orangeidea'),
         "param_name" => "content",
         "value" => __("<p>I am test text block. Click edit button to change this text.</p>",'orangeidea'),
         "description" => __("Enter your content.", 'orangeidea')
      )
   )
) );










vc_map( array(
   "name" => __("Content Break",'orangeidea'),
   "base" => "c_break",
   "class" => "",
   "icon" => "icon-wpb-c_break",
   "admin_enqueue_css" => array(get_template_directory_uri().'/vc_extend/style.css'),
   "category" => __('Content', 'orangeidea'),
   "params" => array(
	  
	  
	  
	   
	    array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Top Margin",'orangeidea'),
         "param_name" => "m_t",
         "value" => __("40px",'orangeidea'),
         "description" => __("", 'orangeidea')
      ),
	  
	   array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Bottom Margin",'orangeidea'),
         "param_name" => "m_b",
         "value" => __("40px",'orangeidea'),
         "description" => __("", 'orangeidea')
      ),
	  
	   array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Top Padding",'orangeidea'),
         "param_name" => "p_t",
         "value" => __("40px",'orangeidea'),
         "description" => __("", 'orangeidea')
      ),
	  array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Bottom Padding",'orangeidea'),
         "param_name" => "p_b",
         "value" => __("40px",'orangeidea'),
         "description" => __("", 'orangeidea')
      ),
	   
	   array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Fix content on the center?",'orangeidea'),
         "param_name" => "fixed",
         "value" => __("1",'orangeidea'),
         "description" => __("Set '0' if you want to stretch content and '1' if you don't want.", 'orangeidea')
      ),
      
	  array(
         "type" => "attach_image",
         "class" => "",
         "heading" => __("Background Image",'orangeidea'),
         "param_name" => "image",
         "value" => __("",'orangeidea'),
      ),
	  
	  array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => __("BackGround color",'orangeidea'),
         "param_name" => "bg",
         "value" => '#f9f9f9',
         "description" => __("Choose text color", 'orangeidea')
      ),
	  array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => __("Border color",'orangeidea'),
         "param_name" => "border",
         "value" => '',
         "description" => __("Choose Border color", 'orangeidea')
      ),
	  array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text color",'orangeidea'),
         "param_name" => "color",
         "value" => '#3a3a3a',
         "description" => __("Choose text color", 'orangeidea')
      ),
	  
	  array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Want to add extra class name?",'orangeidea'),
         "param_name" => "extraclass",
         "value" => __("",'orangeidea'),
         "description" => __("Extra class name", 'orangeidea')
      ),
	  
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content",'orangeidea'),
         "param_name" => "content",
         "value" => __("<p>I am test text block. Click edit button to change this text.</p>",'orangeidea'),
         "description" => __("Enter your content.", 'orangeidea')
      )
   )
) );





vc_map( array(
   "name" => __("Full Paralax",'orangeidea'),
   "base" => "c_break_full_paralax_break",
   "class" => "",
   "icon" => "icon-wpb-full_paralax",
   "admin_enqueue_css" => array(get_template_directory_uri().'/vc_extend/style.css'),
   "category" => __('Content', 'orangeidea'),
   "params" => array(

	  
	  
	   array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Fix content on the center?",'orangeidea'),
         "param_name" => "fixed",
         "value" => __("1",'orangeidea'),
         "description" => __("Set '0' if you want to stretch content and '1' if you don't want.", 'orangeidea')
      ),
	  
	
	
	    array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Top Margin",'orangeidea'),
         "param_name" => "m_t",
         "value" => __("40px",'orangeidea'),
         "description" => __("", 'orangeidea')
      ),
	  
	   array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Bottom Margin",'orangeidea'),
         "param_name" => "m_b",
         "value" => __("40px",'orangeidea'),
         "description" => __("", 'orangeidea')
      ),
	  
	   array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Top Padding",'orangeidea'),
         "param_name" => "p_t",
         "value" => __("40px",'orangeidea'),
         "description" => __("", 'orangeidea')
      ),
	  array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Bottom Padding",'orangeidea'),
         "param_name" => "p_b",
         "value" => __("40px",'orangeidea'),
         "description" => __("", 'orangeidea')
      ),
	array(
         "type" => "attach_image",
         "class" => "",
         "heading" => __("Upload LeftSide Background image",'orangeidea'),
         "param_name" => "image",
         "value" => __("",'orangeidea'),
      ),
   

      array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => __("RightSide BackGround color",'orangeidea'),
         "param_name" => "bgcolor",
         "value" => '#e9e8e4',
         "description" => __("Choose text color", 'orangeidea')
      ),
	   array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Want to add extra class name?",'orangeidea'),
         "param_name" => "extraclass",
         "value" => __("",'orangeidea'),
         "description" => __("Extra class name", 'orangeidea')
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => __("Content",'orangeidea'),
         "param_name" => "content",
         "value" => __("<p>I am test text block. Click edit button to change this text.</p>",'orangeidea'),
         "description" => __("Enter your content.", 'orangeidea')
      )
   )
) );






/* ------------------------------------------------------------------------ */
/* / Tis if for Visual Composer Content Break shortcode/
/* ------------------------------------------------------------------------ */

add_filter( 'the_content', 'my_div_form' );
function my_div_form($text) {
	$regexp_code = "|\[vc_row(.*)\](.*)\[/vc_row\]|imuUs";
	preg_match_all($regexp_code,$text,$out);
	$text_out ="";
	foreach($out[0] as $val){
		$regexp_code1 = "|\[c_break(.*)\[/c_break(.*)\]|imuUs";
		preg_match_all($regexp_code1,$val,$out1);
		if(count($out1[1])>0){
			foreach($out1[0] as $key_c =>$val_c){
				$text_out .= $out1[0][$key_c];
			}
		}else{
			$text_out .= $val;
		}
		
	}
	if(count($out[0]) == 0){
		$text_out = $text;
	}
    return $text_out;
}
?>