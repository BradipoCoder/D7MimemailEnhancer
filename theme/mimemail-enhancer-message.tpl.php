<?php
/**
 *  Table Structured default template
 */
$TV = get_defined_vars();
?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>
  <body <?php if (isset($TV["module"]) && isset($TV["key"])): print 'class="'. $TV["module"] .'-'. $TV["key"] .'"'; endif; ?>>
    <div id="center">
      <div id="main">
        <div class="header">
          <div class="teaser">
            [site:name] - [site:slogan]
          </div>
          <div class="send-date">
            [current-date:long]
          </div>
        </div>
        <table class="structure" cellspacing="0" cellpadding="0">
          <tbody>
          <tr class="top">
            <td class="left">
              &nbsp;
            </td>
            <td class="center">
              &nbsp;
            </td>
            <td class="right">
              &nbsp;
            </td>
          </tr>
          <tr class="middle">
            <td class="left">
              &nbsp;
            </td>
            <td class="center">
              <div class="content">
                <h1 class="title"><?php print $TV["message"]["subject"]; ?></h1>
                <div class="body">
                  <?php print $TV["message"]["body"]; ?>
                </div>
              </div>
            </td>
            <td class="right">
              &nbsp;
            </td>
          </tr>
          <tr class="bottom">
            <td class="left">
              &nbsp;
            </td>
            <td class="center">
              &nbsp;
            </td>
            <td class="right">
              &nbsp;
            </td>
          </tbody>
        </table>
        <div class="footer">
          <div class="info">
            [site:name] | <a href="[site:url]">[site:url]</a> | <a href="mailto:[site:mail]">[site:mail]</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
