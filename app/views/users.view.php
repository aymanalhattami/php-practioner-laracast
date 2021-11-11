<?php require('partials/header.php') ?>

<h1>Users page</h1>

<h2>Submit your Name</h2>

<?php foreach ($users as $user) { ?>
    <ul>
        <li><?php echo $user->name ?></li>
    </ul>
<?php } ?>

<form method="POST" action="/users">
    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>

<?php require('partials/footer.php') ?>