<?php
use Magento\Framework\App\Bootstrap;
require __DIR__ . '/app/bootstrap.php';

$params = $_SERVER;
$bootstrap = Bootstrap::create(BP, $params);

$objectManager = $bootstrap->getObjectManager();
$productFactory = $objectManager->create('\Magento\Catalog\Model\ProductFactory');

// Create a new product
$product = $productFactory->create();
$product->setSku('witcher3');
$product->setName('The Witcher 3: Wild Hunt GOTY Edition');
$product->setTypeId('simple');
$product->setAttributeSetId(4);
$product->setPrice(59.99);
$product->setWebsiteIds([1]); 


$product->setCategoryIds([5]); 
$product->setDescription('Description of the game');
$product->setShortDescription('Short description');
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

// Set custom attributes
$product->setCustomAttribute('developer', 'CD PROJEKT RED');
$product->setCustomAttribute('language', 'PL');
$product->setCustomAttribute('type', 'RPG');

// Save the product
$productRepository = $objectManager->create('\Magento\Catalog\Api\ProductRepositoryInterface');
$productRepository->save($product);

echo "Product created successfully.";
