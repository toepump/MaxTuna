<?php include 'header.php';?>
<body>
    <pre>
        <?php
        echo var_export($ids, 42);
        ?>
    </pre>
    <div class="jumbotron">
        <h1 class="display-3">MaxTuna</h1>
        <p class="lead">Connect quickly, and securely to your public networks.</p>
        <hr class="my-4">
        <p>Current Network: </p>
        <form>
            <div class="form-group">
                <select class="form-control">
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
                <button type="submit" class="btn btn-primary btn-lg" href="#" role="button">
                    Select Network
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

                <?php foreach ($ids as $id): ?>
                    <?php
                    $id = ltrim(trim($id), "ESSID:\"");
                    $id = rtrim($id, "\"");
                    ?>
                    <option class="dropdown-item" value="<?php echo $id; ?>"><?php echo $id; ?></option>
                <?php endforeach; ?>
            
        </p>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
