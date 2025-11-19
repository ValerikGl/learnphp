<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <form action="/users/update?id=<?= $user->id ?>" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input 
                value="<?= $user->email ?>" 
                name="email" 
                type="email" 
                class="form-control" 
                id="email" 
                placeholder="Email">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">New Password</label>
            <input 
                name="password" 
                type="password" 
                class="form-control" 
                id="password" 
                placeholder="Enter new password">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
