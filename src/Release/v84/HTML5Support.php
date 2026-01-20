<?php

/**
 * What it is: PHP finally has a modern way to read and understand HTML5. Before this, PHP used an old tool (libxml2) that was built for XML and HTML4, which caused it to get confused by modern tags like <section>, <article>, or <video>.
 *
 * Old Version: You used DOMDocument. It often threw warnings or broke when it saw modern HTML5 tags. You also had to use complex "XPath" queries to find elements.
 *
 * PHP 8.4 (New): You use the new Dom\HTMLDocument class. It understands modern HTML5 perfectly and—best of all—supports CSS Selectors (just like JavaScript).
 */

// --- OLD WAY (Pre-8.4) ---
$dom = new DOMDocument();
@$dom->loadHTML('<section class="hero"><h1>Hello</h1></section>'); // '@' to hide warnings
$xpath = new DOMXPath($dom);
$title = $xpath->query("//section[@class='hero']/h1")->item(0)->textContent;

// --- PHP 8.4 WAY ---
// 1. Use the new class (it handles HTML5 natively)
$dom = Dom\HTMLDocument::createFromString('<section class="hero"><h1>Hello</h1></section>');

// 2. Use CSS selectors (much easier!)
$title = $dom->querySelector('section.hero h1')->textContent;

echo $title; // Output: Hello

