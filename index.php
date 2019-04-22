

<?php
    include 'header.php';
    if(isset($_GET['submit'])){
    $name = $_GET['name'];
    $prename = $_GET['prename'];
    $gender = $_GET['select'];

  }
?>


  <div class="body">
    <br><br>
    <form method="get">

            <input type="text" name="name" placeholder="Nachname" value="<?php if (isset($_GET['submit'])) {echo $name;} ?>" />

            <input type="text" name="prename" placeholder="Vorname" value="<?php if (isset($_GET['submit'])) {echo $prename;}  ?>" />
            <select name="select">
              <option>Geschlecht</option>
              <option>Männlich</option>
              <option>Weiblich</option>
              <option>Divers</option>
            </select>

            <button id="1" name="submit" type="submit" value="submit">Anmelden</button>
    </form>

    <?php

    if (isset($_GET['submit'])) {


    switch ($gender) {
      case "Geschlecht":
        echo "Du musst ein Geschlecht wählen!";
        break;
      case 'Männlich':
         echo 'Hallo, '.$prename.' '.$name.' vom männlichem Geschlecht!';
         break;
      case 'Weiblich':
          echo 'Hallo, '.$prename.' '.$name.' vom weiblichem Geschlecht!';
          break;
      case 'Divers':
          echo 'Hallo, '.$prename.' '.$name.' vom diversen Geschlecht!';

  }
}
  echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
  echo $gender




      ?>
</div>
</div>
