<div class="row split">
    <div id="data-view">
        <div class="form-group">
            <label for="data-file">Select Data File</label>
            <select class="form-control" id="data-file" name="data_file">
                <option value="">Select File</option>
                <?php foreach ($files as $file) : ?>
                    <option value="<?php echo $file; ?>"><?php echo $file; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <div id="table-data"></div>
        </div>
    </div>

    <div id="template-view">
        <div class="form-group" id="input-tpl-panel">
            <label for="input-template">Input Template</label>
            <textarea class="form-control" id="input-template"></textarea>
        </div>

        <div class="form-group" id="output-result-panel">
            <label for="output-result">Results</label>
            <textarea class="form-control" id="output-result"></textarea>
        </div>
    </div>
</div>
