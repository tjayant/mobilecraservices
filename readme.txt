These are instructions on how to setup a simulated server on your Mac.

NOTES:
"vi" is primitive UNIX editor.  If you wish to abort any changes, press
ESC-key followed by "q!" (i.e. letter-"q" followed by exclamation mark).

"sudo" runs the following commands as "super user".
      
1. Enable Apache Server
   a. Click on the Apple icon on the top left-hand corner of the screen.
   b. Select "System Preferences...".
   c. Under "Internet & Wireless" click on "Sharing".
   d. Enable "Web Sharing."

2. Enable PHP on Apache Server (part I - edit httpd.conf)
   a. Open "Terminal.app".
   b. Enter the command: "cd /etc/apache2".
   c. Edit httpd.conf with the command: "sudo vi httpd.conf".
   d. You will be asked to provide your system password (this is the
      password you use to login to your Mac).
   e. Locate the following line:
          "#LoadModule php5_module libexec/apache2/libphp5.so"
      Use the vi-search facility to do this by typing "/php" + ENTER.
   f. Delete the "#" by placing your cursor over the "#" and typing
      "dl" (i.e. letter-"d" followed by letter-"l" -- this means
      *d*elete *l*etter).
   g. Save and exist by typing "x!".

3. Enable PHP on Apache Server (part II - edit php.ini)
   a. Open "Terminal.app".
   b. Enter the command: "cd /etc".
   c. Enter the command: "sudo cp php.ini.default php.ini".
   d. Edit php.ini with the command: "sudo vi php.ini"
   e. Locate the following line:
          "error_reporting = E_ALL & ~E_NOTICE"
      Use the vi-search facility to do this by typing "/error_reporting" +
      ENTER.
   f. Chage this line to the following:
          "error_reporting = E_ALL"
      Do this by placin your cursor over the "&" and typing "d$" (i.e.
      letter-"d" followed by "$"-sign -- this means *d*elete to the
      end of the line).
   g. Save and exist by typing "x!".

4. Checkout Simulated Server
   a. The Apache server expects the backing files to be under the directory
      "~/Sites/", so we're going to checkout a copy there.
   b. Open "Terminal.app".
   c. Enter the command: "cd ~/Sites/".
   d. Enter the command:
      "svn checkout https://adc6170155.us.oracle.com/svn/mobilecra-test/branches/MobileCRA/versions/MobileCRA_1.1/client/ios/apps/MobileCRA/SimulatedServer/mobilecraservices"  
   e. You should now have a "~/Sites/mobilecraservices/" folder.

5. Test the Simulated Server
   a. From a Browser, enter the URL:
          "http://localhost/~<USER>/mobilecraservices/rest/sites/"
      Substituting <USER> for your user name.
      (NOTE: from the terminal the command "echo $USER" will tell you your user name).
   b. JSON code should appear without error.
