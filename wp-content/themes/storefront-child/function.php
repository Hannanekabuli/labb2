<?php









function custom_override_checkout_fields($filds) {
    $fields['order']['order_comments']['placeholder'] = 'Min nya platshållare';
    $fields['order']['order_comments']['labb1'] = 'Min nya atikett';
    return $fields;
}


add_action('wp', 'tag_bort_storefront_funktioner');

function tag_bort_storefront_funktioner();
if( is_checkout() ){

    remove_all_actions('storefront_header');

    remove_action('storefront_before_content', 'woocommerce_breadcrumb', 10);
//tabort rabat kod
    remove_action('woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10);
//läga rabat kod 
    add_action('woocommerce_after_chckout_form', 'woocommerce_checkout_coupon_form');

    add_filter('woocommerce_checkout_fields', 'hj_override_checkout_fields');

    function hj_override_checkout_fields($fields){

        unset(
            $fields['order']['order_comments'],
            $fields['billing']['billing_address_2'],
            $fields['shipping']['shipping_company'],
            $filds['billing']['billing_company']
        );

        return $fields;
    }

    add_action('woocommerce_review_order_after_payment', 'hj_edit_cart_checkout');
    
    function hj_edit_cart_checkout(){

        echo '<a href="' .wc_get_cart_url() . ">Ändra varukorg</a>";
    }
}









?>