<?php

// PHP 8.4 Backwards Incompatible Changes - Descriptive Notes

// 1. E_STRICT
// The E_STRICT constant is deprecated and its error level has been removed.
// Code relying on E_STRICT for warnings should be updated.

// 2. DOM element properties
// Some properties of DOM elements are deprecated.
// Accessing them may trigger deprecation warnings and should be replaced with supported alternatives.

// 3. GMP class
// The GMP class is now final and cannot be extended.
// Custom classes cannot inherit from GMP anymore.

// 4. MBString
// Multibyte string functions now throw additional value errors
// when invalid values (like wrong encodings or invalid parameters) are passed.

// 5. PCNTL
// Process control functions (pcntl_*) now throw additional value errors
// for invalid inputs, making error handling stricter.

// 6. session.ini settings
// The ini settings session.sid_length and session.sid_bits_per_character are deprecated.
// They can safely be removed or commented out in php.ini, PHP will use default values instead.

// Full list: https://www.php.net/manual/en/migration84.incompatible.php
