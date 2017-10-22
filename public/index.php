<?php include 'header.php';?>
  <body class="container-fluid make-full">

    <!-- Header row -->
    <section class="row justify-content-center align-items-end top">
      <div class="col-6">

        <!-- Title info -->
        <h1>Connect Buddha</h1>
        <p class="lead">Connect quickly, and securely to public networks.</p>
        <hr class="my-4">
        <!-- END title info -->

        <!-- Connect icon -->
        <div class="connected">
          <i class="fa fa-spinner fa-pulse fa-fw" aria-hidden="true"></i><span class="text-warning">Connecting</span>
        </div>
        <!-- END connect icon -->

      </div>
    </section>
    <!-- END Header row -->

    <!-- Fullpage row section -->
    <section class="row justify-content-center bottom">
      <div class="col-6">

        <!-- BEGIN form area -->
        <p>Available Networks: </p>

        <form method="GET" action="setup.php">
          <div class="form-group">
            <select name="network" class="form-control">
              <?php foreach ($ids as $id): ?>
                <?php
                $id = ltrim(trim($id), "ESSID:\"");
                $id = rtrim($id, "\"");
                ?>
                <option value="<?php echo $id; ?>"><?php echo $id; ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Enter Wifi Password">
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg my-btn" role="button">
              Connect
            </button>
          </div>
        </form>
        <!-- END form -->

      </div>
    </section>


    <!-- js -->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/custom.js"></script>
  </body>
</html>
