<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/save" method="post">
            <label>UPC</label>
            <input type="text" name="upc" placeholder = "upc">
            <br><br>
            <label>name</label>
            <input type="text" name="name" placeholder = "name">
            <br><br>
            <label>quantity</label>
            <input type="text" name="quantity" placeholder = "quantity">
            <br><br>
            <label>price</label>
            <input type="text" name="price" placeholder = "price">
            <br><br>
            <label>expiry_date</label>
            <input type="date" name="expiry_date">
            <br><br>
            <label>created_at</label>
            <input type="date" name="created_at">
            <br><br>
            <input type= "submit" value="Save">
    </form>
    <h3>Drinks</h3>
    <table border = "1">
        <tr>
            <th>UPC</th>
            <th>name</th>
            <th>quantity</th>
            <th>price</th>
            <th>expiry_date</th>
            <th>created_at</th>
            <th>Action</th>
        </tr>
          <?php foreach ($product as $pr => $value): ?>
          <tr>
            <td><?= $value['UPC'] ?></td>
            <td><?= $value['name'] ?></td>
            <td><?= $value['quantity'] ?></td>
            <td><?= $value['price'] ?></td>
            <td><?= $value['expiry_date'] ?></td>
            <td><?= $value['created_at'] ?></td>
            <td><a href= "/delete/<? = $pr['id']?>">Delete</a></td>
          </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>