
<?php
Session::init();
if (isset($this->details)) {
    $detail = $this->details;
}
if (isset($this->attachment)) {
    $attached = $this->attachment;
}
?>
<div id="main-content" style=" margin-top: 14%;">           
    <div class="title bg-primary" style="padding: 5px; margin-top: 5px; text-align: center"><h1>Add to Cloud Information</h1></div>
    <form enctype="multipart/form-data" id="post_edit">
        <div class="form-group">
            <label for="title" class="label"><h3>Book Label</h3></label>
            <input type="text" class="form-control" id="title" placeholder="Title" value="<?php echo $detail[0]["title"]; ?>">
        </div>
        <div class="form-group">
            <label for="title" class="label"><h3>User Class</h3></label>
            <input type="text" class="form-control" id="category" placeholder="Category" list="catlist" value="<?php echo $detail[0]["cat"]; ?>">
        </div>
        <div class="form-group">
            <label for="description" class= "label"><h3>Content</h3></label>
            <textarea class="form-control"  id="description"rows="3"><?php echo $detail[0]["content"]; ?></textarea>
        </div>
        <input type="hidden" class="form-control" id="id" value="<?php echo $detail[0]["id"]; ?>">
   <?php
                    $ind = 0;
                    foreach ($attached as $key1 => $value1) {
                        
                            ?>
                            <div class="col-md-3 col-sm-6 ">
                                <div class="class_item" attach_id="<?php echo $value1["id"]; ?>" style="height: 160px;padding: 1px;overflow: hidden">
                                    <i class="fa fa-save"> document: <?php echo ++$ind; ?></i>
                                    <?php
                                    $data = file_get_contents(URL . "picture/" . $value1["name"]);
                                    if (strpos($data, "end") > -1) {
                                        $data = explode("data", $data);
                                        $data = $data[1];
                                        $data = explode("end", $data);
                                        $data = $data[0];
                                        $data = "data" . $data . "end";
                                    }

                                    $data2 = file_get_contents(URL . "public/.uploads/" . $data);
                                    $address = URL . "public/.uploads/$data";
                                    ?>

                                    <object data="<?php echo $address; ?>"  width="100%" height="100%" style="overflow: hidden">
                                        <p><a href="<?php echo URL . "public/.uploads/" . $data ?>"></a></p>
                                    </object>

                                </div>
                                <div class="file-actions" style="  margin-top: 0; background-color: rgba(255,255,255,0.7);margin-left: 10px;">
                                    <div class="file-footer-buttons">
                                        <div class="kv-file-remove btn btn-xs btn-default" title="Delete file"><a href="<?php echo "http://localhost/ElibraryGA/dashboard/delete/file"; ?>"  file_id="<?php echo $value1["id"]; ?>" class="delete"  ><i class="glyphicon glyphicon-trash text-danger"></a></i></div>
                                    </div>
                                    <div class="file-upload-indicator" title="Download File"><a href="<?php echo URL . "public/.uploads/" . $data ?>" target="__blank" class="download" download><i class="glyphicon glyphicon-hand-down text-warning"></i></a></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <?php
                       
                    }
                    ?>
        <div class="clearfix"></div>
        <div class="form-group">
             <input id="file-1" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="1" data-max-file-count="20">
        </div>
        <div class="alert alert-success" style="display: none"> Your Information has been saved successfully <span class="close">x</span></div>
<?php if($this->attachment=="1"){?>        
		<button type="button" class="btn btn-default btn-lg col-md-12  btn-primary" id="saveedit">Save</button>
<?php }?>      
		<button type="submit" class="btn btn-default btn-lg col-md-12  btn-success">Submit</button>
    </form>
</div>

<datalist id="catlist">
    <?php
    foreach ($this->cat as $key => $value) {
        echo " <option value='{$value['name']}'>{$value['name']}</option>";
    }
    ?>

</datalist>
<script src='<?php echo URL ?>views/dashboard/js/script.js'></script>
