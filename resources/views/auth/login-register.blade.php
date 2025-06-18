@extends('layouts.app')

@section('content')
  <div class="py-8 lg:py-12">
    <h1 class="font-montserrat text-4xl font-bold lowercase text-fashl-black mb-8 text-center">my account</h1>

    <div class="max-w-4xl mx-auto bg-fashl-cream p-6 rounded-lg shadow-md grid grid-cols-1 md:grid-cols-2 gap-8">
      {{-- Login Form --}}
      <div>
        <h2 class="font-montserrat text-2xl lowercase text-fashl-black mb-4">login</h2>
        <form class="space-y-4">
          <div>
            <label for="login_username" class="font-inter text-sm text-fashl-black block mb-1">username or email address <abbr class="required" title="required">*</abbr></label>
            <input type="text" class="input-text w-full p-2 border border-fashl-gray rounded-md focus:outline-none focus:ring-2 focus:ring-fashl-sage" name="username" id="login_username" autocomplete="username">
          </div>
          <div>
            <label for="login_password" class="font-inter text-sm text-fashl-black block mb-1">password <abbr class="required" title="required">*</abbr></label>
            <input type="password" class="input-text w-full p-2 border border-fashl-gray rounded-md focus:outline-none focus:ring-2 focus:ring-fashl-sage" name="password" id="login_password" autocomplete="current-password">
          </div>
          <div class="flex items-center justify-between">
            <label class="font-inter text-sm text-fashl-black flex items-center">
              <input type="checkbox" name="rememberme" value="forever" class="form-checkbox text-fashl-sage rounded-sm mr-2">
              remember me
            </label>
            <a href="#" class="font-inter text-sm text-fashl-sage hover:underline">lost your password?</a>
          </div>
          <button type="submit" class="btn btn-primary w-full">login</button>
        </form>
      </div>

      {{-- Registration Form --}}
      <div>
        <h2 class="font-montserrat text-2xl lowercase text-fashl-black mb-4">register</h2>
        <form class="space-y-4">
          <div>
            <label for="reg_email" class="font-inter text-sm text-fashl-black block mb-1">email address <abbr class="required" title="required">*</abbr></label>
            <input type="email" class="input-text w-full p-2 border border-fashl-gray rounded-md focus:outline-none focus:ring-2 focus:ring-fashl-sage" name="email" id="reg_email" autocomplete="email">
          </div>
          <div>
            <label for="reg_password" class="font-inter text-sm text-fashl-black block mb-1">password <abbr class="required" title="required">*</abbr></label>
            <input type="password" class="input-text w-full p-2 border border-fashl-gray rounded-md focus:outline-none focus:ring-2 focus:ring-fashl-sage" name="password" id="reg_password" autocomplete="new-password">
          </div>
          <p class="font-inter text-xs text-gray-600">
            a password will be sent to your email address.
          </p>
          <p class="font-inter text-xs text-gray-600">
            your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#" class="text-fashl-sage hover:underline">privacy policy</a>.
          </p>
          <button type="submit" class="btn btn-primary w-full">register</button>
        </form>
      </div>
    </div>
  </div>
@endsection
