<?php
use Magento\Framework\App\Bootstrap;
require __DIR__ . '/app/bootstrap.php';

$params = $_SERVER;
$bootstrap = Bootstrap::create(BP, $params);

$objectManager = $bootstrap->getObjectManager();
$productFactory = $objectManager->create('\Magento\Catalog\Model\ProductFactory');

// Funkcja do tworzenia produktu
function createProduct($productFactory, $sku, $name, $price, $description, $shortDescription, $categoryIds)
{
    $product = $productFactory->create();
    $product->setSku($sku);
    $product->setName($name);
    $product->setTypeId('simple');
    $product->setAttributeSetId(4);
    $product->setPrice($price);
    $product->setWebsiteIds([1]);
    $product->setCategoryIds($categoryIds);
    $product->setDescription($description);
    $product->setShortDescription($shortDescription);
    $product->setCountryOfManufacture('PL');
    $product->setWeight(0.5);
    $product->setStatus(\Magento\Catalog\Model\Product\Attribute\Source\Status::STATUS_ENABLED);
    $product->setVisibility(\Magento\Catalog\Model\Product\Visibility::VISIBILITY_BOTH);
    $product->setTaxClassId(0);
    $product->setStockData([
        'use_config_manage_stock' => 0,
        'manage_stock' => 1,
        'is_in_stock' => 1,
        'qty' => 10
    ]);

    return $product;
}

// Tworzenie gier
$games = [
    [
        'sku' => 'witcher3',
        'name' => 'The Witcher 3: Wild Hunt GOTY Edition',
        'price' => 59.99,
        'description' => 'Description of The Witcher 3',
        'short_description' => 'Short description of The Witcher 3',
        'category_ids' => [5]
    ],
    [
        'sku' => 'gta5',
        'name' => 'Grand Theft Auto V',
        'price' => 49.99,
        'description' => 'Description of Grand Theft Auto V',
        'short_description' => 'Short description of Grand Theft Auto V',
        'category_ids' => [5]
    ],
    [
        'sku' => 'cyberpunk2077',
        'name' => 'Cyberpunk 2077',
        'price' => 69.99,
        'description' => 'Description of Cyberpunk 2077',
        'short_description' => 'Short description of Cyberpunk 2077',
        'category_ids' => [5]
    ],
    [
        'sku' => 'minecraft',
        'name' => 'Minecraft',
        'price' => 29.99,
        'description' => 'Description of Minecraft',
        'short_description' => 'Short description of Minecraft',
        'category_ids' => [5]
    ],
    [
        'sku' => 'fallout4',
        'name' => 'Fallout 4',
        'price' => 39.99,
        'description' => 'Description of Fallout 4',
        'short_description' => 'Short description of Fallout 4',
        'category_ids' => [5]
    ]
];

try {
    foreach ($games as $game) {
        $product = createProduct(
            $productFactory,
            $game['sku'],
            $game['name'],
            $game['price'],
            $game['description'],
            $game['short_description'],
            $game['category_ids']
        );

        $productRepository = $objectManager->create('\Magento\Catalog\Api\ProductRepositoryInterface');
        $productRepository->save($product);

        echo "Product '{$game['name']}' created successfully.<br>";
    }
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}