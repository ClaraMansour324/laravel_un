 
    <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="contact_bg_box">
      <div class="img-box">
        <img src="{{ asset('assets/images/contact-bg.jpg') }}" alt="">
      </div>
    </div>
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
        {{ __('messages.Getintouch') }}
        </h2>
      </div>
      <div class="">
        <div class="row">
          <div class="col-md-7 mx-auto">
            <form action="#">
              <div class="contact_form-container">
                <div>
                  <div>
                  <label for="name">{{ __('messages.name') }}</label>
                    <input type="text"  name="name"/> 
                  </div>
                  <div>
                  <label for="email">{{ __('messages.email') }}</label>
                    <input type="email"  name="email"/> 
                  </div>
                  <div>
                  <label for="phone">{{ __('messages.phone') }}</label>
                    <input type="text"  name="phone"/> 
                  </div>
                  <div class="">
                  <label for="message">{{ __('messages.message') }}</label>
                    <input type="text"  class="message_input" name="message"/> 
                  </div>
                  <div class="btn-box ">
                    <button type="submit" name="submit"> {{ __('messages.submit') }}
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->