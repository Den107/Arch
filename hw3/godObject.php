<?php

/**
 * Здесь код с первого курса php, это что-то вроде божественного класса, здесь очень много фунций и логики направленных на разные части проекта, решение: либо ООП, либо разбить все по разным папкам-модулям в зависимости от зоны ответственности
 */

//auth
function authByUserId(int $userId): bool
{
    $_SESSION['user_id'] = $userId;
    return true;
}

function getCurrentUser(): ?array
{
    if ($userId = $_SESSION['user_id']) {
        return getUserById($userId);
    }
    return null;
}

//base
function redirect(string $url)
{
    header("Location: {$url}");
    exit();
}
function redirectToReferer()
{
    redirect($_SERVER['HTTP_REFERER']);
}

function getHash(string $string): string
{
    $salt1 = 'trgf746';
    $salt2 = 'p58fbnn28';
    return md5($salt1 . $string . $salt2);
}
//products
function getProducts()
{
    $sql = "SELECT * FROM products";
    return queryAll($sql);
}
function getProductById(int $id): array
{
    return queryOne("SELECT * FROM products WHERE id = {$id}");
}
function createProduct(
    string $title,
    string $description,
    float $price
) {
    $sql = "INSERT INTO products (title, description, price)
            VALUES ('{$title}','{$description}','{$price}')";
    execute($sql);
    return getLastInsertId();
}
function updateProductById(
    int $id,
    string $title = null,
    string $description = null,
    float $price = null
) {
    $updateSection = [];

    if (!is_null($title)) {
        $updateSection[] = "title = '{$title}'";
    }

    if (!is_null($description)) {
        $updateSection[] = "description = '{$description}'";
    }

    if (!is_null($price)) {
        $updateSection[] = "price = {$price}";
    }

    if (!empty($updateSection)) {
        $updateSection = implode(", ", $updateSection);
        return execute("UPDATE products SET {$updateSection} WHERE id = {$id}");
    }
    return null;
}
function deleteProduct(int $productId)
{
    return execute("DELETE FROM products WHERE id = {$productId}");
}
//user
function getUserByLoginAndPassword(string $login, string $password)
{
    $sql = "SELECT * FROM users WHERE login = '{$login}' AND password = '{$password}'";
    return queryOne($sql);
}
function getUserById(int $id)
{
    return queryOne("SELECT * FROM users WHERE id = {$id}");
}
function createUser(string $login, string $passwordHash): ?int
{
    $sql = "INSERT INTO users (login, password) VALUES ('{$login}','{$passwordHash}')";
    if (execute($sql)) {
        return getLastInsertId();
    }
    return null;
}
//gallery
function getGalleryImages()
{
    return queryAll("SELECT * FROM gallery");
}

function getImageById(int $id)
{
    return queryOne("SELECT * FROM gallery WHERE id={$id}");
}

function createImage(string $path, string $description)
{
    $sql = "INSERT INTO gallery (path, description) VALUES ('{$path}', '{$description}')";
    execute($sql);
}
