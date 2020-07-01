<section class="container">

    <section class="row pt-5">

        <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Name User</th>
            <th scope="col">LastName</th>
            <th scope="col">Product</th>
            <th scope="col">Price</th>
            <th scope="col">Pais</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($row as $key) { ?>
                <tr>
                <th scope="row"> <?php echo $key['id']; ?> </th>
                <td> <?php echo $key['nameUser']; ?> </td>
                <td> <?php echo $key['lastName']; ?> </td>
                <td> <?php echo $key['product']; ?> </td>
                <td> <?php echo $key['price']; ?> </td>
                <td> <?php echo $key['pais']; ?> </td>
                </tr>
            <?php }?>
        </tbody>
        </table>

    </section>


</section>
