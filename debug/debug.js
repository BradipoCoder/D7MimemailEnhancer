(function() {
    /**
     * Injecting message body into iframe
     */
    var msgIframe = document.getElementById("mail-message-iframe");
    msgIframe.contentWindow.document.write(mme_debug["themed_body"]);
})();