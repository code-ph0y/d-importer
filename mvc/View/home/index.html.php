

    <div class="row">
        <div class="col-6">
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

        <div class="col-6 split">
            <div class="form-group" id="input-tpl">
                <label for="inputTemplate">Input Template</label>
                <textarea class="form-control" id="inputTemplate"></textarea>
            </div>

            <div class="form-group" id="output-result">
                <label for="outputResult">Output</label>
                <textarea class="form-control" id="outputResult"></textarea>
            </div>
        </div>
    </div>
