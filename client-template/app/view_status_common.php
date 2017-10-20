<!-- ======== Content Area ======== -->

<div id="main">

  <div id="contents">

    <form id="settings-form">

      <h2> System Live Status </h2>

      <fieldset>

        <legend>CPU</legend>

        <div class="setting">
          <div class="label">CPU Model</div>
          ARMv6-compatible processor rev 4 (v6l)
        </div>

        <div class="setting">
          <div class="label">CPU Clock</div>
          800 MHz
        </div>

        <div class="setting">
          <div class="label">Load Average</div>

          <span id="uptime_load">
            <div class="meter">
              <div class="bar" style="width: 6%;"></div>
              <div class="text">6%</div>
            </div>

            0.14, 0.03, 0.00
          </span>
        </div>

        <div class="setting">
          <div class="label">CPU Temperature</div>
          <span id="cpu_temp">69.8 °C</span>
        </div>

      </fieldset>

      <fieldset>
        <legend>Memory</legend>

        <div class="setting">
          <div class="label">Total Available</div>

          <span id="mem_total">
            <div class="meter">
              <div class="bar" style="width:96%;"></div>
              <div class="text">85%</div>
            </div>

            126020 KB / 524288 KB
          </span>
        </div>

        <div class="setting">
          <div class="label">Free</div>

          <span id="mem_free">
            <div class="meter">
              <div class="bar" style="width:77%;"></div>
              <div class="text">77%</div>
            </div>

            97356 KB / 524288 KB
          </span>
        </div>

        <div class="setting">
          <div class="label">Used</div>

          <span id="mem_used">
            <div class="meter">
              <div class="bar" style="width:23%;"></div>
              <div class="text">23%</div>
            </div>

            28664 KB / 524288 KB
          </span>
        </div>

      </fieldset>

      <fieldset>
        <legend>Network</legend>

        <div class="setting">
          <div class="label">Bandwidth Available</div>

          <span id="network_bandwidth">
            <div class="meter">
              <div class="bar" style="width:10%;"></div>
              <div class="text">10%</div>
            </div>

            10240 KB / 102400 KB
          </span>
        </div>

      </fieldset>

      <fieldset>
        <legend>Disk Space</legend>

        <div class="setting">
          <div class="label">Disk Available</div>

          <span id="disk_total">
            <div class="meter">
              <div class="bar" style="width:25%;"></div>
              <div class="text">25%</div>
            </div>

            2048 MB / 8192 MB
          </span>
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
        CPU:
      </dt>
      <dd class="definition">
        Represent how much of CPU resources are being used
      </dd>

      <dt class="term">
        Memory:
      </dt>
      <dd class="definition">
        Represent how much of Memory resources are being used
      </dd>

      <dt class="term">
        Network:
      </dt>
      <dd class="definition">
        Represent how much of Network resources are being used
      </dd>

      <dt class="term">
        Disk:
      </dt>
      <dd class="definition">
        Represent how much of Disk resource are being used
      </dd>

    </dl>

  </div>

</div>


<!-- ====== End Content Area ====== -->
