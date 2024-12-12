<?php
include 'db.php';

echo '<pre>';
print_r($_POST);
echo '</pre>';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $names = isset($_POST['names']) ? $_POST['names'] : null;
    $surnames = isset($_POST['surnames']) ? $_POST['surnames'] : null;
    $email = isset($_POST['emailCreate']) ? $_POST['emailCreate'] : null;
    $password = isset($_POST['passwordCreate']) ? $_POST['passwordCreate'] : null;

    if ($names && $surnames && $email && $password) {
        $passwordHash = password_hash($password, PASSWORD_BCRYPT);

        try {
            $stmt = $pdo->prepare("INSERT INTO users (names, surnames, email, password) VALUES (:names, :surnames, :email, :password)");
            $stmt->execute([
                'names' => $names,
                'surnames' => $surnames,
                'email' => $email,
                'password' => $passwordHash
            ]);
            echo "Registration successful!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "Error: All fields are required.";
    }
} else {
    echo "Invalid request.";
}
?>
