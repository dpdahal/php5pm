<?php

//$data =[
//    ["Ram", "Sita", "Gita","Hair"],
//    ["Madan", "Gopal", "Rita","Kabita"],
//    ["Sirjana", "Laxmi", "Diyan","Shyam"]
//];
//
//for ($x=0;$x<count($data);$x++){
//    for ($i=0;$i<count($data[$x]);$i++){
//        echo $data[$x][$i];
//    }
//    echo "<hr>";
//}

//echo $data[2][1];
//echo "<pre>";
//print_r($data);

//echo count($data);


//for($x=0;$x<count($data);$x++){
//    echo $data[$x];
//    echo "<hr>";
//}

//var_dump($data);

//echo $data[0];


//echo gettype($data);

//echo "<pre>";
//print_r($data);


//$users = [
//    ['name' => 'ram', 'age' => 19, 'phone' => 98876],
//    ['name' => 'rama', 'age' => 20, 'phone' => 98876],
//    ['name' => 'rita', 'age' => 21, 'phone' => 98876]
//
//];
//
//
//foreach ($users as $user){
//  echo $user['name'];
//
//}

//echo $users['name'];
//var_dump($users);


$students = [
    ['name' => 'ram', 'address' => 'kathmandu', 'status' => 0, 'phone' => 986987],
    ['name' => 'hari', 'address' => 'pokhara', 'status' => 1, 'phone' => 987687],
    ['name' => 'kabita', 'address' => 'dharan', 'status' => 0, 'phone' => 987697],
    ['name' => 'sophia', 'address' => 'kaski', 'status' => 1, 'phone' => 987698],
    ['name' => 'gopal', 'address' => 'abc', 'status' => 0, 'phone' => 876987],
];


?>

<table width="100%" border="1">
    <thead>
    <tr>
        <th>S.n</th>
        <th>Name</th>
        <th>Address</th>
        <th>Status</th>
        <th>Phone</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($students as $key => $student) { ?>
        <tr>
            <td><?= ++$key; ?></td>
            <td><?= $student['name'] ?></td>
            <td><?= $student['address'] ?></td>
            <td>
                <?php if ($student['status'] == 1) : ?>
                <button style="background: green;color: white;">Online</button>
                <?php else: ?>
                <button style="background: red;color: white;">Offline</button>

                <?php endif; ?>
            </td>
            <td><?= $student['phone'] ?></td>

        </tr>
    <?php }; ?>
    </tbody>
</table>
