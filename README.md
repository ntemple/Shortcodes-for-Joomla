1. In your Joomla! installation, login to the back-end and navigate to Extensions | Install / Uninstall

2. Go to shortcode project on github to get the latest download link, copy the download link, adding /shortcode.zip to the end of the url. Copy & paste the link into the “Install from URL” field.

Here is the download link for your convenience:

https://github.com/ntemple/Shortcodes-for-Joomla/zipball/master/shortcodes.zip

This is a “trick” needed because Joomla is going to guess the type of file from the extension. [this could be considered a bug in joomla]

3. Click “Install”. You should receive an installation success message.

4. Now, enable the plugin – go to Extensions | Plugin Manager, find “System – Shortcodes”

What can wrong: The shortcodes plugin creates a  new directory under plugins/shortcodes to hold all your shortcodes. If it can’t create these files, then the system will silently fail. You can manually create that directory if you need to.

Testing
By default, the “test” shortcode is created. Simply go to any article page, enter [test] , and you should see “Hello shortcode world!”

Adding Shortcodes:

* You can edit plugins/shortcodes/default.php and put your shortcode code directly in that file

* You can drop php files directly into the plugins/shortcodes/ directory, and they will be loaded when the plugin is activated.

Many WordPress shortcodes will work, however Joomla is not WordPress – plugins that were written to specifically use the WordPress internals won’t work out of the box.

Creating Shortcodes

WordPress has great documentation, and it’s all relevant to this implementation (because it DOES use the WordPress code). See:
http://codex.wordpress.org/Shortcode_API

Security
This is “beta” code, and anyone with the ability to enter content into your joomla system can access the shortcodes you have installed. Use at your own risk.
