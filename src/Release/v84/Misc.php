<?php

// JIT changes ------------------------------------
/**
 * What it is: JIT (Just-In-Time) is a performance booster that turns parts of your PHP code into "machine code" (language the CPU speaks directly) so it runs much faster. In PHP 8.4, the way you turn it on has changed, and the engine under the hood has been completely rebuilt to be faster and more stable.
 *
 * Old Version: JIT was "off" because the memory buffer was set to 0. To turn it on, you just had to give it some memory (e.g., opcache.jit_buffer_size=64M).
 *
 * PHP 8.4 (New): JIT is now "off" because the setting itself is set to disable. To turn it on, you must explicitly set opcache.jit=tracing.
 */

/**
 * The "How to Turn it On" Comparison
 * Think of JIT like a turbocharger in a car.
 *
 * Old Way (PHP 8.3 and below):
 *
 * The turbo is "Ready," but there is no fuel.
 *
 * opcache.jit=tracing (Ready)
 *
 * opcache.jit_buffer_size=0 (No fuel/memory)
 *
 * Result: JIT is OFF. You turn it ON by just adding "fuel" (memory).
 *
 * New Way (PHP 8.4):
 *
 * The turbo has fuel, but the "On/Off" switch is set to "Disable."
 *
 * opcache.jit_buffer_size=64M (Fuel is there)
 *
 * opcache.jit=disable (Switch is OFF)
 *
 * Result: JIT is OFF. You turn it ON by flipping the switch to tracing.
 */

