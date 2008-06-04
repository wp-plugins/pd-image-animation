=== PDImageAnimation ===
Contributors: mfard
Version: 1.3.0
Tags: public, domain, image, thumbnail, gif, animation, sidebar, widget, admin, plugin, karma
Requires at least: 2.0
Tested up to: 2.5
Stable tag: trunk

Displays thumbnails and GIF animations of public domain images from the online slideshow site slideshine.de.

== Description ==

PDImageAnimation displays thumbnails and animations of new public domain images from the slideshow community site slideshine.de. Different modes are supported.

Furthermore it provides some information about the author (such as a karma bar) of the corresponding slideshow.

Features:

* daily new and free (public-domain) images
* sidebar widget
* simple integration
* support for different languages


== Installation ==

1. Download the plugin
2. Unpack the package to "wordpress/wp-content/plugins/" directory
3. Activate the plugin in section [Plugins] of your admin interface
4. Go to [Design] > [Widgets] and add the widget to the sidebar.


== Frequently Asked Questions ==

= Can I use the plugin without widgets support? =

Yes, just add the following line to your sidebar template (see wordpress/wp-content/themes/<mytheme>/sidebar.php):

`<li><?php $anim = new PDImageAnimation(); $anim->display_sidebar_widget(); ?></li>`

before

`</ul>`

= What languages are supported currently? =

english and german


== Screenshots ==

1. Frontend View

2. Backend View
