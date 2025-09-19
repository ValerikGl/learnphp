
<?php include __DIR__ . '/partials/header.php'; ?>
    <main class="container">
      <?php if (isset($_GET['name']) && isset($_GET['age'])): ?>
      <h1>Hello <?-$GET['name']?> you are <?-$GET['age']?> years old </h1>
      <?php endif; ?>
      <form action="/answer" method="POST">
        <input name="name" placeholder="Name" />
         <input name="age" placeholder="Age" />
        <input type="submit" />
        <button>Saada</button>
      </form>
    </main>
<?php include __DIR__ . '/partials/footer.php'; ?>