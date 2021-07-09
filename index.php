<?php require_once 'header.php'; ?>

<div class="container">

    <div class="row">
        <table class="table table-striped">
            <tr>
                <th>No.</th>
                <th>Company</th>
                <th>Contact</th>
                <th>Country</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Germany</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Centro comercial Moctezuma</td>
                <td>Francisco Chang</td>
                <td>Mexico</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Ernst Handel</td>
                <td>Roland Mendel</td>
                <td>Austria</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Island Trading</td>
                <td>Helen Bennett</td>
                <td>UK</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Laughing Bacchus Winecellars</td>
                <td>Yoshi Tannamuri</td>
                <td>Canada</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Magazzini Alimentari Riuniti</td>
                <td>Giovanni Rovelli</td>
                <td>Italy</td>
            </tr>
        </table>

    </div><br>

    <div class="row" id="latest">
        <div class="col text-center">
            <h2>Latest Post</h2>
        </div>
    </div> <br>

    <div class="row">
        <?php for ($x = 0; $x < 9; $x++) { ?>
            <div class="col text-center">
                <img src="img/thumb.png" alt="Hello">
                <h3>Thumbnail</h3> <br>
            </div>
           
        <?php } ?>
    </div>
    <?php require_once 'footer.php'; ?>