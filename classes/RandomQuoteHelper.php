<?php
namespace messages;

class RandomQuoteHelper {
    private static $quoutes = array('Message 1', 'Message 2', 'Message 3', 'Message 4', 'Message 5',
                        'Message 6', 'Message 7', 'Message 8', 'Message 9', 'Message 10');

    public static final function getQuote() {
        return RandomQuoteHelper::$quoutes[rand(0, 9)];
    }
}