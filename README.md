# niwa-website
These are the files for the NIWA website (http://niwanetwork.org/), a PHP project. The purpose of this repository is to make it easy for all NIWA members to contribute and update information.

## Dependencies
This website requires [Parsedown](https://github.com/erusev/parsedown) to be placed in a file called `_parsedown.php` in the website root.

## Contributing
The files most users will be concerned about are:
* `data/members.json`, which holds all member information (logos, links, names, descriptions). Should be in alphabetical order.
* `data/affiliates.json`, which holds all affiliate information.
**Note:** The order of wikis in this file determines display order throughout the site. Please list wikis in alphabetical order. 
* `_api.php`, contains helper functions and pulls in member json data
* `images/icons`, where site icons are stored
* `images/logos`, where site logos are stored

Not all files for the website are in this repository, for either security or privacy reasons (for example, the email script is not included as it includes email addresses).

To **edit a file**:
* The easiest way is go to the file's page, click the edit button (pencil icon) at the upper-right, modify the file, add a very short edit summary, and click "propose changes". This will automatically create a fork of the project under your name with your proposed change. You can continue making additional changes throughout your fork as needed. When you are ready, go to your fork and click "New pull request". Fill the form out with details about your changes and submit it; this will bring your changes up for review to be merged in.
* You may also use [GitHub Desktop](https://desktop.github.com/) to clone, track changes, and push them back up to GitHub through a GUI.
* The more technical method is through git CLI commands - follow the instructions [here](https://www.digitalocean.com/community/tutorials/how-to-create-a-pull-request-on-github).

To **propose changes** or **report bugs**:
* Click on the Issues tab, select the green "New issue" button, and propose the change you would like to see.
