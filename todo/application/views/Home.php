<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url("/assets/css/switchery.min.css") ?>" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="<?php echo base_url("/assets/js/switchery.min.js") ?>"></script>
    <script src="<?php echo base_url("/assets/js/custom.js") ?>"></script>
  </head>
  <body>

    <div class="container">
      <h3 class="text-center">TODO List</h3>

      <div class="row">
        <div class="col-md-12">
          <form class="" action="<?php echo base_url("todoController/insert") ?>" method="post">
            <div class="row">


            <div class="form-group col-md-11">
              <input class="form-control" type="text" name="title" value="">
            </div>
            <div class="col-md-1">
                  <button class="btn btn-primary" type="submit" name="button">Kaydet </button>
            </div>

          </form>
        </div>

      </div>

    </div>



    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered table-hover table-striped">
          <thead>
            <th class="tex-center">Açıklama</th>
            <th class="text-center">Durum</th>
            <th class="text-center">Sil</th>
          </thead>
          <?php

            foreach ($rows as $row ) { ?>
              <tr>
                <td><?php echo $row->title ?></td>
                  <td style="width:100px";><input type="checkbox" data-url="<?php echo base_url("/todocontroller/iscompletedsetter/$row->id") ?>"
                     class="js-switch" <?php echo ($row->isCompleted)? "checked": "" ?> /></td>
                    <td style="width:100px";><a href="<?php echo base_url("/todoController/delete/$row->id") ?>" class="btn btn-danger">Sil</a></td>
              </tr>
          <?php } ?>




        </table>

      </div>

    </div>

  </body>
</html>
