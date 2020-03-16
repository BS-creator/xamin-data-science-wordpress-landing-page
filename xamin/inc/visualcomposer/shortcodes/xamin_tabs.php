<?php 
vc_map(array(
    "name"           => esc_html__("Tab" , "xamin"),
    "base"           => "iq_tab",
    "as_parent"      => array("only" => "iq_inner_item"),
    "category"       => esc_html__( "Xamin Shortcodes","xamin" ),
    "js_view"        => "VcColumnView",
    "content_element"         => true,
    "show_settings_on_create" => true,
    "icon"          => "icon-wpb-xamintab",
    "params" => array(

        array(
            "type"          => "dropdown",
            "admin_label"   => true,
            "heading"       => esc_html__("Tabs Style", "xamin"),
            "param_name"    => "tabs_style",
            "value" => array(
                "Vertical"    => "1",
                "Horizontal"  => "2",
            )
        ),

        array(
            "type"          => "dropdown",
            "admin_label"   => true,
            "heading"       => esc_html__("Vertical Tabs Style", "xamin"),
            "param_name"    => "vertical_style",
            "value" => array(
                "Style 1"    => "1",
                "Style 2"    => "2",
                "Style 3"    => "3",
            ),
            'dependency' => array(
                    'element' => 'tabs_style',
                    'value' => '1',
                ),
        ),

        array(
            "type"          => "dropdown",
            "admin_label"   => true,
            "heading"       => esc_html__("Horizontal Tabs Style", "xamin"),
            "param_name"    => "horizontal_style",
            "value" => array(
                "Style 1"    => "1",
                "Style 2"    => "2",
                "Style 3"    => "3",
            ),
            'dependency' => array(
                    'element' => 'tabs_style',
                    'value' => '2',
                ),
        ),

        array(
            "heading" 		=> esc_html__( "Title Element Tag","xamin" ),
            "description" 	=> esc_html__( "Element Tag of the title text.","xamin"),
            "type" 			=> "dropdown",
            "param_name" 	=> "tag",
            "edit_field_class" => "vc_col-xs-6",
            "value" => array(
                            "1" => "h2",
                            "2" => "h3",
                            "3" => "h4",
                            "4" => "h5",
                            "5" => "h6",
                        ),
        ),

        array(
            "heading"       => esc_html__( "Element Position","xamin" ),
            "description"   => esc_html__( "Position of the title text.","xamin"),
            "type"          => "dropdown",
            "edit_field_class" => "vc_col-xs-6",
            "param_name"    => "position",
            "value" => array(
                        "Left" =>  "left",
                        "Center" => "center",
                        "Right" => "right",
                    ),
        ),

        array(
            "type"        => "textfield",
            "heading"     => esc_html__( "Extra class name","xamin" ),
            "param_name"  => "extra_class",
            "group" => esc_html__( "Extra Class", "xamin" ),
            "description" => esc_html__( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.","xamin" )
        ),

        array(
            "type" => "css_editor",
            "heading" => esc_html__( "Css", "xamin" ),
            "param_name" => "css",
            "group" => esc_html__( "Design options", "xamin" ),
        ),

    )
));  

vc_map(array(
    "name" => __("Xamin Tab", "xamin"),
    "base" => "iq_inner_item",
    "as_child" => array("only" => "iq_tab"),
    "as_parent"         => array(""),
    "allowed_container_element" => "vc_row",
    "js_view"                   => "VcColumnView",
    "icon" => "extended-custom-icon-wdo icon-wpb-advanced-tab",
    "params" => array_merge(
        array(
            
            array(
                "type" => "textfield",
                "holder" => "div",
                "admin_label" => true,
                "heading" => esc_html__("Tab Title", "xamin"),
                "param_name" => "tab_title",
                "description" => esc_html__("Will be displayed as the name of tab.","xamin"),
            ),

             array(
                "heading"       => esc_html__( "Tab Content","sofbox" ),
                "description"   => esc_html__( "Enter the Tab content.","sofbox"),
                "type"          => "textarea",
                "param_name"    => "tab_content",
                "default" => esc_html__("It is a long established fact that a reader will be distracted by the of readable.","sofbox"),
                'dependency' => array(
                    'element' => 'vertical_style',
                    'value' => '3',
                ),
            ),

            array(
                "heading"       => esc_html__( "Tab Image","xamin" ),
                "description"   => esc_html__( "Add Image in Tab","xamin"),
                "type"          => "dropdown",
                "param_name"    => "tab_img",
                "value"         => array(
                                        "Yes" => "0",
                                        "No" => "1",
                                   ),
            ),

            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Image", "xamin" ),
                "param_name"  => "iq_image",
                "description" => "Select image/icon from library.",
                "group" => esc_html__( "Image", "xamin" ),
                "dependency"  => array
                            (
                            "element"  => "tab_img",
                            "value" => "0" ,
                            ),
            ),

        )
    )
));


if (class_exists("WPBakeryShortCodesContainer")) {
    class WPBakeryShortCode_iq_tab extends WPBakeryShortCodesContainer {
    }
}
if (class_exists("WPBakeryShortCodesContainer")) {
    class WPBakeryShortCode_iq_inner_item extends WPBakeryShortCodesContainer {
    }
}
?>