<?php
namespace Baniwal\Recipes\Api\Data;

interface GridInterface
{
    const ID = 'id';
    const NAME = 'name';
    const CUSTOMER_EMAIL = 'customer_email';
    const MESSAGE = 'message';
    const DIRECTIONS = 'directions';
    const PRODUCT_SKU = 'product_sku';
    const APPROVED = 'approved';
    const IMAGE = 'image';

    public function getId();

    public function setId($id);

    public function getName();

    public function setName($name);

    public function getCustomerEmail();

    public function setCustomerEmail($customer_email);

    public function getMessage();

    public function setMessage($message);

    public function getDirections();

    public function setDirections($directions);

    public function getProductSku();

    public function setProductSku($product_sku);

    public function getApproved();

    public function setApproved($approved);

    public function getImage();

    public function setImage($image);
}
