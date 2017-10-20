<!-- ======== Content Area ======== -->
<div id="main">

  <div id="contents">

    <form id="settings-form">
      <h2> Basic Configurations </h2>

      <fieldset>
        <legend>System Settings</legend>

        <div class="setting">
          <div class="label">Account Password</div>
          <input maxlength="39" type="password" name="gateway_password" size="20" value="wiser2014">
        </div>

      </fieldset>

      <fieldset>
        <legend>Network Settings</legend>

        <div class="setting">
          <div class="label">Hostname</div>
          <input maxlength="39" name="gateway_hostname" size="20" value="wiser-gateway1">
        </div>

        <div class="setting">
          <div class="label">Wifi ESSID</div>
          <input maxlength="79" name="gateway_essid" size="20" value="wiser">
        </div>

        <div class="setting">
          <div class="label">Wifi Password</div>
          <input maxlength="39" minlength="8" name="gateway_essid_pass" type="password" size="20" value="wiser2014">
        </div>

      </fieldset>

    </form>

  </div>
    <div id="help">
      <div>
        <h2>Help</h2>
      </div>

      <dl>

        <dt class="term">
          Hostname:
        </dt>
        <dd class="definition">
          Name of this gateway in network
        </dd>

        <dt class="term">
          Wifi ESSID:
        </dt>
        <dd class="definition">
          Wifi network name to connect
        </dd>

        <dt class="term">
          Wifi ESSID Pass:
        </dt>
        <dd class="definition">
          Wifi network pass
        </dd>

      </dl>

  </div>

</div>

<!-- ====== End Content Area ====== -->
