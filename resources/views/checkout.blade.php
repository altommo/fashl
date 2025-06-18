@extends('layouts.app')

@section('content')
  <div class="py-8 lg:py-12">
    <h1 class="font-montserrat text-4xl font-bold lowercase text-fashl-black mb-8 text-center">checkout</h1>

    <div class="max-w-3xl mx-auto bg-fashl-cream p-6 rounded-lg shadow-md">
      {{-- This is where WooCommerce or other e-commerce plugin content would be rendered. --}}
      {{-- In a typical WordPress setup, this would be populated by the plugin's shortcode or template hooks. --}}
      <div class="woocommerce">
        {{-- Example placeholder content for checkout fields --}}
        <form class="checkout woocommerce-checkout">
          <div class="col2-set" id="customer_details">
            <div class="col-1">
              <h3 class="font-montserrat text-2xl lowercase text-fashl-black mb-4">billing details</h3>
              <div class="woocommerce-billing-fields__field-wrapper space-y-4">
                <p class="form-row form-row-first">
                  <label for="billing_first_name" class="font-inter text-sm text-fashl-black">First name <abbr class="required" title="required">*</abbr></label>
                  <input type="text" class="input-text w-full p-2 border border-fashl-gray rounded-md focus:outline-none focus:ring-2 focus:ring-fashl-sage" name="billing_first_name" id="billing_first_name" placeholder="" value="" autocomplete="given-name">
                </p>
                <p class="form-row form-row-last">
                  <label for="billing_last_name" class="font-inter text-sm text-fashl-black">Last name <abbr class="required" title="required">*</abbr></label>
                  <input type="text" class="input-text w-full p-2 border border-fashl-gray rounded-md focus:outline-none focus:ring-2 focus:ring-fashl-sage" name="billing_last_name" id="billing_last_name" placeholder="" value="" autocomplete="family-name">
                </p>
                <p class="form-row form-row-wide">
                  <label for="billing_email" class="font-inter text-sm text-fashl-black">Email address <abbr class="required" title="required">*</abbr></label>
                  <input type="email" class="input-text w-full p-2 border border-fashl-gray rounded-md focus:outline-none focus:ring-2 focus:ring-fashl-sage" name="billing_email" id="billing_email" placeholder="" value="" autocomplete="email username">
                </p>
                <p class="form-row form-row-wide">
                  <label for="billing_phone" class="font-inter text-sm text-fashl-black">Phone <abbr class="required" title="required">*</abbr></label>
                  <input type="tel" class="input-text w-full p-2 border border-fashl-gray rounded-md focus:outline-none focus:ring-2 focus:ring-fashl-sage" name="billing_phone" id="billing_phone" placeholder="" value="" autocomplete="tel">
                </p>
              </div>
            </div>

            <div class="col-2 mt-8">
              <h3 class="font-montserrat text-2xl lowercase text-fashl-black mb-4">shipping details</h3>
              <div class="woocommerce-shipping-fields__field-wrapper space-y-4">
                <p class="form-row form-row-wide">
                  <label for="shipping_address_1" class="font-inter text-sm text-fashl-black">Street address <abbr class="required" title="required">*</abbr></label>
                  <input type="text" class="input-text w-full p-2 border border-fashl-gray rounded-md focus:outline-none focus:ring-2 focus:ring-fashl-sage" name="shipping_address_1" id="shipping_address_1" placeholder="House number and street name" value="" autocomplete="address-line1">
                </p>
                <p class="form-row form-row-wide">
                  <label for="shipping_city" class="font-inter text-sm text-fashl-black">Town / City <abbr class="required" title="required">*</abbr></label>
                  <input type="text" class="input-text w-full p-2 border border-fashl-gray rounded-md focus:outline-none focus:ring-2 focus:ring-fashl-sage" name="shipping_city" id="shipping_city" placeholder="" value="" autocomplete="address-level2">
                </p>
                <p class="form-row form-row-wide">
                  <label for="shipping_postcode" class="font-inter text-sm text-fashl-black">Postcode / ZIP <abbr class="required" title="required">*</abbr></label>
                  <input type="text" class="input-text w-full p-2 border border-fashl-gray rounded-md focus:outline-none focus:ring-2 focus:ring-fashl-sage" name="shipping_postcode" id="shipping_postcode" placeholder="" value="" autocomplete="postal-code">
                </p>
              </div>
            </div>
          </div>

          <h3 class="font-montserrat text-2xl lowercase text-fashl-black mt-8 mb-4">your order</h3>
          <div id="order_review" class="woocommerce-checkout-review-order">
            <table class="shop_table woocommerce-checkout-review-order-table w-full text-left">
              <thead>
                <tr>
                  <th class="product-name font-montserrat text-base lowercase text-fashl-black">product</th>
                  <th class="product-total font-montserrat text-base lowercase text-fashl-black">subtotal</th>
                </tr>
              </thead>
              <tbody>
                <tr class="cart_item">
                  <td class="product-name font-inter text-sm text-fashl-black">
                    the midi wrap dress <strong class="product-quantity">× 1</strong>
                  </td>
                  <td class="product-total font-inter text-sm text-fashl-black">
                    <span class="woocommerce-Price-amount amount">£42.00</span>
                  </td>
                </tr>
                <tr class="cart_item">
                  <td class="product-name font-inter text-sm text-fashl-black">
                    minimalist earrings <strong class="product-quantity">× 2</strong>
                  </td>
                  <td class="product-total font-inter text-sm text-fashl-black">
                    <span class="woocommerce-Price-amount amount">£36.00</span>
                  </td>
                </tr>
              </tbody>
              <tfoot>
                <tr class="cart-subtotal">
                  <th class="font-montserrat text-base lowercase text-fashl-black">subtotal</th>
                  <td class="font-inter text-base text-fashl-black"><span class="woocommerce-Price-amount amount">£78.00</span></td>
                </tr>
                <tr class="shipping">
                  <th class="font-montserrat text-base lowercase text-fashl-black">shipping</th>
                  <td class="font-inter text-base text-fashl-black">£5.00</td>
                </tr>
                <tr class="order-total">
                  <th class="font-montserrat text-lg lowercase text-fashl-black">total</th>
                  <td class="font-inter text-lg font-bold text-fashl-black"><span class="woocommerce-Price-amount amount">£83.00</span></td>
                </tr>
              </tfoot>
            </table>
          </div>

          <div id="payment" class="woocommerce-checkout-payment mt-8">
            <h3 class="font-montserrat text-2xl lowercase text-fashl-black mb-4">payment</h3>
            <div class="form-row place-order">
              <button type="submit" class="btn btn-primary w-full" name="woocommerce_checkout_place_order" id="place_order" value="Place order">place order</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
