<!--MODAL-->
<div class="modal micromodal-slide" id="modal-courses" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
      <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-courses-title">

        <header class="modal__header">
          <div class="modal__close" aria-label="Close modal" data-micromodal-close>
            <div class="modal__close__button" data-micromodal-close aria-label="Close modal">&#x2715;</div>
          </div>
        </header>

        <main class="modal__content" id="modal-courses-content">
          <div class="modal__content__header">
            <h2>Be the boss of <span class="white-space">Your therapy career</span></h2>
            <h3>(not the other way around)</h3>
            <p>Our emails have more awesome ideas than you can shake a stick at.</p>


          </div>
          <div class="modal__content__form">
            <form id="modal-courses-form">
              <input type="text" placeholder="First Name" name="first_name" required />
              <input type="email" placeholder="Email" name="email" required />
              <!-- no botz please -->
              <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                  name="license" " tabindex=" -1" value="" autocomplete="offload" /></div>
              <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="list"
                  tabindex="-1" value="<?php echo $list_id ?>" autocomplete="offload" /></div>
              <button type="submit" class="form-submit" id="modal-courses-submit">Sign Me Up!</button>
            </form>
          </div>
          </main>
       
      </div>
    </div>
  </div>
          <!--MODAL-->