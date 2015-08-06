<?php
/**
 *  Debug page
 */

/** @var array $TV - Template Variables */
$TV = get_defined_vars();
/** @var string $modulePath */
$modulePath = drupal_get_path('module', 'mimemail_enhancer');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="/<?php print $modulePath; ?>/debug/debug.css" />
</head>
<body>
    <h1>Mime Mail Enhancer Debug Page</h1>

    <hr />
    <h3>Your Mail("themed_body")</h3>
    <iframe id="mail-message-iframe" name="mail-message-iframe" scrolling="auto" src="">x</iframe>

    <hr />
    <h3>Your Mail Html("themed_body")</h3>
    <pre><?php print htmlentities($TV['message']['themed_body']); ?></pre>

    <hr />
    <h3>Message</h3>
    <pre><?php print htmlentities(print_r($TV['message'], true)); ?></pre>

    <script type="text/javascript">
        var mme_debug = {
            'themed_body': <?php print json_encode($TV['message']["themed_body"]); ?>
        };
    </script>
    <script type="text/javascript" src="/<?php print $modulePath; ?>/debug/debug.js"></script>
</body>
</html>
