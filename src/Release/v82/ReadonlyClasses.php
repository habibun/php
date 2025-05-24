<?php

namespace Php\Release\v82;

readonly class Post
{
    public function __construct(
        public string $title,
        public Author $author,
        public string $body,
        public DateTime $publishedAt,
    ) {}
}
