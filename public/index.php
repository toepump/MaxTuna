<?php include 'header.php';?>
<body>
    <div class="connected">
      <span class="text-error">Not Connected</span>
    </div>
    <div class="jumbotron">
        <h1 class="display-3">MaxTuna</h1>
        <p class="lead">Connect quickly, and securely to your public networks.</p>
        <hr class="my-4">
        <p>Available Network: </p>
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
                <button type="submit" class="btn btn-primary btn-lg" role="button">
                    Connect
                </a>
            </div>
        </form>
    </div>

    <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
    </div>

    <div style = "background-color: #BBE1E5;" class="jumbotron">
        <h1 class="display-3">Connected Users:</h1>
        <p class="lead">Connect quickly, and securely to your public networks.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="btn-group">
            <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Learn more
            </button>
            <select class="dropdown-menu">
                <?php foreach ($ids as $id): ?>
                    <?php
                    $id = ltrim(trim($id), "ESSID:\"");
                    $id = rtrim($id, "\"");
                    ?>
                    <option class="dropdown-item" value="<?php echo $id; ?>"><?php echo $id; ?></option>
                <?php endforeach; ?>
            </select>
        </p>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/custom.js"></script>
</body>
</html>
