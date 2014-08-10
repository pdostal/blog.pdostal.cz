---
layout: post
status: publish
published: true
title: Intel Graphics X3100 @ Ubuntu
author:
  display_name: Pavel Dostál
  login: quick
  email: pdostal@pdostal.cz
  url: http://pdostal.cz/
author_login: quick
author_email: pdostal@pdostal.cz
author_url: http://pdostal.cz/
wordpress_id: 9
wordpress_url: http://pdostal.cz/?p=9
date: '2011-03-01 06:44:00 +0100'
date_gmt: '2011-03-01 06:44:00 +0100'
categories:
- Hardware
tags: []
comments: []
---
<p>Problém při suspendování / hibernaci.</p>
<ul>
<li>/etc/default/acpi-support</li>
</ul>
<div>
<div># Should we attempt to warm-boot the video hardware on resume?</div>
<div><em>#POST_VIDEO=true</em></div>
<div><strong>POST_VIDEO=false</strong></div>
<div># Save and restore video state?</div>
<div><strong>SAVE_VIDEO_PCI_STATE=false</strong></div>
<div><em>#SAVE_VIDEO_PCI_STATE=true</em></div>
<div># Should we switch the screen off with DPMS on suspend?</div>
<div><strong>USE_DPMS=false</strong></div>
<div><em>#USE_DPMS=true</em><br />
<em><br />
</em><br />
<em></em><br />
<em># Use Radeontool to switch the screen off? Seems to be needed on some machines</em><br />
<strong>RADEON_LIGHT=true</strong><em><em><br />
</em></em></p>
<div style="display: inline !important;"><em># Uncomment this line to have DMA disabled before suspend and reenabled</em></div>
<p># afterwards<br />
<strong>DISABLE_DMA=true</strong></p>
<p># Uncomment this line to attempt to reset the drive on resume. This seems<br />
# to be needed for some Sonys<br />
<strong>RESET_DRIVE=true</strong></p>
</div>
</div>
<div>
<ul>
<li>Inspiraci jsem našel <a href="http://www.amitsrivastava.net/2008-03-23-hibernate-suspend-resolved-ubuntu-gutsy-nvidia-dell-vostro/">zde</a>.</li>
</ul>
</div>
