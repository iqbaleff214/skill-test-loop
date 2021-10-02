<?php include 'Loop.php'; ?>

<form action="" method="get">
    <label for="iteration">Enter iteration value</label>
    <input type="number" min="1" id="iteration" name="iteration" value="<?= isset($_GET['iteration']) ? $_GET['iteration'] : '' ?>" placeholder="Iteration Value">
    <button type="submit">Submit</button>
</form>

<?php

    if (isset($_GET['iteration'])) {

        $iteration = $_GET['iteration'];

        $loop = new Loop(intval($iteration));
        $loop->printLoop();
    }