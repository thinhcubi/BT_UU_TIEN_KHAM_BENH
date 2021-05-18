
<?php
include_once "Patient.php";
include_once "Queue.php";

$queue = new Queue();
$queueTest = $queue->enqueue(new Patient(2,"CuBi"));
$queueTest = $queue->enqueue(new Patient(1,"Ivan"));
$queueTest = $queue->enqueue(new Patient(4,"Ruby"));
$queueTest = $queue->enqueue(new Patient(3,"Linda"));

$queueTest = $queue->enqueue(new Patient(5,"ICU"));
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<h1>Ưu Tiên Khám Bệnh</h1>
<body>

<h2>Benh nhan dang kham</h2>
<?php echo $queue->dequeue() ?>
<?php //echo $queue->dequeue()."<br>" ?>
<?php ////echo $queue->dequeue(); ?>
<table>
    <h2>Danh sach benh nhan </h2>
    <tr>
        <th>Ten benh nhan</th>
        <th>Muc do uu tien</th>
    </tr>
    <?php foreach ($queue->get() as $key => $item ): ?>
    <tr>
        <td><?php echo $key;?></td>
        <td><?php echo $item;?></td>
    </tr>
    <?php endforeach;?>
</table>



</body>
</html>
