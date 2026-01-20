<?php
/**
 * 📌 What It Is (Short Description)
 *
 * A first‑class PHP attribute: #[Deprecated]
 *
 * Purpose: Mark userland functions, methods, or class constants as deprecated so PHP emits an E_USER_DEPRECATED warning when they’re used.
 *
 * Before PHP 8.4, you had to emulate deprecation with comments + trigger_error(), which didn’t integrate with reflection.
 */


// ======================
// OLD WAY (pre‑8.4)
// ======================

// Mark with doc comment (PHP does NOT emit a warning itself)
class UserManager
{
    /**
     * @deprecated Use send() instead
     */
    public function sendMessage()
    {
        // manually trigger warning
        trigger_error("sendMessage() is deprecated, use send()", E_USER_DEPRECATED);
    }

    public function send()
    {
        echo "Sending...\n";
    }
}

$u = new UserManager;
$u->sendMessage(); // prints warning because we triggered it manually

// ======================
// NEW WAY (PHP 8.4+)
// ======================

class NewsletterManager
{
    #[\Deprecated(message: "Use send() instead", since: "1.2")]
    public function sendMessage()
    {
        // no trigger_error needed
    }

    public function send()
    {
        echo "Sending...\n";
    }
}

$nm = new NewsletterManager;
$nm->sendMessage(); // PHP emits E_USER_DEPRECATED automatically

