<?php

namespace Tamhar\BelajarPhpLogger\Controller;

class ProductController
{
    function categories(string $productId, string $categoryId): void
    {
        echo "Product : $productId, Category : $categoryId";
    }
}
