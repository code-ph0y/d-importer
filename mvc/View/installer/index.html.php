<div class="row">
    <div class="col-6">
        <h4>Data Importer Installer</h4>
    </div>
    <div class="col-6 pull-right text-right">
        <h4>Database Configuration</h4>
    </div>
</div>

<form class="installer-form" action="<?php echo $view->baseUrl() . 'installer/save'; ?>" method="post">
    <?php if (!empty($flashMsg)) : ?>
        <?php $flashMsgMap = array('error' => 'danger', 'success' => 'success', 'info' => 'info', 'warning' => 'warning'); ?>

        <div class="alert alert-<?php echo (!empty($flashMsg['type'])) ? $flashMsgMap[$flashMsg['type']] : 'success'; ?>" role="alert">
            <?php echo implode("<br>", $flashMsg['message']); ?>
        </div>
    <?php endif; ?>

    <div class="form-group">
        <label for="exampleInputEmail1">Driver</label>
        <select  class="form-control" name="driver" readonly>
            <option selected="selected" value="pdo_mysql">MySQL</option>
        </select>
    </div>

    <div class="form-group">
        <label for="installerInputHost">Host</label>
        <input name="host" type="text" class="form-control" id="installerInputHost" aria-describedby="hostHelp" placeholder="Enter Host" value="<?php echo (!empty($host)) ? $host : 'localhost'; ?>" >
    </div>

    <div class="form-group">
        <label for="installerInputUser">User</label>
        <input name="user" type="text" class="form-control" id="installerInputUser" aria-describedby="userHelp" placeholder="Enter User" value="<?php echo (!empty($user)) ? $user : 'root'; ?>">
    </div>

    <div class="form-group">
        <label for="installerInputPassword">Password</label>
        <input name="password" type="text" class="form-control" id="installerInputPassword" aria-describedby="passwordHelp" placeholder="Enter Password" value="<?php echo (!empty($password)) ? $password : 'password'; ?>">
    </div>

    <div class="form-group">
        <label for="installerInputDbName">Database Name</label>
        <input name="dbname" type="text" class="form-control" id="installerInputDbName" aria-describedby="dbNameHelp" placeholder="Enter Database Name" value="<?php echo (!empty($dbname)) ? $dbname : 'data_importer'; ?>">
    </div>

    <button type="submit" class="btn btn-primary">Create Database</button>
</form>
