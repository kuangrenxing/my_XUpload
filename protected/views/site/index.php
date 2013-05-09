<div class="page-header">
        <h1>jQuery File Upload Demo</h1>
    </div>
   
    <br>
    <?php
    $form = $this->beginWidget('CActiveForm', array(
          'id' => 'XUploadForm-form',
          'enableAjaxValidation' => false,
            //This is very important when uploading files
          'htmlOptions' => array('enctype' => 'multipart/form-data'),
        ));
      ?>   
    <div class="row">
            <?php echo $form->labelEx($model,'field1'); ?>
            <?php echo $form->textField($model,'field1'); ?>
            <?php echo $form->error($model,'field1'); ?>
    </div>
    <?php
		$this->widget('xupload.XUpload', array(
			'url' => Yii::app()->createUrl("site/upload", array("parent_id" => 1)),
			'model' => $model,
			'attribute' => 'file',
			'multiple' => true,
		));
		?>
	 <?php $this->endWidget(); ?>	
		
    <br>
    <div class="well">
        <h3>Demo Notes</h3>
        <ul>
            <li>The maximum file size for uploads in this demo is <strong>5 MB</strong> (default file size is unlimited).</li>
            <li>Only image files (<strong>JPG, GIF, PNG</strong>) are allowed in this demo (by default there is no file type restriction).</li>
            <li>Uploaded files will be deleted automatically after <strong>5 minutes</strong> (demo setting).</li>
            <li>You can <strong>drag &amp; drop</strong> files from your desktop on this webpage with Google Chrome, Mozilla Firefox and Apple Safari.</li>
            <li>Please refer to the <a href="https://github.com/blueimp/jQuery-File-Upload">project website</a> and <a href="https://github.com/blueimp/jQuery-File-Upload/wiki">documentation</a> for more information.</li>
            <li>Built with Twitter's <a href="http://twitter.github.com/bootstrap/">Bootstrap</a> toolkit and Icons from <a href="http://glyphicons.com/">Glyphicons</a>.</li>
        </ul>
    </div>