# jb-action-rest

Copyright (C) 2019-2021 Jeffrey Bostoen

[![License](https://img.shields.io/github/license/jbostoen/iTop-custom-extensions)](https://github.com/jbostoen/iTop-custom-extensions/blob/master/license.md)
[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.me/jbostoen)
🍻 ☕

Need assistance with iTop or one of its extensions?  
Need custom development?  
Please get in touch to discuss the terms: **info@jeffreybostoen.be** / https://jeffreybostoen.be

## Deprecated

Mind that this is no longer being developed since Combodo now has its own Webhook integration available.

* [GitHub: Combodo/combodo-webhook-integration](https://github.com/Combodo/combodo-webhook-integration)
* [iTop Hub: Webhook integration](https://store.itophub.io/en_US/products/combodo-webhook-integration)


## What?

Adds a REST action, to which you can link a trigger.
A conceptual extension. Get in touch to discuss integrations with other software, preferably using an API.


## Cookbook

PHP
* how to implement a custom Notification that can be triggered (= the action to be executed)
* how to implement a custom EventNotification

## Short write-up

**Triggers** are activated with **context** information.  
This context information is then passed to **actions**.
Usually an **event** is logged when an **action** is triggered.

This is mainly a concept of a webhook, without much polishment.


