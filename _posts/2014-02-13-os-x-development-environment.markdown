---
layout: post
status: publish
published: true
title: OS X development environment
author:
  display_name: Pavel Dostál
  login: quick
  email: pdostal@pdostal.cz
  url: http://pdostal.cz/
author_login: quick
author_email: pdostal@pdostal.cz
author_url: http://pdostal.cz/
wordpress_id: 476
wordpress_url: http://blog.pdostal.cz/?p=476
date: '2014-02-13 11:39:57 +0100'
date_gmt: '2014-02-13 11:39:57 +0100'
categories:
- Hardware
tags: []
comments: []
---
<h2>Apache</h2>
<ul>
<li><em>sudo apachectl stop</em></li>
<li><em>sudo apachectl restart</em></li>
<li><em>sudo apachectl start</em></li>
</ul>
<h2>PHP</h2>
<ul>
<li><em><span style="line-height: 1.5em;">sudo cp /etc/php.ini.default /etc/php.ini</span></em></li>
<li><span style="line-height: 1.5em;">/etc/apache2/httpd.conf</span></li>
</ul>
<p>[gist id="8973499" file="httpd.conf (php)"]</p>
<h2>Passenger</h2>
<ul>
<li><em>brew install passenger</em></li>
<li>/etc/apache2/other/passenger.conf
<ul>
<li>look at the end of output from <em>brew install passenger</em></li>
</ul>
</li>
</ul>
<p>[gist id="8973499" file="httpd.conf (passenger)"]</p>
<ul>
<li><span style="line-height: 1.5em;">/etc/apache2/httpd.conf</span></li>
</ul>
<p>[gist id="8973499" file="passenger.conf"]</p>
<h2>Database</h2>
<ul>
<li>You can download MySQL <a href="http://dev.mysql.com/downloads/mysql/">here</a>
<ul>
<li>choose DMG Archive which contains graphical installer and control panel menu</li>
<li>It's useful to create some aliases</li>
</ul>
</li>
</ul>
<p>[gist id="8973499" file="mysql aliases"]</p>
<ul>
<li>You can download PostgreSQL <a href="http://www.postgresql.org/download/macosx/">here</a>
<ul>
<li><em>gem install pg -- --with-pg-config=/Library/PostgreSQL/9.3/bin/pg_config</em></li>
</ul>
</li>
</ul>
<h2>Adminer</h2>
<ul>
<li>The easiest way to manage your databases is download Adminer from <a href="http://www.adminer.org">this link</a></li>
</ul>
