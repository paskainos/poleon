<div id="user-login-modal-block" class="block-user-login reveal-modal tiny">
  <h2 class="block-title">User login</h2>
  <form accept-charset="UTF-8" id="user-login-form" method="post" action="/home?destination=home">
    <div>
      <div class="form-item form-type-textfield form-item-name">
        <label for="edit-name">Username
          <span title="This field is required." class="form-required">*</span>
        </label>
        <input type="text" class="form-text required" maxlength="60" size="15" value="" name="name" id="edit-name">
      </div>
      <div class="form-item form-type-password form-item-pass">
        <label for="edit-pass">Password
          <span title="This field is required." class="form-required">*</span>
        </label>
        <input type="password" class="form-text required" maxlength="128" size="15" name="pass" id="edit-pass">
      </div>
      <div class="item-list">
        <ul>
          <li class="first last">
            <a title="Request new password via e-mail." href="/user/password">Request new password</a>
          </li>
        </ul>
      </div>
      <input type="hidden" value="<?php print $elements['form_build_id']['#value']; ?>" name="form_build_id">
      <input type="hidden" value="user_login_block" name="form_id">
      <button type="submit" value="Log in" name="op" id="edit-submit" class="secondary button radius form-submit">Log in</button>
    </div>
  </form>
  <a class="close-reveal-modal">&#215;</a>
</div>
