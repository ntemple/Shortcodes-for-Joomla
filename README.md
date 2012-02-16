This is an implementation of Wordpress shortcodes inside the Joomla 1.5 framework as a plugin.

Installation

1. In your Joomla! installation, login to the back-end and navigate to Extensions | Install / Uninstall

2. Go to shortcode project on github to get the latest download link, copy the download link, adding /shortcode.zip to the end of the url. Copy & paste the link into the “Install from URL” field.

Here is the download link for your convenience:

https://github.com/ntemple/Shortcodes-for-Joomla/zipball/master/shortcodes.zip

This is a “trick” needed because Joomla is going to guess the type of file from the extension. [this could be considered a bug in joomla]

3. Click “Install”. You should receive an installation success message.

4. Now, enable the plugin – go to Extensions | Plugin Manager, find “System – Shortcodes”

You will also want to select "Run on Content Only" or "Run Sitewide". Sitewide is faster and gives you more flexibility, but Content only is more secure and the default.

What can wrong: The shortcodes plugin creates a  new directory under plugins/shortcodes to hold all your shortcodes. If it can’t create these files, then the system will silently fail. You can manually create that directory if you need to.

Testing

Shortcodes can be installed as standard plugins in the shortcodes folder.

Many WordPress shortcodes will work, however Joomla! is not WordPress – plugins that were written to specifically use the WordPress internals won’t work out of the box.

Creating Shortcodes

WordPress has great documentation, and it’s all relevant to this implementation (because it DOES use the WordPress code). See:
http://codex.wordpress.org/Shortcode_API

Just package it up as a standard Joomla install plugin with type="shortcode". You can then install / uninstall, enable / disable the shortcode package just like any other shortcode.

Security
This is “beta” code, and anyone with the ability to enter content into your joomla system can access the shortcodes you have installed.Use at your own risk.
