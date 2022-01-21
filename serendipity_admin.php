<html>
    <head>
        <title>Serendipity Verwaltungsoberfläche</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="http://www.blogaddict.de/serendipity_admin.css" />
        <script type="text/javascript">
        function spawn() {
            if (self.Spawnextended) {
                Spawnextended();
            }

            if (self.Spawnbody) {
                Spawnbody();
            }

            if (self.Spawnnugget) {
                Spawnnugget();
            }
        }

        function SetCookie(name, value) {
            var today  = new Date();
            var expire = new Date();
            expire.setTime(today.getTime() + (60*60*24*30));
            document.cookie = 'serendipity[' + name + ']='+escape(value) + ';expires=' + expire.toGMTString();
        }

        function addLoadEvent(func) {
          var oldonload = window.onload;
          if (typeof window.onload != 'function') {
            window.onload = func;
          } else {
            window.onload = function() {
              oldonload();
              func();
            }
          }
        }

        </script>
    </head>
    <body id="serendipity_admin_page" onload="spawn()">
        <table cellspacing="0" cellpadding="0" border="0" id="serendipityAdminFrame">
            <tr>
                <td colspan="2" id="serendipityAdminBanner">
                                    <h1>Serendipity Verwaltungsoberfläche</h1>
                    <h2>Blogaddict</h2>
                                </td>
            </tr>
            <tr>
                <td colspan="2" id="serendipityAdminInfopane">
                                    </td>
            </tr>
            <tr valign="top">
                <td colspan="2" class="serendipityAdminContent">
                    <div align="center">Willkommen zur Serendipity Administrationsoberfläche.<br />Bitte geben Sie die Zugangsdaten ein.</div>
                                        <br />
                                        <form action="serendipity_admin.php" method="post">
                        <input type="hidden" name="serendipity[action]" value="admin" />
                        <table cellspacing="10" cellpadding="0" border="0" align="center">
                            <tr>
                                <td>Benutzername</td>
                                <td><input type="text" name="serendipity[user]" /></td>
                            </tr>
                            <tr>
                                <td>Passwort</td>
                                <td><input type="password" name="serendipity[pass]" /></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input id="autologin" type="checkbox" name="serendipity[auto]" /><label for="autologin"> Daten speichern</label></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="right"><input type="submit" name="submit" value="Login &gt;" class="serendipityPrettyButton" /></td>
                            </tr>
                                                    </table>
                    </form>
                                        <a href="/">Zurück zum Blog</a>
                </td>
            </tr>
        </table>
        <br />
        <div id="serendipityAdminFooter">Betrieben mit Serendipity 1.0.3 und PHP 5.1.6-pl4-gentoo</div>
    </body>
</html>
