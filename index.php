<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tutorial Thing</title>
</head>
<body>
    <?php
        include('Classes/Warehouse.php');
        include('db_link/db_conn.php');
        include('db_link/debug_header.php');


        // create a warehouse instance
        $warehouse = new Warehouse(
                '1',
                'test',
                '1',
                '1',
                ['1','2','3']);

        $warehouse->toString();
    ?>
</body>
</html>