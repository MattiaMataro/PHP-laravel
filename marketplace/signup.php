<?php
    session_start();

    require_once 'vendor/autoload.php';

    use Andrea\Marketplace\Services\UserService;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $userService = new UserService();
        $userService->signup($_POST['email'], $_POST['password'], $_POST['name']);

        header('Location: /index.php');
        return;
    }

    require_once 'header.php';
?>

<h1>Signup</h1>
<form method="POST">
<div class="form-group">
        <label for="">Email</label>
        <input type="email" class="form-control" name="email">
    </div>
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input type="password" class="form-control" name="password">
    </div>
    <div class="form-group">
        <label for="">Password Confirm</label>
        <input type="password" class="form-control" name="password-confirm">
    </div>
    <div class="row">
        <div class="col-lg-12">
            <button class="btn btn-primary">Signup</button>
        </div>
    </div>
</form>

<?php
    require_once 'footer.php';