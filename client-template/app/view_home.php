<!-- ======== Content Area ======== -->


<section id="main">
    <div id="contents">
        <form name="setup" action="apply.cgi" method="post">
            <input name="submit_button" value="Management" type="hidden">
            <input name="action" value="ApplyTake" type="hidden">
            <input name="change_action" type="hidden">
            <input name="submit_type" type="hidden">
            <input name="commit" value="1" type="hidden">
            <input name="PasswdModify" value="0" type="hidden">
            <input value="0" name="remote_mgt_https" type="hidden">
            <input value="1" name="http_enable" type="hidden">
            <input value="0" name="info_passwd" type="hidden">
            <input value="0" name="https_enable" type="hidden">
            <h2>
                <script type="text/javascript">
                    Capture(management.h2)
                </script>WoT Gateway Management</h2>
            <div>
                <fieldset>
                    <legend>
                        <script type="text/javascript">
                            Capture(management.psswd_legend)
                        </script>Router Password</legend>
                    <div class="setting">
                        <div class="label">
                            <script type="text/javascript">
                                Capture(management.psswd_user)
                            </script>Router Username</div>
                        <input maxlength="63" size="20" value="d6nw5v1x2pc7st9m" name="http_username" onblur="valid_name(this,management.psswd_user,SPACE_NO)" type="password">
                    </div>
                    <div class="setting">
                        <div class="label">
                            <script type="text/javascript">
                                Capture(management.psswd_pass)
                            </script>Router Password</div>
                        <input maxlength="63" size="20" value="d6nw5v1x2pc7st9m" name="http_passwd" onblur="valid_name(this,management.psswd_pass,SPACE_NO)" type="password">
                    </div>
                    <div class="setting">
                        <div class="label">
                            <script type="text/javascript">
                                Capture(management.pass_conf)
                            </script>Re-enter to confirm</div>
                        <input maxlength="63" size="20" value="d6nw5v1x2pc7st9m" name="http_passwdConfirm" onblur="valid_name(this,management.pass_conf,SPACE_NO)" type="password">
                    </div>
                </fieldset><br>

                <fieldset>
                    <legend>
                        <script type="text/javascript">
                            Capture(management.web_legend)
                        </script>Web Access</legend>
                    <div class="setting">
                        <div class="label">
                            <script type="text/javascript">
                                Capture(share.proto)
                            </script>Protocol</div>
                        <input class="spaceradio" value="1" name="_http_enable" checked="checked" type="checkbox">HTTP&nbsp;
                        <input class="spaceradio" value="1" onclick="handle_https(this.form)" name="_https_enable" type="checkbox">HTTPS
                    </div>
                    <div class="setting">
                        <div class="label">
                            <script type="text/javascript">
                                Capture(management.web_refresh)
                            </script>Auto-Refresh (in seconds)</div>
                        <input class="num" name="refresh_time" size="2" maxlength="2" value="3">
                    </div>
                    <div class="setting">
                        <div class="label">
                            <script type="text/javascript">
                                Capture(management.web_sysinfo)
                            </script>Enable Info Site</div>
                        <input class="spaceradio" value="1" name="status_auth" checked="checked" onclick="show_layer_ext(this, 'idsysinfo', true)" type="radio">
                        <script type="text/javascript">
                            Capture(share.enable)
                        </script>Enable&nbsp;
                        <input class="spaceradio" value="0" name="status_auth" onclick="show_layer_ext(this, 'idsysinfo', false)" type="radio">
                        <script type="text/javascript">
                            Capture(share.disable)
                        </script>Disable
                    </div>
                    <div style="visibility: visible; display: block;" id="idsysinfo">
                        <div class="setting">
                            <div class="label">
                                <script type="text/javascript">
                                    Capture(management.web_sysinfopass)
                                </script>Info Site Password Protection</div>
                            <input class="spaceradio" value="1" name="_info_passwd" type="checkbox">
                            <script type="text/javascript">
                                Capture(share.enabled)
                            </script>Enabled
                        </div>
                        <div class="setting">
                            <div class="label">
                                <script type="text/javascript">
                                    Capture(management.web_sysinfomasq)
                                </script>Info Site MAC Masking</div>
                            <input class="spaceradio" value="1" name="maskmac" checked="checked" type="radio">
                            <script type="text/javascript">
                                Capture(share.enable)
                            </script>Enable&nbsp;
                            <input class="spaceradio" value="0" name="maskmac" type="radio">
                            <script type="text/javascript">
                                Capture(share.disable)
                            </script>Disable
                        </div>
                    </div>
                </fieldset><br>

                <fieldset>
                    <legend>
                        <script type="text/javascript">
                            Capture(management.remote_legend)
                        </script>Remote Access</legend>
                    <div class="setting">
                        <div class="label">
                            <script type="text/javascript">
                                Capture(management.remote_gui)
                            </script>Web GUI Management</div>
                        <input class="spaceradio" value="1" name="remote_management" onclick="show_layer_ext(this, 'idhttpd', true);SelPort(1,this.form)" checked="checked" type="radio">
                        <script type="text/javascript">
                            Capture(share.enable)
                        </script>Enable&nbsp;
                        <input class="spaceradio" value="0" name="remote_management" onclick="show_layer_ext(this, 'idhttpd', false);SelPort(0,this.form)" type="radio">
                        <script type="text/javascript">
                            Capture(share.disable)
                        </script>Disable
                    </div>
                    <div style="visibility: visible; display: block;" id="idhttpd">
                        <div class="setting">
                            <div class="label">
                                <script type="text/javascript">
                                    Capture(management.remote_https)
                                </script>Use HTTPS</div>
                            <input style="background-color: rgb(224, 224, 224);" disabled="" value="1" name="_remote_mgt_https" type="checkbox">
                        </div>
                        <div class="setting">
                            <div class="label">
                                <script type="text/javascript">
                                    Capture(management.remote_guiport)
                                </script>Web GUI Port</div>
                            <input class="num" maxlength="5" size="5" name="http_wanport" onblur="valid_range(this,1,65535,management.remote_guiport)" value="80">
                            <span class="default">(Default: 8080, Range: 1 - 65535)</span>
                        </div>
                    </div>

                    <div class="setting">
                        <div class="label">
                            <script type="text/javascript">
                                Capture(management.remote_ssh)
                            </script>SSH Management</div>
                        <input disabled="" class="spaceradio" value="1" name="remote_mgt_ssh" onclick="show_layer_ext(this, 'idssh', true);selSSH(this.value, 0)" type="radio">
                        <script type="text/javascript">
                            Capture(share.enable)
                        </script>Enable&nbsp;
                        <input disabled="" class="spaceradio" value="0" name="remote_mgt_ssh" onclick="show_layer_ext(this, 'idssh', false);selSSH(this.value, 0)" checked="checked" type="radio">
                        <script type="text/javascript">
                            Capture(share.disable)
                        </script>Disable
                    </div>
                    <div style="visibility: hidden; display: none;" class="setting" id="idssh">
                        <div class="label">
                            <script type="text/javascript">
                                Capture(management.remote_sshport)
                            </script>SSH Remote Port</div>
                        <input disabled="" class="num" maxlength="5" size="5" name="sshd_wanport" onblur="valid_range(this,1,65535,management.remote_sshport)" value="22">
                        <span class="default">(Default: 22, Range: 1 - 65535)</span>
                    </div>

                    <div class="setting">
                        <div class="label">
                            <script type="text/javascript">
                                Capture(management.remote_telnet)
                            </script>Telnet Management</div>
                        <input class="spaceradio" value="1" name="remote_mgt_telnet" onclick="show_layer_ext(this, 'idtelnet', true);selTelnet(this.value, 0)" checked="checked" type="radio">
                        <script type="text/javascript">
                            Capture(share.enable)
                        </script>Enable&nbsp;
                        <input class="spaceradio" value="0" name="remote_mgt_telnet" onclick="show_layer_ext(this, 'idtelnet', false);selTelnet(this.value, 0)" type="radio">
                        <script type="text/javascript">
                            Capture(share.disable)
                        </script>Disable
                    </div>
                    <div style="visibility: visible; display: block;" class="setting" id="idtelnet">
                        <div class="label">
                            <script type="text/javascript">
                                Capture(management.remote_telnetport)
                            </script>Telnet Remote Port</div>
                        <input class="num" maxlength="5" size="5" name="telnet_wanport" onblur="valid_range(this,1,65535,management.remote_telnetport)" value="23">
                        <span class="default">(Default: 23, Range: 1 - 65535)</span>
                    </div>
                    <div class="setting">
                        <div class="label">
                            <script type="text/javascript">
                                Capture(management.remote_allowanyip)
                            </script>Allow Any Remote IP</div>
                        <input class="spaceradio" value="1" name="remote_ip_any" onclick="show_layer_ext(this, 'idremip', false)" checked="checked" type="radio">
                        <script type="text/javascript">
                            Capture(share.enable)
                        </script>Enable&nbsp;
                        <input class="spaceradio" value="0" name="remote_ip_any" onclick="show_layer_ext(this, 'idremip', true)" type="radio">
                        <script type="text/javascript">
                            Capture(share.disable)
                        </script>Disable
                    </div>
                    <div style="visibility: hidden; display: none;" class="setting" id="idremip">
                        <div class="label">
                            <script type="text/javascript">
                                Capture(management.remote_ip)
                            </script>Allowed Remote IP Range</div>
                        <input name="remote_ip" value="4" type="hidden">
                        <input class="num" maxlength="3" size="3" onblur="valid_range(this,1,223,'IP')" value="0" name="remote_ip_0"> .
                        <input class="num" maxlength="3" size="3" onblur="valid_range(this,0,255,'IP')" value="0" name="remote_ip_1"> .
                        <input class="num" maxlength="3" size="3" onblur="valid_range(this,0,255,'IP')" value="0" name="remote_ip_2"> .
                        <input class="num" maxlength="3" size="3" onblur="valid_range(this,1,254,'IP')" value="0" name="remote_ip_3">
                        <script type="text/javascript">
                            Capture(share.to)
                        </script>To
                        <input class="num" maxlength="3" size="3" onblur="valid_range(this,1,254,'IP')" value="0" name="remote_ip_4">
                    </div>
                </fieldset><br>


                <fieldset>
                    <legend>
                        <script type="text/javascript">
                            Capture(management.boot_legend)
                        </script>Boot Wait</legend>
                    <div class="setting">
                        <div class="label">
                            <script type="text/javascript">
                                Capture(management.boot_srv)
                            </script>Boot Wait</div>
                        <input class="spaceradio" value="on" name="boot_wait" checked="checked" type="radio">
                        <script type="text/javascript">
                            Capture(share.enable)
                        </script>Enable&nbsp;
                        <input class="spaceradio" value="off" name="boot_wait" type="radio">
                        <script type="text/javascript">
                            Capture(share.disable)
                        </script>Disable
                    </div>
                </fieldset><br>


                <fieldset>
                    <legend>
                        <script type="text/javascript">
                            Capture(management.cron_legend)
                        </script>Cron</legend>
                    <div class="setting">
                        <div class="label">
                            <script type="text/javascript">
                                Capture(management.cron_srvd)
                            </script>Cron</div>
                        <input class="spaceradio" value="1" name="cron_enable" checked="checked" onclick="show_layer_ext(this, 'idcron', true)" type="radio">
                        <script type="text/javascript">
                            Capture(share.enable)
                        </script>Enable&nbsp;
                        <input class="spaceradio" value="0" name="cron_enable" onclick="show_layer_ext(this, 'idcron', false)" type="radio">
                        <script type="text/javascript">
                            Capture(share.disable)
                        </script>Disable
                    </div>
                    <div style="visibility: visible; display: block;" class="setting" id="idcron">
                        <div class="label">
                            <script type="text/javascript">
                                Capture(management.cron_jobs)
                            </script>Additional Cron Jobs</div>
                        <textarea cols="60" rows="4" id="cron_jobs" name="cron_jobs"></textarea>
                    </div>
                </fieldset><br>
                <fieldset>
                    <legend>
                        <script type="text/javascript">
                            Capture(management.wifi_legend)
                        </script>802.1x</legend>
                    <div class="setting">
                        <div class="label">
                            <script type="text/javascript">
                                Capture(management.wifi_srv)
                            </script>802.1x</div>
                        <input class="spaceradio" name="nas_enable" value="1" checked="checked" type="radio">
                        <script type="text/javascript">
                            Capture(share.enable)
                        </script>Enable&nbsp;
                        <input class="spaceradio" name="nas_enable" value="0" type="radio">
                        <script type="text/javascript">
                            Capture(share.disable)
                        </script>Disable
                    </div>
                </fieldset><br>

                <fieldset>
                    <legend>
                        <script type="text/javascript">
                            Capture(management.rst_legend)
                        </script>Reset Button</legend>
                    <div class="setting">
                        <div class="label">
                            <script type="text/javascript">
                                Capture(management.rst_srv)
                            </script>Reset Button</div>
                        <input class="spaceradio" name="resetbutton_enable" value="1" checked="checked" type="radio">
                        <script type="text/javascript">
                            Capture(share.enable)
                        </script>Enable&nbsp;
                        <input class="spaceradio" name="resetbutton_enable" value="0" type="radio">
                        <script type="text/javascript">
                            Capture(share.disable)
                        </script>Disable
                    </div>
                </fieldset><br>

                <fieldset>
                    <legend>
                        <script type="text/javascript">
                            Capture(management.routing_legend)
                        </script>Routing</legend>
                    <div class="setting">
                        <div class="label">
                            <script type="text/javascript">
                                Capture(management.routing_srv)
                            </script>Routing</div>
                        <input class="spaceradio" name="zebra_enable" value="1" checked="checked" type="radio">
                        <script type="text/javascript">
                            Capture(share.enable)
                        </script>Enable&nbsp;
                        <input class="spaceradio" name="zebra_enable" value="0" type="radio">
                        <script type="text/javascript">
                            Capture(share.disable)
                        </script>Disable
                    </div>
                </fieldset><br>
            </div>
            <fieldset>
                <legend>
                    <script type="text/javascript">
                        Capture(management.ipv6_legend)
                    </script>IPv6 Support</legend>
                <div class="setting">
                    <div class="label">
                        <script type="text/javascript">
                            Capture(management.ipv6_srv)
                        </script>IPv6</div>
                    <input class="spaceradio" value="1" name="ipv6_enable0" onclick="show_layer_ext(this, 'idipv6', true)" type="radio">
                    <script type="text/javascript">
                        Capture(share.enable)
                    </script>Enable&nbsp;
                    <input class="spaceradio" value="0" name="ipv6_enable0" checked="checked" onclick="show_layer_ext(this, 'idipv6', false)" type="radio">
                    <script type="text/javascript">
                        Capture(share.disable)
                    </script>Disable
                </div>
                <div style="visibility: hidden; display: none;" id="idipv6">
                    <div class="setting">
                        <div class="label">
                            <script type="text/javascript">
                                Capture(management.ipv6_rad)
                            </script>Radvd enabled</div>
                        <input class="spaceradio" value="1" name="radvd_enable" type="radio">
                        <script type="text/javascript">
                            Capture(share.enable)
                        </script>Enable&nbsp;
                        <input class="spaceradio" value="0" name="radvd_enable" checked="checked" type="radio">
                        <script type="text/javascript">
                            Capture(share.disable)
                        </script>Disable
                    </div>
                    <div class="setting">
                        <div class="label">
                            <script type="text/javascript">
                                Capture(management.ipv6_radconf)
                            </script>Radvd config</div>
                        <textarea id="radvd_conf" name="radvd_conf" cols="60" rows="4"></textarea>
                    </div>
                </div>
            </fieldset><br>
            <fieldset>
                <legend>
                    <script type="text/javascript">
                        Capture(management.jffs_legend)
                    </script>JFFS2 Support</legend>
                <div class="setting">
                    <div class="label">
                        <script type="text/javascript">
                            Capture(management.jffs_srv)
                        </script>JFFS2</div>
                    <input class="spaceradio" value="1" name="enable_jffs2" onclick="show_layer_ext(this, 'idjffs2', true)" type="radio">
                    <script type="text/javascript">
                        Capture(share.enable)
                    </script>Enable&nbsp;
                    <input class="spaceradio" value="0" name="enable_jffs2" checked="checked" onclick="show_layer_ext(this, 'idjffs2', false)" type="radio">
                    <script type="text/javascript">
                        Capture(share.disable)
                    </script>Disable
                </div>
                <div style="visibility: hidden; display: none;" id="idjffs2">
                    <div class="setting">
                        <div class="label">
                            <script type="text/javascript">
                                Capture(management.jffs_clean)
                            </script>Clean JFFS2</div>
                        <input class="spaceradio" value="1" name="clean_jffs2" type="radio">
                        <script type="text/javascript">
                            Capture(share.enable)
                        </script>Enable&nbsp;
                        <input class="spaceradio" value="0" name="clean_jffs2" checked="checked" type="radio">
                        <script type="text/javascript">
                            Capture(share.disable)
                        </script>Disable
                    </div>
                    <div class="setting">
                        <div class="label">
                            <script type="text/javascript">
                                Capture(share.fssize)
                            </script>Total / Free Size</div>
                        <span style="color:#999999;"><em>(Not mounted)</em></span>
                    </div>
                </div>
            </fieldset><br>

            <fieldset>
                <legend>
                    <script type="text/javascript">
                        Capture(management.lang_legend)
                    </script>Language Selection</legend>
                <div class="setting">
                    <div class="label">
                        <script type="text/javascript">
                            Capture(management.lang_srv)
                        </script>Language</div>
                    <select name="language">
                        <option value="chinese_simplified">Chinese simplified</option>
                        <option value="chinese_traditional">Chinese traditional</option>
                        <option value="croatian">Croatian</option>
                        <option value="dutch">Dutch</option>
                        <option value="english" selected="selected">English</option>
                        <option value="french">French</option>
                        <option value="german">German</option>
                        <option value="hungarian">Hungarian</option>
                        <option value="italian">Italian</option>
                        <option value="japanese">Japanese</option>
                        <option value="latvian">Latvian</option>
                        <option value="polish">Polish</option>
                        <option value="portuguese_braz">Portuguese (brazilian)</option>
                        <option value="romanian">Romanian</option>
                        <option value="russian">Russian</option>
                        <option value="slovenian">Slovenian</option>
                        <option value="spanish">Spanish</option>
                        <option value="swedish">Swedish</option>
                    </select>
                </div>
            </fieldset><br>

            <fieldset>
                <legend>
                    <script type="text/javascript">
                        Capture(management.net_legend)
                    </script>IP Filter Settings (adjust these for P2P)</legend>
                <div class="setting">
                    <div class="label">
                        <script type="text/javascript">
                            Capture(management.net_conctrl)
                        </script>TCP Congestion Control</div>
                    <select name="tcp_congestion_control">
                        <option value="vegas" selected="">vegas</option>
                        <option value="westwood">westwood</option>
                        <option value="reno">reno</option>
                        <option value="bic">bic</option>
                        <option value="cubic">cubic</option>
                        <option value="highspeed">highspeed</option>
                        <option value="hybla">hybla</option>
                        <option value="htcp">htcp</option>
                        <option value="veno">veno</option>
                        <option value="scalable">scalable</option>
                        <option value="lp">lp</option>
                        <option value="yeah">yeah</option>
                        <option value="illinois">illinois</option>
                    </select>
                </div>

                <div class="setting">
                    <div class="label">
                        <script type="text/javascript">
                            Capture(management.net_port)
                        </script>Maximum Ports</div>
                    <input class="num" size="5" maxlength="5" name="ip_conntrack_max" onblur="valid_range(this,256,65535,management.net_port)" value="32768">&nbsp;
                    <span class="default">(Default: 32768, Range: 256 - 65535)</span>
                </div>
                <div class="setting">
                    <div class="label">
                        <script type="text/javascript">
                            Capture(management.net_tcptimeout)
                        </script>TCP Timeout (in seconds)</div>
                    <input class="num" size="5" maxlength="5" name="ip_conntrack_tcp_timeouts" onblur="valid_range(this,1,86400,management.net_tcptimeout)" value="3600">&nbsp;
                    <span class="default">(Default: 3600, Range: 1 - 86400)</span>
                </div>
                <div class="setting">
                    <div class="label">
                        <script type="text/javascript">
                            Capture(management.net_udptimeout)
                        </script>UDP Timeout (in seconds)</div>
                    <input class="num" size="5" maxlength="5" name="ip_conntrack_udp_timeouts" onblur="valid_range(this,1,86400,management.net_udptimeout)" value="120">&nbsp;
                    <span class="default">(Default: 120, Range: 1 - 86400)</span>
                </div>
            </fieldset><br>

            <fieldset>
                <legend>
                    <script type="text/javascript">
                        Capture(management.clock_legend)
                    </script>Overclocking</legend>
                <div class="setting">
                    <script type="text/javascript">
                        Capture(management.clock_support)
                    </script>Not Supported
                </div>

            </fieldset><br>
            <fieldset>
                <legend>
                    <script type="text/javascript">
                        Capture(management.gui_style)
                    </script>Router GUI Style</legend>
                <div class="setting">
                    <div class="label">
                        <script type="text/javascript">
                            Capture(share.styl)
                        </script>Style</div>
                    <select name="router_style">
                        <option value="blue">blue</option>
                        <option value="brainslayer">brainslayer</option>
                        <option value="cyan">cyan</option>
                        <option value="elegant" selected="selected">elegant</option>
                        <option value="green">green</option>
                        <option value="kromo">kromo</option>
                        <option value="orange">orange</option>
                        <option value="red">red</option>
                        <option value="wikar">wikar</option>
                        <option value="xirian">xirian</option>
                        <option value="yellow">yellow</option>

                    </select>&nbsp;
                    <input class="button" name="preview_button" value="Preview" onclick="previewStyle(this.form.router_style.value)" type="button">
                </div>
            </fieldset><br>
            <fieldset>
                <legend>
                    <script type="text/javascript">
                        Capture(management.samba_legend)
                    </script>CIFS Automount</legend>
                <div class="setting">
                    <div class="label">
                        <script type="text/javascript">
                            Capture(management.samba_srv)
                        </script>Common Internet File System</div>
                    <input class="spaceradio" value="1" name="samba_mount" onclick="show_layer_ext(this, 'idsamba', true)" type="radio">
                    <script type="text/javascript">
                        Capture(share.enable)
                    </script>Enable&nbsp;
                    <input class="spaceradio" value="0" name="samba_mount" checked="checked" onclick="show_layer_ext(this, 'idsamba', false)" type="radio">
                    <script type="text/javascript">
                        Capture(share.disable)
                    </script>Disable
                </div>
                <div style="visibility: hidden; display: none;" id="idsamba">
                    <div class="setting">
                        <div class="label">
                            <script type="text/javascript">
                                Capture(management.samba_share)
                            </script>Share</div>
                        <input maxlength="100" size="25" name="samba_share" value="//yourserverip/yourshare" onblur="valid_name(this,management.samba_share,SPACE_NO)">
                    </div>
                    <div class="setting">
                        <div class="label">
                            <script type="text/javascript">
                                Capture(share.usrname)
                            </script>User Name</div>
                        <input maxlength="100" size="25" name="samba_user" value="username/computer">
                    </div>
                    <div class="setting">
                        <div class="label">
                            <script type="text/javascript">
                                Capture(share.passwd)
                            </script>Password</div>
                        <input id="samba_password" maxlength="100" size="25" name="samba_password" value="iwer573495u7340" type="password">&nbsp;&nbsp;&nbsp;
                        <input name="_samba_password_unmask" value="0" onclick="setElementMask('samba_password', this.checked)" type="checkbox">&nbsp;
                        <script type="text/javascript">
                            Capture(share.unmask)
                        </script>Unmask
                    </div>
                    <div class="setting">
                        <div class="label">
                            <script type="text/javascript">
                                Capture(management.samba_stscript)
                            </script>Startscript</div>
                        <input maxlength="100" size="25" name="samba_script" value="yourscript">
                    </div>
                    <div class="setting">
                        <div class="label">
                            <script type="text/javascript">
                                Capture(share.fssize)
                            </script>Total / Free Size</div>
                        <span style="color:#999999;"><em>(Not mounted)</em></span>
                    </div>
                </div>
            </fieldset><br>


            <div class="submitFooter">
                <input title="Only save settings without commit" class="button" name="save_button" value="Save" onclick="to_submit(this.form);" type="button"><input title="Apply settings immediately" class="button" name="apply_button" value="Apply Settings" onclick="to_apply(this.form);" type="button"><input title="Cancel changes in this form only" class="button" name="reset_button" value="Cancel Changes" onclick="document.location=document.forms[0].elements['submit_button'].value+'.asp';" type="button"><input class="button" name="reboot_button" value="Reboot Router" onclick="to_reboot(this.form);" type="button">
            </div>
        </form>
    </div>
</section>



<!-- ====== End Content Area ====== -->