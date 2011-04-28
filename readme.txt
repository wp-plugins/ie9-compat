=== Plugin Name ===
Contributors: ramoonus
Donate link: http://www.ramoonus.nl
Tags: html5, html, javascript, ie, internet explorer, css 3, css3, json
Requires at least: 3.0.0
Tested up to: 3.2
Stable tag: 1.0.0

Compat Inspector is designed to help sites migrating to IE9 Standards Mode, not those running in legacy modes.
== Description ==
Compat Inspector is designed to help sites migrating to IE9 Standards Mode, not those running in legacy modes. You may still need to refer to the above documentation for some issues. The best pattern is to use Compat Inspector first, then fall back to the documentation if nothing is found. 

Compat Inspector uses features introduced in IE9. At its core, Compat Inspector overrides native APIs using ECMAScript 5th edition getters/setters and depends on the browser to correctly expose APIs per WebIDL. Compat Inspector then uses these overrides to track interactions between the page and the native platform. This allows it to report issues at runtime as the problem code is executed. 
The rest of the Compat Inspector infrastructure makes use of various other new features as needed. Some examples include DOM Level 3 Core APIs, DOM Level 3 Events APIs, and CSS3 Border Radius. Compat Inspector also depends on features introduced in IE8 such as HTML5 Local Storage, HTML5 Cross-Document Messaging, native JSON support, and Selectors API.


== Installation ==
1. Upload `ie9-compat.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions == 
None at this moment.

== Upgrade Notice == 
Its recommended to flush the cache after upgrading.

== Screenshots ==
Not relevant.

== Changelog ==
= 1.0 =
* First version