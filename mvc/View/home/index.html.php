
<div>
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="inputTemplate">Input Template</label>
                <textarea class="form-control" id="inputTemplate" rows="5"></textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-8">
            <select id="selectfile" multiple>
                 <?php foreach ($files as $file) : ?>
                    <option value="<?php echo $file; ?>"><?php echo $file; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="col-8">
            <div id="table-data"></div>
        </div>
    </div>
</div>
