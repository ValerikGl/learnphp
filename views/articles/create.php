<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <form action="/articles" method="POST">
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input name="title" type="title" class="form-control" id="title" placeholder="Title">
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea 
        name="body" 
        class="form-control" 
        id="body" rows="3" 
        placeholder="Write something cool..."></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
    </form>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>