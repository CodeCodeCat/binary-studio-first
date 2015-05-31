<?php
namespace messages;

class Getting {
    function say($name) {
        echo "Hi, $name! There is a new quoute<br/> for you<br/>".RandomQuoteHelper::getQuote();
    }
}